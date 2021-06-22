<div class="container mt-3">

    <div class="row">
        <div class="col-md-6">
            <div>
                <div class="page-title"> <h4 class="bg-info p-3 text-white mt-2 page-title-text w-25"> Accounts </h4> </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="float-right mt-4">
                <button class="btn btn-primary" id="show-head"> <i class="fa fa-book"></i> Create Account </button>
                <button class="btn btn-secondary" id="show-trans"> <i class="fa fa-file-invoice"></i> Transaction </button>
                <button class="btn btn-info" id="show-rpts"> <i class="fa fa-file-pdf"></i> Reports </button>
            </div>
        </div>
    </div>

</div>

<div class="container m-5 w-75" id="rpts">
    <div class="row">
        <div class="col-md-12">
            <h4 class="bg-warning w-25 p-2 text-black text-center rounded"> Reports </h4>
        </div>
    </div>

    <div class="row">
        <div class="col-md-4">
            <label for=""> Select Account </label>
            <select name="" class="form-control" id="trans-data-acc">
                <option value="">select</option>
                <?php 
                    $select = mysqli_query($conn, "SELECT * FROM accounts");
                    if(mysqli_num_rows($select) > 0){
                        while($row = mysqli_fetch_assoc($select)){
                            ?>
                            <option value="<?php echo $row['id'];?>"><?php echo $row['name'];?></option>
                            <?php
                        }
                    }
                ?>
            </select>
        </div>
    
        <div class="col-md-4">
            <label for=""> Date To </label>
            <input type="date" name="" class="form-control" id="trans-dt-to">
        </div>
        <div class="col-md-4">
            <label for=""> Date From </label>
            <input type="date" name="" class="form-control" id="trans-dt-frm">
        </div>
    </div>

    <button class="btn btn-primary mt-5 mb-5 float-right" id="get_trans_data"><i class="fa fa-file-invoice"></i> Get Report </button>

    <div class="container mt-3">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th> Voucher # </th>
                    <th> Date </th>
                    <th> Dr/Cr </th>
                    <th> Amount </th>
                </tr>
            </thead>
            <tbody id="trans_data">
                
            </tbody>
        </table>
    </div>

</div>

<div class="container m-5 w-75" id="hoa">
    <div class="row">
        <div class="col-md-12">
            <h5 class="bg-primary w-25 p-2 text-white text-center rounded"> Accounts </h5>
        </div>
    </div>

    <div class="row">
        <div class="col-md-4">
            <label for=""> Name </label>
            <input type="text" name="" id="acc_name" class="form-control">
        </div>
        <div class="col-md-4">
            <label for=""> Type </label>
            <select name="" id="acc_type" class="form-control">
                <option value="">select</option>
                <option value="Asset">Asset</option>
                <option value="Expense">Expense</option>
                <option value="Liability">Liability</option>
                <option value="Capital">Capital</option>
                <option value="Revenue">Revenue</option>
            </select>
        </div>
        <div class="col-md-4">
            <button type="submit" class="btn mt-5 btn-primary" id="save-acc"> <i class="fa fa-save"></i> Save </button>
        </div>
    </div>

</div>

<div class="container m-5 w-75" id="trans">
    <div class="row">
        <div class="col-md-12">
            <h4 class="bg-info w-25 p-2 text-white text-center rounded"> Transaction </h4>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <label for="" id="lbl-acc"> Debit From </label>
            <select name="" id="trans_acc_type" class="form-control">
                <option value="">select</option>
                <?php 
                    $select = mysqli_query($conn, "SELECT * FROM accounts");
                    if(mysqli_num_rows($select) > 0){
                        while($row = mysqli_fetch_assoc($select)){
                            ?>
                            <option value="<?php echo $row['id'];?>"><?php echo $row['name'];?></option>
                            <?php
                        }
                    }
                ?>
            </select>
        </div>
        <div class="col-md-6">
            <label for=""> Amount </label>
            <input type="text" name="" id="trans_amnt" class="form-control">
        </div>
    </div>
  
        <div class="col-md-12">
            <button type="submit" class="btn mt-2 btn-primary float-right" id="save-trans"> <i class="fa fa-plus"></i> add </button>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-4" id="get_acc"></div>
                <div class="col-md-4" id="get_amnt"></div>
            </div>
        </div>

    </div>

</div>

