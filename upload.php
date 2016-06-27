<?php
session_start();
?>
<!DOCTYPE html>

<html>

<head>
  <title>Kanishk | Upload</title>
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

  <style type="text/css">
    /* layout.css Style */
    .upload-drop-zone {
      height: 200px;
      border-width: 2px;
      margin-bottom: 20px;
    }

    /* skin.css Style*/
    .upload-drop-zone {
      color: #ccc;
      border-style: dashed;
      border-color: #ccc;
      line-height: 200px;
      text-align: center
    }
    .upload-drop-zone.drop {
      color: #222;
      border-color: #222;
    }
    label {
      color: #000 !important;
    }
  </style>

</head>
<body>

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
          <a href="" data-toggle="dropdown">Hi, Chef Kanishk <i class="material-icons">keyboard_arrow_down</i></a>
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
<div class="container">
<div class="row">
  <div class="col-md-12 text-center" style="margin-top:20px;">
    <h3>Hi Chef Kanishk, Upload your meal here!</h3>
    <hr style="background-color:#FFAF00">
  </div>
</div>
<div class="row">
  <div class="col-md-4">
    <div>
      <div class="container2">
      <div class="panel panel-default">
        <div class="panel-heading"><strong>Upload Meal Images</strong> </div>
        <div class="panel-body">

          <!-- Standar Form -->
          <h4>Select files from your computer</h4>
         <form class="form-horizontal" method="POST" action="/bg/uploadform.php ">
            <div class="form-inline">
              <div class="form-group">
                <input type="file" name="files" >
              </div>
              <button type="submit" class="btn btn-sm btn-primary" id="js-upload-submit">Upload files</button>
            </div>
         

          <!-- Drop Zone -->
          

          <!-- Progress Bar -->
          <div class="progress">
            <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
              <span class="sr-only">60% Complete</span>
            </div>
          </div>

          <!-- Upload Finished -->
          <div class="js-upload-finished">
            <h3>Processed files</h3>
            <div class="list-group">
              <a href="#" class="list-group-item list-group-item-success"><span class="badge alert-success pull-right">Success</span>image-01.jpg</a>
              <a href="#" class="list-group-item list-group-item-success"><span class="badge alert-success pull-right">Success</span>image-02.jpg</a>
            </div>
          </div>
        </div>
      </div>
    </div> <!-- /container -->
    </div>
  </div>
  <div class="col-md-8 well">
    
      <div class="form-group">
        <label class="col-md-2">Meal Name</label>
        <div class="col-md-10">
        <input type="text" name="name" class="form-control" placeholder="Name of the meal...">
        </div>
      </div>
      <div class="form-group">
        <label class="col-md-2">Price</label>
        <div class="col-md-10">
        <input type="text" name="cost" class="form-control" placeholder="Price of the meal...">
        </div>
      </div>
      <div class="form-group">

      </div>
      <div class="form-group">
        <label class="col-md-2">Description</label>
        <div class="col-md-10">
        <textarea row="3" name="description" class="form-control"></textarea>
        </div>
      </div>
      <div class="form-group">
        <label class="col-md-2 control-label">Meal Timing</label>

        <div class="col-md-10">
          <div class="radio radio-primary">
            <label>
              <input name="time" id="optionsRadios1" value="1" checked="" type="radio">
              BREAKFAST: 09:00 - 11:00 AM
            </label>
          </div>
          <div class="radio radio-primary">
            <label>
              <input name="time" id="optionsRadios2" value="2" type="radio">
              LUNCH: 11:00 - 04:00 PM
            </label>
          </div>
          <div class="radio radio-primary">
            <label>
              <input name="time" id="optionsRadios3" value="3" type="radio">
              SNACKS: 04:00 - 07:00 PM
            </label>
          </div>
          <div class="radio radio-primary">
            <label>
              <input name="time" id="optionsRadios4" value="4" type="radio">
              DINNER: 07:00 - 11:30 PM
            </label>
          </div>
          <div class="radio radio-primary">
            <label>
              <input name="time" id="optionsRadios5" value="5" type="radio">
              FLAVOURS: 09:00AM - 11:00 PM
            </label>
          </div>
        </div>
      </div>
     
      <div class="form-group">
        <label class="col-md-2 control-label">Type of Meal</label>

        <div class="col-md-10">
          <div class="radio radio-primary">
            <label>
              <input name="type" id="optionsRadios1" value="1" checked="" type="radio">
              Filling Meal
            </label>
          </div>
          <div class="radio radio-primary">
            <label>
              <input name="type" id="optionsRadios2" value="2" type="radio">
              Light Meal
            </label>
          </div>
          <div class="radio radio-primary">
            <label>
              <input name="type" id="optionsRadios3" value="3" type="radio">
              Soups and Salads
            </label>
          </div>
          <div class="radio radio-primary">
            <label>
              <input name="type" id="optionsRadios4" value="4" type="radio">
              Desserts
            </label>
          </div>
          <div class="radio radio-primary">
            <label>
              <input name="type" id="optionsRadios5" value="5" type="radio">
              Beverages
            </label>
          </div>
        </div>
      </div>
        <!--    <div class="togglebutton">
        <label class="col-md-2 control-label">Packed Snacks?</label>
          <label>
            No&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="checkbox" checked class="col-md-10">&nbsp; Yes
          </label>
      </div>
      <div class="form-group">
        <label class="col-md-2 control-label">Type Packed Snacks</label>

        <div class="col-md-10">
          <div class="radio radio-primary">
            <label>
              <input name="optionsRadios" id="optionsRadios1" value="option1" checked="" type="radio">
              Munchies
            </label>
          </div>
          <div class="radio radio-primary">
            <label>
              <input name="optionsRadios" id="optionsRadios2" value="option2" type="radio">
              Condiments, dips &amp; spreads
            </label>
          </div>
          <div class="radio radio-primary">
            <label>
              <input name="optionsRadios" id="optionsRadios3" value="option2" type="radio">
              Packaged drinks
            </label>
          </div>
          <div class="radio radio-primary">
            <label>
              <input name="optionsRadios" id="optionsRadios4" value="option2" type="radio">
              Health Food
            </label>
          </div>
        </div>
      </div> -->
      <div class="form-group">
      <div class="col-md-10 col-md-offset-2">
        <button type="submit" class="btn btn-warning btn-raised btn-block">Submit</button>
      </div>
    </div>
      
    </form>
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
<script type="text/javascript">
+ function($) {
    'use strict';

    // UPLOAD CLASS DEFINITION
    // ======================

    var dropZone = document.getElementById('drop-zone');
    var uploadForm = document.getElementById('js-upload-form');

    var startUpload = function(files) {
        console.log(files)
    }

    uploadForm.addEventListener('submit', function(e) {
        var uploadFiles = document.getElementById('js-upload-files').files;
        e.preventDefault()

        startUpload(uploadFiles)
    })

    dropZone.ondrop = function(e) {
        e.preventDefault();
        this.className = 'upload-drop-zone';

        startUpload(e.dataTransfer.files)
    }

    dropZone.ondragover = function() {
        this.className = 'upload-drop-zone drop';
        return false;
    }

    dropZone.ondragleave = function() {
        this.className = 'upload-drop-zone';
        return false;
    }

}(jQuery);
</script>
</body>
</html>
