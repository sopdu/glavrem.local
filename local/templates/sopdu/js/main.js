$(document).ready(function() {    
    $('.slider').slider();
    $('.modal').modal({
        onCloseEnd: function() {
            $('form').trigger('reset');
        }
    });
    $('#header .open, #top-menu .close').click(function() {
        $('#top-menu').toggleClass('show');
    });  
    $("[data-fancybox]").fancybox();
    $('.carousel').carousel({
        indicators: true,
        numVisible: 3,
        dist: -50,
        shift: 100
    });
    $('.carousel').carousel('set', 1);
    $('.hover-block').each(function() {
        var img = $(this).find('img');
        var src = $(img).attr('src');
        var file = src.split('.').pop();
        $(this).hover(function(){
            src = src.replace(file, 'gif');
            $(img).prop('src', src);
        },function(){
            src = src.replace('gif', file);
            $(img).prop('src', src);
        });    
    });
    $('.collapsible').collapsible();
    function heightWindow() {
        var hf = $('footer').height();
        var wh = $(window).height();
        $('#maincontent').css({
            "min-height": wh - hf
        });
    }
    heightWindow();
    $(window).resize(function() {
        heightWindow();
    });    
});