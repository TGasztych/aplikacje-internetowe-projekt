<!-- navbar, i otworzenie sesji -->
<?php 
		//rozpoczęcie sesji i przeniesienie na stronę logowania gdy użytkownik nie jest zalogowany
	session_start();

	if (!isset($_SESSION['username'])) {
		$_SESSION['msg'] = "Musisz się najpierw zalogować";
		header('location: ../../logowanie/login.php');
	}

	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['username']);
		header("location: ../../logowanie/login.php");
	}

?>

<html>
<head>
			<!-- link do arkusza stylów -->	
	<link rel="stylesheet" href="../style.css">

			<!-- podłączenie css bootstrap -->	
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>
<body>



<!-- navbar -->
<nav class="navbar fixed-top navbar-light bg-light justify-content-between">

	<!-- navbar - lewa strona: link do index i do profilu -->
	<div class="float-left">
		<a class="navbar-brand" class="float-left" href="../index.php"><div class="rounded-pill badge-dark"><?php echo "&nbsp"."&nbsp"."<img width='20' src='../images/home_icon.png'>"."&nbsp&nbsp" ?></div></a>
		<a class="navbar-brand" href="../logowanie/profil.php"><div class="rounded-pill badge-dark"><?php echo "&nbsp"."&nbsp"."<img width='20' src='../images/ikona_profilu.png'>".$_SESSION['username']."&nbsp&nbsp" ?></div></a>
	</div>
	
	<!-- navbar - prawa strona: szukaj dzieł w bazie -->
	<form class="form-inline" action="../pages/szukaj.php">
		<input class="form-control" type="text" name="keyword">
		<button class="btn btn-outline-success my-2 my-sm-0" type="submit" >Szukaj</button>
	</form>
	
</nav>




<!-- przerwa pod navbarem -->
<div class="mt-4"> </div> <br> <br> <br> 

</body>
</html>