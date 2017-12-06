var proj = (function($){
	var hashTagActive = "";

    function afterLoad(){ 

    	// Interações básicas

    	//Alterna, adiciona e remove uma classe
    	$('.js-alterna-classe').on('click', alternaClasse);
    	$('.js-adiciona-classe').on('click', adicionaClasse);
    	$('.js-remove-classe').on('click', removeClasse);

    	//Seleciona um item entre vários, adicionando uma classe "js-ativo" nele e removendo essa classe de seus semelhantes
    	$('.js-seleciona-item').on('click', selecionaItem);

    	//Animação de scroll até a âncora-alvo
		$(".navscroll").on('click', navegaScroll);

        $(".container-fotos").owlCarousel({
            slideSpeed : 300,
            paginationSpeed : 400,
            singleItem:true,
            pagination: true,
            navigation: false,
            //navigationText: ['<i class="fa fa-chevron-left"></i>', '<i class="fa fa-chevron-right"></i>'],
            //afterAction : afterTelaFerramenta
        });

        $('.bloco-burger').on('click', function(e){
            e.preventDefault();
            $(this).toggleClass('is-active');
            $('.header-menu').toggleClass('ativo');
        });
    	
    };

    /********
    Funções para ativar ou desativar classes em um elemento-alvo
    **********/

    $('.js-item-lista-concurso').on('click', function(e){
        e.preventDefault();
        var alvo = '#concurso-' + $(this).data('concurso');
        $(alvo).addClass('ativo');
    });

    $('.close-concurso').on('click', function(e){
        e.preventDefault();
        $('.bloco-concurso').removeClass('ativo');
    })

    $('.js-lista-iniciativas').on('click', function(e){
        e.preventDefault();
        var alvo = '#iniciativa-' + $(this).data('concurso');
        $('.single-iniciativa').removeClass('ativo');
        $(alvo).addClass('ativo');
    });

    function alternaClasse(e){
    	e.preventDefault();
    	var alvo = $(this).data('alvo');
    	$(alvo).toggleClass('js-ativo');
    }

    function adicionaClasse(e){
    	e.preventDefault();
    	var alvo = $(this).data('alvo');
    	$(alvo).addClass('js-ativo');
    }

    function removeClasse(e){
    	e.preventDefault();
    	var alvo = $(this).data('alvo');
    	$(alvo).removeClass('js-ativo');
    }

   function selecionaItem(e){
		e.preventDefault();
		var alvo = $(this).data('alvo');

		if ($(this).hasClass('js-ativo')){
			$(alvo).removeClass('js-ativo');
		} else {
			$(alvo).removeClass('js-ativo');
			$(this).addClass('js-ativo');
		} 
   }

	function navegaScroll(event) {

		if( hashTagActive != this.hash) {
            event.preventDefault();
            //calculate destination place
            var dest = 0;
            var offset = -60;

            if ($(this.hash).offset().top > $(document).height() - $(window).height()) {
                dest = $(document).height() - $(window).height() + offset;
            } else {
                dest = $(this.hash).offset().top + offset;
            }

            //go to destination
            console.log(dest);
            $('html,body').animate({
                scrollTop: dest
            }, 600);
            hashTagActive = this.hash;
        }
	}

    return {
        inicializa : afterLoad
    }

})( jQuery );

jQuery(document).ready( proj.inicializa );
