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

  
      
      <!--.//Login Modal-->
      <!--Register Modal-->
     
      <!--.//Register Modal-->
      <!--Chef Modal-->
      
              <form class="form-horizontal"  method="post" action="/bg/php/store/cheflogin.php">
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
                    <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
                    <div class="col-sm-10">
                      <input class="form-control" type="text" name="email" placeholder="Email ID">
                    </div>
                  </div>
               
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Password</label>
                    <div class="col-sm-10">
                      <input class="form-control" type="password" name="pass" placeholder="Password">
                    </div>
                  </div>
                 
                
                    </div>

                    
                  </div>

                      <input type="submit"  name="submit" value="Submit" class="btn btn-warning btn-raised">
                    </div>
                  </div>

              </form>
                          </div>
           
              <!-- <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> -->
              <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
            </div>
          </div>
        </div>
   

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCf610uWLtO90Ili791ub0ubsukcKcJh8Q&libraries=places&callback=initMap"
        async defer></script>       
  <script>
  

    function initMap()
      {

          var input=document.getElementById('address');
          var autocomplete=new google.maps.places.Autocomplete(input);
          autocomplete.addListener('place_changed', function() {
          var place = autocomplete.getPlace();

            if (!place.geometry) {
              window.alert("Autocomplete's returned place contains no geometry");
              return;
            }
            else{

              
                var lat=place.geometry.location.lat();
                var long=place.geometry.location.lng();

                var address="";
              
            
                place.address_components.forEach(function(element){

                 
                  address+=element.long_name+",";

                });

                    console.log(address);
                    console.log(lat);
                    console.log(long);
                    document.getElementById("lat").value=lat;
                    document.getElementById("long").value=long;
                    document.getElementById("add").value=add;

                   // write seller register function 
             } 

          });   
    }         
</script>
<!-- Dropdown.js -->
<script src="js/jquery.dropdown.js"></script>
<script>
  $("#dropdown-menu select").dropdown();

</script>

</body>
</html>
