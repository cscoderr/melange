$(function() {
    $('.next_btn').on('click', function() {
        $.ajax({
            type:"POST",
            url:"/providers/airtime",
            data:{
                plug_id:plug_id
            },
            success:function(res){
                if(res.status == 'SUCCESS'){
                    $('#data').fadeIn().html("<div class='alert alert-success alert-dismissable'><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>"+res.message+"</div>");
                    setTimeout(function(){
                        window.location.reload();
                    }, 2000);
                }else if(res.status == 'FAILURE'){
                    $('#data').fadeIn().html("<div class='alert alert-danger alert-dismissable'><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>"+res.message+"</div>");
                }
            }
        });
    });

    $('.prev_btn').on('click', function() {

    });

    function load_all_questions() {
        
    }
});