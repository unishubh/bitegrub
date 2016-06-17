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