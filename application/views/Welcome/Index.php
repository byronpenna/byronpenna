<!DOCTYPE html>
<html>
<head>
	<title>Inicio</title>
	<?php
		$this->load->view("parts/head.php");
	?>
	<link rel="stylesheet" type="text/css" href=<?php echo base_url("Content/css/paginas/welcome/index/style.css") ?> >
	
</head>
<body>
	<?php 
		$this->load->view("parts/header.php");
	?>

	<?php 
		$this->load->view("parts/componentes/slider.php");
	?>
	<div class="row container divContenidoIndex">
		<div class="col-lg-4" style="background: red">
			<div class="divLaReina" >
				<div  class="col-lg-3">
					<img src="">
				</div>
				<div class="col-lg-9">
					<div class="row container">
						<h3> Will salgado </h3>
					</div>	
				</div>	
			</div>
		</div>
		<div class="col-lg-4" style="background: red">
			
		</div>
	</div>
	<?php 
		$this->load->view("parts/footer.php");
	?>
	<?php
		$this->load->view("parts/scripts.php");
	?>
</body>
</html>