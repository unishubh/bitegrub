<?php
session_start();
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require_once('config/db.php');
echo 9;
$cred=$_POST['email'];
$pass=$_POST['password'];
//print_r($_POST);
$sql="SELECT * FROM customers WHERE (email=:cred or phoneno=:cred ) AND password=:pass ";
$q=$conn->prepare($sql);
$q->bindParam(':cred',$cred);
	$q->bindParam(':pass',$pass);
	$q->setFetchMode(PDO::FETCH_ASSOC);
$row=$q->fetch();
if(isset($row['nmae']))
echo 'y';
echo $row['name'];


try 
{
	$q=$conn->prepare($sql);
	$q->bindParam(':cred',$cred);
	$q->bindParam(':pass',$pass);
	$q->execute();
	$q->setFetchMode(PDO::FETCH_ASSOC);
	//echo 1;
}

catch(PDOException $e)
{
	//echo 2;
	die ($e->getmessage());
}
$row=$q->fetch();
if(!isset($row['name']))
{
	echo 45;
	echo'<script> 
	alert("Wrong credentials");
window.location.href='.$_POST["page"].';</script>';

}
else 
{
	$_SESSION['name']=$row['name'];
$_SESSION['id']=$row['id'];
$_SESSION['phone']=$row['phoneno'];
echo'<script> 
alert("done");
window.location.href="'.$_POST["page"].'";</script>';
	//echo 78;
}




?>
