//  fonction de modifications de champs "information utilisateur"
document.addEventListener("DOMContentLoaded", function() {
  const editButton = document.getElementById("editButton");
  const cancelButton = document.getElementById("cancelButton");
  const mailInput = document.getElementById("email");
  const telInput = document.getElementById("tel");
  let originalMailValue = "";
  let originalTelValue = "";
  editButton.addEventListener("click", function() {
      if (editButton.textContent === "Modifier") {
          originalMailValue = mailInput.value;
          originalTelValue = telInput.value;
          mailInput.removeAttribute('disabled');
          telInput.removeAttribute('disabled');
          editButton.textContent = "Enregistrer";
      } else {
          const isValid = validateInputs(); 
          if (isValid) {
              mailInput.disabled = true;
              telInput.disabled = true;
              editButton.textContent = "Modifier";
          }
      }
  });
  cancelButton.addEventListener("click", function() {
      mailInput.value = originalMailValue;
      telInput.value = originalTelValue;
      mailInput.disabled = true;
      telInput.disabled = true;
      editButton.textContent = "Modifier";
      hideError(mailInput);
      hideError(telInput); 
  });
  function validateInputs() {
      let isValid = true;
      const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
      const telPattern = /^\d{10}$/;

      if (!emailPattern.test(mailInput.value)) {
          isValid = false;
          showError(mailInput, "Veuillez entrer une adresse e-mail valide.");
      } else {
          hideError(mailInput);
      }
      if (!telPattern.test(telInput.value)) {
          isValid = false;
          showError(telInput, "Veuillez entrer un numéro de téléphone valide (10 chiffres).");
      } else {
          hideError(telInput);
      }
      return isValid;
  }
  function showError(input, message) {
      const errorSpan = input.nextElementSibling;
      if (errorSpan && errorSpan.classList.contains("error-message")) {
          errorSpan.textContent = message;
          errorSpan.style.display = "block";
      } else {
          const newErrorSpan = document.createElement("span");
          newErrorSpan.textContent = message;
          newErrorSpan.classList.add("error-message");
          input.parentNode.insertBefore(newErrorSpan, input.nextSibling);
      }
  }
  function hideError(input) {
      const errorSpan = input.nextElementSibling;
      if (errorSpan && errorSpan.classList.contains("error-message")) {
          errorSpan.style.display = "none";
      }
  }
});

// fonction de changement de photo de profil
const imgDiv = document.querySelector('.img-user');
const img = document.querySelector('#photo');
const file = document.querySelector('#file');
const uploadbtn = document.querySelector('#btn-upload');


file.addEventListener('change' , function(){
const fichierChoisi = this.files[0];
if(fichierChoisi){
  const lecteur = new FileReader();

  lecteur.addEventListener('load' , function(){
    img.setAttribute('src' , lecteur.result);
  })
lecteur.readAsDataURL(fichierChoisi);
}
})

// fonctions relatives a la désinscription
function openDeletePopup() {
    document.getElementById("unsign-up-btn").style.display = "block";
}
  
function closeDeletePopup() {
    document.getElementById("unsign-up-btn").style.display = "none";
} 



