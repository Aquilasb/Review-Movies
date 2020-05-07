<?php 
require_once 'db_connect.php';

?>
<!DOCTYPE HTML>
<!--
	Solid State by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Review Movies</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">

		<!-- Page Wrapper -->
			<div id="page-wrapper">

				<!-- Header -->
					<header id="header">
						<h1><a href="index.html">Review Movies</a></h1>
						<nav>
							<a href="#menu">Menu</a>
						</nav>
					</header>

				<!-- Menu -->
					<nav id="menu">
						<div class="inner">
							<h2>Menu</h2>
							<ul class="links">
								<li><a href="index.html">Home</a></li>
								<li><a href="acao.html">Ação</a></li>
								<li><a href="ficçao.html">Ficção científica</a></li>
								<li><a href="terror.html">Terror</a></li>
								<li><a href="contato.html">Contato</a></li>
								
							</ul>
							<a href="#" class="close">Close</a>
						</div>
					</nav>

				<!-- Wrapper -->
					<section id="wrapper">
						<header>
							<div class="inner">
								<h2>Terror</h2>
								
							</div>
						</header>

						<!-- Content -->
							<div class="wrapper">
								<div class="inner">


									

									<section>
										
										<h4>Sillent Hill</h4>
										<p><span class="image left"><img src="imgs/silent hill.jpg" alt="" /></span>Dark Alessa, que também pode ser referida como The One With Many Names que é uma entidade sobrenatural, ajudou a criança se vingar contra os residentes de Silent Hill. Punindo os moradores os transformando em criaturas horrendas que particularmente eu não quero encontrar nem em sonhos. Todas aquelas pessoas que faziam medo para Alessa quando criança ou caçoavam dela chamando-a de bruxa se transformou em monstros conhecidos nas telonas e nos jogos. Os Grey Children, são colegas de colégio da menina que se transformou em crianças muito parecidas com zumbis e que portam uma faca como arma. E as famosas enfermeiras, que se vestem de forma provocante, mas acabada com qualquer alegria dos marmanjos tento o rosto deformado parecido com cérebros.</p>
										<p><span class="image right"><img src="imgs/silenthill2.jpg" alt="" /></span>Temos o famoso monstro tanto na franquia do filme, como também nos jogos, o tal chamado Pyramid Head, traduzindo ao pé da letra: Cabeça de Piramide. Que é um homem que carrega dolorosamente uma piramide na cabeça, tem uma grande faca como arma e não fala, apenas geme. Se mostra bastante brutal e temido. É assim que a cidade, que é fantasma durante o dia, fica habituada após o som do famoso alarme que toca quando surge a noite, fica infestada de monstros.
                                        No filme Terror em Silent Hill vemos a história de uma mãe, Rose, preocupada com a filha, Sharon, que sofre de uma doença fatal. Sharon menciona o nome de Silent Hill em seus sonhos quando sonambula, e contrariando o marido, Rose resolve levar a filha para essa cidade na busca de ajuda para a criança. É quando as duas chegam a cidade e o terror de Rose começa a aparecer, com sua filha desaparecida a mãe fica presa naquele local a procura de sua filha. Na sequencia Silent Hill – Revelação, vamos pode ver a jovem Heather Mason que passou a vida fugindo, de forças que nunca compreendeu bem. Quando o desaparecimento misterioso de seu pai acontece, a jovem se depara com uma estranha e terrível realidade que guarda respostas sobre os pesadelos que a infernizam desde a sua infância.
</p>
									</section>

								</div>
							</div>

					</section>

				<!-- Footer -->
					<section id="footer">
						<div class="inner">
							<h2 class="major">Deixe o seu comentário</h2>
							<p>Lembre-se que os comentários devem ser feitos com respeito ao autor da resenha e aos que também usaram esta ferramenta.</p>
							<form method="post" action="processa.php">
								<div class="fields">
									<div class="field">
										<label for="name">Nome</label>
										<input type="text" name="nome" id="nome" />
									</div>
									<div class="field">
										<label for="email">Email</label>
										<input type="email" name="email" id="email" />
									</div>
									<div class="field">
										<label for="message">Mensagem</label>
										<textarea name="mensagem" id="mensagem" rows="4"></textarea>
									</div>
								</div>
								<ul class="actions">

		<!-- Mudar este item -->		        <input type="hidden" name="id" id= "id" value="10" />

									<li><input type="submit" value="Enviar mensagem" /></li>
								</ul>
</div>
									
								
                                 <section>

                       <div class="table-wrapper">
									<table> 
										<thead>
											<tr> 
												<th><center>Nome</center></th>
												<th>Mensagem</th>
												
											</tr>
										</thead>
										<tbody>
		<!-- Mudar este item -->	
											<?php
											$sql = "SELECT * FROM comentarios where id= 10" ;

											$result = $connect->query($sql);
                                            
											if($result->num_rows > 0) {
											  while($row = $result->fetch_assoc()) {

											  echo "<tr>
											 <td><center>".$row['nome']."</center></td>
											  

                                             <td><textarea rows='2'>".$row['mensagem']."</textarea></td><tr>";}}
											  ?>
										
										</tbody>
									</table>
								
                       </div>
							</form>

						</section>
							<div class="inner">
							<ul class="contact">
								<li class="icon solid fa-home">
									<br />
									1234 Fatima I #4998<br />
									Cráteus, CE 63700-0000
									
								</li>
							
								<li class="icon brands fa-facebook-f"><a href="#">reviewmvs@hotmail.com</a></li>
								<li class="icon brands fa-instagram"><a href="#">instagram.com/@review_movies</a></li>
							
							</ul>

							<ul class="copyright">
								<li>&copy; Untitled Inc. All rights reserved.</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
							</ul>
						</div>
					</section>
					
			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>