<?php 

// create class name bank account
class BankAccount{
    // create properties
    public $accountnumber;
    public $accountholder;
    public $balance;


    // set constructor
    public function __construct($accountnumber, $accountholder, $initialBalance = 0){
        $this->accountnumber = $accountnumber;
        $this->accountholder = $accountholder;
        $this->balance = $initialBalance;

        echo "New account created for {$this->accountholder}.<br>";
    }

    // deposit method: add balance
    public function deposit($amount){
        if($amount >= 0){
            $this->balance += $amount;

            echo "{$amount} has been deposited. Current balance: {$this->balance}.<br>";
        }else{
            echo "Enter a valid amount.<br>";
        }
    }


    // withdraw method: deduct money from balance
    public function withdraw($amount){
        if($amount >= 0 && $amount <= $this->balance){
            $this->balance -= $amount;

            echo "{$amount} withdrawn. Current balance: {$this->balance}.<br>";
        }else{
            echo "Enter a valid amount";
        }
    }


    // current balance
    public function currentBalance(){
        return $this->balance;
    }


    // destructor: account balance destroyed
    public function __destruct(){
        echo "Account closed for {$this->accountholder}.<br>";
    }

}


// run object------------------------

// create new account
$account = new BankAccount('194654', 'Shahed', '1000');

// deposit balance
$account->deposit(500);

// withdraw balance
$account->withdraw(100);

// show current balance
echo "Current balance: " .$account->currentBalance() ."<br>";


?>