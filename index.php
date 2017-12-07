<!DOCTYPE html>
<html lang="en">
<head>
  <title>Formulaire d'inscription</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>
  <style>
    
    body{
      background-color: #464b51;
    }

    .container{
        max-width: 970px;
    }

    .navbar {
      margin-bottom: 50px;
      border-radius: 0;
    }
       
    .preface{
      background-color: #1c5bbf;
      color: white; 
      padding-left: 70px;
    }   

    .premier-titre{
      display: block;
      font-size: 120px;
      font-weight: bold;
      text-transform: capitalize;
      height: 100px;
      margin-top: 180px;
    }

    .premier-titre-suite{
      display: block;
      font-size: 120px;
      font-weight: bold;
      margin-bottom: 50px;

    }

    .second-titre{
      font-size: 25px;
      font-weight: bold;
      text-transform: capitalize;
      margin-bottom: 50px;
    }

    .troisieme-titre{
      font-size: 20px;
      font-weight: bold;
      text-transform: capitalize; 
      height: 20px;
    }

    .quatrieme-titre{
      font-size: 20px;
      font-weight: bold;
      text-transform: capitalize;
      margin-bottom: 250px; 
    }

    .cinquieme-titre{
      font-size: 60px;
      font-weight: bold;
      text-transform: uppercase;
      font-family: "Times New Roman", Times, serif;
      margin-bottom: 20px; 
    }

    .entete-gauche{
      font-size: 15px;
      font-weight: bold;
      text-transform: uppercase;
      font-family: "Arial Black", Gadget, sans-serif;
    }

    .entete-centre{
      font-size: 70px;
      font-weight: bold;
      text-align: center;
    }

    .entete-droite-premier{
      font-size: 20px;
      font-weight: bold;
      text-transform: uppercase;
      font-family: "Arial Black", Gadget, sans-serif;

    }
    .entete-droite-second{
      font-size: 15px;
      text-transform: capitalize;
      font-family: "Arial Black", Gadget, sans-serif;
      text-align: center;
    }

    .trait{
      border: none;
      height: 5px;
      background-color: #333;
      margin-top: 0px;
    }

    .text-gauche{
      float: left;
    }
    .text-centre{
      margin-left: 50px;
      float: center;
    }
    .text-droite{
      float: right;
    }
    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #f2f2f2;
      padding: 25px;

    }
  </style>
</head> 
<body>
  <form>
    <div class="container preface">
      <p><span class="premier-titre">prenez</span><span class="premier-titre-suite">votre place.</span></p>      
      <p class="second-titre">Études de premier cycle</p>
      <p class="troisieme-titre">demande d'admission</p>
      <p class="quatrieme-titre">instruction et formulaire</p>
      <p class="cinquieme-titre">UQÀM</p>
    </div><br>

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
        <div class="col-md-6">
          <label for="Nom-de-famille-a-la-naissance">Nom de famille a la naissance</label>
          <input type="text" class="form-control" name="Nom_de_famille_a_la_naissance" id="Nom-de-famille-a-la-naissance" placeholder="">
          <div class="valider-Nom-de-famille-a-la-naissance"></div>
        </div>
        <div class="col-md-6">
          <label for="Date-de-naissance">Date de naissance</label>
          <div class="row">
              <div class="col-md-2">
                <input type="text" class="form-control" name="Date_de_naissance_jour" id="Date-de-naissance-jour" placeholder="">  
                <p class="text-center">Jour</p>
                <div class="valider-Date-de-naissance-jour"></div>  
              </div>
              <div class="col-md-2">
                <input type="text" class="form-control" name="Date_de_naissance_mois" id="Date-de-naissance-mois" placeholder="">  
                <p class="text-center">Mois</p>
                <div class="valider-Date-de-naissance-mois"></div>
              </div>
              <div class="col-md-2">
                <input type="text" class="form-control" name="Date_de_naissance_annee" id="Date-de-naissance-annee" placeholder="">  
                <p class="text-center">Annee</p>
                <div class="valider-Date-de-naissance-annee"></div>
              </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-8">
          <label for="Prenom-usuel">Prenom usuel</label>
          <input type="text" class="form-control" name="Prenom_usuel" id="Prenom-usuel" placeholder="">
        </div>
        <div class="col-md-4">
          <label for="Sexe">Sexe</label>
          <div class="row">
            <div class="col-md-2">
              <label class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" name="sexe">
                <span class="custom-control-indicator"></span>
                <span class="custom-control-description">Feminin</span>
              </label>
            </div>
            <div class="col-md-2 col-md-offset-1">
              <label class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" name="sexe">
                <span class="custom-control-indicator"></span>
                <span class="custom-control-description">Masculin</span>
              </label>
            </div>
          </div>
          <div class="valider-Sexe"></div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <label for="Courriel-du-candidat">Courriel du candidat</label>
          <input type="text" class="form-control" name="Courriel_du_candidat" id="Courriel-du-candidat" placeholder="">
          <div class="valider-Courriel-du-candidat"></div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-7">
          <label for="Code-permanent">Code permanent (alphanumérique) si vous avez déjà étudié à l’UQAM</label>
          <input type="text" class="form-control" name="Code_permanent" id="Code-permanent" placeholder="">
          <div class="valider-Code-permanent"></div>
        </div>
        <div class="col-md-5">
          <label for="Numero-assurance-sociale">No d’assurance sociale</label>
          <input type="text" class="form-control" name="Numero_assurance_sociale" id="Numero-assurance-sociale" placeholder="">
          <div class="valider-Numero-assurance-sociale"></div>  
        </div>
      </div>
      <div class="row">
        <dir class="col-md-6">
          <div class="row">
            <div class="col-md-12">
              <label for="">Citoyenneté</label>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <label class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" name="sexe">
                <span class="custom-control-indicator"></span>
                <span class="custom-control-description">Canadienne</span>
              </label>
            </div>
            <div class="col-md-6">
               <label class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" name="sexe">
                <span class="custom-control-indicator"></span>
                <span class="custom-control-description">Autre(precisez)</span>
              </label>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <input type="text" class="form-control" name="Autre_citoyennete" id="Autre-citoyennete" placeholder="">
              <div class="valider-Autre-citoyennete"></div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <label for="Lieu-de-naissance(ville)">Lieu de naissance(ville)</label>
              <input type="text" class="form-control" name="Lieu_de_naissance(ville)" id="Lieu-de-naissance" placeholder="">
              <div class="valider-Lieu-de-naissance"></div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <label for="Nom-de-famille-pere-naissance">Nom de famille du père à la naissance</label>
              <input type="text" class="form-control" name="Nom_de_famille_pere_naissance" id="Nom-de-famille-pere-naissance" placeholder="">
              <div class="valider-Nom-de-famille-pere-naissance"></div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <label for="Prenom-usuel-du-pere">Prénom usuel du père</label>
              <input type="text" class="form-control" name="Prenom_usuel_du_pere" id="Prenom-usuel-du-pere" placeholder="">
              <div class="valider-Prenom-usuel-du-pere"></div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <label for="Nom-de-famille-mere-naissance">Nom de famille de la mère à la naissance</label>
              <input type="text" class="form-control" name="Nom_de_famille_mere_naissance" id="Nom-de-famille-mere-naissance" placeholder="">
              <div class="valider-Nom-de-famille-mere-naissance"></div>
            </div>
          </div>
           <div class="row">
            <div class="col-md-12">
              <label for="Prenom-usuel-du-mere">Prénom usuel du mère</label>
              <input type="text" class="form-control" name="Prenom_usuel_du_mere" id="Prenom-usuel-du-mere" placeholder="">
              <div class="valider-Prenom-usuel-du-mere"></div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <label for="">Téléphone au travail</label>
            </div>
          </div>
          <div class="row">
            <div class="col-md-2">  
              <input type="text" class="form-control" name="Ind_regional" id="Ind-regional" placeholder="">
              <p class="text-left">Ind.régional</p>
            </div>
            <div class="col-md-7">
              <input type="text" class="form-control" name="Numero_telephone" id="Numero-telephone" placeholder="">
              <p class="text-left">Numéro</p>
            </div>
            <div class="col-md-3">
              <input type="text" class="form-control" name="Poste_telephone" id="Poste-telephone" placeholder="">
              <p class="text-left">Poste</p>
            </div>
          </div>       
        </dir>

        <div class="col-md-6">
          <br>
          <div class="row">
            <div class="col-md-12">
              <label for="">Statut au Canada</label>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <label class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" name="statut-canada">
                <span class="custom-control-indicator"></span>
                <span class="custom-control-description">Citoyen canadien</span>
              </label>
            </div>
            <div class="col-md-6">
              <label class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" name="statut-canada">
                <span class="custom-control-indicator"></span>
                <span class="custom-control-description">Amérindien</span>
              </label>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <label class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" name="statut-canada">
                <span class="custom-control-indicator"></span>
                <span class="custom-control-description">Résident permanent</span>
              </label>
            </div>
            <div class="col-md-6">
              <label class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" name="statut-canada">
                <span class="custom-control-indicator"></span>
                <span class="custom-control-description">Visa diplomatique</span>
              </label>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <label class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" name="statut-canada">
                <span class="custom-control-indicator"></span>
                <span class="custom-control-description">Permis d’études</span>
              </label>
            </div>
            <div class="col-md-6">
              <label class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" name="statut-canada">
                <span class="custom-control-indicator"></span>
                <span class="custom-control-description">Permis de séjour temporaire</span>
              </label>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <label class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" name="statut-canada">
                <span class="custom-control-indicator"></span>
                <span class="custom-control-description">Permis de travail</span>
              </label>
            </div>
            <div class="col-md-6">
              <label class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" name="statut-canada">
                <span class="custom-control-indicator"></span>
                <span class="custom-control-description">Réfugié</span>
              </label>
            </div>
          </div>
          <br>
          <div class="row">
            <div class="col-md-12">
              <label for="">Langue d’usage (Langue parlée le plus souvent à la maison)</label></div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <label class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" name="langue-usage">
                <span class="custom-control-indicator"></span>
                <span class="custom-control-description">Francais</span>
              </label>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <label class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" name="langue-usage">
                <span class="custom-control-indicator"></span>
                <span class="custom-control-description">Anglais</span>
              </label>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <label class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" name="langue-usage">
                <span class="custom-control-indicator"></span>
                <span class="custom-control-description">Amérindien ou Inuktitut</span>
              </label>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <label class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" name="langue-usage">
                <span class="custom-control-indicator"></span>
                <span class="custom-control-description">Autre (précisez)</span>
              </label>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <input type="text" class="form-control" name="langue_usage_autre" id="langue-usage-autre" placeholder="">
              <div class="valider-langue-usage-autre"></div>
            </div>
          </div>
          <br>
          <div class="row">
            <div class="col-md-12">
              <label for="">Langue maternelle (Première langue apprise et encore comprise)</label></div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <label class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" name="langue-usage">
                <span class="custom-control-indicator"></span>
                <span class="custom-control-description">Francais</span>
              </label>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <label class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" name="langue-usage">
                <span class="custom-control-indicator"></span>
                <span class="custom-control-description">Anglais</span>
              </label>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <label class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" name="langue-usage">
                <span class="custom-control-indicator"></span>
                <span class="custom-control-description">Amérindien ou Inuktitut</span>
              </label>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <label class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" name="langue-usage">
                <span class="custom-control-indicator"></span>
                <span class="custom-control-description">Autre (précisez)</span>
              </label>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <input type="text" class="form-control" name="langue_usage_autre" id="langue-usage-autre" placeholder="">
              <div class="valider-langue-usage-autre"></div>
            </div>
          </div>               
        </div>
      </div>

      <div class="row">
        <div class="col-md-12">
          <label for="Courriel-personnel">Courriel</label>
          <input type="text" class="form-control" name="Courriel_personnel" id="Courriel-personnel" placeholder="">
          <div class="valider-Courriel-personnel"></div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <label for="Adresse-de-correspondance">Adresse de correspondance</label>
        </div>
      </div>
        <div class="row">
          <div class="col-md-8">
            <input type="text" class="form-control" name="Numéro_civique_Type_et_nom_de_la_rue_Direction_de_rue" id="Numéro-civique-Type-et-nom-de-la-rue-Direction-de-rue" placeholder="">
            <p><span class="text-gauche">Numéro civique</span><span class="text-centre">Type et nom de la rue</span>
            <span class="text-droite">Direction de rue</span></p>
            <div class="valider-Numéro-civique-Type-et-nom-de-la-rue-Direction-de-rue"></div>
          </div>
          <div class="col-md-4">
            <input type="text" class="form-control" name="Numero_apartement" id="Numero-apartement" placeholder="">
            <p>No d’appartement ou d’unité</p>
            <div class="valider-Numero-apartement"></div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-8">
            <input type="text" class="form-control" name="Municipalité_Pays" id="Municipalité-Pays" placeholder="">
            <p><span class="text-gauche">Municipalité</span><span class="text-droite">Pays (si autre que le Canada)</span></p>
            <div class="valider-Numéro-civique-Type-et-nom-de-la-rue-Direction-de-rue"></div>
          </div>
          <div class="col-md-4">
            <input type="text" class="form-control" name="Code_postal" id="Code-postal" placeholder="">
            <p>Code postal</p>
            <div class="valider-Code-postal"></div>
          </div>
        </div>



        <div class="row">
        <div class="col-md-12">
          <label for="Adresse-de-correspondance-autre">Adresse où vous résidez actuellement (si différente de l’adresse de correspondance)</label>
        </div>
      </div>
        <div class="row">
          <div class="col-md-8">
            <input type="text" class="form-control" name="Numéro_civique_Type_et_nom_de_la_rue_Direction_de_rue_autre" id="Numéro-civique-Type-et-nom-de-la-rue-Direction-de-rue-autre" placeholder="">
            <p><span class="text-gauche">Numéro civique</span><span class="text-centre">Type et nom de la rue</span>
            <span class="text-droite">Direction de rue</span></p>
            <div class="valider-Numéro-civique-Type-et-nom-de-la-rue-Direction-de-rue-autre"></div>
          </div>
          <div class="col-md-4">
            <input type="text" class="form-control" name="Numero_apartement_autre" id="Numero-apartement-autre" placeholder="">
            <p>No d’appartement ou d’unité</p>
            <div class="valider-Numero-apartement-autre"></div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-8">
            <input type="text" class="form-control" name="Municipalité_Pays_autre" id="Municipalité-Pays-autre" placeholder="">
            <p><span class="text-gauche">Municipalité</span><span class="text-droite">Pays (si autre que le Canada)</span></p>
            <div class="valider-Numéro-civique-Type-et-nom-de-la-rue-Direction-de-rue-autre"></div>
          </div>
          <div class="col-md-4">
            <input type="text" class="form-control" name="Code_postal-autre" id="Code-postal-autre" placeholder="">
            <p>Code postal</p>
            <div class="valider-Code-postal-autre"></div>
          </div>
        </div>
    </div><br>
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
              <label><input type="radio" name="">Hiver</label>
            </div>
          </div>
          <div class="col-md-2">
            <div class="radio">
              <label><input type="radio" name="optradio">Ete</label>
            </div>
          </div>
          <div class="col-md-2">
            <div class="radio">
              <label><input type="radio" name="optradio">Automne</label>
            </div>
          </div>
          <div class="col-md-1">
            <input class="date-own form-control" type="text">
            <p>Annee</p>
          </div>
      </div>
      <!-- ################################# Premier choix programmes demandes ##########################################-->
      <div class="row">
        <div class="col-md-12">
           <p>Premier Choix</p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-10">
          <input type="text" class="form-control" name="Premier_choix_titre" id="Premier-choix-titre" placeholder="">
          <label for="Premier-choix">Titre</label>
          <div class="valider-Premier-choix-titre"></div>          
        </div>
        <div class="col-md-2">
          <div class="radio">
            <label><input type="radio" name="optradio">Temp complet</label>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-2">
          <input type="text" class="form-control" name="Premier_choix-code" id="Premier-choix-code" placeholder="">
          <label for="Premier-choix-code">Code</label>
          <div class="valider-Premier-choix-code"></div>
        </div>
        <div class="col-md-1 col-md-offset-1">
          <div class="radio">
            <label><input type="radio" name="optradio">Baccalauréat</label>
          </div>
        </div>
        <div class="col-md-1 col-md-offset-1">
          <div class="radio">
            <label><input type="radio" name="optradio">Majeure</label>
          </div>
        </div>
        <div class="col-md-1">
          <div class="radio">
            <label><input type="radio" name="optradio">Mineure</label>
          </div>
        </div>
        <div class="col-md-1">
          <div class="radio">
            <label><input type="radio" name="optradio">Certificat</label>
          </div>
        </div>
        <div class="col-md-1">
          <div class="radio">
            <label><input type="radio" name="optradio">Programme court</label>
          </div>
        </div>
        <div class="col-md-1 col-md-offset-1">
          <div class="radio">
            <label><input type="radio" name="optradio">Temps partiel</label>
          </div>
        </div> 
      </div>      
      <!-- ################################# Deuxieme choix programmes demandes ##########################################-->
      <div class="row">
        <div class="col-md-12">
           <p>Deuxieme Choix</p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-10">
          <input type="text" class="form-control" name="Deuxieme_choix_titre" id="Deuxieme-choix-titre" placeholder="">
          <label for="Deuxieme-choix">Titre</label>
          <div class="valider-Deuxieme-choix-titre"></div>          
        </div>
        <div class="col-md-2">
          <div class="radio">
            <label><input type="radio" name="optradio">Temp complet</label>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-2">
          <input type="text" class="form-control" name="Deuxieme_choix-code" id="Deuxieme-choix-code" placeholder="">
          <label for="Deuxieme-choix-code">Code</label>
          <div class="valider-Deuxieme-choix-code"></div>
        </div>
        <div class="col-md-1 col-md-offset-1">
          <div class="radio">
            <label><input type="radio" name="optradio">Baccalauréat</label>
          </div>
        </div>
        <div class="col-md-1 col-md-offset-1">
          <div class="radio">
            <label><input type="radio" name="optradio">Majeure</label>
          </div>
        </div>
        <div class="col-md-1">
          <div class="radio">
            <label><input type="radio" name="optradio">Mineure</label>
          </div>
        </div>
        <div class="col-md-1">
          <div class="radio">
            <label><input type="radio" name="optradio">Certificat</label>
          </div>
        </div>
        <div class="col-md-1">
          <div class="radio">
            <label><input type="radio" name="optradio">Programme court</label>
          </div>
        </div>
        <div class="col-md-1 col-md-offset-1">
          <div class="radio">
            <label><input type="radio" name="optradio">Temps partiel</label>
          </div>
        </div> 
      </div>      
      <!-- ################################# Troisieme choix programmes demandes ##########################################-->
      <div class="row">
        <div class="col-md-12">
           <p>Troisième choix (nous vous suggérons fortement un programme non contingenté)</p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-10">
          <input type="text" class="form-control" name="Troisieme_choix_titre" id="Troisieme-choix-titre" placeholder="">
          <label for="Troisieme-choix">Titre</label>
          <div class="valider-Troisieme-choix-titre"></div>          
        </div>
        <div class="col-md-2">
          <div class="radio">
            <label><input type="radio" name="optradio">Temp complet</label>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-2">
          <input type="text" class="form-control" name="Troisieme_choix-code" id="Troisieme-choix-code" placeholder="">
          <label for="Premier-choix-code">Code</label>
          <div class="valider-Troisieme-choix-code"></div>
        </div>
        <div class="col-md-1 col-md-offset-1">
          <div class="radio">
            <label><input type="radio" name="optradio">Baccalauréat</label>
          </div>
        </div>
        <div class="col-md-1 col-md-offset-1">
          <div class="radio">
            <label><input type="radio" name="optradio">Majeure</label>
          </div>
        </div>
        <div class="col-md-1">
          <div class="radio">
            <label><input type="radio" name="optradio">Mineure</label>
          </div>
        </div>
        <div class="col-md-1">
          <div class="radio">
            <label><input type="radio" name="optradio">Certificat</label>
          </div>
        </div>
        <div class="col-md-1">
          <div class="radio">
            <label><input type="radio" name="optradio">Programme court</label>
          </div>
        </div>
        <div class="col-md-1 col-md-offset-1">
          <div class="radio">
            <label><input type="radio" name="optradio">Temps partiel</label>
          </div>
        </div> 
      </div>
      <div class="row">
        <div class="col-md-12">
          <label for="#">RENSEIGNEMENTS SUR LES ÉTUDES SECONDAIRES ET COLLÉGIALES</label>  
          <hr class="trait">
        </div>
      </div>
      <!-- ################################# Page 2  renseignement sur les etudes secondaires et collegiales ################-->        
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
                <input type="text" class="form-control" name="Derniere_annee_secondaire" id="Derniere-annee-secondaire" placeholder="">
                <div class="valider-Derniere-annee-secondaire"></div>  
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="radio">
                  <label><input type="radio" name="optradio">Diplôme d’études secondaires ou collégiales poursuivies à l’extérieur du Québec</label>
                </div>                
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <label for="">Nom du diplôme</label>
                <input type="text" class="form-control" name="" id="" placeholder="">
                <div class="valider-"></div>  
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <label for="">Discipline ou spécialisation</label>
                <input type="text" class="form-control" name="" id="" placeholder="">
                <div class="valider-"></div>  
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <label for="">Institution où vous avez poursuivi vos études</label>
                <input type="text" class="form-control" name="" id="" placeholder="">
                <div class="valider-"></div>  
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <label for="">Pays</label>
                <input type="text" class="form-control" name="" id="" placeholder="">
                <div class="valider-"></div>  
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="radio">
                  <label><input type="radio" name="optradio">DEC</label>
                </div>
              </div>
              <div class="col-md-6">
                <div class="radio">
                  <label><input type="radio" name="optradio">Autre diplome de niveau collegial(AEC,CEC,...)</label>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <label for="">Nom du diplôme</label>
                <input type="text" class="form-control" name="" id="" placeholder="">
                <div class="valider-"></div>  
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <label for="">Discipline ou spécialisation</label>
                <input type="text" class="form-control" name="" id="" placeholder="">
                <div class="valider-"></div>  
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <label for="">Institution où vous avez poursuivi vos études en vue de l’obtention de ce diplôme</label>
                <input type="text" class="form-control" name="" id="" placeholder="">
                <div class="valider-"></div>  
              </div>
            </div>
        </div>
        <!-- ####### Page 2 partie date text#############-->
        <div class="col-md-4">
          <div class="row">
            <div class="col-md-12">
              <p>Période de fréquentation</p>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <input class="date-own form-control" type="text">
              <p>De (année)</p> 
            </div>
            <div class="col-md-6">
              <input class="date-own form-control" type="text">
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
              <input class="date-own form-control" type="text">
              <p>De (année)</p> 
            </div>
            <div class="col-md-6">
              <input class="date-own form-control" type="text">
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
              <input class="date-own form-control" type="text">
              <p>Mois</p> 
            </div>
            <div class="col-md-6">
              <input class="date-own form-control" type="text">
              <p>Année</p> 
            </div>
          </div>

          <br>
          <br>
          <br>
          <div class="row">
            <div class="col-md-6">
              <div class="radio">
                <label><input type="radio" name="optradio">Obtenu</label>
              </div>
            </div>
            <div class="col-md-6">
              <div class="radio">
                <label><input type="radio" name="optradio">A obtenir</label>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-12">
               <div class="radio">
                <label><input type="radio" name="optradio">Ne sera pas obtenu</label>
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
              <input class="date-own form-control" type="text">
              <p>De (année)</p> 
            </div>
            <div class="col-md-6">
              <input class="date-own form-control" type="text">
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
              <input class="date-own form-control" type="text">
              <p>Mois</p> 
            </div>
            <div class="col-md-6">
              <input class="date-own form-control" type="text">
              <p>Année</p> 
            </div>
          </div>
        </div>        
      </div>
      </div><br>
<!-- ################################# Page 3 programmes demandes ##########################################-->
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
                <label><input type="radio" name="optradio">Grade ou diplôme de niveau universitaire le plus récent entrepris ou complété</label>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-12">
              <label for="">Nom du diplôme</label>
              <input type="text" class="form-control" name="" id="" placeholder="">
              <div class="valider-"></div>  
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <label for="">Discipline ou spécialisation</label>
              <input type="text" class="form-control" name="" id="" placeholder="">
              <div class="valider-"></div>  
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <label for="">Institution où vous avez poursuivi vos études en vue de l’obtention de ce diplôme</label>
              <input type="text" class="form-control" name="" id="" placeholder="">
              <div class="valider-"></div>  
            </div>
          </div>

          <div class="row">
            <div class="col-md-12">
              <label for="">Pays (si à l’extérieur du Canada)</label>
              <input type="text" class="form-control" name="" id="" placeholder="">
              <div class="valider-"></div>  
            </div>
          </div>

          <br>
          <br>
          <br>
          <br>
          
         
          <div class="row">
           <div class="col-md-12">
              <div class="radio">
                <label><input type="radio" name="optradio">Autre grade ou diplôme de niveau universitaire entrepris ou complété</label>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-12">
              <label for="">Nom du diplôme</label>
              <input type="text" class="form-control" name="" id="" placeholder="">
              <div class="valider-"></div>  
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <label for="">Discipline ou spécialisation</label>
              <input type="text" class="form-control" name="" id="" placeholder="">
              <div class="valider-"></div>  
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <label for="">Institution où vous avez poursuivi vos études en vue de l’obtention de ce diplôme</label>
              <input type="text" class="form-control" name="" id="" placeholder="">
              <div class="valider-"></div>  
            </div>
          </div>

          <div class="row">
            <div class="col-md-12">
              <label for="">Pays (si à l’extérieur du Canada)</label>
              <input type="text" class="form-control" name="" id="" placeholder="">
              <div class="valider-"></div>  
            </div>
          </div>
        </div>
        <!-- ################################# Page 3 etudes universitaires  dates ##########################################-->
        
        <div class="col-md-4">
          <div class="row">
            <div class="col-md-6">
              <div class="radio">
                <label><input type="radio" name="optradio">Obtenu</label>
              </div>
            </div>
            <div class="col-md-6">
              <div class="radio">
                <label><input type="radio" name="optradio">A obtenir</label>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-12">
               <div class="radio">
                <label><input type="radio" name="optradio">Ne sera pas obtenu</label>
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
              <input class="date-own form-control" type="text">
              <p>De (année)</p> 
            </div>
            <div class="col-md-6">
              <input class="date-own form-control" type="text">
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
              <input class="date-own form-control" type="text">
              <p>Mois</p> 
            </div>
            <div class="col-md-6">
              <input class="date-own form-control" type="text">
              <p>Année</p> 
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
                <label for="">Nombre de crédits complétés</label>
                <input type="text" class="form-control" name="" id="" placeholder="">
                <div class="valider-"></div>   
            </div>
          </div>
          <br>
          <div class="row">
            <div class="col-md-6">
              <div class="radio">
                <label><input type="radio" name="optradio">Obtenu</label>
              </div>
            </div>
            <div class="col-md-6">
              <div class="radio">
                <label><input type="radio" name="optradio">A obtenir</label>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-12">
               <div class="radio">
                <label><input type="radio" name="optradio">Ne sera pas obtenu</label>
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
              <input class="date-own form-control" type="text">
              <p>De (année)</p> 
            </div>
            <div class="col-md-6">
              <input class="date-own form-control" type="text">
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
              <input class="date-own form-control" type="text">
              <p>Mois</p> 
            </div>
            <div class="col-md-6">
              <input class="date-own form-control" type="text">
              <p>Année</p> 
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
                <label for="">Nombre de crédits complétés</label>
                <input type="text" class="form-control" name="" id="" placeholder="">
                <div class="valider-"></div>   
            </div>
          </div>
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
                  <label for="">Nom de l’employeur</label>
                  <input type="text" class="form-control" name="" id="" placeholder="">
                  <div class="valider-"></div>  
               </div>
            </div>
            <div class="row">
               <div class="col-md-12">
                  <label for="">Fonction occupée</label>
                  <input type="text" class="form-control" name="" id="" placeholder="">
                  <div class="valider-"></div>  
               </div>
            </div>
            <div class="row">
              <div class="col-md-2">
                <div class="radio">
                  <label><input type="radio" name="optradio">Emploi rémunéré</label>
                </div>
              </div>
              <div class="col-md-2">
                <div class="radio">
                  <label><input type="radio" name="optradio">Stage</label>
                </div>
              </div>
              <div class="col-md-2">
                <div class="radio">
                  <label><input type="radio" name="optradio">Bénévolat</label>
                </div>
              </div>
              <div class="col-md-2">
                <div class="radio">
                  <label><input type="radio" name="optradio">Temps complet</label>
                </div>
              </div>
              <div class="col-md-2">
                <div class="radio">
                  <label><input type="radio" name="optradio">Temps partiel</label>
                </div>
              </div>
            </div>

            <!-- Deuxieme emploie -->
            <div class="row">
               <div class="col-md-12">
                  <label for="">Nom de l’employeur</label>
                  <input type="text" class="form-control" name="" id="" placeholder="">
                  <div class="valider-"></div>  
               </div>
            </div>
            <div class="row">
               <div class="col-md-12">
                  <label for="">Fonction occupée</label>
                  <input type="text" class="form-control" name="" id="" placeholder="">
                  <div class="valider-"></div>  
               </div>
            </div>
            <div class="row">
              <div class="col-md-2">
                <div class="radio">
                  <label><input type="radio" name="optradio">Emploi rémunéré</label>
                </div>
              </div>
              <div class="col-md-2">
                <div class="radio">
                  <label><input type="radio" name="optradio">Stage</label>
                </div>
              </div>
              <div class="col-md-2">
                <div class="radio">
                  <label><input type="radio" name="optradio">Bénévolat</label>
                </div>
              </div>
              <div class="col-md-2">
                <div class="radio">
                  <label><input type="radio" name="optradio">Temps complet</label>
                </div>
              </div>
              <div class="col-md-2">
                <div class="radio">
                  <label><input type="radio" name="optradio">Temps partiel</label>
                </div>
              </div>
            </div>

            <!-- Troisieme emploie -->
            <div class="row">
               <div class="col-md-12">
                  <label for="">Nom de l’employeur</label>
                  <input type="text" class="form-control" name="" id="" placeholder="">
                  <div class="valider-"></div>  
               </div>
            </div>
            <div class="row">
               <div class="col-md-12">
                  <label for="">Fonction occupée</label>
                  <input type="text" class="form-control" name="" id="" placeholder="">
                  <div class="valider-"></div>  
               </div>
            </div>
            <div class="row">
              <div class="col-md-2">
                <div class="radio">
                  <label><input type="radio" name="optradio">Emploi rémunéré</label>
                </div>
              </div>
              <div class="col-md-2">
                <div class="radio">
                  <label><input type="radio" name="optradio">Stage</label>
                </div>
              </div>
              <div class="col-md-2">
                <div class="radio">
                  <label><input type="radio" name="optradio">Bénévolat</label>
                </div>
              </div>
              <div class="col-md-2">
                <div class="radio">
                  <label><input type="radio" name="optradio">Temps complet</label>
                </div>
              </div>
              <div class="col-md-2">
                <div class="radio">
                  <label><input type="radio" name="optradio">Temps partiel</label>
                </div>
              </div>
            </div>
        </div>

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
              <input class="date-own form-control" type="text">
              <p>Mois</p> 
            </div>
            <div class="col-md-5">
              <input class="date-own form-control" type="text">
              <p>Année</p> 
            </div>
          </div>
          <div class="row">
            <div class="col-md-2">
              <p>a</p>
            </div>
            <div class="col-md-5">
              <input class="date-own form-control" type="text">
              <p>Mois</p> 
            </div>
            <div class="col-md-5">
              <input class="date-own form-control" type="text">
              <p>Année</p> 
            </div>
          </div>


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
              <input class="date-own form-control" type="text">
              <p>Mois</p> 
            </div>
            <div class="col-md-5">
              <input class="date-own form-control" type="text">
              <p>Année</p> 
            </div>
          </div>
          <div class="row">
            <div class="col-md-2">
              <p>a</p>
            </div>
            <div class="col-md-5">
              <input class="date-own form-control" type="text">
              <p>Mois</p> 
            </div>
            <div class="col-md-5">
              <input class="date-own form-control" type="text">
              <p>Année</p> 
            </div>
          </div>

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
              <input class="date-own form-control" type="text">
              <p>Mois</p> 
            </div>
            <div class="col-md-5">
              <input class="date-own form-control" type="text">
              <p>Année</p> 
            </div>
          </div>
          <div class="row">
            <div class="col-md-2">
              <p>a</p>
            </div>
            <div class="col-md-5">
              <input class="date-own form-control" type="text">
              <p>Mois</p> 
            </div>
            <div class="col-md-5">
              <input class="date-own form-control" type="text">
              <p>Année</p> 
            </div>
          </div>



        </div>
      </div>

    </div><br>
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
  </form>  
</body>
</html>