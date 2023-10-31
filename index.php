<?php
function rotLeft($a, $d) {
    $n = count($a);
    // Avoid unnecessary rotations and find the effective rotation count 
    $rotations = $d % $n;
    $rotated_array = [];
    
    // Copy the elements to the rotated_array
    for ($i = $rotations; $i < $n; $i++) {
        $rotated_array[] = $a[$i];
    }

    for ($i = 0; $i < $rotations; $i++) {
        $rotated_array[] = $a[$i];
    }

    return $rotated_array;
}

// Sample Input
$n = 5;
$d = 4;
$a = [1, 2, 3, 4, 5];

// Perform left rotations and print the result
$result = rotLeft($a, $d);
echo implode(' ', $result);
?>
