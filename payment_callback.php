<?php
// Receive the callback data from PhonePe
$callbackData = $_POST; // Assuming PhonePe sends data via POST method

// Extract transaction details
$transactionId = $callbackData['transaction_id'];
$amount = $callbackData['amount'];
$status = $callbackData['status']; // This will indicate if the payment was successful or not

// Generate a receipt
$receipt = "
    <h2>Payment Receipt</h2>
    <p>Transaction ID: $transactionId</p>
    <p>Amount: $amount</p>
    <p>Status: $status</p>
    <p>Date: " . date('Y-m-d H:i:s') . "</p>
    <p>Thank you for your purchase!</p>
";

// Display the receipt
echo $receipt;

// Optionally, store transaction information in your database
// Connect to your database and insert the transaction details
// Example:
// $mysqli = new mysqli("localhost", "username", "password", "database");
// $sql = "INSERT INTO transactions (transaction_id, amount, status, timestamp) VALUES ('$transactionId', '$amount', '$status', NOW())";
// $mysqli->query($sql);
?>
