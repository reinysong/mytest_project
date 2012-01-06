<style type="text/css">
#dataview_tab2{
	position:absolute;
	top:0px;
	z-index:50;
	background:url(images/loginbg3.png) repeat;
	width:100%;
	height:100%;
	visibility:hidden;}
#dataview_tab_bg2{
	margin:0px auto;
	position:relative;
	top:60px;
	z-index:50;
	width:450px;
	height:500px;
	background:url(images/pbg2.jpg) repeat;
	-webkit-border-radius: 6px; 
	-moz-border-radius: 6px;
	border-radius: 6px;
	}
#dataview_tab_close2{
	cursor:pointer;
	background:url(images/sbtbg4.png) -16px -200px no-repeat #369;
	position:absolute;
	top:0px;
	z-index:52;
	right:0px;
	width:20px;
	height:20px;}
#dataview_tab_close2:hover{	
	background:url(images/sbtbg4.png) -16px -220px no-repeat;}
#dataview_tab_content2{
	position:absolute;
	top:0px;
	width:450px;
	height:100%;
}

#dataview_tab_content2_title{
	font-size:20px;
	padding:10px;
	width:410px;
	height:45px;}

.logininput{
	width:363px;
	height:38px;
	line-height:38px;
	font-size:13px;
	color:#000;
	font-family:Arial, Helvetica, sans-serif;
	background:url(images/sbtbg4.png) -400px -300px no-repeat ;
	border:0px;
	padding:0px 8px;}
.logininput:hover{
	background:url(images/sbtbg4.png) -400px -338px no-repeat ;}	
#mailto{
	font-size:20px;
	border-bottom:1px solid #888;
	}
#emailme_msg{
	resize:none;
	position:relative;
	left:4px;
	width:347px;
	font-size:13px;
	line-height:23px;
	height:183px;
	background:none;
	padding-left:3px;
	border:none;}
#emailme_msg_top{width:360px;height:5px;background:url(images/sbtbg4.png) -400px -300px no-repeat ;posoition:absolute;top:0px;}	
#emailme_msg_middle{width:360px;height:185px;background:url(images/logininput.png) repeat-y ;posoition:relative;top:0px;}
#emailme_msg_bottom{width:360px;height:5px;background:url(images/sbtbg4.png) -400px -332px no-repeat ;posoition:absolute;bottom:0px;}

#emailme_msg_bg:hover #emailme_msg_top{background:url(images/sbtbg4.png) -400px -338px no-repeat ;}
#emailme_msg_bg:hover #emailme_msg_bottom{background:url(images/sbtbg4.png) -400px -370px no-repeat ;}
#emailme_msg_bg:hover #emailme_msg_middle{background:url(images/logininput2.png) repeat-y ;}

#emailme_bt{width:100px;height:30px;background:url(images/sbtbg4.png) -500px 0px no-repeat ;}
#emailme_bt:hover{background:url(images/sbtbg4.png) -500px -30px no-repeat ;}
#emailme_bt:active{background:url(images/sbtbg4.png) -500px -60px no-repeat ;}
</style>



<div id="dataview_tab2">
    <div id="dataview_tab_bg2">
        <div id="dataview_tab_close2"></div>
        <div id="dataview_tab_content2">
        <div id="dataview_tab_content2_title">Send me a message<br/><span style="font-size:13px;color:#777;">寄封信給我</span></div>
        <table border="0" style="margin: 25px 10px 0px 20px;font-size:12px;">
          <tr>
            <td>標題</td>
            <td><input name="" id="emailme_title" type="text" class="logininput"/></td>
          </tr>
          
          <tr>
            <td>內容</td>
            <td>
            
            <div id="emailme_msg_bg">
            <div id="emailme_msg_top"></div>
            <div id="emailme_msg_middle">
                <textarea name="" id="emailme_msg"  cols="" rows=""></textarea>
            </div>
			<div id="emailme_msg_bottom"></div>
            </div>
            </td>
          </tr>
          <br/>
          <tr>
            <td>你的<br/>名字</td>
            <td><input name="" id="emailme_name" type="text" class="logininput"/><br/><span style="color:#999;"></span></td>

          </tr>
          
          <tr>
            <td>你的<br/>信箱</td>
            <td><input name="" id="emailme_from" type="text" class="logininput"/><br/><span style="color:#999;"></span></td>
          </tr>
          <tr>
            <td> </td>
            <td><div id="emailme_bt"></div></td>
          </tr>
        </table>
        </div>
    </div>
</div>
