jQuery(document).ready(function() {
    // Exibe ou oculta o botão
    $(window).scroll(function() {
        if ($(this).scrollTop() > 70) {
            $('.voltar-ao-topo').fadeIn(300);
        } else {
            $('.voltar-ao-topo').fadeOut(300);
        }
    });

    // Faz animação de rolagem
    var $doc = $('html, body');
    $('.scrollSuave, .voltar-ao-topo').click(function() {
        $doc.animate({
            scrollTop: $( $.attr(this, 'href') ).offset().top
        }, 500);
        //return false; //Verificar se está recarregando e desconmentar, nesse caso
    });

    //muda menu topo
    $(function(){   
        var nav = $('.menu');   
        $(window).scroll(function () { 
            if ($(this).scrollTop() > 1) { 
                nav.removeClass("menu-inicio");
                nav.addClass("menu-rolagem"); 
            } else { 
                nav.removeClass("menu-rolagem"); 
                nav.addClass("menu-inicio");
            } 
        });  
    });
});