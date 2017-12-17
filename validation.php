<?php

define('REGEX_TELEPHONE', '/^\d{3}-\d{3}-\d{4}$/');
define('REGEX_POSTE', '/^\d{1,10}$/');
define('REGEX_TAILLE_CHAMPS', '/.{2,60}/');
define('REGEX_DATE', '/^(0[1-9]|[12][0-9]|3[01])[-](0[1-9]|1[012])[-]19\d\d$/');
define('REGEX_CODE_PERMANENT', '/^[A-Z]{4}\d{8}$/');
define('REGEX_COURRIEL', '/^[a-zA-Z0-9._-]+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$/');
define('REGEX_ASSURANCE_SOCIAL', '/^\d{9}$/');
define('REGEX_CODE_POSTAL', '/^[A-Z]\d[A-Z][" "]\d[A-Z]\d$/');
define('REGEX_ANNEE', '/^(19|20)\d\d$/');
define('REGEX_MOI', '/^(0[1-9]|1[012])$/');

if ($_POST) {
  $identificationValide = validerSectionIdentification();
  $programmesValide = validerSectionProgrammes();
  $etudeSecondairesEtCollegialesValide = validerSectionEtudeSC();
  $etudeUniversitairesValide = validerSectionUniversitaire();
  $emploiValide = validerSectionEmploi();
  if($identificationValide && $programmesValide && $etudeSecondairesEtCollegialesValide && $etudeUniversitairesValide && $emploiValide){
      $codePerm = $_POST["Code_permanent_ministere"];
      $text = "";
      foreach ($_POST as $nom => $valeur){
        $text = $text."[".$nom."] : ".$valeur."\r\n";
      }
      sauvegardeRedirect($text, $codePerm);
  }else{
    header("Location: erreur.php", true, 400);
    exit();
  }
}


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

function sauvegardeRedirect($text, $nom){
  if(enregistrerInformations($text, creerNomFichierTemporaire($nom))){
    header("Location: confirmation.php", true, 303);
    exit();
  } else {
    header("Location: erreur.php", true, 400);
    exit();
  }
}

function verifierChampsVide($listeChamps, $logger){
  $champsPresents = true;
  foreach ($listeChamps as $champs) {
    if(empty($_POST[$champs])){
      if($logger){
        logger("ERREUR - Le champ ".$champs." est obligatoire.");
      }
      $champsPresents = false;
    }
  }
  return $champsPresents;
}

//fonction qui prend une liste de booleans en parametre et qui retourne vrai si
//tout les membres on la meme valeur, faux sinon.
function arrayBooleanUniqueCount($array){
  $unique = array_unique($array);
  $count = count($unique);
  if($count === 1){
    return true;
  }
  return false;
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
  $champsObligatoires = array("Nom_de_famille_a_la_naissance", "Date_de_naissance", "Prenom_usuel", "radio-sexe", "Code_permanent_ministere", "radio_citoyennete", "Lieu_de_naissance",
    "radio-statut-canada", "radio-langue-usage", "radio-langue-maternelle", "Numéro_civique_Type_et_nom_de_la_rue_Direction_de_rue");
  if(!verifierChampsVide($champsObligatoires, true)){
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
  $pereNomValide = empty($_POST["Nom_de_famille_pere_naissance"]);
  $perePrenomValide = empty($_POST["Prenom_usuel_du_pere"]);
  if( $pereNomValide != $perePrenomValide){
    logger("ERREUR - Les champs Nom_de_famille_pere_naissance et Prenom_usuel_du_pere ne sont pas tout les deux pleins ou tout les deux vides.");
    return false;
  }
  $mereNomValide = empty($_POST["Nom_de_famille_mere_naissance"]);
  $merePrenomValide = empty($_POST["Prenom_usuel_du_mere"]);
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
    logger("INFO - section identification valide - fin courte.");
    return true;
  }else{
    return false;
  }
}


function validerSectionProgrammes(){
  //tout les champs obligatoires sont pleins
  $champsObligatoires = array("radio-trimestre", "trimestre_annee", "premier_choix_titre", "radio-temp-1", "premier_choix_code", "radio-type-programme-1");
  if(!verifierChampsVide($champsObligatoires, true)){
    return false;
  }

  //deuxieme choix, soit tout les champs vide ou tout les champs remplis
  $listeDeuxieme = array(empty($_POST["deuxieme_choix_titre"]), empty($_POST["deuxieme_choix_code"]), empty($_POST["radio-temp-2"]), empty($_POST["radio-type-programme-2"]));
  if(!(arrayBooleanUniqueCount($listeDeuxieme))){
    logger("ERREUR - deuxieme choix invalide.");
    return false;
  }

  //troisieme choix, soit tout les champs vide ou tout les champs remplis
  $listeTroisieme = array(empty($_POST["troisieme_choix_titre"]), empty($_POST["troisieme_choix_code"]), empty($_POST["radio-temp-3"]), empty($_POST["radio-type-programme-3"]));
  if( !(arrayBooleanUniqueCount($listeTroisieme)) ){
    logger("ERREUR - troisieme choix invalide.");
    return false;
  }
  logger("INFO - section programmes valide.");
  return true;
}

function comparerEtValiderDates($debut, $fin){
  $debutValide = empty($_POST[$debut]) ? false : preg_match(REGEX_ANNEE, $_POST[$debut]);
  $finValide = empty($_POST[$fin]) ? false : preg_match(REGEX_ANNEE, $_POST[$fin]);
  if($finValide && $debutValide){
    $diff = $_POST[$fin] - $_POST[$debut];
    $diffValide = $diffAnneeHQ > 0 ? true : false;
    return $diffValide;
  }
  return false;
}

function validerSectionEtudeSC(){
  //aucun champs obligatoires. Si un diplome est specifie tout ses champs doivent etre remplis.

  //derniere annee du secondaire et dates
  if(!empty($_POST["derniere_annee_secondaire"])){
    if(!comparerEtValiderDates("de_annee_derniere_annee_secondaire", "a_annee_derniere_annee_secondaire")){
      logger("ERREUR - Les dates de periode de fréquentation ne sont pas valides.");
      return false;
    }
  }
  //diplome d'etude secondaire ou collegiales a l'exterieur du QC
  $champsDiplomeHQ = array(empty($_POST["diplome_sec_col_hors_quebec"]), empty($_POST["discipline_specialisation_hors_quebec"]), empty($_POST["institution_hors_quebec"]),
      empty($_POST["pays_hors_quebec"]), empty($_POST["annee_obtention_diplome_hors_quebec"]), empty($_POST["mois_obtention_diplome_hors_quebec"]),
      empty($_POST["de_annee_diplome_hors_quebec"]), empty($_POST["a_annee_diplome_hors_quebec"]));

  if(arrayBooleanUniqueCount($champsDiplomeHQ) && !empty($_POST["diplome_sec_col_hors_quebec"])){
    $nomDiplome = empty($_POST["diplome_sec_col_hors_quebec"]) ? false : preg_match(REGEX_TAILLE_CHAMPS, $_POST["diplome_sec_col_hors_quebec"]);
    $disciplineSpecialisationHQValide = empty($_POST["discipline_specialisation_hors_quebec"]) ? false : preg_match(REGEX_TAILLE_CHAMPS, $_POST["discipline_specialisation_hors_quebec"]);
    $institutionHQValide = empty($_POST["institution_hors_quebec"]) ? false : preg_match(REGEX_TAILLE_CHAMPS, $_POST["institution_hors_quebec"]);
    $paysValide = empty($_POST["pays_hors_quebec"]) ? false : preg_match(REGEX_TAILLE_CHAMPS, $_POST["pays_hors_quebec"]);
    $anneeObtentionHQ = empty($_POST["annee_obtention_diplome_hors_quebec"]) ? false : preg_match(REGEX_ANNEE, $_POST["annee_obtention_diplome_hors_quebec"]);
    $moiObtentionHQ = empty($_POST["mois_obtention_diplome_hors_quebec"]) ? false : preg_match(REGEX_ANNEE, $_POST["mois_obtention_diplome_hors_quebec"]);
    $anneeHQValide = comparerEtValiderDates("de_annee_diplome_hors_quebec", "a_annee_diplome_hors_quebec");
    if(!($nomDiplome && $disciplineSpecialisationHQValide && $institutionHQValide && $paysValide && $anneeObtentionHQ && $moiObtentionHQ && $anneeHQValide)){
      logger("ERREUR - section etutde secondaires et collegiales hors Quebec invalide.");
      return false;
    }
  } else if (!arrayBooleanUniqueCount($champsDiplomeHQ)){
    logger("ERREUR - section etutde secondaires et collegiales hors Quebec invalide.");
    return false;
  }

  //DEC ou autre
  $champsDiplomeQC = array(empty($_POST["radio-DEC_ou_autre"]), empty($_POST["diplome_sec_col_dans_quebec"]), empty($_POST["discipline_specialisation_dans_quebec"]),
      empty($_POST["institution_dans_quebec"]), empty($_POST["de_annee_diplome_dans_quebec"]), empty($_POST["a_annee_diplome_dans_quebec"]),
      empty($_POST["radio-obtention-diplome-page-2"]), empty($_POST["mois_obtention_diplome_dans_quebec"]), empty($_POST["annee_obtention_diplome_dans_quebec"]));

  if(arrayBooleanUniqueCount($champsDiplomeQC) && !empty($_POST["diplome_sec_col_dans_quebec"])){
    $nomDiplomeQC = empty($_POST["diplome_sec_col_dans_quebec"]) ? false : preg_match(REGEX_TAILLE_CHAMPS, $_POST["diplome_sec_col_dans_quebec"]);
    $disciplineSpecialisationQCValide = empty($_POST["discipline_specialisation_dans_quebec"]) ? false : preg_match(REGEX_TAILLE_CHAMPS, $_POST["discipline_specialisation_dans_quebec"]);
    $institutionQCValide = empty($_POST["institution_dans_quebec"]) ? false : preg_match(REGEX_TAILLE_CHAMPS, $_POST["institution_dans_quebec"]);
    $anneeObtentionQC = empty($_POST["annee_obtention_diplome_dans_quebec"]) ? false : preg_match(REGEX_ANNEE, $_POST["annee_obtention_diplome_dans_quebec"]);
    $moiObtentionQC = empty($_POST["mois_obtention_diplome_dans_quebec"]) ? false : preg_match(REGEX_ANNEE, $_POST["mois_obtention_diplome_dans_quebec"]);
    $anneeQCValide = comparerEtValiderDates("a_annee_diplome_dans_quebec", "de_annee_diplome_dans_quebec");
    if(!($nomDiplome && $disciplineSpecialisationQCValide && $institutionQCValide && $paysValide && $anneeObtentionQC && $moiObtentionQC && $anneeQCValide)){
      logger("ERREUR - section etutde secondaires et collegiales dans le Quebec invalide.");
      return false;
    }
  } else if (!arrayBooleanUniqueCount($champsDiplomeQC)){
    logger("ERREUR - section etutde secondaires et collegiales dans le Quebec invalide.");
    return false;
  }

  logger("INFO - section etude secondaires et collegiales dans le Quebec valide.");
  return true;
}

function validerSectionUniversitaire(){
  //aucun champs obligatoires. Si un diplome est specifie tout ses champs doivent etre remplis.
  //diplome le plus recent
  $champsDiplomeURecent = array(empty($_POST["radio-diplome-universitaire-1"]), empty($_POST["diplome_universitaire_1"]), empty($_POST["discipline_specialisation_universitaire_1"]),
      empty($_POST["institution_universitaire_1"]), empty($_POST["pays_universitaire_1"]), empty($_POST["de_annee_diplome_universitaire_1"]), empty($_POST["a_annee_diplome_universitaire_1"]),
      empty($_POST["radio-obtention-diplome-universitaire-1"]), empty($_POST["mois_obtention_diplome_universitaire_1"]), empty($_POST["annee_obtention_diplome_universitaire_1"]),
      empty($_POST["nombre_credits_diplome_universitaire_1"]));

  if(arrayBooleanUniqueCount($champsDiplomeURecent) && !empty($_POST["diplome_universitaire_1"])){
    $nomDiplomeU = empty($_POST["diplome_universitaire_1"]) ? false : preg_match(REGEX_TAILLE_CHAMPS, $_POST["diplome_universitaire_1"]);
    $disciplineSpecialisationUValide = empty($_POST["discipline_specialisation_universitaire_1"]) ? false : preg_match(REGEX_TAILLE_CHAMPS, $_POST["discipline_specialisation_universitaire_1"]);
    $institutionUValide = empty($_POST["institution_universitaire_1"]) ? false : preg_match(REGEX_TAILLE_CHAMPS, $_POST["institution_universitaire_1"]);
    $paysValide = empty($_POST["pays_universitaire_1"]) ? false : preg_match(REGEX_TAILLE_CHAMPS, $_POST["pays_universitaire_1"]);
    $anneeObtentionU = empty($_POST["annee_obtention_diplome_universitaire_1"]) ? false : preg_match(REGEX_ANNEE, $_POST["annee_obtention_diplome_universitaire_1"]);
    $moiObtentionU = empty($_POST["mois_obtention_diplome_universitaire_1"]) ? false : preg_match(REGEX_ANNEE, $_POST["mois_obtention_diplome_universitaire_1"]);
    $anneeUValide = comparerEtValiderDates("a_annee_diplome_universitaire_1", "de_annee_diplome_universitaire_1");
    if(!($nomDiplome && $disciplineSpecialisationUValide && $institutionUValide && $paysValide && $anneeObtentionU && $moiObtentionU && $anneeUValide)){
      logger("ERREUR - section grade ou diplome le plus recent ou complete invalide.");
      return false;
    }
  } else if (!arrayBooleanUniqueCount($champsDiplomeU1Recent)){
    logger("ERREUR - section grade ou diplome le plus recent ou complete invalide.");
    return false;
  }


  //diplome entrepris ou complete
  $champsDiplomeU2 = array(empty($_POST["radio-diplome-universitaire-2"]), empty($_POST["diplome_universitaire_2"]), empty($_POST["discipline_specialisation_universitaire_2"]),
      empty($_POST["institution_universitaire_2"]), empty($_POST["pays_universitaire_2"]), empty($_POST["de_annee_diplome_universitaire_2"]), empty($_POST["a_annee_diplome_universitaire_2"]),
      empty($_POST["radio-obtention-diplome-universitaire-2"]), empty($_POST["mois_obtention_diplome_universitaire_2"]),
      empty($_POST["annee_obtention_diplome_universitaire_2"]), empty($_POST["nombre_credits_diplome_universitaire_2"]));

  if(arrayBooleanUniqueCount($champsDiplomeU2) && !empty($_POST["diplome_universitaire_2"])){
    $nomDiplomeU2 = empty($_POST["diplome_universitaire_2"]) ? false : preg_match(REGEX_TAILLE_CHAMPS, $_POST["diplome_universitaire_2"]);
    $disciplineSpecialisationU2Valide = empty($_POST["discipline_specialisation_universitaire_2"]) ? false : preg_match(REGEX_TAILLE_CHAMPS, $_POST["discipline_specialisation_universitaire_2"]);
    $institutionU2Valide = empty($_POST["institution_universitaire_2"]) ? false : preg_match(REGEX_TAILLE_CHAMPS, $_POST["institution_universitaire_2"]);
    $paysValide = empty($_POST["pays_universitaire_2"]) ? false : preg_match(REGEX_TAILLE_CHAMPS, $_POST["pays_universitaire_2"]);
    $anneeObtentionU2 = empty($_POST["annee_obtention_diplome_universitaire_2"]) ? false : preg_match(REGEX_ANNEE, $_POST["annee_obtention_diplome_universitaire_2"]);
    $moiObtentionU2 = empty($_POST["mois_obtention_diplome_universitaire_2"]) ? false : preg_match(REGEX_ANNEE, $_POST["mois_obtention_diplome_universitaire_2"]);
    $anneeU2Valide = comparerEtValiderDates("a_annee_diplome_universitaire_2", "de_annee_diplome_universitaire_2");
    if(!($nomDiplome && $disciplineSpecialisationU2Valide && $institutionU2Valide && $paysValide && $anneeObtentionU2 && $moiObtentionU2 && $anneeU2Valide)){
      logger("ERREUR - section autre etude universitaire invalide.");
      return false;
    }
  } else if (!arrayBooleanUniqueCount($champsDiplomeU2)){
    logger("ERREUR - section autre etude universitaire invalide.");
    return false;
  }

  logger("INFO - section etude universitaire valide.");
  return true;
}

function comparerEtValiderDatesAvecMoi($moiDebut, $anneeDebut, $moiFin, $anneeFin){
  $anneeDebutValide = empty($_POST[$anneeDebut]) ? false : preg_match(REGEX_ANNEE, $_POST[$anneeDebut]);
  $moiDebutValide = empty($_POST[$moiDebut]) ? false : preg_match(REGEX_ANNEE, $_POST[$moiDebut]);
  $anneeFinValide = empty($_POST[$anneeFin]) ? false : preg_match(REGEX_ANNEE, $_POST[$anneeFin]);
  $moiFinValide = empty($_POST[$moiFin]) ? false : preg_match(REGEX_ANNEE, $_POST[$moiFin]);
  if($anneeDebutValide && $moiDebutValide && $anneeFinValide && $moiFinValide){
    $anneeDiff = $_POST([$anneeFin]) - $_POST([$anneeDebut]);
    if($anneeDiff > 0){
      return true;
    } else if ($anneeDiff === 0) {
      $moiDiff = $_POST([$moiFin]) - $_POST([$moiDebut]);
      if($moiDiff > 0){
        return true;
      }else{
        return false;
      }
    } else {
      return false;
    }
  }
}

function validerSectionEmploi(){
  //Si un emploi est spécifié, tous ses champs doivent être remplis
  //Premiere section
  $champsEmploi1 = array(empty($_POST["nom_employe_1"]), empty($_POST["fonction_occupee_1"]), empty($_POST["radio-type-employe-1"]),
      empty($_POST["radio-temps-employe-1"]), empty($_POST["de_mois_employe_1"]), empty($_POST["de_annee_employe_1"]),
      empty($_POST["a_mois_employe_1"]), empty($_POST["a_annee_employe_1"]));

  if(arrayBooleanUniqueCount($champsEmploi1) && !empty($_POST["nom_employe_1"])){
    $dateValide1 = comparerEtValiderDatesAvecMoi("de_mois_employe_1", "de_annee_employe_1", "a_mois_employe_1", "a_annee_employe_1");
    return $dateValide1;
  } else {
    logger("ERREUR - section emploi 1 invalide.");
    return false;
  }

  //Deuxieme section
  $champsEmploi2 = array(empty($_POST["nom_employe_2"]), empty($_POST["fonction_occupee_2"]), empty($_POST["radio-type-employe-2"]),
      empty($_POST["radio-temps-employe-2"]), empty($_POST["de_mois_employe_2"]), empty($_POST["de_annee_employe_2"]),
      empty($_POST["a_mois_employe_2"]), empty($_POST["a_annee_employe_2"]));

  if(arrayBooleanUniqueCount($champsEmploi2) && !empty($_POST["nom_employe_2"])){
    $dateValide2 = comparerEtValiderDatesAvecMoi("de_mois_employe_2", "de_annee_employe_2", "a_mois_employe_2", "a_annee_employe_2");
    return $dateValide2;
  } else {
    logger("ERREUR - section emploi 2 invalide.");
    return false;
  }

  //Troisieme section
  $champsEmploi3 = array(empty($_POST["nom_employe_3"]), empty($_POST["fonction_occupee_3"]), empty($_POST["radio-type-employe-3"]),
      empty($_POST["radio-temps-employe-3"]), empty($_POST["de_mois_employe_3"]), empty($_POST["de_annee_employe_3"]),
      empty($_POST["a_mois_employe_3"]), empty($_POST["a_annee_employe_3"]));

  if(arrayBooleanUniqueCount($champsEmploi3) && !empty($_POST["nom_employe_3"])){
    $dateValide3 = comparerEtValiderDatesAvecMoi("de_mois_employe_3", "de_annee_employe_3", "a_mois_employe_3", "a_annee_employe_3");
    return $dateValide3;
  } else {
    logger("ERREUR - section emploi 3 invalide.");
    return false;
  }

  logger("INFO - section emploi valide.");
  return true;
}

?>
