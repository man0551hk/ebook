<?php
session_start();
if (isset($_POST["password"])) {
  if ($_POST["password"] == "RalphLaurenLearning") {
    $_SESSION["logined"] = 1;
    ?><meta http-equiv="refresh" content="0;url=index.php" /><?php
  }
}
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script>
        var isMobile = {
          Android: function() {
              return navigator.userAgent.match(/Android/i);
          },
          BlackBerry: function() {
              return navigator.userAgent.match(/BlackBerry/i);
          },
          iOS: function() {
              return navigator.userAgent.match(/iPhone|iPod/i);
          },
          iPad: function() {
              return navigator.userAgent.match(/iPhone|iPad|iPod/i);
          },
          Opera: function() {
              return navigator.userAgent.match(/Opera Mini/i);
          },
          Windows: function() {
              return navigator.userAgent.match(/IEMobile/i);
          },
          any: function() {
              return (isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Opera() || isMobile.Windows());
          }
        };
        window.onload = function() {
          if( isMobile.any() ) {
            $("#desktopGrid").css("display", "none");
            $("#mobileGrid").css("display", "block");
          } else {
            $("#desktopGrid").css("display", "block");
            $("#mobileGrid").css("display", "none");
          }
        }
    </script>   
    <style>
       .btn-primary {
        color: rgba(108, 88, 179, 0.75);
        letter-spacing: 1px;
        line-height: 15px;
        border: 2px solid rgba(108, 89, 179, 0.75);
        border-radius: 10px;
        background: transparent;
        transition: all 0.3s ease 0s;
      } 
      #desktopGrid {
        text-align: center; 
        display:none;
        margin-top:30px; 
        background-image: url(images/login.png);
        background-repeat: no-repeat;
        background-position: center; 
        background-size: 1024px 576px;
        height: 576px;
        width: 1024px;
      }
      #desktopForm {
        bottom: 90px;
        position: absolute;
        left: 0px;
        right: 0px;
      }
      #mobileGrid {
        text-align: center; 
        display:none;
        background-image: url(images/loginMobile.png);
        background-repeat: no-repeat;
        background-position: center; 
        background-size: 370px 652px;
        height: 652px;
        width: 370px;
      }
      #mobileForm {
        bottom: 80px;
        position: absolute;
        left: 0px;
        right: 0px;
      }
      #password {
        background-color: #f3f3f3;
        border-radius: 10px;
        border: 2px solid #9f9fa1;
        width: 270px;
      }
      .btn-primary {
        background-color: #f3f3f3;
        border-radius: 10px;
        border: 2px solid #9f9fa1;
        color: #000;
      }
    </style> 
  </head>
  <body>
    <div class = "container-fluid">
      <div class = "row">

        <div class = "col" style = "" id = "desktopGrid">
            <div id = "desktopForm">
              <form action = "login.php" method = "POST">
                <input type = "password" value = "" name = "password" id = "password"/>
                <div style = "height:10px"></div>
                <button type = "submit" class = "btn btn-primary">ENTER</button>
              </form>
            </div>
        </div>
        <div class = "col" id = "mobileGrid">
            <div id = "mobileForm">
              <form action = "login.php" method = "POST">
                <input type = "password" value = "" name = "password" id = "password"/>
                <div style = "height:10px"></div>
                <button type = "submit" class = "btn btn-primary">ENTER</button>
              </form>
            </div>
        </div>        
      </div>
    </div>
  </body>

</html>
