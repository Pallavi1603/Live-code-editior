<?php

session_start();


$con=mysqli_connect('localhost','root');
if($con){
    echo"connection successfull";
}else{
    echo"no connection";
}

mysqli_select_db($con,'session');

$user=$_POST['user'];
$pass=$_POST['password'];

$q="select * from signin where name ='$user' && password='$pass'";

$result=mysqli_query($con,$q);

$num=mysqli_num_rows($result);

if($num==1){
    $_SESSION['username']=$user;
    header('location:Quiz.php');
}else{
    header('location:login.php');
}

?>