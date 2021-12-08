<html>
    <head>
        <title>Login</title>
        <link rel="stylesheet" href="login.css">
        <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+HK:wght@100;500;700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@700&display=swap" rel="stylesheet"> 
    </head>
    <body>
        <div class="dropdown">
            <button onclick="myFunction()" class="dropbtn" style="position:absolute;top:10px;background-color:rgb(31, 28, 28);">
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
              <a href="Learn1.php">Tutorials</a>
              <a href="code1.php"> Code Editior</a>
            </div>
          </div>
        <form action="validation.php" method="post">
        <div id="Sign">
        <h1>Login</h1>
        <br/>
        <div class="new">
        <label for="user">Username</label>
        <div class="user">
        <input type="text" name="user" autocomplete="off"  required>
        </div>
        <br/>
        <label for="password">Password</label>
        <br/>
        <input type="text" name="password" autocomplete="off"  required>
        <br/>
        <button type="submit">Login</button>
        <p>Need an acount?<a href="sign up.php">Signup</a></p>
        </div>
        </div>
        </form>

        <script>
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