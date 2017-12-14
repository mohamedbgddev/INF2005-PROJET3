function nomFamilleNaissanceValidation() {
	var nomfamilleNaissance = document.getElementById("Nom-de-famille-a-la-naissance"); 

	if(nomfamilleNaissance.value == "") {  
		document.getElementById("valider-Nom-de-famille-a-la-naissance").style.display = "block";
		nomfamilleNaissance.parentNode.className = "form-group has-error has-feedback"; 
		document.getElementById('valider-Nom-de-famille-a-la-naissance').innerHTML = 'Nom de famille a la naissance requis !';
		return false; 
	} else { 
		document.getElementById("valider-Nom-de-famille-a-la-naissance").style.display = "none"; 
		nomfamilleNaissance.parentNode.className = "form-group has-success has-feedback";  
		document.getElementById('valider-Nom-de-famille-a-la-naissance').innerHTML = '';
		return true; 
	}
}


function dateDeNaissanceValidation() {
	var valeur = document.getElementById("Date-de-naissance"); 

	if(valeur.value == "") {  
		document.getElementById("valider-Date-de-naissance").style.display = "block";
		valeur.parentNode.className = "form-group has-error has-feedback"; 
		document.getElementById('valider-Date-de-naissance').innerHTML = ' Date de naissance requise !';
		return false; 
	} else { 
		document.getElementById("valider-Date-de-naissance").style.display = "none"; 
		valeur.parentNode.className = "form-group has-success has-feedback";  
		document.getElementById('valider-Date-de-naissance').innerHTML = '';
		return true; 
	}
}


function prenomUsuelValidation(){
	var valeur = document.getElementById("Prenom-usuel"); 

	if(valeur.value == "") {  
		document.getElementById("valider-Prenom-usuel").style.display = "block";
		valeur.parentNode.className = "form-group has-error has-feedback"; 
		document.getElementById('valider-Prenom-usuel').innerHTML = 'Prenom usuel est requis !';
		return false; 
	} else { 
		document.getElementById("valider-Prenom-usuel").style.display = "none"; 
		valeur.parentNode.className = "form-group has-success has-feedback";  
		document.getElementById('valider-Prenom-usuel').innerHTML = '';
		return true; 
	}
}




