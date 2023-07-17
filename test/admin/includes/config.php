<?php 
// DB credentials.
$DB_HOST = getenv('DB_HOST') ?: "mysql-service";
$DB_USER = getenv('DB_USER') ?: "tms_user";
$DB_PASS = getenv('DB_PASS') ?: "tms_password";
$DB_NAME = getenv('DB_NAME') ?: "tms";
// Establish database connection.
try
{
    $dbh = new PDO("mysql:host=".$DB_HOST.";dbname=".$DB_NAME, $DB_USER, $DB_PASS, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
}
catch (PDOException $e)
{
    exit("Error: " . $e->getMessage());
}
?>