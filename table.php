<?php

// connect to database

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "suraj@123";
$dbase = "Docquity_Interns";
$db = mysqli_connect($dbhost, $dbuser, $dbpass, $dbase);


// if(!$db){
//     echo "Database not connected";
// }else{
//     echo "Database connected";
// }

// fetch data from database

$query = "SELECT * FROM `p_user` ";

$result = mysqli_query($db, $query);


// // json object
// $json = mysqli_fetch_all ($result, MYSQLI_ASSOC);
// echo json_encode($json );



// creating table for existing users


if (mysqli_num_rows($result) > 0) {
    echo "<h3><center> USERS </center></h3>";
    echo "<center><table border=2 ><tr><th>Name</th><th>Username</th><th>Email</th><th>Number</th></tr>";

    // output data of each row
    while ($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["Name"] . "</td><td>" . $row["Username"] . "</td><td>" . $row["Email"] . "</td><td>" . $row["Number"] . "</td></tr>";
    }

    echo "</table></center>";

} else {
    echo "No users found";
}




?>