<?php
ob_start();
session_start();
if(isset($_SESSION['email']) && (isset($_SESSION['senha']))){
	//header("Location: home.php");exit;
}
	include("../_controle/conecta.php");
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html lang="en" class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html lang="en" class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html lang="en" class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="pt-br" class="no-js"> <!--<![endif]-->
    <head>
    	<!-- meta character set -->
        <meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta Http-Equiv="Cache-Control" Content="no-cache">  
		<meta Http-Equiv="Pragma" Content="no-cache">  
		<meta Http-Equiv="Expires" Content="0">
		
		<!-- Mobile Specific Meta -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
		
		<!-- CSS
		================================================== -->

		<!--font-family-->
		<link href="https://fonts.googleapis.com/css?family=Rufina:400,700" rel="stylesheet" />

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet" />

		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>


		<!-- TITULO DO SITE -->
		<title>CopaTur</title>

		<!-- icon -->
		<link rel="shortcut icon" type="image/icon" href="../_complementos/images/icone.png"/>
		
		<!--font-awesome.min.css-->
		<link rel="stylesheet" href="../_complementos/css/font-awesome.min.css" />
		<link rel="stylesheet" href="../_complementos/lib/fontello/css/fontello.css" />
		
		
		<!--animate.css-->
		<link rel="stylesheet" href="../_complementos/css/animate.css" />

		<!--hover.css-->
		<link rel="stylesheet" href="../_complementos/css/hover-min.css">

		<!--datepicker.css-->
		<link rel="stylesheet"  href="../_complementos/css/datepicker.css" >

		<!-- range css-->
        <link rel="stylesheet" href="../_complementos/css/jquery-ui.min.css" />

		<!--bootstrap.min.css-->
		<link rel="stylesheet" href="../_complementos/css/bootstrap.min.css" />

		<!-- bootsnav -->
		<link rel="stylesheet" href="../_complementos/css/bootsnav.css"/>

		<link rel="stylesheet" type="text/css" href="../_complementos/css/light-red.css">
		<!--style.css-->
		<link rel="stylesheet" href="../_complementos/css/style.css" />
		<link rel="stylesheet" href="../_complementos/css/main.css" />
		<link rel="stylesheet" href="../_complementos/css/992.css" />
		<link rel="stylesheet" href="../_complementos/css/768.css" />
		
		
		<!--responsive.css-->
		<link rel="stylesheet" href="../_complementos/css/responsive.css" />

		
        

    </head>
	
    <body id="body"  onload="load()">

		<!-- preloader -->
		<!-- end preloader -->

        <!--
        Fixed Navigation
        ==================================== -->
        				<!-- main nav -->
        <nav class="navbar navbar-default navbar-fixed-top">
	        <div class="container">
	            <!-- Brand and toggle get grouped for better mobile display -->
	            <div class="navbar-header page-scroll">
	                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
	                    <span class="sr-only">Toggle navigation</span>
	                    <span class="icon-bar"></span>
	                    <span class="icon-bar"></span>
	                    <span class="icon-bar"></span>
	                </button>
	                <div class="logo"><a class="navbar-brand page-scroll pad0" href="#page-top" href="index.html"><img src="../_complementos/images/logo.png" alt=""></a></div><!-- /.logo-->
	            </div>

	            <!-- Collect the nav links, forms, and other content for toggling -->
	            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	                <ul class="nav navbar-nav navbar-right">
	                    <li class="hidden">
	                        <a href="#page-top"></a>
	                    </li>
	                    <li>
	                        <a class="page-scroll" href="index.php#home">Home</a>
	                    </li>
	                    <li>
	                        <a class="page-scroll" href="index.php#gallery">Cidades</a>
	                    </li>
	                    <li>
	                        <a class="page-scroll" href="index.php#about">Sobre Nós</a>
	                    </li>
	                    <li>
	                        <a class="page-scroll" href="index.php#contact">Contato</a>
	                    </li>
						
	                     <?php if(isset($_SESSION['email']) && (isset($_SESSION['senha']))){ ?>
                        <li class="dropdown nav-item">
		                    <a href="#" class=" dropdown-toggle" data-toggle="dropdown" data-aria-haspopup="true" data-aria-expanded="false"><i class="fa fa-user"></i> <?php echo $_SESSION['nome']; ?> <b class="caret"></b></a>
		                    
		                    <ul class="dropdown-menu black">
		                        <li class="dropdown-item">
									<a href="../_visao/usuario_edita.php?id=<?php echo $_SESSION['id'] ?>" class="external"><i class="fa fa-fw fa-user"></i> Perfil </a>
		                        </li>
		                        
		                        <?php if ($_SESSION['nivel'] == 1) {
		                        	# code...
			                        echo "<li class='dropdown-item'>
			                            <a href='administrativo.php' class='external'><i class='fa fa-fw fa-users'></i> Painel Administrativo </a>
			                        </li>
			                        
			                        ";
		                         } ?>
		                        <li class="dropdown-item">
		                            <a href="../_controle/sair.php" class="external"><i class="fa fa-fw fa-power-off"></i> Sair </a>
		                        </li>
		                    </ul>
		                </li>
		                <?php } else { ?>
		                <li><a href="home.php?link=2" class="external">Entrar</a></li>
		                <?php } ?>

	                </ul>
	            </div>
	            <!-- /.navbar-collapse -->
	        </div>
	        <!-- /.container-fluid -->
	    </nav>
				<!-- /main nav -->
				
            </div>
        <!--
        End Fixed Navigation
        ==================================== -->
		
		<div class="banner" id="home">
            <div class="overlay">
                <div class="container">
                    <div class="intro-text">
                        <h1>Bem Vindo à <span>Moscow</span></h1>
                       	<ol class="breadcrumb">
						  <li><a href="#">Home</a></li>
						  <li><a href="#">Moscow</a></li>
						  <li class="active">História</li>
						</ol>
                        
                    </div>
                </div>
            </div>
        </div>

 <div id="page" class="hfeed site">
        
        
        
        <!-- site-main -->
        <div id="main" class="site-main">
        
                 
                        
            <!-- primary -->
        	<div id="primary" class="content-area">
            	
                <!-- site-content -->
                <div id="content" class="site-content" role="main"> <!-- layout-fixed -->
                    <div class="layout-fixed"> <!-- .hentry -->
                            <article class="hentry type-post">
                            
                            	
                                <!-- .entry-header -->
                                <header class="entry-header">
                                    
                                    
                                    <!-- .entry-title -->
                                    <h1 class="entry-title">História de Moscow</h1>
                                    
                                </header>
                                <!-- .entry-header -->
                                
                                <!-- .featured-image -->
                                <div class="featured-image">
                                    <img src="../_complementos/images/cidades/moscow/historia.jpeg" alt="blog-image">
                                    <cite>Fonte da imagem: <a href="#" title="test link">test link</a></cite>
                                </div>
                                <!-- .featured-image -->
                                                                
                                
                                
                                <!-- .entry-content -->
                                <div class="entry-content">
                                    
                                    <p class="drop-cap">Saransk é uma cidade primordialmente industrial durante o crescimento da União Soviética. Recebeu muitos moradores em busca de emprego e melhor qualidade de vida durante as décadas de 50 e 60. Atualmente, sua população está em diminuindo continuamente, já que a maioria dos empregos eram gerados por companhias e industrias que não existem mais. </p>

                                    <p>O forte russo Atemar, fundado em 1641, recebeu o nome de uma cidade vizinha de Mordvin, na época a fortaleza ficava na fronteira sudeste do tzarismo da Rússia. O nome atual, "Saransk", refere-se à situação da cidade no rio Saransk. Logo após a fundação, a cidade se tornou um importante centro comercial para os moradores de Erzya. Depois de 1708, Saransk foi concedido à província de Azov e depois ao governador de Kazan. Em 1780, assentamentos humanos foram reconhecidos como uma cidade e novamente transferido, desta vez para o governo de Penza, em 1928 Saransk tornou-se o centro administrativo da recém-criada Murdervin Nacional Okrug, que se tornou a região autónoma da Mordovia em 1930 Os planejadores soviéticos reconstruíram o antigo centro nos anos 60 e 70. Foram adicionadas amplas ruas e planejada a construção em massa de áreas residenciais.</p>

                                    <p>Saransk tem um grande número de edifícios históricos como este assentamento tem sido uma fortaleza desde 1641, uma vez que era uma fronteira no sudeste do Império Russo.</p>

                                    <h2>Como chegar:</h2>
                                   	<p><strong>De avião:</strong> cada dia no aeroporto de Saransk aterrissam dois aviões vindos de Moscou. Para além disso, há voos diários vindo de São Petersburgo. O preço das passagens é baixo e podem chegar a custar menos de R$ 150,00.br 
                                   	<br><strong>De trem:</strong> estação de trens Saranksk-1 recebe vários trens vindos de Moscou, São Petersburgo, Rostov-no-Don, Ekaterinburgo e várias outras cidades. Seis trens saem de capital em direção a cidade todos os dias. A viagem dura pouco menos de 9 horas. 
                                   	<br><strong>De carro:</strong> A viagem de carro para um dos estádios da Copa é mais demorada que a de trem. O trajeto demora pouco mais de 10 horas.</p>


                                    
                                    <p>Leia Mais em: <a target="_blank" href="http://esporte.ig.com.br/futebol/copa-do-mundo-2018/2018-03-01/estadios-da-copa-saransk.html">esporte.ig.com.br</a> | <a target="_blank" href="http://es.fifa.com/worldcup/destination/cities/city=55696/index.html">fifa.com</a></p>

                                    

                                    
                                    <p class="drop-cap">A principal atração turística de Kazan é o seu <strong>Kremlin</strong>, construído entre os séculos X e XIV, e concluído durante o reinado de Ivan, o Terrível. Diferentemente dos históricos Kremlins de Moscou e de Níjni Novgorod, o de Kazan é branco e a sua beleza não está nas tradicionais igrejas ortodoxas, mas em uma magnífica mesquita, a Mesquita Kul Sharif. </p>

                                    <p><img src="../_upload/extras/pontokazan1.jpg" alt="blog-image">
                                    <br><cite>Kremlin de Kazan durante o dia. Foto: <a target="_blank" href="https://commons.wikimedia.org/wiki/File:Казанский_кремль._Панорама_с_колеса_обозрения.jpg">@wikipedia</a></cite></p>

                                    <p><img src="../_upload/extras/pontokazan2.jpg" alt="blog-image">
                                    <br><cite>Kremlin de Kazan durante a noite. Foto: <a target="_blank" href="https://commons.wikimedia.org/wiki/File:Казанский_кремль_в_вечернее_время.jpg">@wikipedia</a></cite></p>

                                    <h2>Mesquita Kul Sharif</h2>

                                    <p>A cultura muçulmana é muito forte em Kazan. A mesquita da cidade é uma das mais emblemáticas construções da Rússia, graças a sua arquitetura única. Ela foi destruída na invasão das tropas de Ivan, o Terrível, em 1552, quando a região foi anexada aos domínios russos. Em 1996, foi reconstruída. Seu interior é belíssimo, com lustres, vitrais, pinturas e cores impressionantes. No subsolo, um pequeno museu explica algumas curiosidades do lugar.</p>

                                    <p><img src="../_upload/extras/pontokazan3.jpg" alt="blog-image">
                                    <br><cite>Mesquita Kul Sharif. Foto: <a target="_blank" href="https://bloghoteis.com/kazan-jogos-2018/">@bloghoteis</a></cite></p>

                                    <h2>Soyembike</h2>

                                    <p>Segundo uma antiga lenda, Ivan, o Terrível, após derrotar os tártaros e destruir uma antiga fortaleza, quis se casar com uma bela jovem moradora do local. A moça que se chamava Siuyumbike aceitou a proposta, mas colocou como condição a construção de uma grande torre. Assim que a obra foi concluída, ela subiu no ponto mais alto da construção e pulou. Essa torre, que também está localizada dentro do complexo, se chama Soyembike. Ela possui uma inclinação de quase 2 metros, fazendo com que seja associada a famosa Torre de Pisa, localizada na cidade de Pisa, na Itália.</p>

                                     <p><img src="../_upload/extras/pontokazan4.jpg" alt="blog-image">
                                    <br><cite>Torre Soyembike. Foto: <a target="_blank" href="http://modoferias.com.br/o-que-fazer-em-kazan/">@modoferias</a></cite></p>

                                    <h2>Catedral da Anunciação </h2>

                                    <p>A catedral da Anunciação foi construída a partir do século 16 como o centro da administração da Igreja Ortodoxa. A catedral é a maior construção do Kremlin, com uma cúpula de cinco metros e duas capelas conectadas por um alpendre. Na década de 1930, a torre sineira, o pórtico oeste e os domos foram derrubados. A casa do bispo foi construída em 1829.</p>

                                     <p><img src="../_upload/extras/pontokazan5.jpg" alt="blog-image">
                                    <br><cite>A Catedral da Anunciação, dentro do Kremlin de Kazan. Foto: <a target="_blank" href="https://commons.wikimedia.org/wiki/File:Казань._Кремль._Памятник_Зодчим_Казанского_Кремля_и_Благовещенский_Собор.jpg">@wikipedia</a></cite></p>



                                    <p>A pérola de Kazan é o Kremlin de Kazan - um complexo único de monumentos arqueológicos, históricos e arquitetônicos. O Kremlin forma um conjunto de edifícios que datam do século XVI ao século XIX, incluindo as ruínas de edifícios antigos que datam do século X ao século XVI. O Kremlin de Kazan também é único, pois é a única fortaleza tártara que permanece dentro da Federação Russa. O complexo possui uma série de edificações históricas e diversos museus. Entre os prédios mais importantes, estão a residência do presidente da República da Rússia, a catedral da Anunciação e a mesquita Kul Sharif, símbolo da convivência pacífica entre as duas religiões no local. Aliás, Kazan é a única das 11 cidades sedes da Copa do Mundo 2018 que possui população de maioria muçulmana.</p>
                                    <p>Em 30 de novembro de 2000, o complexo histórico e arquitetônico do Kremlin de Kazan foi inscrito na Lista do Patrimônio Mundial da UNESCO. Por causa disso, Kazan tornou-se membro da Organização das Cidades Patrimônio da Humanidade, bem como a sede de sua região, a Eurásia.</p>

                                    <h2>Como chegar em Kazan</h2>

                                    <h3>Trem</h3>

                                   
                                    <p>O trem é a opção mais prática e conveniente para viajar na Rússia e estação de trem em Kazan fica no centro da cidade. Para longas viagens, os assentos têm camas para dormir. A estação de trem ( Kazan passazhirsky ) fica muito perto do Kremlin de Kazan, a apenas 5 minutos a pé e no centro da cidade. O tráfego ferroviário é bastante intenso e a partir de Kazan você pode viajar de trem para qualquer destino na Rússia. Abaixo, o tempo de viagem de Kazan a outras cidades russas.</p>

                                    <p> <strong>Kazan para Moscou:</strong> cerca de 13 horas<br>
									<strong>Kazan para São Petersburgo:</strong> cerca de 22 horas<br>
									<strong>Kazan para Nizhny Novgorod:</strong> cerca de 9 horas<br>
									<strong>Kazan para Ekaterinburgo:</strong> cerca de 14 horas<br>
									<strong>Kazan para Irkutsk:</strong> cerca de 68 horas (2 dias e meio)<br>
									</p>

									<h3>Aeroporto</h3>

                                   
                                    <p>O aeroporto mais perto de Kazan é Aeroporto Internacional de Kazan, a 26 km da cidade. De lá, saem e chegam voos domésticos dos principais aeroportos da Rússia, assim como voos internacionais.</p>

                                    <h3>De ônibus</h3>

                                    <p> <strong>Kazan para Moscou:</strong> cerca de 14 horas<br>
									<strong>Kazan para São Petersburgo:</strong> cerca de 35 a 40 horas<br>
									<strong>Kazan para Nizhny Novgorod:</strong> cerca de 8 horas<br>
									<strong>Kazan para Ekaterinburgo:</strong> cerca de 20 horas<br>
									
									</p>
									<h2>Como se locomover em Kazan</h2>

									<p>Os turistas podem se locomover em Kazan através dos meios de transportes públicos, como o metrô e o ônibus. Para pegar táxis em todo o país pode-se utilizar aplicativos como Uber, Yandex Taxi e o RuTaxi. Mais uma alternativa é alugar um carro durante a sua viagem na Rússia. Nesse caso, a carteira de motorista brasileira tem validade no país europeu, mas deve ser traduzida para o russo e autenticada em consulados da Rússia no Brasil.</p>


									<p>Leia Mais em: <a target="_blank" href="https://rusiaturismo.es/destinos/kazan.html">Russiaturismo.es</a> | <a target="_blank" href="http://modoferias.com.br/kazan/">Modo Férias</a> |  <a target="_blank" href="https://pt.wikipedia.org/wiki/Cazã">Wikipédia</a></p>




                                    <h2>Galunov Hotel</h2>

                                   
                                    <p>Outra opção super bem localizada de hotel em São Petersburgo, fica a apenas sete minutos a pé do Ploshchad Vosstaniya. Todos os quartos incluem TV de tela plana e banheiro privativo e uma decoração provençal, super aconhegante. E pra quem vai assistir aos jogos da Copa, uma boa notícia: a Estação de Trem Moskovsky fica a apenas 450 metros de distância!</p>

                                   	<h2>Hotel Astória</h2>

                                   	<p>Ótima localização em frente à Catedral de Santo Isaac. As principais atracções, incluindo o Museu Hermitage e o Teatro Mariinsky, estão a uma curta distância a pé. 169 quartos confortáveis, incluindo 86 suítes. Os hóspedes podem descobrir a cozinha russo-francesa no Restaurante Astoria, cocktails no Bar Lichfield e sobremesas do Astoria Chocolatier no Rotonda Lounge.</p>
		

                                    <h2>Catedral do Sangue Derramado</h2>

                                    <p><img src="../_upload/extras/pontosaint2.JPG" alt="blog-image">
                                    <br><cite>Fonte: <a target="_blank" href="http://www.perdidosnomundo.com/?attachment_id=4341" title="http://www.perdidosnomundo.com/?attachment_id=4341">perdidos no mundo</a></cite></p>

                                    <p>Localizada às margens do rio Griboedov é um dos cartões-postais de São Petersburgo e foi palco do assassinato de Alexandre II por terroristas, em 1881.</p>

                                    <h2>Jardins de Verão </h2>

                                   
                                    <p>Construído por ordens de Pedro, o Grande, o local abriga alguns lagos e uma coleção de esculturas dos séculos 17 e 18, além de se destacar pela grande quantidade de flores coloridas, principalmente em épocas mais quentes (ou menos frias) do ano.</p>

                                    <h2>Rio Neva </h2>

                                    
                                    <p>Os passeios de barco pelos canais do Rio Neva, que corta a cidade, renderam à cidade de São Petesburgo o apelido de Veneza do Norte, fazendo referência à famosa Veneza italiana.</p>

                                    <h2>Catedral Ortodoxa de Santo Isaac</h2>

                                    <p><img src="../_upload/extras/pontosaint3.JPG" alt="blog-image">
                                    <br><cite>Fonte: <a target="_blank" href="https://www.getyourguide.pt/sao-petersburgo-l43/" title="https://www.getyourguide.pt/sao-petersburgo-l43/">getyourguide</a></cite></p>

									<h2>Hotel Saransk</h2>

                                    <p class="drop-cap">Uma das melhores características de uma cidade é a mistura cultural da comida que serve. Tártaro e europeu, russo e oriental, a oferta de comida de Kazan é reflexo das culturas que atravessa. Por ser uma cidade multicultural, Kazan possui restaurantes das mais variadas cozinhas do mundo que se misturam com a gastronomia local.</p>

                                    <p>A <strong>Rua Bauman</strong> é o lugar ideal para passear e conhecer os melhores restaurantes, bares, cafés e lojas de souvenirs (objeto que resgata memórias que estão relacionadas ao destino turístico). É a rua principal de Kazan, com o calçadão somente para pedestres, muito frequentado por jovens e bem movimentado principalmente a tarde e a noite. E o melhor, você pode experimentar a saborosa comida Tartar, com vários restaurantes especializados na cozinha nacional de Tartar, como por exemplo o <strong>Restaurante Dom Tatarskoi Kulinarii</strong></p>

                                    <p><img src="../_upload/extras/kazanrestaurante1.jpg" alt="blog-image">
                                    <br><cite>Rua mauman. Fonte: <a target="_blank" href="https://www.tripadvisor.com/">tripadivisor</a></cite></p>


                                    <h2>Dom Tatarskoi Kulinarii </h2>

                                    
                                    <p><img src="../_upload/extras/kazanrestaurante2.jpg" alt="blog-image">
                                    <br><cite>Dom Tatarskoi Kulinarii. Fonte: <a target="_blank" href="https://www.tripadvisor.com/">tripadivisor</a></cite></p>

                                    <p class="drop-cap">Dom Tatarskoi Kulinarii (que pode ser traduzido para “A Casa da Comida Tartar”) é a cozinha nacional de Tartar. Existe há anos e é altamente recomendado pelos habitantes locais. Seu interior datado de sua ampla sala de jantar decorado em estilo tártaro, é parte de seu charme. Este é o lugar certo para experimentar as iguarias da cozinha Tartar, como alguns dos pratos de carne de cavalo, assim como uma abundância de bolos e outros pedaços para saborear e desfrutar.</p>

                                    <p><strong>Localização:</strong> Rua Bauman, 31 | Metro: Kremljovskaja, Kazan 420111, Rússia
                                    <br><strong>Telefone:</strong> +7 843 292-70-70
									<br><strong>Site Oficial:</strong> <a target="_blank" href="http://domtk.com">domtk.com</a> </p>

									<h2>Priyut Kholostyaka</h2>

									 <p><img src="../_upload/extras/kazanrestaurante3.jpg" alt="blog-image">
                                    <br><cite>Priyut Kholostyaka. Fonte: <a target="_blank" href="https://www.tripadvisor.com">tripadivisor</a></cite></p>

                                    <p>Mas se você quer experimentar outro tipo de refeição, tem o restaurante Priyut Kholostyaka, com um cardápio padrão e internacional, o local é dividido em várias áreas: salão principal, espaço para fumar narguile e também uma varanda que só abre nos dias de verão. O restaurante é bastante procurado pelo ambiente informal e bons pratos, mas um dos sucessos da casa é a sopa de cogumelos. Uma refeição sai por cerca de 1200 rublos por pessoa.</p>

                                     <p><strong>Localização:</strong> 27А Ulitsa Chernyshevskogo, Kazan, 420111, Russia
                                    <br><strong>Telefone:</strong> +78432920771
									<br><strong>instagram:</strong> <a target="_blank" href="http://prihol.ru">prihol.ru</a> </p>

									<h2>Beerhouse</h2>

									 <p><img src="../_upload/extras/kazanrestaurante4.jpg" alt="blog-image">
                                    <br><cite>Beerhouse. Fonte: <a target="_blank" href="http://welcome2018.com/en/places/kazan/236852/">welcome2018</a></cite></p>

                                    <p>O local simula um típico restaurante alemão mas a cozinha possui inspirações rússas, é claro, além de tatar e europeia. No Beerhouse, a decoração é feita com bastante madeira e até mesmo as garçonetes se vestem com roupas típicas da Alemanha. Há diversas opções de cervejas e o preço médio de uma refeição fica em torno de 700 rublos por pessoa.</p>

                                    <p><strong>Localização:</strong> Ulitsa Astronomicheskaya, 10, Kazan, Respublika Tatarstan, Rússia, 420111
                                    <br><strong>Telefone:</strong> +7 843 260-08-24
									<br><strong>Site Oficial:</strong> <a target="_blank" href=" http://www.beerhouse-kazan.ru">beerhouse-kazan.ru</a> </p>

									<h2>Dobraya Stolovaya</h2>

									 <p><img src="../_upload/extras/kazanrestaurante5.jpg" alt="blog-image">
                                    <br><cite>Beerhouse. Fonte: <a target="_blank" href="http://welcome2018.com/en/places/kazan">welcome2018</a></cite></p>

                                    <p>Ideal para quem quer gastar pouco, o local é um self-service e os pratos são vendidos por peso. Mesmo assim, é um dos restaurantes mais procurados da cidade não só pelo preço, mas também pela qualidade e sabor da comida. Vale a pena provar a torta de mel. Uma pessoa no Dobraya Stolovaya gasta cerca de 200 rublos.</p>

                                    <p><strong>Localização:</strong> Bauman St, 21,1st floor, Kazan, Russia, 420111
                                    <br><strong>Telefone:</strong> 7 (843) 297 91 99
									<br><strong>Site Oficial:</strong> <a target="_blank" href=" http://dobraya.su">dobraya.su</a> </p>


                                    <p><strong>Localização:</strong> Raboche-Krest'yanskaya st, 18, Volgograd, Rússia
									</p>

                                    
                                   <p><img src="../_upload/extras/hotelkazan1.jpg" alt="blog-image">
                                    <br><cite>Mirage Hotel. Fonte: <a target="_blank" href="https://www.booking.com/hotel/ru/mirage.pt-br.html?aid=356986;label=gog235jc-city_placestostay-xb-ru-kazan-unspec-br-com-L%3Axb-O%3AwindowsS10-B%3Aopera-N%3AXX-S%3Abo-U%3Ac-H%3As;sid=3ce19f78515c44fd0fc3b574c4b47d03">booking</a></cite></p>

                                    <p>Uma ótima opção é o Mirage Hotel, que fica a 9 minutos a pé da praia. Oferecendo vista do Kremlin de Kazan, Patrimônio Mundial da Humanidade, e situado perto de várias das atrações de Kazan, este hotel 5 estrelas oferece acomodações luxuosas e muita hospitalidade em uma localização fantástica.</p>

                                    <p>	O ponto negativo dessa região é que ela fica mais distante da Arena Kazan – estádio dos jogos da Copa.</p>

                                    <p><strong>Localização:</strong> Moskovskaya St., 5, Kazan 420202, Rússia
									<br><strong>Site Oficial:</strong> <a target="_blank" href="http://mirage-hotel.ru">mirage-hotel</a> </p>

									<h2>Riviera Hotel</h2>

                                    <p><img src="../_upload/extras/hotelkazan2.jpg" alt="blog-image">
                                    <br><cite>Riviera Hotel. Fonte: <a target="_blank" href="https://www.booking.com/hotel/ru/the-riviera.pt-br.html">booking</a></cite></p>

                                    <p>Se deseja ficar mais perto do estádio, a dica é procurar hospedagem na região do Riviera Hotel, que fica a 2km da Arena Kazan, e a 2 minutos a pé da praia. Oferecendo parque aquático, piscina coberta e ao ar livre, spa e centro de bem-estar. Por ser o maior edifício de Kazan, a propriedade apresenta linda vista do rio e do Kremlin.</p>

                                    <p><strong>Localização:</strong> Fatykha Amirkhana Ave., 1A, Kazan 420124, Rússia
									<br><strong>Site Oficial:</strong> <a target="_blank" href="https://kazanriviera.ru/en/">kazanriviera.ru</a> </p>

                                    <p><img src="../_upload/extras/hotelsaransk1.jpg" alt="blog-image">
                                    <br><cite>Mirage Hotel. Fonte: <a target="_blank" href="https://www.booking.com/hotel/ru/mirage.pt-br.html?aid=356986;label=gog235jc-city_placestostay-xb-ru-kazan-unspec-br-com-L%3Axb-O%3AwindowsS10-B%3Aopera-N%3AXX-S%3Abo-U%3Ac-H%3As;sid=3ce19f78515c44fd0fc3b574c4b47d03">booking</a></cite></p> 

                                    <p>	A Catedral de St. Theodore Ushakov é a construção é a mais bonita da cidade e apenas ficou pronta em agosto de 2006. A cruz central da catedral é do estilo do Império Russo e tem 62 metros de altura. Nela, existem quatro torres de sino e 12 sinos, o maior dos quais pesa seis toneladas. Ao lado da catedral há um monumento a Fedor Ushakov, um almirante russo que comandou a Frota do Mar Negro em 1790-1792. Os moradores de Saransk o consideram o santo padroeiro da cidade. O comandante militar passou apenas seus últimos anos em Mordovia, mas sua história familiar está estreitamente entrelaçada com a história do povo da mordovia.</p>

                                    <p><img src="../_upload/extras/pontosaransk2.jpg" alt="blog-image">
                                    <br><cite>Catedral de St. Theodore Ushakov. Fonte: <a target="_blank" href="http://welcome2018.com/es/cities/saransk/the-picturesque-saransk/">walcome2018</a></cite></p> 

                                    <p>	A Catedral de St. Theodore Ushakov é a construção é a mais bonita da cidade e apenas ficou pronta em agosto de 2006. A cruz central da catedral é do estilo do Império Russo e tem 62 metros de altura. Nela, existem quatro torres de sino e 12 sinos, o maior dos quais pesa seis toneladas. Ao lado da catedral há um monumento a Fedor Ushakov, um almirante russo que comandou a Frota do Mar Negro em 1790-1792. Os moradores de Saransk o consideram o santo padroeiro da cidade. O comandante militar passou apenas seus últimos anos em Mordovia, mas sua história familiar está estreitamente entrelaçada com a história do povo da mordovia.</p>

                                    <p><img src="../_upload/extras/pontosaransk2.jpg" alt="blog-image">
                                    <br><cite>Catedral de St. Theodore Ushakov. Fonte: <a target="_blank" href="http://welcome2018.com/es/cities/saransk/the-picturesque-saransk/">walcome2018</a></cite></p> 

                                    

                                    <h2>Museu Panorâmico da Batalha de Stalingrado</h2>

                                    <p>	Um dos principais símbolos da cidade, possui a coleção mais extensa e completa de artefatos, documentos e objetos relacionados à batalha de Stalingrado. Há ainda uma tela grandiosa representando a luta dos soldados que morreram durante a batalha. Sua principal sala é a do Triunfo, onde estão expostas as bandeiras reais de todas as unidades e tropas envolvidas nessa batalha que marcou a cidade. Além disso, há estátuas de bronze de Rodin, como "O Beijo" e "A Fidelidade", entregues à cidade por Lady Vestmakott em 1945, assim como a espada do rei britânico George 6º, oferecida à cidade em 1943 em homenagem à vitória.</p>

                                    <h2>Casa Pavlov</h2>

                                    <p>	O local ficou famoso durante a Batalha de Stalingrado. No confronto, apenas 25 soldados defenderam o ponto por 58 dias. O prédio foi marco de grande importância estratégica, já que ficava no centro da principal praça da cidade. Durante a batalha, uma menina batizada de Zinaída nasceu na Casa Pavlov. Ela ainda mora na cidade e é uma das maiores personalidades de Volgogrado.</p>

                                    <h2>Monumento a Vladimir Lenin</h2>

                                    <p><img src="../_upload/extras/pontovolgograd1.jpg" alt="blog-image">
                                    <br><cite>Monumento a Vladimir Lenin. Fonte: <a target="_blank" href="https://oquefazeremsuaviagem.com/russia/o-que-fazer-em-volgograd-na-russia/">oquefazeremsuaviagem.com</a></cite></p> 

                                    <p>A maior estátua pra o ex-líder da União Soviética pode ser encontrada na cidade. O pedestal tem 30 metros da altura, enquanto a escultura de Lênin mede 27. O munumento está no livro dos Recordes, o Guinness, como o mais alto feito a uma pessoa real.</p>

                                   
                                   





                                    <p><img src="../_upload/extras/comidakazan2.jpg" alt="blog-image">
                                    <br><cite>Etchpetchmac. Fonte: <a target="_blank" href="https://es.rbth.com/cultura/2015/10/16/5-platos-por-los-que-vale-la-pena-viajar-a-kazan_483551"> rbth.com</a></cite></p>

                                    <p>	<strong>Etchpetchmac</strong> tem a forma de uma torta simples: massa fermentada, carne, cebola, batata cortada em cubos, todos fechados em forma de pirâmide e cozidos. Uma vez que a massa foi preparada e recheada, os cantos são dobrados para trás de forma que haja um pequeno buraco no topo da torta. Na metade do processo de cozimento, os echpochmak são retirados do forno e uma colher de caldo é derramado no recheio pelo buraco. Isso garante que a carne - que é recheada crua - permaneça úmida, macia e deliciosa para comer.</p>

                                    <p>Receita: <a target="_blank" href="http://www.pt.rowland98.com/eda/47813-kystybyy-recepty-tradicionnogo-tatarskogo-blyuda.html">rowland98.com</a> </p>

                                   




                                    <p>A Arena Volgograd, localizada ao lado do Memorial de Mamayev Kurgan, um dos principais pontos turísticos da cidade, e às margens do Rio Volga, foi construída em 1958, no lugar de um depósito de óleo e, espera-se que sua reinauguração seja mais uma conquista depois de completamente reformado para a disputa da Copa do Mundo. Com capacidade para 45.568 espectadores e a um custo de R$ 952 milhões será palco dos seguintes jogos:</p>

                                    <h3>Jogos:</h3>

									<div id="grupos">
										<div class="grupoW">
											
											
											<ul id="jogos">
												<div class="dataLocal"><strong>22 de junho de 2018, 12h &gt;</strong> Volgogrado</div>
												<div class="confronto">
													<div class="equipeE">
														<div class="bandeira bandeira-NG"></div>
														<span class="nomePais">Nigéria</span>
														<span class="siglaPais">NIG</span>
													</div>
													<div class="versus">X</div>
													<div class="equipeD">
														<div class="bandeira bandeira-IS"></div>
														<span class="nomePais">Islândia</span>
														<span class="siglaPais">ISL</span>
													</div>
												</div>
												</li>

												<li style="border-top: 1px solid #ccc;">
													<div class="dataLocal"><strong>18 de junho de 2018, 15h &gt;</strong> Volgogrado</div>
													<div class="confronto">
														<div class="equipeE">
															<div class="bandeira bandeira-TN"></div>
															<span class="nomePais">Tunísia</span>
															<span class="siglaPais">TUN</span>
														</div>
														<div class="versus">X</div>
														<div class="equipeD">
															<div class="bandeira bandeira-_england"></div>
															<span class="nomePais">Inglaterra</span>
															<span class="siglaPais">ING</span>
														</div>
													</div>
												</li>

												<li style="border-top: 1px solid #ccc;">
													<div class="dataLocal"><strong>28 de junho de 2018, 11h &gt;</strong> Volgogrado</div>
													<div class="confronto">
														<div class="equipeE">
															<div class="bandeira bandeira-JP"></div>
															<span class="nomePais">Japão</span>
															<span class="siglaPais">JAP</span>
														</div>
														<div class="versus">X</div>
														<div class="equipeD">
															<div class="bandeira bandeira-PL"></div>
															<span class="nomePais">Polônia</span>
															<span class="siglaPais">POL</span>
														</div>
													</div>
												</li>
												
												<li style="border-top: 1px solid #ccc;">
													<div class="dataLocal"><strong>25 de junho de 2018, 11h &gt;</strong> Volgogrado</div>
													<div class="confronto">
														<div class="equipeE">
															<div class="bandeira bandeira-SA"></div>
															<span class="nomePais">A. Saudita</span>
															<span class="siglaPais">ARA</span>
														</div>
														<div class="versus">X</div>
														<div class="equipeD">
															<div class="bandeira bandeira-EG"></div>
															<span class="nomePais">Egito</span>
															<span class="siglaPais">EGI</span>
														</div>
													</div>
												</li>
											</ul>

										</div>
										<p><cite>Fonte: <a target="_blank" href="https://complemento.veja.abril.com.br/esporte/tabela-copa-2018/" title="tabela copa 2018">tabela copa 2018</a></cite></p>
									</div>

																		
									<h3>Times:</h3>

									<p>O FC Rotor Volgograd é o maior clube da cidade e o único profissional no momento. Atualmente, disputa a segunda divisão do Campeonato Russo, onde briga contra o rebaixamento. Nos anos 90, era um dos principais clubes do país, chegando a disputar torneios europeus em quatro oportunidades. Seu momento de auge foi em 1995, quando eliminou o Manchester United da Copa da UEFA, após dois empates. Sua decadência ocorreu após um grande problema financeiro, quando o clube ameaçou decretar falência, mas conseguiu manter seu profissionalismo, mesmo jogando nas divisões inferiores do país.</p>

									<p>Leia Mais em: <a target="_blank" href="https://br.rbth.com/viagem/80370-ratos-gatos-mamutes-historia-monumentos-animais">rbth.com</a></p>

									<h3>Outros times:</h3>
									
									<p>FC Dínamo São Petersburgo e FC Kosmos-Kirovets São Petersburgo</p>
									
									<h3>Times extintos ou licenciados:</h3>
									
									<p>FC Saturn-1991 São Petersburgo, FC Petrotrest São Petersburgo, FC Lokomotiv São Petersburgo e FC Galaks São Petersburgo.</p>






                                    <h2>Como chegar:</h2>

                                    <p><strong>De avião:</strong> O aeroporto de Pulkovo conecta São Petersburgo a várias cidades na Europa, com voos diários. Vans e ônibus ligam o aeroporto ao centro da cidade com saídas frequentes, com um rápido trajeto que leva cerca de 30 minutos.</p>

                                    <p><strong>Via terrestre:</strong> São Petesburgo pode ser acessada a partir de Moscou em viagens de trens que duram de 4 a 5 horas, ou também de Helsinki, na Finlândia, em um percurso mais curto, de 3h30. </p>

                                    <p><strong>Via marítima:</strong> Alguns serviços com barcos de alta velocidade também servem para chegar à cidade que possui um dos estádios da Copa 2018. Eles partem de Tallinn, na Estônia, Helsinki, na Finlândia, e também Riga, na Letônia</p>

                                     <p>Leia Mais: <a target="_blank" href="http://www.saint-petersburg.com/history/" title="http://www.saint-petersburg.com/history/">saint-petersburg.com/history</a> | 
                                     <a target="_blank" href="https://en.wikipedia.org/wiki/Saint_Petersburg" title="https://en.wikipedia.org/wiki/Saint_Petersburg">wikipedia</a>

                                     </p>


			

                                    <p>Buscando boas opções de hospedagens em Moscou com uma relação custo-benefício e localização, temos:</p>

                                   	<h2>Brick Design Hotel </h2>

									
									<p>O Brick Design Hotel é super bem localizado – fica bem no centro de Moscou, num belo edifício histórico do século XIX. A Estação de Metrô Chistye Prudy fica a apenas 300 m do hotel. Todos os quartos possuem ar-condicionado e tem design contemporâneo, com peças de design vintage e obras de artistas russos. É uma excelente opção para quem gosta de fazer passeios a pé e também é perto das maiores lojas de departamento da cidade, para quem quer aproveitar e fazer compras por lá!</p>

									<p>
										<strong>Localização:</strong> Myasnitskaya Ulitsa, 24/7 строение 3-4, Moscou, Rússia, 101000<br>
										<strong>Telefone:</strong>+7 499 110-24-70<br>
										<strong>Site Oficial:</strong> <a target="_blank" href="http://www.brickhotel.ru" title="Site Oficial">brickhotel.ru</a>
									</p>

									<h2>Loft Hotel H11</h2>

									
									<p>O Loft Hotel H11 fica em Basmanny, um bairro que é uma ótima escolha de onde ficar na Copa para viajantes interessados em passeios a pé, caminhadas urbanas e arquitetura. O hotel fica a pouco mais de um quilômetros da Catedral de São Basílio. A hospedagem é simples mas bastante confortável e tem decoração mais rústica, com tijolos à vista. Para quem quer mais conforto, alguns quartos oferecem vista do jardim ou da cidade! </p>

									<p>
										<strong>Localização:</strong> Khokhlovskiy Pereulok, 11с1, Moscou, Rússia.<br>
										<strong>Telefone:</strong>+7 499 110-24-70<br>
										
									</p>

									<h2>Apart-hotel Naumov Sretenka </h2>

									<p>Nossa terceira dica de hospedagem em Moscou também fica localizada em um prédio histórico russo e fica no bairro Krasnoselsky, que pode ser outra boa opção para se hospedar na cidade. Esse hotel é super bem avaliado no Booking (isso é muito importante, já que todas as avaliações são feitas por quem se hospedou ali de verdade) e tem decoração rústica e espaços aconchegantes, vale conferir! </p>

									<p>
										<strong>Localização:</strong> Ulitsa Sretenka, 4/1, Moskva, Rússia, 107045<br>
										<strong>Telefone:</strong>+7 499 110-24-70<br>
										
									</p>

									<h2>AccorHotels  </h2>

									
									<p>A rede AccorHotels conta ainda com 16 hotéis apenas na cidade de Moscou, com preços que variam de R$ 150,00 a diária, ‘ibis Moscow Paveletskaya’ a R$ 245,00, Novotel Moscow Kievskaya e Mercure Moscou Paveletskaya. </p>

									

									
		

                                     <p>Leia Mais: <a target="_blank" href="https://oglobo.globo.com/boa-viagem/moscou-onde-vermelho-mais-bonito-18020634#ixzz5EIpnTDwz " title="Globo.com">Globo.com</a></p>



                                    
                                    <p>Um pouco mais de Moscou...</p>


									<h2>ÓPERA OU BALÉ NO TEATRO BOLSHOI</h2>

									<p><img src="../_upload/extras/pontomoscow1.jpg" alt="blog-image">
                                    <br><cite>Fonte: <a target="_blank" href="https://tourgratismoscu.com/informacion-util/el-teatro-bolshoi/" title="El Teatro Bolshoi">El Teatro Bolshoi</a></cite></p>

									<p>Ir ao Teatro Bolshoi é um dos destaques de uma visita à Rússia. Certifique-se de reservar um bilhete com antecedência para assistir ao balé “O Lago dos Cisnes” ou à ópera “Boris Godunov”, de Aleksandr Púchkin. O opulento teatro e seus interiores restaurados irão levá-lo de volta há outro século.</p>

									<h2>GALERIA TRETIAKOV</h2>

									<p><img src="../_upload/extras/pontomoscow2.jpg" alt="blog-image">
                                    <br><cite>Fonte: <a target="_blank" href="https://ideaguide.ru/fr/moscou/la_galerie_tretiakov" title="Galerie Tretiakov">Galerie Tretiakov</a></cite></p>

									<p>A capital da Rússia é cheia de ‘Arte’... Há o Museu Estatal Pushkin de Belas Artes, que apresenta algumas das grandes obras da arte europeia, e o Museu Roeritch, uma parada obrigatória para adeptos dos estudos índicos. Mas para aqueles que são apaixonados por arte russa, nada melhor do que visitar a Galeria Tretiakov. Ali é possível admirar grandes obras de Vassíli Verechchaguin e Isaak Levitan, por exemplo. A simples dimensão de “A Apoteose de Guerra”, uma pintura de Verechchaguin que apresenta uma gigantesca coleção de crânios, pode fazer o tempo parar e causar calafrios. O quadro de Levitan retratando o interior russo e as noites claras de verão são capazes de transportar os visitantes de volta aos tempos mais remotos.</p>

									<h2>GUM</h2>

									<p><img src="../_upload/extras/pontomoscow3.jpg" alt="blog-image">
                                    <br><cite>Fonte: <a target="_blank" href="https://www.flickr.com/photos/91293200@N00/4973694227" title="GUM">Flickr</a></cite></p>

									<p>GUM é uma loja de departamento enorme no centro da cidade que dá de cara para a Praça Vermelha. Apesar de inúmeras lojas com preços bem salgados, a praça de alimentação no piso superior tem algumas opções acessíveis de café-da-manhã. Vá a uma “stolovaia” no estilo soviético e peça algumas panquecas russas, frutas e chá. Sente-se no topo da Chukhov e assista às pessoas passarem enquanto saboreia um delicioso café. Curta a arquitetura única do edifício, que tem elementos da Rússia medieval combinados com molduras de aço e teto de vidro.</p>

									<h2>MOSTEIRO NOVODEVITCHI</h2>

									<p><img src="../_upload/extras/pontomoscow4.jpg" alt="blog-image">
                                    <br><cite>Fonte: <a target="_blank" href="https://pt.advisor.travel/poi/Convento-de-Novodevichy-1773" title="Advisor">Advisor</a></cite></p>

									<p>O mosteiro Novodevitchi mesmo pra quem não é uma pessoa religiosa é um assistir ao culto no interior da Catedral de Smolensk. Esse é um dos poucos lugares na capital russa onde algumas das tradições pré-revolução bolchevique continuam bem preservadas.</p>

									<h2>CATEDRAL DE KAZAN</h2>

									<p><img src="../_upload/extras/pontomoscow5.jpg" alt="blog-image">
                                    <br><cite>Fonte: <a target="_blank" href="https://www.expedia.com/pictures/russia/moscow/kazan-cathedral.d6297959/" title="Expedia">Expedia</a></cite></p>

									<p>Entrando na Praça Vermelha pelos Portões Voskressênskie, você verá a sua esquerda uma pequenina e aconchegante igreja. Esta é a Igreja de Nossa Senhora de Kazan, ou apenas Catedral de Kazan. A imagem de Nossa Senhora de Kazan fica em em cima da porta, e é uma das mais adoradas da Rússia ortodoxa.</p>

									<p>A igreja foi construída inicialmente em 1625, reconstruída muitas vezes e destruída pelas autoridades soviéticas em 1936. Mas no começo da década de 1990, ela foi reconstruída seguindo seus primeiros traços arquitetônicos.</p>

									<h2>CATEDRAL DE SÃO BASÍLIO</h2>

									<p><img src="../_upload/extras/pontomoscow6.jpg" alt="blog-image">
                                    <br><cite>Fonte: <a target="_blank" href="https://www.expedia.com/pictures/russia/moscow.d178289?view=large-gallery&page=1" title="Advisor">Advisor</a></cite></p>

									<p>Esta catedral que mais parece uma construção de doces saída de “João e Maria” é um dos símbolos mais conhecidos de Moscou e da Rússia, reproduzidos em milhões de cartões postais e suvenires. A construção foi erguida por Ivan, o Terrível, entre 1555 e 1561 em homenagem à anexação de Kazan e da conquista do Canato de Kazan.</p>

									<p>Vale a pena não apenas tirar fotos do lado de fora, mas também espiar lá dentro: de murais pintados dentro das cúpulas, aos portões do altar em diferentes capelas e iconostasis, também acontece muito de se encontrar um coral de canto ortodoxo no interior da catedral.</p>









									




									<h3>Jogos:</h3>

									<p><img src="../_upload/partidas/moscow1.png" alt="blog-image">
                                    <br><cite>Fonte: <a target="_blank" href="https://complemento.veja.abril.com.br/esporte/tabela-copa-2018/" title="tabela copa 2018">tabela copa 2018</a></cite></p>

                                    <h3>Outros jogos:</h3>

                                    <p>
										<strong>Oitavas de Final:</strong> 01 de Julho de 2018, às 20:00<br>
										<strong>Semifinal:</strong> 11 de Julho de 2018, às 20:00 <br>
										<strong>Final:</strong> 15 de Julho de 2018, às 20:00 <br>
									</p>

									<h2>KAZAN ARENA</h2>

									
									<p>A Arena Kazan começou a ser construída no ano de 2010 e em 2013, foi inaugurada. Localizado às margens do rio Kazanka, o estádio é a casa do Rubin Kazan, o principal time de futebol da cidade. Além de quatro jogos da fase de grupos, será palco também de uma oitava de final e uma partida das quartas.</p>

									<p>
										<strong>Capacidade:</strong> 45.379 pessoas.<br>
										
									</p>

									<h3>Jogos:</h3>

									<div id="grupos">
										<div class="grupoW">
											
											
											<ul id="jogos">
												<li style="border-top: 1px solid #ccc;">
													<div class="dataLocal"><strong>20 de junho de 2018, 15h &gt;</strong> Kazan &gt; Grupo B</div>
													<div class="confronto">
														<div class="equipeE">
															<div class="bandeira bandeira-IR"></div>
															<span class="nomePais">Irã</span>
															<span class="siglaPais">IRA</span>
														</div>
														<div class="versus">X</div>
														<div class="equipeD">
															<div class="bandeira bandeira-ES"></div>
															<span class="nomePais">Espanha</span>
															<span class="siglaPais">ESP</span>
														</div>
													</div>
												</li>

												<li style="border-top: 1px solid #ccc;">
													<div class="dataLocal"><strong>16 de junho de 2018, 7h &gt;</strong> Kazan &gt; Grupo C</div>
													<div class="confronto">
														<div class="equipeE">
															<div class="bandeira bandeira-FR"></div>
															<span class="nomePais">França</span>
															<span class="siglaPais">FRA</span>
														</div>
														<div class="versus">X</div>
														<div class="equipeD">
															<div class="bandeira bandeira-AU"></div>
															<span class="nomePais">Austrália</span>
															<span class="siglaPais">AUS</span>
														</div>
													</div>
												</li>

												<li style="border-top: 1px solid #ccc;">
													<div class="dataLocal"><strong>27 de junho de 2018, 11h &gt;</strong> Kazan &gt; Grupo F</div>
													<div class="confronto">
														<div class="equipeE">
															<div class="bandeira bandeira-KR"></div>
															<span class="nomePais">Coreia do Sul</span>
															<span class="siglaPais">COR</span>
														</div>
														<div class="versus">X</div>
														<div class="equipeD">
															<div class="bandeira bandeira-DE"></div>
															<span class="nomePais">Alemanha</span>
															<span class="siglaPais">ALE</span>
														</div>
													</div>
												</li>
												
												<li style="border-top: 1px solid #ccc;">
													<div class="dataLocal"><strong>24 de junho de 2018, 15h &gt;</strong> Kazan &gt; Grupo H</div>
													<div class="confronto">
														<div class="equipeE">
															<div class="bandeira bandeira-PL"></div>
															<span class="nomePais">Polônia</span>
															<span class="siglaPais">POL</span>
														</div>
														<div class="versus">X</div>
														<div class="equipeD">
															<div class="bandeira bandeira-CO"></div>
															<span class="nomePais">Colômbia</span>
															<span class="siglaPais">COL</span>
														</div>
													</div>
												</li>
											</ul>

										</div>
										<p><cite>Fonte: <a target="_blank" href="https://complemento.veja.abril.com.br/esporte/tabela-copa-2018/" title="tabela copa 2018">tabela copa 2018</a></cite></p>
									</div>

									 <h3>Outros jogos:</h3>

                                    <p>
										<strong>Oitavas de Final:</strong> 30 de Junho de 2018, às 11:00<br>
										<strong>Semifinal:</strong> 6 de julho de 2018, às 15:00 <br>
										<strong>Final:</strong> 15 de Julho de 2018, às 20:00 <br>
									</p>




									<div id="grupos">
										<div class="grupoW">
											
											
											<ul id="jogos">
												<li style="border-top: 1px solid #ccc;">
													<div class="dataLocal"><strong>16 de junho de 2018, 10h &gt;</strong> Arena Spartak, Moscou &gt; Grupo D</div>
													<div class="confronto">
														<div class="equipeE">
															<div class="bandeira bandeira-AR"></div>
															<span class="nomePais">Argentina</span>
															<span class="siglaPais">ARG</span>
														</div>
														<div class="versus">X</div>
														<div class="equipeD">
															<div class="bandeira bandeira-IS"></div>
															<span class="nomePais">Islândia</span>
															<span class="siglaPais">ISL</span>
														</div>
													</div>
												</li>

												<li style="border-top: 1px solid #ccc;">
													<div class="dataLocal"><strong>27 de junho de 2018, 15h &gt;</strong> Arena Spartak, Moscou &gt; Grupo E</div>
													<div class="confronto">
														<div class="equipeE">
															<div class="bandeira bandeira-RS"></div>
															<span class="nomePais">Sérvia</span>
															<span class="siglaPais">SER</span>
														</div>
														<div class="versus">X</div>
														<div class="equipeD">
															<div class="bandeira bandeira-BR"></div>
															<span class="nomePais">Brasil</span>
															<span class="siglaPais">BRA</span>
														</div>
													</div>
												</li>
												<li style="border-top: 1px solid #ccc;">
													<div class="dataLocal"><strong>23 de junho de 2018, 9h &gt;</strong> Arena Spartak, Moscou &gt; Grupo G</div>
													<div class="confronto">
														<div class="equipeE">
															<div class="bandeira bandeira-BE"></div>
															<span class="nomePais">Bélgica</span>
															<span class="siglaPais">BEL</span>
														</div>
														<div class="versus">X</div>
														<div class="equipeD">
															<div class="bandeira bandeira-TN"></div>
															<span class="nomePais">Tunísia</span>
															<span class="siglaPais">TUN</span>
														</div>
													</div>
												</li>
												<li style="border-top: 1px solid #ccc;">
													<div class="dataLocal"><strong>19 de junho de 2018, 9h &gt;</strong> Arena Spartak, Moscou &gt; Grupo H</div>
													<div class="confronto">
														<div class="equipeE">
															<div class="bandeira bandeira-PL"></div>
															<span class="nomePais">Polônia</span>
															<span class="siglaPais">POL</span>
														</div>
														<div class="versus">X</div>
														<div class="equipeD">
															<div class="bandeira bandeira-SN"></div>
															<span class="nomePais">Senegal</span>
															<span class="siglaPais">SEN</span>
														</div>
													</div>
												</li>
																		
											</ul>

										</div>
										<p><cite>Fonte: <a target="_blank" href="https://complemento.veja.abril.com.br/esporte/tabela-copa-2018/" title="tabela copa 2018">tabela copa 2018</a></cite></p>
									</div>

									<div id="grupos">
										<div class="grupoW">
											
											
											<ul id="jogos">
												<li style="border-top: 1px solid #ccc;">
													<div class="dataLocal"><strong>25 de junho de 2018, 15h &gt;</strong> Kaliningrado &gt; Grupo B</div>
													<div class="confronto">
														<div class="equipeE">
															<div class="bandeira bandeira-ES"></div>
															<span class="nomePais">Espanha</span>
															<span class="siglaPais">ESP</span>
														</div>
														<div class="versus">X</div>
														<div class="equipeD">
															<div class="bandeira bandeira-MA"></div>
															<span class="nomePais">Marrocos</span>
															<span class="siglaPais">MAR</span>
														</div>
													</div>
												</li>

												<li style="border-top: 1px solid #ccc;">
													<div class="dataLocal"><strong>16 de junho de 2018, 16h &gt;</strong> Kaliningrado &gt; Grupo D</div>
													<div class="confronto">
														<div class="equipeE">
															<div class="bandeira bandeira-HR"></div>
															<span class="nomePais">Croácia</span>
															<span class="siglaPais">CRO</span>
														</div>
														<div class="versus">X</div>
														<div class="equipeD">
															<div class="bandeira bandeira-NG"></div>
															<span class="nomePais">Nigéria</span>
															<span class="siglaPais">NIG</span>
														</div>
													</div>
												</li>
												<li style="border-top: 1px solid #ccc;">
													<div class="dataLocal"><strong>22 de junho de 2018, 15h &gt;</strong> Kaliningrado &gt; Grupo E</div>
													<div class="confronto">
														<div class="equipeE">
															<div class="bandeira bandeira-RS"></div>
															<span class="nomePais">Sérvia</span>
															<span class="siglaPais">SER</span>
														</div>
														<div class="versus">X</div>
														<div class="equipeD">
															<div class="bandeira bandeira-CH"></div>
															<span class="nomePais">Suíça</span>
															<span class="siglaPais">SUI</span>
														</div>
													</div>
												</li>
												<li style="border-top: 1px solid #ccc;">
													<div class="dataLocal"><strong>28 de junho de 2018, 15h &gt;</strong> Kaliningrado &gt; Grupo G</div>
													<div class="confronto">
														<div class="equipeE">
															<div class="bandeira bandeira-_england"></div>
															<span class="nomePais">Inglaterra</span>
															<span class="siglaPais">ING</span>
														</div>
														<div class="versus">X</div>
														<div class="equipeD">
															<div class="bandeira bandeira-BE"></div>
															<span class="nomePais">Bélgica</span>
															<span class="siglaPais">BEL</span>
														</div>
													</div>
												</li>
																		
											</ul>

										</div>
										<p><cite>Fonte: <a target="_blank" href="https://complemento.veja.abril.com.br/esporte/tabela-copa-2018/" title="tabela copa 2018">tabela copa 2018</a></cite></p>
									</div>

									
                                    <h3>Outros jogos:</h3>

                                    <p>
										<strong>Oitpppavas de Final:</strong> 03 de Julho de 2018, às 20:00<br>
										
									</p>

									<h2>Clubes da Cidade de Moscow</h2>


                                    <p>Por ser a maior cidade da Rússia, Moscou possui muitos times de futebol. Atualmente são 14 clubes ativos, em todas as divisões, e outros três que já foram extintos. </p>

                                    <h3>CSKA Moscou</h3>

                                    <p>Fundado em 1911 e com 32 títulos nacionais no currículo, é um dos mais vitoriosos e antigos do país - o seu nome em português significa Clube Central de Esportes do Exército. Entre outras conquistas, o CSKA já faturou seis vezes o Campeonato Russo, sete vezes o extinto Campeonato Soviético e também já levantou a taça da Copa da Uefa (atual Liga Europa) em 2005.</p>

                                    <h3>Spartak Moscou </h3>

                                    <p>Maior rival do CSKA, o Spartak foi fundado em 1922. O clube é portador da Ordem de Lênin e também tem diversos títulos no currículo, sendo 10 do Campeonato Russo e outros 12 da antiga União Soviética. Em âmbito europeu, foi semifinalista das duas maiores e importantes competições da Uefa: Liga Europa e Liga dos Campeões.</p>

                                    <h3>Dínamo de Moscou </h3>

                                    <p>Fundado em 1923, o Dínamo teve seu momento de maior glória quando o país ainda era a União Soviética, conquistando 10 títulos nacionais entre 1936 e 1963. Quando a Federação Russa foi criada, o clube perdeu força e faturou apenas uma Copa da Rússia, em 1995.</p>

                                    <h3>Lokomotiv Moscou  </h3>

                                    <p>Considerado um dos times mais "copeiros" da Rússia, o Lokomotiv tem poucas ligas nacionais - são apenas dois Campeonatos Russos conquistados. Em contrapartida, o clube fundado em 1922 já foi campeão da Copa da Rússia em sete oportunidades e também levou a Copa da URSS duas vezes.</p>

                                    <h3>Torpedo Moscou</h3>

                                    <p>A equipe participa regularmente da segunda divisão do Campeonato Russo e teve sua melhor época entre as décadas de 50 e 60, quando venceu dois Campeonato Soviéticos e três Copas da URSS. Com o fim da União Soviética, o Torpedo voltou a conquistar um título logo no início da reformulação do futebol russo, a Copa da Rússia de 1993, e depois, o máximo que conseguiu alcançar foi um terceiro lugar na primeira divisão.</p>

                                    <h3>Outros clubes de Moscou </h3>

                                    <p>FC Priesnia Moscou, FC FShM Torpedo Moscou, FC Monolit Moscou, FC Nika Moscou, FC Mosenergo Moscou, FC Chertanovo Moscou, FC Trestar Ostankino, FC Lotto MosKabelMet Moscou e FC Alnas Moscou.</p>

                                    <h3>Clubes extintos ou licenciados </h3>

                                    <p>FC Moscou, FC Spartak-Chukotka Moscou e FC Pelé Moscou</p>


                                    <p></p>

									<p>
										<strong>Localização:</strong> Petrovka St., 21-2, Moscou, Rússia.<br>
										<strong>Telefone:</strong> +7 (495) 621 2036 <br>
										<strong>Site Oficial:</strong> <a target="_blank" href="http://restoran.lavkalavka.com/en/" title="Site Oficial">Lavkalavka.com</a>
									</p>

									<h2>SAVVA</h2>

									<p><img src="../_upload/extras/restaurantemoscow3.jpg" alt="blog-image">
                                    <br><cite>Fonte: <a target="_blank" href="http://www.moscow-hotels.net/metropol-hotel/dining/restaurants/savva-restaurant/" title="moscow-hotels.net">moscow-hotels.net</a></cite></p>

                                    <p>Tradicional restaurante de Moscou, o Savva fica dentro do Metropol Hotel, oferendo um ambiente elegante, um serviço impecável e uma comida saborosa. Com uma grande variedade de saladas, entradas, carnes e sobremesas pra lá de criativas, o estabelecimento não é dos mais baratos da cidade.</p>

									<p>
										<strong>Localização:</strong> Teatralny Dr., 2, Moscou, Rússia.<br>
										<strong>Site Oficial:</strong> <a target="_blank" href="http://savvarest.ru/en/" title="Site Oficial">savvarest.ru</a>
										<br><strong>Site do Metropol Hotel:</strong> <a target="_blank" href="http://metropol-moscow.ru/en/restaurants/" title="Site Oficial">metropol-moscow.ru</a>
									</p>



									<p>Normalmente, são armazenados congelados e preparados imediatamente antes de serem consumidos, em água a ferver, até entre 2 a 5 minutos após começarem a flutuar. O prato resultante é servido com manteiga e ou natas frescas (a mostarda, o ketchup e o vinagre também são populares). Algumas receitas também sugerem que sejam fritos, após a cozedura, até que dourem. Onde exista uma comunidade russa, é muito provável que existam pacotes de Pelmeni congelado. Estes são feitos industrialmente, muitas vezes por companhias italianas</p>



									<p><img src="../_upload/partidas/kaliningrad.png" alt="blog-image">
                                    <cite>Fonte: <a href="https://complemento.veja.abril.com.br/esporte/tabela-copa-2018/" title="Tabela Copa 2018">Tabela Copa 2018</a></cite></p>
                                   
									<p>O único clube de Kaliningrado se chama FC Baltika Kaliningrado e foi fundado em 1954, mas só ganhou esse nome em 1958 e antes se chamava Pishchevik Kaliningrad. Atualmente, está na segunda divisão do Campeonato Russo, onde está desde 2005, quando venceu a terceira divisão. O Balda, como é chamado, leva as cores azul e branco em seus uniformes e, de acordo com dados oficiais do site, o brasileiro Iago Sampaio Silva faz parte da equipe.</p>

									<p>Conhecida por sua cerveja boa e barata. Na medieval Koenigsberg, literalmente todos - incluindo mulheres grávidas e bebês - bebiam cerveja e, era adicionado a sopa, massa, ensopado, etc. Muitos bares e restaurantes locais ainda têm suas próprias cervejarias.</p>

									                                    
                                                                        
                                    <p>Saiba mais em: <a target="_blank" href="https://nautilus.rest/gallery/ ">nautilus</a> | <a target="_blank" href="http://www.britannicaproject.ru/restaurant/хмель/#contacts">britannicaproject</a> | <a target="_blank" href="https://www.facebook.com/madam.bushe.39/">Madam Bushe</a> | <a target="_blank" href="http://borshsalo.ru/">Borshsalo</a> | <a target="_blank" href="https://www.facebook.com/yeltsin.pub/">yeltsin</a> | <a target="_blank" href="http://rk-rk.ru/restorany/pivovarnya-bretsel/">Pivovarnya-Bretsel</a> |  </p>
                                    


									<p>Leia Mais em: <a target="_blank" href="http://kaiserhof-hotel.com/en/?utm_source=tripadvisor&utm_medium=referral">Keiserhor Hotel</a> | <a target="_blank" href="https://viajandobemebarato.com.br/2017/10/onde-se-hospedar-na-copa-2018.html">Viajando bem barato</a> |  <a target="_blank" href="https://www.accorhotels.com/pt-br/Brasil/index.shtml">Accorhotels</a></p>
                                    
 

                                    
                                    <p>Leia mais em: <a href="https://br.sputniknews.com/portuguese.ruvr.ru/2012_10_16/Copa-Mundial-de-2018-em-Kaliningrado-areias-cantantes-e-buscas-de-ambar/">sputniknews</a> | 
                                    	<a href="https://en.wikipedia.org/wiki/Kaliningrad">wikipedia</a></p>
                                    
                                     <!-- .post-tags -->
                                     <div class="post-tags tagcloud">
                                        <a href="#" rel="tag">Pontos Turísticos</a>
                                        <a href="#" rel="tag">Hotéis</a>
                                        <a href="#" rel="tag">Restaurantes</a>
                                        <a href="#" rel="tag">Comidas Típicas</a>
                                        <a href="#" rel="tag">Estádios</a>
                                        <a href="#" rel="tag">Artesanato</a>
                                     </div>
                                     <!-- .post-tags -->
                                    
                                     
                                     <!-- .share-links -->
                                     <div class="share-links">
                                        
                                        <h3>COMPARTILHE ESTA POSTAGEM</h3>
                                        
                                        <div class="share-links-wrap">
                                                                        
                                            <a rel="nofollow" target="_blank" href="mailto:?subject=Eu quero que veja essa postagem&amp;body=Olha esta postagem : História de Moscow - http://copatur-com-br.umbler.net/_visao/moscow.php" title="Email this post to a friend"><i class="pw-icon-mail"></i></a>
                                            
                                            <a rel="nofollow" target="_blank" href="https://plus.google.com/share?url=http://copatur-com-br.umbler.net/_visao/moscow.php" title="Compartilhe esta postagem no Google+"><i class="pw-icon-gplus"></i></a>
                                            
                                            <a rel="nofollow" target="_blank" href="http://twitter.com/home?status=http://copatur-com-br.umbler.net/_visao/moscow.php" title="Compartilhe esta postagem no Twitter"><i class="pw-icon-twitter"></i></a>
                                              
                                            <a rel="nofollow" target="_blank" href="http://www.facebook.com/sharer.php?u=http://copatur-com-br.umbler.net/_visao/moscow.php" title="Compartilhe esta postagem no Facebook"><i class="pw-icon-facebook"></i></a>
                                        
                                        </div>
                                        
                                     </div>
                                     <!-- .share-links -->
                                     
                                        
                                    <!-- .about-author -->
                                    <aside class="about-author">
                                        
                                        <h3 class="section-title">ESCRITO POR</h3>
                                        
                                        <!-- .author-bio --> 
                                        <div class="author-bio">
                                            
                                            <!-- .author-img --> 
                                            <div class="author-img">
                                                <a href="#"><img alt="Johnny Doe" src="../_complementos/images/team/01.jpg" class="avatar"></a>												
                                            </div>
                                            <!-- .author-img -->
                                            
                                            <!-- .author-info -->
                                            <div class="author-info">
                                                <h4 class="author-name">Lorem lorem</h4>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est dolores, modi recusandae ipsa iure nesciunt ducimus odit quos maiores molestiae blanditiis. Voluptatem ipsam eaque, dolorum deserunt ratione. Rem, fugit. Nemo.</p>
                                                
                                                <!-- SOCIAL -->
                                                <ul class="social">
                                                    <li><a class="facebook" href="#"></a></li>
                                                    <li><a class="instagram" href="#"></a></li>
                                                    <li><a class="twitter" href="#"></a></li>
                                                    <li><a class="github" href="#"></a></li>
                                                    <li><a class="google-plus" href="#"></a></li>
                                                </ul>
                                                <!-- SOCIAL -->
                                                
                                            </div>
                                            <!-- .author-info -->
                                            
                                        </div>
                                        <!-- .author-bio --> 
                                        
                                    </aside>
                                    <!-- .about-author -->
                                    
                                        

                                </div>
                                <!-- .entry-content -->
                                  
                            
                                
                            </article>
                            <!-- .hentry -->
                        
                        
                            <!-- #comments -->
                            <div id="comments" class="comments-area">
                              
                              <h3 class="comments-title">3 Commentários</h3>
                              
                              <!-- .commentlist -->
                              <div id="display_comment"></div>
                              <!-- .commentlist -->
                              
                              
                              <!-- #respond --> 
                              <div id="respond"> 
                              
                                <h3 id="reply-title">Deixe seu comentário <small><a rel="nofollow" id="cancel-comment-reply-link" href="#" style="display:none;">Cancela resposta</a></small></h3>
                                
                                <!-- .commentform -->
                                <form action="#" method="post" id="comment_form">
                                
                                  <input type="text" name="comment_name" id="comment_name" class="form-control hidden" value="Renato Moura" placeholder="Enter Name" />

                                  <p class="comment-form-comment">
                                    <textarea id="comment_content" name="comment_content" rows="5" placeholder="Entre com seu comentário" aria-required="true"></textarea>
                                  </p>
                                  
                                  <p class="form-submit">
                                    <input type="hidden" name="comment_id" id="comment_id" value="0"/>
     								<input type="submit" name="submit" id="submit" class="btn button primary" value="Postar Comentário" />
                                  </p>
                                  
                                </form>
                                <!-- .commentform -->
                                
                              </div>
                              <!-- #respond --> 

                             
                            <!-- #comments -->
                            
                            
                            
               		</div>
                    <!-- layout-fixed -->
                    
                    
                    
                    
                
                	
                	
                
                </div>
                <!-- site-content -->
                
            </div>
            <!-- primary --> 
            
            
            
               
        
        
        
        
        </div>
        <!-- site-main -->
        
       

        
	</div>
		
		<footer  class="footer-copyright">
			<div class="container">
				
				
				<div class="foot-icons ">
					
		        	&copy; 2018 <a href="#">CopaTur</a>.

		        </div><!--/.foot-icons-->
				<div id="scroll-Top">
					<i class="fa fa-angle-double-up return-to-top" id="scroll-top" data-toggle="tooltip" data-placement="top" title="" data-original-title="Back to Top" aria-hidden="true"></i>
				</div><!--/.scroll-Top-->
			</div><!-- /.container-->

		</footer>
		
		<!-- Essential jQuery Plugins
		================================================== -->
		<!-- Main jQuery -->
		<script src="../_complementos/js/jquery.js"></script>

		<!--bootstrap.min.js-->
		<script  src="../_complementos/js/bootstrap.min.js"></script>
	
		<!-- Twitter Bootstrap -->
        <script  src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>

		<!-- bootsnav js -->
		<script src="../_complementos/js/bootsnav.js"></script>

		<!-- jquery.filterizr.min.js -->
		<script src="../_complementos/js/jquery.filterizr.min.js"></script>

		<script  src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
		<script src="../_complementos/js/cbpAnimatedHeader.js"></script>
		<script src="../_complementos/js/classie.js"></script>
    
		<!--jquery-ui.min.js-->
        <script src="../_complementos/js/jquery-ui.min.js"></script>

        <!-- counter js -->
		<script src="../_complementos/js/jquery.counterup.min.js"></script>
		<script src="../_complementos/js/waypoints.min.js"></script>

		<!--owl.carousel.js-->
        <script  src="../_complementos/js/owl.carousel.min.js"></script>

        <!-- jquery.sticky.js -->
		<script src="../_complementos/js/jquery.sticky.js"></script>

        <!--datepicker.js-->
        <script  src="../_complementos/js/datepicker.js"></script>

		<!--Custom JS-->
		<script src="../_complementos/js/scri-pt.js"></script>
		<script src="../_complementos/js/custom.js"></script>
    </body>
</html>

<script>
$(document).ready(function(){
 
 $('#comment_form').on('submit', function(event){
  event.preventDefault();
  var form_data = $(this).serialize();
  $.ajax({
   url:"../_controle/add_comment.php",
   method:"POST",
   data:form_data,
   dataType:"JSON",
   success:function(data)
   {
    if(data.error != '')
    {
     $('#comment_form')[0].reset();
     $('#comment_message').html(data.error);
     $('#comment_id').val('0');
     load_comment();
    }
   }
  })
 });

 load_comment();

 function load_comment()
 {
  $.ajax({
   url:"../_controle/fetch_comment.php",
   method:"POST",
   success:function(data)
   {
    $('#display_comment').html(data);
   }
  })
 }

 $(document).on('click', '.resp', function(){
  var comment_id = $(this).attr("id");
  $('#comment_id').val(comment_id);
  $('#comment_content').focus();
 });
 
});
</script>
