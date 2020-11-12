
(function ($) {
    "use strict";


    /*==================================================================
    [ Focus input ]*/
    $('.input100').each(function(){
        $(this).on('blur', function(){
            if($(this).val().trim() != "") {
                $(this).addClass('has-val');
            }
            else {
                $(this).removeClass('has-val');
            }
        })    
    })
  
  
    /*==================================================================
    [ Validate ]*/
    var input = $('.validate-input .input100');

    $('.validate-form').on('submit',function(){
        var check = true;

        for(var i=0; i<input.length; i++) {
            if(validate(input[i]) == false){
                showValidate(input[i]);
                check=false;
            }
        }

        return check;
    });


    $('.validate-form .input100').each(function(){
        $(this).focus(function(){
           hideValidate(this);
        });
    });

    function validate (input) {
        if($(input).attr('type') == 'email' || $(input).attr('name') == 'email') {
            if($(input).val().trim().match(/^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{1,5}|[0-9]{1,3})(\]?)$/) == null) {
                return false;
            }
        }
        else {
            if($(input).val().trim() == ''){
                return false;
            }
        }
    }

    function showValidate(input) {
        var thisAlert = $(input).parent();

        $(thisAlert).addClass('alert-validate');
    }

    function hideValidate(input) {
        var thisAlert = $(input).parent();

        $(thisAlert).removeClass('alert-validate');
    }
    
    /*==================================================================
    [ Show pass ]*/
    var showPass = 0;
    $('.btn-show-pass').on('click', function(){
        if(showPass == 0) {
            $(this).next('input').attr('type','text');
            $(this).addClass('active');
            showPass = 1;
        }
        else {
            $(this).next('input').attr('type','password');
            $(this).removeClass('active');
            showPass = 0;
        }
        
    });

    $.ajax({ 
        data: { },
        type:'GET',
        url: 'http://51.79.21.128:30199/players.json',
        cache: false,
        crossDomain : true,
        success: function(response) { 
            var res = '<i class="fas fa-circle" style="color: #0efa15;"></i> En línea  | <i class="fas fa-users" style="color: #0efa15;"></i> Jugadores: 3' ;
            $(".label-status").html(res)
        },
        error: function() {
            $(".label-status").html('<i class="fas fa-circle" style="color: #fa0e0e;"></i> Fuera de Linea')
        }
       });

       $.post("/authip",{token: 'asd'}, function(result) {
        var result = JSON.parse(result);
        $(".login100-form-ip").html(result.ip);
        if(result.success && !result.ip.includes("ACTUALIZA LA WEB")){
            $(".login100-form-btn").attr("href", "fivem://connect/" + result.ip +":30120")
            $(".login100-form-btn").show();
        }
        
});
})(jQuery);