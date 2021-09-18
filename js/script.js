$(document).ready(function () {
    $('.button').on('click', function(){
        $('.overlay').css('display', 'block');
        $('#modalLogin').css('display', 'block');
    });
    $('.close').on('click', function(){
        $('.overlay').css('display', 'none');
        $('#modalLogin').css('display', 'none');
        $('#modalReg').css('display', 'none');
    });
    $('#forReg').on('click', function(e){
        e.preventDefault();
        $('#modalLogin').css('display', 'none');
        $('#modalReg').css('display', 'block');
    });
    $('.reg_submit').on('click',function(e){
        var valueX = $(".pass").val();
        var valueY = $(".passtwo").val();
        if (valueX != valueY) {
            e.preventDefault();
            $(".passnot").css('display', 'block'); 
            // alert("Passwords do not match.");
            return false;
        }
    });
});