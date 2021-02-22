<?php 


    if(isset($_POST['btnSubmit'])){
        $username = $_POST['txtUsername'];
        $password = $_POST['txtPassword'];

        echo "Your username is ". $username ." and your password is ". $password;
    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP forms</title>
</head>
<body>
    <form action="forms.php" method="post">
        <input type="text" name="txtUsername" placeholder="Username">
        
        <br>
        <br>

        <input type="text" name="txtPassword" placeholder="Password">
        
        <br>
        <br>

        <!-- <input type="submit" value="LOGIN"> -->

        <button type="submit" name="btnSubmit">LOGIN</button>
    </form>
</body>
</html>