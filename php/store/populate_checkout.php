<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

getcookie('cart');
function getcookie($name)
{
	$i=0;
	$id=array();
   $d=unserialize($_COOKIE[$name]);
   print_r($d);   
   while($d)
   {
     $id[$i++]=$d['id'];
     $d--;
   }
   print_r($id);
}
?>