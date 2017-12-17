// form.js 
window.onload = function() { 
	document.formulaire_inscription.onsubmit = function()  { return validerFormulaire(); }
} 



/*
	=========================== PAGE 1 ========================
*/



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

function codePermanentMinistereValidation(){
	var valeur = document.getElementById("Code-permanent-ministere");

	if(valeur.value == "") {
		document.getElementById("valider-Code-permanent-ministere").style.display = "block";
		valeur.classList.add('has-error', 'has-feedback');
		document.getElementById('valider-Code-permanent-ministere').innerHTML = ' Code permanent ministere requis!';
		return false;
	} else if(!validerCodePermanent(valeur.value)) {
		document.getElementById("valider-Code-permanent-ministere").style.display = "block";
		valeur.classList.add('has-warning', 'has-feedback');
		document.getElementById("valider-Code-permanent-ministere").innerHTML = "Code permanent ministere non valide!";
		return false;
	} else {
		document.getElementById("valider-Code-permanent-ministere").style.display = "none";
		valeur.classList.add('has-success', 'has-feedback');
		document.getElementById('valider-Code-permanent-ministere').innerHTML = '';
		return true;
	}
}

function numeroAssurranceSocialeValidation() {
	var valeur = document.getElementById("");

	if(!validerNumeroAssurranceSociale(valeur.value)) {
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

	if(!validerFormatTelephone(valeur.value)) {
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

	if(!validerFormatTelephone(valeur.value)) {
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

	if(!validerFormatTelephone(valeur.value)) {
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
	} else if(!validerChaineSeulementNombre(valeur.value)) {
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
	} else if(!validerCodePostal(valeur.value)) {
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
	} else if(!validerChaineSeulementNombre(valeur.value)) {
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
	} else if(!validerCodePostal(valeur.value)) {
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

function AutreCitoyenneteValidation() {
	var valeur = document.getElementById("Autre-citoyennete");

	if(valeur.value == "") {
		document.getElementById("valider-Autre-citoyennete").style.display = "block";
		valeur.classList.add('has-error', 'has-feedback');
		document.getElementById('valider-Autre-citoyennete').innerHTML = 'Le champs est requis !';
		return false;
	} else {
		document.getElementById("valider-Autre-citoyennete").style.display = "none";
		valeur.classList.add('has-success', 'has-feedback');
		document.getElementById('valider-Autre-citoyennete').innerHTML = '';
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
	=========================== PAGE 2 ========================
*/



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


function diplomeSecColHorsQuebecValidation() {

	var radioEtudeHorsQuebec = document.querySelector('input[name = "radio-diplome-sec-col-hors-quebec"]:checked');
	var diplome 			 = document.getElementById("diplome-sec-col-hors-quebec");
	var descipline 			 = document.getElementById("discipline-specialisation-hors-quebec");
	var institution 		 = document.getElementById("institution-hors-quebec");
	var pays 				 = document.getElementById("pays-hors-quebec");
	var deAnnee 			 = document.getElementById("de-annee-diplome-hors-quebec");
	var aAnnee  			 = document.getElementById("a-annee-diplome-hors-quebec");
	var moisObtention 		 = document.getElementById("mois-obtention-diplome-hors-quebec");
	var anneeObtention 		 = document.getElementById("annee-obtention-diplome-hors-quebec");


	if(diplome.value == "") {
		return true;
	}else if(diplome.value.length > 0) {
		if(descipline.value == "" ) {
			document.getElementById("valider-diplome-hors-quebec").style.display = "block";
			document.getElementById('valider-diplome-hors-quebec').innerHTML = 'Les champs sont tous requis!';
			return false;
		} else if(institution.value == "" ) {
			document.getElementById("valider-diplome-hors-quebec").style.display = "block";
			document.getElementById('valider-diplome-hors-quebec').innerHTML = 'Les champs sont tous requis!';
			return false;
		} else if(pays.value == "" ) {
			document.getElementById("valider-diplome-hors-quebec").style.display = "block";
			document.getElementById('valider-diplome-hors-quebec').innerHTML = 'Les champs sont tous requis!';
			return false;
		} else if(deAnnee.value == "" ) {
			document.getElementById("valider-diplome-hors-quebec").style.display = "block";
			document.getElementById('valider-diplome-hors-quebec').innerHTML = 'Les champs sont tous requis!';
			return false;
		} else if(aAnnee.value == "" ) {
			document.getElementById("valider-diplome-hors-quebec").style.display = "block";
			document.getElementById('valider-diplome-hors-quebec').innerHTML = 'Les champs sont tous requis!';
			return false;
		} else if(moisObtention.value == "" ) {
			document.getElementById("valider-diplome-hors-quebec").style.display = "block";
			document.getElementById('valider-diplome-hors-quebec').innerHTML = 'Les champs sont tous requis!';
			return false;
		} else if(anneeObtention.value == "" ) {
			document.getElementById("valider-diplome-hors-quebec").style.display = "block";
			document.getElementById('valider-diplome-hors-quebec').innerHTML = 'Les champs sont tous requis!';
			return false;
		}else if ( !validerAnnee(deAnnee.value)) {
			document.getElementById("valider-diplome-hors-quebec").style.display = "block";
			document.getElementById('valider-diplome-hors-quebec').innerHTML = 'Le format (de)(Annee) est invalide!';
			return false;
		}else if ( !validerAnnee(aAnnee.value)) {
			document.getElementById("valider-diplome-hors-quebec").style.display = "block";
			document.getElementById('valider-diplome-hors-quebec').innerHTML = 'Le format (a)(Annee) est invalide!';
			return false;
		}else if ( !validerAnnee(anneeObtention.value)) {
			document.getElementById("valider-diplome-hors-quebec").style.display = "block";
			document.getElementById('valider-diplome-hors-quebec').innerHTML = 'Le format (Annee)(Obtention) est invalide!';
			return false;
		}else if ( !validerMois(moisObtention.value)) {
			document.getElementById("valider-diplome-hors-quebec").style.display = "block";
			document.getElementById('valider-diplome-hors-quebec').innerHTML = 'Le format (Mois)(Obtention) est invalide!';
			return false;
		}else if ( !verifierDateCorrecte(deAnnee.value,aAnnee.value)) {
			document.getElementById("valider-diplome-hors-quebec").style.display = "block";
			document.getElementById('valider-diplome-hors-quebec').innerHTML = 'Annee de debut supperieur a annee de fin!';
			return false;
		}else if(radioEtudeHorsQuebec == null ) {
			document.getElementById("valider-diplome-hors-quebec").style.display = "block";
			document.getElementById('valider-diplome-hors-quebec').innerHTML = 'Les champs sont tous requis!';
			return false;
		} else {
			document.getElementById("valider-diplome-hors-quebec").style.display = "none";
			document.getElementById('valider-diplome-hors-quebec').innerHTML = '';
			return true;
		}
	}
}


function diplomeSecColDansQuebecValidation() {

	var radioDECAutre		 = document.querySelector('input[name = "radio-DEC_ou_autre"]:checked');
	var radioDiplomeObtenu   = document.querySelector('input[name = "radio-obtention-diplome-page-2"]:checked');
	var diplome 			 = document.getElementById("diplome-sec-col-dans-quebec");
	var descipline 			 = document.getElementById("discipline-specialisation-dans-quebec");
	var institution 		 = document.getElementById("institution-dans-quebec");
	var deAnnee 			 = document.getElementById("de-annee-diplome-dans-quebec");
	var aAnnee  			 = document.getElementById("a-annee-diplome-dans-quebec");
	var moisObtention 		 = document.getElementById("mois-obtention-diplome-dans-quebec");
	var anneeObtention 		 = document.getElementById("annee-obtention-diplome-dans-quebec");


	if(diplome.value == "") {
		return true;
	}else if(diplome.value.length > 0) {
		if(descipline.value == "" ) {
			document.getElementById("valider-diplome-dans-quebec").style.display = "block";
			document.getElementById('valider-diplome-dans-quebec').innerHTML = 'Les champs sont tous requis!';
			return false;
		} else if(institution.value == "" ) {
			document.getElementById("valider-diplome-dans-quebec").style.display = "block";
			document.getElementById('valider-diplome-dans-quebec').innerHTML = 'Les champs sont tous requis!';
			return false;
		} else if(deAnnee.value == "" ) {
			document.getElementById("valider-diplome-dans-quebec").style.display = "block";
			document.getElementById('valider-diplome-dans-quebec').innerHTML = 'Les champs sont tous requis!';
			return false;
		} else if(aAnnee.value == "" ) {
			document.getElementById("valider-diplome-dans-quebec").style.display = "block";
			document.getElementById('valider-diplome-dans-quebec').innerHTML = 'Les champs sont tous requis!';
			return false;
		} else if(moisObtention.value == "" ) {
			document.getElementById("valider-diplome-dans-quebec").style.display = "block";
			document.getElementById('valider-diplome-dans-quebec').innerHTML = 'Les champs sont tous requis!';
			return false;
		} else if(anneeObtention.value == "" ) {
			document.getElementById("valider-diplome-dans-quebec").style.display = "block";
			document.getElementById('valider-diplome-dans-quebec').innerHTML = 'Les champs sont tous requis!';
			return false;
		}else if ( !validerAnnee(deAnnee.value)) {
			document.getElementById("valider-diplome-dans-quebec").style.display = "block";
			document.getElementById('valider-diplome-dans-quebec').innerHTML = 'Le format (de)(Annee) est invalide!';
			return false;
		}else if ( !validerAnnee(aAnnee.value)) {
			document.getElementById("valider-diplome-dans-quebec").style.display = "block";
			document.getElementById('valider-diplome-dans-quebec').innerHTML = 'Le format (a)(Annee) est invalide!';
			return false;
		}else if ( !validerAnnee(anneeObtention.value)) {
			document.getElementById("valider-diplome-dans-quebec").style.display = "block";
			document.getElementById('valider-diplome-dans-quebec').innerHTML = 'Le format (Annee)(Obtention) est invalide!';
			return false;
		}else if ( !validerMois(moisObtention.value)) {
			document.getElementById("valider-diplome-dans-quebec").style.display = "block";
			document.getElementById('valider-diplome-dans-quebec').innerHTML = 'Le format (Mois)(Obtention) est invalide!';
			return false;
		}else if ( !verifierDateCorrecte(deAnnee.value,aAnnee.value)) {
			document.getElementById("valider-diplome-dans-quebec").style.display = "block";
			document.getElementById('valider-diplome-dans-quebec').innerHTML = 'Annee de debut supperieur a annee de fin!';
			return false;
		}else if(radioDECAutre == null ) {
			document.getElementById("valider-diplome-dans-quebec").style.display = "block";
			document.getElementById('valider-diplome-dans-quebec').innerHTML = 'Les champs sont tous requis!';
			return false;
		}else if(radioDiplomeObtenu == null ) {
			document.getElementById("valider-diplome-dans-quebec").style.display = "block";
			document.getElementById('valider-diplome-dans-quebec').innerHTML = 'Les champs sont tous requis!';
			return false;
		} else {
			document.getElementById("valider-diplome-dans-quebec").style.display = "none";
			document.getElementById('valider-diplome-dans-quebec').innerHTML = '';
			return true;
		}
	}
}


/*
	=========================== PAGE 3 ========================
*/


/*
	=========================== PAGE 3 RENSEIGNEMENTS SUR LES ÉTUDES UNIVERSITAIRES =====================
*/





function diplomeUniversitaire1Validation() {

  var radioDiplome        = document.querySelector('input[name = "radio-diplome-universitaire-1"]:checked');
  var radioDiplomeObtenu  = document.querySelector('input[name = "radio-obtention-diplome-universitaire-1"]:checked');
  var diplome             = document.getElementById("diplome-universitaire-1");
  var descipline          = document.getElementById("discipline-specialisation-universitaire-1");
  var institution         = document.getElementById("institution-universitaire-1");
  var deAnnee             = document.getElementById("de-annee-diplome-universitaire-1");
  var aAnnee              = document.getElementById("a-annee-diplome-universitaire-1");
  var moisObtention       = document.getElementById("mois-obtention-diplome-universitaire-1");
  var anneeObtention      = document.getElementById("annee-obtention-diplome-universitaire-1");
  var nombreCredits       = document.getElementById("nombre-credits-diplome-universitaire-1");


  if(diplome.value == "") {
    return true;
  }else if(diplome.value.length > 0) {
    if(descipline.value == "" ) {
      document.getElementById("valider-diplome-universitaire-1").style.display = "block";
      document.getElementById('valider-diplome-universitaire-1').innerHTML = 'Les champs sont tous requis!';
      return false;
    } else if(institution.value == "" ) {
      document.getElementById("valider-diplome-universitaire-1").style.display = "block";
      document.getElementById('valider-diplome-universitaire-1').innerHTML = 'Les champs sont tous requis!';
      return false;
    } else if(deAnnee.value == "" ) {
      document.getElementById("valider-diplome-universitaire-1").style.display = "block";
      document.getElementById('valider-diplome-universitaire-1').innerHTML = 'Les champs sont tous requis!';
      return false;
    } else if(aAnnee.value == "" ) {
      document.getElementById("valider-diplome-universitaire-1").style.display = "block";
      document.getElementById('valider-diplome-universitaire-1').innerHTML = 'Les champs sont tous requis!';
      return false;
    } else if(moisObtention.value == "" ) {
      document.getElementById("valider-diplome-universitaire-1").style.display = "block";
      document.getElementById('valider-diplome-universitaire-1').innerHTML = 'Les champs sont tous requis!';
      return false;
    } else if(anneeObtention.value == "" ) {
      document.getElementById("valider-diplome-universitaire-1").style.display = "block";
      document.getElementById('valider-diplome-universitaire-1').innerHTML = 'Les champs sont tous requis!';
      return false;
    } else if(nombreCredits.value == "" ) {
      document.getElementById("valider-diplome-universitaire-1").style.display = "block";
      document.getElementById('valider-diplome-universitaire-1').innerHTML = 'Les champs sont tous requis!';
      return false;
    }else if ( !validerAnnee(deAnnee.value)) {
      document.getElementById("valider-diplome-universitaire-1").style.display = "block";
      document.getElementById('valider-diplome-universitaire-1').innerHTML = 'Le format (de)(Annee) est invalide!';
      return false;
    }else if ( !validerAnnee(aAnnee.value)) {
      document.getElementById("valider-diplome-universitaire-1").style.display = "block";
      document.getElementById('valider-diplome-universitaire-1').innerHTML = 'Le format (a)(Annee) est invalide!';
      return false;
    }else if ( !validerAnnee(anneeObtention.value)) {
      document.getElementById("valider-diplome-universitaire-1").style.display = "block";
      document.getElementById('valider-diplome-universitaire-1').innerHTML = 'Le format (Annee)(Obtention) est invalide!';
      return false;
    }else if ( !validerMois(moisObtention.value)) {
      document.getElementById("valider-diplome-universitaire-1").style.display = "block";
      document.getElementById('valider-diplome-universitaire-1').innerHTML = 'Le format (Mois)(Obtention) est invalide!';
      return false;
    }else if ( !verifierDateCorrecte(deAnnee.value,aAnnee.value)) {
      document.getElementById("valider-diplome-universitaire-1").style.display = "block";
      document.getElementById('valider-diplome-universitaire-1').innerHTML = 'Annee de debut supperieur a annee de fin!';
      return false;
    }else if(radioDiplome == null ) {
      document.getElementById("valider-diplome-universitaire-1").style.display = "block";
      document.getElementById('valider-diplome-universitaire-1').innerHTML = 'Les champs sont tous requis!';
      return false;
    }else if(radioDiplomeObtenu == null ) {
      document.getElementById("valider-diplome-universitaire-1").style.display = "block";
      document.getElementById('valider-diplome-universitaire-1').innerHTML = 'Les champs sont tous requis!';
      return false;
    } else {
      document.getElementById("valider-diplome-universitaire-1").style.display = "none";
      document.getElementById('valider-diplome-universitaire-1').innerHTML = '';
      return true;
    }
  }
}




function diplomeUniversitaire2Validation() {

  var radioDiplome        = document.querySelector('input[name = "radio-diplome-universitaire-2"]:checked');
  var radioDiplomeObtenu  = document.querySelector('input[name = "radio-obtention-diplome-universitaire-2"]:checked');
  var diplome             = document.getElementById("diplome-universitaire-2");
  var descipline          = document.getElementById("discipline-specialisation-universitaire-2");
  var institution         = document.getElementById("institution-universitaire-2");
  var deAnnee             = document.getElementById("de-annee-diplome-universitaire-2");
  var aAnnee              = document.getElementById("a-annee-diplome-universitaire-2");
  var moisObtention       = document.getElementById("mois-obtention-diplome-universitaire-2");
  var anneeObtention      = document.getElementById("annee-obtention-diplome-universitaire-2");
  var nombreCredits       = document.getElementById("nombre-credits-diplome-universitaire-2");


  if(diplome.value == "") {
    return true;
  }else if(diplome.value.length > 0) {
    if(descipline.value == "" ) {
      document.getElementById("valider-diplome-universitaire-2").style.display = "block";
      document.getElementById('valider-diplome-universitaire-2').innerHTML = 'Les champs sont tous requis!';
      return false;
    } else if(institution.value == "" ) {
      document.getElementById("valider-diplome-universitaire-2").style.display = "block";
      document.getElementById('valider-diplome-universitaire-2').innerHTML = 'Les champs sont tous requis!';
      return false;
    } else if(deAnnee.value == "" ) {
      document.getElementById("valider-diplome-universitaire-2").style.display = "block";
      document.getElementById('valider-diplome-universitaire-2').innerHTML = 'Les champs sont tous requis!';
      return false;
    } else if(aAnnee.value == "" ) {
      document.getElementById("valider-diplome-universitaire-2").style.display = "block";
      document.getElementById('valider-diplome-universitaire-2').innerHTML = 'Les champs sont tous requis!';
      return false;
    } else if(moisObtention.value == "" ) {
      document.getElementById("valider-diplome-universitaire-2").style.display = "block";
      document.getElementById('valider-diplome-universitaire-2').innerHTML = 'Les champs sont tous requis!';
      return false;
    } else if(anneeObtention.value == "" ) {
      document.getElementById("valider-diplome-universitaire-2").style.display = "block";
      document.getElementById('valider-diplome-universitaire-2').innerHTML = 'Les champs sont tous requis!';
      return false;
    } else if(nombreCredits.value == "" ) {
      document.getElementById("valider-diplome-universitaire-2").style.display = "block";
      document.getElementById('valider-diplome-universitaire-2').innerHTML = 'Les champs sont tous requis!';
      return false;
    }else if ( !validerAnnee(deAnnee.value)) {
      document.getElementById("valider-diplome-universitaire-2").style.display = "block";
      document.getElementById('valider-diplome-universitaire-2').innerHTML = 'Le format (de)(Annee) est invalide!';
      return false;
    }else if ( !validerAnnee(aAnnee.value)) {
      document.getElementById("valider-diplome-universitaire-2").style.display = "block";
      document.getElementById('valider-diplome-universitaire-2').innerHTML = 'Le format (a)(Annee) est invalide!';
      return false;
    }else if ( !validerAnnee(anneeObtention.value)) {
      document.getElementById("valider-diplome-universitaire-2").style.display = "block";
      document.getElementById('valider-diplome-universitaire-2').innerHTML = 'Le format (Annee)(Obtention) est invalide!';
      return false;
    }else if ( !validerMois(moisObtention.value)) {
      document.getElementById("valider-diplome-universitaire-2").style.display = "block";
      document.getElementById('valider-diplome-universitaire-2').innerHTML = 'Le format (Mois)(Obtention) est invalide!';
      return false;
    }else if ( !verifierDateCorrecte(deAnnee.value,aAnnee.value)) {
      document.getElementById("valider-diplome-universitaire-2").style.display = "block";
      document.getElementById('valider-diplome-universitaire-2').innerHTML = 'Annee de debut supperieur a annee de fin!';
      return false;
    }else if(radioDiplome == null ) {
      document.getElementById("valider-diplome-universitaire-2").style.display = "block";
      document.getElementById('valider-diplome-universitaire-2').innerHTML = 'Les champs sont tous requis!';
      return false;
    }else if(radioDiplomeObtenu == null ) {
      document.getElementById("valider-diplome-universitaire-2").style.display = "block";
      document.getElementById('valider-diplome-universitaire-2').innerHTML = 'Les champs sont tous requis!';
      return false;
    } else {
      document.getElementById("valider-diplome-universitaire-2").style.display = "none";
      document.getElementById('valider-diplome-universitaire-2').innerHTML = '';
      return true;
    }
  }
}



function employe1Validation() {

  var radioTypeEmploye  = document.querySelector('input[name = "radio-type-employe-1"]:checked');
  var radioTempsEmploye = document.querySelector('input[name = "radio-temps-employe-1"]:checked');
  var nomDiplome        = document.getElementById("nom-employe-1");
  var fonctionOccupee   = document.getElementById("fonction-occupee-1");
  var moisDebut         = document.getElementById("de-mois-employe-1");
  var anneeDebut        = document.getElementById("de-annee-employe-1");
  var moisFin           = document.getElementById("a-mois-employe-1");
  var anneeFin          = document.getElementById("a-annee-employe-1");


if(nomDiplome.value == "") {
    return true;
  }else if(nomDiplome.value.length > 0) {
    if(fonctionOccupee.value == "" ) {
      document.getElementById("valider-employe-1").style.display = "block";
      document.getElementById('valider-employe-1').innerHTML = 'Les champs sont tous requis!';
      return false;
    } else if(moisDebut.value == "" ) {
      document.getElementById("valider-employe-1").style.display = "block";
      document.getElementById('valider-employe-1').innerHTML = 'Les champs sont tous requis!';
      return false;
    } else if(anneeDebut.value == "" ) {
      document.getElementById("valider-employe-1").style.display = "block";
      document.getElementById('valider-employe-1').innerHTML = 'Les champs sont tous requis!';
      return false;
    } else if(moisFin.value == "" ) {
      document.getElementById("valider-employe-1").style.display = "block";
      document.getElementById('valider-employe-1').innerHTML = 'Les champs sont tous requis!';
      return false;
    } else if(anneeFin.value == "" ) {
      document.getElementById("valider-employe-1").style.display = "block";
      document.getElementById('valider-employe-1').innerHTML = 'Les champs sont tous requis!';
      return false;
    }else if(radioTypeEmploye == null ) {
      document.getElementById("valider-employe-1").style.display = "block";
      document.getElementById('valider-employe-1').innerHTML = 'Les champs sont tous requis!';
      return false;
    }else if(radioTempsEmploye == null ) {
      document.getElementById("valider-employe-1").style.display = "block";
      document.getElementById('valider-employe-1').innerHTML = 'Les champs sont tous requis!';
      return false;
    }else if ( !validerAnnee(anneeDebut.value)) {
      document.getElementById("valider-employe-1").style.display = "block";
      document.getElementById('valider-employe-1').innerHTML = 'Le format (de)(Annee) est invalide!';
      return false;
    }else if ( !validerAnnee(anneeFin.value)) {
      document.getElementById("valider-employe-1").style.display = "block";
      document.getElementById('valider-employe-1').innerHTML = 'Le format (a)(Annee) est invalide!';
      return false;
    }else if ( !validerMois(moisDebut.value)) {
      document.getElementById("valider-employe-1").style.display = "block";
      document.getElementById('valider-employe-1').innerHTML = 'Le format (de)(Mois) est invalide!';
      return false;
    }else if ( !validerMois(moisFin.value)) {
      document.getElementById("valider-employe-1").style.display = "block";
      document.getElementById('valider-employe-1').innerHTML = 'Le format (a)(Mois) est invalide!';
      return false;
    }else if ( !verifierAnneeMoisCorrecte(anneeFin.value,moisFin.value,anneeDebut.value,moisDebut.value)) {
      document.getElementById("valider-employe-1").style.display = "block";
      document.getElementById('valider-employe-1').innerHTML = 'Date de debut est supperieur a date de fin!';
      return false;
    } else {
      document.getElementById("valider-employe-1").style.display = "none";
      document.getElementById('valider-employe-1').innerHTML = '';
      return true;
    }
  }
}


function employe2Validation() {

  var radioTypeEmploye  = document.querySelector('input[name = "radio-type-employe-2"]:checked');
  var radioTempsEmploye = document.querySelector('input[name = "radio-temps-employe-2"]:checked');
  var nomDiplome        = document.getElementById("nom-employe-2");
  var fonctionOccupee   = document.getElementById("fonction-occupee-2");
  var moisDebut         = document.getElementById("de-mois-employe-2");
  var anneeDebut        = document.getElementById("de-annee-employe-2");
  var moisFin           = document.getElementById("a-mois-employe-2");
  var anneeFin          = document.getElementById("a-annee-employe-2");


if(nomDiplome.value == "") {
    return true;
  }else if(nomDiplome.value.length > 0) {
    if(fonctionOccupee.value == "" ) {
      document.getElementById("valider-employe-2").style.display = "block";
      document.getElementById('valider-employe-2').innerHTML = 'Les champs sont tous requis!';
      return false;
    } else if(moisDebut.value == "" ) {
      document.getElementById("valider-employe-2").style.display = "block";
      document.getElementById('valider-employe-2').innerHTML = 'Les champs sont tous requis!';
      return false;
    } else if(anneeDebut.value == "" ) {
      document.getElementById("valider-employe-2").style.display = "block";
      document.getElementById('valider-employe-2').innerHTML = 'Les champs sont tous requis!';
      return false;
    } else if(moisFin.value == "" ) {
      document.getElementById("valider-employe-2").style.display = "block";
      document.getElementById('valider-employe-2').innerHTML = 'Les champs sont tous requis!';
      return false;
    } else if(anneeFin.value == "" ) {
      document.getElementById("valider-employe-2").style.display = "block";
      document.getElementById('valider-employe-2').innerHTML = 'Les champs sont tous requis!';
      return false;
    }else if(radioTypeEmploye == null ) {
      document.getElementById("valider-employe-2").style.display = "block";
      document.getElementById('valider-employe-2').innerHTML = 'Les champs sont tous requis!';
      return false;
    }else if(radioTempsEmploye == null ) {
      document.getElementById("valider-employe-2").style.display = "block";
      document.getElementById('valider-employe-2').innerHTML = 'Les champs sont tous requis!';
      return false;
    }else if ( !validerAnnee(anneeDebut.value)) {
      document.getElementById("valider-employe-2").style.display = "block";
      document.getElementById('valider-employe-2').innerHTML = 'Le format (de)(Annee) est invalide!';
      return false;
    }else if ( !validerAnnee(anneeFin.value)) {
      document.getElementById("valider-employe-2").style.display = "block";
      document.getElementById('valider-employe-2').innerHTML = 'Le format (a)(Annee) est invalide!';
      return false;
    }else if ( !validerMois(moisDebut.value)) {
      document.getElementById("valider-employe-2").style.display = "block";
      document.getElementById('valider-employe-2').innerHTML = 'Le format (de)(Mois) est invalide!';
      return false;
    }else if ( !validerMois(moisFin.value)) {
      document.getElementById("valider-employe-2").style.display = "block";
      document.getElementById('valider-employe-2').innerHTML = 'Le format (a)(Mois) est invalide!';
      return false;
    }else if ( !verifierAnneeMoisCorrecte(anneeFin.value,moisFin.value,anneeDebut.value,moisDebut.value)) {
      document.getElementById("valider-employe-2").style.display = "block";
      document.getElementById('valider-employe-2').innerHTML = 'Dte de debut est supperieur a date de fin!';
      return false;
    } else {
      document.getElementById("valider-employe-2").style.display = "none";
      document.getElementById('valider-employe-2').innerHTML = '';
      return true;
    }
  }
}


function employe3Validation() {

  var radioTypeEmploye  = document.querySelector('input[name = "radio-type-employe-3"]:checked');
  var radioTempsEmploye = document.querySelector('input[name = "radio-temps-employe-3"]:checked');
  var nomDiplome        = document.getElementById("nom-employe-3");
  var fonctionOccupee   = document.getElementById("fonction-occupee-3");
  var moisDebut         = document.getElementById("de-mois-employe-3");
  var anneeDebut        = document.getElementById("de-annee-employe-3");
  var moisFin           = document.getElementById("a-mois-employe-3");
  var anneeFin          = document.getElementById("a-annee-employe-3");


if(nomDiplome.value == "") {
    return true;
  }else if(nomDiplome.value.length > 0) {
    if(fonctionOccupee.value == "" ) {
      document.getElementById("valider-employe-3").style.display = "block";
      document.getElementById('valider-employe-3').innerHTML = 'Les champs sont tous requis!';
      return false;
    } else if(moisDebut.value == "" ) {
      document.getElementById("valider-employe-3").style.display = "block";
      document.getElementById('valider-employe-3').innerHTML = 'Les champs sont tous requis!';
      return false;
    } else if(anneeDebut.value == "" ) {
      document.getElementById("valider-employe-3").style.display = "block";
      document.getElementById('valider-employe-3').innerHTML = 'Les champs sont tous requis!';
      return false;
    } else if(moisFin.value == "" ) {
      document.getElementById("valider-employe-3").style.display = "block";
      document.getElementById('valider-employe-3').innerHTML = 'Les champs sont tous requis!';
      return false;
    } else if(anneeFin.value == "" ) {
      document.getElementById("valider-employe-3").style.display = "block";
      document.getElementById('valider-employe-3').innerHTML = 'Les champs sont tous requis!';
      return false;
    }else if(radioTypeEmploye == null ) {
      document.getElementById("valider-employe-3").style.display = "block";
      document.getElementById('valider-employe-3').innerHTML = 'Les champs sont tous requis!';
      return false;
    }else if(radioTempsEmploye == null ) {
      document.getElementById("valider-employe-3").style.display = "block";
      document.getElementById('valider-employe-3').innerHTML = 'Les champs sont tous requis!';
      return false;
    }else if ( !validerAnnee(anneeDebut.value)) {
      document.getElementById("valider-employe-3").style.display = "block";
      document.getElementById('valider-employe-3').innerHTML = 'Le format (de)(Annee) est invalide!';
      return false;
    }else if ( !validerAnnee(anneeFin.value)) {
      document.getElementById("valider-employe-3").style.display = "block";
      document.getElementById('valider-employe-3').innerHTML = 'Le format (a)(Annee) est invalide!';
      return false;
    }else if ( !validerMois(moisDebut.value)) {
      document.getElementById("valider-employe-3").style.display = "block";
      document.getElementById('valider-employe-3').innerHTML = 'Le format (de)(Mois) est invalide!';
      return false;
    }else if ( !validerMois(moisFin.value)) {
      document.getElementById("valider-employe-3").style.display = "block";
      document.getElementById('valider-employe-3').innerHTML = 'Le format (a)(Mois) est invalide!';
      return false;
    }else if ( !verifierAnneeMoisCorrecte(anneeFin.value,moisFin.value,anneeDebut.value,moisDebut.value)) {
      document.getElementById("valider-employe-3").style.display = "block";
      document.getElementById('valider-employe-3').innerHTML = 'Dte de debut est supperieur a date de fin!';
      return false;
    } else {
      document.getElementById("valider-employe-3").style.display = "none";
      document.getElementById('valider-employe-3').innerHTML = '';
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

	if (diffrence > 0) {
		return true;
	}
	return false;
}

function verifierDateCorrecteAvance(annee1, annee2){
	var diffrence = annee2 - annee1;
	if (diffrence == 0) {
		return true;
	}
	return false;
}


function verifierAnneeMoisCorrecte(anneefin, moisfin, anneedebut, moisdebut){
		
	if (verifierDateCorrecteAvance(anneefin,anneedebut)) {
		if ( (moisfin-moisdebut) > 0) {
			return true;
		}	
	}else{
		return false;
	}
	
}


function validerMois(mois){
	var pattern = /^(0[1-9]|1[012])$/;
	return pattern.test(mois);
}


function validerFormulaire() { 

	

	var valider = true; 
 
	if(!nomFamilleNaissanceValidation()) valider = false;
	if(!dateDeNaissanceValidation()) valider = false;  
	if(!prenomUsuelValidation()) valider = false; 
	if(!codePermanentValidation()) valider = false; 
	if(!codePermanentMinistereValidation()) valider = false; 
	if(!numeroAssurranceSocialeValidation()) valider = false; 
	if(!lieuNaissanceValidation()) valider = false; 
	if(!nomFamillePereNaissance()) valider = false; 
	if(!prenomUsuelPere()) valider = false; 
	if(!nomFamilleMereNaissance()) valider = false; 
	if(!prenomUsuelMere()) valider = false; 
	if(!numeroTelephoneDomicileValidation()) valider = false; 
	if(!numeroCellulaireValidation()) valider = false; 
	if(!numeroTelephoneTravailValidation()) valider = false; 
	if(!courrielValidation()) valider = false; 
	if(!NoCivicNomDirectionValidation()) valider = false; 
	if(!numeroApartementValidation()) valider = false; 
	if(!municipalitéPaysValidation()) valider = false; 
	if(!codePostalValidation()) valider = false; 
	if(!NoCivicNomDirectionAutreValidation()) valider = false; 
	if(!numeroApartementAutreValidation()) valider = false; 
	if(!municipalitéPaysAutreValidation()) valider = false;
	if(!codePostalAutreValidation()) valider = false; 
	if(!autreLangueUsageValidation()) valider = false;  
	if(!autreLangueMaternelleValidation()) valider = false; 
	if(!AutreCitoyenneteValidation()) valider = false; 

	
	console.log("Fonction validation formulaire" + " valeur : " +  valider);

	return valider; 
}
