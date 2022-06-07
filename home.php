<?php
session_start();
if(isset($_SESSION['id']) && isset($_SESSION['user_name']))
{
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME</title>
    <link rel="stylesheet" type="text/css"  href ="style3.css">
</head>
<body>
<h1>Welcome Home  <?php echo $_SESSION['name']; ?></h1>
<a class='logoutemp' href="logout.php">Logout</a>
<a class='logoutemp' href="emp.php">Add Employee</a>  
</body>
</html>

<?php
}
else{
    header("location: index.php");
}
?>