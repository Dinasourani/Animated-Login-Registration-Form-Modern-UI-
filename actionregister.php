<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body dir="ltr" style="text-align:center;">
<?php
if(isset($_POST['realname'])&&!empty($_POST['realname'])&&isset($_POST['username'])&&!empty($_POST['username'])&&isset($_POST['password'])&&!empty($_POST['password'])&&isset($_POST['repassword'])&&!empty($_POST['repassword'])&&isset($_POST['email'])&&!empty($_POST['email'])){
$realname=$_POST['realname'];
$username=$_POST['username'];
$password=$_POST['password'];
$repassword=$_POST['repassword'];
$email=$_POST['email'];
}
else
exit("برخی از قیلد ها مقداردهی نشده است");
if($password!=$repassword)
exit("کلمه عبور مشابه نیست");
if(filter_var($email,FILTER_VALIDATE_EMAIL)==false){
exit("ایمیل نامعتبر است");
}
$link=mysqli_connect("localhost","root","123","shopp_db");
if(mysqli_connect_errno())
exit("خطای رخ داده شده با شرح زیر است:".mysqli_connect_error());
$query="INSERT INTO users(realname,username,password,email,type) VALUES
('$realname','$username','$password','$email','0')";
if(mysqli_query($link,$query)===true){
echo("<p  style='color:green;'><b>".$realname." گرامی عضویت شما با نام کاربری  ".$username."  در فروشگاه با موفقیت انجام شد "."</b></p>");
}
else{
echo("<p  style='color:red;'><b> عضویت شما در فروشگاه انجام نشد </b></p>");
}
mysqli_close($link);
?>
</body>
</html>