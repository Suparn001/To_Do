<?php
session_start();
define("HOSTNAME", "");
define("USERNAME", "");
define("PASSWORD", "");
define("DATABASE", "");

$con = mysqli_connect(HOSTNAME, USERNAME, PASSWORD, DATABASE);

if (!$con) {
    die("Error in connection: " . mysqli_connect_error());
}