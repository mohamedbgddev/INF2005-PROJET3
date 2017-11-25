<!DOCTYPE html>
<html lang="en">
<head>
  <title>Formulaire d'inscription</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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
      <p class="cinquieme-titre">UQAM</p>
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
        <div class="col-md-6"> 
          <div class="panel panel-danger">
            <div class="panel-heading">BLACK FRIDAY DEAL</div>
            <div class="panel-body"><img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image"></div>
            <div class="panel-footer">Buy 50 mobiles and get a gift card</div>
          </div>
        </div>
        <div class="col-md-6"> 
          <div class="panel panel-success">
            <div class="panel-heading">BLACK FRIDAY DEAL</div>
            <div class="panel-body"><img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image"></div>
            <div class="panel-footer">Buy 50 mobiles and get a gift card</div>
          </div>
        </div>
      </div>
    </div><br>

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
        <div class="col-md-6"> 
          <div class="panel panel-danger">
            <div class="panel-heading">BLACK FRIDAY DEAL</div>
            <div class="panel-body"><img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image"></div>
            <div class="panel-footer">Buy 50 mobiles and get a gift card</div>
          </div>
        </div>
        <div class="col-md-6"> 
          <div class="panel panel-success">
            <div class="panel-heading">BLACK FRIDAY DEAL</div>
            <div class="panel-body"><img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image"></div>
            <div class="panel-footer">Buy 50 mobiles and get a gift card</div>
          </div>
        </div>
      </div>
    </div><br>

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
        <div class="col-md-6"> 
          <div class="panel panel-danger">
            <div class="panel-heading">BLACK FRIDAY DEAL</div>
            <div class="panel-body"><img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image"></div>
            <div class="panel-footer">Buy 50 mobiles and get a gift card</div>
          </div>
        </div>
        <div class="col-md-6"> 
          <div class="panel panel-success">
            <div class="panel-heading">BLACK FRIDAY DEAL</div>
            <div class="panel-body"><img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image"></div>
            <div class="panel-footer">Buy 50 mobiles and get a gift card</div>
          </div>
        </div>
      </div>
    </div><br>
  </form>  
</body>
</html>
