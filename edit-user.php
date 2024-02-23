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
$userName = $_GET['name'] ?? '';

$xml = simplexml_load_file('users.xml');

if ($xml) {
    $userFound = false;
    foreach ($xml->user as $user) {
        if (strcasecmp($user->name, $userName) === 0) {
            $userFound = true;
            $name = htmlspecialchars($user->name);
            $email = htmlspecialchars($user->email);
            $addr = htmlspecialchars($user->addr);

            echo "<h2>Edit user</h2>";
            echo "<form action='edit-user.php' method='post'>";
            echo "<input type='hidden' name='original_name' value='$name'>";
            echo "User Name: <input type='text' name='edited_name' value='$name' required><br><br>";
            echo "Email Address: <input type='email' name='email' value='$email' required><br><br>";
            echo "Address: <input type='text' name='addr' value='$addr' required><br><br>";
            echo "<input type='submit' value='Update'>";
            echo "<a href='admin.php'><button>Back to Home</button></a>";
            echo "</form>";
            break;
        }
    }

    if (!$userFound) {
        echo "User not found.";
    }
} else {
    echo "Error loading XML file.";
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $originalName = $_POST["original_name"];
    $editedName = $_POST["edited_name"];
    $email = $_POST["email"];
    $addr = $_POST["addr"];

    foreach ($xml->user as $user) {
        if (strcasecmp($user->name, $originalName) === 0) {
            $user->name = $editedName;
            $user->email = $email;
            $user->addr = $addr;
            break;
        }
    }

    $xml->asXML("users.xml");

    header("Location: admin.php");
    exit();
}
?>




</body>
</html>
