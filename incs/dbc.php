<?php
    $conn = mysqli_query("localhost", "root", "", "pharmacy");

    if(!$conn){
        echo "error db connection" . die(mysqli_error($conn));
    }

?>