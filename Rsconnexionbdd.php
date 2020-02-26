<!DOCTYPE html>
<html>
<head>
	<title>	</title>
</head>
<body>

<?php 	


            $servername = 'localhost';
            $username = 'root';
            $password = '';
            
           
            $conn = new mysqli($servername, $username, $password);
            
          
            if($conn->connect_error){
                die('Erreur : ' .$conn->connect_error);
            }
            echo 'Connexion réussie';





?>
</body>
</html>