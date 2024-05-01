<!DOCTYPE html>
<html>
<head>
    <title>Employee Information</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }
        
    </style>
</head>
<body>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    $name = $_POST['name'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    $gender = $_POST['gender'];
    $dob = $_POST['dob'];

    // Creating XML
    $xml = new DOMDocument('1.0', 'utf-8');
    $xml->formatOutput = true;
    $employees = $xml->createElement("employees");
    $employee = $xml->createElement("employee");
    $employees->appendChild($employee);
    $employee->appendChild($xml->createElement('name', $name));
    $employee->appendChild($xml->createElement('address', $address));
    $employee->appendChild($xml->createElement('phone', $phone));
    $employee->appendChild($xml->createElement('gender', $gender));
    $employee->appendChild($xml->createElement('dob', $dob));
    $xml->appendChild($employees);
    
    // Displaying XML
    echo "<h2>XML Output:</h2>";
    echo "<pre>" . htmlentities($xml->saveXML()) . "</pre>";

    // Displaying in Tabular format
    echo "<h2>Tabular Output:</h2>";
    echo "<table>";
    echo "<tr><th>Name</th><th>Address</th><th>Phone</th><th>Gender</th><th>Date of Birth</th></tr>";
    echo "<tr><td>$name</td><td>$address</td><td>$phone</td><td>$gender</td><td>$dob</td></tr>";
    echo "</table>";
}
?>

<form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
    <label for="name">Name:</label><br>
    <input type="text" id="name" name="name" required><br>
    <label for="address">Address:</label><br>
    <input type="text" id="address" name="address" required><br>
    <label for="phone">Phone:</label><br>
    <input type="text" id="phone" name="phone" required><br>
    <label for="gender">Gender:</label><br>
    <input type="radio" id="male" name="gender" value="Male" required>
    <label for="male">Male</label>
    <input type="radio" id="female" name="gender" value="Female">
    <label for="female">Female</label><br>
    <label for="dob">Date of Birth:</label><br>
    <input type="date" id="dob" name="dob" required><br><br>
    <input type="submit" value="Submit">
</form>

</body>
</html>
