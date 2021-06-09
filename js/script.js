$(document).ready(function(){

    $('.hid-input').css('display', 'none');

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
    
                    console.log(data);
    
                }
    
            });
        });

    }

    change_ptype();
    add_patient();

});