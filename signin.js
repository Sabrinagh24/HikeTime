

     function verifierChamps() {
  var champsRemplis = true; // Variable pour suivre si tous les champs sont remplis
  var errorMessage = document.getElementById('errorMessage');
  errorMessage.innerHTML = ''; // Réinitialiser le contenu de la div des messages d'erreur

  // Fonction pour vérifier le mot de passe
  function verifierMotDePasse(motDePasse) {
    return motDePasse.length >= 8 && /[A-Z]/.test(motDePasse) && /[a-z]/.test(motDePasse) && /\d/.test(motDePasse);
  }

  // Fonction pour vérifier le numéro de téléphone
  function verifierNumeroTelephone(numeroTelephone) {
    return /^\d+$/.test(numeroTelephone); // Vérifier si le numéro de téléphone est composé uniquement de chiffres
  }

  // Sélectionner tous les champs du formulaire
  var champsFormulaire = document.querySelectorAll('.form-group input, .form-group select');

  // Parcourir tous les champs
  champsFormulaire.forEach(function(champ) {
    // Vérifier si le champ est vide
    if (champ.value.trim() === '') {
      // Champ vide trouvé
      champsRemplis = false; // Modifier la variable pour indiquer qu'un champ est vide
      // Ajouter une bordure rouge au champ
      champ.style.border = '1px solid red';
    } else {
      // Champ non vide, réinitialiser la bordure
      champ.style.border = ''; 
    }

    // Vérifier le mot de passe
    if (champ.id === 'password') {
      if (!verifierMotDePasse(champ.value)) {
        // Mot de passe invalide
        champ.style.border = '1px solid red'; // Ajouter une bordure rouge au champ
        errorMessage.innerHTML += 'Le mot de passe doit avoir au moins 8 caractères et contenir au moins une lettre majuscule, une lettre minuscule et un chiffre.<br>';
        champsRemplis = false; // Modifier la variable pour indiquer qu'un champ est invalide
      }
    }

    // Vérifier le numéro de téléphone
    if (champ.id === 'tel') {
      if (!verifierNumeroTelephone(champ.value)) {
        // Numéro de téléphone invalide
        champ.style.border = '1px solid red'; // Ajouter une bordure rouge au champ
        var telErrorMessage = document.getElementById('telErrorMessage');
        telErrorMessage.innerHTML = 'Le numéro de téléphone doit contenir uniquement des chiffres.<br>'; // Afficher le message d'erreur sous le champ numéro de téléphone
        champsRemplis = false; // Modifier la variable pour indiquer qu'un champ est invalide
      } else {
        var telErrorMessage = document.getElementById('telErrorMessage');
        telErrorMessage.innerHTML = ''; // Réinitialiser le contenu de la div des messages d'erreur
      }
    }
  });

  return champsRemplis; // Renvoyer true si tous les champs sont remplis, sinon false
}

document.getElementById('myForm').addEventListener('submit', function(event) {
  // Empêcher l'envoi du formulaire par défaut
  event.preventDefault();

  // Vérifier les champs avant d'envoyer le formulaire
  var champsValides = verifierChamps();

  // Si tous les champs sont remplis, envoyer le formulaire
  if (champsValides) {
    this.submit(); // Envoyer le formulaire
  } //else {
    // Afficher un message d'erreur ou effectuer d'autres actions
    //alert('Veuillez remplir tous les champs correctement!');
 // }
});

