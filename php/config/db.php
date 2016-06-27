<?php
require_once('config.php');
				$dbhost=DBHOST;
				$dbuser=DBUSER;
				$dbname=DBNAME;
				$dbpasswd=DBPASSWORD;
$conn=new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpasswd);
$conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
