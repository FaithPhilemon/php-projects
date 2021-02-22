<?php 

function sanitize_data($input){
    return trim(htmlspecialchars(stripcslashes($input)));
}


// function validate_date($input){
//     if(empty($input)){
//         echo "One or more fields empty!";
//     }elseif(strlen($input) < 5){
//         echo "Password must be more than 5 characters";
//     }
// }



?>