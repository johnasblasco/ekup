<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Customer</title>
</head>
<style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            padding: 20px;
        }

        h2 {
            color: #333;
            font-size: 2rem;
            margin-bottom: 20px;
        }

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 4px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        input[type="text"],
        input[type="email"],
        input[type="hidden"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            font-size: 1rem;
        }

        input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 1rem;
        }
        
        input[type="submit"]:hover {
            background-color: #0056b3;
        }
        button {
            margin-top: 10px;
            width: 100%;
            padding: 10px;
            background-color: #ff0000;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 1rem;
        }
        button:hover{
            background-color:#cf0606;
        }
    </style>
<body>
    <h2>Edit Customer</h2>
    
    <?php
// Retrieve customer name from URL parameter
$customerName = $_GET['name'] ?? '';

// Load the XML file
$xml = simplexml_load_file('customers.xml');

// Check if the XML file was loaded successfully
if ($xml) {
    // Search for the customer node with the given name
    $customerFound = false;
    foreach ($xml->customer as $customer) {
        if ($customer->name == $customerName) {
            $customerFound = true;
            $customerName = htmlspecialchars($customer->name);
            $email = htmlspecialchars($customer->email);
            $addr = htmlspecialchars($customer->addr);

            // Display the edit form
            echo "<form action='edit-customer.php' method='post'>";
            echo "<input type='hidden' name='name' value='$customerName'>";
            echo "Customer Name: <input type='text' name='name' value='$customerName' required><br><br>";
            echo "Email Address: <input type='email' name='email' value='$email' required><br><br>";
            echo "Address: <input type='text' name='addr' value='$addr' required><br><br>";
            echo "<input type='submit' value='Update'>";
            echo "<a href = 'admin.php'><button>Back to Home</button></a>";
            echo "</form>";
            break;
        }
    }

    if (!$customerFound) {
        echo "Customer not found.";
    }
} else {
    echo "Error loading XML file.";
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $addr = $_POST["addr"];

    // Search for the customer node with the given name and update its details
    foreach ($xml->customer as $customer) {
        if ($customer->name == $name) {
            $customer->email = $email;
            $customer->addr = $addr;
            break;
        }
    }

    // Save the changes back to the XML file
    $xml->asXML("customers.xml");

    // Redirect back to the customer table page
    header("Location: admin.php");
    exit();
}
?>


</body>
</html>
