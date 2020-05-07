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
										<p><span class="image left"><img src="images/segunda1.jpg" alt="" /></span>2073. O aumento crescente da população faz com que os recursos naturais da Terra se tornem cada vez mais escassos, especialmente após a América do Sul tornar-se um imenso deserto. A saída é investir em alimentos geneticamente modificados, de forma a ampliar a produção em um espaço físico cada vez mais limitado
										<br>É num futuro não muito distante em que a história se situa. Nicoletti Cayman (Glenn Close) é uma bióloga conservadora que tem uma ideia polêmica para controlar a superpopulação do planeta e, consequentemente, a escassez de recursos naturais, a fim de manter todos vivos. Na Terra deve-se ter apenas um filho, algo a ser controlado pelo Departamento de Alocação de Crianças. Se houver mais de um recém-nascido por família, um deles é enviado à criogenia, devendo ser acordado apenas quando o mundo estiver a salvo. Só que Terrence (Willem Dafoe) não pensa assim. Sua filha morre durante o parto de sete meninas que são batizadas clandestinamente com os nomes de cada um dos dias da semana. Elas são ensinadas a viver exatamente de acordo com seu nome. Na segunda-feira, apenas Segunda pode sair de casa, e por aí vai. As outras devem permanecer enclausuradas no dia determinado. Por 30 anos o projeto pessoal dá certo. Até que um dia a própria Segunda não volta ao lar.</p>
										<p><span class="image right"><img src="images/segunda2.jpg" alt="" /></span>Não demora muito para as irmãs restantes saberem que a farsa foi descoberta. Aí começa um jogo de gato e rato em que elas são perseguidas pelo governo, numa tentativa de manter a ordem. Mas como o segredo foi revelado? Houve alguma falha na rotina? Alguma delas cometeu um erro? Ou foi algo de caso pensado e há um traidor à espreita? O ritmo é frenético e cada personalidade das protagonistas é colocada à prova. Segunda é a workaholic concentrada. Terça, a viciada em maconha, medrosa. Quarta, a lutadora implacável. Quinta, a rebelde que almeja mais que aquela vida. Sexta, a hacker antissocial. Sábado, a festeira que busca curtir todos os momentos. Domingo, a esperançosa de dias melhores. Algumas são capturadas. Outras, infelizmente, morrem para que a ação continue. Porém, o grande mistério (que nem é tão denso quanto aparenta) vai diminuindo à medida em que o roteiro avança entre perseguições pelas ruas, tiros, sangue e explosões. Uma ação de tirar o fôlego.</p>
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

		<!-- Mudar este item -->		        <input type="hidden" name="id" id= "id" value="4" />

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
											$sql = "SELECT * FROM comentarios where id= 4" ;

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