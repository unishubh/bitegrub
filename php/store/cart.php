<?php
session_start();

$x=$_GET['id'];
$y=$_GET['name'];
$z=$_GET['cost'];
$img=$_GET['image'];
$i=0;
//print_r($_GET);
$c=array();
//
$a=array();
//print_r($a);

//echo $_GET['id'];
//echo 1;
//$a=array(array('id' => $x,'name'=>$y,'cost'=>$),array('id'=>3,'name'=>4) );
//echo $_GET['id'];
$b=array('id'=>$x,'name'=>$y,'cost'=>$z,'img'=>$img);
//print_r($b);
if(isset($_COOKIE['cart']))
{
	//echo 'Yes';
	//echo $_COOKIE['cart'];
	$a=unserialize($_COOKIE['cart']) ;
//	print_r($a);
	for($i=0; ;$i++)
{
	if(isset($a[$i]['id']))
	{
		$c[$i]['id']=$a[$i]['id'];
		$c[$i]['name']=$a[$i]['name'];
		$c[$i]['cost']=$a[$i]['cost'];
		$c[$i]['img']=$a[$i]['img'];
	}
	else break;
}
}
//echo 99;
/*	$d=array()

$c=array();
*/
$c[$i]['id']=$b['id'];
$c[$i]['name']=$b['name'];
$c[$i]['cost']=$b['cost'];
$c[$i]['img']=$b['img'];
//print_r($c);
$v=serialize($c);
setcookie("cart",$v, 0,"/");
echo 9;


?>