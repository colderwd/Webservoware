<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <title>ServoWare界面</title>
    <script type="text/javascript">
 		function onClickReadData() { 			
	        var addr = document.getElementById("addr");
	        var dataLen = document.getElementById("dataLength");            
	        receiver_socket.send("readData,"+addr.value+","+dataLen.value);
	        addr.focus();
	    }
 		function onClickReadTrace() { 			          
	        receiver_socket.send("readTrace,");
	        addr.focus();
	        ctx.clearRect(0,0,c.width,c.height);
	    }
    </script>
</head>
<body>    
	<p>&nbsp;</p>
	<table border="2" align="center" frame="hsides" rules="none">
		<tr>
			<th width="200">				
				<font color="red">调试分析内存*
			</th>
			<th width="200">
				<a href="index.php">系统参数设置*</a>
			</font></th>
			<th width="200">
				<a href="readRam.php">系统特性测试*</a>
			</th>
		</tr>
	</table>
	<p>&nbsp;</p>
	<fieldset style="width:50%; height:30%; margin:0px auto"> <legend>动态特性曲线</legend>
		<canvas id="myCanvas" width="690" height="180" style="border:solid 1px #CCC;">
			您的浏览器不支持canvas，建议使用最新版的Chrome
		</canvas>
	</fieldset>	
	<p></p>
	<fieldset style="width:50%; margin:0px auto"> <legend>原始数据</legend>
		<textarea rows="10" cols="100" id=txtarea>内存数据</textarea>
	</fieldset>	
	<br>
    <fieldset style="width:600; margin:0px auto"> <legend>命令参数</legend>
    	&nbsp;&nbsp;<input type=button onclick="onClickReadTrace();" value="动态曲线分析">
		&nbsp;&nbsp;&nbsp;首地址 0x<input type=text size="5" id=addr value="0A80">
		&nbsp;读取长度 0x<input type=text size="5" id=dataLength value="0060">
		&nbsp;<input type=button onclick="onClickReadData();" value="读数据">
	</fieldset>	
	<script type="text/javascript" src="drawTable.js"></script>
    <script type="text/javascript" charset="utf-8">    	
        var receiver_socket = new WebSocket("ws://"+document.domain+":8008");
        var receieved_data = document.getElementById('txtarea');
        var c = document.getElementById("myCanvas");
        var ctx = c.getContext("2d"); //获取该canvas的2D绘图环境对象       
        receiver_socket.onmessage = function(data)
        {
            receieved_data.value = data.data;

            var traceStr = data.data;
            if(data.data.length>600){        		
            	var traceDatas = traceStr.split(", ");
        		var ptrBuf = 1+ parseInt(traceDatas[2001]+traceDatas[2000],16);	//记录数据指针
                if(ptrBuf > 1000) ptrBuf = 0;
        		var i=ptrBuf, j=0;
        		var paras = new Array(1000), timeX = new Array(1000);
                for(; i<1000; i++)
                {
                    paras[j] = parseInt(traceDatas[2*i+1] + traceDatas[2*i],16);
                    if(paras[j]>32767) paras[j]=paras[j]-65536;
                    j++;
                }
                for( i=0; i<ptrBuf && j<1000; i++)
                {
                    paras[j] = parseInt(traceDatas[2*i+1] + traceDatas[2*i],16);
                    if(paras[j]>32767) paras[j]=paras[j]-65536;
                    j++;
                }
                
                var nMaxData=paras[0], nMinData = paras[0];
                timeX[0] = 0;
                for (i=1 ; i<1000; i++)
                {	timeX[i] = i;
                    if (nMaxData < paras[i])
                    {
                        nMaxData = paras[i];
                    }
                    if (nMinData > paras[i])
                    {
                        nMinData = paras[i];
                    }
                }
                if(nMaxData<200) nMaxData=200;
                var STEP = (nMaxData-nMinData)/20;
                
                nMaxData = ((nMaxData+200)/200) *200;	//取200的整数，进位处理
                STEP = (nMaxData-nMinData)/20;
                if(STEP>100)  STEP = ((STEP+50)/100) *100;

                if (nMaxData%STEP != 0){
                    nMaxData = (nMaxData/STEP + 1) * STEP;
                }
                if (nMinData >= 0){
                    nMinData = 0;
                }
                else if (nMinData%STEP != 0){
                    nMinData = (Math.abs(nMinData)/STEP + 1) * -STEP;
                }	// 如果nMaxData, nMinData先前为0, 则判断后值依然为0
                var nDataHeight = (nMaxData - nMinData); // 数据跨度
                var nData, nYPix;
                ctx.strokeStyle="#CCC";
                if (nDataHeight != 0){
                    for (nData = nMinData; nData <= nMaxData; nData += STEP){
                        nYPix = (c.height)*((nData-nMinData)/(nDataHeight));
                        ctx.moveTo(0,nYPix);   //定义绘画开始的位置
        		        ctx.lineTo(c.width, nYPix);  //画一条直线
        		        ctx.stroke();  //描边                
                    }
                }
                else{
                    //canvas.drawText(Integer.toString(0),0,height,paint1);
                }
                for( i=0;i<21;i++){
                	ctx.moveTo((c.width)/20*i,0);
                	ctx.lineTo((c.width)/20*i,c.height);
                    ctx.stroke();
                }
                ctx.beginPath();
                ctx.strokeStyle="red";
                for (i=0; i<999; i++)
                {
                	var y1 = c.height-c.height*paras[i]/nDataHeight +(nMinData<0?(c.height*nMinData)/nDataHeight:0);
                	var y2 = c.height-c.height*paras[i+1]/nDataHeight +(nMinData<0?(c.height*nMinData)/nDataHeight:0);  
                	ctx.moveTo(i*c.width/1000,y1);
                	ctx.lineTo(((i+1)*c.width/1000), y2);
                    ctx.stroke();
                }
            }       
        }
		
    </script>
</body>
</html>
