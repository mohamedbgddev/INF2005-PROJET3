<?php

/* 
	Fonction enregistrerInformations cree un fichier avec les informations de l'inscrit
	$codePermanent : prend le nom du fichier
	$detailsInscription : toutes les infos concatenees ensemble.

*/
function enregistrerInformations($detailsInscription,$codePermanent){        
   $fichierInscption = 'sauvegarde/'.$codePermanent.'txt';
   $ecriture = fopen($fichierInscption, 'a') or die("Impossible d'ouvrir le fichier");
   fwrite($ecriture, $detailsCommande); 
   fclose($ecriture);
}

?>
