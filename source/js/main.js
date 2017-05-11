$(document).ready(function(){
    if ($('.webpro-pushpin-left').length ) {
        $('.webpro-pushpin-left').pushpin({top: $('.webpro-pushpin-left').offset().top});
    }
    $('.scrollspy').scrollSpy();
    $('.materialboxed').materialbox();

    // ganze Karte klickbar machen
    $(".webpro-clickable-card").on('click', function(e) {
        window.document.location = $(this).data("href");
    });

    if ($('select').length ) {
        $('select').material_select();
    }

    $('.modal').modal();



});


//# sourceMappingURL=main.js.map
