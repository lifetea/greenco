﻿<?php
//让这个常量存在就能调用
define('feifa',ture);
//引入公共文件
require 'inc/common.php';
$_result=mysql_query("select  type,material,outlet,d1,d2,d3,d4,h1,h2,h3,h4,rated_flow,approx from filters where  type like '%{$_GET['type']}%' ");
$_rows=mysql_fetch_array($_result);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html  xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-Type" content="text/html; charset=utf-8" />
<title>Inlet Vacuum Filter <?php echo  $_GET['type'];?> Technical Data</title>
<meta name="description" content="Inlet vacuum filters <?php echo  $_GET['type'];?> are used in vacuum applications to prevent impurities from entering the blower, but also can be used in pressure applications to draw air from a remote location." />
<meta name="keywords" content="Inlet vacuum filters <?php echo  $_GET['type'];?>,Vacuum Filter,Pressure Filter,Air Filter,Polyester filter,Paper filter,Filter element,2BX4 series,GREENCO" />
<script src="js/menu.js" type="text/javascript"></script>
<link  type="text/css" rel="stylesheet" href="css/main.css"/>
<link rel="stylesheet"  type="text/css"  href="uniform/css/uniform.default.css"/>
<script src="js/jquery-1.7.2.js"></script>
<link rel="stylesheet" type="text/css" href="shadowbox/shadowbox.css">
<link href="favicon.ico" rel="shortcut icon" />
<script type="text/javascript" src="shadowbox/shadowbox.js"></script>
<script type="text/javascript">
Shadowbox.init({
    handleOversize:     "drag",
    handleUnsupported:  "remove",
    autoplayMovies:     false
});
</script>
<!-- 无刷新分页 -->
<script src="js/jquery.quickpaginate.js" type="text/javascript" ></script>
<script type="text/javascript">
	$(function(){
		$(".mypagination").quickpaginate({
			perpage: 15,//每页显示条数,
			pager : $("#page_text") //div的ID
		})

	    $('table tr.content ').hover(//表格单行经过
			  function(){
               $(this).css('background','#ddd').css('color','#333').css('cursor','pointer');
	         },
			  function(){
	               $(this).css('background','#fff').css('color','#333');
		         }

	   )
	})
</script>
<style>
  	.info-nav li a{margin-left:5px;color:#333;}
  	.info-nav li a:hover{margin-left:5px;}
	ul.main-nav li{margin-left:12px;}
	ul.main-nav li a{font-size:13px;}
  	ul.main-nav li a:hover{background:#555;}
  	h1,h2,h3,h4,h5,h6{font-weight:600;}
  	.dropdown{border:1px solid #ccc;}
    #Side_Channel_Blower_2RB_Single_Stage_all{background:#ccc;}
  	#Side_Channel_Blower_2RB_Single_Stage{height:1200px;width:1000px;margin:0 auto;background:#fff;border:1px solid #999;border-top:none;}
    #Side_Channel_Blower_2RB_Single_Stage .left{float:left;width:265px;margin:5px 0 0 10px;}
  	#Side_Channel_Blower_2RB_Single_Stage .left H2{text-indent:10px;background:#666;font-size:14px;font-weight:600;width:250px;height:32px;color:#fff;line-height:32px;border:1px solid  #555;}
  	#Side_Channel_Blower_2RB_Single_Stage .left ul{margin-top:8px;list-style:none;}
  	#Side_Channel_Blower_2RB_Single_Stage .left ul li {margin-top:13px;background:url(image/jiantou.png) no-repeat 0 2px;padding-left:18px;}
    #Side_Channel_Blower_2RB_Single_Stage .left form p{margin-top:10px;width:240px;padding-left:10px;}
  	#Side_Channel_Blower_2RB_Single_Stage .left ul li  a{color:#333;}
  	#Side_Channel_Blower_2RB_Single_Stage .left .text{border-radius:0px;}
  	#Side_Channel_Blower_2RB_Single_Stage .left select{margin-left:8px;border-radius:0px;}
	#Side_Channel_Blower_2RB_Single_Stage .right{height:890px;float:left;width:700px;border-left:1px solid #ccc;padding:0 0 100px 15px;position:relative;}
  	#Side_Channel_Blower_2RB_Single_Stage .right img{border:1px solid #bbb;margin-top:10px;}
	#Side_Channel_Blower_2RB_Single_Stage .right img:hover{border:1px solid #666;}
  	#Side_Channel_Blower_2RB_Single_Stage .right h5{clear:both;text-indent:8px;background:#666;height:30px;line-height:30px;color:#fff;border:1px solid #666;font-size:14px;}
	#Side_Channel_Blower_2RB_Single_Stage .right #right{float:left;margin-bottom:20px;}
    #Side_Channel_Blower_2RB_Single_Stage .right #right img{margin:54px 0 0 27px;border:1px solid #ccc;}
    #Side_Channel_Blower_2RB_Single_Stage .right #left h4{border-bottom:1px dashed #ccc;color:#1850a3;font-size:18px;font-family:Microsoft YaHei;height:50px;line-height:50px;}
  	#Side_Channel_Blower_2RB_Single_Stage .right #left{float:left;margin-top:5px;width:370px;margin-bottom:20px;}
  	table{background:#fff;font-size:11px;font-family:Microsoft YaHei;color:#444;border:none;margin-top:10px;}
    tr {height:35px;line-height:35px;}
  	tr span{color:#1c59b7;}
  	table.data{border-top:1px solid #999;border-right:1px solid #999;color:#e9ba3f;width:700px;}
  	table.data td{text-align:center;padding:3px;height:20px;line-height:20px;color:#333;border:1px solid #999;border-top:0px;border-right:0px;}
    table.data span{vertical-align:bottom;font-size:10px;color:#333;}
  	table.data tr.one{background:url(image/table_bg.png) ;font-size:12px;}

    table.data tr.one td{font-weight:600;color:#333;}
    #copyright a{color:#999;font-variant:normal;}
	#copyright p{font-variant:normal;}
    #copyright ul li{margin-top:5px;}
</style>
</head>
<body id="homepage" >

<?php require 'inc/header_inc.php';?>


<!-- 应用内容 -->
<div id="Side_Channel_Blower_2RB_Single_Stage_all" >
   <div id="Side_Channel_Blower_2RB_Single_Stage">
       <img src="image/product_banner.png" style="margin:10px 0 0 10px;"/>
       <?php require 'inc/prod-left.inc';?>
       <div class="right">
             <div id="left">
                <h4>Vacuum Filter <?php echo $_rows['type'];?> Technical Data</h4>
                <table style="font-size:12px;">
                   <tr><td><strong>Model: </strong><span><?php echo $_rows['type'];?></span></td><td>
                </table>
                <h5 style="background:#fff url(image/download1.png) no-repeat ;color:#333;border:none;line-height:45px;text-indent:36px;margin-top:180px;font-size:14px;"><a href="upfile/Side channel blower Inlet vacuum filter.pdf" target="_blank" style="color:#1850a3;">Download PDF Inlet Vacuum Filters (551 KB)</a></h5>
             </div>
             <div id="right">
                <img src="product_image/product_content_big/Inlet vacuum filters <?php echo $_rows['type'];?>.jpg" alt="<?php echo $_rows['type'];?> side channel blower inlet vacuum filters image and picture"/>
             </div>


             <h5>Dimension for Inlet Vacuum Filter <?php echo $_rows['type'];?></h5>
             <!-- 尺寸图判断 -->
             <?php
                    echo   '<a rel="shadowbox" href="product_image/Dimensions_Inlet_Vacuum_Filter/Inlet_Vacuum_Filter_big.jpg"><img alt="Dimension for Silencer '.$_rows['type'].' " class="border" src="product_image/Dimensions_Inlet_Vacuum_Filter/Inlet_Vacuum_Filter_small.jpg"  title="Click to Enlarge"/></a>';
             ?>

             <!-- 技术参数判断 -->
             <?php
		            echo    '<table class="data"  cellspacing="0" cellpadding="0" style="margin-top:30px;">'.
		              '<tr class="one"><td style="font-style:Italic;">Type</td><td>material</td><td>FPT Inlet & Outlet</td><td>d1</td><td>d2</td><td>d3</td><td>d4</td><td>h1</td><td>h2</td><td>h3</td><td>h4</td><td>Rated Flow</br>(m³/min)</td><td>Approx.wt.</br>(kg)</td></tr>'.
		              '<tr class="two"><td>'.$_rows['type'].'</td><td>'.$_rows['material'].'</td><td>'.$_rows['outlet'].'</td><td>'.$_rows['d1'].'</td><td>'.$_rows['d2'].'</td><td>'.$_rows['d3'].'</td><td>'.$_rows['d4'].'</td><td>'.$_rows['h1'].'</td><td>'.$_rows['h2'].'</td><td>'.$_rows['h3'].'</td><td>'.$_rows['h4'].'</td><td>'.$_rows['rated_flow'].'</td><td>'.$_rows['approx'].'</td></tr>'.
		             '</table>';
             ?>
             <p style="position: absolute;bottom:20px;left:20px;">Note:Model offerings and design parameters may change without notice.</p>
       </div>
   </div>
</div>
<!-- 应用内容end -->

<?php require 'inc/footer_inc.php';?>


<script src="js/swfobject.js"></script>
<script  type="text/javascript" src="layer/layer.js"></script>
<script  src="js/application.js"></script>
<script>
$(function(){
    $(" div.dropdown ul li a").css('color','#444');

	$("ul.main-nav li a").hover(
	 function(){
	        $(this).css('background','#666');
	 },
	 	 function(){
	        $(this).css('background','#333');
	 }
	 );

	 $(" div.dropdown ul li a").hover(
	 function(){
	        $(this).css('background','#fff').css('text-decoration','underline').css('color','#222');
	 },
	 	 function(){
	        $(this).css('background','#fff').css('text-decoration','none').css('color','#444');
	 }
	 )
})

</script>
</body>
</html>

