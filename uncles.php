<?php 

include("db/connection.php");
include("functions.php");

// Insert
if(isset($_POST['submit'])){
    $first_name = sanitize_data($_POST['first_name']);
    $last_name = sanitize_data($_POST['last_name']);
    $address = sanitize_data($_POST['address']);


    $sql = "INSERT INTO uncles (First_Name, Last_Name, `Address`) VALUES('$first_name', '$last_name', '$address')";

    $result =  mysqli_query($conn, $sql);

    if(!$result){
        die("ERROR OCCURED! ". mysqli_error($conn));
    }else{
        echo "<h3>Uncle $first_name has been added successfuly!</h3>";
    }
}


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uncles</title>
</head>
<body>
    <form action="uncles.php" method="post">
        <input type="text" name="first_name" placeholder="Uncle's first name" required>
        <input type="text" name="last_name" placeholder="Uncle's laste name" required>
        <textarea name="address" id="" cols="30" rows="2"></textarea>
        <button type="submit" name="submit">ADD NEW</button>
    </form>
<br>
<hr>
<br>
    <div>
        <table width="100%" style="text-align: left;">
            <thead>
                <tr>
                    <th>SN</th>
                    <th>FIRST NAME</th>
                    <th>LAST NAME</th>
                    <th>ADDRESS</th>
                    <th>ACTION</th>
                </tr>
            </thead>
            <tbody>

            <?php 
                
                $sql = "SELECT * FROM uncles";
                $result = mysqli_query($conn, $sql);
            
                if(!$result){
                    die("ERROR OCCURED!");
                }else{
                    $sn = 1;
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo '<tr>
                                <td>'.$sn.'</td>
                                <td>'.$row['First_Name'].'</td>
                                <td>'.$row['Last_Name'].'</td>
                                <td>'.$row['Address'].'</td>
                                <td>
                                    <a href="">EDIT</a>
                                    <a href="" style="color:red;">DELETE</a>
                                </td>
                            </tr>';

                            $sn++;
                    }
                }
            
            
            ?>
                
            </tbody>
        
        </table>
    
    </div>
</body>
</html>