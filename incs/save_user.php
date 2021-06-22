<?php
    $name = $_POST['name'];
    $type = $_POST['type'];
    $uname = $_POST['uname'];
    $upass = md5($_POST['upass']);
    $date = date('d-m-Y');

    require 'dbc.php';

    $check = mysqli_query($conn, "SELECT * FROM users WHERE username = '$uname' AND password = '$upass'") or die(mysqli_error($conn));
    if(mysqli_num_rows($check) == 0){
        $insert = mysqli_query($conn, "INSERT INTO users ( name, type, username, password, date_on ) VALUES ( '$name', '$type', '$uname', '$upass', '$date' )") or die(mysqli_error($conn));
        if( $insert ){
            echo true;
        }else{
            echo false;
        }
    }else{
        echo false;
    }

    //echo $name . "\n" . $type . "\n" . $uname . "\n" . $upass;

?>