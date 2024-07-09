<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    // Save the data to a database or send an email, etc.
    // For example, to save to a file:
    $file = fopen("submissions.txt", "a");
    fwrite($file, "Name: $name, Email: $email, Phone: $phone\n");
    fclose($file);

    echo "Thank you for registering!";
} else {
    echo "Invalid request.";
}
?>
