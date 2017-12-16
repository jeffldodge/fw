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



})