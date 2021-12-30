<?php 
	$title = 'Informatek';
	require_once ('./templates/header.php');
?>

<!-- MAPA -->          
<script src='https://maps.google.com/maps/api/js?key=AIzaSyDv7YRz1WWPhkr6aim8wEm4WDPBdk81z54'></script>

<body class="page-home">
	<div class="banner">
		<div class="img-block">
			<img src="<?= base_url ?>images/pages/home/banner-informatek-grande.jpg" alt="">
		</div>

		<div class="img-block">
			<img src="<?= base_url ?>images/pages/home/banner-domotica.jpg" alt="">
		</div>
	</div>

	<div class="prev-servicos">
		<div class="container">
			<div class="titulo"> 
				<img src="<?= base_url ?>images/pages/home/services.svg" alt="">
				<h2>SERVIÇOS</h2>
			</div>

			<p class="descricao">A INFORMATEK é uma empresa de serviços especializada em hardware de informática. Veja abaixo alguns deles:</p>

			<div class="showcase">
				<div class="box">
					<i class="fas fa-check-circle fa-2x"></i>
					<h3>Notebook</h3>

					<img src="<?= base_url ?>images/pages/home/notebook-icon.svg" alt="">

					<a class="switch-servicos" href="<?= base_url ?>/servicos"></a>
				</div>

				<div class="box">
					<i class="fas fa-check-circle fa-2x"></i>

					<h3>Desktop</h3>

					<img src="<?= base_url ?>images/pages/home/desktop-icon.svg" alt="">

					<a class="switch-servicos" href="<?= base_url ?>/servicos"></a>
				</div>

				<div class="box">
					<i class="fas fa-check-circle fa-2x"></i>

					<h3>Impressora</h3>

					<img src="<?= base_url ?>images/pages/home/printer-icon.svg" alt="">

					<a class="switch-servicos" href="<?= base_url ?>/servicos"></a>
				</div>
			</div>

			<div class="red-button">
				<a href="<?= base_url ?>servicos">Ver mais</a>
			</div>
		</div>
	</div>

	<div class="about-informatek">
		<div class="container">

		<div class="titulo"> 
			<img src="<?= base_url ?>images/pages/home/history.svg" alt="">
			<h2>Saiba mais sobre nossa História</h2> 
		</div>

			<!-- <div class="logo">
				<img src="<?= base_url ?>images/logo-informatek.svg" alt="">
			</div> -->

			<div class="text-block">
				<p>
					Desde a fundação em 1996, a tecnologia sempre esteve presente no escopo da empresa, seja na prestação de serviços de 
					manutenção especializada em áudio, vídeo, eletrodomésticos, telefonia ou na assessoria de informática para grandes empresa da 
					região de Florianópolis. Até que em 2008 houve uma cisão de ramos e a empresa passou a prestar somente serviços em hardware de informática. 
					Atualmente, além da informática em si, a empresa presta serviços de consultoria e projetos em automação industrial e Domótica.
				</p>
			</div>
		</div>

	</div>

	<div class="localizacao">
		<div class="titulo"> 
			<img src="<?= base_url ?>images/pages/home/location.svg" alt="">
			<h2>ONDE ESTAMOS LOCALIZADOS</h2>
		</div>

		<div class="div-map">
			<div id='map'></div>
		</div>
	</div>

<? require_once ('./templates/footer.php'); ?>
