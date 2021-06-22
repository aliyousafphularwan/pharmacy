<div class="container">

    <div class="row">
        <div class="">
            <div class="page-title"> <h4 class="bg-info p-3 text-white mt-2 page-title-text"> Paitents </h4> </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-3">
            <label for="name">Name</label>
            <input type="text" name="pname" class="form-control" id="pname" required>
        </div>
        <div class="col-md-3">
            <label for="name">Father/Husband</label>
            <input type="text" name="pfname" class="form-control" id="pfname" required>
        </div>
        <div class="col-md-3">
            <label for="name">Gender</label>
            <select name="pgender" class="form-control" id="pgender" required>   
                <option value="">select</option>
                <option value="male">Male</option>
                <option value="female">Female</option>
            </select>
        </div>
        <div class="col-md-3">
            <label for="page">Age</label>
            <select name="page" class="form-control" id="page">
                <option value="">select</option>
                <option value="1-10">1-10</option>
                <option value="10-20">10-20</option>
                <option value="20-30">20-30</option>
                <option value="30-40">30-40</option>
                <option value="40-50">40-50</option>
                <option value="50-60">50-60</option>
                <option value="60-70">60-70</option>
                <option value="70-80">70-80</option>
                <option value="80-90">80-90</option>
                <option value="90-99">90-99</option>
            </select>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
        <label for="padrs">Address</label>
            <input type="text" name="padrs" class="form-control" id="padrs">
        </div>
    </div>

    <div class="row">
        <div class="col-md-3">
            <label for="ptype">Type</label>
            <select name="ptype" class="form-control" id="ptype" required>
                <option value="">select</option>
                <option value="new"> New </option>
                <option value="old"> Old </option>
            </select>
        </div>
        <div class="col-md-3 hid-input lst-cu">
            <label for="">Last Checkup</label>
            <input type="text" name="" id="old-date" class="form-control">
        </div>
        <div class="col-md-3 hid-input">
            <label for="">Today</label>
            <input type="text" name="" id="today" class="form-control" value="<?php echo date('d-m-Y')?>">
        </div>
        <div class="col-md-3 hid-input">
            <label for="">Doctor</label>
            <select name="" id="doctor" class="form-control">
                <option value="">select</option>
                <option value="1">Doctor 1</option>
                <option value="2">Doctor 2</option>
                <option value="3">Doctor 3</option>
            </select>
        </div>
    </div>

    <div class="row mt-2">
        <div class="col-md-12 patient-form-btns text-right">
            <!-- <button class="btn btn-primary" id="add_patient"><i class="fa fa-trash mr-2"><i> submit</button> -->
            <button class="btn btn-primary" id="add_patient"><i class="fa fa-plus-circle mr-2"></i> submit </button>
            <button class="btn btn-danger" id="clear_form"><i class="fa fa-exclamation-triangle mr-2"></i> clear </button>
            <!-- <input type="submit" id="clear_form" value="clear" class="btn btn-danger"> -->
        </div>
    </div>

</div>

<div class="container-fluid mt-2 patient-details-list">

    <!-- Fixed header table-->
    <div class="table-responsive">
        <table class="table table-striped w-100">
            <thead class="bg-info text-center">
                <tr>
                    <th class="text-white">Patient Name</th>
                    <th class="text-white"> Father/Husband </th>
                    <th class="text-white">Gender</th>
                    <th class="text-white">Status</th>
                    <th class="text-white">Actions</th>
                </tr>
            </thead>
            <tbody id="pat-tbody">        
                
            </tbody>
        </table>
    </div><!-- End -->

</div>
