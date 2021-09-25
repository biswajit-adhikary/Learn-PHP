<?php
    // For loop
    for($i = 0; $i<=10; $i++) {
        echo "$i\n";
    }
    echo "----\n";

    // While loop
    $a = 0;
    while($a<10) {
        $a++;
        echo "$a\n";
    }
    echo "----\n";

    // Do while loop
    $b = 0;
    do {
        $b++;
        echo "$b\n";
    } while($b<10);
    echo "----\n";

    // Go to loop
    $c = 0;
    c: $c++;
    echo "$c\n";
    if($c<10) goto c;
    echo "----\n";

    // For loop (10-1)
    for ($r = 10; $r > 0; $r--) {
        echo "$r\n";
    } 
    echo "----\n";

    // For loop multiple steeping
    for ($s = 0, $t = 10; $s<=10; $s++, $t--) {
        echo "$s:$t\n";
    }
    echo "----\n";

    // Factorial using for loop
    $n = 6;
    for($i = $n, $factorial = 1; $i > 1; $i--) {
        $factorial *= $i;
    }
    printf("Factorial of %s is %s\n", $n,$factorial);
    echo "----\n";

?>