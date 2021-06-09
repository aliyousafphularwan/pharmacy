<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendor/fa/css/all.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Pharmacy - <?php echo !isset($_GET['page']) ? 'home' : $_GET['page']; ?></title>
</head>
<body>

    <?php

        session_start();

        if(isset($_SESSION['login'])){
            include "dashboard.php";
        }else{
            include "login.php";
        }

    ?>

    <script src="vendor/bootstrap/js/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="js/script.js"></script>
</body>
</html>