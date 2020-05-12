<!DOCTYPE html>
<?php
	

?>
<html lang="fr">
    <head>
    	<style>
            p
            {
                color: red;
            }
            td,th
            {
            	border:1px solid black;
            }
            table
            {
            	border-collapse: collapse;
            }
        </style>
        <title>Exercice 8</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    </head>
    <body>
		
		
    	<h1>Vos information:</h1>
    	<table>
    		<tr>
    			<td>
    				<?php 
    					$civ = $_GET["civ"];
    					if($civ == ""){
    						echo "<p>Civilité</p> ";	
    					}
    					else{
    						echo "Civilité";	
    					}
    				?>
    			</td>
    			<td><?php echo $_GET["civ"]; ?></td>
    		</tr>
    		<tr>
    			<td>
    				<?php 
    					$nom = $_GET["nom"];
    					if($nom == ""){
    						echo "<p>Nom</p> ";	
    					}
    					else{
    						echo "Nom";	
    					}
    				?>
    			</td>
    			<td><?php echo strtoupper($_GET["nom"]); ?></td>
    		</tr>
    		<tr>
    			<td>
    				<?php 
    					$prenom = $_GET["prenom"];
    					if($prenom == ""){
    						echo "<p>Prénom</p> ";	
    					}
    					else{
    						echo "Prénom";	
    					}
    				?>
    			</td>
    			<td><?php echo $_GET["prenom"]; ?></td>
    		</tr>
    		<tr>
    			<td>
    				<?php 
    					$dateN = $_GET["dateN"];
    					if($dateN == ""){
    						echo "<p>Date de naissance</p> ";	
    					}
    					else{
    						echo "Date de naissance ";	
    					}
    				?>
    			</td>
    			<td><?php echo $_GET["dateN"]; ?></td>
    		</tr>
    		<tr>
    			<td>
    				<?php 
    					$numTel = $_GET['numTel'];
    					if($numTel == ""){
    						echo "<p>Numéro de telephone </p> ";	
    					}
    					else{
    						echo "Numéro de telephone  ";	
    					}
    				?>
    			</td>
    			<td><?php echo $_GET["numTel"]; ?></td>
    		</tr>
    		<tr>
    			<td>
    				<?php 
    					$email = $_GET['mail'];
    					if($email == ""){
    						echo "<p>Email </p> ";	
    					}
    					else{
    						echo "Email  ";	
    					}
    				?>
    			</td>
    			<td><?php echo $_GET["mail"]; ?></td>
    		</tr>
    		<tr>
    			<td>
    				<?php 
    					$nivP = $_GET['nivP'];
    					if($nivP == ""){
    						echo "<p>Niveau php </p> ";	
    					}
    					else{
    						echo "Niveau php  ";	
    					}
    				?>
    			</td>
    			<td><?php echo $_GET["nivP"]; ?></td>
    		</tr>
    		<tr>
    			<td>
    				<?php 	
    					echo "Framework pratiqués";	
    				?>
    			</td>
    			<td>
    				<ul>
    				<?php 
    					$fram = $_GET["fram"]; 
    					foreach( $fram as $unFram ){													
							echo "<li>" . $unFram . "</li>";
						}
    				?>
    				</ul>
    			</td>
    		</tr>
    		<tr>
    			<td>
    				<?php 	
    					echo "Moi";	
    				?>
    			</td>
    			<td>
    				<ul>
    				<?php 
    					echo $_GET["moi"];
    				?>
    				</ul>
    			</td>
    		</tr>
    	</table>

		
		
		
	</body>
</html>
