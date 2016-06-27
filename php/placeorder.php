<?php
session_start();
//echo $_SESSION['id'];
//print_r($_SESSION);
require_once('config/db.php');
$add=$_GET['address'];
$cost=$_GET['cost'];
$u=unserialize($_COOKIE['cart']);
$i=0;
//print_r($u);
$q="INSERT INTO orders (customer_id,shipping_add,amount) VALUES (:id,:add,:cost)";

try
{
	$sql=$conn->prepare($q);

	$sql->bindParam(':id',$_SESSION['id']);
	$sql->bindParam(':add',$add);
	$sql->bindParam(':cost',$cost);
	$sql->execute();
}
catch(PDOException $e)
{
	echo $e->getmessage();
}
$q="SELECT * FROM orders ORDER BY id DESC LIMIT 1";
try{
$sql=$conn->prepare($q);
$sql->execute();
$sql->setFetchMode(PDO::FETCH_ASSOC);
$row=$sql->fetch();
//echo $row['id'];
}
catch (PDOException $e)
{
echo $e->getmessage();
}

//echo 10;

$q="INSERT INTO order_detail (order_id,meal_id,cost) VALUES (:id,:meal,:cost)";
$sql=$conn->prepare($q);
while(isset($u[$i]['id']))
{
	echo $u[$i]['meal'];
	try
	{
 $sql->bindParam(':id',$row['id']);
 $sql->bindParam(':meal',$u[$i]['name']);
 $sql->bindParam(':cost',$u[$i]['cost']);
 $sql->execute();
}
catch (PDOException $e)
{
	echo $e->getmessage();
}
$i++;
}
print 1;
?>