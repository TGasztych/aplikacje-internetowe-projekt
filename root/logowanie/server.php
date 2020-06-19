<?php 
	session_start();

	//zmienne
	$username = "";
	$email    = "";
	$errors = array(); 
	$_SESSION['success'] = "";

	//połączenie z bazą danych
	$db = mysqli_connect('localhost', 'root', 'usbw', 'test');
	mysqli_set_charset($db, "utf8");

	//rejestracja nowego konta
	if (isset($_POST['reg_user'])) {
		
		//pobierz dane z formularza
		$username = mysqli_real_escape_string($db, $_POST['username']);
		$email = mysqli_real_escape_string($db, $_POST['email']);
		$haslo_1 = mysqli_real_escape_string($db, $_POST['haslo_1']);
		$haslo_2 = mysqli_real_escape_string($db, $_POST['haslo_2']);

		//sprawdzenie czy formularz jest poprawnie wypełniony
		if (empty($username)) { array_push($errors, "Wymagana nazwa użytkownika"); }
		if (empty($email)) { array_push($errors, "Wymagany email"); }
		if (empty($haslo_1)) { array_push($errors, "Wymagane hasło"); }

		if ($haslo_1 != $haslo_2) {
			array_push($errors, "Hasła nie są takie same");
		}

		//przesłanie informacji do bazy danych
		if (count($errors) == 0) {
			$haslo = md5($haslo_1);//zakoduj hasło
			$query = "INSERT INTO users (username, email, haslo) 
					  VALUES('$username', '$email', '$haslo')";
			mysqli_query($db, $query);

			$_SESSION['username'] = $username;
			$_SESSION['success'] = "Rejestracja przebiegła pomyślnie";
			header('location: profil.php');
		}

	}


	//logowanie
	if (isset($_POST['login_user'])) {
		
		//pobierz dane z formularza
		$username = mysqli_real_escape_string($db, $_POST['username']);
		$haslo = mysqli_real_escape_string($db, $_POST['haslo']);

		//sprawdzenie czy formularz jest poprawnie wypełniony
		if (empty($username)) {
			array_push($errors, "Wymagana nazwa użytkownika");
		}
		if (empty($haslo)) {
			array_push($errors, "Wymagane hasło");
		}

		//przesłanie informacji do bazy danych
		if (count($errors) == 0) {
			$haslo = md5($haslo);
			$query = "SELECT * FROM users WHERE username='$username' AND haslo='$haslo'";
			$results = mysqli_query($db, $query);

			if (mysqli_num_rows($results) == 1) {
				$_SESSION['username'] = $username;
				$_SESSION['success'] = "Zalogowano";
				header('location: profil.php');
			}else {
				array_push($errors, "Błędna nazwa użytkownika lub hasło");
			}
		}
	}

?>