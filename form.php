<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form</title>
</head>
<body>
    <h1>Book a New Trip</h1>
<!-- Created a form to book travels -->
<form action="process-form.php" method="post">
    <fieldset>
        <label for="firstname">First Name: *</label>
        <input name="firstname" id="firstname" required placeholder="Enter First Name" />
    </fieldset>
    <fieldset>
        <label for="lastname">Last Name: *</label>
        <input name="lastname" id="lastname" required placeholder="Enter Last Name" />
    </fieldset>
     <fieldset>
        <label for="email">Email: *</label>
        <input name="email" id="email" required placeholder="Enter Email" />
    </fieldset>
    <fieldset>
        <label for="phonenumber">Phone Number: *</label>
        <input name="phonenumber" id="phonenumber" required type="phonenumber" placeholder="Enter Phone Number" />
    </fieldset>
    <fieldset>
        <!-- Made a dropdown list of the countries -->
        <label for="country">Country:</label>
        <select name="country[]">
        <option value="US">United States</option>
        <option value="CAN">Canada</option>
        <option value="UK">United Kingdom</option>
        <option value="AUS">Australia</option>
        </select>
    </fieldset>
    <fieldset>
        <label for="city">City: *</label>
        <input name="city" id="city" required placeholder="City Name" />
    </fieldset>
    <fieldset>
        <label for="weather">Weather:</label>
        <input name="weather" id="weather" type="number" placeholder="Weather Temperature" />
    </fieldset>
    <fieldset>
        <label for="traveldate">Travel Date: *</label>
        <input name="traveldate" id="traveldate" required type="date" placeholder="Date of Travel" />
    </fieldset>
    <button>Save</button>
</form>

</body>
</html>
