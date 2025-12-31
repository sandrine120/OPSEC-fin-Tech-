<?php
include "db.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name    = htmlspecialchars($_POST["name"]);
    $email   = htmlspecialchars($_POST["email"]);
    $message = htmlspecialchars($_POST["message"]);

    $sql = "INSERT INTO messages (name, email, message)
            VALUES ('$name', '$email', '$message')";

    if (mysqli_query($conn, $sql)) {
        echo "Message sent successfully";
    } else {
        echo "Failed to send message";
    }
}
?>
