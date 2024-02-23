<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["name"])) {
    $name = $_POST["name"];

    // Load the XML file
    $xml = simplexml_load_file("customers.xml");

    if ($xml === false) {
        die('Error: Cannot load XML file');
    }

    $customerFound = false;

    // Loop through each customer to find the one with the matching name
    foreach ($xml->customer as $customer) {
        if ($customer->name == $name) {
            // Remove the customer node
            $dom = dom_import_simplexml($customer);
            $dom->parentNode->removeChild($dom);
            $customerFound = true;
            break;
        }
    }

    if (!$customerFound) {
        die('Error: customer not found');
    }

    // Save the changes back to the XML file
    $xml->asXML("customers.xml");

    // Redirect back to the delete.html page after deleting the record
    header("Location: admin.php");
    exit();
} else {
    // If the form is not submitted or required data is missing, redirect to index.html
    header("Location: admin.php");
    exit();
}
?>