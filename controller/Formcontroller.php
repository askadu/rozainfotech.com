<?
$db='roza';
$con = mysql_connect("203.124.112.47","roza","Shreeram@831");
if(!$con)
{
	die('could not connect: '.mysql_error());
}
mysql_select_db($db,$con);
$sql="INSERT INTO contact_us (id,name,phone_no,email,company_name,website,comment,date)
VALUES
('','$_POST[firstName]','$_POST[phoneNo]','$_POST[emailAddress]','$_POST[website_name]','$_POST[website_URL]','$_POST[message]',now())";
if(!mysql_query($sql,$con))
{
	die('Error: '.mysql_error());
}
echo "Thank you ";
mysql_close($con);
header("location: ../index.html");
?>