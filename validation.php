<?php

define('REGEX_TELEPHONE', '/^\d{3}-\d{3}-\d{3}$/');
define('REGEX_POSTE', '/^\d{1,10}$/');
define('REGEX_TAILLE_CHAMPS', '/.{2,50}/');
define('REGEX_DATE', '/^(0[1-9]|[12][0-9]|3[01])[-](0[1-9]|1[012])[-]19\d\d$/');
define('REGEX_CODE_PERMANENT', '/^[A-Z]{4}\d{8}$/');
define('REGEX_COURRIEL', '/^[a-zA-Z0-9._-]+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$/');
define('REGEX_ASSURANCE_SOCIAL', '/^\d{9}$/');
define('REGEX_CODE_POSTAL', '/^[A-Z]\d[A-Z][" "]\d[A-Z]\d$/');



function enregistrerInformations($detailsInscription,$nomFichier){
   $fichierInscption = 'sauvegarde/'.$nomFichier.'.txt';
   $ecriture = fopen($fichierInscption, 'w') or die("Impossible d'ouvrir ou creer le fichier pour ".$nomFichier);
   if($ecriture !== false){
     fwrite($ecriture, $detailsInscription);
     fclose($ecriture);
     logger("Fichier ".$fichierInscption." enregistrer.");
     return true;
   } else {
     logger("L'ecriture du fichier a echouer.");
     return false;
   }
}

function logger($message){
  $dateLarge = date('j_n_Y');
  $dateFine = date('H_i_s');
  $ligne = "[".$dateFine."] --- ".$message."\r\n";
  file_put_contents("log-".$dateLarge.".txt", $ligne, FILE_APPEND);
}

function creerNomFichierTemporaire($prefixe){
  $date = date('H_i_s');
  $nom = $prefixe."-".$date;
  return $nom;
}

function test(){
  if(enregistrerInformations("rien", creerNomFichierTemporaire("Bob"))){
    header("Location: confirmation.php", true, 303);
  } else {
    header("Location: erreur.php", true, 400);
  }
}

function verifierChampsVide($listeChamps){
  $champsPresents = true;
  foreach ($listeChamps as $champs) {
    if(empty($_POST[$champs])){
      logger("ERREUR - Le champ ".$champs." est obligatoire.");
      $champsPresents = false;
    }
  }
  return $champsPresents;
}

function verifierTexteAutre($radioID, $textName, $pattern){
  $valeurRadio = $_POST[$radioID];
  //test si le radio autre les selectionner
  if(stripos($valeurRadio, 'autre') !== false){
    //si autre est choisi on verifie si le champ text est vide et avec le bon format
    if(empty($_POST[$textName])){
      logger("ERREUR - Le champ ".$textName." est vide alors que ".$_POST[$radioID]. " est selectionner.");
      return false;
    } else if (!preg_match($pattern, $_POST[$textName])) {
      logger("ERREUR - Le champ ".$textName." n'a pas le bon format.");
      return false;
    }
  }
  return true;
}

function validerSectionIdentification(){
  //tout les champs obligatoires sont pleins
  $champsObligatoires = array("Nom_de_famille_a_la_naissance", "Date_de_naissance", "Prenom_usuel", "radio_sexe", "Code_permanent_ministere", "radio_citoyennete", "Lieu_de_naissance",
    "radio_statut_canada", "radio_langue_usage", "radio_langue_maternelle", "Numéro_civique_Type_et_nom_de_la_rue_Direction_de_rue");
  if(!verifierChampsVide($champsObligatoires)){
    return false;
  }

  //si un boutton radio 'autre' est selectionner, le text correspondent doit etre plein.
  $autreTextCitoyennete = verifierTexteAutre("radio-citoyennete", "Autre_citoyennete", REGEX_TAILLE_CHAMPS);
  $autreTextLangueUsage = verifierTexteAutre("radio-langue-usage", "langue_usage_autre", REGEX_TAILLE_CHAMPS);
  $autreTextLangueMaternelle = verifierTexteAutre("radio-langue-maternelle", "langue_usage_autre", REGEX_TAILLE_CHAMPS);
  if(!($autreTextCitoyennete && $autreTextLangueUsage && $autreTextLangueMaternelle)){
    return false;
  }

  //au moins un des 3 numeros de telephones valide
  $telephoneDomicileValide = empty($_POST["Numero_telephone_domicile"]) ? false : preg_match(REGEX_TELEPHONE, $_POST["Numero_telephone_domicile"]);
  $telephoneCellulaireValide = empty($_POST["Numero_cellulaire"]) ? false : preg_match(REGEX_TELEPHONE, $_POST["Numero_cellulaire"]);
  if(empty($_POST["Numero_telephone_travail"]) || empty($_POST["Poste_telephone_tavail"])){
    $telephoneTravailValide = false;
  } else if (preg_match(REGEX_TELEPHONE, $_POST["Numero_telephone_travail"]) && preg_match(REGEX_POSTE, $_POST["Poste_telephone_tavail"]) ){
    $telephoneTravailValide = true;
  }else{
    $telephoneTravailValide = false;
  }
  if(!($telephoneDomicileValide || $telephoneCellulaireValide || $telephoneTravailValide)){
    return false;
  }

  //verification parents, si un champs est remplis alors l'autre aussi
  $pereNomValide = empty($_POST["Nom_de_famille_pere_naissance"]) ? false : preg_match(REGEX_TAILLE_CHAMPS, $_POST["Nom_de_famille_pere_naissance"]);
  $perePrenomValide = empty($_POST["Prenom_usuel_du_pere"]) ? false : preg_match(REGEX_TAILLE_CHAMPS, $_POST["Prenom_usuel_du_pere"]);
  if( $pereNomValide != $perePrenomValide){
    logger("ERREUR - Les champs Nom_de_famille_pere_naissance et Prenom_usuel_du_pere ne sont pas tout les deux pleins ou tout les deux vides.");
    return false;
  }
  $mereNomValide = empty($_POST["Nom_de_famille_mere_naissance"]) ? false : preg_match(REGEX_TAILLE_CHAMPS, $_POST["Nom_de_famille_mere_naissance"]);
  $merePrenomValide = empty($_POST["Prenom_usuel_du_mere"]) ? false : preg_match(REGEX_TAILLE_CHAMPS, $_POST["Prenom_usuel_du_mere"]);
  if( $mereNomValide != $merePrenomValide){
    logger("ERREUR - Les champs Nom_de_famille_mere_naissance et Prenom_usuel_du_mere ne sont pas tout les deux pleins ou tout les deux vides.");
    return false;
  }

  //verifation des formats
  $dateNaissanceValide = preg_match(REGEX_DATE, $_POST["Date_de_naissance"]);
  $codePermanentValide = empty($_POST["Code_permanent"]) ? true : preg_match(REGEX_CODE_PERMANENT, $_POST["Code_permanent"]);
  $codePermanentMinistereValide = preg_match(REGEX_CODE_PERMANENT, $_POST["Code_permanent_ministere"]);
  $assuranceSocialValide = preg_match(REGEX_ASSURANCE_SOCIAL, $_POST["Numero_assurance_sociale"]);
  $codePostalValide = empty($_POST["Code_postal"]) ? true : preg_match(REGEX_CODE_POSTAL, $_POST["Code_postal"]);
  $codePostalAutreValide = empty($_POST["Code_postal-autre"]) ? true : preg_match(REGEX_CODE_POSTAL, $_POST["Code_postal-autre"]);
  $courrielValide = empty($_POST["Courriel_personnel"]) ? true : preg_match(REGEX_COURRIEL, $_POST["Courriel_personnel"]);

  $formatsValide = $dateNaissanceValide && $codePermanentValide && $codePermanentMinistereValide && $assuranceSocialValide && $codePostalValide && $codePostalAutreValide && $courrielValide;
  if($formatsValide){
    logger("INFO - premiere page valide - fin courte.");
    return true;
  }else{
    return false;
  }
  logger("INFO - premiere page valide - fin longue.");
  return true;
}

if ($_POST) {
  $identificationValide = validerSectionIdentification();
  //test();
  /*foreach ($_POST as $param_name => $param_val) {
    logger( "Param: $param_name - Value: $param_val");
  }*/
  exit();
}
?>
