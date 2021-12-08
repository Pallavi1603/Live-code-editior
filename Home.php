<html>
    <head>
        <title>Live Code Editior</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="home.css"/>
        <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+HK:wght@100;500;700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+TC:wght@700&family=Playfair+Display:ital,wght@0,400;1,500&display=swap" rel="stylesheet">  
        <link href="https://fonts.googleapis.com/css2?family=Orbitron&display=swap" rel="stylesheet"> 
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="icon" href="/favicon.ico" type="image/x-icon">
    </head>
    <body>
        <!--Header-->
        <h1>CodeSearch{;}</h1>
        <div id="navbar">
            <img src="img.jpg" height="70px" width="70px" style="object-fit: contain;"/>
            <a href="admin.php" >Admin</a>
            <a href="login.php">Log in</a>
            <a href="sign up.php" >Sign up</a>
            
        </div>
        <!-- Automatic slideshow -->
        <div id="slide">
        <figure style="object-fit:contain;">
            <img class="Slide" src="img2.jpg" style="width:1519px; height:750px;"/>
            <img class="Slide" src="img3.jpg"  style="width:1519px ;height:750;"/>
            <img class="Slide" src="img1.jpg" style= "width:1519px ;height:750px;"/>
        </figure>
    </div>
    <script>
        var Index = 0;
        Slide();
        
        function Slide() {
          var i;
          var x = document.getElementsByClassName("Slide");
          for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";  
          }
          Index++;
          if (Index > x.length) {Index = 1}    
          x[Index-1].style.display = "block";  
          setTimeout(Slide, 2000); //Change image every 2 seconds
        }

        window.onscroll = function() {myFunction()};

        var navbar = document.getElementById("navbar");
        var sticky = navbar.offsetTop;

        function myFunction() {
    if (window.pageYOffset >= sticky) {
        navbar.classList.add("sticky")
    } else {
        navbar.classList.remove("sticky");
     }
    } 
  
    </script>

    <div class="Code">
    </div>
    <div class="editior">
    </div>
    <div class="program">
        <h2>HTML</h2>
        <p>The language for building web pages</p>
        <form action="learn1.php">
        <button>Learn HTML</button>
        </form> 
        
        
        <span class="code1">
            <p style="float:right;padding-right:200px;position:absolute;left:953px;top:1350px;">Html Example:</p>
            <span class="tagcolor" style="color: mediumblue; --darkreader-inline-color:#5190ff;float:right;padding-right:150px;position:absolute;left:950px;top:1403px;font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;" data-darkreader-inline-color="blue">&lt;</span>
            <p style="float:right;padding-right:200px;position:absolute;left:965px;top:1403px;font-size:16px;color:chocolate;font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;">!DOCTYPE</p>
            <p style="float:right;padding-right:200px;position:absolute;left:1050px;top:1403px;font-size:16px;color:dimgray;font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;">html</p>
            <span class="tagcolor" style="color: mediumblue; --darkreader-inline-color:#5190ff;float:right;padding-right:200px;position:absolute;left:1086px;top:1403px;font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;" data-darkreader-inline-color="">&gt;</span>
            <span class="tagcolor" style="color: mediumblue; --darkreader-inline-color:#5190ff;float:right;padding-right:200px;position:absolute;left:950px;top:1427px;font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;" data-darkreader-inline-color="">&lt;</span>
            <p style="float:right;padding-right:200px;position:absolute;left:964px;top:1427px;font-size:16px;color:chocolate;font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;">html</p>
            <span class="tagcolor" style="color: mediumblue; --darkreader-inline-color:#5190ff;float:right;padding-right:200px;position:absolute;left:1000px;top:1427px;font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif" data-darkreader-inline-color="">&gt;</span>
            <span class="tagcolor" style="color: mediumblue; --darkreader-inline-color:#5190ff;float:right;padding-right:200px;position:absolute;left:950px;top:1450px;font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif" data-darkreader-inline-color="">&lt;</span>
            <p style="float:right;padding-right:200px;position:absolute;left:964px;top:1450px;font-size:16px;color:chocolate;font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;">title</p>
            <span class="tagcolor" style="color: mediumblue; --darkreader-inline-color:#5190ff;float:right;padding-right:200px;position:absolute;left:994px;top:1450px;font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif" data-darkreader-inline-color="">&gt;</span>
            <p style="float:right;padding-right:200px;position:absolute;left:1005px;top:1450px;font-size:16px;color:white;font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;">Learn HTML</p>
            <span class="tagcolor" style="color: mediumblue; --darkreader-inline-color:#5190ff;float:right;padding-right:200px;position:absolute;left:1097px;top:1450px;font-size:16px;color:mediumblue;font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;" data-darkreader-inline-color="">&lt;</span>
            <p style="float:right;padding-right:200px;position:absolute;left:1110px;top:1450px;font-size:16px;color:chocolate;font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;">title</p>
            <span class="tagcolor" style="color: mediumblue; --darkreader-inline-color:#5190ff;float:right;padding-right:200px;position:absolute;left:1140px;top:1450px;font-size:16px;color:mediumblue;font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;" data-darkreader-inline-color="">&gt;</span>
            <span class="tagcolor" style="color: mediumblue; --darkreader-inline-color:#5190ff;float:right;padding-right:200px;position:absolute;left:950px;top:1470px;font-size:16px;color:mediumblue;font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;" data-darkreader-inline-color="">&lt;</span>
            <p style="float:right;padding-right:200px;position:absolute;left:963px;top:1470px;font-size:16px;color:chocolate;font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;">body</p>
            <span class="tagcolor" style="color: mediumblue; --darkreader-inline-color:#5190ff;float:right;padding-right:200px;position:absolute;left:1002px;top:1470px;font-size:16px;color:mediumblue;font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;" data-darkreader-inline-color="">&gt;</span>
            <span class="tagcolor" style="color: mediumblue; --darkreader-inline-color:#5190ff;float:right;padding-right:200px;position:absolute;left:950px;top:1490px;font-size:16px;color:mediumblue;font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;" data-darkreader-inline-color="">&lt;</span>
            <p style="float:right;padding-right:200px;position:absolute;left:963px;top:1490px;font-size:16px;color:chocolate;font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;">h1</p>
            <span class="tagcolor" style="color: mediumblue; --darkreader-inline-color:#5190ff;float:right;padding-right:200px;position:absolute;left:981px;top:1490px;font-size:16px;color:mediumblue;font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;" data-darkreader-inline-color="">&gt;</span>           
            <p style="float:right;padding-right:200px;position:absolute;left:993px;top:1490px;font-size:16px;color:chocolate;font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;">Hello world</p>
            <span class="tagcolor" style="color: mediumblue; --darkreader-inline-color:#5190ff;float:right;padding-right:200px;position:absolute;left:1081px;top:1490px;font-size:16px;color:mediumblue;font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;"data-darkreader-inline-color="">&lt;</span>
            <p style="float:right;padding-right:200px;position:absolute;left:1094px;top:1490px;font-size:16px;color:chocolate;font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;">h1</p>
            <span class="tagcolor" style="color: mediumblue; --darkreader-inline-color:#5190ff;float:right;padding-right:200px;position:absolute;left:1110px;top:1490px;font-size:16px;color:mediumblue;font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;"data-darkreader-inline-color="">&gt;</span> 
            <span class="tagcolor" style="color: mediumblue; --darkreader-inline-color:#5190ff;float:right;padding-right:200px;position:absolute;left:950px;top:1510px;font-size:16px;color:mediumblue;font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;"data-darkreader-inline-color="">&lt;</span>
            <p style="float:right;padding-right:200px;position:absolute;left:964px;top:1511px;font-size:16px;color:chocolate;font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;">body</p>
            <span class="tagcolor" style="color: mediumblue; --darkreader-inline-color:#5190ff;float:right;padding-right:200px;position:absolute;left:1002px;top:1511px;font-size:16px;color:mediumblue;font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;"data-darkreader-inline-color="">&gt;</span>
            <span class="tagcolor" style="color: mediumblue; --darkreader-inline-color:#5190ff;float:right;padding-right:200px;position:absolute;left:950px;top:1531px;font-size:16px;color:mediumblue;font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;"data-darkreader-inline-color="">&lt;</span>
            <p style="float:right;padding-right:200px;position:absolute;left:964px;top:1531px;font-size:16px;color:chocolate;font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;">html</p>
            <span class="tagcolor" style="color: mediumblue; --darkreader-inline-color:#5190ff;float:right;padding-right:200px;position:absolute;left:1000px;top:1531px;font-size:16px;color:mediumblue;font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;"data-darkreader-inline-color="">&gt;</span>
            <form action="code1.php">
                <button style="margin-left:700px;padding-left:30px;padding-right:30px;position:absolute;top:1580px;position:static;">Let's try</button>
            </form> 
        </span>
        </div>
    <div class="program1">
        <h3>CSS</h3>
        <p>The language for styling web pages</p>
        <form action="Learn2.php">
        <button>Learn CSS</button>
        </form>  
        <span class="code2">
            <p style="float:right;padding-right:200px;position:absolute;left:966px;top:1890px">CSS Example:</p>
            <p style="float:right;padding-right:200px;position:absolute;left:964px;top:1940;font-size:16px;color:chocolate;font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;">body</p>
            <p style="float:right;padding-right:200px;position:absolute;left:1010px;top:1940;font-size:16px;color:white;font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;">{</p>
            <p style="float:right;padding-right:200px;position:absolute;left:1000px;top:1970;font-size:16px;color:grey;font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;">background-color:</p>
            <p style="float:right;padding-right:200px;position:absolute;left:1150px;top:1970;font-size:16px;color:rgb(23, 94, 23);font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;">black;</p>                       
            <p style="float:right;padding-right:200px;position:absolute;left:1000px;top:2000;font-size:16px;color:grey;font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;">text-align:</p>                       
            <p style="float:right;padding-right:200px;position:absolute;left:1085px;top:2000;font-size:16px;color:rgb(23, 94, 23);font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;">center;</p>                       
            <p style="float:right;padding-right:200px;position:absolute;left:990px;top:2030;font-size:16px;color:white;font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;">}</p>   
            <form action="code2.php">
                <button style="margin-left:706px;padding-left:30px;padding-right:30px;position:absolute;top:2080px;position:static;">Let's try</button>
            </form> 
        </span>    
    </div>
    <div class="program2">
        <h4>JAVASCRIPT</h4>
        <p>The language for programming web pages</p>
        <form action="Learn3.php">
        <button>Learn JAVASCRIPT</button>
        </form>
        <span class="code1">
            <p style="float:right;padding-right:200px;position:absolute;left:966px;top:2390px">Javascript Example:</p>
            <p style="float:right;padding-right:200px;position:absolute;left:990px;top:2460;font-size:16px;color:grey;font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;">let</p>      
            <p style="float:right;padding-right:200px;position:absolute;left:1020px;top:2460;font-size:16px;color:white;font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;">x</p>         
            <p style="float:right;padding-right:200px;position:absolute;left:1035px;top:2460;font-size:16px;color:white;font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;">=</p>      
            <p style="float:right;padding-right:200px;position:absolute;left:1050px;top:2460;font-size:16px;color:rgb(0, 204, 255);font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;">100</p>      
            <p style="float:right;padding-right:200px;position:absolute;left:1090px;top:2458;font-size:16px;color:white;font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;">+</p>      
            <p style="float:right;padding-right:200px;position:absolute;left:1113px;top:2460;font-size:16px;color:rgb(0, 204, 255);font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;">50</p>      
            <p style="float:right;padding-right:200px;position:absolute;left:1136px;top:2460;font-size:16px;color:white;font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;">;</p>      
            <p style="float:right;padding-right:200px;position:absolute;left:990px;top:2490;font-size:16px;color:white;font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;">document.getElementById(</p>      
            <p style="float:right;padding-right:200px;position:absolute;left:1200px;top:2490;font-size:16px;color:rgb(23, 94, 23);font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;">"demo"</p>      
            <p style="float:right;padding-right:200px;position:absolute;left:990px;top:2520;font-size:16px;color:white;font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;">)inner.HTML = x;</p>      
            <form action="code3.php">
                <button style="margin-left:730px;padding-left:30px;padding-right:30px;position:absolute;top:2650px">Let's try</button>
            </form> 
        </span>
    </div>
    <div class="last">
        <p style="font-size:23px;font-family: 'Courier New', Courier, monospace;color:honeydew">CodeSearch is for beginners to write code and it will help you to clear your basics.</p>
        <p style="font-size:23px;font-family: 'Courier New', Courier, monospace;color:honeydew">Baics content and Quiz will help you to improve your performance.</p>
        <p style="font-size:23px;font-family: 'Courier New', Courier, monospace;color:honeydew;border-bottom:1px solid rgb(54, 53, 53);padding-bottom:80px;">{Keep coding...}</p>
        <div class="icons">
        <p style="font-size:30px;padding-left:15px;font-weight:300;color:chocolate">For more</p><br/><br/>
            <div class="I">
                <ul style="list-style: none;">
                <li><a href="https://www.instagram.com/letscode64/">
                    <img src="insta.jpg" height="50px" width="80px" style="padding-right:780px;">
                </a></li>
                <li><a href="https://www.linkedin.com/in/let-s-code-376879217/">
                    <img src="Link.jpg" height="50px" width="80px" style="padding-right:600px;position: absolute;top:3162;left:720px" />
                </a></li>
                <li><a href="https://www.facebook.com/home.php?ref=wizard">
                    <img src="face.jpg" height="50px" width="80px" style="padding-right:600px;position: absolute;top:3162;left:830px" />
                </a></li>
                </ul>
            </div>
        </div>
    </div>
    </body>
</html>