<?php

// connect to database

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "suraj@123";
$dbase = "Docquity_Interns";
$db = mysqli_connect($dbhost, $dbuser, $dbpass, $dbase);

if (!$db) {
    echo "Database not connected";
}

?>