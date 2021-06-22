<div class="container">

    <div class="row">
        <div class="">
            <div class="page-title"> <h4 class="bg-info p-3 text-white mt-2 page-title-text"> Store </h4> </div>
        </div>
    </div>

    <form action="" method="post">
    
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div>
                        <label for="name">Name</label>
                        <input type="text" name="name" class="form-control" id="med_name">
                        <input type="hidden" name="user" id="hiduser" value="<?php echo $_SESSION['login'];?>"/>
                    </div>
                </div>
                <div class="col-md-3">
                    <div>
                        <label for="name">Formula</label>
                        <input type="text" name="name" class="form-control" id="med_formula">
                    </div>
                </div>
                <div class="col-md-3">
                    <div>
                        <label for="name">Expiry Date</label>
                        <input type="date" name="name" class="form-control" id="med_exp">
                    </div>
                </div>
                <div class="col-md-3">
                    <div>
                        <label for="name">Quantity</label>
                        <input type="text" name="name" class="form-control" id="med_qty">
                    </div>
                </div>
            </div>

            <button type="submit" class="btn btn-primary mt-2 mb-2 float-right" id="save-store"> <i class="fa fa-save mr-2"></i> save </button>

        </div>

    </form>

    <table class="table table-bordered mt-3">
        <thead class="bg-info text-center text-white">
            <tr>
                <th width="5%">Sr #</th>
                <th width="20%">Name</th>
                <th width="20%">Formula</th>
                <th width="15%">Expiry Date</th>
                <th width="10%">In-Stock</th>
                <th width="10%">Actions</th>
            </tr>
        </thead>
        <tbody id="store-data">
            
        </tbody>
    </table>

</div>

