<!-- strona główna, wyszukiwanie -->
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
</head>
<body>


	<?php 
		//navbar i otworzenie połączenia
		include("pages/top.php");
	?>
    <?php
		include "php/db_connnection.php";
		$conn = OpenCon();
    ?>

		
	<div class="mt-4"></div><br><div class="mt-4"></div><br><div class="mt-4"> </div><br><div class="mt-4"> </div>

	<div class="container">
		<div class="row">
			<div class="col-4"></div>
			<div class="col-4 d-flex justify-content-center">

				<!-- formularz do wyszukiwania po tytule w bazie danych  -->
				<form class="form-inline" action="pages/szukaj.php">
					<input class="form-control" placeholder="podaj tytuł" type="text" id="fname" name="keyword">
					<button type="submit" class="btn btn-outline-primary my-2 my-sm-0" value="Submit" >szukaj</button>
				</form>
				
			</div>
			<div class="col-4"></div>
		</div><div class="row">
			<div class="col-4"></div>
			<div class="col-4 d-flex justify-content-center">
				<h3>lub</h3>
			</div>
			<div class="col-4"></div>
		</div><div class="row">	
			<div class="col-4"></div>
		
			<div class="col-4 d-flex justify-content-center">
			
				<!-- przycisk przenoszący na stronę z  wszystkimi rekordami -->
				<form class="form-inline" action="pages/szukaj.php">
					<input type="hidden" class="form-control" placeholder="podaj tytuł" type="text" id="fname" name="keyword">
					<button type="submit" class="btn btn-outline-primary my-2 my-sm-0" value="Submit" >zobacz wszystko</button>
				</form>
				
			</div>
			<div class="col-4"></div>
		</div>
	</div>


</body>

</html>
