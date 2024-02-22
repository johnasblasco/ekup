<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit user</title>
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
    <h2>Edit user</h2>
    
    <?php
// Retrieve user name from URL parameter
$userName = $_GET['name'] ?? '';

// Load the XML file
$xml = simplexml_load_file('users.xml');

// Check if the XML file was loaded successfully
if ($xml) {
    // Search for the user node with the given name
    $userFound = false;
    foreach ($xml->user as $user) {
        if ($user->name == $userName) {
            $userFound = true;
            $userName = htmlspecialchars($user->name);
            $email = htmlspecialchars($user->email);
            $addr = htmlspecialchars($user->addr);

            // Display the edit form
            echo "<form action='edit-user.php' method='post'>";
            echo "<input type='hidden' name='name' value='$userName'>";
            echo "user Name: <input type='text' name='name' value='$userName' required><br><br>";
            echo "Email Address: <input type='email' name='email' value='$email' required><br><br>";
            echo "Address: <input type='text' name='addr' value='$addr' required><br><br>";
            echo "<input type='submit' value='Update'>";
            echo "<a href = 'admin.php'><button>Back to Home</button></a>";
            echo "</form>";
            break;
        }
    }

    if (!$userFound) {
        echo "user not found.";
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

    // Search for the user node with the given name and update its details
    foreach ($xml->user as $user) {
        if ($user->name == $name) {
            $user->email = $email;
            $user->addr = $addr;
            break;
        }
    }

    // Save the changes back to the XML file
    $xml->asXML("users.xml");

    // Redirect back to the user table page
    header("Location: admin.php");
    exit();
}
?>


</body>
</html>
