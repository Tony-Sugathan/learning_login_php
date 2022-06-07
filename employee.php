<?php
session_start();
include "db_conn.php";

//function to validate data 
function validate($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;      
}
//collect and validate form data
$name = validate($_POST['name']); 
$email = validate($_POST['email']); 
$phone = validate($_POST['phone']); 

// validate if name or email fields are empty
if(empty($name)){
    header("Location: emp.php?error1=Name is required");
    exit();
}else if(empty($email)){
    header("Location: emp.php?error1=Email is required");
    exit();
}else{

//If name and email are not empty update the table   
//SQL query to insert the data
$sql = "INSERT INTO employee(EMP_NAME,EMP_EMAIL,EMP_PHONE) VALUES('$name', '$email', '$phone')";
if(mysqli_query($conn, $sql)){
    header("Location: emp.php?success=Data added successfully");
            
}else{
    // If there is any issue while updating data into DB
    header("Location: emp.php?error=Error while updating data");
    }
}
?>
