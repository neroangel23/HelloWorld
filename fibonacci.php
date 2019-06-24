<?php
class Fibo{
    public function fibbs($items){

    

        $num1 = 0; 
        $num2 = 1; 
        $counter = 0; 
        while ($counter < $items){ 
        echo ' '.$num1; 
        $num3 = $num2 + $num1; 
        $num1 = $num2; 
        $num2 = $num3; 
        $counter = $counter + 1; 
        } 
    }
}
$fibbs = new Fibo;
$fibbs->fibbs(20);
?>