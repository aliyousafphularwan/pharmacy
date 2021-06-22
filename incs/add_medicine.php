<?php

    $name = $_POST["name"];
    $formula = $_POST["formula"];
    $expiry = $_POST["expiry"];
    $qty = $_POST["qty"];
    $user = $_POST['user'];

    require "dbc.php";

    $check = mysqli_query($conn, "SELECT * FROM medicines WHERE name = '$name' AND formula = '$formula'");
    if( mysqli_num_rows($check) == 0 ){
        $insert = mysqli_query($conn, "INSERT INTO medicines (name, formula, exp_on, qty, added_by) VALUES ('$name','$formula','$expiry','$qty','$user')");
        if($insert){
            echo "1";
        }else{
            echo "0";
        }
    }else{
        echo "2";
    }

?>