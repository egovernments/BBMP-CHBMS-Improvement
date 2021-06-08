<?php
date_default_timezone_set('Asia/Kolkata');
if($_SERVER['HTTP_HOST'] == 'localhost')
{

	$dbservertype='mysqli';
	$servername='localhost';
	$dbuser='root';
	$dbpassword='root';
	$dbname='chbms';

}
else {


    $dbservertype='mysqli';
  	$servername = getenv('DB_HOST');
	$dbuser = getenv('DB_USER');
	$dbpassword = getenv('DB_PASSWORD');
	$dbname = getenv('DB_NAME'); 


}

global $mysqli;


try {
  $mysqli = new mysqli($servername, $dbuser, $dbpassword, $dbname);
  $mysqli->set_charset("utf8mb4");
} catch(Exception $e) {
  error_log($e->getMessage());
  exit('Error connecting to database'); //Should be a message a typical user could understand
}

?>