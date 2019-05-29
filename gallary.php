<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
<?php

include("god.php");

?>


<div class="gallery">
</div>
<br>
<div class="gallery1">
<div class="gallery2">
<div class="gallery21">

<?php
mysql_connect("localhost","root","")or die(mysql_error());
mysql_select_db("agriculture")or die (mysql_error());
$my=mysql_query("select * from blog order by RAND() LIMIT 0,2")or die(mysql_error());
while($row=mysql_fetch_array($my))
{
	$na=$row['title'];
	$path="admin/".$na."/".$row['upload'];
	

echo "<a target='_blank' href='$path'><img src='$path'class='g_img1'></a>";
}
?>
</div>
<div class="gallery22">
<?php
mysql_connect("localhost","root","")or die(mysql_error());
mysql_select_db("agriculture")or die (mysql_error());
$my=mysql_query("select * from addslider order by RAND() LIMIT 0,2")or die(mysql_error());
while($row=mysql_fetch_array($my))
{
	$na=$row['name'];
	$path="admin/slider/".$row['upload'];
	

echo "<a target='_blank' href='$path'><img src='$path'class='g_img1'></a>";
}
?>

</div>
</div>
<div class="gallery3">

<?php
mysql_connect("localhost","root","")or die(mysql_error());
mysql_select_db("agriculture")or die (mysql_error());
$my=mysql_query("select * from addpic order by RAND() LIMIT 0,1")or die(mysql_error());
while($row=mysql_fetch_array($my))
{
	$na=$row['name'];
	$path="admin/".$na."/".$row['upload'];
	

echo "<a target='_blank' href='$path'><img src='$path' class='im'></a>";
}
?>



</div>
</div>


<!--<div class="ga">

<?php /*?><?php
mysql_connect("localhost","root","")or die(mysql_error());
mysql_select_db("agriculture")or die (mysql_error());
$my=mysql_query("select * from addpic order by RAND() LIMIT 0,6")or die(mysql_error());
while($row=mysql_fetch_array($my))
{
	$na=$row['name'];
	$path="admin/".$na."/".$row['upload'];
	

echo "<a target='_blank' href='$path'><img src='$path' class='im'></a>";
}
?><?php */?>
</div>
-->

<?php
include("footer.php");
?>
</body>
</html>
















