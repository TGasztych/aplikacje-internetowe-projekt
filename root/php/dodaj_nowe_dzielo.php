<!--wyswietl wyniki wyszukiwania wprowadzonego w index.php -->
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
//polacz z bazą danych
	include "../php/db_connnection.php";
    $conn = OpenCon();
?>
	
<?php
	
	//pobierz dane z linku
	$nowe_dzielo_tytul = $_GET["add_tytul"];
	$nowe_dzielo_rok = $_GET["add_rok"];
	$nowe_dzielo_typ = $_GET["add_typ"];
	$nowe_dzielo_gatunek = $_GET["add_gatunek"];
	$nowe_dzielo_opis = $_GET["add_opis"];
	
	
	//wstaw dane do bazy danych
		$sql =	"INSERT INTO dzielo (id_dzielo, tytul, rok, typ, gatunek, opis) VALUES (NULL, '$nowe_dzielo_tytul', '$nowe_dzielo_rok', '$nowe_dzielo_typ', '$nowe_dzielo_gatunek', '$nowe_dzielo_opis')";
		
	//sprawdzenie id dodanego rekordu
		if(mysqli_query($conn, $sql)){
		$last_id = mysqli_insert_id($conn);
		}
	//informacja o dodaniu rekordu i link do strony danego rekordu	
		echo "<h1 class='text-center'><em><strong><br>"."Dodano do bazy: "."<a href='../pages/dzielo.php?id=$last_id'>".$nowe_dzielo_tytul."</a>"."<br></strong></em></h1>";
?>



<h4 class='text-center'><a href="../index.php">powrót na stronę główną</a></h4>


</body>
</html>