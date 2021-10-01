<?php
    // Associative array
    $student = [
        'fname' => 'Adrita',
        'lname' => 'Adhikary',
        'age'   => 4,
        'class' => 1,
        'mother'=> 'Poly Adhikary',
        'father'=> 'Biswajit Adhikary'
    ];
    var_dump($student);
    echo "---\n";
    
    // Array to serialize data
    $seristudent = serialize($student);
    echo $seristudent;
    echo "\n---\n";

    // Serialize to array data
    $unseristudent = unserialize($seristudent);
    var_dump($unseristudent);
    echo "\n---\n";

    // Array to json data
    $jsonstudent = json_encode($student);
    echo $jsonstudent;
    echo "\n---\n";

    // Json to array data (object)
    $arraystudent = json_decode($jsonstudent);
    var_dump($arraystudent);
    echo "\n---\n";

    // Json to array data (array)
    $arraystudent = json_decode($jsonstudent, true);
    var_dump($arraystudent);
    echo "\n---\n";

    // PHP copy by value
    $data = [
        'fdata'  =>  'Hello',
        'ldata'  =>  'World!',

    ];
    $newdata = $data;
    $newdata[ldata] = 'Bangladesh';
    var_dump($data);
    var_dump($newdata);
    echo "---\n";

    // PHP copy by reference
    $andata = [
        'fdata'  =>  'Hello',
        'ldata'  =>  'World!',

    ];
    $annewdata = &$andata;
    $annewdata[ldata] = 'Bangladesh';
    var_dump($andata);
    var_dump($annewdata);
    echo "---\n";

    // Remove data from associative array
    var_dump($student);
    unset($student['class']);
    var_dump($student);
    echo "---\n";

    // Check variable value
    $value = '';
    if(isset($value)){
        echo "Value is set.\n";
    }else {
        echo "Value not set.\n";
    }

    if(empty($value)){
        echo "Value is set.\n";
    }else {
        echo "Value not set.\n";
    }
    echo "---\n";

    // Extract data from an array
    $numbers = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9];
    $newNumbers1 = array_slice($numbers, 5);
    print_r($newNumbers1);
    $newNumbers2 = array_slice($numbers, 5, 2, true); // true is for index number
    print_r($newNumbers2);
?>