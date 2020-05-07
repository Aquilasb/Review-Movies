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
										
										<h4>1917</h4>
										<p><span class="image left"><img src="images/19172.jpg" alt="" /></span>Os soldados Blake (Dean-Charles Chapman) e Schofield (George MacKay) são escolhidos pelo exército britânico para atravessar a Terra de Ninguém em menos de um dia para entregar uma mensagem a um batalhão aliado, avisando-o de uma armadilha. O fracasso custaria a vida de 1600 soldados, incluindo o irmão de Blake. É uma premissa bastante “vídeo-gamística”, uma quest de objetivo simples e desafios claros. O longa não tem medo de assumir que sua narrativa se espelha nos games - e nem deveria. Afinal do primeiro Medal of Honor (1999), criado por Steven Spielberg, aos inúmeros Call of Duty e Battlefield, os jogos tiveram que desenvolver linguagem própria para contar histórias de guerra em detalhes e imersão não permitidos por nenhum outro meio.</p>
										<p><span class="image right"><img src="images/19171.jpg" alt="" /></span>Retratar a Primeira Guerra Mundial não é tarefa fácil. Diferente de sua sucessora, é um conflito marcado pela confusão, mudanças políticas questionáveis e poucos “vilões”. Não há heroísmo nas trincheiras e na Terra de Ninguém e 1917 retrata isso muito bem ao demonstrar em detalhes o alto custo humano por trás de todo combate histórico.Após quase morrerem soterrados logo no início da jornada, Schofield e Blake refletem sobre o máximo de honra que receberão por colocarem suas vidas em risco: uma medalha. “É só um pedaço de lata. Não faz diferença pra ninguém”, reclama Schofield. “Não é só um lata. Também tem um pedaço de fita”, retruca Blake. Da forma que o longa imerge o público nos mesmos maus bocados que a dupla, é difícil sair sem concordar que medalha alguma vale tanto sofrimento.</p>
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

		<!-- Mudar este item -->		        <input type="hidden" name="id" id= "id" value="14" />

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
											$sql = "SELECT * FROM comentarios where id= 14" ;

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