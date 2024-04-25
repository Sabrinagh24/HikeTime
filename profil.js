//  de modifications de champs "information utilisateur"
document.addEventListener("DOMContentLoaded", function() {
  const editButton = document.getElementById("editButton");
  const cancelButton = document.getElementById("cancelButton");
  const champs = document.querySelectorAll("#form-conteneur input");
  let originalValues = [];

  editButton.addEventListener("click", function() {
    if (editButton.textContent === "Modifier") {
      originalValues = [];
      champs.forEach(function(champ) {
        originalValues.push(champ.value);
        champ.removeAttribute('disabled');
      });
      editButton.textContent = "Enregistrer";
    } else {
      champs.forEach(function(champ, index) {
        champ.disabled = true;
        originalValues[index] = champ.value; 
      });
      editButton.textContent = "Modifier";
    }
  });

  cancelButton.addEventListener("click", function() {
    champs.forEach(function(champ, index) {
      champ.value = originalValues[index];
      champ.disabled = true;
    });
    editButton.textContent = "Modifier";
  });
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




