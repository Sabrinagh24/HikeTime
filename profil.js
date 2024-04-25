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

