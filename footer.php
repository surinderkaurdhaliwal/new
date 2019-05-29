<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>footer</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="blog"><br>
<center><h1 style="font-size:45px;">LATEST BLOG POSTS</h1></center>
<div class="blog1">
<?php
mysql_connect("localhost","root","")or die(mysql_error());
mysql_select_db("agriculture")or die (mysql_error());
$my=mysql_query("select * from blog order by RAND() LIMIT 0,1")or die(mysql_error());
while($row=mysql_fetch_array($my))
{
	$na=$row['title'];
	$path="admin/".$na."/".$row['upload'];
	

echo "<a target='_blank' href='$path'><img src='$path'class='blog-img'></a>";
}
?>
<!--<img src="image/blpic.jpg" >-->

<table width="100%">
<tr>
<td><h2>By Admin</h2></td>
<td width="20%">&nbsp;&nbsp;&nbsp;<img src="image/1297982631.png" class="hrt">
<font style="font-size:30px;color:#FF0;">40</font></td>
</tr>
</table>
<h1 style="font-size:30px;"><font color="#FFFF00">25 JAN:</font>	BLOG POST</h1>
<p><h3>Suspendisse in nisl at ipsum molestie <br>dignissim. Pellentesque est nisi, blandit eget<br> aliquam sed, consequat nec risus......<br><br></h3></p>

<table style="margin-left:23px;">
<tr>
<td><img src="image/share_PNG32.png" style="width:50px;height:40px;"></td>
<td>&nbsp;&nbsp;&nbsp;&nbsp;<font style="font-size:30px;">More</h2>
</td>
</tr>
</table>
</center>
</div>
<div class="blog2">
<table width="100%">
<tr>
<td><h2>By Admin40</h2></td>
<td width="20%">&nbsp;&nbsp;&nbsp;<img src="image/1297982631.png" class="hrt">
<font style="font-size:30px;color:#FF0;">40</font></td>
</tr>
</table>
<h1 style="font-size:30px;"><font color="#FFFF00">25 FEB:</font> BLOG POST</h1>	
<p><h3>Suspendisse in nisl at ipsum molestie<br> dignissim. Pellentesque est nisi, blandit eget<br> aliquam sed, consequat nec risus.....<br><br></h3></p>

<table style="margin-left:23px;">
<tr>
<td><img src="image/share_PNG32.png" style="width:50px;height:40px;"></td>
<td>&nbsp;&nbsp;&nbsp;&nbsp;<font style="font-size:30px;">More</h2>
</td>
</tr>
</table>
<?php
mysql_connect("localhost","root","")or die(mysql_error());
mysql_select_db("agriculture")or die (mysql_error());
$my=mysql_query("select * from blog order by RAND() LIMIT 0,1")or die(mysql_error());
while($row=mysql_fetch_array($my))
{
	$na=$row['title'];
	$path="admin/".$na."/".$row['upload'];
	

echo "<a target='_blank' href='$path'><img src='$path'class='blog-img'></a>";
}
?>
<!--<img src="image/bl2.jpg" class="blog-img3">
-->
 </div>
<div class="blog3">
<?php
mysql_connect("localhost","root","")or die(mysql_error());
mysql_select_db("agriculture")or die (mysql_error());
$my=mysql_query("select * from blog order by RAND() LIMIT 0,1")or die(mysql_error());
while($row=mysql_fetch_array($my))
{
	$na=$row['title'];
	$path="admin/".$na."/".$row['upload'];
	

echo "<a target='_blank' href='$path'><img src='$path'class='blog-img'></a>";
}
?>
<!--<img src="image/blo3.jpg" class="blog-img">-->
<table width="100%">
<tr>
<td><h2>By Admin</h2></td>
<td width="20%">&nbsp;&nbsp;&nbsp;<img src="image/1297982631.png" class="hrt">
<font style="font-size:25px;color:#FF0;">40</font></td>
</tr>
</table>
<h1 style="font-size:30px;"><font color="#FFFF00">25 FEB:</font> BLOG POST</h1>	
<p><h3>Suspendisse in nisl at ipsum molestie<br> dignissim. Pellentesque est nisi, blandit eget<br> aliquam sed, consequat nec risus.....<br><br></h3></p>
<table style="margin-left:23px;">
<tr>
<td><img src="image/share_PNG32.png" style="width:50px;height:40px;"></td>
<td>&nbsp;&nbsp;&nbsp;&nbsp;<font style="font-size:30px;">More</h2>
</td>
</tr>
</table>

</div>
</div>

<div class="footer1">
<div class="footer2"><br><br>
<center>
© 2019<i>By Designer:<font class="na">Manpreet Kaur Buttar
</font></i></center>
</div>
<div class="footer3"><br><br>
<center><img src="image/footer_payment (1).png" class="f-img"></center>
</div>
<br><br>

<font style="font-size:20px;color:white;font-family:'Lucida Console', Monaco, monospace
;">
<font class="copyright">
</font>
<!---<img src="image/fa.png" class="face">
<img src="image/google-plus.png" class="face">--->
</font>
</div>
</div>
</center>
</body>
</html>
