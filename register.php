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
    <form method="post">
        <div class="container bg-light alert p-5">
            <div class="row">
                <div class="col-md-12">
                    <h4> New User </h4>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="uname" class="form-control">
                </div>
                <div class="col-md-6">
                    <label for="name">User Type</label>
                    <select name="utype" id="utype" class="form-control">
                        <option value=""> select </option>
                        <option value="admin">Administrator</option>
                        <option value="dispensor">Dispensor</option>
                        <option value="accountant">Accountant</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <label for="name">Username</label>
                    <input type="text" name="uname" id="username" class="form-control">
                </div>
                <div class="col-md-6">
                    <div class="row">
                    <div class="col-md-6">
                            <label for="name">Password</label>
                            <input type="password" name="pass" id="password2" class="form-control">      
                        </div>
                        <div class="col-md-6">
                            <label for="name">Retype Password</label>
                            <input type="password" name="pass2" id="password2" class="form-control">      
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <button type="submit" name="submit" id="save-new-user" class="btn btn-primary mt-3 float-right"> <i class="fa fa-save"></i> submit </button>        
                </div>
            </div>

        </div>
    </form>

    <script src="vendor/bootstrap/js/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="js/script.js"></script>
</body>
</html>

<?php

    if(isset($_POST["submit"])){

        $name = $_POST['name'];
        $type = $_POST['utype'];
        $uname = $_POST['uname'];
        $pass = md5($_POST['pass']);
        $pass2 = md5($_POST['pass2']);
        $today = date('d-m-Y');

        require "incs/dbc.php";

        if($pass != $pass2){
            echo "<script> alert( 'password must match' ); </script>";
        }else{

            $chck = mysqli_query($conn, "SELECT * FROM users WHERE username = '$uname' AND type = '$type'");
            if(mysqli_num_rows($chck) == 0){
                $insert = mysqli_query($conn, "INSERT INTO users (name, username, password, type, date_on) VALUES ('$name','$uname','$pass','$type','$today')");
                if($insert){
                    echo "<script> alert( 'Account created successfully' ); </script>";
                }else{
                    echo "<script> alert( 'Error creating new account' ); </script>";
                }
            }else{
                echo "<script> alert( 'username already exist' ); </script>";
            }

        }

    }

?>