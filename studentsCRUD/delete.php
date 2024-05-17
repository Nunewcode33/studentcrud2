<?php
    include 'db.php'; // Include db.php for database connection

    // Check if the ID parameter is set in the URL
    if(isset($_GET['id'])) {

        $id = $_GET['id'];

        $sql = "DELETE FROM students WHERE id = '$id'";

        if (mysqli_query($conn, $sql)) {
            echo '<script>alert("Successfully Deleted.")</script>';           
        } else {
            // Error handling
            echo "Error: " . mysqli_error($conn);
        }
    }else{
        echo '<script>alert("Deletion Failed.")</script>';
    }

    // Redirect back to the main page
    echo "<script>window.location = 'home.php';</script>";
    exit();

    // Close the connection
    mysqli_close($conn);
?>