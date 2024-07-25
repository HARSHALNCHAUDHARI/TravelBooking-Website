<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tourism Packages</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">
</head>
<header class="header" data-header>
    <div class="container">
  
      <a href="#">
        <h1 class="logo">HR Tourism</h1>
      </a>
  
      <button class="nav-toggle-btn" data-nav-toggle-btn aria-label="Toggle Menu">
        <ion-icon name="menu-outline" class="open"></ion-icon>
        <ion-icon name="close-outline" class="close"></ion-icon>
      </button>
  
      <nav class="navbar">
  
        <ul class="navbar-list">
  
          <li>
            <a href="#" class="navbar-link">Home</a>
          </li>
  
          <li>
            <a href="#" class="navbar-link">About Us</a>
          </li>

          <li>
            <a href="#" class="navbar-link">Blog</a>
          </li>
  
          <li>
            <a href="#" class="navbar-link">Contact Us</a>
          </li>
  
        </ul>
    
      </nav>
    </div>
  </header>
</br>
</br>
</br>

<style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            padding: 20px;
        }

        .container1 {
            max-width: 600px;
            margin: 0 auto;
            background-color: #fff;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }

        h2 {
            text-align: center;
            color: aliceblue;
        }

        .bill {
            border-collapse: collapse;
            width: 100%;
        }

        .bill th,
        .bill td {
            padding: 10px;
            border-bottom: 1px solid #ddd;
            text-align: left;
        }

        .bill th {
            background-color: #f2f2f2;
            font-weight: bold;
        }

        .bill tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        .total {
            margin-top: 20px;
            text-align: right;
            font-size: 18px;
        }

        /* Hover effect */
        .bill tr:hover {
            background-color: #e0e0e0;
        }
    </style>

<body>
<div class="container1">
    <h1>Payment Bill</h1>
    <table class="bill">
        <tr>
            <th>Item</th>
            <th>Details</th>
        </tr>
        <?php
        // Establish connection to MySQL database
        $servername = "localhost"; // Change this to your MySQL server hostname
        $username = "root"; // Change this to your MySQL username
        $password = ""; // Change this to your MySQL password
        $database = "tourism"; // Change this to the name of your MySQL database

        // Create connection
        $conn = new mysqli($servername, $username, $password, $database);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Retrieve data from the payments table
        $sql = "SELECT * FROM payments ORDER BY id DESC LIMIT 1"; // Assuming you want the latest payment data
        $result = $conn->query($sql);
        $name = $_POST['name'];

       


        

        if ($result->num_rows > 0) {
            // Output data of each row
            while ($row = $result->fetch_assoc()) {
                // Output each item and its details as a table row
                echo "<tr>";
                echo "<td>Name:</td>";
                echo "<td>" . $row["name"] . "</td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td>Email:</td>";
                echo "<td>" . $row["email"] . "</td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td>Address:</td>";
                echo "<td>" . $row["address"] . "</td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td>City:</td>";
                echo "<td>" . $row["city"] . "</td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td>State:</td>";
                echo "<td>" . $row["state"] . "</td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td>Zip Code:</td>";
                echo "<td>" . $row["zip"] . "</td>";
                echo "</tr>";
                echo "<tr>";
                echo "<tr>";
                echo "<td>Mobile Number:</td>";
                echo "<td>" . $row["mobile_no"] . "</td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td>Booking date & time:</td>";
                echo "<td>" . $row["timestamp"] . "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='2'>No payment data found.</td></tr>";
        }
        
        // Display the retrieved data

       
        // Close connection
        $conn->close();
        ?>
    </table>
</div>
</body>
 <script>
</script>

</html>
