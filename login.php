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

    </style> 
  </head>
  <body>
    <div class = "container-fluid">
      <div class = "row">

        <div class = "col" style = "text-align: center; display:none;padding-top:30px" id = "desktopGrid">
            <img src="images/landing_en.png" usemap="#image-map">
            <form action = "login.php" method = "POST">
              <input type = "password" value = "" name = "password" id = "password"/>
              <button type = "submit" class = "btn btn-primary">ENTER</button>
            </form>
            <!-- <map name="image-map">
                <area target="_self" alt="" title="" href="office_staff.html" coords="344,411,496,460" shape="rect">
                <area target="_self" alt="" title="" href="store_staff.html" coords="530,413,684,460" shape="rect">
            </map> -->
        </div>
        <div class = "col" style = "text-align: center;display:none;padding-right:0px;padding-left:0px;" id = "mobileGrid">
            <img src="images/landing_en_mobile.png" usemap="#mobile_image-map">
            <map name="mobile_image-map">
                <area target="_self" alt="" title="" href="office_staff.html" coords="35,502,175,545" shape="rect">
                <area target="_self" alt="" title="" href="store_staff.html" coords="207,502,346,545" shape="rect">
            </map>   
        </div>        
      </div>
    </div>
  </body>

</html>
