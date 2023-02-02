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

// user validation

$email = mysqli_real_escape_string($db, $_POST["email"]);
$password = mysqli_real_escape_string($db, $_POST["password"]);

$pass = md5($password);

$query = "SELECT * FROM `p_user` WHERE Email = '$email' AND Password = '$pass' ";

$result = mysqli_query($db, $query);

if (mysqli_num_rows($result) == 1) {

    echo "<center><p> Login successful <h3>$email</h3> </p></center>";
    include("table.php");

} else {

    header('Refresh: 4;URL=http://localhost/loginpage/login.php');
    echo "<center><h4>Invalid User ! <br><br><h5> Please enter valid username and password</h5> <br><br> Redirecting...</h4></center> ";

}


?>