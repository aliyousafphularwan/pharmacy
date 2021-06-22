<div class="container login-main">

    <div class="row">

        <div class="">
            <form method="post">

                <div class="container p-2">
                    <div class="row">

                        <div class="col-md-6">
                            <div class="text-center">
                                <img src="imgs/logo.jpg" width="350" style="margin-right: 100px;"/>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <h4> Login </h4>
                            <div>
                                <label for="username">Username</label>
                                <input type="text" name="username" id="username" class="form-control" autocomplete="off">
                            </div>
                            <div>
                                <label for="password">Password</label>
                                <input type="password" name="password" id="password" class="form-control">
                            </div>

                            <div>
                                <?php
                                    if(isset($_POST['submit']) && !isset($_SESSION['login'])){
                                        ?>
                                        <p class="alert alert-danger m-2"> wrong username or password </p>
                                        <?php
                                    }
                                ?>
                            </div>

                            <div>
                                <input type="submit" id="logmit" value="Login" name="submit" class="btn btn-primary">
                            </div>
                        </div>
                    </div>
                </div>

            </form>
        </div>

    </div>

</div>

<?php

    if(isset($_POST['submit'])){

        $user = $_POST['username'];
        $pass = md5($_POST['password']);

        require "incs/dbc.php";

        $check = mysqli_query($conn, "SELECT * FROM users WHERE username = '$user' AND password = '$pass'");
        if(mysqli_num_rows($check) > 0){
            while($row = mysqli_fetch_assoc($check)){
                $_SESSION['login'] = $row['id'];
                header("Location: index.php");
            }
        }
    }

?>