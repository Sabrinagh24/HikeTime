function openPopup() {
    document.getElementById("ajouter").style.display = "block";
}
function openDeletePopup() {
    document.getElementById("supprimer").style.display = "block";
}
  
function closeDeletePopup() {
    document.getElementById("supprimer").style.display = "none";
}
  
function deleteItem() {
    // Add your delete item functionality here
    document.getElementById("supprimerok").style.display = "block";
    closeDeletePopup()
}
function deleteItemOk() {
    document.getElementById("supprimerok").style.display = "none";
}
// Function to close the pop-up
function closePopup() {
    document.getElementById("ajouter").style.display = "none";
}
function adjustTextAreaHeight(textarea) {
    textarea.style.height = "auto"; // Réinitialise la hauteur à "auto" pour calculer la nouvelle hauteur en fonction du contenu
    textarea.style.height = textarea.scrollHeight + "px"; // Ajuste la hauteur à la hauteur du contenu
}
