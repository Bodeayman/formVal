<?php

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $userName = $_POST['userName'];
    $pass = $_POST['passy'];
}
$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "BODE@999BODE@999";
$dbName = "assid";

// $conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);
$mysqli = new mysqli($dbServername, $dbUsername, $dbPassword, $dbName);

$query = "insert into names (email,pass) values ('$userName','$pass')";

$result = $mysqli->query($query);


// close connection
mysqli_close($mysqli);
echo "Connection success";

?>