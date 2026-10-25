<?php

function calculateDeposit($openingBalance, $amount) {
    return $openingBalance + $amount;
}


function calculateWithdrawal($openingBalance, $amount) {
    return $openingBalance - $amount;
}


function calculateTransactionFee($type, $amount) {
    if ($type == "Deposit") {
        return 0;
    } elseif ($type == "Withdrawal" && $amount < 500) {
        return 2;
    } elseif ($type == "Withdrawal" && $amount >= 500) {
        return 5;
    } else {
        return 0;
    }
}

function calculateInterest($accountType, $finalBalance, $years) {
    if ($accountType == "Savings") {
        $rate = 0.05;
    } elseif ($accountType == "Current") {
        $rate = 0.02;
    } elseif ($accountType == "Business") {
        $rate = 0.03;
    } else {
        $rate = 0;
    }

    return $finalBalance * $rate * $years;
}

function calculateTotalCharges($fee) {
    return $fee;
}


function calculateFinalBalance($openingBalance, $amount, $type, $charges) {
    if ($type == "Deposit") {
        return $openingBalance + $amount - $charges;
    } else {
        return $openingBalance - $amount - $charges;
    }
}


function checkAccountStatus($balance) {
    if ($balance >= 5000) {
        return "High Balance";
    } elseif ($balance >= 1000) {
        return "Medium Balance";
    } else {
        return "Low Balance";
    }
}


function calculateFutureBalance($finalBalance, $interestRate, $years = 1) {
    return $finalBalance + ($finalBalance * $interestRate * $years);
}
?>
