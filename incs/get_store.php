<?php
    require "dbc.php";
    $sql = mysqli_query($conn, "SELECT * FROM medicines");
    if(mysqli_num_rows($sql) > 0){
        while($row = mysqli_fetch_assoc($sql)){
            ?>
            <tr>
                <td style="text-align:center;"><?php echo $row['id'];?></td>
                <td> <?php echo $row['name'];?> </td>
                <td> <?php echo $row['formula'];?> </td>
                <td style="text-align:center;"> <?php echo $row['exp_on'];?> </td>
                <td style="text-align:center;"> <?php echo $row['qty'];?> </td>
                <td style="text-align:center;"> <a href="#"><i class="fa fa-pen text-secondary m-2"></i></a> <a href="#"><i class="fa fa-trash text-danger m-2"></i></a> </td>
            </tr>
            <?php
        }
    }

?>