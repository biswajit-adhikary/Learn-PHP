<?php
    // Calculate Leap Year
    $year = 2010;
    if($year % 4 == 0 && ($year % 100 != 0 || $year % 400 == 0)) {
        echo "$year is a leap year.\n";
    } else {
        echo "$year isn't a leap year.\n";
    }

    // Ternary operator
    $n = 13;
    $evenOrOdd = ($n % 2 == 0) ? "$n is a even number.\n" : "$n is a odd number.\n";
    echo $evenOrOdd;

    // Switch Case
    $color = "Green";
    switch($color){
        case 'Red':
            echo "$color is my fevorite color.\n";
            break;
        case 'Green':
            echo "$color is my Mother's fevorite color.\n";
            break;
        case 'Pink':
            echo "$color is my Wife's fevorite color.\n";
            break;
        default:
            echo "$color is ok!\n";
    }
?>