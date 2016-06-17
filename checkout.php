<?php
session_start();
//session_destroy();
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
$i=0;
$sum=0;
//if(isset($_COOKIE['cart']))
//echo 'Yes';
//else 
//echo 'NO';
$a=unserialize($_COOKIE['cart']);
//echo $a[0]['id'];
for($i=0; ;$i++)
{
  if(!(isset($a[$i]['id'])))
    break;

}
//echo $i;

?>

<!DOCTYPE html>

<html>

<head>
  <title>Kanishk | Checkout</title>
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
  <script src="js/jquery.js"></script>

  <style type="text/css">


.carousel-control.left, .carousel-control.right {
    background-image: none
}


.cost-food{
  margin-top: 16px; font-weight: bolder;
}

.chef-post{
  color: #bdbdbd;
}

.special-tag{
  position: relative; margin-top: 30px; margin-left: -6px; z-index: 1;
}

.rating-star{
  position: relative; float: right; margin-top: -40px; margin-right: 10px; z-index: 1;
}

.veg{
  color: green; z-index: 10; position: absolute; top: 115px; left: 145px;
}

.non-veg{
  z-index: 10; position: absolute; top: 115px; left: 145px; color: red;
}

.food-img{
  position: relative; margin-top: -50px;
}

.meal_time{
  color: #ababab;
}
  </style>
<script type="text/javascript">
/*! Main */
jQuery(document).ready(function($) {
  
    // Fixa navbar ao ultrapassa-lo
    var navbar = $('#navbar-main'),
        distance = navbar.offset().top,
        $window = $(window);

    $window.scroll(function() {
        if ($window.scrollTop() >= distance) {
            navbar.removeClass('navbar-fixed-top').addClass('navbar-fixed-top');
            $("body").css("padding-top", "70px");
        } else {
            navbar.removeClass('navbar-fixed-top');
            $("body").css("padding-top", "0px");
        }
    });
});
</script>
<!--Shukla-->
<script>
function loader()
{
 console.log("in");
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (xhttp.readyState == 4 && xhttp.status == 200) {
     console.log('Done');
    }
  };
  xhttp.open("GET", "/bg/php/store/populate_checkout.php", true);
  xhttp.send();
} 
}
</script>
<!--Shukla-->
</head>
<body onload="loader()">

<div class="container-fluid">

  <div class="row" style="padding:15px;background-color:#fff;">
    <div class="col-md-1">
      <img src="" alt="the-logo">
    </div>
    <div class="col-md-5">
      <div class="row">
        <div class="col-md-2">
          <a href="">Menu</a>
        </div>
        <div class="col-md-3">
          <a href="">Gift a Meal</a>
        </div>
        <div class="col-md-2">
          <a href="">Party</a>
        </div>
        <div class="col-md-3">
          <a href="" data-toggle="dropdown">More <i class="material-icons">keyboard_arrow_down</i></a>
          <ul class="dropdown-menu">
            <li><a href="javascript:void(0)">Dropdown link</a></li>
            <li><a href="javascript:void(0)">Dropdown link</a></li>
            <li><a href="javascript:void(0)">Dropdown link</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="col-md-5 pull-right">
      <div class="row">
        <div class="col-md-1 pull-right">
          <a href=""><i class="material-icons">add_shopping_cart</i></i></a>
        </div>
        <div class="col-md-4 pull-right">
          <?php 
          if(!(isset($_SESSION['id'])))
          {
            ?>
          
          <a onclick="openLoginModal()">LOGIN</a></li>
          <?php
        }
          else
          {
            ?>
            <a href="javascript:void(0)"><?php echo $_SESSION['name']; ?></a></li>
            <?php
          }
          ?>
          <ul class="dropdown-menu">
            <li><a href="javascript:void(0)">My Account</a></li>
            <li><a href="javascript:void(0)">My Addresses</a></li>
            <li><a href="javascript:void(0)">Order History</a></li>
            <li><a href="javascript:void(0)">My Favourites</a></li>
            <li><a href="javascript:void(0)">Coupons</a></li>
            <li><a href="javascript:void(0)">Meal Notifications</a></li>
            <li><a href="javascript:void(0)">Logout</a></li>
          </ul>
        </div>
        <div class="col-md-4 pull-right">
          <a href=""><i class="material-icons">chat</i></i> CUSTOMER CARE</a>
        </div>
      </div>
    </div>
  </div>



  <div class="row">

    <div class="col-md-12">
      <h2 class="text-center" style="margin-top:50px;margin-bottom:50px;font-weight:bolder;color:#FF7F00;">CHECKOUT</h2>
    </div>

  </div>
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <div class="well">
          <div class="row">
            <div class="col-md-2">
            </div>
            <div class="col-md-8 text-center">
              <h4>TODAY'S LUNCH</h4>
              <hr style="background-color:#FF7F00">
            </div>




            <?php
            while($i!=0)
            {
              $sum+=$a[$i-1]['cost'];
?>





            <div class="col-md-2">
            </div>
          </div>
          <div class="row">
            <div class="col-md-3">
              <img src="<?php echo $a[$i-1]['img']; ?>" alt="food-image" class="img img-responsive img-thumbnail">
            </div>
            <div class="col-md-5">
              <h5><a href=""><?php echo $a[$i-1]['name']; ?></a></h5>
              <br>
              <h5><a href="">Chef Ravi Saha</a></h5>
              <h5><?php echo $a[$i-1]['cost']; ?></h5>
              
            </div>
            <div class="col-md-2">
              <br><br><br>
              <button class="btn btn-xs btn-warning">+</button> 1 <button class="btn btn-xs btn-warning">-</button>
            </div>
            <div class="col-md-2">
              <h5><?php echo $a[$i-1]['cost']; ?></h5>
              <br><br>
             <!-- <a href="#" class="remove_meal">REMOVE</a>-->
            </div>
          </div>
          <?php
          $i--;
        }
        ?>
          <!--Modal-->

<script>
/*
function statusChangeCallback(response) {
    console.log('statusChangeCallback');
    console.log(response);
    // The response object is returned with a status field that lets the
    // app know the current login status of the person.
    // Full docs on the response object can be found in the documentation
    // for FB.getLoginStatus().
    if (response.status === 'connected') {
      // Logged into your app and Facebook.
      testAPI();
    } else if (response.status === 'not_authorized') {
      // The person is logged into Facebook, but not your app.
     // document.getElementById('status').innerHTML = 'Please log ' +
      //  'into this app.';
    } else {
document.getElementById('status').innerHTML = 'Please log ' +
        'into Facebook.';
    }
  };

  // This function is called when someone finishes with the Login
  // Button.  See the onlogin handler attached to it in the sample
  // code below.
  function checkLoginState() {
  
 console.log("Login");
    FB.getLoginStatus(function(response) {
      statusChangeCallback(response);
    });
  };

  window.fbAsyncInit = function() {
   console.log("dasd");
  FB.init({
    appId      : '1802908643264334',
    cookie     : true,  // enable cookies to allow the server to access 
    status     :false,                    // the session
    xfbml      : true,  // parse social plugins on this page
    version    : 'v2.6' // use 
    });

 



 // Now that we've initialized the JavaScript SDK, we call 
  // FB.getLoginStatus().  This function gets the state of the
  // person visiting this page and can return one of three states to
  // the callback you provide.  They can be:
  //
  // 1. Logged into your app ('connected')
  // 2. Logged into Facebook, but not your app ('not_authorized')
  // 3. Not logged into Facebook and can't tell if they are logged into
  //    your app or not.
  //
  // These three cases are handled in the callback function.



  



 

  };

  



// Load the SDK asynchronously
  (function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/en_US/sdk.js";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));
  function testAPI() {
    console.log('Welcome!  Fetching your information.... ');
    FB.api('/me?fields=name,email,gender,picture', function(response) {
      console.log('Successful login for: ' + response.id);
     // document.getElementById('status').innerHTML =
        //'Thanks for logging in, ' + response.name + '!';
        //console.log(JSON.stringify(response));
        //var obj=JSON.parse(response);
        //console.log(response.gender);
        //console.log(response.picture.data.url);
       // document.getElementById("pic").innerHTML="<img src="+response.picture.data.url+"></img>";
       console.log(response.name);
       //ajaxit(response.name,response.email,response.gender,response.picture.data.url,response.id);
    });
  }
*/


  // This is called with the results from from FB.getLoginStatus().
  function statusChangeCallback(response) {
    console.log('statusChangeCallback');
    console.log(response);
    // The response object is returned with a status field that lets the
    // app know the current login status of the person.
    // Full docs on the response object can be found in the documentation
    // for FB.getLoginStatus().
    if (response.status === 'connected') {
      // Logged into your app and Facebook.
     setter();
      //FB.login();
    } else if (response.status === 'not_authorized') {
    
      console.log('Cant');
    } else {
      
      document.getElementById('status').innerHTML = 'Please log ' +
        'into Facebook.';
    }
  }

  // This function is called when someone finishes with the Login
  // Button.  See the onlogin handler attached to it in the sample
  // code below.
  function checkLoginState() {
    FB.login(function(response) {
   FB.getLoginStatus(function(response) {
      statusChangeCallback(response);
    });
 }, {scope: 'public_profile,email,gender'});
    
  }

  window.fbAsyncInit = function() {
  FB.init({
    appId      : '1802908643264334',
    cookie     : true,  // enable cookies to allow the server to access 
                        // the session
    xfbml      : true,  // parse social plugins on this page
    version    : 'v2.6' // use graph api version 2.5
  });

  // Now that we've initialized the JavaScript SDK, we call 
  // FB.getLoginStatus().  This function gets the state of the
  // person visiting this page and can return one of three states to
  // the callback you provide.  They can be:
  //
  // 1. Logged into your app ('connected')
  // 2. Logged into Facebook, but not your app ('not_authorized')
  // 3. Not logged into Facebook and can't tell if they are logged into
  //    your app or not.
  //
  // These three cases are handled in the callback function.

  FB.getLoginStatus(function(response) {
    statusChangeCallback(response);
  });

  };

  // Load the SDK asynchronously
  (function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/en_US/sdk.js";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));

  // Here we run a very simple test of the Graph API after login is
  // successful.  See statusChangeCallback() for when this call is made.
  function setter() {
    console.log('Welcome!  Fetching your information.... ');
    //var o=document.forms['login'];

    FB.api('/me?fields=name,email,gender,picture', function(response) {
      console.log('Successful login for: ' + response.email  );
      ajaxit(response.id,response.name,response.email)

      
    });
  }


function ajaxit(fbid,n,e)
{
  //console.log(n);
  //var u=_("user").value;
  //if(u!="")
  //  _("unstatus").innerHTML="Checking...";
  //  if (u == '') {
      //    document.getElementById("unstatus").innerHtml = "";
        //  return;
      //}
      //p=encodeURIComponent(p);
      //console.log(p);
      console.log(fbid);
          if (window.XMLHttpRequest) {
              xmlhttp = new XMLHttpRequest();
          }
          else {
              xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
          }

          xmlhttp.onreadystatechange = function () {
              if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {


        //          //show(sem);
          //        console.log(xmlhttp.responseText);

               if(xmlhttp.responseText!=0)
                {
                  console.log(xmlhttp.responseText);
      //            logout();
        //       window.location.href="profile.php";
               FB.logout(function(response) {
   // Person is now logged out
});
           }
               else if(xmlhttp.responseText==0)
//_("unstatus").innerHTML="Name already taken";
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
                                        <i class="fa fa-facebook fa-fw" onclick="checkLoginState()"></i>
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
                                <input id="email" class="form-control" type="text" placeholder="Email" name="email">
                                <input id="password" class="form-control" type="password" placeholder="Password" name="password">
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
    <!--Modal-->

          <div class="row">
            <div class="col-md-12">
              <hr style="background-color:#ababab">
              <h4 style="font-weight:bold;">Sub Total <span style="float: right;margin-right:50px;"><?php echo $sum; ?></span></h4>
            </div>
          </div>
        </div>
        <div class="row" style="padding: 15px;">
          <div class="well">
            <div class="row">
              <h5 style="margin-left:20px;">YOU MAY ALSO LIKE</h5>
              <div class="col-md-3">
                <div class="row">
                  <div class="col-md-12">
                    <img src="http://www.browneyedbaker.com/wp-content/uploads/2013/08/ultimate-chocolate-cupcakes-1-600-FW.jpg" alt="meal_like_img" class="img img-responsive img-thumbnail">
                    <div class="veg">
                      <i class="material-icons">adjust</i>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <h6>Chocolate Cupcake</h6>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <h6>₹ 65</h6>
                  </div>
                  <div class="col-md-6 text-right">
                    <button class="btn btn-raised btn-xs btn-warning">+</button>
                  </div>
                </div>
              </div>
              <div class="col-md-3">
                <div class="row">
                  <div class="col-md-12">
                    <img src="http://www.browneyedbaker.com/wp-content/uploads/2013/08/ultimate-chocolate-cupcakes-1-600-FW.jpg" alt="meal_like_img" class="img img-responsive img-thumbnail">
                    <div class="veg">
                      <i class="material-icons">adjust</i>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <h6>Chocolate Cupcake</h6>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <h6>₹ 65</h6>
                  </div>
                  <div class="col-md-6 text-right">
                    <button class="btn btn-raised btn-xs btn-warning">+</button>
                  </div>
                </div>
              </div>
              <div class="col-md-3">
                <div class="row">
                  <div class="col-md-12">
                    <img src="http://www.browneyedbaker.com/wp-content/uploads/2013/08/ultimate-chocolate-cupcakes-1-600-FW.jpg" alt="meal_like_img" class="img img-responsive img-thumbnail">
                    <div class="veg">
                      <i class="material-icons">adjust</i>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <h6>Chocolate Cupcake</h6>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <h6>₹ 65</h6>
                  </div>
                  <div class="col-md-6 text-right">
                    <button class="btn btn-raised btn-xs btn-warning">+</button>
                  </div>
                </div>
              </div>
              <div class="col-md-3">
                <div class="row">
                  <div class="col-md-12">
                    <img src="http://www.browneyedbaker.com/wp-content/uploads/2013/08/ultimate-chocolate-cupcakes-1-600-FW.jpg" alt="meal_like_img" class="img img-responsive img-thumbnail">
                    <div class="non-veg">
                      <i class="material-icons">adjust</i>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <h6>Chocolate Cupcake</h6>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <h6>₹ 65</h6>
                  </div>
                  <div class="col-md-6 text-right">
                    <button class="btn btn-raised btn-xs btn-warning">+</button>
                  </div>
                </div>

              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <h5>SELECT TIME SLOT</h5>
            <button class="btn btn-raised btn-default">3:30 - 4:30 PM</button>
          </div>
          <div class="col-md-12">
            <h5>SELECT ADDRESS</h5>
            <div class="dropdown">
              <button class="btn btn-raised btn-default dropdown-toggle btn-block" type="button" id="dropdownAddress" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                Select Delivery Address
                <span class="caret"></span>
              </button>
              <ul class="dropdown-menu" aria-labelledby="dropdownAddress" style="width: 100%;">
                <li class="disabled text-center" ><a href="#">Delivery Address</a></li>
                <li role="separator" class="divider"></li>
                <li class="text-center"><a href="#">+ADD New Address</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="well">
          <div class="row">
            <div class="col-md-3">
            </div>
            <div class="col-md-6 text-center">
              <h4>SUMMARY</h4>
              <hr style="background-color:#FF7F00">
            </div>
            <div class="col-md-3">
            </div>
          </div>
          <div class="row">
            <div class="col-md-3">
            </div>
            <div class="col-md-6 text-center">
              <h5 style="color:#FF7F00;"><a href="">Have a coupon?</a></h5>
            </div>
            <div class="col-md-3">
            </div>
          </div>
          <div class="row" style="border-bottom: 2px #ababab inset;">
            <div class="col-md-6">
              <h4>Cart Total</h4>
            </div>
            <div class="col-md-6 text-right">
              <h4>₹ 220</h4>
            </div>
          </div>
          <div class="row" style="border-bottom: 2px #ababab inset;">
            <div class="col-md-6">
              <div class="checkbox">
                <label>
                  <input type="checkbox"> Brownie Points
                </label>
              </div>
            </div>
            <div class="col-md-6">
            </div>
          </div>
          <div class="row" style="border-bottom: 2px #000 inset;">
            <div class="col-md-6">
              <h4 style="font-weight:bold;">Grand Total</h4>
            </div>
            <div class="col-md-6 text-right">
              <h4 style="font-weight:bold;">₹ 220</h4>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="checkbox">
                <label>
                  <input type="checkbox"> I care about the environment! Don't send me any cutlery and paper napkin with this order.
                </label>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <button class="btn btn-block btn-inverse btn-raised">SELECT PAYMENT METHOD  <i class="material-icons">keyboard_arrow_right</i></button>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
  <footer>
    <div class="container well" style="margin-top:100px;">
      <div class="row">
        <div class="col-md-4">
          <h4><img src="" alt="logo" class="img img-responsive">Worth carving for</h4>
          <p style="text-align:justify;">Kanishk Mess is an extension of one’s personal kitchen. It serves home-quality food with daily new menus of breakfast, lunch, evening snacks and dinner; along with packaged edibles under the Flavours section. Kanishk Mess is a perfect blend of freshest ingredients, authentic recipes, wide variety of cuisines and the expertise of select chefs. Simple everyday meals to exotic indulgence – find them all at Kanishk Mess. </p>

        </div>
        <div class="col-md-2">
          <h4>Company</h4>
          <p class="footer_link"><a href="#">How it works</a></p>
          <p class="footer_link"><a href="#">Service Areas</a></p>
          <p class="footer_link"><a href="#">Team</a></p>
          <p class="footer_link"><a href="#">Believers</a></p>
          <p class="footer_link"><a href="#">Careers</a></p>
        </div>
        <div class="col-md-2">
          <h4>Legal</h4>
          <p class="footer_link"><a href="#">Terms and conditions</a></p>
          <p class="footer_link"><a href="#">Quality control</a></p>
          <p class="footer_link"><a href="#">Privacy policy</a></p>
        </div>
        <div class="col-md-2">
          <h4>Menu</h4>
          <p class="footer_link"><a href="#">Lunch</a></p>
          <p class="footer_link"><a href="#">Dinner</a></p>
          <p class="footer_link"><a href="#">Flavours</a></p>
          <p class="footer_link"><a href="#">Sitemap</a></p>
        </div>
        <div class="col-md-2">
          Follow us on

        </div>
      </div>
      <div class="row" style="border-top: 2px #ffffff inset;">
        <div class="col-md-12">
          <h6 style="text-align:center;">© 2016 Kanishk Mess. All Rights Reserved</h6>
        </div>
      </div>
    </div>
  </footer>
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
