<?php

// connect to database

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "suraj@123";
$dbase = "Docquity_Interns";
$db = mysqli_connect($dbhost, $dbuser, $dbpass, $dbase);

if(!$db){
    echo "Database not connected";
}


// PHP program to pop an alert
function function_alert($message)
{
    // Display the alert box 
    echo "<script>alert('$message');</script>";
}


// register new user
$name = mysqli_real_escape_string($db, $_POST["name"]);
$username = mysqli_real_escape_string($db, $_POST["username"]);
$email = mysqli_real_escape_string($db, $_POST["email"]);
$phone = mysqli_real_escape_string($db, $_POST["phone"]);
$password = mysqli_real_escape_string($db, $_POST["password"]);

$pass = md5($password);


// checking for validity of details
// if(ctype_alnum($phone)){
//     echo "<center><p>Please enter correct phone number</p></center>";
// }



// checking is user already exists

$queryChk = "SELECT * FROM `p_user` WHERE Username = '$username' or Email = '$email' ";

$result = mysqli_query($db, $queryChk);

if (mysqli_num_rows($result) >= 1) {

    header('Refresh: 4;URL=http://localhost/loginpage/login.php');
    echo "<center><h4>User already exists ! <br><br><h5>Redirecting... to login page</h5> <br><br> </h4></center> ";

} else {

    // creating entry for new user

    $query = "INSERT INTO `p_user` (`Name`, `Username`, `Email`, `Number`, `Password`) VALUES ('$name', '$username', '$email', '$phone', '$pass')";
    $result = mysqli_query($db, $query);

    header('Refresh: 4;URL=http://localhost/loginpage/login.php');
    echo "<center><h4>Registration Successful ! <br><br><h5>Redirecting... to login page</h5> <br><br> </h4></center> ";
}

?>