$(document).ready(function(){

    $('.hid-input').css('display', 'none');
    $('.new-user-modal').css('display', 'none');

    $('#hoa').css('display','none');
    $('#trans').css('display','none');
    $('#rpts').css('display','none');

    // change patient type weather he/sher is new or old
    function change_ptype(){

        $('#ptype').on('change', function(e){
            e.preventDefault();

            let ptype = $('#ptype').val();

            let od = $('#old-date').val();
            let td = $('#today').val();
            let doc = $('#doctor').val();

            if(ptype == 'new'){
                $('.hid-input').css('display', 'block');
                $('.lst-cu').css('display', 'none');
            }else if(ptype == 'old'){
                $('.hid-input').css('display', 'block');
            }else{
                $('.hid-input').css('display', 'none');
            }

        });

    }

    // clear patient form
    $('#clear_form').on('click', function(e){

        e.preventDefault();

        let r = confirm("Clear Form Fields?");

        if(r == true){
            let name = $('#pname').val('');
            let father = $('#pfname').val('');
            let gender = $('#pgender').val('');
            let age = $('#page').val('');
            let adrs = $('#padrs').val('');
            let type = $('#ptype').val('');
            let lstcu = $('#old-date').val('');
            let doc = $('#doctor').val('');
        }

    });

    // add new patient
    function add_patient(){

        $('#add_patient').on('click', function(e){
            let name = $('#pname').val();
            let father = $('#pfname').val();
            let gender = $('#pgender').val();
            let age = $('#page').val();
            let adrs = $('#padrs').val();
            let type = $('#ptype').val();
            let lstcu = $('#old-date').val();
            let tdate = $('#today').val();
            let doc = $('#doctor').val();
    
            $.ajax({
    
                url:"incs/add_patinet.php",
                method: "POST",
                data:{
                    name : name,
                    father : father,
                    gender : gender,
                    age : age,
                    adrs : adrs,
                    type : type,
                    lstcu : lstcu,
                    tdate : tdate,
                    doc : doc
                },
                success: function(data){
    
                    if(data == true){

                        $("#message p").css('background', '#1eae98');
                        $("#message p").text(data);
                        $("#message p").slideDown();
                        $("#message p").delay(3000);
                        $("#message p").slideUp();
                    }else{
                        $("#message p").css('background', '#f54748');
                        $("#message p").text(data);
                        $("#message p").slideDown();
                        $("#message p").delay(3000);
                        $("#message p").slideUp();
                    }
                    
                }
    
            });
        });

    }

    // add medicine
    function add_medicine(){
        $('#save-store').on('click', function(e){
            e.preventDefault();
            
            var name = $("#med_name").val();
            var formula = $("#med_formula").val();
            var expiry = $("#med_exp").val();
            var qty = $("#med_qty").val();
            var user = $("#hiduser").val()

            //console.log(name + " " + formula + " " + expiry + " " + qty);

            $.ajax({
                url: "incs/add_medicine.php",
                type: "POST",
                data: {
                    name : name,
                    formula : formula,
                    expiry : expiry,
                    qty : qty,
                    user: user
                },
                success: function(res){
                    if(res == 1){
                        $("#message p").css('background', '#1eae98');
                        $("#message p").text("Medicine Added");
                        $("#message p").slideDown();
                        $("#message p").delay(3000);
                        $("#message p").slideUp();
                    }else if(res == 0){
                        $("#message p").css('background', '#f54748');
                        $("#message p").text("Insert Error, try again");
                        $("#message p").slideDown();
                        $("#message p").delay(3000);
                        $("#message p").slideUp();
                    } else if(res == 2){
                        $("#message p").css('background', '#f54748');
                        $("#message p").text("Medicine Already Exist");
                        $("#message p").slideDown();
                        $("#message p").delay(3000);
                        $("#message p").slideUp();
                    }
                }
            });

        });
    }

    // add accounts
    $("#save-acc").on('click', function(e){

        e.preventDefault();
        var name = $("#acc_name").val();
        var type = $("#acc_type").val();

        $.ajax({
            url: 'incs/add_account.php',
            type: 'post',
            data: {
                name: name,
                type: type
            },
            success: function(res){
                if(res == 1){
                    $("#message p").css('background', '#1eae98');
                    $("#message p").text("Account Added");
                    $("#message p").slideDown();
                    $("#message p").delay(3000);
                    $("#message p").slideUp();

                    $("#acc_name").val('');
                    $("#acc_type").val('');
                }else if(res == 0){
                    $("#message p").css('background', '#f54748');
                    $("#message p").text("Insert Error, try again");
                    $("#message p").slideDown();
                    $("#message p").delay(3000);
                    $("#message p").slideUp();

                    $("#acc_name").val('');
                    $("#acc_type").val('');
                } else if(res == 2){
                    $("#message p").css('background', '#f54748');
                    $("#message p").text("Account with same name Already Exist");
                    $("#message p").slideDown();
                    $("#message p").delay(3000);
                    $("#message p").slideUp();

                    $("#acc_name").val('');
                    $("#acc_type").val('');
                }
            }
        });

    });

    // add transaction
    $("#save-trans").on('click', function(e){
        e.preventDefault();

        var acc = $("#trans_acc_type").val();
        var amnt = $('#trans_amnt').val();

        $("#lbl-acc").html("Credit to");

        var attr = $("#trans_acc_type").attr('id', "changed");

        console.log(attr);


    });

    $('.btn-new-user').on('click', function(){
        $('.new-user-modal').toggle();
    });

    $('#save-new-user').on('click', function(){

        let name = $('#uname').val();
        let type = $('#utype').val();
        let uname = $('#username').val();
        let upass = $('#password').val();

        $.ajax({

            url:'incs/save_user.php',
            type:'POST',
            data:{
                name : name,
                type : type,
                uname : uname,
                upass : upass
            },
            success: function(res){
                if(res == true){
                    $("#message p").css('background', '#1eae98');
                    $("#message p").text(res);
                    $("#message p").slideDown();
                    $("#message p").delay(3000);
                    $("#message p").slideUp();
                }else{
                    $("#message p").css('background', '#f54748');
                    $("#message p").text(res);
                    $("#message p").slideDown();
                    $("#message p").delay(3000);
                    $("#message p").slideUp();
                }
            }

        });
    });

    $('#show-head').on('click', function(){
        $('#hoa').toggle();
        $('#trans').css('display','none');
        $('#rpts').css('display','none');
    });

    $('#show-trans').on('click', function(){
        $('#hoa').css('display','none');
        $('#trans').toggle();
        $('#rpts').css('display','none');
    });

    $('#show-rpts').on('click', function(){
        $('#hoa').css('display','none');
        $('#trans').css('display','none');
        $('#rpts').toggle() ;
    });

    function trans_data(){

        $("#get_trans_data").on('click', function(e){

            e.preventDefault();

            var acc = $("#trans-data-acc").val();
            var to = $("#trans-dt-to").val();
            var from = $("#trans-dt-frm").val();

            $.ajax({
                url:'incs/get_trans_data.php',
                type:'post',
                data:{
                    acc : acc,
                    to : to,
                    from : from
                },
                success: function(res){
                    $('#trans_data').html(res);
                }
            });

        });

    }

    function get_paitent(){

        $.ajax({

            url:'incs/get_paitent.php',
            type:'get',
            success: function(res){
                $("#pat-tbody").html(res);
            }

        });

    }

    function get_medicine(){
        $.ajax({
            url:'incs/get_store.php',
            type:'get',
            success: function(res){
                $("#store-data").html(res);
            }
        });
    }

    change_ptype();
    add_patient();
    add_medicine();
    trans_data();
    get_paitent();
    get_medicine();

});