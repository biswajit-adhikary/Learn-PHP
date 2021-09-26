<?php
    // PHP break
    for($i = 0; $i<10; $i++){
        echo "$i\n";
        if($i == 7) {
            break;
        }
    }
    echo "----\n";

    // PHP continue
    for($i = 0; $i<10; $i++){
        if($i < 7) {
            continue;
        }
        echo "$i\n";
    }
    echo "----\n";

    // Fibonacci numbers using for loop
    $v = 0;
    $o = 1;
    $n = 1;
    for($i = 0; $i < 10; $i++) {
        echo "$v \n";
        $o = $n;
        $n = $o + $v;
        $v = $o;
    }
    echo "----\n";

    // Spaceship operator php 7
    $x = 7;
    $y = 6;
    $r = $x<=>$y;
    if($r == 1) {
        echo "$x is greater then $y.\n";
    } elseif($r == 0) {
        echo "$x and $y are same.\n";
    } else {
        echo "$x is smaller then $y.\n";
    }
    echo "----\n";

    // Null coalescing operator
    $defult_date = 12;
    $user_date;
    $output = $user_date?? $defult_date;
    echo $output;
?>