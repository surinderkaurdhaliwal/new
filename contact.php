<!doctype html>
<html>
<head>
<meta charset="utf-8">

<link rel="stylesheet" type="text/css" href="style.css">
<script src="js/jquery-1.9.1.min.js"></script>
</head>
<body>
<?php

include("god.php");

?>

<div class="container">
<h1 align="center"><i>Contact Us</i></h1>
<?php
mysql_connect("localhost","root","")or die(mysql_error());
mysql_select_db("agriculture")or die(mysql_error());
if (isset($_POST['sub']))
{
	$a=$_POST['name'];
	$aa=$_POST['email'];
	$b=$_POST['subject'];
	$bb=$_POST['mess'];
	$my=mysql_query("insert into contact(firstname,email,sub,message)
	value('$a','$aa','$b','$bb')") or die (mysql_error());
	if($my)
	{
	echo "<center><font class='mm'>Done</font></center>";
	?>
       <script>
		$(document).ready(function(e)
		 {
          $(".mm").fadeOut(2000);
        });
		</script>
    <?php
	}
	else
	{
		echo "<center><font clas='mm'>Error</center></font>";
		
		?>
           <script>
		$(document).ready(function(e)
		 {
          $(".mm").fadeOut(2000);
        });
		</script>
        <?php
	}
}
?>
<table width="70%" align="center">
<tr>
<td>
  <form action="" method="post">First Name</label>
    <input type="text" id="fname" name="name" placeholder="Your name.."
" method="post">
    <label f
    <label for="lname">Email</label>
    <input type="email" id="lname" name="email" placeholder="Email *">
    <label for="country">Subject</label>
<input type="text" class="form-control" id="subject" name="subject" placeholder="Subject:">
  

    <label for="subject">Message</label>
    <textarea id="message" name="mess" placeholder="Write something.." style="height:380px"></textarea>

    <center><input type="submit" value="Submit" name="sub"></center>
  </form>
  </td>
  </tr>
  </table>
  
</div>
<?php

include("footer.php");
?>
</body>
</html>
