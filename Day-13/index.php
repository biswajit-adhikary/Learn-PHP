<?php
    // array_reduce function
    $numbers = [2, 3, 4, 5, 6, 7, 8, 9];

    function sum($oldvalue, $newvalue){
        return $oldvalue+$newvalue;
    }

    $total = array_reduce($numbers, 'sum');
    echo $total;
    echo "\n---\n";

    // php list function
    $color = [122, 233, 65];
    // $red = $color[0];
    // $green = $color[1];
    // $blue = $color[3];

    list($red, $green, $blue) = $color;
    echo $red;
    echo "\n---\n";

    // php range function
    $rnumbers = range(2,10);
    print_r($rnumbers);
    echo "---\n";
    foreach($rnumbers as $rnumber) {
        echo $rnumber."\n";
    }
    echo "---\n";

    // php mt_rand function
    $random = mt_rand(1, 10);
    echo $random;
    echo "\n---\n";

    // php shuffle function
    $shuffle = shuffle($numbers);
    print_r($numbers);

?>

