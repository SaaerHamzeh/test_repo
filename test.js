$(document).ready(function () {

    $('#src_centers_tabs li').click(function () {
        $('.active').removeClass('active');
        $(this).addClass('active');


        let tab = $('.active').attr('id');
        $('.show').removeClass('show');
        $('.' + tab).addClass('show');
    })
});