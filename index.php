<!DOCTYPE html>
<html lang="en">
<head>
  <title>Formulaire d'inscription</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>
</head>
<body>
  <form id="formulaire-inscription" name="formulaire_inscription" method="post" action="validation.php">
    <div class="container preface">
      <p><span class="premier-titre">prenez</span><span class="premier-titre-suite">votre place.</span></p>
      <p class="second-titre">Études de premier cycle</p>
      <p class="troisieme-titre">Demande d'admission</p>
      <p class="quatrieme-titre">Instruction et formulaire</p>
      <p class="cinquieme-titre">UQÀM</p>
    </div>
    <br>
    <div class="container well">
      <div class="row">
        <div class="col-md-4">
          <p class="entete-gauche">identification</p>
        </div>
        <div class="col-md-4">
          <p class="entete-centre">1</p>
        </div>
        <div class="col-md-4">
          <p class="entete-droite-premier">demande d'admission</p>
          <P class="entete-droite-second">Études de premier cycle</P>
        </div>
      </div>
      <hr class="trait">
      <div class="row">
        <div class="col-md-8">
          <label for="Nom-de-famille-a-la-naissance">Nom de famille a la naissance</label>
          <input type="text" class="form-control"
                   name="Nom_de_famille_a_la_naissance"
                   id="Nom-de-famille-a-la-naissance"
                   placeholder=""
                   onblur="nomFamilleNaissanceValidation()">
          <span id="valider-Nom-de-famille-a-la-naissance" class="errorHeader"></span>
        </div>
        <div class="col-md-4">
          <label for="Date-de-naissance">Date de naissance</label>
          <div class="row">
            <div class="col-md-12">
              <input type="text" class="form-control"
                    name="Date_de_naissance"
                    id="Date-de-naissance"
                    placeholder="JJ-MM-AAAA"
                    onblur="dateDeNaissanceValidation()">
              <div id="valider-Date-de-naissance" class="errorHeader"></div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-8">
          <label for="Prenom-usuel">Prenom usuel</label>
          <input type="text" class="form-control"
              name="Prenom_usuel"
              id="Prenom-usuel"
              placeholder=""
              onblur="prenomUsuelValidation()">
          <div id="valider-Prenom-usuel" class="errorHeader"></div>
        </div>
        <div class="col-md-4">
          <label for="Sexe">Sexe</label>
          <div class="row">
            <div class="col-md-2">
              <div class="radio">
                <label><input type="radio" name="radio-sexe" value="Feminin">Feminin</label>
              </div>
            </div>
            <div class="col-md-2 col-md-offset-1">
              <div class="radio">
                <label><input type="radio" name="radio-sexe" value="Masculin">Masculin</label>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-8"></div>
        <div class="col-md-4">
          <div id="valider-Sexe" class="errorHeader"></div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-7">
          <label for="Code-permanent">Code permanent (alphanumérique) si vous avez déjà étudié à l’UQAM</label>
          <input type="text" class="form-control"
              name="Code_permanent"
              id="Code-permanent"
              placeholder="XXXX99999999"
              onblur="codePermanentValidation()">
          <div id="valider-Code-permanent" class="errorHeader"></div>
        </div>
        <div class="col-md-5">
          <label for="Numero-assurance-sociale">No d’assurance sociale</label>
          <input type="text" class="form-control"
                name="Numero_assurance_sociale"
                id="Numero-assurance-sociale"
                placeholder="999999999"
                onblur="numeroAssurranceSocialeValidation()">
          <div id="valider-Numero-assurance-sociale" class="errorHeader"></div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-7">
          <label for="Code-permanent-ministere">Code permanent (alphanumérique) du ministère de l’Éducation et de l’Enseignement supérieur</label>
          <input type="text" class="form-control"
              name="Code_permanent_ministere"
              id="Code-permanent-ministere"
              placeholder="XXXX99999999"
              onblur="codePermanentMinistereValidation()">
          <div id="valider-Code-permanent-ministere" class="errorHeader"></div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="row">
            <div class="col-md-12">
              <label for="">Citoyenneté</label>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="radio">
                <label><input onclick="document.getElementById('Autre-citoyennete').disabled = true;"
                   type="radio" name="radio-citoyennete" value="Canadienne">Canadienne</label>
              </div>
            </div>
            <div class="col-md-6">
              <div class="radio">
                <label><input onclick="document.getElementById('Autre-citoyennete').disabled = false;"
                  type="radio" name="radio-citoyennete" value="AutreCitoyennete">Autre(precisez)</label>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <input type="text" class="form-control" name="Autre_citoyennete"
                   id="Autre-citoyennete"
                   placeholder=""
                   disabled="disabled"
                   onblur="AutreCitoyenneteValidation()">
              <div id="valider-Autre-citoyennete" class="errorHeader"></div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <label for="Lieu-de-naissance(ville)">Lieu de naissance(ville)</label>
              <input type="text" class="form-control"
                    name="Lieu_de_naissance"
                    id="Lieu-de-naissance"
                    placeholder=""
                    onblur="lieuNaissanceValidation()">
              <div id="valider-Lieu-de-naissance" class="errorHeader"></div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <label for="Nom-de-famille-pere-naissance">Nom de famille du père à la naissance</label>
              <input type="text" class="form-control"
                    name="Nom_de_famille_pere_naissance"
                    id="Nom-de-famille-pere-naissance"
                    placeholder=""
                    onblur="nomFamillePereNaissance()">
              <div id="valider-Nom-de-famille-pere-naissance"></div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <label for="Prenom-usuel-du-pere">Prénom usuel du père</label>
              <input type="text" class="form-control"
                    name="Prenom_usuel_du_pere"
                    id="Prenom-usuel-du-pere"
                    placeholder=""
                    onblur="prenomUsuelPere()">
              <div id="valider-Prenom-usuel-du-pere"></div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <label for="Nom-de-famille-mere-naissance">Nom de famille de la mère à la naissance</label>
              <input type="text" class="form-control"
                     name="Nom_de_famille_mere_naissance"
                     id="Nom-de-famille-mere-naissance"
                     placeholder=""
                     onblur="nomFamilleMereNaissance()">
              <div id="valider-Nom-de-famille-mere-naissance"></div>
            </div>
          </div>
           <div class="row">
            <div class="col-md-12">
              <label for="Prenom-usuel-du-mere">Prénom usuel de la mère</label>
              <input type="text" class="form-control"
                    name="Prenom_usuel_du_mere"
                    id="Prenom-usuel-du-mere"
                    placeholder=""
                    onblur="prenomUsuelMere()">
              <div id="valider-Prenom-usuel-du-mere"></div>
            </div>
          </div>

          <!-- Telephone a domicile -->
          <div class="row">
            <div class="col-md-12">
              <label for="">Téléphone a domicile</label>
            </div>
          </div>
          <div class="row">
            <div class="col-md-8">
              <input type="text" class="form-control"
                    name="Numero_telephone_domicile"
                    id="Numero-telephone-domicile"
                    placeholder="999-999-9999"
                    onblur="numeroTelephoneDomicileValidation()">
              <p class="text-left">Numéro</p>
              <div id="valider-Numero-telephone-domicile" class="errorHeader"></div>
            </div>
          </div>
          <!-- Cellulaire -->
          <div class="row">
            <div class="col-md-12">
              <label for="#">Cellulaire</label>
            </div>
          </div>
          <div class="row">
            <div class="col-md-8">
              <input type="text" class="form-control"
                    name="Numero_cellulaire"
                    id="Numero-cellulaire"
                    placeholder="999-999-9999"
                    onblur="numeroCellulaireValidation()">
              <p class="text-left">Numéro</p>
              <div id="valider-Numero-cellulaire" class="errorHeader"></div>
            </div>
          </div>
          <!-- Telephone au travail -->
          <div class="row">
            <div class="col-md-12">
              <label for="#">Téléphone au travail</label>
            </div>
          </div>
          <div class="row">
            <div class="col-md-8">
              <input type="text" class="form-control"
                  name="Numero_telephone_travail"
                  id="Numero-telephone-travail"
                  placeholder="999-999-9999"
                  onblur="numeroTelephoneTravailValidation()">
              <p class="text-left">Numéro</p>
              <div id="valider-Numero-telephone-travail" class="errorHeader"></div>
            </div>
            <div class="col-md-4">
              <input type="text" class="form-control"
                  name="Poste_telephone_tavail"
                  id="Poste-telephone-travail"
                  placeholder="">
              <p class="text-left">Poste</p>
              <div id="valider-Poste-telephone-travail"></div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div id="erreur-groupe-telephone" class="errorHeader"></div>
            </div>
          </div>

        </div>
        <div class="col-md-6">
          <br>
          <div class="row">
            <div class="col-md-12">
              <label for="#">Statut au Canada</label>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="radio">
                <label><input type="radio" name="radio-statut-canada" value="Citoyen canadien">Citoyen canadien</label>
              </div>
            </div>
            <div class="col-md-6">
              <div class="radio">
                <label><input type="radio" name="radio-statut-canada" value="Amérindien">Amérindien</label>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="radio">
                <label><input type="radio" name="radio-statut-canada" value="Résident permanent">Résident permanent</label>
              </div>
            </div>
            <div class="col-md-6">
              <div class="radio">
                <label><input type="radio" name="radio-statut-canada" value="Visa diplomatique">Visa diplomatique</label>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="radio">
                <label><input type="radio" name="radio-statut-canada" value="Permis d’études">Permis d’études</label>
              </div>
            </div>
            <div class="col-md-6">
              <div class="radio">
                <label><input type="radio" name="radio-statut-canada" value="Permis de séjour temporaire">Permis de séjour temporaire</label>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="radio">
                <label><input type="radio" name="radio-statut-canada" value="Permis de travail">Permis de travail</label>
              </div>
            </div>
            <div class="col-md-6">
              <div class="radio">
                <label><input type="radio" name="radio-statut-canada" value="Réfugié">Réfugié</label>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div id="valider-statut-canada" class="errorHeader"></div>
            </div>
          </div>
          <br>
          <div class="row">
            <div class="col-md-12">
              <label for="#">Langue d’usage (Langue parlée le plus souvent à la maison)</label></div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="radio">
                <label><input
                  onclick="document.getElementById('langue-usage-autre').disabled = true;"
                  type="radio" name="radio-langue-usage" value="Francais">Francais</label>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="radio">
                <label><input
                  onclick="document.getElementById('langue-usage-autre').disabled = true;"
                  type="radio" name="radio-langue-usage" value="Anglais">Anglais</label>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="radio">
                <label><input
                  onclick="document.getElementById('langue-usage-autre').disabled = true;"
                  type="radio" name="radio-langue-usage" value="Amérindien ou Inuktitut">Amérindien ou Inuktitut</label>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="radio">
                <label><input
                  onclick="document.getElementById('langue-usage-autre').disabled = false;"
                  type="radio" name="radio-langue-usage" value="AutreLangueUsage">Autre (précisez)</label>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <input type="text" class="form-control"
                    name="langue_usage_autre"
                    id="langue-usage-autre"
                    placeholder=""
                    disabled="disabled"
                    onblur="autreLangueUsageValidation()">
              <div id="valider-langue-usage-autre" class="errorHeader"></div>
            </div>
          </div>
          <br>
          <div class="row">
            <div class="col-md-12">
              <label for="">Langue maternelle (Première langue apprise et encore comprise)</label></div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="radio">
                <label><input
                  onclick="document.getElementById('langue-maternelle-autre').disabled = true;"
                  type="radio" name="radio-langue-maternelle" value="Francais">Francais</label>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="radio">
                <label><input
                  onclick="document.getElementById('langue-maternelle-autre').disabled = true;"
                  type="radio" name="radio-langue-maternelle" value="Anglais">Anglais</label>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="radio">
                <label><input
                  onclick="document.getElementById('langue-maternelle-autre').disabled = true;"
                  type="radio" name="radio-langue-maternelle"
                  value="Amérindien ou Inuktitut">Amérindien ou Inuktitut</label>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="radio">
                <label><input
                  onclick="document.getElementById('langue-maternelle-autre').disabled = false;"
                  type="radio" name="radio-langue-maternelle"
                  value="AutreLangueMaternelle">Autre (précisez)</label>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <input type="text" class="form-control"
                    name="langue_maternelle_autre"
                    id="langue-maternelle-autre"
                    placeholder=""
                    disabled="disabled"
                    onblur="autreLangueMaternelleValidation()">
              <div id="valider-langue-maternelle-autre" class="errorHeader"></div>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-12">
          <label for="Courriel-personnel">Courriel</label>
          <input type="text" class="form-control"
              name="Courriel_personnel"
              id="Courriel-personnel"
              placeholder=""
              onblur="courrielValidation()">
          <div id="valider-Courriel-personnel" class="errorHeader"></div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <label for="Adresse-de-correspondance">Adresse de correspondance</label>
        </div>
      </div>
        <div class="row">
          <div class="col-md-8">
            <input type="text" class="form-control"
              name="Numéro_civique_Type_et_nom_de_la_rue_Direction_de_rue"
              id="Numéro-civique-Type-et-nom-de-la-rue-Direction-de-rue"
              placeholder=""
              onblur="NoCivicNomDirectionValidation()">
            <p><span class="text-gauche">Numéro civique</span><span class="text-centre">Type et nom de la rue</span>
            <span class="text-droite">Direction de rue</span></p>
            <div id="valider-Numéro-civique-Type-et-nom-de-la-rue-Direction-de-rue" class="errorHeader"></div>
          </div>
          <div class="col-md-4">
            <input type="text" class="form-control"
              name="Numero_apartement"
              id="Numero-apartement"
              placeholder=""
              onblur="numeroApartementValidation()">
            <p>No d’appartement ou d’unité</p>
            <div id="valider-Numero-apartement" class="errorHeader"></div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-8">
            <input type="text" class="form-control"
                name="Municipalité_Pays"
                id="Municipalité-Pays"
                placeholder=""
                onblur="municipalitéPaysValidation()">
            <p><span class="text-gauche">Municipalité</span><span class="text-droite">Pays (si autre que le Canada)</span></p>
            <div id="valider-Municipalité-Pays" class="errorHeader"></div>
          </div>
          <div class="col-md-4">
            <input type="text" class="form-control"
              name="Code_postal"
              id="Code-postal"
              placeholder="X9X 9X9"
              onblur="codePostalValidation()">
            <p>Code postal</p>
            <div id="valider-Code-postal" class="errorHeader"></div>
          </div>
        </div>



        <div class="row">
          <div class="col-md-12">
            <label for="Adresse-de-correspondance-autre">Adresse où vous résidez actuellement (si différente de l’adresse de correspondance)</label>
          </div>
        </div>

        <div class="row">
          <div class="col-md-8">
            <input type="text" class="form-control"
              name="Numéro_civique_Type_et_nom_de_la_rue_Direction_de_rue_autre"
              id="Numéro-civique-Type-et-nom-de-la-rue-Direction-de-rue-autre"
              placeholder=""
              onblur="NoCivicNomDirectionAutreValidation()">
            <p><span class="text-gauche">Numéro civique</span><span class="text-centre">Type et nom de la rue</span>
            <span class="text-droite">Direction de rue</span></p>
            <div id="valider-Numéro-civique-Type-et-nom-de-la-rue-Direction-de-rue-autre" class="errorHeader"></div>
          </div>
          <div class="col-md-4">
            <input type="text" class="form-control"
              name="Numero_apartement_autre"
              id="Numero-apartement-autre"
              placeholder="">
            <p>No d’appartement ou d’unité</p>
            <div id="valider-Numero-apartement-autre" class="errorHeader"></div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-8">
            <input type="text" class="form-control"
                name="Municipalité_Pays_Autre"
                id="Municipalité-Pays-Autre"
                placeholder=""
                onblur="NoCivicNomDirectionAutreValidation()">
            <p><span class="text-gauche">Municipalité</span><span class="text-droite">Pays (si autre que le Canada)</span></p>
            <div id="valider-Municipalité-Pays-Autre" class="errorHeader"></div>
          </div>
          <div class="col-md-4">
            <input type="text" class="form-control"
              name="Code_postal-autre"
              id="Code-postal-autre"
              placeholder="X9X 9X9"
              onblur="NoCivicNomDirectionAutreValidation()">
            <p>Code postal</p>
            <div id="valider-Code-postal-autre" class="errorHeader"></div>
          </div>
        </div>

    </div><br>
    <!-- ################################# Page 2 programmes demandes ##########################################-->
     <!-- ################################# Page 2 programmes demandes ##########################################-->
      <!-- ################################# Page 2 programmes demandes ##########################################-->

       <!-- ################################# Page 2 programmes demandes ##########################################-->
        <!-- ################################# Page 2 programmes demandes ##########################################-->
         <!-- ################################# Page 2 programmes demandes ##########################################-->
          <!-- ################################# Page 2 programmes demandes ##########################################-->
           <!-- ################################# Page 2 programmes demandes ##########################################-->
            <!-- ################################# Page 2 programmes demandes ##########################################-->
             <!-- ################################# Page 2 programmes demandes ##########################################-->
              <!-- ################################# Page 2 programmes demandes ##########################################-->
    <div class="container well">
      <div class="row">
        <div class="col-md-4">
          <p class="entete-gauche">programmes demandes</p>
        </div>
        <div class="col-md-4">
          <p class="entete-centre">2</p>
        </div>
        <div class="col-md-4">
          <p class="entete-droite-premier">demande d'admission</p>
          <P class="entete-droite-second">Études de premier cycle</P>
        </div>
      </div>
      <hr class="trait">
      <div class="row">
          <div class="col-md-4">
            <p>Je désire entreprendre mes études au trimestre:</p>
          </div>
          <div class="col-md-2">
            <div class="radio">
              <label><input type="radio" name="radio-trimestre">Hiver</label>
            </div>
          </div>
          <div class="col-md-2">
            <div class="radio">
              <label><input type="radio" name="radio-trimestre">Été</label>
            </div>
          </div>
          <div class="col-md-2">
            <div class="radio">
              <label><input type="radio" name="radio-trimestre">Automne</label>
            </div>
          </div>
          <div class="col-md-2">
            <input class="form-control"
                   type="text"
                   name="trimestre_annee"
                   id="trimestre-annee"
                   placeholder=""
                   onblur="trimestreAnneeValidation()">
            <p>Annee</p>
            <div id="valider-trimestre-annee" class="errorHeader"></div>
          </div>
      </div>
      <div id="valider-trimestre" class="errorHeader"></div>
      <!-- ################################# Premier choix programmes demandes ##########################################-->
      <div class="row">
        <div class="col-md-12">
           <p>Premier Choix</p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-10">
          <input type="text"
            class="form-control"
            name="premier_choix_titre"
            id="premier-choix-titre"
            placeholder=""
            onblur="premierChoixValidation()">
          <label for="Premier-choix">Titre</label>
        </div>
        <div class="col-md-2">
          <div class="radio">
            <label><input type="radio"
                name="radio-temp-1"
                onclick="premierChoixValidation()"
               >Temp complet</label>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-2">
          <input type="text" class="form-control" name="premier_choix_code"
            id="premier-choix-code"
            placeholder=""
            onblur="premierChoixValidation()">
          <label for="premier-choix-code">Code</label>
        </div>
        <div class="col-md-1 col-md-offset-1">
          <div class="radio">
            <label><input onclick="premierChoixValidation()" type="radio" name="radio-type-programme-1">Baccalauréat</label>
          </div>
        </div>
        <div class="col-md-1 col-md-offset-1">
          <div class="radio">
            <label><input onclick="premierChoixValidation()" type="radio" name="radio-type-programme-1">Majeure</label>
          </div>
        </div>
        <div class="col-md-1">
          <div class="radio">
            <label><input onclick="premierChoixValidation()" type="radio" name="radio-type-programme-1">Mineure</label>
          </div>
        </div>
        <div class="col-md-1">
          <div class="radio">
            <label><input onclick="premierChoixValidation()" type="radio" name="radio-type-programme-1">Certificat</label>
          </div>
        </div>
        <div class="col-md-1">
          <div class="radio">
            <label><input onclick="premierChoixValidation()" type="radio" name="radio-type-programme-1">Programme court</label>
          </div>
        </div>
        <div class="col-md-1 col-md-offset-1">
          <div class="radio">
            <label><input onclick="premierChoixValidation()" type="radio" name="radio-temp-1">Temps partiel</label>
          </div>
        </div>
      </div>
      <div id="valider-programme-choix-1" class="errorHeader"></div>
      <!-- ################################# Deuxieme choix programmes demandes ##########################################-->
      <br>
      <div class="row">
        <div class="col-md-12">
           <p>Deuxieme Choix</p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-10">
          <input type="text"
            class="form-control"
            name="deuxieme_choix_titre"
            id="deuxieme-choix-titre"
            placeholder=""
            onblur="deuxiemeChoixValidation()">
          <label for="deuxieme-choix-titre">Titre</label>
        </div>
        <div class="col-md-2">
          <div class="radio">
            <label><input type="radio"
                name="radio-temp-2"
                onclick="deuxiemeChoixValidation()"
               >Temp complet</label>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-2">
          <input type="text" class="form-control"
            name="deuxieme_choix_code"
            id="deuxieme-choix-code"
            placeholder=""
            onblur="deuxiemeChoixValidation()">
          <label for="deuxieme-choix-code">Code</label>
        </div>
        <div class="col-md-1 col-md-offset-1">
          <div class="radio">
            <label><input onclick="deuxiemeChoixValidation()" type="radio" name="radio-type-programme-2">Baccalauréat</label>
          </div>
        </div>
        <div class="col-md-1 col-md-offset-1">
          <div class="radio">
            <label><input onclick="deuxiemeChoixValidation()" type="radio" name="radio-type-programme-2">Majeure</label>
          </div>
        </div>
        <div class="col-md-1">
          <div class="radio">
            <label><input onclick="deuxiemeChoixValidation()" type="radio" name="radio-type-programme-2">Mineure</label>
          </div>
        </div>
        <div class="col-md-1">
          <div class="radio">
            <label><input onclick="deuxiemeChoixValidation()" type="radio" name="radio-type-programme-2">Certificat</label>
          </div>
        </div>
        <div class="col-md-1">
          <div class="radio">
            <label><input onclick="deuxiemeChoixValidation()" type="radio" name="radio-type-programme-2">Programme court</label>
          </div>
        </div>
        <div class="col-md-1 col-md-offset-1">
          <div class="radio">
            <label><input onclick="deuxiemeChoixValidation()" type="radio" name="radio-temp-2">Temps partiel</label>
          </div>
        </div>
      </div>
      <div id="valider-programme-choix-2" class="errorHeader"></div>
      <!-- ################################# Troisieme choix programmes demandes ##########################################-->
      <div class="row">
        <div class="col-md-12">
           <p>Troisième choix (nous vous suggérons fortement un programme non contingenté)</p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-10">
          <input type="text"
            class="form-control"
            name="troisieme_choix_titre"
            id="troisieme-choix-titre"
            placeholder=""
            onblur="troisiemeChoixValidation()">
          <label for="troisieme-choix-titre">Titre</label>
        </div>
        <div class="col-md-2">
          <div class="radio">
            <label><input type="radio"
                name="radio-temp-3"
                onclick="troisiemeChoixValidation()"
               >Temp complet</label>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-2">
          <input type="text" class="form-control"
            name="troisieme_choix_code"
            id="troisieme-choix-code"
            placeholder=""
            onblur="troisiemeChoixValidation()">
          <label for="troisieme-choix-code">Code</label>
        </div>
        <div class="col-md-1 col-md-offset-1">
          <div class="radio">
            <label><input onclick="troisiemeChoixValidation()" type="radio" name="radio-type-programme-3">Baccalauréat</label>
          </div>
        </div>
        <div class="col-md-1 col-md-offset-1">
          <div class="radio">
            <label><input onclick="troisiemeChoixValidation()" type="radio" name="radio-type-programme-3">Majeure</label>
          </div>
        </div>
        <div class="col-md-1">
          <div class="radio">
            <label><input onclick="troisiemeChoixValidation()" type="radio" name="radio-type-programme-3">Mineure</label>
          </div>
        </div>
        <div class="col-md-1">
          <div class="radio">
            <label><input onclick="troisiemeChoixValidation()" type="radio" name="radio-type-programme-3">Certificat</label>
          </div>
        </div>
        <div class="col-md-1">
          <div class="radio">
            <label><input onclick="troisiemeChoixValidation()" type="radio" name="radio-type-programme-3">Programme court</label>
          </div>
        </div>
        <div class="col-md-1 col-md-offset-1">
          <div class="radio">
            <label><input onclick="troisiemeChoixValidation()" type="radio" name="radio-temp-3">Temps partiel</label>
          </div>
        </div>
      </div>
      <div id="valider-programme-choix-3" class="errorHeader"></div>
      <!-- ################################# Page 2  renseignement sur les etudes secondaires et collegiales ################-->
      <div class="row">
        <div class="col-md-12">
          <label for="#">RENSEIGNEMENTS SUR LES ÉTUDES SECONDAIRES ET COLLÉGIALES</label>
          <hr class="trait">
        </div>
      </div>
      <div class="row">
        <!-- ####### Page 2 partie champs text#############-->
        <div class="col-md-8">
            <div class="row">
              <div class="col-md-12">
                <p>Dernière année du secondaire complétée au Québec</p>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <input type="text" class="form-control"
                    name="derniere_annee_secondaire"
                    id="derniere-annee-secondaire"
                    placeholder=""
                    onblur="derniereAnneeSecondaireValidation()">
                <div id="valider-derniere-annee-secondaire" class="errorHeader"></div>
              </div>
            </div>
            <br>
            <div class="row">
              <div class="col-md-12">
                <div class="radio">
                  <label><input type="radio"
                    name="radio-diplome-sec-col-hors-quebec"
                    onclick="diplomeSecColHorsQuebecValidation()"
                    >Diplôme d’études secondaires ou collégiales poursuivies à l’extérieur du Québec</label>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <label for="diplome-sec-col-hors-quebec">Nom du diplôme</label>
                <input type="text" class="form-control"
                   name="diplome_sec_col_hors_quebec"
                   id="diplome-sec-col-hors-quebec" placeholder=""
                   onblur="diplomeSecColHorsQuebecValidation()">
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <label for="discipline-specialisation-hors-quebec">Discipline ou spécialisation</label>
                <input type="text"
                  class="form-control"
                  name="discipline_specialisation_hors_quebec"
                  id="discipline-specialisation-hors-quebec"
                  placeholder=""
                  onblur="diplomeSecColHorsQuebecValidation()">
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <label for="institution-hors-quebec">Institution où vous avez poursuivi vos études</label>
                <input type="text"
                  class="form-control"
                  name="institution_hors_quebec"
                  id="institution-hors-quebec"
                  placeholder=""
                  onblur="diplomeSecColHorsQuebecValidation()">
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <label for="pays-hors-quebec">Pays</label>
                <input type="text"
                  class="form-control"
                  name="pays_hors_quebec"
                  id="pays-hors-quebec"
                  placeholder=""
                  onblur="diplomeSecColHorsQuebecValidation()">
              </div>
            </div>
            <div id="valider-diplome-hors-quebec" class="errorHeader"></div>
            <br>
            <div class="row">
              <div class="col-md-6">
                <div class="radio">
                  <label><input type="radio" name="radio-DEC_ou_autre">DEC</label>
                </div>
              </div>
              <div class="col-md-6">
                <div class="radio">
                  <label><input type="radio" name="radio-DEC_ou_autre">Autre diplome de niveau collegial(AEC,CEC,...)</label>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <label for="diplome-sec-col-dans-quebec">Nom du diplôme</label>
                <input type="text" class="form-control"
                   name="diplome_sec_col_dans_quebec"
                   id="diplome-sec-col-dans-quebec"
                   placeholder=""
                   onblur="diplomeSecColDansQuebecValidation()">
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <label for="discipline-specialisation-dans-quebec">Discipline ou spécialisation</label>
                <input type="text"
                  class="form-control"
                  name="discipline_specialisation_dans_quebec"
                  id="discipline-specialisation-dans-quebec"
                  placeholder=""
                  onblur="diplomeSecColDansQuebecValidation()">
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <label for="institution-dans-quebec">Institution où vous avez poursuivi vos études</label>
                <input type="text"
                  class="form-control"
                  name="institution_dans_quebec"
                  id="institution-dans-quebec"
                  placeholder=""
                  onblur="diplomeSecColDansQuebecValidation()">
              </div>
            </div>
            <div id="valider-diplome-dans-quebec" class="errorHeader"></div>
        </div>
        <!-- ############# Page 2 partie date text #############-->
        <div class="col-md-4">
          <div class="row">
            <div class="col-md-12">
              <p>Période de fréquentation</p>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <input class="date-own form-control"
                type="text"
                name="de_annee_derniere_annee_secondaire"
                id="de-annee-derniere-annee-secondaire"
                placeholder="1999"
                onblur="derniereAnneeSecondaireValidation()">
              <p>De (année)</p>
            </div>
            <div class="col-md-6">
              <input class="date-own form-control"
                type="text"
                name="a_annee_derniere_annee_secondaire"
                id="a-annee-derniere-annee-secondaire"
                placeholder="1999"
                onblur="derniereAnneeSecondaireValidation()">
              <p>à (année)</p>
            </div>
          </div>

          <div class="row">
            <div class="col-md-12">
              <p>Période de fréquentation</p>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <input class="date-own form-control"
                type="text"
                name="de_annee_diplome_hors_quebec"
                id="de-annee-diplome-hors-quebec"
                placeholder="1999"
                onblur="diplomeSecColHorsQuebecValidation()">
              <p>De (année)</p>
            </div>
            <div class="col-md-6">
              <input class="date-own form-control"
                type="text"
                name="a_annee_diplome_hors_quebec"
                id="a-annee-diplome-hors-quebec"
                placeholder="1999"
                onblur="diplomeSecColHorsQuebecValidation()">
              <p>à (année)</p>
            </div>
          </div>

          <div class="row">
            <div class="col-md-12">
              <p>Date d'obtention</p>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <input class="date-own form-control"
                type="text"
                name="mois_obtention_diplome_hors_quebec"
                id="mois-obtention-diplome-hors-quebec"
                placeholder="10"
                onblur="diplomeSecColHorsQuebecValidation()">
              <p>Mois</p>
            </div>
            <div class="col-md-6">
              <input class="date-own form-control"
                type="text"
                name="annee_obtention_diplome_hors_quebec"
                id="annee-obtention-diplome-hors-quebec"
                placeholder="1999"
                onblur="diplomeSecColHorsQuebecValidation()">
              <p>Année</p>
            </div>
          </div>
          <br>
          <br>
          <br>
          <br>
          <br>
          <div class="row">
            <div class="col-md-6">
              <div class="radio">
                <label><input
                  onclick="diplomeSecColDansQuebecValidation()"
                  type="radio"
                  name="radio-obtention-diplome-page-2">Obtenu</label>
              </div>
            </div>
            <div class="col-md-6">
              <div class="radio">
                <label><input
                  onclick="diplomeSecColDansQuebecValidation()"
                  type="radio"
                  name="radio-obtention-diplome-page-2">À obtenir</label>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-12">
               <div class="radio">
                <label><input
                  onclick="diplomeSecColDansQuebecValidation()"
                  type="radio"
                  name="radio-obtention-diplome-page-2">Ne sera pas obtenu</label>
              </div>
            </div>
          </div>
           <div class="row">
            <div class="col-md-12">
              <p>Période de fréquentation</p>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <input class="date-own form-control"
                type="text"
                name="de_annee_diplome_dans_quebec"
                id="de-annee-diplome-dans-quebec"
                placeholder="1999"
                onblur="diplomeSecColDansQuebecValidation()">
              <p>De (année)</p>
            </div>
            <div class="col-md-6">
              <input class="date-own form-control"
                type="text"
                name="a_annee_diplome_dans_quebec"
                id="a-annee-diplome-dans-quebec"
                placeholder="1999"
                onblur="diplomeSecColDansQuebecValidation()">
              <p>à (année)</p>
            </div>
          </div>

          <div class="row">
            <div class="col-md-12">
              <p>Date d'obtention</p>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <input class="date-own form-control"
                type="text"
                name="mois_obtention_diplome_dans_quebec"
                id="mois-obtention-diplome-dans-quebec"
                placeholder="10"
                onblur="diplomeSecColDansQuebecValidation()">
              <p>Mois</p>
            </div>
            <div class="col-md-6">
              <input class="date-own form-control"
                type="text"
                name="annee_obtention_diplome_dans_quebec"
                id="annee-obtention-diplome-dans-quebec"
                placeholder="1999"
                onblur="diplomeSecColDansQuebecValidation()">
              <p>Année</p>
            </div>
          </div>
        </div>
      </div>
      </div><br>
<!-- ################################# Page 3 ##########################################-->
<!-- ################################# Page 3 ##########################################-->
<!-- ################################# Page 3 ##########################################-->
<!-- ################################# Page 3 ##########################################-->
<!-- ################################# Page 3 ##########################################-->
<!-- ################################# Page 3 ##########################################-->
<!-- ################################# Page 3 ##########################################-->
<!-- ################################# Page 3 ##########################################-->
<!-- ################################# Page 3 ##########################################-->
<!-- ################################# Page 3 ##########################################-->
    <div class="container well">
      <div class="row">
        <div class="col-md-4">
          <p class="entete-gauche">renseignements sur les etudes universitaires</p>
        </div>
        <div class="col-md-4">
          <p class="entete-centre">3</p>
        </div>
        <div class="col-md-4">
          <p class="entete-droite-premier">demande d'admission</p>
          <P class="entete-droite-second">Études de premier cycle</P>
        </div>

      </div>
      <hr class="trait">
      <div class="row">
        <!-- ################################# Page 3 etudes universitaires ##########################################-->
        <div class="col-md-8">
          <div class="row">
            <div class="col-md-12">
              <div class="radio">
                <label><input type="radio"
                  name="radio-diplome-universitaire-1"
                  onclick="diplomeUniversitaire1Validation()"
                  >Grade ou diplôme de niveau universitaire le plus récent entrepris ou complété</label>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <label for="diplome-universitaire-1">Nom du diplôme</label>
              <input type="text" class="form-control"
                 name="diplome_universitaire_1"
                 id="diplome-universitaire-1"
                 placeholder=""
                 onblur="diplomeUniversitaire1Validation()">
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <label for="discipline-specialisation-universitaire-1">Discipline ou spécialisation</label>
              <input type="text"
                class="form-control"
                name="discipline_specialisation_universitaire_1"
                id="discipline-specialisation-universitaire-1"
                placeholder=""
                onblur="diplomeUniversitaire1Validation()">
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <label for="institution-universitaire-1">Institution où vous avez poursuivi vos études en vue de l’obtention de ce diplôme</label>
              <input type="text"
                class="form-control"
                name="institution_universitaire_1"
                id="institution-universitaire-1"
                placeholder=""
                onblur="diplomeUniversitaire1Validation()">
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <label for="pays-universitaire-1">Pays(si à l’extérieur du Canada)</label>
              <input type="text"
                class="form-control"
                name="pays_universitaire_1"
                id="pays-universitaire-1"
                placeholder=""
                onblur="diplomeUniversitaire1Validation()">
            </div>
          </div>
          <div id="valider-diplome-universitaire-1" class="errorHeader"></div>
          <br>
          <br>
          <br>
          <br>
          <div class="row">
            <div class="col-md-12">
              <div class="radio">
                <label><input type="radio"
                  name="radio-diplome-universitaire-2"
                  onclick="diplomeUniversitaire2Validation()"
                  >Autre grade ou diplôme de niveau universitaire entrepris ou complété</label>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <label for="diplome-universitaire-2">Nom du diplôme</label>
              <input type="text" class="form-control"
                 name="diplome_universitaire_2"
                 id="diplome-universitaire-2"
                 placeholder=""
                 onblur="diplomeUniversitaire2Validation()">
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <label for="discipline-specialisation-universitaire-2">Discipline ou spécialisation</label>
              <input type="text"
                class="form-control"
                name="discipline_specialisation_universitaire_2"
                id="discipline-specialisation-universitaire-2"
                placeholder=""
                onblur="diplomeUniversitaire2Validation()">
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <label for="institution-universitaire-2">Institution où vous avez poursuivi vos études en vue de l’obtention de ce diplôme</label>
              <input type="text"
                class="form-control"
                name="institution_universitaire_2"
                id="institution-universitaire-2"
                placeholder=""
                onblur="diplomeUniversitaire2Validation()">
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <label for="pays-universitaire-2">Pays(si à l’extérieur du Canada)</label>
              <input type="text"
                class="form-control"
                name="pays_universitaire_2"
                id="pays-universitaire-2"
                placeholder=""
                onblur="diplomeUniversitaire2Validation()">
            </div>
          </div>
          <div id="valider-diplome-universitaire-2" class="errorHeader"></div>


        </div>
        <!-- ################################# Page 3 etudes universitaires  dates ##########################################-->

        <div class="col-md-4">
          <div class="row">
            <div class="col-md-6">
              <div class="radio">
                <label><input
                  onclick="diplomeUniversitaire1Validation()"
                  type="radio"
                  name="radio-obtention-diplome-universitaire-1">Obtenu</label>
              </div>
            </div>
            <div class="col-md-6">
              <div class="radio">
                <label><input
                  onclick="diplomeUniversitaire1Validation()"
                  type="radio"
                  name="radio-obtention-diplome-universitaire-1">À obtenir</label>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-12">
               <div class="radio">
                <label><input
                  onclick="diplomeUniversitaire1Validation()"
                  type="radio"
                  name="radio-obtention-diplome-universitaire-1">Ne sera pas obtenu</label>
              </div>
            </div>
          </div>
           <div class="row">
            <div class="col-md-12">
              <p>Période de fréquentation</p>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <input class="date-own form-control"
                type="text"
                name="de_annee_diplome_universitaire_1"
                id="de-annee-diplome-universitaire-1"
                placeholder="1999"
                onblur="diplomeUniversitaire1Validation()">
              <p>De (année)</p>
            </div>
            <div class="col-md-6">
              <input class="date-own form-control"
                type="text"
                name="a_annee_diplome_universitaire_1"
                id="a-annee-diplome-universitaire-1"
                placeholder="1999"
                onblur="diplomeUniversitaire1Validation()">
              <p>à (année)</p>
            </div>
          </div>

          <div class="row">
            <div class="col-md-12">
              <p>Date d'obtention</p>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <input class="date-own form-control"
                type="text"
                name="mois_obtention_diplome_universitaire_1"
                id="mois-obtention-diplome-universitaire-1"
                placeholder="10"
                onblur="diplomeUniversitaire1Validation()">
              <p>Mois</p>
            </div>
            <div class="col-md-6">
              <input class="date-own form-control"
                type="text"
                name="annee_obtention_diplome_universitaire_1"
                id="annee-obtention-diplome-universitaire-1"
                placeholder="1999"
                onblur="diplomeUniversitaire1Validation()">
              <p>Année</p>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
                <label for="">Nombre de crédits complétés</label>
                <input type="text"
                class="form-control"
                name="nombre_credits_diplome_universitaire_1"
                id="nombre-credits-diplome-universitaire-1"
                placeholder=""
                onblur="diplomeUniversitaire1Validation()">
            </div>
          </div>
          <br>
          <div class="row">
            <div class="col-md-6">
              <div class="radio">
                <label><input
                  onclick="diplomeUniversitaire2Validation()"
                  type="radio"
                  name="radio-obtention-diplome-universitaire-2">Obtenu</label>
              </div>
            </div>
            <div class="col-md-6">
              <div class="radio">
                <label><input
                  onclick="diplomeUniversitaire2Validation()"
                  type="radio"
                  name="radio-obtention-diplome-universitaire-2">À obtenir</label>
              </div>
            </div>
            </div>

            <div class="row">
            <div class="col-md-12">
               <div class="radio">
                <label><input
                  onclick="diplomeUniversitaire2Validation()"
                  type="radio"
                  name="radio-obtention-diplome-universitaire-2">Ne sera pas obtenu</label>
              </div>
            </div>
            </div>
            <div class="row">
            <div class="col-md-12">
              <p>Période de fréquentation</p>
            </div>
            </div>
            <div class="row">
            <div class="col-md-6">
              <input class="date-own form-control"
                type="text"
                name="de_annee_diplome_universitaire_2"
                id="de-annee-diplome-universitaire-2"
                placeholder="1999"
                onblur="diplomeUniversitaire2Validation()">
              <p>De (année)</p>
            </div>
            <div class="col-md-6">
              <input class="date-own form-control"
                type="text"
                name="a_annee_diplome_universitaire_2"
                id="a-annee-diplome-universitaire-2"
                placeholder="1999"
                onblur="diplomeUniversitaire2Validation()">
              <p>à (année)</p>
            </div>
            </div>

            <div class="row">
            <div class="col-md-12">
              <p>Date d'obtention</p>
            </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <input class="date-own form-control"
                  type="text"
                  name="mois_obtention_diplome_universitaire_2"
                  id="mois-obtention-diplome-universitaire-2"
                  placeholder="10"
                  onblur="diplomeUniversitaire2Validation()">
                <p>Mois</p>
              </div>
              <div class="col-md-6">
                <input class="date-own form-control"
                  type="text"
                  name="annee_obtention_diplome_universitaire_2"
                  id="annee-obtention-diplome-universitaire-2"
                  placeholder="1999"
                  onblur="diplomeUniversitaire2Validation()">
                <p>Année</p>
              </div>
            </div>
            <div class="row">
            <div class="col-md-12">
                <label for="">Nombre de crédits complétés</label>
                <input type="text"
                class="form-control"
                name="nombre_credits_diplome_universitaire_2"
                id="nombre-credits-diplome-universitaire-2"
                placeholder=""
                onblur="diplomeUniversitaire2Validation()">
            </div>
            </div>

<!-- ================================ RENSEIGNEMENTS SUR LES EMPLOIS ==================================-->
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <label for="#">RENSEIGNEMENTS SUR LES EMPLOIS</label>
          <hr class="trait">
        </div>
      </div>
      <div class="row">
        <div class="col-md-8">
            <!-- Premier emploie -->
            <div class="row">
               <div class="col-md-12">
                  <label for="nom-employe-1">Nom de l’employeur</label>
                  <input type="text"
                    class="form-control"
                    name="nom_employe_1"
                    id="nom-employe-1"
                    placeholder=""
                    onblur="employe1Validation()">
               </div>
            </div>
            <div class="row">
               <div class="col-md-12">
                  <label for="fonction-occupee-1">Fonction occupée</label>
                  <input type="text"
                    class="form-control"
                    name="fonction_occupee_1"
                    id="fonction-occupee-1"
                    placeholder=""
                    onblur="employe1Validation()">
               </div>
            </div>
            <div class="row">
              <div class="col-md-2">
                <div class="radio">
                  <label><input
                    onclick="employe1Validation()"
                    type="radio"
                    name="radio-type-employe-1">Emploi rémunéré</label>
                </div>
              </div>
              <div class="col-md-2">
                <div class="radio">
                  <label><input
                    onclick="employe1Validation()"
                    type="radio"
                    name="radio-type-employe-1">Stage</label>
                </div>
              </div>
              <div class="col-md-2">
                <div class="radio">
                  <label><input
                    onclick="employe1Validation()"
                    type="radio"
                    name="radio-type-employe-1">Bénévolat</label>
                </div>
              </div>
              <div class="col-md-2">
                <div class="radio">
                  <label><input
                    onclick="employe1Validation()"
                    type="radio"
                    name="radio-temps-employe-1">Temps complet</label>
                </div>
              </div>
              <div class="col-md-2">
                <div class="radio">
                  <label><input
                    onclick="employe1Validation()"
                    type="radio"
                    name="radio-temps-employe-1">Temps partiel</label>
                </div>
              </div>
            </div>
            <div id="valider-employe-1" class="errorHeader"></div>
            <!-- Deuxieme emploie -->
            <br>
            <div class="row">
               <div class="col-md-12">
                  <label for="nom-employe-2">Nom de l’employeur</label>
                  <input type="text"
                    class="form-control"
                    name="nom_employe_2"
                    id="nom-employe-2"
                    placeholder=""
                    onblur="employe2Validation()">
               </div>
            </div>
            <div class="row">
               <div class="col-md-12">
                  <label for="fonction-occupee-2">Fonction occupée</label>
                  <input type="text"
                    class="form-control"
                    name="fonction_occupee_2"
                    id="fonction-occupee-2"
                    placeholder=""
                    onblur="employe2Validation()">
               </div>
            </div>
            <div class="row">
              <div class="col-md-2">
                <div class="radio">
                  <label><input
                    onclick="employe2Validation()"
                    type="radio"
                    name="radio-type-employe-2">Emploi rémunéré</label>
                </div>
              </div>
              <div class="col-md-2">
                <div class="radio">
                  <label><input
                    onclick="employe2Validation()"
                    type="radio"
                    name="radio-type-employe-2">Stage</label>
                </div>
              </div>
              <div class="col-md-2">
                <div class="radio">
                  <label><input
                    onclick="employe2Validation()"
                    type="radio"
                    name="radio-type-employe-2">Bénévolat</label>
                </div>
              </div>
              <div class="col-md-2">
                <div class="radio">
                  <label><input
                    onclick="employe2Validation()"
                    type="radio"
                    name="radio-temps-employe-2">Temps complet</label>
                </div>
              </div>
              <div class="col-md-2">
                <div class="radio">
                  <label><input
                    onclick="employe2Validation()"
                    type="radio"
                    name="radio-temps-employe-2">Temps partiel</label>
                </div>
              </div>
            </div>
            <div id="valider-employe-2" class="errorHeader"></div>
            <!-- Troisieme emploie -->
            <br>
            <div class="row">
            <div class="col-md-12">
                  <label for="nom-employe-3">Nom de l’employeur</label>
                  <input type="text"
                    class="form-control"
                    name="nom_employe_3"
                    id="nom-employe-3"
                    placeholder=""
                    onblur="employe3Validation()">
               </div>
            </div>
            <div class="row">
               <div class="col-md-12">
                  <label for="fonction-occupee-3">Fonction occupée</label>
                  <input type="text"
                    class="form-control"
                    name="fonction_occupee_3"
                    id="fonction-occupee-3"
                    placeholder=""
                    onblur="employe3Validation()">
               </div>
            </div>
            <div class="row">
              <div class="col-md-2">
                <div class="radio">
                  <label><input
                    onclick="employe3Validation()"
                    type="radio"
                    name="radio-type-employe-3">Emploi rémunéré</label>
                </div>
              </div>
              <div class="col-md-2">
                <div class="radio">
                  <label><input
                    onclick="employe3Validation()"
                    type="radio"
                    name="radio-type-employe-3">Stage</label>
                </div>
              </div>
              <div class="col-md-2">
                <div class="radio">
                  <label><input
                    onclick="employe3Validation()"
                    type="radio"
                    name="radio-type-employe-3">Bénévolat</label>
                </div>
              </div>
              <div class="col-md-2">
                <div class="radio">
                  <label><input
                    onclick="employe3Validation()"
                    type="radio"
                    name="radio-temps-employe-3">Temps complet</label>
                </div>
              </div>
              <div class="col-md-2">
                <div class="radio">
                  <label><input
                    onclick="employe3Validation()"
                    type="radio"
                    name="radio-temps-employe-3">Temps partiel</label>
                </div>
              </div>
            </div>
        </div>
        <div id="valider-employe-3" class="errorHeader"></div>

        <div class="col-md-4">
          <div class="row">
            <div class="col-md-12">
                <p>Période de fréquentation</p>
              </div>
            </div>
            <div class="row">
              <div class="col-md-2">
                <p>de</p>
              </div>
              <div class="col-md-5">
              <input class="date-own form-control"
                type="text"
                name="de_mois_employe_1"
                id="de-mois-employe-1"
                placeholder="10"
                onblur="employe1Validation()">
              <p>Mois</p>
              </div>
              <div class="col-md-5">
                <input class="date-own form-control"
                  type="text"
                  name="de_annee_employe_1"
                  id="de-annee-employe-1"
                  placeholder="1999"
                  onblur="employe1Validation()">
                <p>Année</p>
              </div>
            </div>
            <div class="row">
              <div class="col-md-2">
                <p>a</p>
              </div>
              <div class="col-md-5">
              <input class="date-own form-control"
                type="text"
                name="a_mois_employe_1"
                id="a-mois-employe-1"
                placeholder="10"
                onblur="employe1Validation()">
              <p>Mois</p>
              </div>
              <div class="col-md-5">
                <input class="date-own form-control"
                  type="text"
                  name="a_annee_employe_1"
                  id="a-annee-employe-1"
                  placeholder="1999"
                  onblur="employe1Validation()">
                <p>Année</p>
              </div>
            </div>
            <br>
            <br>
            <div class="row">
              <div class="col-md-12">
                  <p>Période de fréquentation</p>
                </div>
              </div>
              <div class="row">
                <div class="col-md-2">
                  <p>de</p>
                </div>
                <div class="col-md-5">
                <input class="date-own form-control"
                  type="text"
                  name="de_mois_employe_2"
                  id="de-mois-employe-2"
                  placeholder="10"
                  onblur="employe2Validation()">
                <p>Mois</p>
                </div>
                <div class="col-md-5">
                  <input class="date-own form-control"
                    type="text"
                    name="de_annee_employe_2"
                    id="de-annee-employe-2"
                    placeholder="1999"
                    onblur="employe2Validation()">
                  <p>Année</p>
                </div>
              </div>
              <div class="row">
                <div class="col-md-2">
                  <p>a</p>
                </div>
                <div class="col-md-5">
                <input class="date-own form-control"
                  type="text"
                  name="a_mois_employe_2"
                  id="a-mois-employe-2"
                  placeholder="10"
                  onblur="employe2Validation()">
                <p>Mois</p>
                </div>
                <div class="col-md-5">
                  <input class="date-own form-control"
                    type="text"
                    name="a_annee_employe_2"
                    id="a-annee-employe-2"
                    placeholder="1999"
                    onblur="employe2Validation()">
                  <p>Année</p>
                </div>
              </div>
              <br>
              <br>
              <div class="row">
                <div class="col-md-12">
                    <p>Période de fréquentation</p>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-2">
                    <p>de</p>
                  </div>
                  <div class="col-md-5">
                  <input class="date-own form-control"
                    type="text"
                    name="de_mois_employe_3"
                    id="de-mois-employe-3"
                    placeholder="10"
                    onblur="employe3Validation()">
                  <p>Mois</p>
                  </div>
                  <div class="col-md-5">
                    <input class="date-own form-control"
                      type="text"
                      name="de_annee_employe_3"
                      id="de-annee-employe-3"
                      placeholder="1999"
                      onblur="employe3Validation()">
                    <p>Année</p>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-2">
                    <p>a</p>
                  </div>
                  <div class="col-md-5">
                  <input class="date-own form-control"
                    type="text"
                    name="a_mois_employe_3"
                    id="a-mois-employe-3"
                    placeholder="10"
                    onblur="employe3Validation()">
                  <p>Mois</p>
                  </div>
                  <div class="col-md-5">
                    <input class="date-own form-control"
                      type="text"
                      name="a_annee_employe_3"
                      id="a-annee-employe-3"
                      placeholder="1999"
                      onblur="employe3Validation()">
                    <p>Année</p>
                  </div>
                </div>
        </div>
      </div>

    </div><br>
    <!-- ################################# Page 4 programmes demandes ##################################-->
    <!-- ################################# Page 4 programmes demandes ##################################-->
    <!-- ################################# Page 4 programmes demandes ##################################-->
    <!-- ################################# Page 4 programmes demandes ##################################-->
    <!-- ################################# Page 4 programmes demandes ##################################-->
    <!-- ################################# Page 4 programmes demandes ##################################-->
    <!-- ################################# Page 4 programmes demandes ##################################-->
    <!-- ################################# Page 4 programmes demandes ##################################-->
    <!-- ################################# Page 4 programmes demandes ##################################-->
    <div class="container well">
      <div class="row">
        <div class="col-md-4">
          <p class="entete-gauche">renseignements supplementaires</p>
        </div>
        <div class="col-md-4">
          <p class="entete-centre">4</p>
        </div>
        <div class="col-md-4">
          <p class="entete-droite-premier">demande d'admission</p>
          <P class="entete-droite-second">Études de premier cycle</P>
        </div>
      </div>
      <hr class="trait">
      <div class="row">
        <div class="col-md-12">
          <p>Veuillez indiquer toute autre expérience, différente d’un emploi, qui vous semble pertinente à votre demande d’admission. </p>
          <p>Il peut s’agir de publications, de recherches, de contributions intellectuelles ou professionnelles.</p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <textarea class="form-control" rows="20" id=""></textarea>
        </div>
      </div>
    </div><br>


    <div class="container well">
      <div class="row">
         <div class="col-md-6">
            <button type="submit" class="btn btn-success col-md-12">Soumettre</button>
         </div>
         <div class="col-md-6">
            <button type="reset" class="btn btn-warning col-md-12">Effacer</button>
         </div>
      </div>
    </div>
  </form>
</body>
<script type="text/javascript" src="js/validation.js"></script>
</html>
