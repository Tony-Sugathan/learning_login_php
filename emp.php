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
    <title>Employee</title>
    <link rel="stylesheet" type="text/css" href ="style3.css">
</head>
<body>
    <form class='empform' action="employee.php" method="POST">
    <h2> ADD Employee Details </h2>

    <?php if(isset($_GET['error'])){?>
            <p class="error"><?php echo $_GET['error']; ?> </p>
            <?php } ?>

    <?php if(isset($_GET['success'])){ ?>
        <p class="success"><?php echo $_GET['success']; ?> </p>  
          <?php } ?>

        Name: <input type="text" name="name">
        <?php if(isset($_GET['error1'])){?>
            <p class="error"><?php echo $_GET['error1']; ?> </p>
            <?php } ?>
        Email: <input type="text" name="email">
        <?php if(isset($_GET['error2'])){?>
            <p class="error"><?php echo $_GET['error1']; ?> </p>
            <?php } ?>
        Phone: <input type="text" name="phone">
        <a class='logoutemp' href="logout.php">Logout</a>
        <button type="submit"> Add details </button>
        
    </form>
</body>
</html>

<?php
}
else{
    header("location: index.php");
}
?>