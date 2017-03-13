<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Processing Form...</title>
</head>
<body>

<?php

try {
// create 8 variables and store the form inputs in them
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$phonenumber = $_POST['phonenumber'];
$country = $_POST['country'];
$city = $_POST['city'];
$weather = $_POST['weather'];
$traveldate = $_POST['traveldate'];


// display the variables
echo 'firstname: ' . $firstname . '<br />';
echo 'lastname: ' . $lastname . '<br />';
echo 'email: ' . $email . '<br />';
echo 'phonenumber: ' . $phonenumber . '<br />';
echo 'country: ' . $country . '<br />';
echo 'city: ' . $city . '<br />';
echo 'weather: ' . $weather . '<br />';
echo 'traveldate: ' . $traveldate . '<br />';


?>

<?php

}
catch (exception $e) {
    mail('jessecannon1@hotmail.com', 'Proccess Form Page Error', $e);
    header('location:error.php');
}
?>

</body>
</html>
