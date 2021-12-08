<?php

session_start();
header('location:login.php');

$con=mysqli_connect('localhost','root');
if($con){
    echo"connection successfull";
}else{
    echo"no connection";
}

mysqli_select_db($con,'session');

$user = $_POST['user'];
$pass = $_POST['pass'];

if(isset($_POST['admin'])){


    if($user == "Pallavi123"){
        if($pass == "pallavi@456"){
            header("location:adminMain.php");
        }else{
            echo "wrong password";
        header("location:admin.php?&error=wrongPassword");

        }
    }else{
        echo "wrong username";
        header("location:admin.php?&error=wrongUsername");
    }

}
