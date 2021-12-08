<?php
echo "delete";
$id = $_POST['id'];

$con=mysqli_connect('localhost','root');
if($con){
// echo"connection successfull";
}else{
echo"no connection";
}

mysqli_select_db($con,'quizdbase');

$sql = "DELETE FROM questions WHERE qid = $id";
$result = $con->query($sql);
echo $result;

header("location:adminMain.php");