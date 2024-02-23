<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        
    *{
        margin:0;
        font-family: monospace;
    }


    table {
        display: none;
        position: absolute;
        top: 20%;
        left:  20%;
        width: 1000px;
        height: 500px;
        
    }

    table h2{
        color: #F4DFC8;
    }

    table th{
        color: #31393c;
        background: #3e96f4;
    }

    table td{
        color: #191717;
        text-align: center;
        vertical-align: middle;
    }
    #ed{
        border: 1px solid #4283e8;
        background-color: #4283e8;
        padding: 1vh 1vw;
        color: #F1EFEF;
    }
    #del{
        border: 1px solid #bc1b22;
        background-color: #bc1b22;
        padding: 1vh 1vw;
        color: #F1EFEF;
    }

    #del:hover{
        background-color: #F1EFEF;
        color: #bc1b22;
    }
    #ed:hover{
        background-color: #F1EFEF;
        color: #4283e8;
    }

    /* settings */
    .settings thead th{
        color: #Fff;
        padding: 1vh 1vw;
    }
    .settings tbody{
        background-color: #ccc7bf;
    }
    .settings tbody button{
        border: 1px solid #31393c;
        font-weight: bolder;
        color: #31393c;
        font-size: larger;
        padding: 5vh 5vw;
    }
    .settings tbody button:hover{
        color: #fff;
        background-color: #31393c;
    }
    ul{
    padding-left: 1%;
    color: aliceblue;
    height: 100vh;
    font-family: monospace;
    font-size: large;
    gap: 20px;
    display: flex;
    flex-direction: column;
    position:fixed;
    top: 0;
    left: 0;
    background: #31393c;
    width: 200px;
    }
    li{
        color: #FFF;
        list-style-type: none;
    }
    li:hover{
        color:#282A29;
    }
    a{  
        padding-top:10px;
        text-decoration: none;
    }
    table {
    display: none;
    position: absolute;
    top: 20%;
    left:  20%;
    width: 1000px;
    height: 500px;
    
    }

    </style>
</head>
<body>
    <nav>
        <ul>
            <a href="#"><img src="logo.png" alt="" style = "width:100px; margin-left:20%; "></a>
            <a href="website.php"><li>Go to Website</li></a>
            <a href="#"><li onclick ="displayContainer('news')">News</li></a>
            <a href="#"><li onclick ="displayContainer('events')">Events</li></a>
            <a href="#"><li onclick ="displayContainer('Announcement')">Announcement</li></a>
            <a href="#"><li onclick ="displayContainer('Product')">Product</li></a>
            <a href="#"><li onclick ="displayContainer('Service')">Service</li></a>
            <a href="#"><li onclick ="displayContainer('customer-table')">Customer</li></a>
            <a href="#"><li onclick ="displayContainer('user-table')">User</li></a>
            <a href="#"><li onclick ="displayContainer('settings')">Settings</li></a>
        </ul>
    </nav>



<!-- hide elements -->
<!-- usertable -->
<table cellspacing="5" cellpadding="5" border="1" id="user-table">
    <tr>
        <th>User Name</th>
        <th>User Address</th>
        <th>Email Address</th>
        <th>Action</th>
    </tr>
    <?php
    // Read the XML file and convert it into a SimpleXMLElement object
    $xml = simplexml_load_file('users.xml');

    // Check if the XML file was loaded successfully
    if ($xml) {
        // Loop through each <customer> element in the XML and extract data
        foreach ($xml->user as $user) {
            echo "<tr>";
            echo "<td>" . $user->name . "</td>";
            echo "<td>" . $user->email . "</td>";
            echo "<td>" . $user->addr . "</td>";
            echo "<td>";
            echo "<a href='edit-user.php?name=" . $user->name . "'><button id='ed'>EDIT</button></a>";
            echo "<form action='delete-user.php' method='post'>";
            echo "<input type='hidden' name='name' value='" . $user->name . "'>";
            echo "<button type='submit' id='del'>DELETE</button>";
            echo "</form>";
            echo "</td>";
            echo "</tr>";
        }
    } else {
        // Handle the case when the XML file cannot be loaded
        echo "Error loading XML file.";
    }
    ?>
</table>
    <!-- end of user table -->

    <!-- customer table -->
    <table cellspacing="5" cellpadding="5" border="1" id="customer-table">
    <tr>
        <th>User Name</th>
        <th>User Address</th>
        <th>Email Address</th>
        <th>Action</th>
    </tr>
    <?php
    // Read the XML file and convert it into a SimpleXMLElement object
    $xml = simplexml_load_file('customers.xml');

    // Check if the XML file was loaded successfully
    if ($xml) {
        // Loop through each <customer> element in the XML and extract data
        foreach ($xml->customer as $customer) {
            echo "<tr>";
            echo "<td>" . $customer->name . "</td>";
            echo "<td>" . $customer->email . "</td>";
            echo "<td>" . $customer->addr . "</td>";
            echo "<td>";
            echo "<a href='edit-customer.php?name=" . $customer->name . "'><button id='ed'>EDIT</button></a>";
            echo "<form action='delete-customer.php' method='post'>";
            echo "<input type='hidden' name='name' value='" . $customer->name . "'>";
            echo "<button type='submit' id='del'>DELETE</button>";
            echo "</form>";
            echo "</td>";
            echo "</tr>";
        }
    } else {
        // Handle the case when the XML file cannot be loaded
        echo "Error loading XML file.";
    }
    ?>
</table>

<!-- end of customer table -->

    <!-- end of table -->

        
        <!-- settings -->
        <table class = "settings" id = "settings">
            <thead>
                <tr>
                    <th>Settings</th>
                </tr>
            </thead>        
            
            <tbody>
                <tr>
                    <td><a href="addUsers.html"><button>Add Data Users</button></a></td>
                </tr>
                <td>
                    <a href="addCustomers.html"><button>Add Data Customer</button></a></td>
                </tr>
            </tbody>
            
        </table>

        <table class = "news" id = "news">
            <thead>
                <tr>
                    <th>News</th>
                </tr>
            </thead>        
            
            <tbody style ="background-color: #F4F27E;">
                <tr>
                   <th> nov 30 2023 <br> BREAKING NEWS! WEBSITE IS OPEN. BUT BUG, FEATURES, WILL STILL FIXING </th>
                </tr>
                <tr>
                <td>
                    nov 31 2023 <br>new food will release soon
                    <br>
                    some people say it will be the best food they ever tasted.
                    </td>
                </tr>
                <tr>
                    <td>dec 1 2023 <br> supply of meats will be demand by the end of this year.</td>
                </tr>

                <tr>
                    <td>dec 2  2023 <br> Hiring employees 25$ per hour..</td>
                </tr>
                <tr>
                    <td>dec 3  2023 <br> People agree to eat salad than eat rice this survey was achieve by asking random 100 people.</td>
                </tr>
               <tr>
                    <td>dec 3  2023 <br> News still updating.</td>
                </tr>

            </tbody>
            
        </table>

        <table class = "events" id = "events">
            <thead>
                <tr>
                    <th>Events</th>
                </tr>
            </thead>        
            
            <tbody style ="background-color: #F4F27E;">
                <tr>
                   <th>  nov 31 2023 <br>No EVENTS TODAY </th>
                </tr>
                <tr>
                    <td>
                    dec 1 2023
                    <br>
                    FOOD IS GOOD SALE EVENTS. THATS WHY MANY PEOPLE EAT.
                    </td>
                </tr>
                <tr>
                    <td>
                    dec 5 2023
                    <br>
                    CHRISTMAS SALE 20% off 
                    </td>
                </tr>
            </tbody>
        </table>

        <table class = "Announcement" id = "Announcement">
            <thead>
                <tr>
                    <th>Announcement</th>
                </tr>
            </thead>        
            
            <tbody style ="background-color: #F4F27E;">
                <tr>
                   <th>  nov 31 2023 <br>DISHES WILL UPDATE COMING SOON </th>
                </tr>
                <tr>
                    <td>
                        dec 1 2023
                        <br>
                        FOOD IS GOOD EVENTS ( 60% off all dish)
                    </td>
                </tr>
                <tr>
                     <td>
                        dec 2 2023
                        <br>
                        NEW DISH REVEAL
                    </td>
                </tr>
            </tbody>
        </table>

        <table class = "Product" id = "Product">
            <thead>
                <tr>
                    <td style ="background-color: black; color: blue">PRODUCT</td>
                </tr>
                <tr>
                    <th>Sweet Corn</th>
                </tr>
                <tr>
                    <th>Gulay</th>
                </tr>
                <tr>
                    <th>Omelette</th>
                </tr>
                <tr>
                    <th>Patty</th>
                </tr>
                <tr>
                    <th>Four Season</th>
                </tr>
                <tr>
                    <th>Salad</th>
                </tr>
                <tr>
                    <th>Breakfast</th>
                </tr>
                <tr>
                    <th>Blueberry Dish</th>
                </tr>
                <tr>
                    <th>Ceasar Salad</th>
                </tr>
            </thead>   
        </table>
        
        <table class = "Service" id = "Service">
            <thead>
                <tr>
                    <td style ="background-color: black; color: white; font-weight: bolder">SERVICE <br> this website running as self service</td>
                </tr>
            </thead>
        </table>

    <script>
        let currentContainer = null;

        function displayContainer(containerId) {
        var selectedContainer = document.getElementById(containerId);

        if (selectedContainer === currentContainer) {
            selectedContainer.style.display = 'none';
            currentContainer = null;
        } else {
            if (currentContainer) {
            currentContainer.style.display = 'none';
            }
            selectedContainer.style.display = 'table';
            currentContainer = selectedContainer;
        }
        }
    </script>
</body>
</html>