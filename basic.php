<?php
class calculator{
    public $a, $b, $c;

    function sum()
    {
        $this->c    =   $this->a + $this->b;
        return $this->c;
    }

    function sub(){
        $this->c  = $this->a - $this->b;
        return $this->c;
    }
}

$c1 = new Calculator();
$c1->a = 10;
$c1->b = 15;

$c2 =   new Calculator();
$c2->a  =   4;
$c2->b  =   1;

echo "Sum value of C1 Object :- ".$c1->sum();

echo " Sub value of C2 Object :- ".$c2->sub();

?>