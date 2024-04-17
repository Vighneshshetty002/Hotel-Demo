<?php
// Handle payment callback from PhonePe
$transactionId = $_POST['transaction_id'];
$amount = $_POST['amount'];
$status = $_POST['status'];

// Verify payment status and process receipt generation
if ($status === 'success') {
    // Generate payment receipt
    $receipt = "
        <div class='receipt'>
            <h2>Payment Receipt</h2>
            <p>Transaction ID: $transactionId</p>
            <p>Amount: ₹$amount</p>
            <p>Status: $status</p>
            <p>Date: " . date('Y-m-d H:i:s') . "</p>
            <p>Thank you for your purchase!</p>
        </div>
    ";

    // Output receipt
    echo $receipt;

    // You can also store transaction details in your database for future reference
    // For example, insert $transactionId, $amount, $status, and timestamp into your database
} else {
    echo "Payment failed. Please try again later.";
}
?>
