<?php
    // array_walk() function
    $numbers = [2, 3, 4, 5, 6, 7, 8, 9];
    $names = ['Amit', 'Tuser', 'Biddrup', 'Tilok', 'Nsyon', 'Abir'];

    function square($n){
        printf("The square of %d is %d\n", $n, $n*$n);
    }
    array_walk($numbers, 'square');

    // array_map() function
    function cube($n){
        return $n*$n*$n;
    }
    $cubeNumber = array_map('cube',$numbers);
    print_r($cubeNumber);

    // array_filter function
    function isEven($n){
        return $n % 2 == 0;
    }
    $evenNumbers = array_filter($numbers, 'isEven');
    print_r($evenNumbers);

    function isOdd($n){
        return $n % 2 != 0;
    }
    $oddNumbers = array_filter($numbers, 'isOdd');
    print_r($oddNumbers);
?>

