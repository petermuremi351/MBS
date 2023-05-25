<?php

class BankATM {
    private $balance;
    
    public function __construct() {
        $this->balance = 0;
    }
    
    public function deposit($amount) {
        if ($amount > 0) {
            $this->balance += $amount;
            echo "Deposit of $amount successful.<br>";
        } else {
            echo "Invalid deposit amount.<br>";
        }
    }
    
    public function withdraw($amount) {
        if ($amount > 0) {
            if ($this->balance >= $amount) {
                $this->balance -= $amount;
                echo "Withdrawal of $amount successful.<br>";
            } else {
                echo "Insufficient balance.<br>";
            }
        } else {
            echo "Invalid withdrawal amount.<br>";
        }
    }
    
    public function checkBalance() {
        echo "Current balance: $this->balance<br>";
    }
}

// Usage example:
$atm = new BankATM();
$atm->checkBalance();  // Current balance: 0
$atm->deposit(100);    // Deposit of 100 successful.
$atm->checkBalance();  // Current balance: 100
$atm->withdraw(50);    // Withdrawal of 50 successful.
$atm->checkBalance();  // Current balance: 50
$atm->withdraw(100);   // Insufficient balance.

?>
