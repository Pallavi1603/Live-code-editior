<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="admin.css">
</head>
<body>
<div class="container">
    <h2>Admin</h2>
<br>

    <div style="margin-left:40px;" class="btn_group">
        <button  id="user">Users</button>
        <button id="quize_btn">Quiz</button>
       
    </div>
<br><br>

    <Table id="customers">
        
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Total Question</th>
            <th>Correct Answer</th>
        </tr>
        <?php
        

            $con=mysqli_connect('localhost','root');
            if($con){
                // echo"connection successfull";
            }else{
                echo"no connection";
            }

            mysqli_select_db($con,'quizdbase');

            $sql = "SELECT * FROM user";
            $result = $con->query($sql);

            if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {

    ?>
    <tr>
            <td><?php echo $row['uid']  ?></td>
            <td><?php echo $row['username']  ?></td>
            <td><?php echo $row['totalques']  ?></td>
            <td><?php echo $row['answerscorrect']  ?></td>
        </tr>

    <?php
            }
            } else {
            echo "0 results";
            }
                    
            ?>
        
</Table>

<Table id="quize">
        
        <tr>
            <th>ID</th>
            <th>Questions</th>
            <th>Answer</th>
            <th>Delete</th>
        </tr>
        <?php
        

            $con=mysqli_connect('localhost','root');
            if($con){
                // echo"connection successfull";
            }else{
                echo"no connection";
            }

            mysqli_select_db($con,'quizdbase');

            $sql = "SELECT * FROM questions";
            $result = $con->query($sql);

            if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {

    ?>
    <tr>
            <td><?php echo $row['qid']  ?></td>
            <td><?php echo $row['question']  ?></td>
            <td><?php 
             $sql1 = "SELECT * FROM answers WHERE aid = $row[ans_id]";
             $result1 = $con->query($sql1);
 
             if ($result1->num_rows > 0) {
             // output data of each row
             while($row1 = $result1->fetch_assoc()) {
                    echo $row1['answer'] ; 
             }
            }

            ?>
            </td>

            <form action="delete.php" method="POST">
            <input type="text" value='<?php echo $row['qid'];  ?>' name="id"  style="visibility: hidden"/>
            <td><button type="submit">Delete</button></td>
            </form>
           

        </tr>

    <?php
            } 
        }
            else {
            echo "0 results";
            }
                    
            ?>

            <div  class="add_btn">
               <a href="addQuestions.html" style="border:2px solid black;color:green;padding:10px;text-decoration:none;"  id="add">Add</a> 
            </div>
            <br>
</Table>

</div>

<script>
   var user = document.getElementById("user");
   var quize_btn = document.getElementById("quize_btn");
   var quize = document.getElementById("quize");
   var customers = document.getElementById("customers");




 

   user.style.disabled = "true";
   user.addEventListener('click',()=> {

        quize.style.display = "none";
        customers.style.display = "block";


   });

   quize_btn.addEventListener('click',()=> {
        customers.style.display = "none";
        quize.style.display = "block";
   });

</script>

</body>
</html>
