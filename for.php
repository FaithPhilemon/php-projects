<?php 

// for ($i=0; $i <= 5; $i++) { 
//     echo $i."<br>";
// }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP for loop example</title>
</head>
<body>
    <form action="" method="post">  
    
        <label>Year of Birth</label>
        <select>

            <?php 

                $current_year = date('Y');

                for($year = 1945; $year <= $current_year; $year++){
                    echo "<option>$year</option>";
                }
            ?>
        
        </select>
    
    </form>
</body>
</html>