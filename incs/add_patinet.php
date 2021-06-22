<?php

    $name = $_POST['name'];
    $father = $_POST['father'];
    $gender = $_POST['gender'];
    $age = $_POST['age'];
    $adrs = $_POST['adrs'];
    $type = $_POST['type'];
    $lstcu = $_POST['lstcu'];
    $tdate = $_POST['tdate'];
    $doc = $_POST['doc'];

    $pid = "";

    require "dbc.php";

    $pat_id = mysqli_query($conn, "SELECT pat_id FROM paitent");
    if(mysqli_num_rows($pat_id) > 0){
        while($row = mysqli_fetch_assoc($pat_id)){
            $pid = $row['pat_id'] + 1;
        }
    }else{
        $pid = 1; 
    }

    $check = mysqli_query($conn, "SELECT * FROM paitent WHERE name = '$name' AND father = '$father'");
    if(mysqli_num_rows($check) == 0){

        $insert = mysqli_query($conn, "INSERT INTO paitent (pat_id, name, father, age, gender, type, check_on ) VALUES ('$pid', '$name', '$father', '$age', '$gender', '$type', '$tdate')");
        if($insert){
            echo true;
        }else{
            echo "error adding";
        }
    }else{
        echo "already exist";
    }

?>