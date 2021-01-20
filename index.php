<?php
// 1- Write php script to calculate Electricity bill
$h=120;
if($h<=50){
    $value=$h*2.5;
    echo($value);
}
elseif($h<=100 && $h>50){
    $z=100-$h;
    $value=($z*5)+125;
    echo($value);   
}
elseif($h<=200 && $h>100){
    $z=200-$h;
    $value=($h*6.2)+375;
    echo($value); 
}
else{
    $z=250-$h;
    $value=($h*7.5);
    echo($value); 
}

// 2- Write php script to make a calculator
$result = "";
class calculator
{
    var $a;
    var $b;

    function checkopration($oprator)
    {
        switch($oprator)
        {
            case '+':
            return $this->a + $this->b;
            break;

            case '-':
            return $this->a - $this->b;
            break;

            case '*':
            return $this->a * $this->b;
            break;

            case '/':
            return $this->a / $this->b;
            break;

            default:
            return "Sorry No command found";
        }   
    }
    function getresult($a, $b, $c)
    {
        $this->a = $a;
        $this->b = $b;
        return $this->checkopration($c);
    }
}

$cal = new calculator();
if(isset($_POST['submit']))
{   
    $result = $cal->getresult($_POST['n1'],$_POST['n2'],$_POST['op']);
}






// 3-Write php script to check if a person is eligible to vote
$R=19;
if($R>18){
    echo('you can voit')
}
elae{
    echo("you cant voit")
}


// 4-Write php script to check whether a number is positive,
// negative or zero
$x=-1;
if($x>0){
    echo("x is positive number")
}
elseif($x<0){
    echo("x is negative number")
}
else{
    echo("x equal zero")
}

?>