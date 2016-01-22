<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <title>ServoWare界面</title>
    <script type="text/javascript">
    	var readFlag = true;
 		function onClickReadData() {
 	 		if(readFlag){
				receiver_socket.send("readRam start,");
				readFlag = false;  
				buttonRead.value = "停止";
 	 	 	}else{
 	 	 		receiver_socket.send("readRam stop,");
				readFlag = true;
				buttonRead.value = "通讯";
 	 	 	 }      
	        
	    }
    </script>
</head>
<body>    
	<p>&nbsp;</p>
	<table border="2" align="center" frame="hsides" rules="none">
		<tr>
			<th width="200">				
				<a href="readRaw.php">调试分析内存*</a>
			</th>
			<th width="200">
				<a href="index.php">系统参数设置*</a>
			</font></th>
			<th width="200"><font color="red">系统特性测试*</th>
		</tr>
	</table>
	<p>&nbsp;</p>
	<table align="center">
		<tr>
			<td width="70%" >
				<fieldset style="width:100%; margin:0px auto" ><legend>运行状态</legend>
					<table align="center">	   
						<tr>
					        <td align="right">电机状态</td> <td><input id="txt1" size="5"></td>
					        <td align="right">驱动出力%</td> <td><input id="txt2" size="5"></td>
					        <td align="right">转子角度°</td> <td><input id="txt3" size="5"></td>
					        <td align="right">位置补偿角</td> <td><input id="txt4" size="5"></td>
					    </tr>
					    <tr>
					        <td align="right">转子位置</td> <td><input id="txt5" size="5"></td>
					        <td align="right">I/O状态</td> <td><input id="txt6" size="5"></td>
					        <td align="right">系统故障</td> <td><input id="txt7" size="5"></td>
					        <td align="right">系统警告</td> <td><input id="txt8" size="5"></td>
					    </tr>
					    <tr>
					        <td align="right">电机速度</td><td><input id="txt9" size="5"></td>
					        <td align="right">滤波速度M</td><td><input id="txt10" size="5"></td>
					        <td align="right">Sew速度</td><td><input id="txt11" size="5"></td>
					        <td align="right">针数统计</td><td><input id="txt12" size="5"></td>
					    </tr>
					    <tr>		       
					        <td align="right">写E2次数</td><td><input id="txt13" size="5"></td>
					        <td align="right">电机转动2</td><td><input id="txt14" size="5"></td>
					        <td align="right">S针数DN</td><td><input id="txt15" size="5"></td>
					        <td align="right">S针数UP</td><td><input id="txt16" size="5"></td>
					    </tr>
					    <tr>
					        <td align="right">踏板指令</td><td><input id="txt17" size="5"></td>
					        <td align="right">指令速度</td><td><input id="txt18" size="5"></td>
					        <td align="right">命令速度</td><td><input id="txt19" size="5"></td>
					        <td align="right">速度SV</td><td><input id="txt20" size="5"></td>
					    </tr>
					    <tr>    
					        <td align="right">速度PV</td><td><input id="txt21" size="5"></td>
					        <td align="right">方向</td><td><input id="txt22" size="5"></td>
					        <td align="right">控制Sign</td><td><input id="txt23" size="5"></td>
					        <td align="right">PWM宽度</td><td><input id="txt24" size="5"></td>
					    </tr>
					    <tr>
					        <td align="right">运行指示</td><td><input id="txt25" size="5"></td>
					        <td align="right">200ms计数</td><td><input id="txt26" size="5"></td>
					        <td align="right">车头脉冲</td><td><input id="txt27" size="5"></td>
					        <td align="right">计数</td><td><input id="txt28" size="5"></td>
					    </tr>
					    <tr>    
					        <td align="right">缝纫模式</td><td><input id="txt29" size="5"></td>
					        <td align="right">SFC第n布</td><td><input id="txt30" size="5"></td>
					        <td align="right">总步数</td><td><input id="txt31" size="5"></td>
					        <td align="right">复位计数</td><td><input id="txt32" size="5"></td>
					    </tr>
					    <tr>
					        <td align="right">Sew设定</td><td><input id="txt33" size="5"></td>
					        <td align="right">电机设定</td><td><input id="txt34" size="5"></td>
					        <td align="right">保留</td><td><input id="txt35" size="5"></td>
					        <td align="right">踏板行程</td><td><input id="txt36" size="5"></td>
					    </tr>
					    <tr>    
					        <td align="right">超限次数</td><td><input id="txt37" size="5"></td>
					        <td align="right">MH_Limit</td><td><input id="txt38" size="5"></td>
					        <td align="right">升速时间</td><td><input id="txt39" size="5"></td>
					        <td align="right">升速后速度</td><td><input id="txt40" size="5"></td>
					    </tr>
					    <tr>
					        <td align="right">d_Speed</td><td><input id="txt41" size="5"></td>
					        <td align="right">车头总脉冲</td><td><input id="txt42" size="5"></td>
					        <td align="right">车头位置</td><td><input id="txt43" size="5"></td>
					        <td align="right">启动自检状态</td><td><input id="txt44" size="5"></td>
					    </tr>
					    <tr>    
					        <td align="right">针位置</td><td><input id="txt45" size="5"></td>
					        <td align="right">踏板位置</td><td><input id="txt46" size="5"></td>
					        <td align="right">HALL换向</td><td><input id="txt47" size="5"></td>
					        <td align="right">最大出力Mout</td><td><input id="txt48" size="5"></td>
					    </tr> 
					    <!--  tr>
					        <td align="right" colspan="2">SPD/MPD直径比</td><td><input id="txt49" size="5"></td>
					        <td align="right" colspan="2">电机设定/实际速度比推算</td><td><input id="txt50" size="5"></td>
					        <td align="right">最大速度点</td><td><input id="txt51" size="5"></td>
					    </tr> 
					    <tr>
					        <td align="right">速度计算异常</td><td><input id="txt52" size="5"></td>
					        <td align="right">最小速度点</td><td><input id="txt53" size="5"></td>
					        <td align="right">电磁铁电流</td><td><input id="txt54" size="5"></td>
					        <td align="right">缝纫机实速</td><td><input id="txt55" size="5"></td>
					    </tr>		 -->   
					</table>
				</fieldset>
			</td>
			<td width="30%">
				<fieldset style="width:130; margin:0px auto" ><legend>输出状态</legend>
					<table>
						<tr>
							<td align="right">切线：</td><td><input id="txt56" size="5" disabled="disabled" value=OFF></td>
						</tr>
						<tr>
							<td align="right">扫线：</td><td><input id="txt57" size="5" disabled="disabled" value=OFF></td>
						</tr>
						<tr>
							<td align="right">DO3：</td><td><input id="txt58" size="5" disabled="disabled" value=OFF></td>
						</tr>
						<tr>
							<td align="right">DO4：</td><td><input id="txt59" size="5" disabled="disabled" value=OFF></td>
						</tr>
						<tr>
							<td align="right">DO5：</td><td><input id="txt60" size="5" disabled="disabled"  value=OFF></td>
						</tr>
						<tr>
							<td align="right">DO6：</td><td><input id="txt61" size="5" disabled="disabled" value=OFF></td>
						</tr>
						<tr>
							<td align="right">回缝：</td><td><input id="txt62" size="5" disabled="disabled" value=OFF></td>
						</tr>
						<tr>
							<td align="right">抬压脚</td><td><input id="txt63" size="5" disabled="disabled" value=OFF></td>
						</tr>
						<tr>
							<td align="right">电机输出允许</td><td><input id="txt64" size="5" disabled="disabled" value=OFF></td>
						</tr>
						<tr>
							<td align="right">30V调制供电</td><td><input id="txt65" size="5" disabled="disabled" value=OFF></td>
						</tr>						
						<tr>							
							<td align="right"><br><input type=button id="read" onclick="onClickReadData();" value="通讯"></td>    						
						</tr>
					</table>
				</fieldset>
			</td>
		</tr>
	</table>
	
	
	
    <script type="text/javascript" charset="utf-8">
        var receiver_socket = new WebSocket("ws://"+document.domain+":8008");
        var buttonRead = document.getElementById("read");
        var paras = new Array(48);
        for(var i=0;i<48;i++){
			paras[i] = document.getElementById("txt"+(i+1));
        }
        receiver_socket.onmessage = function(data)
        {
            var datas = data.data.split(", ");
            for(var i = 0;i<8;i++){
    			paras[i].value = parseInt(datas[2*i+1]+datas[2*i],16);    			
            }
            for(var i = 8;i<=10;i++){
                var shortData = parseInt(datas[2*i+1]+datas[2*i],16);
                if(shortData>32767){
					shortData -= 65535;
                }
    			paras[i].value = shortData;    			
            } 
            for(var i = 11;i<48;i++){
    			paras[i].value = parseInt(datas[2*i+1]+datas[2*i],16);    			
            }   
        }
    </script>
</body>
</html>
