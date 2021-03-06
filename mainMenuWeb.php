<?php
	
	session_start();
	
	if(!isset($_SESSION['loged']))
	{
		header('Location: loginWeb.php');
		exit();
	}
?>	

<!DOCTYPE html>
<html lang="pl">
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
	<title>MyBudget</title>
	<meta name="description" content="Tutaj w łatwy sposób zapanujesz nad swoim domowym budżetem!">
	<meta name="keywords" content="finanse, budżet, pieniądze, jak zapanować, oblicz, wydatki, przychody, bilans, policz swoje finanse, miesięczne zestwienie, kontrola budżetu">
	<meta name="author" content="Przemysław Kapela">
	<meta http-equiv="X-Ua-Compatible" content="IE=edge">
	
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/fontello.css">
	<link rel="stylesheet" href="main.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700&amp;subset=latin-ext" rel="stylesheet">
	
	<!--[if lt IE 9]>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
	<![endif]-->
	
</head>

<body>

	<header>
	
		<div class="col-12 text-center bg-dark pb-2">
							
				<a href="mainMenuWeb.php">			
					<i class="icon-dollar"></i>
					<h1>MyBudget</h1>
					<i class="icon-dollar"></i>
				</a>
				
		
			<blockquote class="blockquote">
				
					<p class="mb-1">To nie pieniądze dają szczęście, ale to, co dzięki nim możesz zrobić ze swoim życiem.</p>
					
					<p class="stopa blockquote-footer text-center">Lois P. Frankel</p>
				
			</blockquote>
		</div>
		
		<nav class="navbar navbar-expand-xl navbar-light">
		  
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			
			<div class="offset-lg-3 col-lg-8 offset-lg-3 collapse navbar-collapse" id="navbarNav">
			
				<ul class="navbar-nav">
				
					<li class="nav-item active" style="background-color: white;">
						<a class="nav-link" href="mainMenuWeb.php"><i class="icon-home"></i>Strona główna</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="addIncomeWeb.php"><i class="icon-money"></i>Dodaj przychód</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="addExpenceWeb.php"><i class="icon-basket"></i>Dodaj wydatek</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="balance.php"><i class="icon-chart-bar"></i>Przeglądaj bilans</a>
					</li>

					 <li class="nav-item">
						<a class="nav-link" href="#"><i class="icon-cog"></i>Ustawienia</a>
					</li>
					
					 <li class="nav-item ">
						<a class="nav-link" href="logout.php"><i class="icon-off"></i>Wyloguj</a>
					</li>
				</ul>
			</div>
		</nav>
		
	</header>
	
	<main>
		
		<section class="budget">
		
			<div class="container">
				
				<div class="row">
					
					<div class="lol col-12 text-justify mt-3 p-3 mb-2">
						<header>
							<h2 style="margin-bottom: 30px"><b>Witaj drogi użytkowniku <?php echo $_SESSION['user']?>! Co bedziemy robić?</b></h2>
							
							<img class="img-thumbnail float-right ml-3 mr-5 mt-2 mb-2" style="width: 400px;" src="img/kid2.jpg" alt="pig">
							
							<h2 style="margin-bottom: 20px;">Ponizej krótka instrukcja obsługi aplikacji.</h2>
						</header>

						
						<p>"Strona główna" - przekierowanie na stronę główną z instrukcją obsługi.</p>
						
						<p>"Dodaj przychód" - wprowadzenie danych dla przychodu (kwota, data, kategoria przychodu oraz opcjonalnie komentarz).</p>
						
						<p>"Dodaj wydatkek" - wprowadzenie danych dla wydatku (kwota, data, rodzaj płatności, kategoria wydatku oraz opcjonalnie komentarz)</p>
						
						<p>"Przeglądaj bilans" - Przegląd przychodów i wydatków (automatycznie dla bieżącego miesiąca), bilans twoich finansów (ile zaoszczędziłeś danego miesiąca). Przy każdym przychodzie i wydatku umieszczono opcję usuwania oraz edycji.</p>
						
						<p>"Ustawienia" - edycja konta użytkownika.</p>
						
						<p>"Wyloguj" - wylogowanie użytkownika, przekierowanie na strone do logowania witryny.</p>

					</div>

				</div>	
				
			</div>
				
		</section>
		
	</main>
	
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	
	<script src="js/bootstrap.min.js"></script>
	
</body>
</html>