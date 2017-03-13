<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>New Travel Location Booked Successfully</title>
</head>
<body>

<?php
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$phonenumber = $_POST['phonenumber'];
$country = $_POST['country'];
$city = $_POST['city'];
$weather = $_POST['weather'];
$traveldate = $_POST['traveldate'];

try {
// connect to my azure database
$conn = new PDO('mysql:host=ca-cdbr-azure-central-a.cloudapp.net;dbname=comp1006jessecannondatabase', 'bf3c946f4d66ff', '1d953141');

// set up an SQL instruction to save the new travel into the database
$sql = "INSERT INTO users (firstname, lastname, email, phonenumber country, city, weather, traveldate) VALUES (:firstname, :lastname, :email, :phonenumber, :country, :city, :weather, :traveldate);";

$cmd = $conn->prepare($sql);
$cmd->bindParam(':firstname', $firstname, PDO::PARAM_STR, 50);
$cmd->bindParam(':lastname', $lastname, PDO::PARAM_INT);
$cmd->bindParam(':email', $email, PDO::PARAM_STR, 50);
$cmd->bindParam(':phonenumber', $phonenumber, PDO::PARAM_INT);
$cmd->bindParam(':country', $country, PDO::PARAM_STR, 50);
$cmd->bindParam(':city', $city, PDO::PARAM_INT);
$cmd->bindParam(':weather', $weather, PDO::PARAM_STR, 50);
$cmd->bindParam(':traveldate', $traveldate, PDO::PARAM_INT);

$cmd->execute();

// disconnect from database
$conn = null;

echo 'New Travel Location Booked Successfully';
?>

<?php

}
catch (exception $e) {
    mail('jessecannon1@hotmail.com', 'Travel Save Page Error', $e);
    header('location:error.php');
}
?>

</body>
</html>
