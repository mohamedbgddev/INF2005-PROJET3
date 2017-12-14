/*
	Fonction de validations Section indentification
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


/*
Fonction de validations de formatage
*/

function validerDateNaissance(dateNaissance) { 
	var pattern = ""; 
	return pattern.test(dateNaissance); 
}

function validerCourriel(courriel) { 
	var pattern = /^[a-zA-Z0-9._-]+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$/; 
	return pattern.test(courriel); 
}

function validerCodePermanent(codePemanent) { 
	var pattern = ""; 
	return pattern.test(codePemanent); 
}

function validerNumeroAssurranceSociale(numero)
{ 
	var pattern = ""; 
	return pattern.test(numero); 
}

function validerFormatTelephone(numeroTelephone)	
{ 
	var pattern = ""; 
	return pattern.test(numeroTelephone); 
}
