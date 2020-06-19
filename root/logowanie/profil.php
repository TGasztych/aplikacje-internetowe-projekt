<!-- profil obecnie zalogowanego użytkownika -->
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
	
	
<br>	

<div class="container">
	<div class="row">
		<div class="col-5"></div>
		<div class="col-2">
			<!-- wiadomość o zalogowaniu -->
			<?php if (isset($_SESSION['success'])) : ?>
				<div class="error success" >
					<h3>
						<?php 
							echo "<strong style='color: green'>".$_SESSION['success']."</strong>"; 
							unset($_SESSION['success']);
						?>
					</h3>
				</div>
			<?php endif ?>
			
			
			<!-- informacje o użytkowniku -->
			<?php  if (isset($_SESSION['username'])) : ?>
				<div class=" rounded border border-success">
					<br><strong><p class="text-center" style="color: lightgrey;">Zalogowany jako:</p></strong>
					<h1 class="text-center"><em><strong><?php echo $_SESSION['username']; ?></strong></em></h1>
					<br>
				</div>
					<br><p class="text-center"> <a href="profil.php?logout='1'" style="color: red;">wyloguj</a> </p>
				
			<?php endif ?>
		</div>
		<div class="col-5"></div>
	</div>
</div>

<br><br>



<div class="mx-auto"  style="width: 70%;">	

	<?php
	
	
	
	
	$zalogowany_uzytkownik_nickname = $_SESSION['username'];
	
	
	//polacz z baza danych
    include "../php/db_connnection.php";
	
	$conn = OpenCon();
	
	
	
//pobierz potrzebne dane o użytkowniku
		$sql = "SELECT `id`, `username`, `email`, `haslo` FROM `users` WHERE username LIKE '$zalogowany_uzytkownik_nickname'";
			$row_kopia;  //tmp
			$result = $conn->query($sql);
		
		
		
			if ($result->num_rows > 0) {
					while($row = $result->fetch_assoc()) {
						$row_kopia = $row;
						}
				}
	$username_id_kopia = $row_kopia["id"];
	
			//echo $username_id_kopia;
		
		
		

	
		$sql = "SELECT dzielo_id, ocena FROM users_cpl WHERE user_id LIKE '%".$username_id_kopia."%'";
		$result = $conn->query($sql);
		
		
		
		
		
		//wyświetl wszysktie ocenione dzieła
		if ($result->num_rows > 0) {
			$numer = 1; //zmienna do numeracji wynikow wyszukiwania
			
					
			
			//wyświetl nagłówek tabeli z ocenionymi dziełami				
			echo "<table class='table table-striped table-dark'>";
				echo "<thead>";
					echo "<tr>";
					  echo "<th scope='col'>#</th>";
					  echo "<th scope='col'>tytuł</th>";
					  echo "<th scope='col'>ocena</th>";
					  echo "<th scope='col'>rok</th>";
					  echo "<th scope='col'>typ</th>";
					  echo "<th scope='col'>gatunek</th>";
					echo "</tr>";
				echo "</thead>";	
				echo "<tbody>";
				  
			
				while($row = $result->fetch_assoc()) {
			
					echo "<tr>";
						
					  
						//pobranie danych o dziele
						$dzielo__id_kopia =  $row['dzielo_id'];
						$sql1 = "SELECT id_dzielo, tytul, rok, typ, gatunek FROM dzielo WHERE id_dzielo LIKE '$dzielo__id_kopia'";	
							$result1 = $conn->query($sql1);
							if ($result1->num_rows > 0) {
								while($row1 = $result1->fetch_assoc()) {
										$row1_kopia = $row1;
								}
							}
							
							
						//wyświetl dane w tabeli z ocenionymi dziełami	
						echo "<td>".$numer."</td>";
						
						echo "<td>"."<a style='color: turquoise;' href='../pages/dzielo.php?id=$dzielo__id_kopia'>".$row1_kopia['tytul']."</a>"."</td>";
						echo "<td>".$row["ocena"]."</td>";
						echo "<td>".$row1_kopia['rok']." r."."</td>";
						echo "<td>".$row1_kopia['typ']."</td>";
						echo "<td>".$row1_kopia['gatunek']."</td>";
					echo "</tr>";

			$numer++; //dodaj 1 do numeracji wyników wyszukiwania
			}
			
				echo"</tbody>";
			echo "</table>";
		
		}		
	?>
</div>
	

</body>
</html>