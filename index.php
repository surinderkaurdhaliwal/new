<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<link rel="stylesheet" href="style.css">
<link rel="stylesheet" type="text/css" href="engine1/style.css" />
<script type="text/javascript" src="engine1/jquery.js"></script>
</head>

<body>
<?php

include("god.php");

?>

<div class="slider">
 
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
</div>

<div class="front">
<div class="front1">

<br><br>
<center><i><font style="font-size:40px">

Hot Deal<br>
</font></i></center>
<div id="slideshow">
			 	<div class="f-desc1">
                
					<h1 align="center"  style="font-size:55px;color:#000;font-family:'Lucida Console', Monaco, monospace">
NATURAL FRESH JUICES<br>
				</div>
				<div class="f-desc1" style="color:#039;" >
   		<h1 align=center style="font-size:55px;font-family:'Lucida Console', Monaco, monospace">

NATURAL FRESH JUICES
</h1>
				</div>
		    </div>
		<script>
			$("#slideshow > div:gt(0)").hide();
			setInterval(function() { 
			  $('#slideshow > div:first')
			    .fadeOut(00)
			    .next()
			    .fadeIn(500)
			    .end()
			    .appendTo('#slideshow');
			},  2000);
		</script>







<center>

<h3 style="font-size:25px;">
Cur tantas regiones barbarorum pedibus obiit, tot maria transmisit? Uterque enim<br> bono fruitur, id est voluptate</h3><br>
<button class="bt">SHOP NOW</button>
</font>
</i>
</center>


</div>
<div class="front2">
<br><br>
<img src="image/can.png" class="object" style="margin-right:-300px;
 "
">
</div>

<br />



</div>





<div class="tech">
<br><br><br>

<div class="tech1">
 <script>
var pic=Array("image/fruit 555.jpg","image/h4.jpg","image/h5.jpg","image/h7.jpg");
 var j=0;
 function slider()
 {
	 
	 s=window.document.abc;
	 s.src=pic[j];
	 if(j>2)
	 {
		 j=0;
		 }
		 else
		 {
			 j++;
			 
			 }
		setTimeout("slider()",2000);
	 
	 
	 }
</script>
<h1 align=center style="font-size:36px;color:red;font-family:'Lucida Console', Monaco, monospace">Harvest</h1>
<center><img src="image/fruit 555.jpg" class="harvest_img" name="abc">
<script>
  slider();
</script>

</center>

<p style="font-size:18px;color:black;font-size:21px;word-wrap:break-word;">
Qhasellus id adipiscing nunc. Tonec velko augue et nula ehicula pretium. Yonecjol po consequat achoumsan erat ac vulputatwyt. Ut consectetur commodo mollis. Ut necrcilo fg tells interdum aliquete. Phasellus juihersdaiprtyiscing nunc. Conec vel augue etjotr lnulla hylo vehicula pretium. Nonec consde equat gtmk accumsan erat ac vulptase.</p>
<a href=more.php><center><button class="bn">More</button></center></a>

</div>
<div class="tech2">
<script>
var picc=Array("image/culti.jpg","image/c4.jpg","image/c1.jpg","image/c9.jpg");
 var j1=0;
 function sli()
 {
	 
	 s=window.document.ab;
	 s.src=picc[j1];
	 if(j1>2)
	 {
		 j1=0;
		 }
		 else
		 {
			 j1++;
			 
			 }
		setTimeout("sli()",2000);
	 
	 
	 }
</script>
<h1 align=center style="font-size:36px;color:red;font-family:'Lucida Console', Monaco, monospace">
Cultivation
</h1>
<center><img src="image/culti.jpg" class="harvest_img" name="ab">
<script>
sli();
</script>

</center>
<p style="font-size:18px;color:black;font-size:22px;word-wrap:break-word;">
Qhasellus id adipiscing nunc. Tonec velko augue et nula ehicula pretium. Yonecjol po consequat achoumsan erat ac vulputatwyt.Ut consectetur commodo mollis. Ut necrcilo fg tells interdum aliquete. Phasellus juihersdaiprtyiscing nunc. Conec vel augue etjotr lnulla hylo vehicula pretium. Nonec consde equat gtmk accumsan erat ac vulptase.</p>
<center><a href="Cultivation.php"><button class="bn">More</button></a></center>
</div>
<div class="tech3">
<script>
var piccc=Array("image/pr.jpg","image/p4.jpg","image/p5.jpg","image/p3.jpg");
 var j2=0;
 function slid()
 {
	 
	 s=window.document.a;
	 s.src=piccc[j2];
	 if(j2>2)
	 {
		 j2=0;
		 }
		 else
		 {
			 j2++;
			 
			 }
		setTimeout("slid()",2000);
	 
	 
	 }
</script>
<h1 align=center style="font-size:36px;color:red;font-family:'Lucida Console', Monaco, monospace">
Protection
</h1>
<center><img src="image/pr.jpg" class="harvest_img" name="a">
<script>
slid();
</script>


</center>
<p style="font-size:18px;color:black;font-size:22px;word-wrap:break-word;">
Qhasellus id adipiscing nunc. Tonec velko augue et nula ehicula pretium. Yonecjol po consequat achoumsan erat ac vulputatwyt. Ut consectetur commodo mollis. Ut necrcilo fg tells interdum aliquete. Phasellus juihers daiprtyiscing nunc. Conec vel augue etjotr lnulla hylo vehicula pretium. Nonec consde equat gtmk accumsan erat ac vulptase.</font>
<center><a href="Protection.php"><button class="bn">More</button></a></center>
</div>
</div>
<div class="service-footer">
<div class="service-footer1">
<img src="image/about-2-570x454.png" class="service-im">
</div>
<div class="service-footer2">
<br>
<center>
We farm organically<br>
to build healthy & <br>balanced ecosystems<br>
THAT MAKE THE EARTH AND ALL<br> 
THE PEOPLE ON IT SMILE
</center>
</div>
</div>
<div class="service-footer3">
<br>
<font align="center" style="font-size:72px;font-family:Arial, Helvetica, sans-serif;font-weight:bold;">
<div style="background-image:url(image/MILHF.png);width:100%;height:380px;
background-size:100% 100%;">
<center>Welcome To Our Farm!</center></font>
 <center>
 <table>
 <tr>
 <td><hr size=3px color=#000 style="width:70px;"></td>
 <td>&nbsp;&nbsp;<img src="image/Cow-PNG-Image-31401.png" style="width:90px;height:50px;margin-top:-10px;"></td>
 <td><hr size=3px color=#000 style="width:70px;"></td>
 </tr>
 </table>    </center> 
<h2 align="center">Here you will find a wide range of healthy and fresh dairy products that were proudly produced at our<br> farm by our farmers and cows. Welcome to Jacksons!</h2>
<br>

</div>
</div>
<div style="width:100%;margin-top:-90px;">
<center><img src="image/big-cow.png" class="service-im2"></center>
</div>
<?php
include("footer.php");

?>
</body>
</html>
