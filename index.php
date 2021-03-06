<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<?php include 'inc/head_common.php' ?>
	<link rel="stylesheet" href="css/workshops.css">
	<title>Workshops con BootStrap 3</title>

</head>
<body>
	<?php include 'inc/header.php' ?>
	
	<div id="workshop-list">
		<article id="w1" class="workshop workshop-left">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-3 col-sm-push-9 col-md-4 col-md-push-8 col-lg-6 col-lg-push-6 date-info">
						<h3 class="highlighted"><strong> W21</strong> 1 y 2 de Julio</h3>
						<h3 class="highlighted"> 20 lugares</h3>
						<h3 class="highlighted"> 1000.00</h3>
					</div>
					<div class="col-xs-12 col-sm-9 col-sm-pull-3 col-md-8 col-md-pull-4 col-lg-6 col-lg-pull-6 main-info">
						<h2> Desarrolla front-end like boss aprendiendo Bootstrap</h2>
						<p>Disfruta de un fin de semana diferente aprendiendo con <a href="#">Yuliem Alavez</a> y <a href="#">Stephanie Sandoval</a></p>
						<a href="detail.php" class="btn btn-custom">¡Me apunto!</a>
						<a href="detail.php" class="more-info-link">Quiero más infromación</a>
					</div>
					
				</div>
			</div>
		</article>
		<article id="w2" class="workshop workshop-rigth">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-3 col-md-4 col-lg-6 date-info">
						<h3 class="highlighted"><strong> W38</strong> 4 y 5 de Julio</h3>
						<h3 class="highlighted"> 25 lugares</h3>
						<h3 class="highlighted"> 1500.00</h3>
					</div>
					<div class="col-xs-12 col-sm-9 col-md-8 col-lg-6 main-info">
						<h2> Desarrolla de aplicaciones Web con Ruby on Rails</h2>
						<p>Disfruta de un fin de semana diferente aprendiendo con <a href="#">Yuliem Alavez</a> y <a href="#">Stephanie Sandoval</a></p>
						<a href="detail.php" class="more-info-link">Quiero más infromación</a>
						<a href="detail.php" class="btn btn-custom">¡Me apunto!</a>
					</div>
				</div>
			</div>
		</article>
	</div>

	<?php include 'inc/footer.php' ?>

	<?php include 'inc/footer_common.php' ?>
</body>
</html>