<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body dir="rtl" style="text-align:center;">
<?php
if(isset($_POST['username']) && !empty($_POST['username']) && isset($_POST['password']) && !empty($_POST['password'])){
$username=($_POST['username']);
$password=($_POST['password']);
}
else
exit("برخی از قیلد ها مقداردهی نشده است");
$link=mysqli_connect("localhost","root","123","shopp_db");
if(mysqli_connect_errno())
exit("خطای رخ داده شده با شرح زیر است:".mysqli_connect_error());
$query="SELECT*FROM users WHERE username='$username' AND password='$password'";
$result=mysqli_query($link,$query);
$row=mysqli_fetch_array($result);
if($row)
echo("<p  style='color:green;'><b>{$row['realname']}به فروشگاه ایرانیان خوش آمدید</b></p>");
else
echo("<p  style='color:red;'><b>نام کاربری یا کلمه عبور یافت نشد</b></p>");
mysqli_close($link);
?>


</body>
</html>