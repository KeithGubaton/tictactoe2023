<?php
//Database Connection parameters
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tictactoe";

//Create sql query from the provided db parameters
$conn = new mysqli($servername, $username, $password, $dbname);

//Check if connection successful

if ($conn->connect_error) {
    // If there's an error, terminate the script and display a messaage.
    die("Connection failed:" . $conn->connect_error);

}

?>