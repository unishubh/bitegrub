<?php
if(isset($_COOKIE['cart']))
echo 'Yes';
else 
echo 'NO';
$a=unserialize($_COOKIE['cart']);
print_r($a);
?>