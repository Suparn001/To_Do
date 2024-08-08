<?php
session_start();
define("HOSTNAME", "localhost");
define("USERNAME", "admin");
define("PASSWORD", "ztech@44");
define("DATABASE", "to_do");

$con = mysqli_connect(HOSTNAME, USERNAME, PASSWORD, DATABASE);

if (!$con) {
    die("Error in connection: " . mysqli_connect_error());
}