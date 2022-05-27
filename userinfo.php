<?php
$con=mysqli_connect('localhost:4306','root');
if($con){
    echo "Connection successful";
}
mysqli_select_db($con,'itcc13userdata');
$user=$_POST['user'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$comment=$_POST['comment'];

$query="insert into userinfo(user,email,mobile,comment)values('$user','$email','$mobile','$comment')";
echo "$query";
mysqli_query($con,$query);
header('location:index.php');
?>