<?php

session_start();
if(!isset($_SESSION['username'])){
    header('location:login.php');
}

$con=mysqli_connect('localhost','root');
if($con){
    
}
mysqli_select_db($con,'quizdbase');
?>

<!DOCTYPE html>
    <html>
        <head>
        <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+HK:wght@100;500;700&display=swap" rel="stylesheet">
        </head>
            <body>
                <h1 style="text-align:center;color:chocolate;">WEB DEVELOPER QUIZ</h1>
                <br><br> <br><br><br><br>
                <div style="text-align:center;font-family:Noto Sans HK;">
            <table>
            <tr>
                <th colspan="2"><h1 style="background-color:black;text-align:center;margin-left:400px;padding-left:300px;padding-right:300px">Results</h1><th>
</tr>
        <div style="background-color:green">
            <tr>
                <td style="padding-left:400px;margin-left:50px;">Questions Attempted</td>


            <?php
     $result=0;
    
    if(isset($_POST['submit'])){
        if(!empty($_POST['quizcheck'])){
            $count=count($_POST['quizcheck']);

            ?>
            <td>
            <?php
            echo "Out of 10, You have selected " .$count. " options";
            ?>
            </tr>
        </div>

           
            <?php
            $selected=$_POST['quizcheck'];
            //print_r($selected);

            $q="select * from questions";
            $ansresults=mysqli_query($con,$q);
            $i=1;
            while($rows=mysqli_fetch_array($ansresults)){

                $checked=$rows['ans_id'] == $selected[$i];

                if($checked){
                    $result++;
                }
                else{
                    
                }

                $i++;

            }
            ?>
            <div style="background-color:green">
            <tr>
                <td style="padding-left:370px;padding-top:23px;">Total Score</td>
                <td colspan="2">
            <?php
            echo "<br> Your Total Score ".$result;
        }
        else{

            echo"
            <h4>Please complete your Quiz</h4>
            ";
    
        }

        }
    
    ?>
    </td>
    </tr>
        <?php

        $name=$_SESSION['username'];
        $finalresult="insert into user(username,totalques,answerscorrect) values ('$name','10','$result')";
        $queryresult=mysqli_query($con,$finalresult);

    ?>
    </table>
    </div>
    </div>
    <div style="margin-left:710px;margin-top:100px">
    <a style=" color:rgb(31, 29, 25);
    background-color:chocolate;
    padding:8px;
    border-radius:4px;
    text-decoration: none;
    font-size:17px;"href="logout.php">LOGOUT</a>
    </div>

    </body>
        </html>
