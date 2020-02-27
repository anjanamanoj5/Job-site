<?php error_reporting(0);
$name=$_GET['name'];
$email=$_GET['email'];
$phone=$_GET['tel'];
$mes=$_GET['message'];
$file=$_GET['file'];

echo "Name: ".$name;
echo "<br/>";

echo "email:".$email;
echo "<br/>";
echo "Phone: ".$phone;
echo "<br/>";
echo "message:".$mes;
echo "<br/>";
echo "file :".$file;

?>
