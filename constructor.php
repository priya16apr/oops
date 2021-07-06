<?php
class person{

    public $name    =   "No Name";
    public $age     =   "No Age";

    function show()
    {
        echo "Your Name: ".$this->name." - ".$this->age;
        echo "<br/>";
    }
}

$p0         =   new person();
$p0->show();

$p1         =   new person();
$p1->name   =   "Priya";
$p1->age    =   "30";
$p1->show();

/* 
To Pass default value, we can use construtor
*/

class student{

    public $name , $age;

    function __construct($n="No Name",$age=0)
    {
        $this->name =   $n;
        $this->age  =   $age;
    }

    function show()
    {
        echo "Your Name: ".$this->name." - ".$this->age;
        echo "<br/>";
    }
}

$s0 =   new student();
$s0->show();

$s1 =   new student("Priya",30);
$s1->show();
  

?>