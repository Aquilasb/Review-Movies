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
										
										<h4>Os Mecenarios</h4>
										<p><span class="image left"><img src="images/mercenarios1.jpg" alt="" /></span>Na trama, o grupo de "soldados da fortuna" de Barney Ross (Stallone) é contratado pelo misterioso Sr. Church (Willis) para infiltrar-se em uma ilha latina e assassinar seu ditador (David Zayas, de Dexter). Chegando lá, eles conhecem a rebelde Sandra (Giselle Itié) e descobrem a verdadeira natureza do problema. Mas quando eles enfim escapam da ilha, Sandra prefere ficar e lutar - o que desperta em Barney um sentimento de redenção que ele desconhecia.</p>
										<p><span class="image right"><img src="images/mercearios2.jpg" alt="" /></span>Mas ao mesmo tempo que se entende a explosiva nostalgia de Stallone (quem não quer trabalhar no que faz melhor e gosta?), Os Mercenários não deixa de parecer datado e simplista. Dá pra se divertir na hora com o pastiche e desfrutar, amortecido, o balé pra macho das coreografias marciais, mas não sobra muita coisa para a memória além das discussões de bastidor.Em tempos de realismo no cinema,e até a prefeitura de Mangaratiba, no Rio de Janeiro (onde parte das filmagens aconteceram), querendo homenagear o astro construindo uma estátua (torço por um macaco no ombro) rendem muito mais discussão sobre o filme, que se esgota antes de chegar ao elevador do shopping, que seus méritos cinematográficos.</p>
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

		<!-- Mudar este item -->		        <input type="hidden" name="id" id= "id" value="13" />

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
											$sql = "SELECT * FROM comentarios where id= 13" ;

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