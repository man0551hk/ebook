<?php
session_start();
if ( $_SESSION["logined"] != 1) {
  header("location: login.php",  true,  301 );  exit;
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
    <link rel="stylesheet" href="css/bookStyle.css">
    <style>
      .desktopContainer {
        width: 1024px;
        padding-right:0px;
        padding-left:0px;
        padding-top:30px;
      }
      .mobileContainer {
        max-height: 540px;
      }      
      #head {
        background-image: url(images/book_head.png);
        background-repeat: no-repeat;
        width:1024px;
        height:20px;
        background-size: 1024px 20px;
      }
      #bottom {
        background-image: url(images/book_bottom.png);
        background-repeat: no-repeat;
        width:1024px;
        height:46px;
        background-size: 1024px 46px;
      }
      .checkbox-container input[type="checkbox"]{display:inline-block;}
      .checkbox-container label{display:inline;}
      .spanText {
        padding-left:5px;
        padding-right:5px;
        font-weight:bold;
        color:#231815;
      }      
      #indexRow {
        width:100%;
        background-image: url(images/book_repeat.png);
        background-size: 1024px 7px;
        max-height:768px;
      }
      #indexDiv {
        width:100%;
        background-image: url(images/bg.png);
        background-repeat: no-repeat;
        background-color: #fff;
        background-size: 260px;
        margin-left:30px;
        margin-top:5px;
        max-height:723px;
        overflow-y: auto;
      }
      #heading {
        padding-left:45px; font-weight: bold; font-size: 30px; line-height: 30px;
      }
      .sectionTitle {
        font-size: 20px;
        font-weight: bold;
        color:#fff;
      }
      .page {
        font-size:12px;
        color:#000;
      }
      .menuTitle {
        color:#000;
      }
    </style>
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
      var isMobile = false;
      window.onload = function() {
        if ($( window ).width() >= 1024) {
          $("#navMenu").css("display", "none");
          $("#container").removeClass('mobileContainer').addClass('desktopContainer');
        } else {
          isMobile = true;
          $("#navMenu").css("display", "block");
          $("#container").removeClass('desktopContainer');
          $("#container").addClass('mobileContainer');
          var width = $( window ).width() - 30;
          var ratio = width / 1024;
          var headerHeight = width / 1024;
          var headerBackgroundSize = width+ 'px ' + headerHeight + 'px';
          $("#head").css("width",  width);
          $("#head").css("height",  headerHeight);
          $("#head").css("background-size", bottomBackgroundSize);

          var bottomHeight = 46 * ratio;
          var bottomBackgroundSize = width+ 'px ' + bottomHeight + 'px';
          $("#bottom").css("width", width);
          $("#bottom").css("height", bottomHeight);
          $("#bottom").css("background-size", bottomBackgroundSize);
          $("#heading").css("font-size", "20px").css("line-height", "20px");
          $(".sectionTitle").css("font-size", "16px");
          $("#indexDiv").css("height", 540);
        }
      }
    </script>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light" id = "navMenu" style = "display:none;">
      <a class="navbar-brand" href="index.php">Ralph Lauren Employees</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="office_staff.php">Office Learning Catalogue</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="store_staff_tc.php">專賣店學習目錄</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="store_staff_sc.php">专卖店学习目录</a>
          </li>              
        </ul>
      </div>
    </nav>

    <div class="container" id = "container">
      <div class = "row" id = "head">

      </div>
      <div class = "row" id = "indexRow">
        <div id = "indexDiv">

          <div id = "menuContent" style = "padding:10px;line-height:20px">
              <b>Dear Ralph Lauren Employees,</b>
              <br/>
              We are pleased to share this exciting Learning Catalogue with all employees in our offices and our stores.
              <br/><br/>
              This catalogue combines learning curriculums across all areas of education, including professional development, product knowledge and sales & service.
              <br/><br/>
              The objective is to offer everyone an equal opportunity to develop themselves as Ralph Lauren Employees.
              <br/><br/>
              
              Whether you work in one of our stores or the office, you now have the tools you need to further your deve,opment as an employee.
              <br/><br/>
              Good Luck and Enjoy!

              <br/>
              <br/>
              <a href = 'office_staff_index.php'><img src = "images/nextBtnEn.png" class = "img-fluid" width = "100px" /></a>
          </div>
        </div>
      </div>

      <div class = "row" id = "bottom">

      </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
