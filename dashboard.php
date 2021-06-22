<div class="container-fluid">

    <div class="row">
        <div class="col-md-2 bg-primary sidebar-main">
            <?php include "incs/sidebar.php";?>
        </div>
        <div class="col-md-10">
            <?php
                if(isset($_GET['page'])){
                    $page = $_GET["page"];
                    include "incs/$page.php";
                }else{
                    include "incs/home.php";
                }
            ?>
        </div>
    </div>

</div>

<div class="message" id="message">
    <p> Success or Error Message display here </p>
</div>