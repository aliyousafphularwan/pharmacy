<div class="container mt-3">

    <div class="row">
        <div class="col-md-6">
            <div>
                <div class="page-title"> <h4 class="bg-info p-3 text-white mt-2 page-title-text w-25"> Accounts </h4> </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="float-right mt-4">
                <button class="btn btn-primary" id="show-head"> <i class="fa fa-book"></i> Heads </button>
                <button class="btn btn-secondary" id="show-trans"> <i class="fa fa-file-invoice"></i> Transaction </button>
                <button class="btn btn-info" id="show-rpts"> <i class="fa fa-file-pdf"></i> Reports </button>
            </div>
        </div>
    </div>

</div>

<div class="container p-5 m-5" id="hoa">
    <div class="row">
        <div class="col-md-12">
            <h4 class="bg-primary w-25 p-2 text-white text-center rounded"> Heads of Account </h4>
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
                <option value="debit">Debit</option>
                <option value="credit">Credit</option>
            </select>
        </div>
        <div class="col-md-4">
            <button type="submit" class="btn mt-5 btn-primary"> <i class="fa fa-save"></i> Save </button>
        </div>
    </div>

</div>

<div class="container p-5 m-5" id="trans">
    <div class="row">
        <div class="col-md-12">
            <h4 class="bg-info w-25 p-2 text-white text-center rounded"> Transaction </h4>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <label for=""> Voucher # </label>
            <input type="text" name="" id="acc_name" class="form-control" value="<?php echo 'v-' . date('y') . '-' . rand(111,999);?>" readonly>
        </div>
        <div class="col-md-6">
            <label for=""> Transaction # </label>
            <input type="text" name="" id="acc_name" class="form-control" value="<?php echo 't-' . date('y') . '-' . rand(111,999);?>" readonly>
        </div>
        <div class="col-md-6">
            <label for=""> Debit From </label>
            <select name="" id="acc_type" class="form-control">
                <option value="">select</option>
            </select>
        </div>
        <div class="col-md-6">
            <label for=""> Credit To </label>
            <select name="" id="acc_type" class="form-control">
                <option value="">select</option>
            </select>
        </div>
        <div class="col-md-6">
            <label for=""> Amount </label>
            <input type="text" name="" id="amnt" class="form-control">
        </div>
        <div class="col-md-6">
            <label for=""> Date </label>
            <input type="text" name="" id="amnt" class="form-control" value="<?php echo date('d-m-Y');?>" readonly> 
        </div>
        <div class="col-md-4">
            <button type="submit" class="btn mt-5 btn-primary"> <i class="fa fa-save"></i> Save </button>
        </div>
    </div>

</div>

<div class="container p-5 m-5" id="rpts">
    <div class="row">
        <div class="col-md-12">
            <h4 class="bg-warning w-25 p-2 text-black text-center rounded"> Reports </h4>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <label for=""> Select Account </label>
            <select name="" class="form-control" id="">
                <option value="">select</option>
                <option value=""></option>
                <option value=""></option>
            </select>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <label for=""> Date To </label>
            <input type="date" name="" class="form-control" id="dt-to">
        </div>
        <div class="col-md-6">
            <label for=""> Date From </label>
            <input type="date" name="" class="form-control" id="dt-frm">
        </div>
    </div>

    <button class="btn btn-primary mt-5 float-right"><i class="fa fa-file-invoice"></i> Get Report </button>
</div>