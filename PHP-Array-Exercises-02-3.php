$array = [];
$evenNums = [];
$oddNums = [];

$numOfElem = (int)readline("Enter how many elements for the array: ");

for($i = 0; $i < $numOfElem; $i++) {
    $array[$i] = (int)readline("element -  {$i}: ");
}

foreach($array as $nums) {
    if($nums % 2 == 0){
        array_push($evenNums, $nums);
    } else {
        array_push($oddNums, $nums);
    }
}

echo "The Even elements are: \n";
foreach($evenNums as $evenElems) {
    echo $evenElems . " ";
}

echo "\nThe Odd elements are: \n";
foreach($oddNums as $oddElems) {
    echo $oddElems . " ";
}
