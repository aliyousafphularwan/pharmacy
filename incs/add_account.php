<?php
    $name = $_POST['name'];
    $type = $_POST['type'];

    require "dbc.php";
    $check = mysqli_query($conn, "SELECT * FROM accounts WHERE name = '$name' AND type = '$type'");
    if(mysqli_num_rows($check) == 0){
        $insert = mysqli_query($conn, "INSERT INTO accounts (name, type) VALUES ('$name', '$type')");
        if($insert){
            echo "1";
        }else{
            echo "0";
        }
    }else{
        echo "2";
    }


?>