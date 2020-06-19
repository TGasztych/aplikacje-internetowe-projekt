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
 	include "../php/db_connnection.php";
    $conn = OpenCon();
	?>
 
<!-- formularz dodawania dzieł do bazy danych -->
<div class= "pt-5"> <div class="ml-5">

	<h3>powiększ bazę danych o kolejne dzieło:<br><br></h3>
	<form action="../php/dodaj_nowe_dzielo.php" id="formularz">
	 
		tytuł:<br>
		<input type="varchar" name="add_tytul"><br><br>
		
		rok:<br>
		<input type="year" name="add_rok"><br><br>
		
		wybierz typ<br>
		<select  type="varchar" name="add_typ"><br><br>
			<option value="film">film</option>
			<option value="gra">gra</option>
			<option value="książka">książka</option>
		</select><br><br>
		
		gatunek:<br>
		<input type="varchar" name="add_gatunek"><br><br>
		
		opis:<br>
		<textarea type="text" rows="4" cols="50" name="add_opis"></textarea>
		
		<br><br>

		<input type="submit" value="zatwierdź">


	</form> 
	
</div></div>


</body>
</html>