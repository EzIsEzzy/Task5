<?php
//Write a PHP a class called "BankAccount" with properties like "accountNumber" and "balance". Implement methods to deposit and withdraw money from the account.

//Assuming every user has an amount of money with a given balance, because technically you can't give yourself a balance when you create an account ;)

//معليش اني ما سويت تصميم محترم لأنه انشغلت طيلة اليومين مع الأهل (:

class BankAccount {
    private string $name;
    private $accountNumber;
    private $balance = 500000;

    public function depositMoney($amount)
    {
        if (is_int($amount))
            {
                echo "<h3>Hi! ". $this->name .", with an account number ". $this->accountNumber ." you asked for a money deposit of ". $amount ."YR, Given your balance: ". $this->balance ."YR, the process will run shortly...</h3>";

                $this->balance += $amount;

                echo "<br><h3>Hi! ". $this->name .", with an account number ". $this->accountNumber ." you asked for a money deposit of ". $amount ."YR, your new balance is: ". $this->balance ."YR, Thank you for using our banking account service! </h3>";
            }
        else
            echo "<h3>Enter a specific amount!</h3>";
    }
    public function withdrawMoney($amount)
    {
        if (is_int($amount) and $amount <= $this->balance)
            {
                echo "<h3>Hi! ". $this->name .", with an account number ". $this->accountNumber ." you asked for a money withdraw of ". $amount."YR, Given your balance: ". $this->balance ."YR, the process will run shortly...</h3>";

                $this->balance -= $amount;

                echo "<br><h3>Hi! ". $this->name .", with an account number ". $this->accountNumber ." you asked for a money withdraw of ". $amount ."YR, your new balance is: ". $this->balance ."YR, Thank you for using our banking account service! </h3>";
            }
        else
            echo "<h3>Enter a specific amount! or your balance is too low to withdraw such a money!</h3>";
    }

    function __construct($accountNumber, $name){
        if (is_int($accountNumber) and is_string($name))
        {
            $this->accountNumber = $accountNumber;
            $this->name = $name;
            echo "<h3>Hi! ". $this->name .", with an account number ". $this->accountNumber ."</h3>";
        }
        else
        {
            echo "<h3>Invalid account number or name!</h3>";
        }
    }
    function __destruct(){
        echo "<h3>Thank you for choosing our service! Hope to see you again, ". $this->name. "! </h3>";
    }
}

$Ali_Esmail = new BankAccount(123456789,'Faisal');
$Ali_Esmail->withdrawMoney(500);
$Ali_Esmail->depositMoney(500);