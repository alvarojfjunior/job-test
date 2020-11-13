<?php
    $ufArray = ['ES', 'MG', 'RJ', 'SP'];
    $stateArray = ['São Paulo', 'Rio de Janeiro', 'Minas Gerais', 'Espírito Santo'];
    $outputArray = [];

    function GetInitials($name) {
        $words = explode(' ', $name);
        return strtoupper(substr($words[0], 0, 1) . substr(end($words), 0, 1));
    }

    foreach ($stateArray as $key => $state) {
        $initials = GetInitials($state);
        array_push($outputArray, "{$state} => {$initials}");
    }
    
    
    foreach ($outputArray as $key => $output) {
        echo $outputArray[$key] . "<br>";
    }
?>
