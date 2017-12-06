<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
	    <!-- <link href="<?php echo get_template_directory_uri(); ?>/img/icons/fav.ico" rel="shortcut icon">
	    <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed"> -->

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

	    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

	    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

		<link rel="stylesheet" href="<?php themeurl('/css/owl.carousel.css'); ?>">
		<link rel="stylesheet" href="<?php themeurl('/css/owl.theme.css'); ?>">
		
		<link rel="stylesheet" href="<?php themeurl('/css/style.css'); ?>?v<?php echo rand(0, 10000); ?>">

		<?php wp_head(); ?>

<!-- PRIMEIRA TENTATIVA DE IMPLEMENTACAO DO BOTAO DOAR - AGORA OS ESTILOS ESTAO NA PASTA CSS DO TEMA -->
     <!-- <style>
              .pagarme-checkout-btn{
                border: none;
                background: transparent;
                font-size: 14px;
                font-family: "Roboto Slab", "Calibri", "Lucida Grande", sans-serif;
                color: #000;
                font-weight: bold;
                cursor: pointer;
              }
            </style>     -->

	</head>
	<body <?php body_class(); ?>>

	<div class="section section-topo">
		<div class="container">
			<ul class="lista-social">
				<li><a href="https://www.facebook.com/cidademocratica" target="_blank"><i class="fa fa-facebook"></i></a></li>
				<li><a href="https://twitter.com/cidademocratica" target="_blank"><i class="fa fa-twitter"></i></a></li>
				<li><a href="https://www.linkedin.com/company/cidade-democr-tica" target="_blank"><i class="fa fa-linkedin"></i></a></li>
				<li><a href="https://github.com/cidadedemocratica" target="_blank"><i class="fa fa-github"></i></a></li>
				<li class="lang-br inativo"><a href="<?php echo home_url(); ?>" title="Site em português"><img src="<?php echo get_template_directory_uri(); ?>/img/br.png" alt=""></a></li>
				<li class="lang-br"><a href="<?php echo home_url(); ?>/eng/" title="English version"><img src="<?php echo get_template_directory_uri(); ?>/img/us.png" alt=""></a></li>
				<li class="lang-br"><a href="<?php echo home_url(); ?>/esp/"><img src="<?php echo get_template_directory_uri(); ?>/img/es.png" alt=""></a></li>
			</ul>
			<div class="searchform">
				<?php get_search_form(); ?>
				<!-- <input type="text" placeholder="buscar">
				<i class="fa fa-search"></i>	 -->			
			</div>
		</div>
	</div>

	<div class="section section-header">
		<div class="container">
			<div class="header-logo">
				<a href="<?php echo home_url(); ?>">
					<img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="">
				</a>
			</div>
			<div class="header-menu">
				<a class="bloco-burger" href="">
				    <div class="burger-icon"></div>
				</a>
				<ul class="header-menu-lista">
					<li><a href="<?php echo home_url(); ?>/o-instituto/">O Instituto</a></li>
					<li><a href="<?php echo home_url(); ?>/apoie/">Apoie</a></li>
					<li><a href="<?php echo home_url(); ?>/atuacao/">Atuação</a></li>
					<li><a href="<?php echo home_url(); ?>/consulta/">Consulta</a></li>

				<!--	<li><a href="http://cidadedemocratica.org.br" target="_blank">Aplicativo</a></li> -->

					<li><a href="https://medium.com/cidades-democráticas/o-novo-aplicativo-do-cidade-democrática-7a9998f79750" target="_blank">Aplicativo</a></li>

					<li><a href="<?php echo home_url(); ?>/impressos/" >Impressos</a>
</li>
					<li><a href="https://medium.com/cidades-democr%C3%A1ticas" target="_blank">Blog</a></li>

			<!-- <li><a href="http://blog.cidadedemocratica.org.br/" target="_blank">Arquivo</a></li> -->

 					<li><a href="<?php echo home_url(); ?>/parceiros/">Parceiros</a></li>

<!-- PRIMEIRA TENTATIVA DE IMPLEMENTACAO DO BOTAO DOAR - AGORA E UMA PAGINA -->
                <!--    <li>
                      <form method="POST" action="/apoiar">
                        <script type="text/javascript"
                          src="https://assets.pagar.me/checkout/checkout.js"
                          data-button-text="Doe!"
                          data-encryption-key="ek_test_VlUt5YylxIGFVaZo5Jsit4DwMveDpi"
                          data-amount="4000">
                        </script>
                      </form>
                    </li> -->


				</ul>
			</div>
		</div>
	</div>