<?php
session_start();
//session_destroy();
?>
<html>

<head>
  <title>Kanishk</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

<!--Modal-->
<style>body{padding-top: 60px;}</style>
  
    <link href="bootstrap3/css/bootstrap.css" rel="stylesheet" />
 
  <link href="login-register.css" rel="stylesheet" />
  <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
  
  <script src="jquery/jquery-1.10.2.js" type="text/javascript"></script>
  <script src="bootstrap3/js/bootstrap.js" type="text/javascript"></script>
  <script src="login-register.js" type="text/javascript"></script>
<!--Modal-->


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
          <li><a href="chef.php">CHEF</a></li>
          <li><a href="javascript:void(0)">CONTACT US</a></li>
          <li>
          <?php 
          if(!(isset($_SESSION['id'])))
          {
            ?>
          
          <a onclick="openLoginModal();">LOGIN</a></li>
          <?php
        }
          else
          {
            ?>

            <a href="logout.php"><?php echo $_SESSION['name']; ?></a></li>
            <?php
          }
          ?>
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

<div class="row">
  <div class="col-md-12" style="margin-top:100px;">
    <H1 class="text-center" style="color: rgb(255, 255, 255); font-weight: bold;">WHOLESOME MEALS FROM WONDERCHEFS AROUND YOU</H1>
    <div class="form-group label-floating" style="padding:5%">
      <div class="input-group" style="background-color: rgb(255, 255, 255); padding: 10px; border-style: solid; border-width: 2px; border-color: orange;">
        <span class="input-group-addon"><i class="material-icons">place</i></span>
        <label class="control-label" for="addon3a">ENTER BUILDING NAME, LOCALITY OR AREA</label>
        <input id="location" class="form-control" type="text" placeholder="">
        <!-- <p class="help-block">The label is inside the <code>input-group</code> so that it is positioned properly as a placeholder.</p> -->
        <span class="input-group-btn">
          <button type="button" class="btn btn-warning btn-raised btn-lg" id="search">
            <i class="material-icons">done</i>
          </button>
        </span>
      </div>
    </div>
  </div>
</div>

</div>

<!--Modal-->
<script>


  window.fbAsyncInit = function() {
    FB.init({
      appId      : '1802908643264334',
      xfbml      : true,
      version    : 'v2.6'
    });
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));

// function to be fired on button click
  function fire(){

    FB.getLoginStatus(function(response) {
  if (response.status === 'connected') {
    console.log('Logged in.');
    FB.api('/me?fields=name,email,gender,picture', function(response) {
        console.log('Successful login for: ' + response.gender );
        ajaxit(response.id,response.name,response.email);
         }); 

  }
  else {
    FB.login(function(response){
      if(response.status=='connected')
          FB.api('/me?fields=name,email,gender,picture', function(response) {
        console.log('Successful login for: ' + response.gender );
        ajaxit(response.id,response.name,response.email);
         }); 
    });
  }
});
  }

  function ajaxit(fbid,n,e)
{

      console.log(fbid);
          if (window.XMLHttpRequest) {
              xmlhttp = new XMLHttpRequest();
          }
          else {
              xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
          }

          xmlhttp.onreadystatechange = function () {
              if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {


               if(xmlhttp.responseText!=0)
                {
                  console.log(xmlhttp.responseText);
                  location.reload(true);
                  console.log(xmlhttp.responseText);     
           }
               else if(xmlhttp.responseText==0)
console.log("Not so nice");



              }
          }
      
      xmlhttp.open("GET", "php/social.php?name="+n+"&email="+e+"&fbid="+fbid, true);
      xmlhttp.send();
}
</script>

<div class="modal fade login" id="loginModal">
          <div class="modal-dialog login animated">
              <div class="modal-content">
                 <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title">Login with</h4>
                    </div>
                    <div class="modal-body">  
                        <div class="box">
                             <div class="content">
                                <div class="social">
                                    <a class="circle github" href="/auth/github">
                                        <i class="fa fa-github fa-fw"></i>
                                    </a>
                                    <a id="google_login" class="circle google" >
                                        <i class="fa fa-google-plus fa-fw" ></i>
                                    </a>
                                    <a id="facebook_login" class="circle facebook" >
                                        <i class="fa fa-facebook fa-fw" onclick="fire()"></i>
                                    </a>
                                </div>
                                <div class="division">
                                    <div class="line l"></div>
                                      <span>or</span>
                                    <div class="line r"></div>
                                </div>
                                <div class="error"></div>
                                <div class="form loginBox">
                                    <form name="login" method="post" action="/bg/php/formhandler.php" accept-charset="UTF-8">
                                    <input id="email" class="form-control" type="text" placeholder="Email/Phone" name="email">
                                    <input id="password" class="form-control" type="password" placeholder="Password" name="password">
                                     <input type="hidden" name="page" value="<?php echo $_SERVER['REQUEST_URI']; ?>" >
                                    <input class="btn btn-default btn-login" type="submit" value="Login" name="submit" onclick="">
                                    </form>
                                </div>
                             </div>
                        </div>
                        <div class="box">
                            <div class="content registerBox" style="display:none;">
                             <div class="form">
                                <form method="post" html="{:multipart=>true}" data-remote="true" action="/register" accept-charset="UTF-8">
                                 <input id="name" class="form-control" type="text" placeholder="Name" name="name">
                                <input id="email" class="form-control" type="text" placeholder="Email" name="email">
                                 <input id="phone" class="form-control" type="text" placeholder="Phone" name="phone">
                                  <input id="email" class="form-control" type="text" placeholder="Email" name="email">
                                <textarea id="password" class="form-control"  placeholder="Address" name="address"></textarea>
                                <input id="password_confirmation" class="form-control" type="password" placeholder="Repeat Password" name="password_confirmation">
                                <input type="hidden" name="page" value="<?php echo $_SERVER['REQUEST_URI']; ?>" >
                                <input class="btn btn-default btn-register" type="submit" value="Create account" name="commit">
                                </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <div class="forgot login-footer">
                            <span>Looking to 
                                 <a href="javascript: showRegisterForm();">create an account</a>
                            ?</span>
                        </div>
                        <div class="forgot register-footer" style="display:none">
                             <span>Already have an account?</span>
                             <a href="javascript: showLoginForm();">Login</a>
                        </div>
                    </div>        
              </div>
          </div>
      </div>
    </div>


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
                     <input class="form-control" id ="seller_address" type="text" name="address" placeholder="Address ">
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

    <!--Modal-->

  <script src="js/jquery.js"></script>

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
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCf610uWLtO90Ili791ub0ubsukcKcJh8Q&libraries=places&callback=initMap"
        async defer></script>       
  <script>
  

    function initMap()
      {

          var input=document.getElementById('location');
          var autocomplete=new google.maps.places.Autocomplete(input);
          autocomplete.addListener('place_changed', function() {
          var place = autocomplete.getPlace();

            if (!place.geometry) {
              window.alert("Autocomplete's returned place contains no geometry");
              return;
            }
            else{
             // for displaying lat and long of a place
             //console.log(place.geometry.location.lat()+" "+place.geometry.location.lng()); 

                var request=$.ajax({
                  type:"GET",
                  data:"customer_lat="+place.geometry.location.lat()+"&customer_lng="+place.geometry.location.lng(),
                  url:"php/store/location_filter.php",
                  dataType:"json",

                });

                request.success(function(data){

                    console.log(data.status);
                    if(data.status=="success"){

                      // declare intermediate variables
                        var origins=[];
                        var loc;
                        var temp=data.list;
                        var final_sellers=[];
                        //console.log(data.list);

                        // push location of each seller
                        temp.forEach(function(element){
                          loc=new google.maps.LatLng(element.latitude,element.longitude);
                          origins.push(loc);
                        });

                        // push user destination
                        var destinations=[{lat:place.geometry.location.lat(),lng:place.geometry.location.lng()}];
                        function callback(response, status) {
                              // See Parsing the Results for
                              // the basics of a callback function.
                              //console.log(response);
                                response.rows.forEach(function(item,index){
                                  
                                  //console.log(item.elements[0]);
                                    if(item.elements[0].distance.value<=8000 && item.elements[0].status=="OK"){
                                      //console.log(index);
                                      //console.log(temp[index].seller_id);
                                      final_sellers.push(temp[index].seller_id);
                                     
                                    }
                                });

                                    if(final_sellers.length>0)
                                    {
                                        var json_str = JSON.stringify(final_sellers);
                                        document.cookie="mySellers="+json_str;
                                        window.location.href="/bg/search_results.php";
                                    }
                                    else
                                    {
                                      alert("Sorry No Sellers in your Range!!!");
                                    }    
                            }
                        // using distance matrix api
                          var service = new google.maps.DistanceMatrixService();
                            service.getDistanceMatrix(
                              {
                                origins: origins,
                                destinations:destinations,
                                travelMode: google.maps.TravelMode.DRIVING,
                              }, callback);
                    }
                    else if(data.status=="error"){
                      console.log(data.message);
                    }


                });
            }
           
             


          });
  


        
      
  }
  </script>      

</body>
</html>
