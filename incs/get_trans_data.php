<?php

    $acc = $_POST["acc"];
    $to = date("d-m-Y", strtotime($_POST['to']));
    $from = date("d-m-Y", strtotime($_POST['from']));

    // echo $to . ' ' . $from;
    // die();

    require "dbc.php";

    $select = mysqli_query($conn, "SELECT * FROM transaction INNER JOIN accounts WHERE accounts ON accounts.id = transaction.");
    if(mysqli_num_rows($select)){
        while($row = mysqli_fetch_assoc($select)){
            ?>
            <tr>
                <td> <?php echo $row['trans_vou'];?> </td>
                <td> <?php echo $row['trans_date'];?> </td>
                <td> <?php echo $row['trans_debit'];?> </td>
                <td> <?php echo $row['trans_credit'];?> </td>
                <td> <?php echo $row['trans_amnt'];?> </td>
            </tr>
            <?php
        }
    }else{
        echo "<tr><td colspan='6' style='color:red; text-align: center;'> nothing found </td></tr>" . mysqli_error($conn);
    }

?>  