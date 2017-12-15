/*
	Fonction de validations Section indentification page 1
*/

function nomFamilleNaissanceValidation() {
	var valeur = document.getElementById("Nom-de-famille-a-la-naissance");

	if(valeur.value == "") {
		document.getElementById("valider-Nom-de-famille-a-la-naissance").style.display = "block";
		valeur.classList.add('has-error', 'has-feedback');
		document.getElementById('valider-Nom-de-famille-a-la-naissance').innerHTML = 'Nom de famille a la naissance requis !';
		return false;
	} else {
		document.getElementById("valider-Nom-de-famille-a-la-naissance").style.display = "none";
		valeur.classList.add('has-success', 'has-feedback');
		document.getElementById('valider-Nom-de-famille-a-la-naissance').innerHTML = '';
		return true;
	}
}


function dateDeNaissanceValidation() {
	var valeur = document.getElementById("Date-de-naissance");

	if(valeur.value == "") {
		document.getElementById("valider-Date-de-naissance").style.display = "block";
		valeur.classList.add('has-error', 'has-feedback');
		document.getElementById('valider-Date-de-naissance').innerHTML = ' Date de naissance requise !';
		return false;
	}else if (!validerDateNaissance(valeur.value)) {
		document.getElementById("valider-Date-de-naissance").style.display = "block";
		valeur.classList.add('has-error', 'has-feedback');
		document.getElementById('valider-Date-de-naissance').innerHTML = 'Format de date invalide !';
	}else {
		document.getElementById("valider-Date-de-naissance").style.display = "none";
		valeur.classList.add('has-success', 'has-feedback');
		document.getElementById('valider-Date-de-naissance').innerHTML = '';
		return true;
	}
}


function prenomUsuelValidation(){
	var valeur = document.getElementById("Prenom-usuel");

	if(valeur.value == "") {
		document.getElementById("valider-Prenom-usuel").style.display = "block";
		valeur.classList.add('has-error', 'has-feedback');
		document.getElementById('valider-Prenom-usuel').innerHTML = 'Prenom usuel est requis !';
		return false;
	} else {
		document.getElementById("valider-Prenom-usuel").style.display = "none";
		valeur.classList.add('has-success', 'has-feedback');
		document.getElementById('valider-Prenom-usuel').innerHTML = '';
		return true;
	}
}


function courrielCandidatValidation() {
	var valeur = document.getElementById("Courriel-du-candidat");

	if(valeur.value == "") {
		document.getElementById("valider-Courriel-du-candidat").style.display = "block";
		valeur.classList.add('has-error', 'has-feedback');
		document.getElementById('valider-Courriel-du-candidat').innerHTML = ' Le corriel du canddidat est requis !';
		return false;
	} else if(!validerCourriel(valeur.value)) {
		document.getElementById("valider-Courriel-du-candidat").style.display = "block";
		valeur.classList.add('has-warning', 'has-feedback');
		document.getElementById("valider-Courriel-du-candidat").innerHTML = "Format du courriel est incorrect!";
		return false;
	} else {
		document.getElementById("valider-Courriel-du-candidat").style.display = "none";
		valeur.classList.add('has-success', 'has-feedback');
		document.getElementById('valider-Courriel-du-candidat').innerHTML = '';
		return true;
	}
}


function codePermanentValidation(){
	var valeur = document.getElementById("Code-permanent");

	if(valeur.value == "") {
		document.getElementById("valider-Code-permanent").style.display = "block";
		valeur.classList.add('has-error', 'has-feedback');
		document.getElementById('valider-Code-permanent').innerHTML = ' Code permanent requis!';
		return false;
	} else if(!validerCodePermanent(valeur.value)) {
		document.getElementById("valider-Code-permanent").style.display = "block";
		valeur.classList.add('has-warning', 'has-feedback');
		document.getElementById("valider-Code-permanent").innerHTML = "Code permanent non valide!";
		return false;
	} else {
		document.getElementById("valider-Code-permanent").style.display = "none";
		valeur.classList.add('has-success', 'has-feedback');
		document.getElementById('valider-Code-permanent').innerHTML = '';
		return true;
	}
}


function numeroAssurranceSocialeValidation() {
	var valeur = document.getElementById("");

	if(!validerNumeroAssurranceSociale(value.value)) {
		document.getElementById("valider-Numero-assurance-sociale").style.display = "block";
		valeur.classList.add('has-warning', 'has-feedback');
		document.getElementById('valider-Numero-assurance-sociale').innerHTML = 'Le numéro assurance social est composé de 9 chiffres !';
		return false;
	} else {
		document.getElementById("valider-Numero-assurance-sociale").style.display = "none";
		valeur.classList.add('has-success', 'has-feedback');
		document.getElementById('valider-Numero-assurance-sociale').innerHTML = '';
		return true;
	}
}


function lieuNaissanceValidation() {
	var valeur = document.getElementById("Lieu-de-naissance");

	if(valeur.value == "") {
		document.getElementById("valider-Lieu-de-naissance").style.display = "block";
		valeur.classList.add('has-error', 'has-feedback');
		document.getElementById('valider-Lieu-de-naissance').innerHTML = 'Lieu de naissance requis !';
		return false;
	} else {
		document.getElementById("valider-Lieu-de-naissance").style.display = "none";
		valeur.classList.add('has-success', 'has-feedback');
		document.getElementById('valider-Lieu-de-naissance').innerHTML = '';
		return true;
	}
}


function nomFamillePereNaissance(){
	var valeurNom = document.getElementById("Nom-de-famille-pere-naissance");
	var valeurPrenom = document.getElementById("Prenom-usuel-du-pere");

	if(valeurNom.value.length > 0 && valeurPrenom.value.length > 0 ) {
		document.getElementById("valider-Prenom-usuel-du-pere").style.display = "none";
		document.getElementById('valider-Prenom-usuel-du-pere').classList.remove('warningHeader');
		document.getElementById('valider-Prenom-usuel-du-pere').innerHTML = '';
		document.getElementById('valider-Nom-de-famille-pere-naissance').classList.remove('warningHeader');
		document.getElementById('valider-Nom-de-famille-pere-naissance').innerHTML = '';
		return true;
	} else if (valeurNom.value.length > 0 ) {
		document.getElementById("valider-Prenom-usuel-du-pere").style.display = "block";
		document.getElementById('valider-Prenom-usuel-du-pere').classList.add('warningHeader');
		document.getElementById('valider-Prenom-usuel-du-pere').innerHTML = 'Prenom usuel du pere requis !';
		return false;
	} else if (valeurNom.value.length == 0 && valeurPrenom.value.length > 0 ) {
		document.getElementById("valider-Nom-de-famille-pere-naissance").style.display = "block";
		document.getElementById('valider-Nom-de-famille-pere-naissance').classList.add('warningHeader');
		document.getElementById('valider-Nom-de-famille-pere-naissance').innerHTML ='nom de famille de la pere a la naissance est requis !';
		return false;
	}else{
		document.getElementById("valider-Prenom-usuel-du-pere").style.display = "none";
		document.getElementById('valider-Prenom-usuel-du-pere').classList.remove('warningHeader');
		document.getElementById('valider-Prenom-usuel-du-pere').innerHTML = '';
		document.getElementById('valider-Nom-de-famille-pere-naissance').classList.remove('warningHeader');
		document.getElementById('valider-Nom-de-famille-pere-naissance').innerHTML = '';
		return true;
	}
}

function prenomUsuelPere(){
	var valeurNom = document.getElementById("Nom-de-famille-pere-naissance");
	var valeurPrenom = document.getElementById("Prenom-usuel-du-pere");

	if(valeurNom.value.length > 0 && valeurPrenom.value.length > 0 ) {
		document.getElementById("valider-Prenom-usuel-du-pere").style.display = "none";
		document.getElementById('valider-Prenom-usuel-du-pere').classList.remove('warningHeader');
		document.getElementById('valider-Prenom-usuel-du-pere').innerHTML = '';
		document.getElementById('valider-Nom-de-famille-pere-naissance').classList.remove('warningHeader');
		document.getElementById('valider-Nom-de-famille-pere-naissance').innerHTML = '';
		return true;
	} else if (valeurPrenom.value.length > 0 ) {
		document.getElementById("valider-Nom-de-famille-pere-naissance").style.display = "block";
		document.getElementById('valider-Nom-de-famille-pere-naissance').classList.add('warningHeader');
		document.getElementById('valider-Nom-de-famille-pere-naissance').innerHTML = 'nom de famille du pere a la naissance est requis !';
		return false;
	} else if (valeurPrenom.value.length == 0 && valeurNom.value.length > 0 ) {
		document.getElementById("valider-Prenom-usuel-du-pere").style.display = "block";
		document.getElementById('valider-Prenom-usuel-du-pere').classList.add('warningHeader');
		document.getElementById('valider-Prenom-usuel-du-pere').innerHTML ='Prenom usuel de la pere requis !';
		return false;
	}else{
		document.getElementById("valider-Nom-de-famille-pere-naissance").style.display = "none";
		document.getElementById('valider-Prenom-usuel-du-pere').classList.remove('warningHeader');
		document.getElementById('valider-Prenom-usuel-du-pere').innerHTML = '';
		document.getElementById('valider-Nom-de-famille-pere-naissance').classList.remove('warningHeader');
		document.getElementById('valider-Nom-de-famille-pere-naissance').innerHTML = '';
		return true;
	}
}



function nomFamilleMereNaissance(){
	var valeurNom = document.getElementById("Nom-de-famille-mere-naissance");
	var valeurPrenom = document.getElementById("Prenom-usuel-du-mere");

	if(valeurNom.value.length > 0 && valeurPrenom.value.length > 0 ) {
		document.getElementById("valider-Prenom-usuel-du-mere").style.display = "none";
		document.getElementById('valider-Prenom-usuel-du-mere').classList.remove('warningHeader');
		document.getElementById('valider-Prenom-usuel-du-mere').innerHTML = '';
		document.getElementById('valider-Nom-de-famille-mere-naissance').classList.remove('warningHeader');
		document.getElementById('valider-Nom-de-famille-mere-naissance').innerHTML = '';
		return true;
	} else if (valeurNom.value.length > 0 ) {
		document.getElementById("valider-Prenom-usuel-du-mere").style.display = "block";
		document.getElementById('valider-Prenom-usuel-du-mere').classList.add('warningHeader');
		document.getElementById('valider-Prenom-usuel-du-mere').innerHTML = 'Prenom usuel de la mere requis !';
		return false;
	} else if (valeurNom.value.length == 0 && valeurPrenom.value.length > 0 ) {
		document.getElementById("valider-Nom-de-famille-mere-naissance").style.display = "block";
		document.getElementById('valider-Nom-de-famille-mere-naissance').classList.add('warningHeader');
		document.getElementById('valider-Nom-de-famille-mere-naissance').innerHTML ='nom de famille de la mere a la naissance est requis !';
		return false;
	}else{
		document.getElementById("valider-Prenom-usuel-du-mere").style.display = "none";
		document.getElementById('valider-Prenom-usuel-du-mere').classList.remove('warningHeader');
		document.getElementById('valider-Prenom-usuel-du-mere').innerHTML = '';
		document.getElementById('valider-Nom-de-famille-mere-naissance').classList.remove('warningHeader');
		document.getElementById('valider-Nom-de-famille-mere-naissance').innerHTML = '';
		return true;
	}
}

function prenomUsuelMere(){
	var valeurNom = document.getElementById("Nom-de-famille-mere-naissance");
	var valeurPrenom = document.getElementById("Prenom-usuel-du-mere");

	if(valeurNom.value.length > 0 && valeurPrenom.value.length > 0 ) {
		document.getElementById("valider-Prenom-usuel-du-mere").style.display = "none";
		document.getElementById('valider-Prenom-usuel-du-mere').classList.remove('warningHeader');
		document.getElementById('valider-Prenom-usuel-du-mere').innerHTML = '';
		document.getElementById('valider-Nom-de-famille-mere-naissance').classList.remove('warningHeader');
		document.getElementById('valider-Nom-de-famille-mere-naissance').innerHTML = '';
		return true;
	} else if (valeurPrenom.value.length > 0 ) {
		document.getElementById("valider-Nom-de-famille-mere-naissance").style.display = "block";
		document.getElementById('valider-Nom-de-famille-mere-naissance').classList.add('warningHeader');
		document.getElementById('valider-Nom-de-famille-mere-naissance').innerHTML = 'nom de famille de la mere a la naissance est requis !';
		return false;
	} else if (valeurPrenom.value.length == 0 && valeurNom.value.length > 0 ) {
		document.getElementById("valider-Prenom-usuel-du-mere").style.display = "block";
		document.getElementById('valider-Prenom-usuel-du-mere').classList.add('warningHeader');
		document.getElementById('valider-Prenom-usuel-du-mere').innerHTML ='Prenom usuel de la mere requis !';
		return false;
	}else{
		document.getElementById("valider-Nom-de-famille-mere-naissance").style.display = "none";
		document.getElementById('valider-Prenom-usuel-du-mere').classList.remove('warningHeader');
		document.getElementById('valider-Prenom-usuel-du-mere').innerHTML = '';
		document.getElementById('valider-Nom-de-famille-mere-naissance').classList.remove('warningHeader');
		document.getElementById('valider-Nom-de-famille-mere-naissance').innerHTML = '';
		return true;
	}
}


function numeroTelephoneDomicileValidation() {
	var valeur = document.getElementById("Numero-telephone-domicile");

	if(!validerFormatTelephone(value.value)) {
		document.getElementById("valider-Numero-telephone-domicile").style.display = "block";
		valeur.classList.add('has-error', 'has-feedback');
		document.getElementById('valider-Numero-telephone-domicile').innerHTML = 'Le format est invalide !';
		return false;
	} else {
		document.getElementById("valider-Numero-telephone-domicile").style.display = "none";
		valeur.classList.add('has-success', 'has-feedback');
		document.getElementById('valider-Numero-telephone-domicile').innerHTML = '';
		return true;
	}
}

function numeroCellulaireValidation() {
	var valeur = document.getElementById("Numero-cellulaire");

	if(!validerFormatTelephone(value.value)) {
		document.getElementById("valider-Numero-cellulaire").style.display = "block";
		valeur.classList.add('has-error', 'has-feedback');
		document.getElementById('valider-Numero-cellulaire').innerHTML = 'Le format est invalide !';
		return false;
	} else {
		document.getElementById("valider-Numero-cellulaire").style.display = "none";
		valeur.classList.add('has-success', 'has-feedback');
		document.getElementById('valider-Numero-cellulaire').innerHTML = '';
		return true;
	}
}

function numeroTelephoneTravailValidation() {
	var valeur = document.getElementById("Numero-telephone-travail");

	if(!validerFormatTelephone(value.value)) {
		document.getElementById("valider-Numero-telephone-travail").style.display = "block";
		valeur.classList.add('has-error', 'has-feedback');
		document.getElementById('valider-Numero-telephone-travail').innerHTML = 'Le format est invalide !';
		return false;
	} else {
		document.getElementById("valider-Numero-telephone-travail").style.display = "none";
		valeur.classList.add('has-success', 'has-feedback');
		document.getElementById('valider-Numero-telephone-travail').innerHTML = '';
		return true;
	}
}


function courrielValidation() {
	var valeur = document.getElementById("Courriel-personnel"); 

	if(valeur.value == "") {  
		document.getElementById("valider-Courriel-personnel").style.display = "block";
		valeur.classList.add('has-error', 'has-feedback');
		document.getElementById('valider-Courriel-personnel').innerHTML = ' Le corriel est requis !';
		return false; 
	} else if(!validerCourriel(valeur.value)) { 
		document.getElementById("valider-Courriel-personnel").style.display = "block";
		valeur.classList.add('has-warning', 'has-feedback');
		document.getElementById("valider-Courriel-personnel").innerHTML = "Format du courriel est incorrect!"; 
		return false; 
	} else { 
		document.getElementById("valider-Courriel-personnel").style.display = "none"; 
		valeur.classList.add('has-success', 'has-feedback'); 
		document.getElementById('valider-Courriel-personnel').innerHTML = '';
		return true; 
	}
}


function NoCivicNomDirectionValidation(){

	var valeur = document.getElementById("Numéro-civique-Type-et-nom-de-la-rue-Direction-de-rue"); 

	if(valeur.value == "") {  
		document.getElementById("valider-Numéro-civique-Type-et-nom-de-la-rue-Direction-de-rue").style.display = "block";
		valeur.classList.add('has-error', 'has-feedback');
		document.getElementById('valider-Numéro-civique-Type-et-nom-de-la-rue-Direction-de-rue').innerHTML = 'Ce champs est requis !';
		return false; 
	} else { 
		document.getElementById("valider-Numéro-civique-Type-et-nom-de-la-rue-Direction-de-rue").style.display = "none"; 
		valeur.classList.add('has-success', 'has-feedback');
		document.getElementById('valider-Numéro-civique-Type-et-nom-de-la-rue-Direction-de-rue').innerHTML = '';
		return true; 
	}
}



function numeroApartementValidation() {
	var valeur = document.getElementById("Numero-apartement"); 

	if(valeur.value == "") {  
		document.getElementById("valider-Numero-apartement").style.display = "block";
		valeur.classList.add('has-error', 'has-feedback');
		document.getElementById('valider-Numero-apartement').innerHTML = 'Ce champs est requis !';
		return false; 
	} else if(!validerChaineSeulementNombre(value.value)) { 
		valeur.classList.add('has-warning', 'has-feedback'); 
		document.getElementById('valider-Numero-apartement').innerHTML = 'Ce champs doit etre comprose de nombre seulement !';
		return false; 
	} else {  
		document.getElementById("valider-Numero-apartement").style.display = "none"; 
		valeur.classList.add('has-success', 'has-feedback');
		document.getElementById('valider-Numero-apartement').innerHTML = '';
		return true; 
	}
}


function municipalitéPaysValidation(){

	var valeur = document.getElementById("Municipalité-Pays"); 

	if(valeur.value == "") {  
		document.getElementById("valider-Municipalité-Pays").style.display = "block";
		valeur.classList.add('has-error', 'has-feedback');
		document.getElementById('valider-Municipalité-Pays').innerHTML = 'Ce champs est requis !';
		return false; 
	} else { 
		document.getElementById("valider-Municipalité-Pays").style.display = "none"; 
		valeur.classList.add('has-success', 'has-feedback');
		document.getElementById('valider-Municipalité-Pays').innerHTML = '';
		return true; 
	}
}


function codePostalValidation() {
	var valeur = document.getElementById("Code-postal"); 

	if(valeur.value == "") {  
		document.getElementById("valider-Code-postal").style.display = "block";
		valeur.classList.add('has-error', 'has-feedback');
		document.getElementById('valider-Code-postal').innerHTML = 'Ce champs est requis !';
		return false; 
	} else if(!validerCodePostal(value.value)) { 
		valeur.classList.add('has-warning', 'has-feedback'); 
		document.getElementById('valider-Code-postal').innerHTML = 'Le format du code postal est invalide!';
		return false; 
	} else {  
		document.getElementById("valider-Code-postal").style.display = "none"; 
		valeur.classList.add('has-success', 'has-feedback');
		document.getElementById('valider-Code-postal').innerHTML = '';
		return true; 
	}
}


/*
-------------------------------------------------------
*/

function NoCivicNomDirectionAutreValidation(){

	var valeur = document.getElementById("Numéro-civique-Type-et-nom-de-la-rue-Direction-de-rue-autre"); 

	if(valeur.value == "") {  
		document.getElementById("valider-Numéro-civique-Type-et-nom-de-la-rue-Direction-de-rue-autre").style.display = "block";
		valeur.classList.add('has-error', 'has-feedback');
		document.getElementById('valider-Numéro-civique-Type-et-nom-de-la-rue-Direction-de-rue-autre').innerHTML = 'Ce champs est requis !';
		return false; 
	} else { 
		document.getElementById("valider-Numéro-civique-Type-et-nom-de-la-rue-Direction-de-rue-autre").style.display = "none"; 
		valeur.classList.add('has-success', 'has-feedback');
		document.getElementById('valider-Numéro-civique-Type-et-nom-de-la-rue-Direction-de-rue-autre').innerHTML = '';
		return true; 
	}
}



function numeroApartementAutreValidation() {
	var valeur = document.getElementById("Numero-apartement-autre"); 

	if(valeur.value == "") {  
		document.getElementById("valider-Numero-apartement-autre").style.display = "block";
		valeur.classList.add('has-error', 'has-feedback');
		document.getElementById('valider-Numero-apartement-autre').innerHTML = 'Ce champs est requis !';
		return false; 
	} else if(!validerChaineSeulementNombre(value.value)) { 
		valeur.classList.add('has-warning', 'has-feedback'); 
		document.getElementById('valider-Numero-apartement-autre').innerHTML = 'Ce champs doit etre comprose de nombre seulement !';
		return false; 
	} else {  
		document.getElementById("valider-Numero-apartement").style.display = "none"; 
		valeur.classList.add('has-success', 'has-feedback');
		document.getElementById('valider-Numero-apartement-autre').innerHTML = '';
		return true; 
	}
}


function municipalitéPaysAutreValidation(){

	var valeur = document.getElementById("Municipalité-Pays"); 

	if(valeur.value == "") {  
		document.getElementById("valider-Municipalité-Pays-Autre").style.display = "block";
		valeur.classList.add('has-error', 'has-feedback');
		document.getElementById('valider-Municipalité-Pays-Autre').innerHTML = 'Ce champs est requis !';
		return false; 
	} else { 
		document.getElementById("valider-Municipalité-Pays-Autre").style.display = "none"; 
		valeur.classList.add('has-success', 'has-feedback');
		document.getElementById('valider-Municipalité-Pays-Autre').innerHTML = '';
		return true; 
	}
}


function codePostalAutreValidation() {
	var valeur = document.getElementById("Code-postal-autre"); 

	if(valeur.value == "") {  
		document.getElementById("valider-Code-postal-autre").style.display = "block";
		valeur.classList.add('has-error', 'has-feedback');
		document.getElementById('valider-Code-postal-autre').innerHTML = 'Ce champs est requis !';
		return false; 
	} else if(!validerCodePostal(value.value)) { 
		valeur.classList.add('has-warning', 'has-feedback'); 
		document.getElementById('valider-Code-postal-autre').innerHTML = 'Le format du code postal est invalide!';
		return false; 
	} else {  
		document.getElementById("valider-Code-postal-autre").style.display = "none"; 
		valeur.classList.add('has-success', 'has-feedback');
		document.getElementById('valider-Code-postal-autre').innerHTML = '';
		return true; 
	}
}



function autreLangueUsageValidation() {
	var valeur = document.getElementById("langue-usage-autre"); 

	if(valeur.value == "") {  
		document.getElementById("valider-langue-usage-autre").style.display = "block";
		valeur.classList.add('has-error', 'has-feedback'); 
		document.getElementById('valider-langue-usage-autre').innerHTML = ' Le champs est requis !';
		return false; 
	} else { 
		document.getElementById("valider-langue-usage-autre").style.display = "none"; 
		valeur.classList.add('has-success', 'has-feedback'); 
		document.getElementById('valider-langue-usage-autre').innerHTML = '';
		return true; 
	}
}


function autreLangueMaternelleValidation() {
	var valeur = document.getElementById("langue-maternelle-autre"); 

	if(valeur.value == "") {  
		document.getElementById("valider-langue-maternelle-autre").style.display = "block";
		valeur.classList.add('has-error', 'has-feedback'); 
		document.getElementById('valider-langue-maternelle-autre').innerHTML = 'Le champs est requis !';
		return false; 
	} else { 
		document.getElementById("valider-langue-maternelle-autre").style.display = "none"; 
		valeur.classList.add('has-success', 'has-feedback'); 
		document.getElementById('valider-langue-maternelle-autre').innerHTML = '';
		return true; 
	}
}



/*
-------------------------------------------------------
*/

function verifierSexe(){
	var valeur = document.querySelector('input[name = "radio-sexe"]:checked');

	if(valeur != null){
		return true;
	} else {
		return false; 
	}	
}

function verifierCitoyennete(){
	var valeur = document.querySelector('input[name = "radio-citoyennete"]:checked');
	if(valeur != null){
		return true;
	} else {
		return false; 
	}	
}


function verifierStatutCanada(){
	var valeur = document.querySelector('input[name = "radio-statut-canada"]:checked');
	if(valeur != null){
		return true;
	} else {
		return false; 
	}	
}

function verifierLangueUsage(){
	var valeur = document.querySelector('input[name = "radio-langue-usage"]:checked');
	if(valeur != null){
		if (valeur.value == "AutreLangueUsage") {
			if(!autreLangueUsageValidation())
				return false
			return true
		}
		return true;
	} else {
		return false; 
	}	
}

function verifierLangueMaternelle(){
	var valeur = document.querySelector('input[name = "radio-langue-maternelle"]:checked');
	if(valeur != null){
		if (valeur.value == "AutreLangueMaternelle") {
			if(!autreLangueMaternelleValidation())
				return false
			return true
		}
		return true;
	} else {
		return false; 
	}	
}

/*
	Fonction de validations de formatage
*/

/* validerDateNaissance(dateNaissance) retourne vrai si la date correspond au format
 * JJ-MM-AAAA
 * Exemple : 22-06-1992 -> true , 22-6-1992 -> false
 * Note: AAAA ne doit pas etre supperieur a 1999
 * 			 les formats 02 ou 2 sont valide
*/
function validerDateNaissance(dateNaissance) {
	var pattern = /^(0[1-9]|[12][0-9]|3[01])[-](0[1-9]|1[012])[-]19\d\d$/;
	return pattern.test(dateNaissance);
}

function validerCourriel(courriel) {
	var pattern = /^[a-zA-Z0-9._-]+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$/;
	return pattern.test(courriel);
}

/* validerCodePermanent(codePemanent) retourne vrai si le code correspond au format
 * XXXX12345678
 * Exemple : LABJ24049500 -> true , LaBJ24049500 -> false
 * Note: majuscule seulement
*/
function validerCodePermanent(codePemanent) {
	var pattern = /^[A-Z]{4}\d{8}$/;
	return pattern.test(codePemanent);
}


function validerCodePostal(codePostal) { 
	var pattern = /^[A-Z]\d[A-Z][" "]\d[A-Z]\d$/; 
	return pattern.test(codePostal); 
}



/* validerNumeroAssurranceSociale(numero) retourne vrai si le numero correspond au format
 * 999999999
 * Exemple : 123456789 -> true , 123 456789  -> false
*/
function validerNumeroAssurranceSociale(numero)
{
	var pattern = /^\d{9}$/;
	return pattern.test(numero);
}

/* validerFormatTelephone(numeroTelephone) retourne vrai si le numero correspond au format
 * 999-999-999
 * Exemple : 123-456-789 -> true , 123 456-789  -> false
*/
function validerFormatTelephone(numeroTelephone)
{
	var pattern = /^\d{3}-\d{3}-\d{3}$/;
	return pattern.test(numeroTelephone);
}

function validerChaineSeulementNombre(nombre){
	var pattern = /^[0-9]*$/;
	return pattern.test(nombre);
}


/*
	=========================== PROGRAMMES DEMANDÉS ========================
*/


function verifierTrimestre(){
	var valeur = document.querySelector('input[name = "radio-trimestre"]:checked');
	if(valeur != null){
		return true;
	} else {
		document.getElementById("valider-trimestre").style.display = "block";
		valeur.classList.add('has-error', 'has-feedback'); 
		document.getElementById('valider-trimestre').innerHTML = 'Le champs est requis !';
		return false; 
	}	
}


function trimestreAnneeValidation() {
	var valeur = document.getElementById("trimestre-annee"); 

	if(valeur.value == "") {  
		document.getElementById("valider-trimestre-annee").style.display = "block";
		valeur.classList.add('has-error', 'has-feedback'); 
		document.getElementById('valider-trimestre-annee').innerHTML = 'Le champs est requis !';
		return false; 
	} else if(!validerAnnee(valeur.value)) { 
		document.getElementById('valider-trimestre-annee').style.display = "block";
		valeur.classList.add('has-warning', 'has-feedback'); 
		document.getElementById('valider-trimestre-annee').innerHTML = 'Le format est invalide !';
		return false; 
	} else { 
		document.getElementById("valider-trimestre-annee").style.display = "none"; 
		valeur.classList.add('has-success', 'has-feedback'); 
		document.getElementById('valider-trimestre-annee').innerHTML = '';
		return true; 
	}
}


function premierChoixValidation() {
	var progChoixTitre = document.getElementById("premier-choix-titre"); 
	var progChoixTemp  = document.querySelector('input[name = "radio-temp-1"]:checked');
	var progChoixCode  = document.getElementById("premier-choix-code"); 
	var progChoixType  = document.querySelector('input[name = "radio-type-programme-1"]:checked');

	if(progChoixTitre.value == "") {  
		document.getElementById("valider-programme-choix-1").style.display = "block";
		document.getElementById('valider-programme-choix-1').innerHTML = 'Les champs du premier choix sont tous requis!';
		return false; 
	} else if(progChoixCode.value == "" ) { 
		document.getElementById("valider-programme-choix-1").style.display = "block";
		document.getElementById('valider-programme-choix-1').innerHTML = 'Les champs du premier choix sont tous requis!';
		return false;
	} else if(progChoixTemp == null ) { 
		document.getElementById("valider-programme-choix-1").style.display = "block";
		document.getElementById('valider-programme-choix-1').innerHTML = 'Les champs du premier choix sont tous requis!';
		return false; 
	} else if(progChoixType == null ) { 
		document.getElementById("valider-programme-choix-1").style.display = "block";
		document.getElementById('valider-programme-choix-1').innerHTML = 'Les champs du premier choix sont tous requis!';
		return false; 		 
	} else { 
		document.getElementById("valider-programme-choix-1").style.display = "none"; 
		document.getElementById('valider-programme-choix-1').innerHTML = '';
		return true; 
	}
}


function deuxiemeChoixValidation() {
	var progChoixTitre = document.getElementById("deuxieme-choix-titre"); 
	var progChoixTemp  = document.querySelector('input[name = "radio-temp-2"]:checked');
	var progChoixCode  = document.getElementById("deuxieme-choix-code"); 
	var progChoixType  = document.querySelector('input[name = "radio-type-programme-2"]:checked');

	if(progChoixTitre.value == "") {
		return true; 		
	}else if(progChoixTitre.value.length > 0) { 
		if(progChoixCode.value == "" ) { 
			document.getElementById("valider-programme-choix-2").style.display = "block";
			document.getElementById('valider-programme-choix-2').innerHTML = 'Les champs du deuxieme choix sont tous requis!';
			return false;
		} else if(progChoixTemp == null ) { 
			document.getElementById("valider-programme-choix-2").style.display = "block";
			document.getElementById('valider-programme-choix-2').innerHTML = 'Les champs du deuxieme choix sont tous requis!';
			return false; 
		} else if(progChoixType == null ) { 
			document.getElementById("valider-programme-choix-2").style.display = "block";
			document.getElementById('valider-programme-choix-2').innerHTML = 'Les champs du deuxieme choix sont tous requis!';
			return false; 		 
		} else { 
			document.getElementById("valider-programme-choix-2").style.display = "none"; 
			document.getElementById('valider-programme-choix-2').innerHTML = '';
			return true; 
		}
	}	
}



function troisiemeChoixValidation() {
	var progChoixTitre = document.getElementById("troisieme-choix-titre"); 
	var progChoixTemp  = document.querySelector('input[name = "radio-temp-3"]:checked');
	var progChoixCode  = document.getElementById("troisieme-choix-code"); 
	var progChoixType  = document.querySelector('input[name = "radio-type-programme-3"]:checked');

	if(progChoixTitre.value == "") {
		return true; 		
	}else if(progChoixTitre.value.length > 0) { 
		if(progChoixCode.value == "" ) { 
			document.getElementById("valider-programme-choix-3").style.display = "block";
			document.getElementById('valider-programme-choix-3').innerHTML = 'Les champs du troisieme choix sont tous requis!';
			return false;
		} else if(progChoixTemp == null ) { 
			document.getElementById("valider-programme-choix-3").style.display = "block";
			document.getElementById('valider-programme-choix-3').innerHTML = 'Les champs du troisieme choix sont tous requis!';
			return false; 
		} else if(progChoixType == null ) { 
			document.getElementById("valider-programme-choix-3").style.display = "block";
			document.getElementById('valider-programme-choix-3').innerHTML = 'Les champs du troisieme choix sont tous requis!';
			return false; 		 
		} else { 
			document.getElementById("valider-programme-choix-3").style.display = "none"; 
			document.getElementById('valider-programme-choix-3').innerHTML = '';
			return true; 
		}
	}	
}

/*
	=================================== RENSEIGNEMENTS SUR LES ÉTUDES SECONDAIRES ET COLLÉGIALES =========================
*/


function derniereAnneeSecondaireValidation() {
	var programme = document.getElementById("derniere-annee-secondaire");
	var deAnnnee = document.getElementById("de-annee-derniere-annee-secondaire");
	var aAnnnee = document.getElementById("a-annee-derniere-annee-secondaire"); 	

	if(programme.value == "") {
		return true; 		
	}else if(programme.value.length > 0) { 
		if(deAnnnee.value == "" ) { 
			document.getElementById("valider-derniere-annee-secondaire").style.display = "block";
			document.getElementById('valider-derniere-annee-secondaire').innerHTML = 'Les champs sont tous requis!';
			return false;
		} else if(aAnnnee.value == "" ) { 
			document.getElementById("valider-derniere-annee-secondaire").style.display = "block";
			document.getElementById('valider-derniere-annee-secondaire').innerHTML = 'Les champs sont tous requis!';
			return false; 
		}else if ( !validerAnnee(deAnnnee.value)) {
			document.getElementById("valider-derniere-annee-secondaire").style.display = "block";
			document.getElementById('valider-derniere-annee-secondaire').innerHTML = 'Le format (de)(Annee) est invalide!';
			return false; 				 
		}else if ( !validerAnnee(aAnnnee.value)) {
			document.getElementById("valider-derniere-annee-secondaire").style.display = "block";
			document.getElementById('valider-derniere-annee-secondaire').innerHTML = 'Le format (a)(Annee) est invalide!';
			return false;
		}else if ( !verifierDateCorrecte(deAnnnee.value,aAnnnee.value)) {
			document.getElementById("valider-derniere-annee-secondaire").style.display = "block";
			document.getElementById('valider-derniere-annee-secondaire').innerHTML = 'Annee de debut supperieur a annee de fin!';
			return false;
		} else { 
			document.getElementById("valider-derniere-annee-secondaire").style.display = "none"; 
			document.getElementById('valider-derniere-annee-secondaire').innerHTML = '';
			return true; 
		}
	}	
}




/*
	Fonction de validations de formatage
*/

function validerAnnee(annee){
	console.log(annee);

	var pattern = /^(19|20)\d\d$/;
	
	console.log(pattern.test(annee));

	return pattern.test(annee);
}


function verifierDateCorrecte(annee1, annee2){
	var diffrence = annee2 - annee1;

	console.log(diffrence);

	if (diffrence >= 0) {
		return true;
	}	
	return false;
}


function validerMois(mois){
	var pattern = /^(0[1-9]|1[012])$/;
	return pattern.test(mois);
}