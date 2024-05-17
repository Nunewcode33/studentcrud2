<?php
    include 'db.php'; // Include db.php for database connection

    // Retrieve data from the database
    $sql = "SELECT * FROM students";//selects all columns from users table
    $result = mysqli_query($conn, $sql);//executes mysqli query
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <!-- Add your CSS styles here if needed -->
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
        }
        h2 {
            color: #333;
        }
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

    <h2>Registered</h2>
    <a href="add.php"><button>add</button></a>
    
    <table>
        <tr>

            <th>Student ID</th>
            <th>First Name</th>
            <th>Middle Name</th>
            <th>Last Name</th>
            <th>suffix</th>
            <th>Course</th>
            <th>Year and section</th>
            <th>Action</th>
        </tr>
        <?php
            // Loop through each row of the result set
            while ($row = mysqli_fetch_assoc($result)) {// "mysqli_fetch_assoc()" used to fetch a record in a table.
                echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";//displays the id 
                echo "<td>" . $row['fname'] . "</td>";//displays the first name
                echo "<td>" . $row['mname'] . "</td>";//displays the middle name
                echo "<td>" . $row['lname'] . "</td>";//displays the last name
                echo "<td>" . $row['suffix'] . "</td>";//displays the last name
                echo "<td>" . $row['course'] . "</td>";//displays the last name
                echo "<td>" . $row['YandS'] . "</td>";//displays the last name
                 
            
                echo "<td>";
                echo "<a href='delete.php?id=" . $row['id'] . "'><button>Delete</button></a>";//delete button
                echo "<a href='update.php?id=" . $row['id'] . "'s><button>update</button></a>";//update button

                echo "</td>";
                echo "</tr>";
            }
        ?>

    </table>
</body>
</html>
