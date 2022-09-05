<?php
error_reporting(15);

/*if ($_SERVER['SERVER_NAME'] != "localhost")
{
  $_hostname = "";
  $_username = "";
  $_password = "";
  $_database = "";
}
else
{
  $_hostname = "localhost";
  $_username = "root";
  $_password = "root";
  $_database = "immoBelgie5";
}
  $_PDO = new PDO("mysql:host=$_hostname; dbname=$_database","$_username", "$_password");
  
  $_PDO->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);*/

$_servername = "localhost";
$_username = "root";
$_password = "root";
$_dbname = "immoBelgie5";

// Create connection
$_conn = new mysqli($_servername, $_username, $_password, $_dbname);
// Check connection
if ($_conn->connect_error) {
  die("Connection failed: " . $_conn->connect_error);
} 



?>