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
	                <div class="logo"><a class="navbar-brand page-scroll pad0" href="#"><img src="../_complementos/images/logo.png" alt=""></a></div><!-- /.logo-->
	            </div>

	            <!-- Collect the nav links, forms, and other content for toggling -->
	            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	                <ul class="nav navbar-nav navbar-right">
	                    <li class="hidden">
	                        <a class="page-scroll" href="#home"></a>
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
                                    
                                    <p class="drop-cap">Havia uma casa e ela foi subjugada e foi dito que ela não possuía significado histórico suficiente para se manter. No entanto, apesar dessa ação, os peregrinos continuavam chegando, muitas vezes em segredo e à noite, deixando sinais de recordação no terreno baldio e ali foi construída a “Igreja do Sangue” em Honra a Todos os Santos Resplandecentes na Terra Russa. Nas primeiras horas da manhã de 17 de julho de 1918, o Czar deposto e aqui exilado após a revolução de outubro de 1917, Nicolau II, foi executado junto a todos os seus familiares pelos bolcheviques que acreditavam que as Legiões Brancas estavam se aproximando de Yekaterinburg em uma missão para libertá-los. Embora tarde, em menos de uma semana a cidade foi capturada. Era a Casa Ipatiev, a que seria chamada de "A Casa de Propósito Específico" - Em 1977, a Casa Ipatiev foi demolida por ordem de Boris Yeltsin, para evitar que ela fosse usada como local de reunião dos monarquistas. Yeltsin mais tarde se tornou o primeiro presidente da Rússia e representou o povo no funeral do ex-czar em 1998.</p>

                                    <p>Yekaterinburg foi fundada em 18 de novembro de 1723 e recebeu seu nome em homenagem a esposa do imperador russo Pedro o Grande, Yekaterina, que mais tarde se tornou imperatriz reinante Catarina I. Projeta pelo engenheiro Georg Wilhelm de Gennin para ser uma cidade industrial, cercada por muros fortificados, de modo que ao mesmo tempo era tanto um centro de fabricação como uma fortaleza na fronteira entre a Europa e Ásia, sendo, portanto o coração da estratégia da Rússia para o desenvolvimento de toda a Região dos Urais. A chamada rodovia siberiana se tornou operacional em 1763 e colocou a cidade em uma rota de trânsito cada vez mais importante, o que levou ao seu desenvolvimento como um foco de comércio entre leste e oeste. Em 1781, a imperatriz Catarina, a Grande, nomeou a cidade como o centro administrativo da região.</p>

                                    <p>Renomeada de Sverdlovsk em 1924 em homenagem a um dos principais protagonistas da Revolução de Outubro, junto a Lenine, Iankel Movchevitch Sverdlov. Tornando-se um local estratégico para o desenvolvimento do governo soviético como um centro da indústria pesada, local escolhido para a construção do famoso Uralmash. Durante a Segunda Guerra Mundial, muitas instituições técnicas estatais e fábricas inteiras foram transferidas para Sverdlovsk de cidades afetadas pela guerra (principalmente Moscou), com muitos deles permanecendo após a vitória. As coleções do Museu Hermitage também foram parcialmente evacuadas de Leningrado para Sverdlovsk em julho de 1941 e lá permaneceram até outubro de 1945.</p>

                                    <p>Sverdlovsk foi palco de um dos momentos mais tensos durante a guerra Fria entre a Rússia e Estados Unidos: Em 1 de maio de 1960, um avião espião americano U-2, pilotado por Francis Gary Powers, sob o emprego da CIA, foi abatido sobre o Oblast de Sverdlovsk. Ele foi capturado, levado a julgamento, considerado culpado de espionagem e condenado a sete anos de trabalhos forçados. Em menos de um ano foi trocado por Rudolf Abel, um espião de alto escalão da KGB, que havia sido preso nos Estados Unidos em 1957.</p>

                                    <p>Durante a tentativa de golpe de 1991, Sverdlovsk, a cidade natal do presidente Boris Yeltsin, foi escolhida por ele como uma capital reserva temporária para a Federação Russa, no caso de Moscou se tornar perigosa demais para o governo russo. Yeltsin gozava de forte apoio popular na época. Pouco depois do fracasso do golpe e da subsequente dissolução da União Soviética, em 4 de setembro de 1991 a cidade recuperou seu nome histórico de Yekaterinburg. Entretanto, Sverdlovsk Oblast, do qual Yekaterinburg é o centro administrativo, manteve seu nome.</p>

                                      
                                    <h2>Como chegar:</h2>
                                   	<p><strong>De avião:</strong> Por dia chegam cerca de 20 aviões vindos apenas de Moscou no aeroporto de Yekaterinburg. Não faltam opções de horário para voss vindo de todo o país. Da capital do país para a cidade, a viagem demora pouco mais de duas horas sem escala e quatro horas com uma parada. As passagens não são caras e custam por volta de R$300 em baixa temporada. 
                                   	<br><strong>De trem:</strong> A estação de trem de Ecaterimburgo recebe cerca de 10 trens vindo de Moscou por dia. A viagem é bem longa e demora cerca de um dia e três horas para ser realizada. 
                                   
                                    <p>Leia Mais em: <a target="_blank" href="https://br.sputniknews.com/rostov-on-don-worldcup-2018/201711119814469-rostov-don-comida-bebida-foto-curiosidades-copa/ ">sputniknews.com</a></p>

                                    

                                    
                                    <p class="drop-cap">Em Yekaterinburg, pode-se encontrar diversos programas diferentes, como peças de teatro, balés, museus, igrejas e monumentos turísticos. Além disso, o local é conhecido pelas suas universidades e pelas bibliotecas que elas possuem.</p>

                                    <h2>Igreja do Sangue</h2>

                                    <p><img src="../_upload/extras/pontoYeka.jpg" alt="blog-image">
                                    <br><cite>Igreja do Sangue. Foto: <a target="_blank" href="http://www.goingrussia.com/portfolio-item/yekaterinburg/?lang=yekaterinburg&lang=fr">@goingrussia</a></cite></p>

                                    <p>Ela uma das maiores igrejas da Rússia. Foi constuida no local onde os membros da família imperial russa e vários de seus atendentes foram baleados pelos bolcheviques em julho de 1918, durante a guerra civil. O prédio onde ocorreu a execução, Ipatyev House, foi demolido em 1977. A igreja foi aberta no início dos anos 2000. O design fez uso da planta da casa de Ipatyev. Hoje, ela abriga uma exposição dedicada aos eventos de 1918 e organiza exposições de arte.</p>

                                    <h2>Galeria Ural Vision</h2>

                                    <p><img src="../_upload/extras/pontoyeka1.jpg" alt="blog-image">
                                    <br><cite>Galeria Ural Vision. Foto: <a target="_blank" href="https://media-cdn.tripadvisor.com/media/photo-w/05/61/44/a8/getlstd-property-photo.jpg">@tripadvisor</a></cite></p>

                                    <p>O local é voltado para a exibição de arte moderna. Localizada no coração de Ecaterinburgo, foi inaugurado em dezembro de 2012 pelos colecionadores Alla e Viktor Loshchenko. A galeria exibe apenas duas ou três exposições por ano. Mesmo voltado para artistas consagrados, alguns em início de carreira também usam esta galeria para exibir seus trabalhos, com algumas peças para venda.</p>

                                    <h2>Museu de ícones Nevyansk</h2>

                                    <p><img src="../_upload/extras/pontoyeka12.jpg" alt="blog-image">
                                    <br><cite>Museu de ícones Nevyansk. Foto: <a target="_blank" href="https://media-cdn.tripadvisor.com/media/photo-w/05/b1/a6/74/caption.jpg">@tripadvisor</a></cite></p>

                                    <p>O prefeito de Ekaterinburg, Yevgeny Roizman, reune artigos antigos e arte russa nesse museu. Os ícones Nevyansk ocupam a maior parte de sua coleção. Este é um tipo especial de itens, que apareceran no início do século XVIII. Eles são diferentes pela excelente qualidade da madeira, usada para dar uma quantidade de detalhes nas obras.Mais de 300 ícones são exibidos para os visitantes, nele que é o primeiro museu privado de artes da Rússia. Todas essas obras foram encontradas em Ecaterinburgo, Nevyansk, Nizhny Tagil e outras cidades da região dos Urais.</p>

                                     <h2>Museu de Belas Artes de Yekaterinburg</h2>

                                    <p><img src="../_upload/extras/pontoyeka2.jpg" alt="blog-image">
                                    <br><cite>Museu de Belas Artes de Yekaterinburg. Foto: <a target="_blank" href="https://www.codart.nl/guide/museums/ekaterinburg-museum-of-fine-arts/">@codart</a></cite></p>

                                    <p>Ele foi criado em 1936. Hoje em dia, tem dois ramos. Um está localizado no edifício reconstruído do hospital da fábrica ferroviária local e o outro na antiga casa do comerciante Bardygin. O museu possui coleções de artes da Europa Ocidental dos séculos XIV-XIX, e russas do século XVII até o início do século XX. A obra-prima do local é o pavilhão de ferro fundido de Kasli, que foi feito para a Exposição Internacional em Paris em 1900 e que está na lista da UNESCO de monumentos históricos e culturais. O museu oferece para os visitantes, além das exposições, aulas sobre diversos tipos de arte, noites musicais, concertos, palestras, passeios com autores consagrados de grandes obras e reuniões para debate de apreciadores artísticos.</p>

                                    <h2>Teatro de Balé do Estado de Yekaterinburg</h2>

                                    <p><img src="../_upload/extras/pontoyeka3.jpg" alt="blog-image">
                                    <br><cite>Teatro de Balé do Estado de Yekaterinburg. Foto: <a target="_blank" href="http://welcome2018.com/es/places/ekaterinburg/1479767/">@welcome2018</a></cite></p>

                                    <p>A história do teatro remonta à década de 1870, quando as empresas de ópera de Moscou eram muito populares e faziam shows grandiosos para a elite do país. Os conhecedores das artes locais conseguiram persuadir as autoridades locais a construir um teatro. A construção do local foi finalizado em 1912, mas sua inauguração foi apenas em 1914 com um espetáculo da ópera de Mikhail Glinka A Life for the Tsar. O teatro recebe os maiores maestros do país com uma boa frenquência. O lendário tenor Ivan Kozlovsky começou sua carreira aqui, o maestro Ariy Pazovsky, o diretor de ópera Alexander Titel, a artista Galina Gorchakova e muitos outros trabalharam no lugar. O local é famoso por performances baseadas em peças clássicas e versões de encenações e músicas modernas. O repertório inclui a ópera Satyagraha em sânscrito, música do minimalista americano Philip Glass, ou o balé de Romeu e Julieta encenado por Vyacheslav Samodurov, vencedor do prêmio Golden Mask.</p>


                                  


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

                                    <p class="drop-cap">Rica em tradições, a cidade dos Urais de Yekaterinburg é uma cidade com uma riqueza de interesse histórico e um passado fascinante, tornando-se um local ideal para comprar algumas lembranças para amigos e familiares durante a sua visita. Uma boa caçada pela cidade revelará uma grande variedade de lembranças para qualquer gosto.</p>

                                    <p>Existem apenas 3.000 tipos de minerais no mundo, e quase 1.000 deles podem ser encontrados nos Urais. Por esta razão, os produtos feitos a partir de pedras naturais, pedras semipreciosas e minerais representam a atividade principal dos urais e o número um em sua lista de lembranças distintas.</p>

                                    <p>Leia mais em: <a target="_blank" href="http://www.russia-direct.org/travel/yekaterinburg-souvenirs-what-take-back-urals-business-trip"></a>russia-direct.org</p>

                                                                        
                                    <h3>Moi Drug Olive</h3>

                                    <p><img src="../_upload/extras/restauranteyeka.jpg" alt="blog-image">
                                    <br><cite>Moi Drug Olive. Fonte: <a target="_blank" href="https://www.tripadvisor.com.br/Restaurant_Review-g298540-d6983575-Reviews-Moi_Drug_Olive-Yekaterinburg_Sverdlovsk_Oblast_Urals_District.html#photos;geo=298540&detail=6983575&aggregationId=101n">@tripadvisor</a></cite></p>


                                    <p>O restaurante parece uma casa simples, mas com uma comida deciliosa. Aberta desde o café da manhã, o local oferece diferentes paratos para todas as refeições e lanches. Lá pode-se encontrar pães para o café da manhã, risotos, pratos com carnes elaboradas e peixes deliciosos. No entanto, as porções são pequenas, mas todas tem um bom custo-benefício.</p>

                                     <p><strong>Endereço:</strong> Bankovskiy ln, 10, Ecaterimburgo 620014, Rússia
                                    <br><strong>Telefone: </strong> +7 343 376-34-34
                                    <br><strong>Site: </strong><a target="_blank" href="https://www.myfriendolivier.ru/?utm_source=tripadvisor&utm_medium=referral">myfriendolivier.ru</a></p>

                                    <h3>Panorama ASP</h3>

                                    <p><img src="../_upload/extras/restauranteyeka1.jpg" alt="blog-image">
                                    <br><cite>Panorama ASP. Fonte: <a target="_blank" href="http://www.visotsky-e.ru/ru/restorany/restoran-panorama-a-s-p.html">@visotsk-e.ru</a></cite></p>


                                    <p>Este restaurante é um banquete por conta própria. Não é fácil conseguir terminar uma porção individual. Um dos destaques do local é a vista ampla e limpa que tem de toda a cidade. Ela é considerada uma das mais bonitas de Yekaterinburg. Isso se dá porque o restaurante fica no 50º andar da torre do Centro Corporativo Vysotsky. Lá, pode-se ver o rio, os subúrbios e toda a cidade. A comida servida é uma mistura da culinária russa, do leste europeu e asiática. Ele é a melhor indicação para um jantar em família. O lugar é muito visado, por isso é aconselhável fazer uma reserva com uma semana de antecedência.</p>

                                     <p><strong>Endereço:</strong> Malysheva St., 51 | 50th Floor, Ecaterimburgo 620075, Rússia
                                    <br><strong>Telefone: </strong> +7 343 298-98-88
                                    <br><strong>Site: </strong><a target="_blank" href="https://ekaterinburg.regency.hyatt.com/en/hotel/home.html ">ekaterinburg.regency.hyatt.com</a></p>

                                    <h3>Hmeli Suneli</h3>

                                    <p><img src="../_upload/extras/restauranteyeka2.jpg" alt="blog-image">
                                    <br><cite>Hmeli Suneli. Fonte: <a target="_blank" href="https://www.inyourpocket.com/yekaterinburg/khmeli-suneli_154109v">@inyourpocket.com</a></cite></p>


                                    <p>Este restaurante é considerado o melhor da cozinha georgiana fora do país. O local é uma casa hospitaleira antiga e espaçosa onde os clientes podem se deliciar com especiarias e pratos típicos. A comida vem em porções generosas, incluindo vários tipos de khachapuri e khinkali, suluguni, kharcho, satsivi, chakapuli entre outros. Para beber, vinhos georgianos ou chacha podem ser servidos. Nos finais de semana, o local oferece aulas de culinária georgianas. O restaurante também tem um menu exclusivo para as crianças com sopa de frango com almôndegas, kebab e batatas fritas.</p>

                                     <p><strong>Endereço:</strong> Lenina St., 69/10, Ecaterimburgo 620075, Rússia
                                    <br><strong>Telefone: </strong> +7 343 350-63-18
                                    <br><strong>Site: </strong><a target="_blank" href="http://www.hmeli.ru">hmeli.ru</a></p>




                                    <h3>Onegin Dacha</h3> 

                                    <p>Sofisticado, é considerado um dos melhores da cidade. Localizado no centro de Rostov-on-Don, é dividido em dois diferentes ambientes: o "pomar de cereja" e o "jardim de inverno". No Onegin Dacha, além dos pratos tradicionais russos, a gastronomia possui acentos da culinária francesa. As especialidades da casa incluem a sopa de peixe, um coelho assado com creme de maça e uma salada Olivier com língua de vitela, camarões, caviar e alcaparras. Nos finais de semana, o jantar conta com jazz ao vivo. </p>

                                    <p><strong>Endereço:</strong> Chekhova Ave, 45B, Rostov-on-Don 
                                    <br><strong>Telefone: </strong> +7 863 201-80-00
                                    <br><strong>Site: </strong><a target="_blank" href="http://goodrestaurants.ru/">goodrestaurants.ru</a></p>

                                    <h3>Pauling</h3>
                                    <p>Restaurante de primeira classe, que está localizado no coração de Rostov em um dos edifícios mais antigos da cidade. O cardápio "Pauling" é, antes de mais nada, a cozinha nacional russa, complementada por pratos do eminente chef Eugene Mescheryakov que venceu uma competição internacional profissional. Os hóspedes podem encontrar um lugar para todos os gostos, o restaurante tem dois andares, uma varanda e um terraço aberto no verão e no outono. Possui, ainda, sala VIP para o cliente que deseja um local mais discreto e reservado.</p>

                                    <p><strong>Endereço:</strong> Bolshaya Sadovaya St., 91, Rostov-on-Don  
                                    <br><strong>Telefone: </strong> +7 863 263-24-32
                                    <br><strong>Site: </strong><a target="_blank" href="https://tomesto.ru/rostov/places/pauling">tomesto.ru</a></p>
					

                                    <p><strong>Catedral da Natividade da Santíssima Virgem Maria:</strong> É um dos cartões postais da cidade e considerada uma réplica em tamanho reduzido da Catedral de Cristo Salvador de Moscou.</p>

                                    <p><strong>Monumento de Alexander Pushkin:</strong> Considerado o maior poeta russo na época romântica, Alexander Pushkin foi homenageado com um monumento, localizado entre a Rua Pushkin e a Avenida Voroshilov.</p>

                                    <p><strong>Rua Pushkin:</strong> Conhecida pelo seu extenso calçadão com restaurantes, cafés, monumentos e jardins, lá estão localizados atrações como o Museu Memorial Sabina Spielrein, o Parque da Revolução de Outubro e o Parque Gorky.</p>

                                    <p><strong>H2O Aquapark:</strong> No verão, parque aquático pode ficar lotado. Crianças e adultos se divertem nas inúmeras piscinas, aquecidas e descobertas. Mas há também saunas e spa.</p>

                                    <p><strong>Rostov State Musical Theatre:</strong> É um dos maiores teatros do sul do país. Inaugurado em 1999, conta com cerca de 300 apresentações, festivais e shows todos os anos.</p>

                                    <p><strong>Mercado Central:</strong> Tanto para os moradores quanto para os turistas, o mercado central permite a compra de peixes e carnes frescas, legumes e frutas. Além disso, é um local para encontrar típicos alimentos da Rússia.</p>

                                    <p><strong>Parque Gorky:</strong> O parque, com um perímetro de 1,66 km, ocupa uma área de 12,2 hectares. Embora o plantio e a forma do solo em grande parte do parque pareçam naturais, na verdade ele é quase todo paisagístico. O parque contém extensas trilhas para caminhadas, sete fontes, rotundas, parques infantis, parques de diversões, cafés, pavilhões de xadrez e parques decorados com esculturas. As atrações cobertas incluem o observatório, o Monumento a Lenin e o Monumento da Grande Revolução de Outubro. Além disso, há galeria ao ar livre em que hospeda exposições de arte aplicada e obras de artistas de Rostov.</p>

                                    <p><strong>Khinkali</strong> é comido puro, ou com pimenta preta moída. O recheio de carne não é cozido quando o khinkali é montado, então, quando ele é cozido, os sucos da carne ficam presos dentro do bolinho. O khinkali é tipicamente consumido primeiro sugando os sucos enquanto se dá a primeira mordida, para evitar que o bolinho rebente. O topo, onde as pregas se encontram, é duro e não deve ser comido, mas descartado no prato. Na Geórgia, esse topo é chamado de kudi  (chapéu) ou k'uch'i (umbigo). Há uma etiqueta generalizada na região do Mar Negro para usar apenas as próprias mãos enquanto consome esses bolinhos; o uso de utensílios, como um garfo, não é considerado educado.</p>

                                    <p><img src="../_complementos/images/cidades/sochi/khinkali.jpg" alt="blog-image">
                                    <br><cite>khachapuri. Fonte: <a target="_blank" href="https://www.accorhotels.com">accorhotels.com</a></cite></p>

                                    <p><strong>Shashlik</strong> (que significa carne no espeto) é originalmente feito de cordeiro. Hoje em dia também é feito de carne de porco ou boi, dependendo das preferências locais e observâncias religiosas. Os espetos ou são enfiados apenas com carne, ou com pedaços alternados de carne, gordura e legumes, como pimentão, cebola, cogumelo e tomate.</p>

                                    <p><img src="../_complementos/images/cidades/sochi/shashlik.jpg" alt="blog-image">
                                    <br><cite>Shashlik. Fonte: <a target="_blank" href="https://www.accorhotels.com">accorhotels.com</a></cite></p>

                                    <p><strong>khachapuri</strong> é uma das primeiras iguarias que se oferecem a um convidado. É preparado com uma massa de farinha de trigo com água, leite, levedura e óleo, que é transformada numa bola e deixada a levedar, antes de ser tendida da forma e tamanho desejados. Para além das variantes individuais, existem as regionais, entre as quais a mais comum em forma de gôndola, normalmente servido com um ovo cru e manteiga.</p>



                                    <p><strong>Olivye:</strong> Localizado bem próximo à costa e a um museu, o restaurante Olivye tem um clima bem familiar e conta, além da culinária russa, com a italiana, francesa, europeia, europeia central, frutos do mar e ainda opções vegetarianas. Lá você consegue almoçar e jantar, encontra cadeiras para bebês e tem estacionamento disponível.</p>

                                    <p><strong>Che Harcho Restaurant:</strong> O local conta com mesas amplas e estofadas, além de almofadas, o que deixa bem confortável. A cozinha, além de russa, é europeia, caucasiana, georgiana e há ainda opções vegetarianas e veganas. Você pode fazer reservas para visitar esse restaurante e o preço médio gasto é entre R$ 30 e R$ 86. Lá você pode tomar café da manhã, almoçar e jantar e levar a família ou ir em grupos grandes. A vista também é muito bonita da cidade de Sochi nas mesas ao ar livre.</p>

                                    <p><strong>Belyye Nochi:</strong> Este restaurante é próximo ao primeiro aqui citado. O ambiente é também familiar e é bom para levar toda a família e um grupo grande de amigos. Você também encontra mesas ao ar livre, pode fazer reservas e levar a comida. A culinária é mais específica: russa e do leste europeu e lá você pode tomar café da manhã, almoçar ou jantar.</p>



                                    <p>O grupo AccorHotels possui 4 de seus hotéis na região de Sochi, com diárias que vão de R$ 157,00 (Mercure Rosa Khutor Hotel, distante 46 km do centro) a R$ 670,00 - Pullman Sochi Centre. Conta ainda com o Mercure Sochi Centre e o <strong>Swissôtel Resort Sochi Kamelia</strong> - Residência Oficial da Seleção Brasileira. Com cinco estrelas, a propriedade dispõe de piscina, spa, academia e restaurantes. À beira de uma praia privativa, o hotel fica dentro de um parque natural às margens do Mar Negro. Além do conforto, privacidade e alta infraestrutura, um dos motivos da escolha foi à logística: São apenas alguns metros de distância que separam os quartos até os dois campos de treinamento que serão utilizados pelo time de Tite. Há ainda uma questão inédita que envolve os familiares dos jogadores. Pela primeira vez, os atletas da seleção brasileira vão poder hospedar seus parentes no mesmo hotel que a equipe durante toda a Copa do Mundo. Prioridade, inclusive, exigida por ele.</p>


                                    <h2>Em Sochi ainda:</h2>

                                    <h3>Park Inn by Radisson Rosa Khutor </h3>

                                    <p>Hotel familiar no melhor resort de esqui do país. Localizado no centro do resort Rosa Khutor, a apenas 20 m do teleférico de Olympia. No inverno, o resort de Rosa Khutor oferece esqui tradicional, patinação, snowboard, passeios de trenó e tubulação e no verão, caminhadas escandinavas, cavalgadas maravilhosas, ciclismo ao longo das rotas cênicas, passeio de segway fascinante, velomobile e karting scooter, corda "Panda Park" a uma altitude de 1350 metros acima do nível do mar, rota ecológica "trilha de saúde", rafting, yoga ao ar livre. Todos os seus 211 quartos e suites possuem televisão LED, canais por satélite, Internet sem fios de alta velocidade gratuita, mini-bar e serviço 24 horas. O hotel conta ainda com cozinha gourmet e centro de fitness.</p>

                                    <p><strong>Site Oficial:</strong> <a target="_blank" href="https://www.parkinn.com/hotel-rosakhutor"> parkinn.com</a></p>

                                     <h3>Denart Hotel  </h3>

                                     <p><img src="../_complementos/images/cidades/sochi/denarthotel.jpg" alt="blog-image">
                                    <br><cite>Fonte: <a target="_blank" href="https://www.accorhotels.com/pt-br/hotel-A5C8-swissotel-resort-sochi-kamelia/index.shtml">accorhotels.com</a></cite></p>

                                    <p>é um novo hotel internacional premium localizado no centro da cidade, em um lugar aconchegante, a uma curta distância do mar, das principais atrações e de importantes instalações turísticas, administrativas e comerciais. O nome DENART engloba o núcleo da filosofia do hotel. Consiste em duas partes: DEN, que significa do latim o lugar do descanso a longo prazo e recuperação e ART, que significa art. Assim, a base da filosofia do hotel DENART é a arte de proporcionar um lugar para descanso e recuperação a longo prazo.</p>

                                    <p><strong>Site Oficial:</strong> <a target="_blank" href="http://www.denart-hotel.ru/"> denart-hotel.ru</a></p>


                                    <p><strong>Casa de campo de Stalin:</strong> Um dos pontos turísticos famosos de Sochi é a antiga casa de veraneio do ditador Josef Stalin. Ela fica em um bosque e é toda pintada de verde por fora. Lá dentro, quem visitar, encontrará objetos pessoais, estátua de cera, dentre outros objetos que te levarão numa viagem no tempo. Para entrar ou visitar com um guia, o turista pagará 150 e 300 rublos, respectivamente.</p>
                                    <p><strong>Dendrary Botanical Garden:</strong> Neste gigantesco jardim botânico você vai encontrar animais como papagaios e avestruzes transitando livremente. Ainda é possível ver fontes e estátuas, sendo a mais famosa é a da Branca de Neve com os sete anões. Sites especializados indicam visitar o local na primavera ou no verão, justamente no período da Copa 2018.</p>
                                    <p>Teatro Winter: Um dos edifícios mais belos de Sochi com um interior de deixar o queixo caído, assim pode-se definir o Teatro Winter. Ir até lá é um dos programas mais populares da Rússia e o visitante pode comprar o ingresso online, mas em russo.</p>
                                    <p><strong>Museu de Arte de Sochi:</strong> Por 100 rublos o turista pode ver seis mil obras de arte soviética e do leste europeu. Existem peças desde o período mitológico até o clássico e algumas esculturas ficam expostas ao ar livre. Sendo o local mais visitado da cidade.</p>



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

                                    <p class="drop-cap"> A Ekaterinburg Arena foi construída em 1953, mas foi totalmente reformada para sediar a Copa do Mundo. A fachada histórica foi mantida, mas o local foi todo remodelado e melhorado a um custo de R$ 742 milhões. O teto instalado é apenas para a competição, e será removido após o Mundial. O estádio terá capacidade para 44 mil pessoas, mas será reduzida para 25 mil após o torneio. Ele irá receber apenas quatro jogos da fase de grupos.</p>

                                    <p><strong>Capacidade: </strong>35.696 pessoas
                                    	<br><strong>Custo: </strong>R$ 1.443 bilhão</p>

                                    <h2>Jogos:</h2>

                                    <div id="grupos">
										<div class="grupoW">
											
											
											<ul id="jogos">
												
												<li style="border-top: 1px solid #ccc;">
													<div class="dataLocal"><strong>15 de junho de 2018, 9h &gt;</strong> Ecaterimburgo</div>
													<div class="confronto">
														<div class="equipeE">
															<div class="bandeira bandeira-EG"></div>
															<span class="nomePais">Egito</span>
															<span class="siglaPais">EGI</span>
														</div>
														<div class="versus">X</div>
														<div class="equipeD">
															<div class="bandeira bandeira-UY"></div>
															<span class="nomePais">Uruguai</span>
															<span class="siglaPais">URU</span>
														</div>
													</div>
												</li>
																			

												<li style="border-top: 1px solid #ccc;">
													<div class="dataLocal"><strong>21 de junho de 2018, 9h &gt;</strong> Ecaterimburgo</div>
													<div class="confronto">
														<div class="equipeE">
															<div class="bandeira bandeira-FR"></div>
															<span class="nomePais">França</span>
															<span class="siglaPais">FRA</span>
														</div>
														<div class="versus">X</div>
														<div class="equipeD">
															<div class="bandeira bandeira-PE"></div>
															<span class="nomePais">Peru</span>
															<span class="siglaPais">PER</span>
														</div>
													</div>
												</li>

												<li style="border-top: 1px solid #ccc;">
													<div class="dataLocal"><strong>27 de junho de 2018, 11h &gt;</strong> Ecaterimburgo</div>
													<div class="confronto">
														<div class="equipeE">
															<div class="bandeira bandeira-MX"></div>
															<span class="nomePais">México</span>
															<span class="siglaPais">MEX</span>
														</div>
														<div class="versus">X</div>
														<div class="equipeD">
															<div class="bandeira bandeira-SE"></div>
															<span class="nomePais">Suécia</span>
															<span class="siglaPais">SUE</span>
														</div>
													</div>
												</li>
												
												<li style="border-top: 1px solid #ccc;">
													<div class="dataLocal"><strong>24 de junho de 2018, 12h &gt;</strong> Ecaterimburgo</div>
													<div class="confronto">
														<div class="equipeE">
															<div class="bandeira bandeira-JP"></div>
															<span class="nomePais">Japão</span>
															<span class="siglaPais">JAP</span>
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

                                   <h2>Clube da cidade</h2>

                                    <p>	O FC Ural é o principal clube da cidade e o único profissional. Atualmente está na primeira divisão da liga russa e deve terminar o torneio no meio da tabela. Ele foi fundado em 1930, sendo um dos clubes mais antigos da região, mas já mudou várias vezes de nome durante sua história. Sua melhor colocação no campeonato nacional foi o oitavo lugar, conquistado em 1993 e 1995. Na temporada passada foi finalista da Copa da Rússia, perdendo para o Lokomotiv Moskou. Essa foi a sua melhor campanha o torneio.</p>

                                    <p>Leia Mais em: <a target="_blank" href="http://esporte.ig.com.br/futebol/copa-do-mundo-2018/2018-02-16/estadios-da-copa-sochi.html">esporte.ig.com.br</a></p>


                                    
                                    <p>A Arena Volgograd, localizada ao lado do Memorial de Mamayev Kurgan, um dos principais pontos turísticos da cidade, e às margens do Rio Volga, foi construída em 1958, no lugar de um depósito de óleo e, espera-se que sua reinauguração seja mais uma conquista depois de completamente reformado para a disputa da Copa do Mundo. Com capacidade para 45.568 espectadores e a um custo de R$ 952 milhões será palco dos seguintes jogos:</p>

                                    <h3>Jogos:</h3>

									<div id="grupos">
										<div class="grupoW">
											
											
											<ul id="jogos">
												<li style="border-top: 1px solid #ccc;">
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
                                
                                  <input type="text" name="comment_name" id="comment_name" class="form-control hidden" value="<?php echo $_SESSION['nome']; ?>" placeholder="Enter Name" />

                                  <input type="text" name="imagem" id="imagem" class="form-control hidden" value="<?php echo $_SESSION['imagem']; ?>" placeholder="Enter Name" />

                                  <input type="text" name="postagem_id" id="postagem_id" class="form-control hidden" value="<?php echo ($id)?>"  />

                                  <input type="text" name="user_id" id="user_id" class="form-control hidden" value="<?php echo $_SESSION['id']; ?>"  />

                                  <p class="comment-form-comment">
                                    <textarea id="comment_content" name="comment_content" rows="5" placeholder="Entre com seu comentário" 
                                    <?php if(!isset($_SESSION['email']) && (!isset($_SESSION['senha']))){ echo 'class =hidden';}
                                    ?> aria-required="true"></textarea>
                                  </p>
                                  
                                  <p class="form-submit">
                                    <input type="hidden" name="comment_id" id="comment_id" value="0"/>
     								<input type="submit" name="submit" id="submit" class="btn button primary <?php if(!isset($_SESSION['email']) && (!isset($_SESSION['senha']))){ echo ' hidden';}
                                    ?> " value="Postar Comentário" /><span id="comment_message"></span>
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
		<script src="../_complementos/js/script.js"></script>
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
   data: 'id='+ $('#postagem_id').val(),
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
