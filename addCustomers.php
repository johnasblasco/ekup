<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["name"])) {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $addr = $_POST["addr"];

    // Load the XML file
    $xml = simplexml_load_file("customers.xml");


    // Create a new user node
    $customer = $xml->addChild("customer");

    // Add name attribute to the user node
    $customer->addChild("name", $name);
    $customer->addChild("email", $email);
    $customer->addChild("addr", $addr);

    // Save the changes back to the XML file
    $result = $xml->asXML("customers.xml");

    header("location: admin.php");
    exit();
} else {
    // If the form is not submitted or name is not provided, redirect to index.html
    header("Location: admin.php");
    exit();
}
?>
