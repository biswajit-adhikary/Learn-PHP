<?php
    // Modify an array
    $numbers = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9];
    $newNumber = array_splice($numbers, 2, 2); // It will create a new array using 2,3 & modify the $numbers array
    print_r($newNumber);
    print_r($numbers);
    $anotherArray = [10, 11];
    $anotherNewArray = array_splice($numbers, 2, 2, $anotherArray);
    print_r($anotherArray);
    print_r($numbers);
    echo "---\n";

    // Marge two array
    $num = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9];
    $alp = ["a", "b", "c", "d", "e", "f", "g", "h", "i"];
    $newNum = array_slice($num, 2, 3);
    $newAlp = array_slice($alp, 2, 3);
    print_r($newNum);
    print_r($newAlp);
    $newData = array_merge($newNum, $newAlp);
    print_r($newData);
    echo "---\n";

    // Array sorting
    $snum = [2, 3, 4, 0, 5, 6, 1, 7, 8, 9];
    $salp = ["C", "D", "A", "B", "F", "G", "E", "I", "H"];
    sort($snum);
    sort($salp);
    print_r($snum);
    print_r($salp);
    echo "---\n";

    // Array search
    $senum = [2, 3, 4, 0, 5, 6, 1, 7, 8, 9];
    $sealp = [1 => "C", 2 => "D", 3 => "A"];
    if(in_array(10,$senum)) {
        echo "5 in there.\n";
    } else {
        echo "Not found.\n";
    }

    $sekey = array_search(5, $senum);
    print_r($sekey);
    echo "\n";

    if(key_exists(2, $sealp)) {
        echo "Key 2 is here.\n";
    } else {
        echo "Not found.\n";
    }
    echo "---\n";

    // Find array matching value
    $array1 = ["a" => 1, "b" => 3, "c" => 5, "d" => 4, "e" => 7, "f" => 8, "g" => 9];
    $array2 = ["a" => 2, "b" => 3, "c" => 4, "d" => 6, "e" => 7, "f" => 8, "g" => 10];
    $array3 = array_intersect($array1, $array2); // check the value only
    print_r($array3);
    $array4 = array_intersect_assoc($array1, $array2);
    print_r($array4);

    // Find array value difference
    $array5 = array_diff($array1, $array2);
    print_r($array5);
    $array6 = array_diff_assoc($array1, $array2);
    print_r($array6);
    echo "---\n";
?>