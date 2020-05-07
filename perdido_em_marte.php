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
								<h2>(Título)</h2>
								
							</div>
						</header>

						<!-- Content -->
							<div class="wrapper">
								<div class="inner">


									

									<section>
										
										<h4>Left &amp; Right</h4>
										<p><span class="image left"><img src="images/marte2.jpg" alt="" /></span>O astronauta Mark Watney (Matt Damon) é enviado a uma missão em Marte. Após uma severa tempestade ele é dado como morto, abandonado pelos colegas e acorda sozinho no misterioso planeta com escassos suprimentos, sem saber como reencontrar os companheiros ou retornar à Terra.
										<br>Abandonado, o personagem precisa realizar uma dezena de cálculos, analisar dados e, sim, plantar a própria comida. E todo o aspecto técnico da empreitada é apresentado ao público de forma compreensível, traduzida da obra original pelo roteiro simples e, na medida do possível.
										</p>
										<p><span class="image right"><img src="images/marte1.jpg" alt="" /></span>Ao mesmo tempo em que Watney tenta estabelecer contato com a Terra, desenvolve um diálogo com as câmeras da nave (ou seja, com o público), numa espécie de diário, que é calcado em excelentes tiradas e muito bom-humor. (Sobra até para Neil Armstrong, o primeiro homem a pousar na lua). É um recurso narrativo fácil? Certamente. Mas que resulta na construção de um perfil bem claro (e divertido) do personagem, sobretudo baseado no otimismo e, paradoxalmente, na auto-depreciação.              <br>
										Mesmo intuindo onde a história vai parar, a aventura é conduzida de maneira a que não sobre uma unha intacta do espectador na poltrona. E a fotografia ainda entrega uma sucessão de lindas imagens para o deleite da plateia. De volta ao espaço, Ridley Scott está em casa. (Prometheus não conta).</p>
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

		<!-- Mudar este item -->		        <input type="hidden" name="id" id= "id" value="2" />

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
											$sql = "SELECT * FROM comentarios where id= 2" ;

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
									Untitled Inc<br />
									1234 Somewhere Road Suite #2894<br />
									Nashville, TN 00000-0000
								</li>
							
								<li class="icon brands fa-facebook-f"><a href="#">facebook.com/untitled-tld</a></li>
								<li class="icon brands fa-instagram"><a href="#">instagram.com/untitled-tld</a></li>
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