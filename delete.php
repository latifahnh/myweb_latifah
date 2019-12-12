<?php
// include database connection file
include_once("config.php");

// Get id from URL to delete that user
$id = $_GET['id'];

// Delete user row from table based on given id
$result = mysqli_query($conn, "DELETE FROM users WHERE id=$id");

echo "User Deleted successfully. <a href='index.php'>Back to Home</a>";

// After delete redirect to Home, so that latest user list will be displayed.
// header("Location:index.php");
?>