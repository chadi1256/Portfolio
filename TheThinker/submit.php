<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $quote = $_POST['quote'];
    $writer = $_POST['writer'];
    $data = $quote . ' - Writer : ' . $writer . PHP_EOL;
    $file = 'quotes.txt';
    file_put_contents($file, $data, FILE_APPEND | LOCK_EX);
    
    // Redirect the user back to the suggest.php page
    header("Location: suggest.php");
    exit();
}

?>
