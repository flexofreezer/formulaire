<!DOCTYPE html>
<html>
<head>
	<title>Lister Les elements de la base de donnée</title>
	<META charset="utf-8"/>
</head>
<body>
   <?php
   try{

    // Inclusion du script de connexion à la base
   	require('connexionBD.php');

   	$requete = $con->query("SELECT * from formulaire");
   	?>
   	<table>
   	<tr>
   		<td colspan="6" id="entete">Listes des clients</td>
   	</tr>
   	<p><tr>
   	    <th>ID</th>
   		<th>NOM</th>
   		<th>PRENOM</th>
   		<th>ADRESSE</th>
   		<th>VILLE</th>
   		<th>CODE</th>
   	</tr>
   	</p>

   	
   		<?php

      // Boucle sur le resultat de la requete pour afficher la liste
             while($resultat = $requete->fetch()){

        ?>
		        
                <tr>
				<p>
                 <td><?php echo $resultat['id']; ?></td>
                  <td><?php echo $resultat['nom']; ?></td>
                  <td><?php echo $resultat['prenom'];  ?></td>
                  <td><?php echo $resultat['adresse'];  ?></td>
                  <td><?php echo $resultat['ville'] ; ?></td>
                  <td><?php echo $resultat['code'];  ?>
                 </p>
                </tr>

        <?php
             }
         ?>
   		
    </table>
   	<?php
   }catch(PDOException $e){
   	     die('Erreur!!!'.$e->getMessage());
   }

   ?>
   
</body>
</html>
