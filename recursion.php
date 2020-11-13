<?php
    $results = []; 


    function getNumbers($number) {
        $numbersToVerify = [2,3,10];

        if (($number % $numbersToVerify[count($GLOBALS["results"])] == 0) && ($number > 0)) {
            array_push($GLOBALS["results"], "{$number} é o menor número divisível por {$numbersToVerify[count($GLOBALS["results"])]}");
            if (count($GLOBALS["results"]) <= 2) {
                $number = 1;
                getNumbers($number);
            }
        } else {
            $number ++;
            getNumbers($number);
        }
    }
    
    $results = [];

    getNumbers(1);

    for ($i=0; $i < count($results); $i++) {
        echo "{$results[$i]} \n";
    }

    

?>
