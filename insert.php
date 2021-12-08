<?php
$question = $_POST['question'];
$questionId = $_POST['questionId'];
$a1id = $_POST['a1id'];
$a1 = $_POST['a1'];
$a2id = $_POST['a2id'];
$a2 = $_POST['a2'];
$a3id = $_POST['a3id'];
$a3 = $_POST['a3'];
$a4id = $_POST['a4id'];
$a4 = $_POST['a4'];
$correct = $_POST['correct'];

$con=mysqli_connect('localhost','root');
if($con){
// echo"connection successfull";
}else{
echo"no connection";
}

mysqli_select_db($con,'quizdbase');

$sql = "INSERT INTO questions (question,ans_id)
VALUES ('$question', $correct);";
$result = $con->query($sql);

$sql1 = "INSERT INTO answers (aid,answer,ans_id)
VALUES ($a1id,'$a1', $questionId); ";
$result1 = $con->query($sql1);

$sql2 = "INSERT INTO answers (aid,answer,ans_id)
VALUES ($a2id,'$a2', $questionId); ";
$result2 = $con->query($sql2);

$sql3 = "INSERT INTO answers (aid,answer,ans_id)
VALUES ($a3id,'$a3', $questionId); ";
$result3 = $con->query($sql3);

$sql4 = "INSERT INTO answers (aid,answer, ans_id)
VALUES ($a4id,'$a4', $questionId); ";
$result4 = $con->query($sql4);

header("location:adminMain.php");