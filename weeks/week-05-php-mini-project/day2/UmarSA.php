<?php

class BankAccounts{
    private $bankAccount;
    private $balance;
    private $pin;
    
    public function __construct($userAccount, $userBalance, $userPin)
    {
        $this->bankAccount = $userAccount;
        $this->balance = $userBalance;
        $this->pin = $userPin;
    }

    

    public function deposit($amount, $userPin)
    {
        if($this->verifyPin($userPin)){
            $this->balance += $amount;
            return "deposit successful. New balance: " . $this->balance;
        }
        else{
            return "Invalid PIN. Deposit failed.";
        }
    }
    public function withDrawal($amount, $pin)
    {
        if($this->verifyPin($pin)){
            if($amount > $this->balance){
                return "Insufficient funds. Withdrawal failed.";
            }
            $this->balance -= $amount;
            return "withdrawal successful. New balance: " . $this->balance;
        }
        else{
            return "Invalid PIN. Withdrawal failed.";
        }
    }
    private function verifyPin($enteredPin){
        return $this->pin == $enteredPin;
    }
}

$account = new BankAccounts(147755249, 2500, 2020);

echo $account->deposit(2100, 2020);
echo "<br>";
echo $account->withDrawal(40000, 2020);




