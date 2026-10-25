<?php
require_once "functions.php";

$errors = "";
$uploadStatus = "";
$success = false;

if ($_FILES["REQUEST_METHOD"] == "POST") {
    
    $customerName = isset($_POST["customer_name"]) ? $_POST["customer_name"] : "";
    $accountNumber = isset($_POST["account_number"]) ? $_POST["account_number"] : "";
    $gender = isset($_POST["gender"]) ? $_POST["gender"] : "";
    $accountType = isset($_POST["account_type"]) ? $_POST["account_type"] : "";
    $openingBalance = isset($_POST["opening_balance"]) ? $_POST["opening_balance"] : "";
    $transactionType = isset($_POST["transaction_type"]) ? $_POST["transaction_type"] : "";
    $transactionAmount = isset($_POST["transaction_amount"]) ? $_POST["transaction_amount"] : "";
    $duration = isset($_POST["duration"]) ? $_POST["duration"] : "";

   
    if (empty($customerName)) {
        $errors .= "Customer full name is required.<br>";
    }
    if (empty($accountNumber)) {
        $errors .= "Account number is required.<br>";
    }
    if (empty($gender)) {
        $errors .= "Please select gender.<br>";
    }
    if (empty($accountType)) {
        $errors .= "Please select an account type.<br>";
    }
    if ($openingBalance === "" || $openingBalance < 0) {
        $errors .= "Opening balance must be zero or greater.<br>";
    }
    if (empty($transactionType)) {
        $errors .= "Please select a transaction type.<br>";
    }
    if ($transactionAmount === "" || $transactionAmount <= 0) {
        $errors .= "Transaction amount must be greater than zero.<br>";
    }
    if ($duration === "" || $duration < 0 || $duration != (int)$duration) {
        $errors .= "Account duration must be a non-negative whole number.<br>";
    }
    if ($accountType != "Savings" && $accountType != "Current" && $accountType != "Business") {
        $errors .= "The selected account type is not valid.<br>";
    }
    if ($transactionType != "Deposit" && $transactionType != "Withdrawal") {
        $errors .= "The selected transaction type is not valid.<br>";
    }

    
    $fee = calculateTransactionFee($transactionType, $transactionAmount);
    if ($transactionType == "Withdrawal" &&
        $openingBalance !== "" && $transactionAmount !== "" &&
        ($transactionAmount + $fee) > $openingBalance) {
        $errors .= "The withdrawal amount and fee cannot exceed the opening balance.<br>";
    }

  
    if (!isset($_FILES["document"]) || $_FILES["document"]["error"] == 4) {
        $errors .= "Please select an identification document.<br>";
    } elseif ($_FILES["document"]["error"] != 0) {
        $errors .= "There was a problem uploading the document.<br>";
    } else {
        $fileName = $_FILES["document"]["name"];
        $fileSize = $_FILES["document"]["size"];
        $fileType = $_FILES["document"]["type"];
        $temporaryName = $_FILES["document"]["tmp_name"];

        if ($fileSize > 2097152) {
            $errors .= "The document must not be larger than 2 MB.<br>";
        }
        if (strpos($fileName, "/") !== false || strpos($fileName, "\\") !== false || empty($fileName)) {
            $errors .= "The document filename is not valid.<br>";
        }
        if (file_exists("uploads/" . $fileName)) {
            $errors .= "A file with this name already exists. Rename your file and try again.<br>";
        }
    }

    
    if ($errors == "") {
        if (move_uploaded_file($temporaryName, "uploads/" . $fileName)) {
            $uploadStatus = "Successful";

            if ($transactionType == "Deposit") {
                $transactionBalance = calculateDeposit($openingBalance, $transactionAmount);
            } else {
                $transactionBalance = calculateWithdrawal($openingBalance, $transactionAmount);
            }

            $totalCharges = calculateTotalCharges($fee);
            $finalBalance = calculateFinalBalance($openingBalance, $transactionAmount, $transactionType, $totalCharges);

            if ($accountType == "Savings") {
                $interestRate = 0.05;
                $rateText = "5%";
            } elseif ($accountType == "Current") {
                $interestRate = 0.02;
                $rateText = "2%";
            } else {
                $interestRate = 0.03;
                $rateText = "3%";
            }

            $interest = calculateInterest($accountType, $finalBalance, $duration);
            $futureBalance = calculateFutureBalance($finalBalance, $interestRate, $duration);
            $accountStatus = checkAccountStatus($finalBalance);
            $success = true;
        } else {
            $errors .= "The document could not be saved. Check the uploads folder permissions.<br>";
        }
    }
} else {
    $errors = "Please submit the banking form first.";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Banking Transaction Receipt</title>
    <style>
        body { font-family: Arial, sans-serif; background: #f2f4f7; padding: 25px; }
        .container { max-width: 850px; margin: auto; background: white; padding: 25px; border: 1px solid #ddd; border-radius: 8px; }
        h2 { color: #17365d; text-align: center; }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        th, td { border: 1px solid #ccc; padding: 10px; text-align: left; }
        th { background: #e8eef5; }
        .error { color: #a00000; line-height: 1.8; }
        .back { display: inline-block; margin-top: 20px; }
    </style>
</head>
<body>
<div class="container">
    <h2>Banking Transaction Receipt</h2>

    <?php if ($errors != "") { ?>
        <p class="error"><?php echo $errors; ?></p>
    <?php } ?>

    <?php if ($success == true) { ?>
        <table>
            <tr><th>Banking Information</th><th>Value</th></tr>
            <tr><td>Customer Full Name</td><td><?php echo $customerName; ?></td></tr>
            <tr><td>Account Number</td><td><?php echo $accountNumber; ?></td></tr>
            <tr><td>Gender</td><td><?php echo $gender; ?></td></tr>
            <tr><td>Account Type</td><td><?php echo $accountType; ?></td></tr>
            <tr><td>Opening Balance</td><td>$<?php echo number_format($openingBalance, 2); ?></td></tr>
            <tr><td>Transaction Type</td><td><?php echo $transactionType; ?></td></tr>
            <tr><td>Transaction Amount</td><td>$<?php echo number_format($transactionAmount, 2); ?></td></tr>
            <tr><td>Transaction Fee</td><td>$<?php echo number_format($fee, 2); ?></td></tr>
            <tr><td>Total Banking Charges</td><td>$<?php echo number_format($totalCharges, 2); ?></td></tr>
            <tr><td>Final Balance</td><td>$<?php echo number_format($finalBalance, 2); ?></td></tr>
            <tr><td>Account Status</td><td><?php echo $accountStatus; ?></td></tr>
            <tr><td>Account Duration</td><td><?php echo $duration; ?> year(s)</td></tr>
            <tr><td>Interest Rate</td><td><?php echo $rateText; ?></td></tr>
            <tr><td>Calculated Interest</td><td>$<?php echo number_format($interest, 2); ?></td></tr>
            <tr><td>Projected Future Balance</td><td>$<?php echo number_format($futureBalance, 2); ?></td></tr>
            <tr><td>Document Name</td><td><?php echo $fileName; ?></td></tr>
            <tr><td>File Type</td><td><?php echo $fileType; ?></td></tr>
            <tr><td>File Size</td><td><?php echo $fileSize; ?> bytes</td></tr>
            <tr><td>Upload Status</td><td><?php echo $uploadStatus; ?></td></tr>
        </table>
    <?php } ?>

    <a class="back" href="index.html">Back to Banking Form</a>
</div>
</body>
</html>
