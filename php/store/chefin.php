<?php
require_once('../config/db.php');
print_r($_POST);
$sql="INSERT INTO sellers (name,email,password,phoneno,seller_add,latitude,longitude) VALUES (:name,:email,:pass,:phone,:add,:lat,:long)";
try
{
$q=$conn->prepare($sql);
$q->bindParam(':name',$_POST['name']);
$q->bindParam(':email',$_POST['email']);
$q->bindParam(':pass',md5($_POST['pass']));
$q->bindParam(':add',$_POST['address']);
$q->bindParam(':lat',$_POST['lat']);
$q->bindParam(':long',$_POST['long']);
$q->bindParam(':phone',$_POST['phone']);
$q->execute();
}
catch(PDOException $e)
{
 echo $e->getmessage();
}
$qw=$_POST["page"];
echo '<script>window.location.href="'.$qw.'";</script>';

?>