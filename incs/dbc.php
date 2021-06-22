<?php
    $conn = mysqli_connect("localhost", "root", "", "pharmacy");

    if(!$conn){
        echo "error db connection" . die(mysqli_error($conn));
    }

?>