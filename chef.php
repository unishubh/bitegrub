<!DOCTYPE html>

<html>

<head>
  <title>Kanishk</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <!-- Mobile support -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Material Design fonts -->
  <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700" type="text/css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <!-- Bootstrap -->
  <link href="css/bootstrap.min.css" rel="stylesheet">

  <!-- Bootstrap Material Design -->
  <link href="css/bootstrap-material-design.css" rel="stylesheet">
  <link href="css/ripples.min.css" rel="stylesheet">

  <!-- Dropdown.js -->
  <link href="css/master/jquery.dropdown.css" rel="stylesheet">

  <!-- jQuery -->
  <script src="js/jquery.js"></script>
  <script>
function newregister(){

  $('#login-modal').modal('hide');
  $('#register-modal').modal('show');

}

function close_message(){

  $('#login_message').hide("slow");
}
  </script>

  <style type="text/css">
    .navbar-transparent{
      background-color: transparent;
      background: transparent;
      font-weight: bold;
      font-size: 16px;
      color: #fff;
    }
    body{
      background-image: url("img/food-bg.jpg");
    }
  </style>

  <style type="text/css">
/****** LOGIN MODAL ******/
.loginmodal-container {
  padding: 30px;
  max-width: 350px;
  width: 100% !important;
  background-color: #F7F7F7;
  margin: 0 auto;
  border-radius: 2px;
  box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
  overflow: hidden;
  font-family: roboto;
}

.loginmodal-container h1 {
  text-align: center;
  font-size: 1.8em;
  font-family: roboto;
}

.loginmodal-container input[type=submit] {
  width: 100%;
  display: block;
  margin-bottom: 10px;
  position: relative;
}

.loginmodal-container input[type=text], input[type=password] {
  height: 44px;
  font-size: 16px;
  width: 100%;
  margin-bottom: 10px;
  -webkit-appearance: none;
  background: #fff;
  border: 1px solid #d9d9d9;
  border-top: 1px solid #c0c0c0;
  /* border-radius: 2px; */
  padding: 0 8px;
  box-sizing: border-box;
  -moz-box-sizing: border-box;
}

.loginmodal-container input[type=text]:hover, input[type=password]:hover {
  border: 1px solid #b9b9b9;
  border-top: 1px solid #a0a0a0;
  -moz-box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
  -webkit-box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
  box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
}

.loginmodal {
  text-align: center;
  font-size: 14px;
  font-family: 'Arial', sans-serif;
  font-weight: 700;
  height: 36px;
  padding: 0 8px;
/* border-radius: 3px; */
/* -webkit-user-select: none;
  user-select: none; */
}

.loginmodal-submit {
  /* border: 1px solid #3079ed; */
  border: 0px;
  color: #fff;
  text-shadow: 0 1px rgba(0,0,0,0.1); 
  background-color: #55ACEE;
  padding: 17px 0px;
  font-family: roboto;
  font-size: 14px;
  /* background-image: -webkit-gradient(linear, 0 0, 0 100%,   from(#4d90fe), to(#4787ed)); */
}

.loginmodal-submit:hover {
  /* border: 1px solid #2f5bb7; */
  border: 0px;
  text-shadow: 0 1px rgba(0,0,0,0.3);
  background-color: #357ae8;
  /* background-image: -webkit-gradient(linear, 0 0, 0 100%,   from(#4d90fe), to(#357ae8)); */
}

.loginmodal-container a {
  text-decoration: none;
  color: #666;
  font-weight: 400;
  text-align: center;
  display: inline-block;
  opacity: 0.6;
  transition: opacity ease 0.5s;
} 

.login-help{
  font-size: 12px;
}

#login_dropdown{
  display: none;
}

#login_message{
  display: none;
}
  </style>

</head>
<body>

<div class="container">

  <div class="navbar navbar-transparent">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">
          <img alt="Brand" src="...">
        </a>
      </div>
      <div class="navbar-collapse collapse navbar-responsive-collapse">
        <ul class="nav navbar-nav">
          <li><a href="javascript:void(0)">ABOUT US</a></li>
          <li><a href="javascript:void(0)">HOW IT WORKS</a></li>
          <li><a href="javascript:void(0)">BLOG</a></li>
          <!-- <li class="dropdown">
            <a href="bootstrap-elements.html" data-target="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown
              <b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="javascript:void(0)">Action</a></li>
              <li><a href="javascript:void(0)">Another action</a></li>
              <li><a href="javascript:void(0)">Something else here</a></li>
              <li class="divider"></li>
              <li class="dropdown-header">Dropdown header</li>
              <li><a href="javascript:void(0)">Separated link</a></li>
              <li><a href="javascript:void(0)">One more separated link</a></li>
            </ul>
          </li> -->
        </ul>
        <!-- <form class="navbar-form navbar-left">
          <div class="form-group">
            <input class="form-control col-md-8" placeholder="Search" type="text">
          </div>
        </form> -->
        <ul class="nav navbar-nav navbar-right">
          <li><a href="javascript:void(0)" data-toggle="modal" data-target="#chef-modal">CHEF</a></li>
          <li><a href="javascript:void(0)">CONTACT US</a></li>
          <li><a href="javascript:void(0)" data-toggle="modal" data-target="#login-modal">LOGIN</a></li>
          <!-- <li class="dropdown">
            <a href="bootstrap-elements.html" data-target="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown
              <b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="javascript:void(0)">Action</a></li>
              <li><a href="javascript:void(0)">Another action</a></li>
              <li><a href="javascript:void(0)">Something else here</a></li>
              <li class="divider"></li>
              <li><a href="javascript:void(0)">Separated link</a></li>
            </ul>
          </li> -->
        </ul>
      </div>
    </div>
  </div>
  <!--Login Modal-->
      <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
         <div class="modal-dialog">
            <div class="loginmodal-container">
               <h1>Login to Your Account</h1>
               <br>
               <form>
                  <input type="text" name="user" placeholder="Phone or Email ID">
                  <input type="password" name="pass" placeholder="Password">
                  <input type="submit" class="login loginmodal-submit" value="Login">
               </form>
               <div class="login-help">
                  <a href="#" onclick="newregister()">New user? Register!</a>
               </div>
            </div>
         </div>
      </div>
      <!--.//Login Modal-->
      <!--Register Modal-->
      <div class="modal fade" id="register-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
         <div class="modal-dialog">
            <div class="loginmodal-container">
               <h1>Sign Up <small>&nbsp;&nbsp;  It's free</small></h1>
               <br>
               <form>
                  <input type="text" name="name" placeholder="Full Name">
                  <input type="text" name="email" placeholder="Email ID">
                  <input type="text" name="phone" placeholder="Mobile Number (10 digits)">
                  <input type="password" name="pass" placeholder="Password">
                  <input type="password" name="confpass" placeholder="Confirm Password">
                  <input type="submit" name="register" class="login loginmodal-submit" value="Register">
               </form>
            </div>
         </div>
      </div>
      <!--.//Register Modal-->
      <!--Chef Modal-->
      <div class="modal fade" id="chef-modal">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
              <h2 class="modal-title">Become a Chef! <small>&nbsp;&nbsp;  Kanishk's Mess</small></h2>
            </div>
            <div class="modal-body">
              <form class="form-horizontal">
              <!--   <div class="form-group">
                    <label class="col-md-2 control-label">You are a</label>

                    <div class="col-md-10">
                      <div class="radio radio-primary">
                        <label>
                          <input name="optionsRadios" id="optionsRadios1" value="option1" checked="" type="radio">
                          Home caterer
                        </label>
                      </div>
                      <div class="radio radio-primary">
                        <label>
                          <input name="optionsRadios" id="optionsRadios2" value="option2" type="radio">
                          Professional chef
                        </label>
                      </div>
                      <div class="radio radio-primary">
                        <label>
                          <input name="optionsRadios" id="optionsRadios2" value="option2" type="radio">
                          Professional caterer
                        </label>
                      </div>
                      <div class="radio radio-primary">
                        <label>
                          <input name="optionsRadios" id="optionsRadios2" value="option2" type="radio">
                          Home chef
                        </label>
                      </div>
                    </div>
                  </div> -->
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Name</label>
                    <div class="col-sm-10">
                      <input class="form-control" type="text" name="name" placeholder="Full Name">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
                    <div class="col-sm-10">
                      <input class="form-control" type="text" name="email" placeholder="Email ID">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Mobile</label>
                    <div class="col-sm-10">
                      <input class="form-control" type="text" name="phone" placeholder="Mobile Number (10 digits)">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Password</label>
                    <div class="col-sm-10">
                      <input class="form-control" type="password" name="pass" placeholder="Password">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Confirm Password</label>
                    <div class="col-sm-10">
                      <input class="form-control" type="password" name="confpass" placeholder="Confirm Password">
                    </div>
                  </div>
                  <HR>
                     <div class="form-group">
                    <label for="textArea" class="col-sm-2 control-label">Address</label>
                    <div class="col-sm-10">
                     <input class="form-control" type="text" name="address" placeholder="Address ">
                    </div>

                    
                  </div>

                      <button type="submit" class="btn btn-warning btn-raised">Submit</button>
                    </div>
                  </div>

              </form>
                          </div>
            <div class="modal-footer">
              <!-- <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> -->
              <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
            </div>
          </div>
        </div>
      </div>


      <!--.//Chef Modal-->


<div class="row">
  <div class="col-md-12" style="margin-top:100px;">
    <H1 class="text-center" style="color: rgb(255, 255, 255); font-weight: bold;">WHOLESOME MEALS FROM WONDERCHEFS AROUND YOU</H1>
    <div class="form-group label-floating" style="padding:5%">
      <div class="input-group" style="background-color: rgb(255, 255, 255); padding: 10px; border-style: solid; border-width: 2px; border-color: orange;">
        <span class="input-group-addon"><i class="material-icons">place</i></span>
        <label class="control-label" for="addon3a">ENTER BUILDING NAME, LOCALITY OR AREA</label>
        <input id="addon3a" class="form-control" type="text">
        <!-- <p class="help-block">The label is inside the <code>input-group</code> so that it is positioned properly as a placeholder.</p> -->
        <span class="input-group-btn">
          <button type="button" class="btn btn-warning btn-raised btn-lg">
            <i class="material-icons">done</i>
          </button>
        </span>
      </div>
    </div>
  </div>
</div>

</div>

<!-- Open source code -->
<script>
  window.page = window.location.hash || "#about";

  $(document).ready(function () {
    if (window.page != "#about") {
      $(".menu").find("li[data-target=" + window.page + "]").trigger("click");
    }
  });

  $(window).on("resize", function () {
    $("html, body").height($(window).height());
    $(".main, .menu").height($(window).height() - $(".header-panel").outerHeight());
    $(".pages").height($(window).height());
  }).trigger("resize");

  $(".menu li").click(function () {
    // Menu
    if (!$(this).data("target")) return;
    if ($(this).is(".active")) return;
    $(".menu li").not($(this)).removeClass("active");
    $(".page").not(page).removeClass("active").hide();
    window.page = $(this).data("target");
    var page = $(window.page);
    window.location.hash = window.page;
    $(this).addClass("active");


    page.show();

    var totop = setInterval(function () {
      $(".pages").animate({scrollTop: 0}, 0);
    }, 1);

    setTimeout(function () {
      page.addClass("active");
      setTimeout(function () {
        clearInterval(totop);
      }, 1000);
    }, 100);
  });

  function cleanSource(html) {
    var lines = html.split(/\n/);

    lines.shift();
    lines.splice(-1, 1);

    var indentSize = lines[0].length - lines[0].trim().length,
        re = new RegExp(" {" + indentSize + "}");

    lines = lines.map(function (line) {
      if (line.match(re)) {
        line = line.substring(indentSize);
      }

      return line;
    });

    lines = lines.join("\n");

    return lines;
  }

  $("#opensource").click(function () {
    $.get(window.location.href, function (data) {
      var html = $(data).find(window.page).html();
      html = cleanSource(html);
      $("#source-modal pre").text(html);
      $("#source-modal").modal();
    });
  });
</script>

<!-- Twitter Bootstrap -->
<script src="js/bootstrap.min.js"></script>

<!-- Material Design for Bootstrap -->
<script src="js/material.js"></script>
<script src="js/ripples.min.js"></script>
<script>
  $.material.init();
</script>


<!-- Sliders -->
<script src="js/jquery.nouislider.min.js"></script>
<script>
  $(function () {
    $.material.init();
    $(".shor").noUiSlider({
      start: 40,
      connect: "lower",
      range: {
        min: 0,
        max: 100
      }
    });

    $(".svert").noUiSlider({
      orientation: "vertical",
      start: 40,
      connect: "lower",
      range: {
        min: 0,
        max: 100
      }
    });
  });
</script>

<!-- Dropdown.js -->
<script src="js/jquery.dropdown.js"></script>
<script>
  $("#dropdown-menu select").dropdown();

</script>

</body>
</html>
<?php
require_once('config/db.php');
$name=$_POST['name'];
$email=$_POST['email']
$phone=$_POST['phone'];
$pwd=$_POST['pwd'];
$adr=$_POST['adr'];
$lat;
$long;
$sql="INSERT INTO  sellers (name,email,phoneno,password,seller_add,latitude,longitude) VALUES (':name',':email',':phone',':pwd',':adr',':long',':lat')  ";
$q=$conn->prepare($sql);
$q->bindparam(':name',$name);
$q->bindparam(':email',$email);
$q->bindparam(':phone',$phone);
$q->bindparam(':pwd',$pwd);
$q->bindparam(':long',$long);
$q->bindparam(':lat',$lat);
$q->execute();


?>