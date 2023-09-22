<?php

session_start();

include('admin/scripts/connection_db.php');

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Manhattan Café Theatro - Teste Prática Internet</title>


  <base href="https://shoppingoutlet.com.br/demo/manhattan2/">

  <link rel="icon" type="image/png"  href="assets/img/favicon.png">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/main.css?v=4">

  <script>
    function linkShare(titulo, descricao, link){
      if (navigator.share !== undefined) {
        navigator.share({
          title: titulo ,
          text: descricao,
          url: link,
        })
        .then(() => console.log('Successful share'))
        .catch((error) => console.log('Error sharing', error));
      }
    }

    window.addEventListener("DOMContentLoaded", function(event) {
      const listaBotaoCompartilhar = document.querySelectorAll('.botaoCompartilhar');
      if(listaBotaoCompartilhar.length > 0) {
        for (var i = listaBotaoCompartilhar.length - 1; i >= 0; i--) {
          listaBotaoCompartilhar[i].addEventListener('click', function(event) {
              event.stopPropagation();
              event.preventDefault();

              let titulo = this.dataset.titulo;
              let desc = this.dataset.desc;
              let link = this.dataset.link;

              linkShare(titulo, desc, link);
              
          });
        }

      }

    });
  </script>
  
<!-- -->
</head>
<body  class="anime-scroll">

<div class="bg-topo text-center" data-animate="top" data-delay="1" id="home">
      <img src="assets/img/bg-topo.png" class="img-fluid" alt >
</div>
<!-- /.bg-topo -->


<header class="navegation" data-animate="top" data-delay="1">

<script>
  // fix menu position after load content
  window.addEventListener("DOMContentLoaded", (event) => {
    setTimeout(function() {
      const header = document.querySelector('.navegation');
      header.classList.remove('animate');
      header.removeAttribute('data-animate');
      header.removeAttribute('data-delay');
    }, 1000);
   
  });
</script>




<nav class="navbar navbar-expand-xl">
  <div class="container container--topo">
    <!-- <div class="d-block d-lg-none" style="width: 56px">
       <a href="#" class="btn btn-outline-secondary rounded-pill btn-sm mx-2 mt-3"><svg xmlns="http://www.w3.org/2000/svg" fill="#12b2a3" width="15" height="15" viewBox="0 0 24 24"><path d="M18 10v-4c0-3.313-2.687-6-6-6s-6 2.687-6 6v4h-3v14h18v-14h-3zm-5 7.723v2.277h-2v-2.277c-.595-.347-1-.984-1-1.723 0-1.104.896-2 2-2s2 .896 2 2c0 .738-.404 1.376-1 1.723zm-5-7.723v-4c0-2.206 1.794-4 4-4 2.205 0 4 1.794 4 4v4h-8z"></path></svg> </a>
    </div> -->

    <a class="navbar-brand" href="#home">

          <img src="assets/img/manhattan-cafe-theatro.png"  alt="Manhattan Café Theatro">
      
    </a>
    
    <button class="navbar-toggler botaoAbrir mt-1" type="button"  data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
      <svg fill="#fff" width="44" height="44" viewBox="0 0 24 24" stroke-miterlimit="2" xmlns="http://www.w3.org/2000/svg"><path d="m22 16.75c0-.414-.336-.75-.75-.75h-18.5c-.414 0-.75.336-.75.75s.336.75.75.75h18.5c.414 0 .75-.336.75-.75zm0-5c0-.414-.336-.75-.75-.75h-18.5c-.414 0-.75.336-.75.75s.336.75.75.75h18.5c.414 0 .75-.336.75-.75zm0-5c0-.414-.336-.75-.75-.75h-18.5c-.414 0-.75.336-.75.75s.336.75.75.75h18.5c.414 0 .75-.336.75-.75z" fill-rule="nonzero"></path></svg>
    </button>

    <div class="offcanvas offcanvas-start"  tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
      <div class="offcanvas-header">
        <span class="offcanvas-title" id="offcanvasNavbarLabel"><span style="visibility: hidden;">Offcanvas</span></span>
        <button type="button" class="btn-close botaoFechar" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link botaoFechar" aria-current="page" href="#home">Home</a>
          </li>                
                                                 
          <li class="nav-item">
            <a class="nav-link botaoFechar" href="#programacao">Programação</a>
          </li>
          <li class="nav-item">
            <a class="nav-link botaoFechar" href="#descontos">Descontos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link botaoFechar" href="#hall-fama">Hall da Fama</a>
          </li> 
          
          
           <li class="nav-item">
            <a class="nav-link botaoFechar" href="#gastronomia">Gastronomia</a>
          </li>



          <li class="nav-item">
            <a class="nav-link botaoFechar" href="javascript:;" data-bs-toggle="modal" data-bs-target="#imprensa">Imprensa</a>
          </li>

           <li class="nav-item">
            <a class="nav-link botaoFechar" href="#contato">Contato</a>
          </li>
                      

			        </ul>
      
      </div>
    </div>




  </div>
</nav>


		</header>
		<!-- /.navegation -->

<main class="main mb-0">

		<div data-animate="fade" data-delay="3">

	<!-- Slider main container -->
	<div class="swiper swiper1">
	  <!-- Additional required wrapper -->
	  <div class="swiper-wrapper">

	    <!-- Slides -->
	    <div class="swiper-slide">
			<div class="row justify-content-center">
				<div class="col-lg-7 col-md-9 px-lg-4 px-5 text-center slide-item">
					<img src="assets/img/painel/bem-vindo.png" class="img-fluid" alt="">
				</div>
			</div>
	    </div>

	    <!-- Slides -->
	    <div class="swiper-slide">
			<div class="row justify-content-center">
				<div class="col-lg-7 col-md-9 px-lg-4 px-5 text-center slide-item">
					  <img src="assets/img/painel/diversao-gastronomia.png" class="img-fluid" alt="">
				</div>
			</div>
	    </div>


		<!-- Slides -->
	    <div class="swiper-slide">
			<div class="row justify-content-center">
				<div class="col-lg-7 col-md-9 px-lg-4 px-5 text-center slide-item">
					<img src="assets/img/painel/manhattan-cozinha-show.png" class="img-fluid" alt="">
				</div>
			</div>
	    </div>



	  </div>

	  <!-- If we need pagination -->
	  <div class="swiper-pagination swiper-pagination-swiper1"></div>

	  <!-- If we need navigation buttons -->
	  <div class="swiper-button-prev swiper-button-prev-swiper1"></div>
	  <div class="swiper-button-next swiper-button-next-swiper1"></div>

	  <!-- If we need scrollbar -->
	  <!-- <div class="swiper-scrollbar"></div> -->
	</div>

	</div>

	
		<div class="text-center py-5" data-animate="zoom" data-delay="3">
		<p>
			<a href="https://bit.ly/1t9AE12" target="_blank"><img src="assets/img/icon-trip.png" width="40" class="my-1 mx-1" alt="TripAdvisor"></a>
			<a href="https://www.youtube.com/user/Ronaldmenezesjunior/" target="_blank"><img src="assets/img/icon-youtube.png" width="40" class="my-1 mx-1" alt="Youtube"></a>
			<a href="https://www.facebook.com/manhattanrecife" target="_blank"><img src="assets/img/icon-facebook.png" width="40" class="my-1 mx-1" alt="Facebook"></a>
			<a href="https://instagram.com/manhattancafetheatro" target="_blank"><img src="assets/img/icon-instagram.png" width="40" class="my-1 mx-1" alt="Instagram"></a>
			<a href="https://api.whatsapp.com/send?phone=5581988884818&text=Atendimento%20por%20Whatsapp.%20Pressione%20Enviar%20para%20iniciar." target="_blank"><img src="assets/img/icon-whatsapp.png" width="40" class="my-1 mx-1" alt="Whatsapp"></a>
		</p>
	</div>
	
		<section class="programacao pb-4 mb-lg-5"  id="programacao">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 text-center mb-4 mb-lg-5" data-animate="zoom" data-delay="3">
					<h2 class="text-uppercase fw-bold">Programação</h2>

					<hr class="mx-auto" />

					<p class="programacao__subtitulo"><span class="text-white">Na multidão você é apenas um fã,</span> <br>
						<span class="text-warning">no manhattan você faz parte do show!</span></p>

					
				</div>
			</div>


			<div class="row">
				<div class="col-lg-12 mb-5" data-animate="zoom" data-delay="1">

<!-- Slider main container -->
<div class="swiper swiper-programacao">
	<div class="swiper-shadow1"></div>
	<div class="swiper-shadow2"></div>
	<!-- Additional required wrapper -->
	<div class="swiper-wrapper">

	<!-- Slides -->
	<?php

		$events = mysqli_query($conn, 'SELECT * FROM events');

		while ($dados = mysqli_fetch_array($events)) {

		echo '<div class="swiper-slide">';
		echo '	<div class="swiper-programacao__item px-4 px-md-0 text-center">';
		list($ano, $mes, $dia) = explode('-', $dados['date']);
		echo '		<h3><span class="text-warning">'.$dia.' - '.$mes.'</span> <br /> <span class="programacao__hora"><span class="text-white">A partir das</span> <span class="text-warning">'.$dados['hour'].'h</span></span></h3>';
		echo '		<a href="https://www.nocciolli.com.br/presentation/manhattan/vendas-online/comprar">';
		echo '			<img src="https://www.nocciolli.com.br/presentation/manhattan/assets/upload_img/'.$dados['image'].'" class="img-fluid rounded-3 border border-dark mb-2" alt="">';
		echo '		</a>';		
		echo '		<a href="vendas-online/comprar/?id='.$dados['idevent'].'" class="btn btn-outline-primary btn-lg w-100 mb-2">COMPRAR</a>';
		echo '		<a href="#" data-titulo="Show no Manhattan: '.$dados['event'].' - '.$dia.' '.$mes.'" data-desc="Show no Manhattan: '.$dados['event'].' - '.$dia.' '.$mes.' // Atrações: '.$dados['attraction'].'. // Mais informações:" data-link="https://www.nocciolli.com.br/presentation/manhattan/vendas-online/comprar" class="botaoCompartilhar text-white text-decoration-none" ><img src="assets/img/icon-share.png" width="20" class="me-1" alt> Compartilhe com um amigo</a>';
		echo '	</div>';
		echo '</div>';

		}
		?>
	</div>

	<!-- If we need pagination -->
	<!-- <div class="swiper-pagination swiper-pagination-programacao"></div> -->

	<!-- If we need navigation buttons -->
	<div class="swiper-button-prev swiper-button-prev-programacao"></div>
	<div class="swiper-button-next swiper-button-next-programacao"></div>

	<!-- If we need scrollbar -->
	<!-- <div class="swiper-scrollbar"></div> -->
  </div>




					


				</div>
			</div>

			<div class="row">
				<div class="col-lg-12 text-center">
					<p>
						<a href="programacao" class="text-decoration-none"><span class="text-white">PROGRAMAÇÃO COMPLETA</span> <span class="text-warning">&raquo;</span></a>
					</p>
				</div>
			</div>
		</div>
	</section>
	

		<section class="descontos pt-3 mb-lg-5" id="descontos" data-animate="top" data-delay="3">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 text-center">
					<h2 class="text-uppercase fw-bold">Descontos</h2>


				</div>
			</div>
	
		</div>	
		
		<div class="descontos__conteudo py-lg-5 py-4">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 text-center">
						<p class="descontos__subtitulo text-warning">Não perca tempo, solicite seu desconto agora mesmo.</p>
					</div>
				</div>

						
				<div class="row">
					<div class="col-lg-8 offset-lg-2 py-lg-4 mb-lg-4">
						<ul class="descontos__lista">
							<li>
								<p class="mb-2 mb-lg-0">
									<a href="https://wa.me/558198888481?text=Desconto:%2020%20MAIO%20-%20SÃO%20JOÃO MANHATTAN.%20Pressione%20Enviar%20para%20iniciar" target="_blank" class="text-white text-decoration-none"><svg xmlns="http://www.w3.org/2000/svg" fill="#fff" width="10" height="10" viewBox="0 0 24 24"><path d="M21 12l-18 12v-24z"/></svg> <time class="text-warning">20 MAIO</time> - SÃO JOÃO MANHATTAN</a>
								</p>
								<a  href="https://wa.me/558198888481?text=Desconto:%2020%20MAIO%20-%20SÃO%20JOÃO MANHATTAN.%20Pressione%20Enviar%20para%20iniciar" target="_blank" class="btn  btn-outline-secondary">Solicitar Descontar</a>
							</li>
							<li>
								<p class="mb-2 mb-lg-0">
									<a href="https://wa.me/558198888481?text=Desconto:%2026 MAIO - ADILSON RAMOS.%20Pressione%20Enviar%20para%20iniciar" target="_blank" class="text-white text-decoration-none"><svg xmlns="http://www.w3.org/2000/svg" fill="#fff" width="10" height="10" viewBox="0 0 24 24"><path d="M21 12l-18 12v-24z"/></svg> <time class="text-warning">26 MAIO</time> - ADILSON  RAMOS</a>
								</p>
								<a href="https://wa.me/558198888481?text=Desconto:%2026 MAIO - ADILSON RAMOS.%20Pressione%20Enviar%20para%20iniciar" target="_blank" class="btn  btn-outline-secondary">Solicitar Descontar</a>
							</li>
							<li>
								<p class="mb-2 mb-lg-0">
									<a href="https://wa.me/558198888481?text=Desconto:%2003 JUNHO - BULINDO NO ARRAIÁ.%20Pressione%20Enviar%20para%20iniciar" target="_blank" class="text-white text-decoration-none"><svg xmlns="http://www.w3.org/2000/svg" fill="#fff" width="10" height="10" viewBox="0 0 24 24"><path d="M21 12l-18 12v-24z"/></svg> <time class="text-warning">03 JUNHO</time> - BULINDO NO ARRAIÁ</a>
								</p>
								<a href="https://wa.me/558198888481?text=Desconto:%2003 JUNHO - BULINDO NO ARRAIÁ.%20Pressione%20Enviar%20para%20iniciar" target="_blank" class="btn  btn-outline-secondary">Solicitar Descontar</a>
							</li>
							<li>
								<p class="mb-2 mb-lg-0">
									<a href="https://wa.me/558198888481?text=Desconto:%2012 JUNHO - DIA DOS NAMORADOS.%20Pressione%20Enviar%20para%20iniciar" target="_blank" class="text-white text-decoration-none"><svg xmlns="http://www.w3.org/2000/svg" fill="#fff" width="10" height="10" viewBox="0 0 24 24"><path d="M21 12l-18 12v-24z"/></svg> <time class="text-warning">12 JUNHO</time> - DIA DOS NAMORADOS</a>
								</p>
								<a href="https://wa.me/558198888481?text=Desconto:%2012 JUNHO - DIA DOS NAMORADOS.%20Pressione%20Enviar%20para%20iniciar" target="_blank" class="btn  btn-outline-secondary">Solicitar Descontar</a>
							</li>
						</ul>

					</div>
				</div>


				<div class="row">
					<div class="col-lg-12 text-center">
						<p>
							<a href="javascript:;" data-bs-toggle="modal" data-bs-target="#modal_descontos" class="text-decoration-none"><span class="text-white text-uppercase">Lista completa de descontos</span> <span class="text-warning">&raquo;</span></a>
						</p>
					</div>
				</div>

			</div>
		</div>
	</section>
	

		<section class="eventos py-5 mt-4 mb-lg-5" data-animate="top" data-delay="3" id="eventos">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-4 col-sm-6">
					<div class="mb-4 mb-md-0"><img src="assets/img/bg-evento1.jpg" class="img-fluid w-100" alt ></div>
				</div>
				<div class="col-md-4 col-sm-6">
					<div class="px-3 px-md-0">
						<p><a href="javascript:;" data-bs-toggle="modal" data-bs-target="#modal_eventos"><img src="assets/img/titulo-evento.png" class="img-fluid" alt="Faça seu Evento aqui!" ></a></p>

						<p>
							<a href="javascript:;" data-bs-toggle="modal" data-bs-target="#modal_eventos" class="text-decoration-none"><span class="text-white">TEMOS OS MELHORES PACOTES PARA O SEU MELHOR DIA </span> <span class="text-warning">&raquo;</span></a>
						</p>
					</div>
				</div>
				<div class="col-md-4 d-none d-md-block">
					<img src="assets/img/bg-evento2.jpg" class="img-fluid w-100" alt >
				</div>
			</div>
		</div>
	</section>
	

		<section class="hallfama pt-2" id="hall-fama" data-animate="top" data-delay="3">

		<div class="container">
			<div class="row">
				<div class="col-lg-12 text-center">
					<h2 class="text-uppercase fw-bold">Hall Da Fama</h2>


				</div>
			</div>
	
		</div>	
		
		<div class="hallfama__conteudo py-lg-5 pt-5 pb-2" data-animate="zoom" data-delay="3">
			<div class="container">

				<div class="row">
					<div class="col-lg-12 pt-lg-5">

<!-- Slider main container -->
<div class="swiper swiper-hallfama">

	<!-- Additional required wrapper -->
	<div class="swiper-wrapper">

	  <!-- Slides -->
	  <div class="swiper-slide">
		  <div class="swiper-hallfama__item text-center">
			<figure>
				<a href="#">
					<img src="assets/img/hallfama/elymar-santos.jpg" class="img-fluid rounded-3 mb-2" alt="Elymar Santos">
				</a>
				<figcaption>
					<strong>Elymar Santos</strong>
				</figcaption>
			</figure>		

		  </div>
	  </div>


	  <!-- Slides -->
	  <div class="swiper-slide">
		<div class="swiper-hallfama__item text-center">
		  <figure>
			  <a href="#">
				  <img src="assets/img/hallfama/alcione.jpg" class="img-fluid rounded-3 mb-2" alt="Alcione">
			  </a>
			  <figcaption>
				  <strong>Alcione</strong>
			  </figcaption>
		  </figure>		

		</div>
	</div>


	<!-- Slides -->
	<div class="swiper-slide">
		<div class="swiper-hallfama__item text-center">
		  <figure>
			  <a href="#">
				  <img src="assets/img/hallfama/di-light.jpg" class="img-fluid rounded-3 mb-2" alt="Di Light">
			  </a>
			  <figcaption>
				  <strong>Di Light</strong>
			  </figcaption>
		  </figure>		

		</div>
	</div>


	<!-- Slides -->
	<div class="swiper-slide">
		<div class="swiper-hallfama__item text-center">
		  <figure>
			  <a href="#">
				  <img src="assets/img/hallfama/billy-paul.jpg" class="img-fluid rounded-3 mb-2" alt="Billy Paul">
			  </a>
			  <figcaption>
				  <strong>Billy Paul</strong>
			  </figcaption>
		  </figure>		

		</div>
	</div>



	</div>

	<!-- If we need pagination -->
	<!-- <div class="swiper-pagination swiper-pagination-hallfama"></div> -->

	<!-- If we need navigation buttons -->
	<div class="swiper-button-prev swiper-button-prev-hallfama"></div>
	<div class="swiper-button-next swiper-button-next-hallfama"></div>

	<!-- If we need scrollbar -->
	<!-- <div class="swiper-scrollbar"></div> -->
  </div>



						
					</div>
				</div>


	
			</div>
		</div>

	</section>
	

		<section class="gastronomia  pb-5" id="gastronomia">
		<header class="gastronomia__titulo text-center py-lg-5 py-4 mb-4 mb-lg-5">
			<div class="container">
				<div class="row">
					<div class="col-lg-12" data-animate="top" data-delay="3">
						<h2 class="text-warning">DIVERSÃO E GASTRONOMIA</h2>
						<p class="text-white fs-5 mb-0">em um só lugar</p>
					</div>
				</div>
			</div>
		</header>

		<div class="container">
			<div class="row align-items-center">
				<div class="col-md-6 order-lg-2 mb-4 mb-lg-0" data-animate="right" data-delay="3">
					<p class="px-5 px-lg-0"><img src="assets/img/gastronomia-manhattan-cafe-theatro.png" class="img-fluid" alt="Diversão e Gastronomia"></p>
				</div>

				<div class="col-md-6 text-center text-md-start" data-animate="left" data-delay="1">
					<h3 class="gastronomia__texto mt-lg-5 mb-4">  <span class="d-inline-block cor-preto rounded-2 bg-warning py-2 px-3">NO MANHATTAN,</span> <br/>	<span class="text-warning">a nossa cozinha</span> <br /> <span class="d-inline-block text-white">também é show!</span></h3>
				</div>

			</div>
		</div>
	</section>

	

			<section class="contato py-lg-5 py-4" id="contato" data-animate="top" data-delay="3">
			<div class="container">
				<div class="row gx-0">
					<div class="col-lg-5 order-lg-2">
						<header class="text-center  py-md-4 pt-4">
						<h2 class="text-white fs-1">ENTRE EM CONTATO</h2>
						<p class="text-warning">Respondemos com a maior brevidade</p>
					</header>


						
<form action="https://www.locawebsite.com/freeform.php" method="POST" class="contato__form p-md-5 p-4"  name="script_contato">
	<input type="hidden" name="titulo" value="">
	<input type="hidden" name="assunto" value="Fale Conosco - Manhattan Café Theatro">
	<input  type="hidden" name="redirect" value="back">
	<input type="hidden" name="charset" value="utf-8">
	<input type="hidden" name="to" value="contato@manhattanbar.com.br">
	
	<div class="row">
		<div class="col-md-12">
			<div class="form-group mb-4">
				<label  for="nome">Nome e Sobrenome:</label>
				<input type="text" name="nome" id="nome" class="form-control" required />
			</div><!-- form-group -->
		</div><!-- col-md-12 -->

		<div class="col-md-12">
			<div class="form-group mb-4">
				<label  for="nome">Telefone:</label>
				<input type="text" name="nome" id="nome" class="form-control" required />
			</div><!-- form-group -->
		</div><!-- col-md-12 -->
	
		<div class="col-md-12">
			<div class="form-group mb-4">
				<label  for="from">E-mail:</label>
				<input type="email" name='from' id="from" class="form-control" required />
			</div><!-- form-group -->
		</div><!-- col-md-12 -->
	
	
		<div class="col-md-12">
			<div class="form-group mb-4">
				<label  for="estados">Assunto:</label>
				<select name="assunto" id="assunto" class="form-control">
					
					<option value="">Selecione</option>

<option value="Trabalhe conosco">Trabalhe conosco </option>
<option value="Duvidas">Duvidas </option>
<option value="Sugestões">Sugestões </option>
<option value="Parceiros">Parceiros </option>
<option value="Contratações para show">Contratações para show </option>

					</select>
			</div><!-- form-group -->
		</div><!-- col-md-12 -->
	
		
		<div class="col-md-12">
			<div class="form-group mb-4">
				<label  for="mensagem">Sua Mensagem:</label>
				<textarea name="mensagem" class="form-control" id="mensagem" required rows="5"></textarea>
			</div><!-- form-group -->
		</div><!-- col-md-12 -->
	
						
						<div class="col-md-12">
							<div class="form-group mb-4">
							  <label for="termos-privacidade">
							  <input type="checkbox" name="termos-privacidade" id="termos-privacidade" required="">
							   Concordo com os <a href="termo-de-privacidade" target="_blank"><u>termos de privacidade</u></a></label>
							</div>
						</div>
				
						<div class="col-md-8">
			
						</div>
	
						<div class="col-md-4 text-end">
							<input type="submit" value="Enviar"  class="btn btn-secondary btn-lg" />
						</div>
					</div>
			</form>


					</div>
					<div class="col-lg-5 offset-lg-1 d-flex flex-column">
						<header class="text-center py-md-4 pt-4">
						<h2 class="text-white fs-1">COMO CHEGAR</h2>
						<address class="text-warning">Rua Francisco da Cunha, nº 881 - Boa Viagem, Recife </address>
					</header>


					<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15799.570581782038!2d-34.8950107!3d-8.1124126!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7ab1faf342d2843%3A0x83af10d8e5b62c2d!2sManhattan%20Caf%C3%A9%20Theatro!5e0!3m2!1spt-BR!2sbr!4v1692044815642!5m2!1spt-BR!2sbr" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
					</div>
				</div>
			</div>
		</section>
		



	

</main>





<footer class="footer">
	<div class="container">
		<div class="row py-4 justify-content-center align-items-center">
      <div class="col-lg-4 text-lg-end text-center">
        <p>
        Todos os direitos reservados 2023 © <br>
        CNPJ: 297.365.75/0001-59
        </p>
      </div>
			<div class="col-lg-2 text-center mb-4 mb-lg-0">
				<a href="./">
					<img src="assets/img/logo-rodape.png" class="img-fluid" alt="Green Trade Import & Export" />
				</a>
			</div>

      <div class="col-lg-4 text-lg-start text-center">
        <p>
        Reservas: <a href="tel:81988884818" class="text-warning text-decoration-none">81 9.8888-4818</a> <br>
        <a href="mailto:contato@manhattanbar.com.br" class="text-white text-decoration-none">contato@manhattanbar.com.br</a>
        </p>
      </div>


		</div>
	</div>


</footer>



<!-- Modal IMPRENSA -->
<div class="modal fade" id="imprensa" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-lg modal-dialog-scrollable">
	  <div class="modal-content">
		<div class="modal-header">
		  <h1 class="modal-title fs-5" id="staticBackdropLabel">Imprensa</h1>
		  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
		</div>
		<div class="modal-body">
		  <p>
			Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere nulla veritatis sequi nostrum, minus asperiores sit quia laborum cum qui debitis, alias aut non quos commodi quam et voluptates rerum.
		  </p>
		</div>
		<!-- <div class="modal-footer">
		  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
		  <button type="button" class="btn btn-primary">Understood</button>
		</div> -->
	  </div>
	</div>
  </div>
  <!-- Modal IMPRENSA -->

<!-- Modal DESCONTOS -->
<div class="modal fade" id="modal_descontos" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-lg modal-dialog-scrollable">
	  <div class="modal-content">
		<div class="modal-header">
		  <h1 class="modal-title fs-5" id="staticBackdropLabel">Descontos</h1>
		  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
		</div>
		<div class="modal-body">
			<ul class="descontos__lista">
				<li>
					<p class="mb-2 mb-lg-0">
						<a href="https://wa.me/558198888481?text=Desconto:%2020%20MAIO%20-%20SÃO%20JOÃO MANHATTAN.%20Pressione%20Enviar%20para%20iniciar" target="_blank" class="text-white text-decoration-none"><svg xmlns="http://www.w3.org/2000/svg" fill="#fff" width="10" height="10" viewBox="0 0 24 24"><path d="M21 12l-18 12v-24z"/></svg> <time class="text-warning">20 MAIO</time> - SÃO JOÃO MANHATTAN</a>
					</p>
					<a  href="https://wa.me/558198888481?text=Desconto:%2020%20MAIO%20-%20SÃO%20JOÃO MANHATTAN.%20Pressione%20Enviar%20para%20iniciar" target="_blank" class="btn  btn-outline-secondary">Solicitar Descontar</a>
				</li>
				<li>
					<p class="mb-2 mb-lg-0">
						<a href="https://wa.me/558198888481?text=Desconto:%2026 MAIO - ADILSON RAMOS.%20Pressione%20Enviar%20para%20iniciar" target="_blank" class="text-white text-decoration-none"><svg xmlns="http://www.w3.org/2000/svg" fill="#fff" width="10" height="10" viewBox="0 0 24 24"><path d="M21 12l-18 12v-24z"/></svg> <time class="text-warning">26 MAIO</time> - ADILSON  RAMOS</a>
					</p>
					<a href="https://wa.me/558198888481?text=Desconto:%2026 MAIO - ADILSON RAMOS.%20Pressione%20Enviar%20para%20iniciar" target="_blank" class="btn  btn-outline-secondary">Solicitar Descontar</a>
				</li>
				<li>
					<p class="mb-2 mb-lg-0">
						<a href="https://wa.me/558198888481?text=Desconto:%2003 JUNHO - BULINDO NO ARRAIÁ.%20Pressione%20Enviar%20para%20iniciar" target="_blank" class="text-white text-decoration-none"><svg xmlns="http://www.w3.org/2000/svg" fill="#fff" width="10" height="10" viewBox="0 0 24 24"><path d="M21 12l-18 12v-24z"/></svg> <time class="text-warning">03 JUNHO</time> - BULINDO NO ARRAIÁ</a>
					</p>
					<a href="https://wa.me/558198888481?text=Desconto:%2003 JUNHO - BULINDO NO ARRAIÁ.%20Pressione%20Enviar%20para%20iniciar" target="_blank" class="btn  btn-outline-secondary">Solicitar Descontar</a>
				</li>
				<li>
					<p class="mb-2 mb-lg-0">
						<a href="https://wa.me/558198888481?text=Desconto:%2012 JUNHO - DIA DOS NAMORADOS.%20Pressione%20Enviar%20para%20iniciar" target="_blank" class="text-white text-decoration-none"><svg xmlns="http://www.w3.org/2000/svg" fill="#fff" width="10" height="10" viewBox="0 0 24 24"><path d="M21 12l-18 12v-24z"/></svg> <time class="text-warning">12 JUNHO</time> - DIA DOS NAMORADOS</a>
					</p>
					<a href="https://wa.me/558198888481?text=Desconto:%2012 JUNHO - DIA DOS NAMORADOS.%20Pressione%20Enviar%20para%20iniciar" target="_blank" class="btn  btn-outline-secondary">Solicitar Descontar</a>
				</li>
			</ul>
		</div>
		<!-- <div class="modal-footer">
		  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
		  <button type="button" class="btn btn-primary">Understood</button>
		</div> -->
	  </div>
	</div>
  </div>
  <!-- Modal DESCONTOS -->


  <!-- Modal EVENTO -->
<div class="modal fade" id="modal_eventos"  tabindex="-1" aria-labelledby="evento" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-lg">
	  <div class="modal-content">
		<div class="modal-header">
		  <h1 class="modal-title fs-5" >Faça seu evento aqui! </h1>
		  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
		</div>
		<div class="modal-body">

			<form action="https://www.locawebsite.com/freeform.php" method="POST"  name="script_eventos">
				<input type="hidden" name="titulo" value="">
				<input type="hidden" name="assunto" value="Evento - Manhattan Café Theatro">
				<input  type="hidden" name="redirect" value="back">
				<input type="hidden" name="charset" value="utf-8">
				<input type="hidden" name="to" value="contato@manhattanbar.com.br">
				
				<div class="row">
					<div class="col-md-12">
						<div class="form-group mb-4">
							<label  for="nome_completo">Nome completo:</label>
							<input type="text" name="nome_completo" id="nome_completo" class="form-control" required />
						</div><!-- form-group -->
					</div><!-- col-md-12 -->
					

					<div class="col-lg-4">
						<div class="form-group mb-4">
							<label  for="Cpf">CPF:</label>
							<input type="text" name="Cpf" id="Cpf" class="form-control" required />
						</div><!-- form-group -->
					</div><!-- col-md-12 -->

					<div class="col-lg-4">
						<div class="form-group mb-4">
							<label  for="from">E-mail:</label>
							<input type="email" name='from' id="from" class="form-control" required />
						</div><!-- form-group -->
					</div><!-- col-md-12 -->
			
					<div class="col-lg-4">
						<div class="form-group mb-4">
							<label  for="nome">Telefone:</label>
							<input type="text" name="nome" id="nome" class="form-control" required />
						</div><!-- form-group -->
					</div><!-- col-md-12 -->
				
					
				
				
					<div class="col-lg-4">
						<div class="form-group mb-4">
							<label  for="estados">Datas disponíveis:</label>
							<select name="assunto" id="assunto" class="form-control">
								
								<option value="">Selecione</option>
			
								<option value="#">15/08/2023 </option>
								<option value="#">18/08/2023 </option>
			
							</select>
						</div><!-- form-group -->
					</div><!-- col-md-12 -->


					<div class="col-lg-4">
						<div class="form-group mb-4">
							<label  for="hora_inicio">Hora início:</label>
							<select name="hora_inicio" id="hora_inicio" class="form-control">
								
								<option value="">Selecione</option>
			
								<option value="#">08:00:00 </option>
								<option value="#">18:00:00 </option>
			
							</select>
						</div><!-- form-group -->
					</div><!-- col-md-12 -->


					<div class="col-lg-4">
						<div class="form-group mb-4">
							<label  for="hora_termino">Hora término:</label>
							<select name="hora_termino" id="hora_termino" class="form-control">
								
								<option value="">Selecione</option>
			
								<option value="#">08:00:00 </option>
								<option value="#">18:00:00 </option>
			
							</select>
						</div><!-- form-group -->
					</div><!-- col-md-12 -->
				
					
			
				
									
									<!-- <div class="col-md-12">
										<div class="form-group mb-4">
										  <label for="termos-privacidade">
										  <input type="checkbox" name="termos-privacidade" id="termos-privacidade" required="">
										   Concordo com os <a href="termo-de-privacidade" target="_blank"><u>termos de privacidade</u></a></label>
										</div>
									</div> -->
							
									<div class="col-md-8">
						
									</div>
				
									<div class="col-md-4 text-end">
										<input type="submit" value="Enviar"  class="btn btn-primary btn-lg" />
									</div>
								</div>
						</form>



		</div>
		<!-- <div class="modal-footer">
		  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
		  <button type="button" class="btn btn-primary">Understood</button>
		</div> -->
	  </div>
	</div>
  </div>
  <!-- Modal EVENTO  -->


<!-- Modal TERMOS -->
<div class="modal fade" id="termos" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-lg modal-dialog-scrollable">
	  <div class="modal-content">
		<div class="modal-header">
		  <p class="modal-title fs-5" id="staticBackdropLabel">&nbsp;</p>
		  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
		</div>
		<div class="modal-body text-warning">
    <p>Na compra do couvert artístico da mesa completa (a partir de 4 ingressos), o local da mesma pode ser reservado ligando antecipadamente para o número (81) 3325-3372.</p>

<p>Para a compra do couvert artístico individual, o cliente está sujeito ao compartilhamento da mesa, e neste caso o Manhattan, reserva-se ao direito de escolher a mesa a ser compartilhada.</p>

<p>Para o caso de desistência do couvert artístico antecipado, em até 48 horas antes do show, o cliente será penalizado em 40% do valor pago, ou seja, receberá 60% do valor do couvert artístico.</p>

<p>Esta penalidade é para cobrir os custos administrativos incorridos em razão do cancelamento da compra do couvert artístico. RMJ devolverá o couvert artístico integral em caso do cancelamento do show por parte da produtora. E não haverá devolução em caso de não comparecimento e/ou cancelamento em menos de 48h para a data do show</p>
		</div>
		<!-- <div class="modal-footer">
		  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
		  <button type="button" class="btn btn-primary">Understood</button>
		</div> -->
	  </div>
	</div>
  </div>
  <!-- Modal TERMOS -->


  

<script src="assets/vendor/bootstrap/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="assets/vendor/animacoes/animacoes.js"></script>

<script>

  // Painel
  const swiper = new Swiper('.swiper1', {
  // Optional parameters
  direction: 'horizontal',
  loop: true,

effect: "flip",
      grabCursor: true,

  autoplay: {
   delay: 5000,
  },

  speed: 1000,

  // If we need pagination
  pagination: {
    el: '.swiper-pagination-swiper1',
    clickable: true
  },

  // Navigation arrows
  navigation: {
    nextEl: '.swiper-button-next-swiper1',
    prevEl: '.swiper-button-prev-swiper1',
  },

});


// programacao
  const swiper2 = new Swiper('.swiper-programacao', {
  // Optional parameters
  direction: 'horizontal',
  loop: true,

// Default parameters
  slidesPerView: 1,
  spaceBetween: 10,
  // Responsive breakpoints
  breakpoints: {
    // when window width is >= 320px
    420: {
      slidesPerView: 1,
      spaceBetween: 20
    },
    // when window width is >= 480px
    680: {
      slidesPerView: 2,
      spaceBetween: 20
    },
    // when window width is >= 640px
    940: {
      slidesPerView: 3,
      spaceBetween: 20
    }
    ,// when window width is >= 940px
    1040: {
      slidesPerView: 4,
      spaceBetween: 20
    }
  },


  autoplay: {
   delay: 5000,
 },


  // If we need pagination
  // pagination: {
  //   el: '.swiper-pagination-programacao',
  // },

  // Navigation arrows
  navigation: {
    nextEl: '.swiper-button-next-programacao',
    prevEl: '.swiper-button-prev-programacao',
  },

});


// hallfama
const swiper3 = new Swiper('.swiper-hallfama', {
  // Optional parameters
  direction: 'horizontal',
  loop: true,

// Default parameters
  slidesPerView: 1,
  spaceBetween: 10,
  // Responsive breakpoints
  breakpoints: {
    // when window width is >= 320px
    420: {
      slidesPerView: 1,
      spaceBetween: 20
    },
    // when window width is >= 480px
    680: {
      slidesPerView: 2,
      spaceBetween: 20
    },
    // when window width is >= 640px
    940: {
      slidesPerView: 3,
      spaceBetween: 20
    }
    ,// when window width is >= 940px
    1040: {
      slidesPerView: 4,
      spaceBetween: 20
    }
  },

  autoplay: {
   delay: 3000,
 },

 
  // If we need pagination
  // pagination: {
  //   el: '.swiper-pagination-hallfama',
  //   clickable: true
  // },

  // Navigation arrows
  navigation: {
    nextEl: '.swiper-button-next-hallfama',
    prevEl: '.swiper-button-prev-hallfama',
  },

});


const lightbox = GLightbox();

function throttle(fn, threshhold, scope) {
  threshhold || (threshhold = 250);
  var last,
      deferTimer;
  return function () {
    var context = scope || this;

    var now = +new Date,
        args = arguments;
    if (last && now < last + threshhold) {
      // hold on to it
      clearTimeout(deferTimer);
      deferTimer = setTimeout(function () {
        last = now;
        fn.apply(context, args);
      }, threshhold);
    } else {
      last = now;
      fn.apply(context, args);
    }
  };
}

  let scrollpos = window.scrollY;
  const header = document.querySelector(".navegation");
  const header_height = header.offsetHeight;

  const add_class_on_scroll = () => header.classList.add("fade-in");
  const remove_class_on_scroll = () => header.classList.remove("fade-in");

window.addEventListener("scroll", throttle(function (event) {
    scrollpos = window.scrollY;

    if (scrollpos >= header_height) { add_class_on_scroll() }
    else { remove_class_on_scroll() }
  }, 250) );



/* Navegacao Fixada */
const body = document.querySelector('body');
const nav = document.querySelector('.navbar-nav');

const navClone = nav.cloneNode(true);
const navFixed = document.createElement("div");

navFixed.setAttribute('class', 'navegation-fixed');

navFixed.appendChild(navClone);

body.appendChild(navFixed);

window.onscroll = function() {
  let y = window.scrollY;
  setTimeout(function() {
    if (y > 200) {
      navFixed.classList.add('navegation-fixed--mostrar');
    } else {
      navFixed.classList.remove('navegation-fixed--mostrar');
    }
  }, 500);
}


document.addEventListener("DOMContentLoaded", function(){
  var myOffcanvas = document.getElementById('offcanvasNavbar');
  var bsOffcanvas = new bootstrap.Offcanvas(myOffcanvas);

  const botoesFechar = document.querySelectorAll('.botaoFechar');

  const botaoAbrir = document.querySelector('.botaoAbrir');

  botoesFechar.forEach(function(botao) {
  	botao.addEventListener('click',function (e){
	    bsOffcanvas.hide();
	  });
  });


  botaoAbrir.addEventListener('click',function (e){
	    bsOffcanvas.show();
	  });


});


</script>



</body>
</html>
<?php
    mysqli_close($conn)
?>