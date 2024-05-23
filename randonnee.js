/*pop-up*/
function openDeletePopup() {
    document.getElementById("form-res").style.display = "block";
} //mettre dans le button qui ouvre le pop up//
  
function closeDeletePopup() {
    document.getElementById("form-res").style.display = "none";
}

//plus details
document.addEventListener('DOMContentLoaded', function() {
  var scrollToDetails = document.getElementById('scrollToDetails');

  scrollToDetails.addEventListener('click', function(event) {
    event.preventDefault();
    
    // Define the amount to scroll
    var scrollAmount = 500;

    // Scroll by the specified amount with smooth behavior
    window.scrollBy({ 
      top: scrollAmount, 
      behavior: 'smooth' 
    });
  });
});

//ajouter randonneurs 
document.addEventListener('DOMContentLoaded', function() {
  var ouiRadio = document.getElementById('oui');
  var nonRadio = document.getElementById('non');
  var inputs = document.querySelectorAll('.ajout-rando input');

  ouiRadio.addEventListener('change', function() {
    if (ouiRadio.checked) {
      inputs.forEach(function(input) {
        input.disabled = false;
      });
    }
  });

  nonRadio.addEventListener('change', function() {
    if (nonRadio.checked) {
      inputs.forEach(function(input) {
        input.disabled = true;
      });
    }
  });
});

//slide
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

// avis
// Sélectionne tous les éléments 'star' de la classe 'rating'
const allStar = document.querySelectorAll('.rating .star')
//Sélectionne l'élément input de la classe 'rating'
const ratingValue = document.querySelector('.rating input')

allStar.forEach((item, idx)=> {
	item.addEventListener('click', function () {
		let click = 0
    //Met à jour la valeur de l'input 'rating' avec l'indice de l'étoile cliquée
		ratingValue.value = idx + 1
    //Réinitialise les étoiles en supprimant la classe 'active' et en remplaçant 'bxs-star' par 'bx-star'
		allStar.forEach(i=> {
			i.classList.replace('bxs-star', 'bx-star')
			i.classList.remove('active')
		})
    //Parcourt toutes les étoiles
		for(let i=0; i<allStar.length; i++) {
      //if l'indice de l'étoile est inférieur ou égal à l'indice de l'étoile cliquée
			if(i <= idx) {
        //Remplace 'bx-star' par 'bxs-star', ajoute la classe 'active' pour les étoiles précédentes ou égales à l'indice cliqué
				allStar[i].classList.replace('bx-star', 'bxs-star')
				allStar[i].classList.add('active')
			} else { //Définit la propriété personnalisée '--i' pour les étoiles suivantes avec la valeur de 'click'
				allStar[i].style.setProperty('--i', click)
				click++
			}
		}
	})
})
