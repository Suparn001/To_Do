<?php
session_start();
define("HOSTNAME", "localhost");
define("USERNAME", "");
define("PASSWORD", "");
define("DATABASE", "");

$con = mysqli_connect(HOSTNAME, USERNAME, PASSWORD, DATABASE);

if (!$con) {
    die("Error in connection: " . mysqli_connect_error());
}