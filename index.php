<?php
// $dsn = 'mysql:host=localhost;dbname=products;'; // Data Souce name
// $user = 'root'; // The user name
// $password = 'BODE@999BODE@999'; // the password name

// $options = array(
//     PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES UTF8'
// );
// try {
//     $db = new PDO($dsn, $user, $password, $options); // Start a new Connection with PDO
//     echo "You are connected";
//     $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//     $q = "insert into docks (name) values('عبدالله')";
//     $db->exec($q);



// } catch (PDOException $e) {
//     echo "Failed to Connect to the database " . $e->getMessage();
//     // the message class have the object to get the message from
//     // echo "<pre>";
//     // print_r($e);
//     // echo "</pre>";

// }



?>
<?php ?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <style>
            .form {
                margin: 20px;
                display: flex;
                justify-content: center;
                align-items: center;
                text-align: center;

            }


            .container {
                width: 75%;
                height: 75%;
            }
        </style>
    </head>

    <body>
        <div class="container">
            <form action="dbconnect.php" method="POST">

                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                        name="userName" placeholder="Enter email">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                        else.</small>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" name="passy"
                        placeholder="Password">
                </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="reg.php" target="_blank">New User?</a>

            </form>
        </div>


    </body>

</html>

<?php

?>