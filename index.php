<?php require 'pages/header.php';  ?>
	<div class="container-fluid">
		<?php if(!isset($_SESSION['cLogin']) && empty($S_SESSION['cLogin'])): ?>
		<div class="jumbotron">
			<h2>Nós temos hoje 999 anúncios</h2>
			<p>E mais de 999 usuários cadstrados</p>
		<?php endif; ?>	
		</div>
		<div class="row">
			<div class="col-sm-3"><h4>Pesquisa Avançada</div>
			<div class="col-sm-9"><h4>Últimos Anúncios</h4></div>
		</div>
	</div>

<?php require 'pages/footer.php';  ?>