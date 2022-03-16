<?php

@include 'LigaBd.php';

session_start();

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['nome']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = md5($_POST['pass']);
   $user_type = $_POST['user_type'];

   $select = " SELECT * FROM conta WHERE email = '$email' && pass = '$pass' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){

      $row = mysqli_fetch_array($result);

     if($row['user_type'] == 'user'){

         $_SESSION['user_name'] = $row['name'];
         header('location:index.html');

      }
     
   }else{
      $error[] = 'incorrect email or password!';
   }

};
?>

<html>
	<head>
		<title>Entrar na Conta</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!--Fonte encontrada na net -->
		<link rel="stylesheet" type="text/css" href="css/font3tipster.css" />
		<!-- página inicial mais smooth -->
		<link href="css/font2slider.css" rel="stylesheet">
		<!-- Fontes responsivas -->
		<link rel="stylesheet" href="css/font1.min.css">
		<link href="estilo.css" rel="stylesheet" media="screen">	
		<link href="responder.css" rel="stylesheet" media="screen">	
        <link rel="stylesheet" href="loggar.php">			
			
	</head>


	<body>
	
		<section id="header_area">
			<div class="wrapper header">
				<div class="clearfix header_top">
					<div class="clearfix logo floatleft">
						<a href=""><h1><span>Entrar na sua Conta</span></h1></a>
					</div>
					
				</div>
				<!-- Redirecionar páginas -->
				<div class="header_bottom">
					<nav>
						<ul id="nav">
							<li><a href="index.html">Página inicial</a></li>
							<li><a href="adocao.html">Adoção</a></li>
							<li><a href="vets.html">Veterinários</a></li>
							<li><a href="informgeral.html">Informações</a></li>
							<li><a href="contatos.html">Contacte nos</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</section>	
		<center>
					<div class="clearfix newsletter">
					
						
							<h2>Faça o seu Login</h2>
							<form method="POST" action="loggar.php">
							<p><input type="text" placeholder="Email" id="mce-TEXT" name="email"/></p>
							<p><input type="password" placeholder="Palavra chave" id="mce-EMAIL"name="pass"/></p>
							<span class="lnr lnr-eye"></span><br>
							<p><input type="submit" value="Submeter" id="mc-embedded-subscribe"/></p>
						</form>
					</div>
					</center>
					<form>
					<center>
								<p>Se precisar de ajuda mande uma mesnagem</p>
								<p><textarea class="wpcf7-textarea"  placeholder="Mensagem*"></textarea></p>
								<p><input type="Submit" class="wpcf7-submit" value="Submeter"/></p>
							</form>
		</center>
		<section id="footer_top_area">
			<div class="clearfix wrapper footer_top">
				<div class="clearfix footer_top_container">
					<div class="clearfix single_footer_top floatleft">
						<h2>Sobre nós</h2>
						<p>Somos dois. Um preto e um homem de verdade <a href="">Nóis é trabaiadô</a></p>
					</div>
					<div class="clearfix single_footer_top floatleft">
						<h2>Links úteis</h2>
						<ul>
							<li><a href="youtube.com">youtube.com</a></li>
							<li><a href="twitter.com">twitter.com</a></li>
							<li><a href="github.com">github.com</a></li>
						</ul>
					</div>
				</div>
			</div>
		</section>
		<section id="footer_bottom_area">
			<div class="clearfix wrapper footer_bottom">
				<div class="clearfix copyright floatleft">
					<p> Copyright &copy; All rights reserved by <span>Eu mermo pow</span></p>
				</div>
				<div class="clearfix social floatright">
					<ul>
						<li><a class="tooltip" title="Facebook" href="facebook.com"><i class="fa fa-facebook-square"></i></a></li>
						<li><a class="tooltip" title="Twitter" href="twitter.com"><i class="fa fa-twitter-square"></i></a></li>
						<li><a class="tooltip" title="Google+" href="google.com"><i class="fa fa-google-plus-square"></i></a></li>
					</ul>
				</div>
			</div>
		</section>
	</body>
</html>
