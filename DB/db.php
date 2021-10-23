<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "webtech";

//create connection
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error)
{
    die("Connection failed: " . $conn->connect_server);
}

$name = "Sadia Rupa";
$username = "rupa27";
$password = "1234";
$mobile = 27016;

$sql = "INSERT INTO user(Name, Username, Password, Mobile) VALUES('$name', '$username', '$password', '$mobile')";

if ($conn->query($sql) === TRUE)
{
    ECHO "New record created succesfully";
}
else 
{
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
