const fleche = document.querySelector('.fleche');


window.addEventListener('scroll',()=>{
    if(window.scrollY > 0){
        fleche.classList.add('scroll');
        
        
    }


    if(window.scrollY <= 0){
        fleche.classList.remove('scroll');
    }
    
});

$(document).ready(function(){
    $("#mylink").on("click", function(){
        var open = $("#mylink").hasClass("scroll");
        if(open) {
            $("html, body").stop().animate({
                scrollTop: 0
            }, 800);
            $("#mylink").removeClass("scroll");
            history.pushState(null, null, " ");
        }
        else {
            $("html, body").animate({
                scrollTop: $("#news").offset().top
            }, 800);
            $("#mylink").addClass("scroll");
        }
    });

    $(".btn[href='#news']").on("click", function(e){
        $("html, body").animate({
            scrollTop: $("#news").offset().top
        }, 800);
        $("#mylink").addClass("scroll");
    });
});