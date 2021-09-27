<?php
    // PHP function
    function isEven($n) {
        if($n % 2 == 0) {
            return true;
        }
        return false;
    }

    $x = 11;
    if(isEven($x)){
        echo "$x is an even number.\n";
    } else {
        echo "$x is an odd number.\n";
    }
    echo "---\n";

    // PHP type hinting PHP 7
    function factorial(int $n){ // int is type hinting
        $result = 1;
        for($i = $n; $i > 1; $i--) {
            $result *= $i;
        }
        return $result;
    }
    $number = 5;
    echo "The factorial of $number is ".factorial($number)."\n";
    echo "---\n";

    // PHP type hinting PHP 7
    function factorialtwo($n){
        if(gettype($n)!="integer"){ // int check here
            return "Invlide";
        }
        $result = 1;
        for($i = $n; $i > 1; $i--) {
            $result *= $i;
        }
        return $result;
    }
    $numbertwo = 5;
    echo "The factorial of $numbertwo is ".factorialtwo($numbertwo)."\n";
?>