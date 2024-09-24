<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <style>
        .p1{
            font-size: 40px;
        }
    </style>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session 1</title>
</head>
<body>

    <?php
        # Loop Practice 
        $variable = 100;
        for($i = 0; $i < 10; $i++){
            // echo "<p class='p1'>Value of Variable is {$variable}<br></p>";
            $variable -= $i;
        }
    ?>

    # Creating a nested loop including hash maps

    <?php 
        $countries = [
            ["name" => "Pakistan", "founded" => 1947, "nation" => true],
            ["name" => "Monaco", "founded" => 1920, "nation" => false],
            ["name" => "Russia", "founded" => 1276, "nation" => true]
        ];
        
    ?>

    <table style="border:solid 2px">
            <tr>
                <th>Name</th>
                <th>Year Founded</th>
                <th>Is Nation?</th>
            </tr>
            <?php 
                foreach($countries as $country){
                    echo "<tr>";
                    echo "<td> {$country['name']} </td>";
                    echo "<td> {$country['founded']} </td>";
                    echo "<td> {$country['nation']} </td>";
                    echo "</tr>";
                }
            
            ?>
    </table>

    
</body>
</html>