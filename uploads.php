<?php 

    if(isset($_POST['btnUpload'])){

        $file_name = $_FILES['image']['name'];
        $file_type = $_FILES['image']['type'];
        $file_size = $_FILES['image']['size'];
        $temp_location = $_FILES['image']['tmp_name'];
        $error = $_FILES['image']['error'];
        $upload_path = "uploads/";
        
        // check file size
        if($file_size > 2000000){
            // file bigger than 1mb
            exit("File too, large please uploads only files lower than 1MB only");
        }else{
            // file size perfect, now check extention..
            $file_extension = explode(".", $file_name);

            $permitted_extensions = ["jpg", "png", "jpeg", "gif"];

            if(!in_array(strtolower($file_extension[1]), $permitted_extensions)){
                // file type unspported
                exit("Unsupported file type");
            }else{
                // file type perfect, go ahead and upload
                $new_file_name =  uniqid($file_name);

                move_uploaded_file($temp_location, $upload_path.$new_file_name.".".strtolower($file_extension[1]));
                echo "Image uploaded successfullly!";
            }

            // print_r($file_extension);
            // exit();
        }



        // print_r($_FILES['image']);

        
        exit();
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP FILE UPLOADS</title>
</head>
<body>
    
    <form action="uploads.php" method="post" enctype="multipart/form-data">

        <input type="file" name="image" required><br><br>
        <button type="submit" name="btnUpload">UPLOAD IMAGE</button>
    
    </form>
</body>
</html>