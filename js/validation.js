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