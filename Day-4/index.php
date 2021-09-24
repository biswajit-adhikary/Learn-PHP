<?php
    // Switch Case Data Type Set
    $ball = "6 Ball";
    switch($ball){
        case (string) '9 Ball':
            echo "There are $ball here.\n";
            break;
        case (string) '8': //issue here
            echo "There are only $ball here.\n";
            break;
        case (string) '8 Ball':
            echo "There are $ball here.\n";
            break;
        default:
            echo "There are $ball here.\n";
    }

    // php operator precedence
    $t = false || true;
    $f = false or true; // Issue here.
    var_dump($t, $f);

    // php alternative syntax (if/else)
    $n = 11;
    if($n%2==0):
        echo "Even Number.\n";
    else:
        echo "Odd Number.\n";
    endif;

    // php alternative syntax (switch)
    $m = 11;
    switch($m%2==0):
        case 0:
            echo "Even Number.\n";
            break;
        default:
            echo "Odd Number.\n";
    endswitch;

    // Ternary operator unexpected results
    $x = 10;
    $result = ($x % 2 == 0) ? "A\n" : ($x % 2 == 1) ? "B\n" : "C\n";
    echo $result; // Result should be A but it showing B

    // Ternary operator unexpected results fix
    $x = 10;
    $result = ($x % 2 == 0) ? "A\n" : (($x % 2 == 1) ? "B\n" : "C\n");
    echo $result; // Result should be A but it showing B



?>