<?php

class BankAccount
{
	public $accountNumber;

	public $balance;

	public function deposit($amount)
	{
		if ($amount > 0) {
			$this->balance += $amount;
		}
	}
}
$amount = new BankAccount();
$amount->accountNumber = "1\n";
$amount->balance = "100\n";
$amount->deposit("100");
$amount->deposit("100");
$amount->deposit("100");

echo $amount->accountNumber;
echo $amount->balance;
?>

<?php

class BankAccount1
{
	public $accountNumber;

	public $balance;

	public function deposit($amount)
	{
		if ($amount > 0) {
			$this->balance += $amount;
		}
	}

	public function withdraw($amount)
	{
		if ($amount <= $this->balance) {
			$this->balance -= $amount;
			return true;
		}
                return false;

	}
	public function getBalance(){
		return $this->balance;
	}
	

}
$amount = new BankAccount1();
$amount->accountNumber = "1\n";
$amount->deposit("400");
$amount->withdraw("1");


echo $amount->accountNumber;
echo $amount->balance;

?>

<?php

?>