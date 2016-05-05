<?php
echo 'arshak shah nwe'
die('hahahah hack by  :)');
<<<<<<< HEAD
$to = "dhirendra.rathod@drcinfotech.com"; //darshak @dadfasd fsldflsadfjlas darshak shah nwe
=======
$to = "dhirendra.rathod@drcinfotech.com"; //This is write by Mr.Rathod
$to = "dhirendra.rathod@drcinfotech.com"; //darshak @dadfasd fsldflsadfjlas
>>>>>>> origin/master
$subject = "HTML email";

$message = "
<html>
<head>
<title>HTML email</title>
</head>
<body>
<p>This email contains HTML Tags!</p>
<table>
<tr>
<th>Firstname</th>
<th>Lastname</th>
</tr>
<tr>
<td>John</td>
<td>Doe</td>
</tr>
</table>
</body>
</html>
";

// Always set content-type when sending HTML email
$headers = '';
$headers = 'MIME-Version: 1.0'.PHP_EOL;
$headers .= 'Content-type: text/html; charset=iso-8859-1'.PHP_EOL;
$headers .= 'From: info@idahk.org<From: info@idahk.org>'.PHP_EOL; 


if(mail($to,$subject,$message,$headers))
{
	echo "Done";
}else
{
	echo "Not done";
}
?> 