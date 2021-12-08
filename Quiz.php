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
    <link rel="stylesheet" href="Quiz.css">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+HK:wght@100;500;700&display=swap" rel="stylesheet">
        <title></title>
    </head>
    <body>
        <div>
            <h1 style="text-align:center;color:chocolate">WEB DEVELOPER QUIZ<h1>
        </div>
        <br/><br/>
    <div>
        <h2 style=" color:green;
    text-align: center;
    font-family:Noto Sans HK;
    font-weight:500;
    font-size:25px">Welcome <?php echo $_SESSION['username'];?></h2>
    </div>
    <br/>
    <div>
    <h3 style="text-align:center;font-weight:350;font-family:Noto Sans HK;border:1px solid grey;border-radius:5px;padding:10px;margin-left:300px;margin-right:300px">
    <?php echo $_SESSION['username']; ?>,you have to select only one out of 4.Best of luck!!</h3>
    </div>
    <br/><br/><br/>
    <form style=" border:1px solid rgb(85, 82, 82);
    width:1300px;
    height:2520px;
    border-spacing:4px;
    padding-left:3px;
    padding-right:3px;
    padding-top:20px;
    margin-left:100px;
    
    border-radius:8px;" action="check.php" method="post">
        <?php
            for($i=1;$i<45;$i++){
            $q="select * from questions where qid=$i";
            $query=mysqli_query($con,$q);
            

            while($rows=mysqli_fetch_array($query)){

                ?>

                <div class="card">
                    <h4 style="font-weight:400;font-family:Noto Sans HK;border:1px solid grey;border-radius:5px;padding:10px;margin-left:300px;
                    margin-right:300px">
                    <?php echo $rows['question']?></h4>
                <?php
            
                
                 $q="select * from answers where ans_id=$i";
                 $query=mysqli_query($con,$q);
     
                 while($rows=mysqli_fetch_array($query)){
                     ?>
                        
                        <div style="font-weight:100;font-family:Noto Sans HK;padding:10px;margin-left:300px;margin-right:300px">
                            <input type="radio" name="quizcheck[<?php echo $rows['ans_id'];?>]" value="<?php echo $rows['aid'];?>">
                            <?php echo $rows['answer'];?>
                        </div>
                 

            
                
            <?php
            }
        }
        }
    
        ?>
        
        <br/><br/>
        <input  style="color:black;
    background-color:blue;
    padding:8px;
    margin-top:170px;
    padding-left:50px;
    padding-right:50px;
    border-radius:4px;
    text-decoration: none;
    font-size:17px;margin-left:600px;
    border-color:blue;
    cursor:pointer" type="submit" name="submit" value="Submit">
    
        
    </form>
        </div>
    <br/><br/><br/><br/><br/>
    <div style="margin-left:630px;margin-top:60px;">
        <a href="logout.php">LOGOUT</a>
    </div>
    <br/><br/>
    </body>
</html>
