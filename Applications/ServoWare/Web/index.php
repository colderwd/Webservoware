<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <title>ServoWare界面</title>
    <script type="text/javascript">
 		function onClickReadData() {          
	        receiver_socket.send("readCfgData,");	        
	    }

	    function onClickDownloadCfg(){
		    var cfgs="";
		    for(var i=0;i<104;i++){
				cfgs += document.getElementById("txt"+(i+1)).value+",";
			}
	    	receiver_socket.send("DownloadCfg,"+cfgs);
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
			<th width="200"><font color="red">系统参数设置*</font></th>
			<th width="200">
				<a href="readRam.php">系统特性测试*</a>
			</th>
		</tr>
	</table>
	<p>&nbsp;</p>
	<fieldset style="width:1200; margin:0px auto" ><legend>数据值</legend>	
		<table align="center">
		    <tr> 
		        <td align="right">01最高速度</td> <td><input id="txt1" size="5"></td>
		        <td align="right">02加速度</td> <td><input id="txt2" size="5"></td>
		        <td align="right">03停针位</td> <td><input id="txt3" size="5"></td>
		        <td align="right">起始回缝N</td> <td><input id="txt4" size="5"></td>
		        <td align="right">终止回缝V</td> <td><input id="txt5" size="5"></td>
		        <td align="right">连续回缝B</td> <td><input id="txt6" size="5"></td>
		        <td align="right">慢速起缝S</td> <td><input id="txt7" size="5"></td>
		        <td align="right">慢速针数</td> <td><input id="txt8" size="5"></td>
		    </tr>
		    <tr>
		        <td align="right">自动定寸A</td><td><input id="txt9" size="5"></td>
		        <td align="right">010.ACD</td><td><input id="txt10" size="5"></td>
		        <td align="right">011.RVM</td><td><input id="txt11" size="5"></td>
		        <td align="right">012.SMS</td><td><input id="txt12" size="5"></td>
		        <td align="right">013.TYS</td><td><input id="txt13" size="5"></td>
		        <td align="right">014.SBT</td><td><input id="txt14" size="5"></td>
		        <td align="right">015.SBA</td><td><input id="txt15" size="5"></td>
		        <td align="right">016.SBB</td><td><input id="txt16" size="5"></td>
		    </tr>
		    <tr>
		        <td align="right">017.SBN</td><td><input id="txt17" size="5"></td>
		        <td align="right">018.BT1</td><td><input id="txt18" size="5"></td>
		        <td align="right">019.BT2</td><td><input id="txt19" size="5"></td>
		        <td align="right">020.SME</td><td><input id="txt20" size="5"></td>
		        <td align="right">021.EBT</td><td><input id="txt21" size="5"></td>
		        <td align="right">022.EBC</td><td><input id="txt22" size="5"></td>
		        <td align="right">023.EBD</td><td><input id="txt23" size="5"></td>
		        <td align="right">024.EBN</td><td><input id="txt24" size="5"></td>
		    </tr>
		    <tr>
		        <td align="right">025.BT3</td><td><input id="txt25" size="5"></td>
		        <td align="right">026.BT4</td><td><input id="txt26" size="5"></td>
		        <td align="right">027.CT</td><td><input id="txt27" size="5"></td>
		        <td align="right">028.SB5</td><td><input id="txt28" size="5"></td>
		        <td align="right">029.SB9</td><td><input id="txt29" size="5"></td>
		        <td align="right">030.BCC</td><td><input id="txt30" size="5"></td>
		        <td align="right">031.SMB</td><td><input id="txt31" size="5"></td>
		        <td align="right">032.BAR</td><td><input id="txt32" size="5"></td>
		    </tr>
		    <tr>
		        <td align="right">033.BRC</td><td><input id="txt33" size="5"></td>
		        <td align="right">034.BRN</td><td><input id="txt34" size="5"></td>
		        <td align="right">035.BT5</td><td><input id="txt35" size="5"></td>
		        <td align="right">036.BT6</td><td><input id="txt36" size="5"></td>
		        <td align="right">037.SMP</td><td><input id="txt37" size="5"></td>
		        <td align="right">038.PM</td><td><input id="txt38" size="5"></td>
		        <td align="right">039.PS</td><td><input id="txt39" size="5"></td>
		        <td align="right">040.WON</td><td><input id="txt40" size="5"></td>
		    </tr>
		    <tr>
		        <td align="right">041.TM</td><td><input id="txt41" size="5"></td>
		        <td align="right">042.FSM</td><td><input id="txt42" size="5"></td>
		        <td align="right">043.FTM</td><td><input id="txt43" size="5"></td>
		        <td align="right">044.PN件数</td><td><input id="txt44" size="5"></td>
		        <td align="right">045.SSS</td><td><input id="txt45" size="5"></td>
		        <td align="right">046.DIR</td><td><input id="txt46" size="5"></td>
		        <td align="right">047.MAC</td><td><input id="txt47" size="5"></td>
		        <td align="right">048.SYM</td><td><input id="txt48" size="5"></td>
		    </tr>
		    <tr>
		        <td align="right">049.SPD</td><td><input id="txt49" size="5"></td>
		        <td align="right">050.MPD</td><td><input id="txt50" size="5"></td>
		        <td align="right">051.CHK</td><td><input id="txt51" size="5"></td>
		        <td align="right">052.PA</td><td><input id="txt52" size="5"></td>
		        <td align="right">053.FT</td><td><input id="txt53" size="5"></td>
		        <td align="right">054.BK</td><td><input id="txt54" size="5"></td>
		        <td align="right">055.TOT</td><td><input id="txt55" size="5"></td>
		        <td align="right">056.TM1</td><td><input id="txt56" size="5"></td>
		    </tr>
		    <tr>
		        <td align="right">057.TM2</td><td><input id="txt57" size="5"></td>
		        <td align="right">058.UTD</td><td><input id="txt58" size="5"></td>
		        <td align="right">059.T</td><td><input id="txt59" size="5"></td>
		        <td align="right">060.L</td><td><input id="txt60" size="5"></td>
		        <td align="right">061.FO</td><td><input id="txt61" size="5"></td>
		        <td align="right">062.FC</td><td><input id="txt62" size="5"></td>
		        <td align="right">063.FD</td><td><input id="txt63" size="5"></td>
		        <td align="right">064.HHC</td><td><input id="txt64" size="5"></td>
		    </tr>
		    <tr>
		        <td align="right">065.SFM</td><td><input id="txt65" size="5"></td>
		        <td align="right">066.LTM</td><td><input id="txt66" size="5"></td>
		        <td align="right">067.T1</td><td><input id="txt67" size="5"></td>
		        <td align="right">068.T2</td><td><input id="txt68" size="5"></td>
		        <td align="right">069.L1</td><td><input id="txt69" size="5"></td>
		        <td align="right">070.L2</td><td><input id="txt70" size="5"></td>
		        <td align="right">071.W1</td><td><input id="txt71" size="5"></td>
		        <td align="right">072.W2</td><td><input id="txt72" size="5"></td>
		    </tr>
		    <tr>
		        <td align="right">073.WF</td><td><input id="txt73" size="5"></td>
		        <td align="right">074.RT</td><td><input id="txt74" size="5"></td>
		        <td align="right">075.UEG</td><td><input id="txt75" size="5"></td>
		        <td align="right">076.DRU</td><td><input id="txt76" size="5"></td>
		        <td align="right">077.ANU</td><td><input id="txt77" size="5"></td>
		        <td align="right">078.URU</td><td><input id="txt78" size="5"></td>
		        <td align="right">079.ERR</td><td><input id="txt79" size="5"></td>
		        <td align="right">080.VER</td><td><input id="txt80" size="5"></td>
		    </tr>
		    <tr>
		        <td align="right">081.AEQ</td><td><input id="txt81" size="5"></td>
		        <td align="right">082.PCO</td><td><input id="txt82" size="5"></td>
		        <td align="right">083.KP</td><td><input id="txt83" size="5"></td>
		        <td align="right">084.KTI</td><td><input id="txt84" size="5"></td>
		        <td align="right">085.KS</td><td><input id="txt85" size="5"></td>
		        <td align="right">086.KA</td><td><input id="txt86" size="5"></td>
		        <td align="right">087.KB</td><td><input id="txt87" size="5"></td>
		        <td align="right">088.KS1</td><td><input id="txt88" size="5"></td>
		    </tr>
		    <tr>
		        <td align="right">089.KA1</td><td><input id="txt89" size="5"></td>
		        <td align="right">090.KB1</td><td><input id="txt90" size="5"></td>
		        <td align="right">091.HL</td><td><input id="txt91" size="5"></td>
		        <td align="right">092.MTY</td><td><input id="txt92" size="5"></td>
		        <td align="right">093.DEG</td><td><input id="txt93" size="5"></td>
		        <td align="right">094.CROT</td><td><input id="txt94" size="5"></td>
		        <td align="right">095._</td><td><input id="txt95" size="5"></td>
		        <td align="right">096.RST</td><td><input id="txt96" size="5"></td>
		    </tr>
		    <tr>
		        <td align="right">097.</td><td><input id="txt97" size="5"></td>
		        <td align="right">098.</td><td><input id="txt98" size="5" disabled="disabled"></td>
		        <td align="right">099.</td><td><input id="txt99" size="5" disabled="disabled"></td>
		        <td align="right">100.</td><td><input id="txt100" size="5" disabled="disabled"></td>
		        <td align="right">101.</td><td><input id="txt101" size="5" disabled="disabled"></td>
		        <td align="right">102.</td><td><input id="txt102" size="5"></td>
		        <td align="right">103.</td><td><input id="txt103" size="5"></td>
		        <td align="right">104.</td><td><input id="txt104" size="5"></td>
		    </tr>	
		</table>
	</fieldset>
	<br>
	<fieldset style="width:690; margin:0px auto"> <legend>命令参数</legend>
	    &nbsp;<input type=button onclick="onClickCfgInit();" disabled="disabled" value="组态初始化">&nbsp;
	    &nbsp;&nbsp;<input type=button id="btn_dloadCfg" onclick="onClickDownloadCfg();" disabled="disabled" value="组态下载">&nbsp;&nbsp;
	    &nbsp;&nbsp;&nbsp;<input type=button onclick="onClickReadData();" value="读数据">&nbsp;&nbsp;
	    &nbsp;&nbsp;<input type=button onclick="onClickSaveToFile();" disabled="disabled" value="保存为文件">&nbsp;&nbsp;
	    &nbsp;<input type=button onclick="onClickRestoreFromFile();" disabled="disabled" value="下载设置文件">
	</fieldset>
    <script type="text/javascript" charset="utf-8">
        var receiver_socket = new WebSocket("ws://"+document.domain+":8008");
        var paras = new Array(104);
        for(var i = 0;i<104;i++){
			paras[i] = document.getElementById("txt"+(i+1));
        }
		     
        receiver_socket.onmessage = function(data)
        {
        	var datas = data.data.split(", ");
        	for(var i = 0;i<104;i++){
    			paras[i].value = parseInt(datas[2*i+1]+datas[2*i],16);
            }
            if(document.getElementById("btn_dloadCfg").disabled!=""){
    	        document.getElementById("btn_dloadCfg").disabled="";
    	    }                   
        }
    </script>
</body>
</html>
