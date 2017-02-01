$('#capteurs ul li a.clickable').on('click', function () {
    $('#capteurs ul li ul.current').removeClass('current');
    $(this).next('ul').addClass('current');
});