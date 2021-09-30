<?php
    // Php array 1st
    $name = array (
        "Rahim",
        "Karim",
        "Salam",
    );
    echo $name[0];
    echo "\n---\n";

    // Php array 2nd
    $newname = [
        "Rahim",
        "Karim",
        "Salam",
    ];
    echo $newname[0];
    echo "\n---\n";

    // Change any index velue in array
    $name[2] = "Kalam"; // Change value Salam to Kalam
    var_dump($name);
    echo "---\n";

    // Add new item at the end of an array
    $name[] = "Jamil";
    var_dump($name);
    echo "---\n";

    // Add new item at the end of an array (2nd way)
    array_push($name,"Halim");
    var_dump($name);
    echo "---\n";

    // Add new item at the beginning of an array
    array_unshift($name,"Taher");
    var_dump($name);
    echo "---\n";

    // Remove new item at the beginning of an array
    array_shift($name);
    var_dump($name);
    echo "---\n";

    // Remove new item at the end of an array
    array_pop($name);
    var_dump($name);
    echo "---\n";

    // Associative array
    $numbers = [
        '3n' => '3, 33, 333',
        '4n' => '4, 44, 444, 4444',
        '5n' => '5, 55, 555, 5555, 55555'
    ];
    echo $numbers['5n'];
    echo "\n---\n";

    // Display array value using foreach loop
    foreach($numbers as $key => $value) {
        echo "$key = $value\n";
    }
    echo "---\n";

    // Display array value using for loop
    $keys = array_keys($numbers);
    $totalkeys = count($keys);
    for($i = 0; $i < $totalkeys; $i++) {
        $key = $keys[$i];
        echo "$numbers[$key]\n";
    }
    echo "---\n";

    // Increase any item value in an associative array
    $numbers['5n'] .= ", 555555";
    var_dump($numbers);
    echo "---\n";

    // String to array
    $names = "Asif, Amir, Rahim, Karim";
    $nameArray = explode(', ', $names);
    var_dump($nameArray);
    echo "---\n";

    // Array to string
    $nameString = join(', ', $nameArray);
    var_dump($nameString);
    echo "---\n";

    // String to array using regular expression
    $namesRX = "Asif, Amir, Rahim, Karim,Agbar";
    $nameArrayRX = preg_split('/(, |,)/', $namesRX);
    var_dump($nameArrayRX);
    echo "---\n";

    // Multidimensional array
    $sample = [
        's1' => [
            's11' => '1',
            's12' => '2',
            's13' => '3',
        ],
        's2' => [
            's22' => '2',
            's23' => '3',
            's24' => '4',
        ]
    ];
    echo $sample['s2']['s24'];
    echo "\n---\n";
?>