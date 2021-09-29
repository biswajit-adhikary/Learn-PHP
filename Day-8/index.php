<?php
    // Function defult value
    function breakfast($food = "Egg", $itmes = 2) {
        return "I want $itmes piece $food for breakfast.\n";
    }
    echo breakfast("Apple", 3);
    echo "---\n";

    // Set function return type
    function doSum(int $x,int $y,int $z):int { // :int is return type
        return $x+$y+$z;
    }
    echo doSum(5,6,7);
    echo "\n---\n";

    // Function unlimited arguments
    function sum(int ...$numbers):int {
        for($n = 0; $n<count($numbers);$n++) {
            $result += $numbers[$n];
        }
        return $result;
    }
    echo sum(5,6,7,8);
    echo "\n---\n";

    // Write large function step by step
    function stepA() {
        echo "Step A done.\n";
    }
    function stepB() {
        echo "Step B done.\n";
    }
    function stepC() {
        echo "Step C done.\n";
    }
    function stepD() {
        echo "Step D done.\n";
    }
    function stepE() {
        echo "Step E done.\n";
    }

    function completeTheTask(){
        stepA();
        stepB();
        stepC();
        stepD();
        stepE();
    }
    completeTheTask();
    echo "---\n";

    // Php recursive function
    function showNumber($start,$end,$step) {
        if($start>$end){
            return;
        }
        echo "$start\n";
        $start+=$step;
        showNumber($start,$end,$step);
    }
    showNumber(10,20,3);
    echo "----\n";

    // Fibonacci series using recursive function
    function fibonacci($old,$new,$end){
        static $start;
        $start = $start ?? 1;
        if($start>$end){
            return;
        }
        $start++;

        echo "$old\n";
        $_tem = $old + $new;
        $old = $new;
        $new = $_tem;

        fibonacci($old,$new,$end);

    }
    fibonacci(0,1,10);
    echo "----\n";

    // PHP Variables Local Scope
    function localScope(){
        $localscope = "Local Scope\n"; // local scope variable
        echo $localscope;
    }
    localScope();
    echo "----\n";


    // PHP Variables Global Scope
    $globalscope = "Global Scope\n";
    function globalScope(){
        global $globalscope; // Global scope variable
        echo $globalscope;
    }
    globalScope();
    echo "----\n";

    // PHP Variables Static Scope
    function staticScope(){
        static $i; // Static scope variable
        $i = $i ?? 0;
        $i++;
        echo "$i\n";
    }
    staticScope();
    staticScope();
    staticScope();
    echo "----\n";
    
    // Factorial using recursive function
    function factorial($n){
        if($n <= 1){
            return 1;
        }
        return $n * factorial($n-1);
    }
    echo factorial(3);

?>