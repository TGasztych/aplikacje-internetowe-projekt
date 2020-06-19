<!--strona z informacjami dodyczące wybranego dzieła -->
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
</head>
<body>

 <?php 
//navbar i otworzenie połączenia
include("top.php");
?>


<?php
	//polacz z bazą danych
	include "../php/db_connnection.php";
	$conn = OpenCon();

	$id_dziela_z_bazy = $_GET["id"];
	
	
	
		$sql = "SELECT `id_dzielo`, `tytul`, `rok`, `typ`, `gatunek`, `opis` FROM `dzielo` WHERE id_dzielo LIKE $id_dziela_z_bazy";
		$result = $conn->query($sql);
		$row = $result->fetch_assoc();
			
			
		//informacje o danym dziele
		echo '<div class="container">';
			echo '<div class="row">';
			
				echo '<div class="col-1">'.'</div>';
				echo '<div class="col">';
				
				echo "<span class='duza_czcionka'>".$row["tytul"]."&nbsp"."&nbsp"."&nbsp"."</span>"."<span class='srednia_czcionka'>"."(".$row["rok"].")"."</span>";
				
				echo '</div>';
				echo '<div class="col">'.'</div>';
				
			echo '</div>'.'<div class="row">';	
				echo '<div class="col-12">'.'<br>'.'<br>'.'</div>';
			echo '</div>'.'<div class="row">';

				echo '<div class="col-1">'.'</div>';
				echo '<div class="col-1">'."<p class='text-right'> typ:</p>"."</div>";
				echo '<div class="col-3">';
						
					echo "<p>".$row["typ"]."</p>";
					
				echo '</div>';
				echo '<div class="col-3">'.'</div>';
				
				echo '<div class="col-1">';
				
				?>
					<!-- dodawanie do swojej listy -->
						<form action="../php/dodaj_do_listy.php">
							<input class="form-control" placeholder="ocena" type="int" name="add_ocena">
							<input type="hidden" value="<?php echo $id_dziela_z_bazy?>" name="id_dziela" />
				</div><div class="col-3">
							<input type="submit" class="btn btn-outline-primary" value="dodaj do mojej listy">

						</form>
				<?php				
				
				
				
				echo '</div>';	
				
			echo '</div>'.'<div class="row">';	
				
				echo '<div class="col-1">'.'</div>';
				echo '<div class="col-1">'."<p class='text-right'> gatunek: </p>"."</div>";
				echo '<div class="col-3">';
				
					echo "<p>".$row["gatunek"]."</p>";
				
				echo '</div>';
				echo '<div class="col-7">'.'</div>';	
					
			echo '</div>'.'<div class="row">';	
				
				echo '<div class="col-1">'.'</div>';
				echo '<div class="col-1">'."<p class='text-right'> opis: </p>"."</div>";
				echo '<div class="col-7">';
				
					echo "<p>".$row["opis"]."</p>";
				
				echo '</div>';
				echo '<div class="col-3">'.'</div>';	
				
			echo '</div>';
			
			
?>




</body>
</html>