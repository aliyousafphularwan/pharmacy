<div class="container">

    <div class="row">
        <div class="col-md-6">
            <div class="page-title"> <h4 class="bg-info p-3 text-white mt-2 page-title-text"> Accounts </h4> </div>
        </div>
        <div class="col-md-6 mt-3">
            
                <div class="acc-btns float-right">
                    <button class="btn btn-primary"> <i class="fa fa-list-alt mr-2"></i> Chart of Account </button>
                    <button class="btn btn-info"> <i class="fa fa-object-group mr-2"></i> Create Group </button>
                    <button class="btn btn-warning"> <i class="fa fa-question mr-2"></i> Get Reports </button>
                </div>

            </div>
    </div>

    <div class="container">
    
        <div class="row">
            
            <div class="col-md-2">
                <label for="description">Account</label>
                <select name="acc" id="acc" class="form-control">
                    <option value="">select</option>
                    <option value="cash">Cash</option>
                    <option value="bank">Bank</option>
                    <option value="salary">Salary</option>
                    <option value="donation">Donation</option>
                    <option value="bills">Bills</option>
                </select>
            </div>

            <div class="col-md-6">
                <label for="description">Description</label>
                <input type="text" name="desc" class="form-control" id="desc">
            </div>

            <div class="col-md-2">
                <label for="description">Dr/Cr</label>
                <select name="entry_type" class="form-control">
                    <option value="dr">Debit</option>
                    <option value="cr">Credit</option>
                </select>
            </div>

            <div class="col-md-2">
                <label for="description">Amount</label>
                <input type="text" name="amnt" id="amnt" class="form-control">
            </div>

        </div>

        <button class="btn btn-primary mt-2 float-right"><i class="fa fa-save mr-2"> Add Entry </i></button>

    </div>

</div>