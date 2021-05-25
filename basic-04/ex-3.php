<?php
class MyCalculator {
    private $value1, $value2;
    public function __construct($value1, $value2)
    {
        $this->value1= $value1;
        $this->value2 = $value2;
    }
    public function add() {
        return $this->value1 + $this->value2;
    }
    public function subtract() {
        return $this->value1 - $this->value2;
    }
    public function multiply() {
        return $this->value1 * $this->value2;
    }
    public function divide() {
        return $this->value1 / $this->value2;
    }
}
$mycalc = new MyCalculator( 12, 6 );
echo $mycalc->multiply()."\n"; 
echo $mycalc->add()."\n";
echo $mycalc->subtract()."\n";
echo $mycalc->divide()."\n";
?>