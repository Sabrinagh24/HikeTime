/*pop-up*/
function openDeletePopup() {
    document.getElementById("form-res").style.display = "block";
} //mettre dans le button qui ouvre le pop up//
  
function closeDeletePopup() {
    document.getElementById("form-res").style.display = "none";
}
/* slide photo*/
/*let slider = tns({
  container: 'slider',// le conteneur des slides
  items: 1,//Nombre de diapositives affichées dans la fenêtre d'affichage.
  startindex:1,
  mouseDrag: false,//Faire bouger avec la souris
  arrowkeys:false,
  slideBy: 1,//Nombre de diapositives en un seul "clic".
  autoplay: true,//Active/désactive le changement automatique des diapositives.
  autoplayTimeout: 3000,
  loop: true,
  gutter: 15,
  edgePadding: 200,
  fixedwidth:false,//espace entre les diapos
});*/
var slider = tns({
  container: '.slider',
  items: 2,
  slideBy: 'page',
  autoplay: false,
  mouseDrag: false,
  autoplayButtonOutput: true,
  controls: true,
  nav: true,
  prevButton : ".previous",
  nextButton : ".next",
  navPosition : "bottom"
});