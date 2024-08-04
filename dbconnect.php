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

$query = "SELECT * FROM names WHERE email = '$userName' and pass = '$pass'";

$result = $mysqli->query($query);

if ($result) {
    if (mysqli_num_rows($result) > 0) {
        echo 'found!';
    } else {
        echo 'not found';
    }
} else {
    echo 'Error: ' . mysqli_error();
}

// close connection
mysqli_close($mysqli);

?>