<!--dodawanie dzieła do listy użytkownika lub przekierowanie do strony logowania -->
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
</head>
<body>

 <?php 
//navbar i otworzenie połączenia
include("../pages/top.php");
?>


<?php
	//polacz z baza danych
	include "../php/db_connnection.php";
	$conn = OpenCon();
?>




	
<?php	

	//pobranie danych (przekazanych z formularza) z linku
	$nowa_ocena = $_GET["add_ocena"];
	$skopiowane_id_dziela = $_GET["id_dziela"];
	
	
	$zalogowany_uzytkownik_nickname = $_SESSION['username'];


	
		//znajdź i skopiuj id zalogowanego urzytkownika:	
		$sql = "SELECT `id`, `username`, `email`, `haslo` FROM `users` WHERE username LIKE '$zalogowany_uzytkownik_nickname'";
		$row_kopia;  //tmp
		$result = $conn->query($sql);
		
			if ($result->num_rows > 0) {
				while($row = $result->fetch_assoc()) {
					$row_kopia = $row;
					}
			}
		$username_id_kopia = $row_kopia["id"];
		
		
		
		if($nowa_ocena == "NULL"){
			$nowa_ocena = 0;
		}
		

	
	//dodaj ocenę do bazy danych
	$sql = "INSERT INTO `users_cpl`(`id_users_cpl`, `user_id`, `dzielo_id`, `ocena`) VALUES (NULL, $username_id_kopia, $skopiowane_id_dziela, $nowa_ocena)";
	$result = $conn->query($sql) or die(
		"<h1 class='text-center' style='color: red'><em><strong><br>niepoprawnie wpisano ocenę"."</strong></em></h1><br><br>".
		"<h5 class='text-center'><a href='../index.php'>wróć na stronę główną</a></h5>"."<h5 class='text-center'>lub</h5>".
		"<h5 class='text-center'><a href='../logowanie/profil.php'>zobacz swój profil</a></h5>");
	
	//informacja o dodaniu do listy
	echo "<h1 class='text-center' style='color: green'><em><strong><br> Gratulacje ".$_SESSION['username']."!"."<br>Dodałeś nowy rekord do swojej listy.</strong></em></h1><br><br>".
		"</strong></em></h1><br><br>"."<h5 class='text-center'><a href='../index.php'>wróć na stronę główną</a></h5>"."<h5 class='text-center'>lub</h5>".
		"<h5 class='text-center'><a href='../logowanie/profil.php'>zobacz swój profil</a></h5>";
	
?>



</body>
</html>