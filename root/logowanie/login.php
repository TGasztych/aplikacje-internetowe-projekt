<?php include('server.php') ?>

<?php
	if (isset($_SESSION['username'])) {
		header('location: profil.php');
	}
?>

<meta charset="UTF-8">
<!DOCTYPE html>
<html>
<head>
	<!-- link do arkusza stylów (style.css) -->	
	<link rel="stylesheet" href="../style.css">

	<!-- podłączenie css bootstrap -->	
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</head>
<body>

	<div style="margin-top: 100"> </div>

		<!-- przyciski przenoszące do logowania lub rejestracji -->
	<div class="d-flex justify-content-around">	

		<div class="btn-group btn-group-toggle" data-toggle="buttons">
		
		  <label class="btn btn-secondary">
			<a href="register.php"  style="color:white" id="option1" autocomplete="off"> Załóż nowe konto</a>
		  </label>
		  
		  <label class="btn btn-outline-primary active">
			<a href="login.php" style="color:white" id="option2" autocomplete="off" checked> Zaloguj</a>
		  </label>
		  
		</div>
	</div>	



		<!-- formularz logowania -->
	<div class="d-flex justify-content-center">
		<form method="post" action="login.php" >

			<?php include('errors.php'); ?>
			
			<br>
			
			<div class="form-group">
				<input class="form-control" placeholder="Nazwa użytkownika" type="text" name="username">
			</div>	
			
			<div class="form-group">
				<input class="form-control" placeholder="Hasło" type="haslo" name="haslo">
			</div>	
			<div class="form-group">
					<button type="submit" class="btn btn-outline-primary" name="login_user">Zaloguj</button>
			</div>
			<div class="dropdown-divider"></div>
			
			<p>
				Nie masz jeszcze konta? <br> <a href="register.php"> Zarejestruj się </a>
			</p>
			
		</form>
	<div>

</body>
</html>