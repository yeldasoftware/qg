<?php
/* $connect=mysql_connect("localhost","root","root");
mysql_select_db("oyun_kds");
mysql_query("SET NAMES 'latin5'");
mysql_query("SET CHARACTER SET latin5");
mysql_query("SET COLLACTION_CONNECTION='latin5_turkish_ci'");

 */

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "oyun_kds";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully"

?>
