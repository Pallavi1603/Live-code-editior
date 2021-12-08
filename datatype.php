<html>
    <head>
        <title>Tutorials</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="learn1.css">
        <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+HK:wght@100;500;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
        <body>
            <div id="navbar">
                <img src="img.jpg" height="68px" width="70px" style="object-fit: contain;"/>
                <a style="font-size:35px;text-decoration:none;background-color: black;border-radius:5px;color:white;padding-left:20px;padding-right:20px;padding-top:10px;padding-bottom:0px;" href="Home.php" class="topnav-icons fa fa-home w3-left w3-bar-item w3-button"   title="Home"></a>               <a style="float:right;   
                text-decoration: none;
                 padding-left:40px;
                padding-right:40px;
                padding-top:15px;
                padding-bottom:13px;
                color:white;
                background-color:black;
                border-radius:25px;
                margin-left:1px;
                margin-right:50px;
                margin-top:25px;
                font-size:18px;
                float: right;
                font-family: Noto Sans HK;"
                 href="login.php">Log in</a>
                <div class="dropdown">
                    <button onclick="myFunction()" class="dropbtn">Tutorials</button>
                    <div id="myDropdown" class="dropdown-content">
                      <a style="padding-left:15px;" href="Learn1.php">Html</a>
                      <a style="padding-left:15px;" href="Learn2.php">CSS</a>
                      <a style="padding-left:15px;" href="Learn3.php">Javascript</a>
                    </div>
            </div> 
            <div class="dropdown1">
                <button onclick="myFunction1()" class="dropbtn1">Compiler</button>
                <div id="myDropdown1" class="dropdown-content1">
                  <a style="padding-left:15px;" href="code1.php">Html Editior</a>
                  <a style="padding-left:15px;" href="code2.php">CSS Editior</a>
                  <a style="padding-left:15px;" href="code3.php">Javascript Editior</a>
                </div>
        </div> 
    </div>
        <div style=" padding-top:17px;
        border-bottom:1px solid white;"></div>
        <div style="   background-color:black;
        height:45px;
        font-size:17px;
        font-family:Noto Sans HK;">
          <a style="text-decoration:none;background-color:chocolate;color:black;font-size:25px;font-family:Noto Sans HK;padding:1px"
          href="learn3.php">Javascript Tutorial</a>
          <a  
           href="Introd.php"> Introduction</a>
          <a style="  text-decoration:none;
          color:white;
          margin-left:12px;" href="whereto.php"> Where to</a>
          <a style="  text-decoration:none;
          color:white;
          margin-left:12px;" href="output.php">Output</a>
          <a style="  text-decoration:none;
          color:white;
          margin-left:12px;" href="statement.php"> Statements</a>
          <a style="  text-decoration:none;
          color:white;
          margin-left:12px;" href="synt.php">Syntax</a>
          <a style="  text-decoration:none;
          color:white;
          margin-left:12px;"href="comment.php">Comments</a>
          <a style="  text-decoration:none;
          color:white;
          margin-left:12px;" href="variable.php">Variables</a>
          <a style="  text-decoration:none;
          color:white;
          margin-left:12px;" href="let.php">Let</a>
          <a style="  text-decoration:none;
          color:white;
          margin-left:12px;"href="const.php"> Const</a>
          <a style="  text-decoration:none;
          color:white;
          margin-left:12px;"href="operator.php">Operators</a>
          <a style="  text-decoration:none;
          color:white;
          margin-left:12px;" href="arthimetic.php">Arthimetic</a> 
          <a style="  text-decoration:none;
          color:white;
          margin-left:12px;" href="assignment.php">Assignment</a>   
          <a style="background-color:rgb(37, 29, 18);border-radius:10px;padding:7px;" href="datatype.php">Data types</a> 
          <a style="  text-decoration:none;
          color:white;
          margin-left:12px;" href="function.php">Functions</a> 
         
      </div>
       
      <div style=" border:1px solid rgb(34, 33, 33);
      width:800px;
      height:1250px;
      border-spacing:4px;
      padding:50px;
      margin-left:300px;
      background-color: rgb(44, 43, 43);">
        <h1 style="font-size:45px;font-family:Noto Sans HK;font-weight: 500;color:rgb(194, 129, 105)"> JavaScript Data Types </h1><br><br><br>
        <div style=" background-color: rgb(24, 23, 23);
        height:2px;
        width:800px;"></div><br><br>
        <h4 style="font-size:17px;font-family:Noto Sans HK;font-weight:500;">
        In programming, data types is an important concept.
 </h4><br><br>
        <div style=" background-color: rgb(24, 23, 23);
        height:2px;
        width:800px;"></div><br><br>
        <h4 style="font-size:17px;font-family:Noto Sans HK;font-weight:300;" >The Concept of Data Types<br>
       
        The Concept of Data Types<br>
        To be able to operate on variables, it is important to know something about the type.<br>

Without data types, a computer cannot safely solve this.<br>
Does it make any sense to add "Volvo" to sixteen? Will it produce an error or will it produce a result?</h4><br><br>
            <div style=" background-color: rgb(24, 23, 23);
        height:2px;
        width:800px;"></div><br><br>
        
          <div style="  border:1px solid rgb(70, 68, 68);
          border-radius: 4px;
      width:400px;
      height:300px;
      border-spacing:4px;
      padding:50px;
      margin-left:150px;
      background-color: rgb(32, 31, 31);">
            <p style="font-size:20px;font-family:Noto Sans HK;font-weight:500;">A Simple Javascript Document:</p><br><br>
            <p style="float:right;padding-right:200px;position:absolute;left:600px;top:800;font-size:16px;color:grey;font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;">let</p>      
            <p style="float:right;padding-right:200px;position:absolute;left:630px;top:800;font-size:16px;color:white;font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;">x</p>         
            <p style="float:right;padding-right:200px;position:absolute;left:650px;top:800;font-size:16px;color:white;font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;">=</p>      
            <p style="float:right;padding-right:200px;position:absolute;left:670px;top:800;font-size:16px;color:rgb(0, 204, 255);font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;">100</p>      
            <p style="float:right;padding-right:200px;position:absolute;left:710px;top:800;font-size:16px;color:white;font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;">+</p>      
            <p style="float:right;padding-right:200px;position:absolute;left:730px;top:800;font-size:16px;color:rgb(0, 204, 255);font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;">50</p>      
            <p style="float:right;padding-right:200px;position:absolute;left:750px;top:800;font-size:16px;color:white;font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;">;</p>      
            <p style="float:right;padding-right:200px;position:absolute;left:600px;top:830;font-size:16px;color:white;font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;">document.getElementById(</p>      
            <p style="float:right;padding-right:200px;position:absolute;left:800px;top:830;font-size:16px;color:rgb(23, 94, 23);font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;">"demo"</p>      
            <p style="float:right;padding-right:200px;position:absolute;left:600px;top:860;font-size:16px;color:white;font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;">)inner.HTML = x;</p>      
            <form action="code3.php">
              <button style="position: absolute;font-family:Noto Sans HK;left:563;top:955;padding:9px;background-color: coral;border-color: coral;border-radius:15px;cursor: pointer;font-size:15px;">Try it yourself</button>  
               </form>
             <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
          
             <h3 style="font-size:23px;font-family:Noto Sans HK;font-weight:500;color:rgb(194, 129, 105)">JavaScript Types are Dynamic</h3><br><br>
               <div style="font-size:17px;font-family:Noto Sans HK;font-weight:300;">
               JavaScript has dynamic types. This means that the same variable can be used to hold different data types.<br>
               JavaScript Strings:<br>
               A string (or a text string) is a series of characters like "John Doe".<br>

Strings are written with quotes. You can use single or double quotes:<br>

               <br><br>
         </div><br><br><br>

  
            
              

              </div>
        </div>

        </body>
        <script>

 


function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

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

function myFunction1() {
  document.getElementById("myDropdown1").classList.toggle("show");
}

window.onclick = function(event) {
  if (!event.target.matches('.dropbtn1')) {
    var dropdowns1 = document.getElementsByClassName("dropdown-content1");
    var i;
    for (i = 0; i < dropdowns1.length; i++) {
      var openDropdown = dropdowns1[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
} 


</script>
