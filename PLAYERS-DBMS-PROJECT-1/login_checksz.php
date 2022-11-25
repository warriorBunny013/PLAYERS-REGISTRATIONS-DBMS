<?php
include('conn.php');
$userid=$_POST['user_name'];
$pass=$_POST['pw'];

$sql="select * from masterlogin where user_name='$userid' and password='$pass' ";
$res=mysqli_query($conn,$sql);
if($result=mysqli_fetch_assoc($res))
{
$_SESSION['user_name']=$result['user_name'];
header('location:index_after_login.php');
}
else
{
header('location:index.html#cta');
}
?>