<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        //Print Array Elements using loops
        function printArray($Cities) {
            for($i = 0; $i < count($Cities); $i++){
                if($i < count($Cities)-1){
                echo $Cities[$i] . ", ";  
                } else {
                    echo $Cities[$i];
                }
        
            } 
        }
        //Print Array Elements in an Unorder list using loops
        function printArrayList($Cities, $toUList) {
            foreach($Cities as $BiggestCities) {
                $toUList .= "<li>$BiggestCities</li>";
            }
    
            $toUList .= "</ul>";

            echo  $toUList;
        }
        echo "<h2>Ten Largest Cities</h2>";
        //Array 
        $largestCities = ["Tokyo", "Mexico City", "New York City", "Mumbai", "Seoul", "Shanghai", "Lagos", "Buenos Aires", "Cairo", "London"];
        
        //Prints the Array
        printArray($largestCities);

        //Sorts the given Array
        sort($largestCities);

        //Var for Unordered list
        $uList =  "<ul>";

        echo "<h2>Ten Largest Cities in Unordered List Form(Sorted)</h2>";
         //Printing the Array in an Unordered List
        printArrayList($largestCities, $uList);

        //Adding Elements in an Array
        array_push($largestCities, "Los Angeles", "Calcutta", "Osaka", "Beijing");


        echo "<h2>Largest Cities in Unordered List Form</h2>";
        //Printing the Array in an Unordered List with Added Elements
        printArrayList($largestCities, $uList);
    ?>
</body>
</html>