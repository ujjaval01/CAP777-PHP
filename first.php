<?php
class dog{
    var $name;
    function __construct($dname){
        $this->name=$dname;
        echo"<br>in parent class constructor<br>";

    }
        function brak(){
        echo"woof!<br>";
    }
}
$dog1=new dog('Rover');
echo"$dog1->name says";
 $dog1->brak();
 ?>