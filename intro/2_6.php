<?php
// Class Inheritance
class User
{
    protected $name = 'Brad';
    protected $age;

    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }
}

class Customer extends User
{
    private $balance;

    public function __construct($name, $age, $balance)
    {
        parent::__construct($name, $age);
        $this->balance = $balance;
    }

    public function pay(int $amount)
    {
        $this->balance = $this->balance - $amount;
        return "{$this->name} paid \${$amount}";
    }

    public function getBalance()
    {
        return "{$this->name} balance is \${$this->balance}";
    }
}

$customer = new Customer('John', 33, 100);
echo $customer->getBalance();
echo "<br />";
echo $customer->pay(90);
echo "<br />";
echo $customer->getBalance();