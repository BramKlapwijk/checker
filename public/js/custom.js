$(document).ready(function(){
    $('.dropdown-trigger').dropdown({
        coverTrigger: false,
    });
});

$('.modal-trigger').click(function () {
    console.log('hey');
    $.get($(this).attr('data-href')).then(function (res) {
        console.log(res);
        $('<body>').append(res);
        $('.modal').modal();
    });
});