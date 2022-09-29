<?php
$array = [];
$dups;
$numOfDups = 0;

$numOfElem = (int)readline("Enter how many elements for the array: ");

for($i = 0; $i < $numOfElem; $i++) {
    $array[$i] = (int)readline("element -  {$i}: ");
}

$dups = array_count_values($array);

foreach ($dups as $arrayOfDups) {
    if ($arrayOfDups > 1 ) {
        $numOfDups++;
    }
}

echo "Total number of duplicate elements found in the array is :" . $numOfDups;
?>