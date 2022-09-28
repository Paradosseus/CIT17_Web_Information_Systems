
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Act 1</title>
</head>
<body>
    <h2>Array Act 1</h2>
    <?php
        //Array Elements
        $weatherCon = ["rain", "sunshine", "clouds", "hail", "sleet", "snow", "wind"];

        //Printing Elements
        echo "We've seen all kinds of weather this month. At the beginning of the month, we had " . $weatherCon[5] .  " and " . $weatherCon[6]. ". Then came " . $weatherCon[1] . " with a few " . $weatherCon[2] . " and some " . $weatherCon[0] . ". At least we didn't get any " . $weatherCon[3] . " or " . $weatherCon[4] . ".";
        
    ?>
</body>
</html>