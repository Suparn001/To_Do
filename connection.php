<?php
define("HOSTNAME", "localhost");
define("USERNAME", "root");
define("PASSWORD", "");  
define("DATABASE", "to_do");

$con = mysqli_connect(HOSTNAME, USERNAME, PASSWORD, DATABASE);

if (!$con) {
    die("Error in connection: " . mysqli_connect_error());
}

?>

