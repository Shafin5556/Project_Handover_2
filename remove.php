<?php
include 'connect.php';

// Retrieve the `prop_id` from the URL query string
$prop_id = $_GET['prop_id'];

// Prepare and execute the SQL DELETE query using prepared statements
$sql = "DELETE FROM `books` WHERE `book_id` = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $prop_id);

if ($stmt->execute()) {
    // Successful deletion, redirect to dashlibrarian.php with a success message
    echo '<script>
        alert("Book details removed successfully.");
        window.location.href = "dashlibrarian.php";
    </script>';
} else {
    // Error occurred during deletion, display an error message
    echo "Error deleting book: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>