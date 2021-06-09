<div class="container login-main">

    <div class="row">

        <div class="">
            <form method="post">

                <div class="container p-2">
                    <div class="row">

                        <div class="col-md-12 text-center">
                            <i class="fa fa-clinic-medical fa-7x text-danger"></i>
                            <h2> Login  </h2>
                        </div>

                        <div class="col-md-12">
                            <div>
                                <label for="username">Username</label>
                                <input type="text" name="username" id="username" class="form-control" autocomplete="off">
                            </div>
                            <div>
                                <label for="password">Password</label>
                                <input type="text" name="password" id="password" class="form-control">
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

        $_SESSION['login'] = 'admin';
        header("Location: index.php");

    }

?>