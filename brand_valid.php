<?php
session_start();
header('loaction:brand_login.php');
$conn= mysqli_connect('localhost','root','', 'influencer_marketing')or die(mysqli_error());
// echo "hi";
if(isset($_POST['submit']))
{
$name=$_POST['username'];
$pass=$_POST['password'];
//$pass=strip_tags($pass)
$query="select *from brand where brand_username ='".$name."' AND brand_password ='".$pass."'"; $result=mysqli_query($conn,$query); echo "hi";
$num=mysqli_num_rows($result); if($num==1)
{
$_SESSION['username']=$name;
header('location:brand_home.php');
// echo "good";
} else
{ header('location:brand_login.php'); echo "no";
} } else { echo "bye";
}
?>