<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Activity 4</h1>
    <?php

class BankAccount
{
    private $accountNumber;
    private $balance;

    public function __construct($accountNumber, $initialBalance = 0)
    {
        $this->accountNumber = $accountNumber;
        $this->balance = $initialBalance;
    }

    public function getAccountNumber() {
        return $this->accountNumber;
    }

    public function withdraw($amount)
    {
        if ($this->balance >= $amount) {
            $this->balance -= $amount;
            return true;
        }
        return false;
    }

    public function deposit($amount)
    {
        $this->balance += $amount;
    }

    public function getBalance()
    {
        return $this->balance;
    }
}

$account = new BankAccount("BPI - 0089086293");
$account->deposit(1000.00);
$account->withdraw(500.00);
echo "Account Number: " . $account->getAccountNumber() . "</br>";
echo "Balance: PHP" . $account->getBalance() . "</br>";

?>


</body>
</html>