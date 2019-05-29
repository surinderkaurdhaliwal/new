<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
<style>
/*fling-minislide {width:350px; height:300px; overflow:hidden; position:relative; }
.fling-minislide img{ position:absolute; animation:fling-minislide 20s infinite; opacity:0; width: 100%; height:500px;}

@keyframes fling-minislide {25%{opacity:1;} 40%{opacity:0;}} 
.fling-minislide img:nth-child(4){animation-delay:0s;}
.fling-minislide img:nth-child(3){animation-delay:5s;}
.fling-minislide img:nth-child(2){animation-delay:10s;}
.fling-minislide img:nth-child(1){animation-delay:15s;}*/




</style>
<body>
	

<?php /*?><div class="fling-minislide">

   <?php  
	include("connection.php");
	  
	  $sq= mysql_query("select * from addslider") or die(mysql_error());
	  while($row=mysql_fetch_array($sq))
	  {
		  $path="admin/slider/".$row['upload'];
	?>
<img src="<?php echo $path; ?>" alt="banner1" title="banner1" id="wows44_0"/>

<?php
	  }
?>
<?php */?>


<!--<img src="admin/image/back.jpg">
<img src="admin/image/4.jpg">
<img src="admin/image/back2.jpg">
<img src="admin/image/3.jpg">-->


</div>
<hr>
<!-- Start WOWSlider.com HEAD section -->


<link rel="stylesheet" type="text/css" href="engine1/style.css" />
<script type="text/javascript" src="engine1/jquery.js"></script>
<!-- End WOWSlider.com HEAD section -->
<!-- Start WOWSlider.com BODY section -->
<div id="wowslider-container1">
<div class="ws_images"><ul>
 <?php  
	include("connection.php");
	  
	  $sq= mysql_query("select * from addslider") or die(mysql_error());
	  while($row=mysql_fetch_array($sq))
	  {
		  $path="admin/slider/".$row['upload'];
	
		  ?>
		<li><img src="<?php echo $path ;?>" alt="3" title="3" id="wows1_0"/></li>
	<?php
	  }
	  ?>
	</ul></div>
</div>
<script type="text/javascript" src="engine1/wowslider.js"></script>
<script type="text/javascript" src="engine1/script.js"></script>
<!-- End WOWSlider.com BODY section -->