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
								<h2>Ação</h2>
								
							</div>
						</header>

						<!-- Content -->
							<div class="wrapper">
								<div class="inner">


									

									<section>
										
										<h4>Jonh Wick:De volta ao jogo</h4>
										<p><span class="image left"><img src="images/acao1.jpg" alt="" /></span>De Volta ao Jogo (John Wick, 2014) é um filme plenamente consciente dos muitos clichês de histórias de vingança e de matadores aposentados que recicla. É um sub-Drive não só na repetição de temas e de tons de neon mas também nesse suposto instinto de cinefilia que tenta resgatar os heróis americanos motorizados, da tradição de Steve McQueen.</p>
										<p><span class="image right"><img src="images/acao2.jpg" alt="" /></span>Keanu Reeves é John Wick, ex-assassino da máfia russa que é forçado a voltar "ao jogo" quando o filho mimado do chefão rouba o carro vintagede John Wick e mata o filhote de cachorro que John Wick acabara de ganhar de sua falecida esposa. O jovem vilão não sabia quem era John Wick quando cometeu essas atrocidades, nem o espectador, mas os personagens passam a repetir tanto o nome JOHN WICK ao longo do filme, com aquela gravidade de quem fala da segunda vinda de Cristo, que certamente John Wick não será esquecido tão cedo.
                                        Nesse sentido, De Volta ao Jogo não é muito diferente do cinemão de hoje, com seu fetiche de uma violência que seja extrema mas que não deixe marcas, uma violência normatizada ("Os vizinhos estão reclamando do barulho, Sr. John Wick"). Até mesmo Nicolas Winding Refn entenderia a responsabilidade moral de botar mais um ou outro hematoma na cara de Keanu Reeves depois de tanta pancadaria.</p>
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

		<!-- Mudar este item -->		        <input type="hidden" name="id" id= "id" value="12" />

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
											$sql = "SELECT * FROM comentarios where id= 12" ;

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