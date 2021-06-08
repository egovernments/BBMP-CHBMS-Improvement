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
	$servername='bbmp-db.mysql.database.azure.com';
	$dbuser='dbadmin@bbmp-db';
	$dbpassword='bbmpadmin@4321';
	$dbname='chbms'; 

  $servername = getenv('DB_HOST');
	$dbuser = getenv('DB_USER');
	$dbpassword = getenv('DB_PASSWORD');
	$dbname = getenv('DB_NAME'); 


}

//echo $dbname;

//$cn = mysqli_connect($servername,$dbuser,$dbpassword,$dbname);
global $mysqli;

//mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
try {
  $mysqli = new mysqli($servername, $dbuser, $dbpassword, $dbname);
  $mysqli->set_charset("utf8mb4");
} catch(Exception $e) {
  error_log($e->getMessage());
  exit('Error connecting to database'); //Should be a message a typical user could understand
}
// Check connection
/*if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}*/

?>