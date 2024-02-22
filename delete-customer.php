<?php
// Check if the name parameter is set in the URL
if(isset($_GET['name'])) {
    $customerName = $_GET['name'];

    // Load the XML file
    $xml = simplexml_load_file('customers.xml');

    // Check if the XML file was loaded successfully
    if ($xml) {
        // Search for the user node with the given name and remove it
        foreach ($xml->customer as $index => $customer) {
            if ($customer->name == $customerName) {
                unset($xml->customer[$index]);
                break;
            }
        }

        // Save the changes back to the XML file
        $xml->asXML('customers.xml');

        // Redirect back to the user table page
        header("Location: admin.php");
        exit();
    } else {
        echo "Error loading XML file.";
    }
} else {
    // If the name parameter is not set, redirect to an error page or handle the error accordingly
    echo "User name not provided.";
}
?>
