<?php
    // PHP Number System
    printf("Decimal %d = Binary %b \n", 12, 12);
    printf("Decimal %d = Hexadecimal %X \n", 12, 12);
    printf("Decimal %d = Octal %o \n", 12, 12);

    // printf ordering
    printf('Decimal %1$d = Binary %2$b', 12, 12);
    echo "\n";
    printf('Decimal %1$d = Binary %1$b', 12);
    echo "\n";

    // sprintf
    $output = sprintf('Decimal %1$d = Binary %1$b', 15);
    echo "$output\n";

    // ifelse
    $class = 5;
    if($class>=1 && $class<=5) {
        echo "The student read in a primary school. \n";
    } elseif($class>=6 && $class<=10) {
        echo "The student read in a high school. \n";
    } elseif($class>=11 && $class<=12) {
        echo "The student read in a collage. \n";
    } else {
        echo "The student read in a university \n";
    }


?>