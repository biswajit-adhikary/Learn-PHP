<?php
    $firstName = "Adrita";
    $lastName = "Adhikary";
    echo $fullName = $firstName . " " . $lastName . "\n";
    define('myname', "Poly");
    echo myname;
    echo "\n";

    // PHP data type
    $name = "Adrita";               // String
    $age = 4;                       // Integer
    $height = 33.55;                // Double / float
    $isGirl = true;                 // Boolean
    $brothers = ["Avro", "Adro"];   // Array
    $education = NULL;              // Null
                                    // Object
                                    // Resource
    
    var_dump($education);
    printf("My name is %s. I'm %s years old. My height is %s. I have two brother, %s & %s.\n", $name, $age, $height, $brothers[0], $brothers[1]);

    // PHP Operators
    $score = 78;
    $score += 6;
    $score++;
    printf("$score \n");
    $total = ($score + 7) * 2;
    printf("$total \n");

    // ++ & -- Importent
    $m = 7;
    $n = $m++; // $n = $m, $m = $m + 1;
    printf("$m \n");
    printf("$n \n");

    $x = 9;
    $y = ++$x; // $x = $x + 1, $y = $x
    printf("$x \n");
    printf("$y \n");
    
?>