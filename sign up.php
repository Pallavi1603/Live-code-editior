<html>
    <head>
        <link rel="stylesheet" href="sign up.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+HK:wght@100;500;700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@700&display=swap" rel="stylesheet"> 
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <title>Signup</title>
    </head>
    <body>
        <div class="dropdown">
            <button onclick="myFunction()" class="dropbtn" style="position:absolute;top:10px">
                <div class="div">
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
                <div class="div">
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
                <div class="div">
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
            </button>
            <div id="myDropdown" class="dropdown-content" >
              <a href="Home.php">Home</a>
              <a href="learn1.php">Tutorials</a>
              <a href="code1.php"> Code Editior</a>
            </div>
          </div>
        <form action="registration.php" method="post">
        <div id="Sign">
        <h1>Sign up</h1>
        <br/>
        <h3 style="font-family:Source Sans Pro;font-size:20px">Username</h3>
        <div class="new">
        <!--<label for="user">Username</label>-->
        <div class="user">
        <input type="text" id="username"  name="user" required>
        </div>
        <div class="new">
        <h3 style="font-family:Source Sans Pro;font-size:20px">Email</h3>
          <div class="email">
          <input type="text" id="myEmail" name="email" autocomplete="off"  pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required>
          </div>
        <!--<label for="password">Password</label>-->
        <h3 style="font-family:Source Sans Pro;font-size:20px">Password</h3>
        <input type="text" name="password" autocomplete="off"  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"  required>
        <br/>
        <div style="font-family:Noto Sans HK; font-size:12px;"><i class="fa fa-circle" style="font-size:10px;color:chocolate"></i>One letter uppercase</div>
        <div style="font-family:Noto Sans HK; font-size:12px;" ><i class="fa fa-circle" style="font-size:10px;color:chocolate"></i>Mininmum 8 characters</div>
        <div style="font-family:Noto Sans HK; font-size:12px;" ><i class="fa fa-circle" style="font-size:10px;color:chocolate"></i>Mininmum 1 numbers</div>
        <div style="font-family:Noto Sans HK; font-size:12px;"><i class="fa fa-circle" style="font-size:10px;color:chocolate"></i> Lowercase letter</div>
        <button type="submit">Sign up</button>
        <p>Already have an account?<a href="login.php">Log in</a></p>
        </div>
        </div>
        </form>
        

<script>
    function myFunction() {
    var x = document.getElementById("myEmail").pattern;
    document.getElementById("demo").innerHTML = x;
}
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}


 
</script>
</body>
</html>
