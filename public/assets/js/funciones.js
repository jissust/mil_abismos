$('.carousel').carousel({
    interval: 2000
})

$( document ).ready(function() {
    $("#caro1").addClass("active");
    $("#sl1").addClass("active");
});

$('.navbar-collapse').click(function (e) {
    $('.navbar-collapse').collapse('hide');
});

$(window).on('load', function(){
    $('.preloader').fadeOut('slow');
});


$(window).scroll(function() {
    //console.log($("#nuevoMenu").offset().top);
    if ($("#nuevoMenu").offset().top >= 600) {
        //$("#nuevoMenu").addClass("navFondo");
        $('#nuevoMenu').css("background-image","url('/images/sombra_03.png')");
    } else {
        //$("#nuevoMenu").removeClass("navFondo");
        $('#nuevoMenu').css("background-image","none");
    }
});
