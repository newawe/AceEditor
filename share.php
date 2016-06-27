<?php
$code = $_POST['code'];
$lang = $_POST['lang'];
$name = "test"; //TODO: Replace with actual code
$desc = "test"; //TODO: Replace with actual code
$user = "test"; //TODO: Replace with actual code




$servername = "localhost";
$username = "BMS_id";
$password = "Password1";
$dbname = "BMS_id";
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql = "INSERT INTO `BMS_id`.`Newawe_Project_Test` (`Code`, `ID`, `User`, `Lang`, `Name`, `Description`) VALUES (\'{$code}\', NULL, \'{$user}\', \'{$lang}\', \'{$name}\', \'{$desc}\');";
mysqli_query($conn, $sql);


//Redirect user back
echo '<script type="text/javascript">
           window.location = "http://editor.newawe.com/?code="'.$code.'
      </script>';
