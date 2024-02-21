<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    ul{
    padding-left: 1%;
    color: aliceblue;
    height: 100vh;
    font-family: monospace;
    font-size: xx-large;
    gap: 20px;
    display: flex;
    flex-direction: column;
    position:fixed;
    top: 0;
    left: 0;
    background: #31393c;
    width: 260px;
    }
    li{
        color: #FFF;
        list-style-type: none;
    }
    li:hover{
        color:#282A29;
    }
    a{  
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
        <a href="#"><img src="mimg.jpg" alt="" style = "width:250px; height:200px "></a>
        <a href="website.php"><li>Go to Website</li></a>
        <a href="#"><li onclick ="displayContainer('settings')">News</li></a>
        <a href="#"><li onclick ="displayContainer('settings')">Events</li></a>
        <a href="#"><li onclick ="displayContainer('settings')">Announcement</li></a>
        <a href="#"><li onclick ="displayContainer('settings')">Product</li></a>
        <a href="#"><li onclick ="displayContainer('settings')">Service</li></a>
        <a href="#"><li onclick ="displayContainer('settings')">Customer</li></a>
        <a href="#"><li onclick ="displayContainer('settings')">User</li></a>
        <a href="#"><li onclick ="displayContainer('settings')">Settings</li></a>
    </ul>
</nav>





<!-- hide elements -->
<!-- usertable -->
<table cellspacing="5" cellpadding="5" border  = "1" id = "user-table">
            <tr>
            <th>User ID</th>
            <th>User Name</th>
            <th>Email Address</th>
            <th>Address</th>
            <th>Action</th>
            </tr>
            <?php
                $servername = "localhost";
                $username = "root";
                $password = "";
                $database = "";

                $connection = new mysqli($servername,$username,$password,$database);

                // check connection
                if($connection->connect_error){
                    die("Connection : ERROR " . $connection->connect_error);
                }

                //read data
                $sql = "SELECT * FROM users";
                $result = $connection->query($sql);

                if(!$result){
                    die("INVALID query " . $connection->error);
                }

                
                while($row = $result->fetch_assoc()){
                    echo "
                    <tr>
                        <td>$row[id]</td>
                        <td>$row[name]</td>
                        <td>$row[email]</td>
                        <td>$row[addr]</td>
                        <td>
                            <a href = 'edit-user.php?id=$row[id]'><button id = 'ed'>EDIT</button></a>
                            <a href = 'delete-user.php?id=$row[id]'><button id = 'del'>DELETE</button></a>
                        </td>
                </tr>
                    ";
                }
            ?>

        </table> 

        <!-- end of user table -->

        <!-- customer table -->
         <table cellspacing="5" cellpadding="5" border = "1" id = "customer-table">
            <tr>
            <th>Customer ID</th>
            <th>Customer Name</th>
            <th>Customer Address</th>
            <th>Email Address</th>
            <th>Action</th>
            </tr>
            <?php
                $servername = "sql213.infinityfree.com";
                $username = "if0_35499800";
                $password = "QUZXiw4MQuACY";
                $database = "if0_35499800_kuys";

                $connection = new mysqli($servername,$username,$password,$database);

                // check connection
                if($connection->connect_error){
                    die("Connection : ERROR " . $connection->connect_error);
                }

                //read data
                $sql = "SELECT * FROM customers";
                $result = $connection->query($sql);

                if(!$result){
                    die("INVALID query " . $connection->error);
                }

                
                while($row = $result->fetch_assoc()){
                    echo "
                    <tr>
                        <td>$row[id]</td>
                        <td>$row[name]</td>
                        <td>$row[email]</td>
                        <td>$row[addr]</td>
                        <td>
                            <a href = 'edit-customer.php?id=$row[id]'><button id ='ed'>EDIT</button></a>
                            <a href = 'delete-customer.php?id=$row[id]'><button id = 'del'>DELETE</button></a>
                        </td>
                </tr>
                    ";
                }
            ?>
        </table>
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
                    <td><a href="create-user.php"><button>Add Data Users</button></a></td>
                </tr>
                <td>
                    <a href="create-customer.php"><button>Add Data Customer</button></a></td>
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