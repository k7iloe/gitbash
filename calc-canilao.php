<?php

class add {
    private $add;
    public function addition($num1, $num2)
	{
		$this->add = $num1 + $num2;
	}
    public function calcu() {
        return $this->add;
    }
}
$sum = new add();
$sum->addition(1, 1);
echo "ADDITION: ". $sum->calcu();
?>

<?php

class multiplication {
    private $add;
    public function multiply($num1, $num2)
	{
		$this->add = $num1 * $num2;
	}
    public function calcu() {
        return $this->add;
    }
}
$sum = new multiplication();
$sum->multiply(1, 1);
echo "MULTIPLICATION: ". $sum->calcu();
?>

<?php

class subtract {
    private $add;
    public function minus($num1, $num2)
	{
		$this->add = $num1 - $num2;
	}
    public function calcu() {
        return $this->add;
    }
}
$sum = new subtract();
$sum->minus(1, 1);
echo "SUBTRACTION: ". $sum->calcu();
?>

<?php

class div {
    private $add;
    public function divide($num1, $num2)
	{
		$this->add = $num1 / $num2;
	}
    public function calcu() {
        return $this->add;
    }
}
$sum = new div();
$sum->divide(1, 1);
echo "DIVISION: ". $sum->calcu();
?>