<!DOCTYPE html>
<html lang=en>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width-device-width,initial-scale=1.0">
        <title>Code Editior</title>
        <meta name="description" content="online javascript compiler">
        <link rel="stylesheet" href="code2.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    </head>

    <body>
        <div class="editior-menu">
            <a style="font-size:35px;text-decoration:none;background-color: black;border-radius:5px;color:white;padding-left:10px;padding-right:10px;padding-top:3px;padding-bottom:0px;margin-right:10px" href="Home.php" class="topnav-icons fa fa-home w3-left w3-bar-item w3-button"   title="Home"></a>             <button class="btn btn-dark">Dark Mode</button>
            <button class="btn btn-light">Light Mode</button>
            <button class="btn btn-run"><i class="fa fa-play"></i>Run</button>
            <div class="live">
                <label for="live">Live-</label>
                <input type="checkbox" id="live">
            </div>
        </div>
        <div class="container">
            <div class="left">
                <div class="editior" contenteditable="">
                    Write your code...
                </div>
            </div>
            <div class="bar" title="Click and Drag"></div>
            <div class="right">
                <iframe src="" frameborder="0" class="iframe"></iframe>
            </div>
        </div>
        <script src="code2.js"></script>
    </body>
</html>