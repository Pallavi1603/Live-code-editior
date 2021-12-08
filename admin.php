<?php
session_start();

$con=mysqli_connect('localhost','root',);

?>



<!DOCTYPE html>
    <html>
        <head>
        <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@700&display=swap" rel="stylesheet"> 
        <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+HK:wght@100;500;300&display=swap" rel="stylesheet">
    </head>
    <body>
        <header>
            <div style="border:1px solid rgb(85, 82, 82);
                            width:345px;
                            height:400px;
                            border-spacing:4px;
                            padding:50px;
                            margin-left:540px;
                            margin-top:150px;
                            border-radius:15px;">
                <form action="logincheck.php" method="POST">

                <?php   
                    if(isset($_GET['error'])){
                        echo "<h4>Username or Password is wrong</h4>";
                    }
                ?>
                <div style="font-family:Source Sans Pro;font-size:40px">
                Admin
            </div>
                    <div>
                    <h3 style="font-family:Source Sans Pro;font-size:20px;">Username</h1>
                    <input style="width:345px;
                                height:60px;
                                padding: 10px 20px;
                                margin: 1px 0;
                                display: inline-block;
                                border: 1px solid #ccc;
                                box-sizing: border-box;
                                border-radius:5px;" type="text" name="user" value="" autocomplete="off" required>
                    </div>
                    <div>
                    <h3 style="font-family:Source Sans Pro;font-size:20px;">Password</h1>
                    <input style="width:345px;
                                height:60px;
                                padding: 10px 20px;
                                margin: 1px 0;
                                display: inline-block;
                                border: 1px solid #ccc;
                                box-sizing: border-box;
                                border-radius:5px;" type="text" name="pass" value="" autocomplete="off" required>
                    </div>
                    <div>
                    <button style=" margin-left:70px;
    margin-top:40px;
    padding-left:70px;
    padding-right:70px;
    padding-top:10px;
    padding-bottom:10px;
    font-family:Source Sans Pro;
    font-size:20px;
    border-radius:20px;
    background-color:chocolate;
    cursor: pointer;
    border-color:chocolate;" name="admin" type="submit">Submit</button>
</div>
<div style="margin-left:90px;font-family:Source Sans Pro;font-size:16px">
<p>You want to login?<a style="text-decoration:none"href="login.php">Login</a></p>
                </div>
                </form>
</div>
        </header>
    </body>
    </html>