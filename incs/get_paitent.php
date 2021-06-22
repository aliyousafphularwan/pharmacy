<?php

    require "dbc.php";

    $select = mysqli_query($conn, "SELECT * FROM paitent");
    if(mysqli_num_rows($select)){
        while($row = mysqli_fetch_assoc($select)){
            ?>
            <tr>
                <td> <?php echo $row['name'];?> </td>
                <td> <?php echo $row['father'];?> </td>
                <td style="text-align:center;"> <?php echo $row['gender'];?> </td>
                <td style="text-align:center;"> <?php echo $row['type'];?> </td>
                <td style="text-align:center;"> <a href="#"><i class="fa fa-pen m-2"></i></a> <a href="#"><i class="fa fa-eye m-2"></i></a> <a href="#"><i class="fa fa-trash m-2"></i></a> </td>
            </tr>
            <?php
        }
    }else{

    }

?>