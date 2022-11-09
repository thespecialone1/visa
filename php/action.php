<?php

require('db.config.php');


// define variables and set to empty values
$fname = $email = $lname = $country = $contact = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!isset($_POST['fname']) || !isset($_POST['lname']) || !isset($_POST['email']) || !isset($_POST['country']) || !isset($_POST['contact'])) {
        die("Please submit valid details!");
    }

    $fname = mysqli_real_escape_string($conn, test_input($_POST["fname"]));
    $email = mysqli_real_escape_string($conn, test_input($_POST["email"]));
    $lname = mysqli_real_escape_string($conn, test_input($_POST["lname"]));
    $country = mysqli_real_escape_string($conn, test_input($_POST["country"]));
    $contact = mysqli_real_escape_string($conn, test_input($_POST["contact"]));
    $sql = "INSERT INTO `contact` (`id`, `fname`, `lname`, `email`, `country`, `contact`) VALUES (NULL, '$fname', '$lname', '$email', '$country' ,'$contact')";
    if (!mysqli_query($conn, $sql)) {
        echo "Server facing error";
        exit();
    }
} else echo "Data saved!";


function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

?>
<br><br>

<div>
    <h1>Thanks for sending us your Query!</h1>
    <p>Our team will contact you soon.</p>
</div>

<style>
    div{
        text-align: center;
    }
    h1 {
        color: green;
    }
</style>