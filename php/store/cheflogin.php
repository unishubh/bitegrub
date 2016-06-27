<?php
session_start();
require_once('../config/db.php');
print_r($_POST);
echo $_POST['email'];
$sql="SELECT * FROM sellers WHERE (email=:email OR phoneno=:email) AND password=:password";
try
{

$q=$conn->prepare($sql);
//echo $q;
//$q->bindParam(':name',$_POST['name']);
$q->bindParam(':email',$_POST['email']);
$q->bindParam(':password',md5($_POST['pass']));
//$q->bindParam(':add',$_POST['address']);
//$q->bindParam(':lat',$_POST['lat']);
//$q->bindParam(':long',$_POST['long']);
//$q->bindParam(':phone',$_POST['phone']);
$q->execute();
$q->setFetchMode(PDO::FETCH_ASSOC);

}
catch(PDOException $e)
{

 echo $e->getmessage();
}
$row=$q->fetch();
//print_r($row);
if(isset($row['name']))
{
	$_SESSION['name']=$row['name'];
	$_SESSION['id']=$row['id'];
	$_SESSION['address']=$row['seller_add'];
	$_SESSION['latitude']=$row['latitude'];
	$_SESSION['longitude']=$row['longitude'];
	echo '<script>
	alert("Done");
	window.location.href="/bg/upload.php";
	</script>
	';

}

else
{
	echo '<script>alert("Wrong Credentials");
	window.href.location="chef_login.php";
	</script>
	';
}
?>