<?php
session_start();
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);require_once('config/db.php');
print_r($_GET);
$n=$_GET['name'];
$fbid=$_GET['fbid'];
$e=$_GET['email'];
$r=1;
$sql="SELECT * FROM customers WHERE customer_id=:fbid ";
	$q=$conn->prepare($sql);
	$q->bindParam(':fbid',$fbid);
	$q->execute();
	$q->setFetchMode(PDO::FETCH_ASSOC);
	$row=$q->fetch();
	if(!(isset($row['customer_id'])))
	{
		$r=9;
		$sq="INSERT INTO customers (name,email,customer_id) VALUES ('$n','$e','$fbid')";
		$q1=$conn->prepare($sq);
		$q1->execute();
		


	}
	

$_SESSION['name']=$_GET['name'];
		$_SESSION['email']=$_GET['email'];
		$_SESSION['id']=$_GET['fbid'];
		echo $r;
	


?>