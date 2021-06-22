<?php
    $tvouc = $_POST['tvouc'];
    $tnum = $_POST['tnum'];
    $tdebit = $_POST['tdebit'];
    $tcredit = $_POST['tcredit'];
    $tamnt = $_POST['tamnt'];
    $tdate = $_POST['tdate'];
    $tdesc = $_POST['tdesc'];

    require "dbc.php";

    $check = mysqli_query($conn, "SELECT * FROM transaction WHERE trans_vou = '$tvouc' AND trans_num = '$tnum'");
    if( mysqli_num_rows($check) == 0 ){
        $insert = mysqli_query($conn, "INSERT INTO transaction (trans_vou, trans_num, trans_debit, trans_credit, trans_amnt, trans_date, trans_desc) VALUES ('$tvouc','$tnum','$tdebit','$tcredit','$tamnt','$tdate','$tdesc')");
        if($insert){
            echo "1";
        }else{
            echo "0" . mysqli_error($conn);
        }
    }else{
        echo '2';
    }

?>