<!--wyswietl wyniki wyszukiwania wprowadzonego w index.php -->
<!DOCTYPE html>
<html>
<head>
	
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>
<body>


 <?php 
//navbar i otworzenie połączenia
include("top.php");
?>


<div class="mx-auto"  style="width: 80%;">

<?php
//polacz z baza danych
    include "../php/db_connnection.php";
	$conn = OpenCon();
	
	
	
	
	
	$keywordzfromularza = $_GET["keyword"];
	
	//informacja dla jakiego zapytania wyświetlane są wyniki
	if($_GET["keyword"] == "") {echo "<strong>"."Wyświetlam całą zawartość bazy danych:"."<br>"."<br>"."</strong>";}
		else {echo "<strong>"."wyniki wyszukiwania dla \" ".$keywordzfromularza." \":"."<br>"."<br>"."</strong>";}


		$sql = "SELECT id_dzielo, typ, tytul, rok FROM dzielo WHERE tytul LIKE '%".$keywordzfromularza."%' ORDER BY typ, tytul";
		$result = $conn->query($sql);
		
		if ($result->num_rows > 0) {
			$numer = 1; //zmienna do numeracji wynikow wyszukiwania
						
			echo "<table class='table table-striped table-dark'>";
				echo "<thead>";
					echo "<tr>";
					  echo "<th scope='col'>#</th>";
					  echo "<th scope='col'>tytuł</th>";
					  echo "<th scope='col'>rok</th>";
					  echo "<th scope='col'>typ</th>";
					echo "</tr>";
				echo "</thead>";	
				echo "<tbody>";
				  
			//wyświetl wszysktie wyniki wyszukiwania
			while($row = $result->fetch_assoc()) {
			
					echo "<tr>";
					  echo "<td>".$numer."</td>";
					  echo "<td>"."<a style='color: turquoise;' href='dzielo.php?id=$row[id_dzielo]'>$row[tytul]</a>"."</td>";
					  echo "<td>".$row["rok"]."</td>";
					  echo "<td>".$row["typ"]."</td>";
					echo "</tr>";

			$numer++; //dodaj 1 do numeracji wyników wyszukiwania
			}
			
				echo"</tbody>";
			echo "</table>";
		
		
			
		} else {
		  echo "<h4 class='text-center' style='color: red'><em><strong><br>"."brak pasujących wyników"."</strong></em></h4>";
		}
		

		$conn->close();
	echo '<br>'.'Nie znalazłeś tego co chciałeś? Możesz <a href="dodaj.php">dodać nowy rekord</a> do bazy danych!'.'<br>'.'<br>'.'<br>';
?>

</div>



</body>
</html>
