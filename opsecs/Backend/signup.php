<?php
include "db.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $fullname = htmlspecialchars($_POST["fullname"]);
    $email    = htmlspecialchars($_POST["email"]);
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);

    $check = mysqli_query($conn, "SELECT * FROM users WHERE email='$email'");
    if (mysqli_num_rows($check) > 0) {
        echo "Email already exists";
        exit();
    }

    $sql = "INSERT INTO users (fullname, email, password)
            VALUES ('$fullname', '$email', '$password')";

    if (mysqli_query($conn, $sql)) {
        echo "Signup successful";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>
