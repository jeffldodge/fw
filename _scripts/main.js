$(document).ready(function(){
    $.get('./header.html',function(data){
        $('header').html(data);
        var selected=$("header [href~='"+window.location.pathname.replace("/","")+"']");
        selected.closest(".nav-item").addClass("selected")
        if(selected.hasClass("dropdown-item"))
        {
            selected.addClass("selected");
        }
    })
    $.get('./footer.html',function(data){
        $('footer').html(data);
    })
    $('.gallery-image-link').mouseenter(function(){
        var title=$(this).data('title');
        $(this).append("<div class='screen'></div>")
        $(this).append("<div class='caption'>"+title+"</div>")
    }).mouseleave(function(){
        $(this).find('.screen').remove();
        $(this).find('.caption').remove();
    })


})