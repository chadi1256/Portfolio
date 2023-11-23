<?php
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $file = 'contact.txt';
    $current = file_get_contents($file);
    $current .= "Name: $name\nEmail: $email\nMessage: $message\n\n";
    file_put_contents($file, $current);
    header('Location: over_ons.html');
}
?>