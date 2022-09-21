<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>PHP Exercise 7</h1>

    <?php
        echo "<table border=\"1\">";

        for ($row = 1; $row <= 7; $row++) {
            echo "<tr>\n";
            for ($col = 1; $col <= 7; $col++) {
                $multi = $row * $col;   
                echo "<td>$multi</td>\n";
            }
            echo "</tr>";
        }
        echo "</table>"
    ?>
</body>
</html>