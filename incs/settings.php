<div class="container">

    <div class="row">
        <div class="col-md-6">
            <div class="row">
                <div class="col-md-6">
                    <div class="page-title"> <h4 class="bg-info p-3 text-white mt-2 page-title-text"> Settings <span><?php echo $_SESSION['login'];?></span> </h4> </div>
                    
                </div>
            </div>
        </div>
        <div class="col-md-6 p-4">
            <div class="row">
                <div class="col-md-4">
                    <button class="btn btn-primary float-right btn-new-user"> <i class="fa fa-user mr-2"></i> New User </button>
                </div>
                <div class="col-md-4">
                    <button class="btn btn-secondary"> <i class="fa fa-lock mr-2"></i> Change Password </button>
                </div>
                <div class="col-md-4">
                    <a href="index.php?page=logout" class="btn btn-danger"> <i class="fa fa-window-close mr-2"></i> Logout </a>
                </div>
            </div>
        </div>
    </div>

</div>

<div class="container bg-light alert p-5 new-user-modal">
    <div class="row">
        <div class="col-md-12">
            <h4> New User </h4>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <label for="name">Name</label>
            <input type="text" name="name" id="uname" class="form-control">
        </div>
        <div class="col-md-6">
            <label for="name">User Type</label>
            <select name="utype" id="utype" class="form-control">
                <option value=""> select </option>
                <option value="admin">Administrator</option>
                <option value="dispensor">Dispensor</option>
                <option value="accountant">Accountant</option>
            </select>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <label for="name">Username</label>
            <input type="text" name="name" id="username" class="form-control">
        </div>
        <div class="col-md-6">
            <label for="name">Password</label>
            <input type="password" name="name" id="password" class="form-control">
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <button type="submit" id="save-new-user" class="btn btn-primary mt-3 float-right"> <i class="fa fa-save"></i> submit </button>        
        </div>
    </div>

</div>