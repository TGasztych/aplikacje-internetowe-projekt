<html>
<head>
	          <meta charset="UTF-8">
</head>

   <?php
   
    //funkcja łącząca z bazą danych
    function OpenCon()
     {
		$dbhost = "localhost";
		$dbuser = "root";
		$dbpass = "usbw";
		$db = "test";
		 
		$conn = new mysqli($dbhost, $dbuser, $dbpass, $db) or die("Connect failed: %s\n". $conn -> error);
		 
		mysqli_set_charset($conn, "utf8");	//ustaw kodowanie znaków na utf8 (polskie znaki)
		 
		 
		return $conn;
     }
    //funkcja zamykająca połączenie z bazą danych
    function CloseCon($conn)
     {
		$conn -> close();
     }
       
    ?>
	
</body>
</html>