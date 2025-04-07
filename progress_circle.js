function createJauge(elem) {
    if (elem) {
      // clear
      while (elem.firstChild) {
        elem.removeChild(elem.firstChild);
      }
      // création des éléments
      var oMask  = document.createElement('DIV');
      var oBarre = document.createElement('DIV');
      var oSup50 = document.createElement('DIV');
      // affectation des classes
      oMask.className  = 'progress-masque';
      oBarre.className = 'progress-barre';
      oSup50.className = 'progress-sup50';
      // construction de l'arbre
      oMask.appendChild(oBarre);
      oMask.appendChild(oSup50);
      elem.appendChild(oMask);
    }
    return elem;
}

// Initialisation après chargement du DOM
document.addEventListener('DOMContentLoaded', function() {
    var oJauges = document.querySelectorAll('.progress-circle');
    var i, nb = oJauges.length;
    for( i=0; i < nb; i +=1){
      createJauge(oJauges[i]);
    }
});

function initJauge(elem) {
    var oBarre;
    var angle;
    var valeur;
    //
    createJauge( elem);
    oBarre = elem.querySelector('.progress-barre');
    valeur = elem.getAttribute('data-value');
    valeur = valeur ? valeur * 1 : 0;
    elem.setAttribute('data-value', valeur.toFixed(1));
    angle = 360 * valeur / 100;
    if (oBarre) {
      oBarre.style.transform = 'rotate(' + angle + 'deg)';
    }
}


  // Initialisation après chargement du DOM
document.addEventListener('DOMContentLoaded', function () {
    var oJauges = document.querySelectorAll('.progress-circle');
    var i, nb = oJauges.length;
    for (i = 0; i < nb; i += 1) {
      initJauge(oJauges[i]);
    }
});
  


// Récupère l'élément progress-circle
const progressCircle = document.querySelector('.progress-circle');

// Récupère le bouton reset
const resetButton = document.getElementById('resetButton');

// Fonction pour mettre à jour la progression du cercle
function updateProgress() {
  // Récupérer la valeur actuelle du cercle
  let value = parseInt(progressCircle.getAttribute('data-value'));
  
  // Calculer la progression en pourcentage
  let progress = (value / 100) * 360;

  // Mettre à jour la rotation de la barre de progression
  progressCircle.querySelector('.progress-barre').style.transform = `rotate(${progress}deg)`;

  // Si la valeur est plus grande que 50%, afficher la partie supérieure de la barre
  if (value > 50) {
    progressCircle.querySelector('.progress-sup50').style.display = 'block';
  } else {
    progressCircle.querySelector('.progress-sup50').style.display = 'none';
  }

  // Mettre à jour le texte au centre du cercle
  progressCircle.querySelector('span').textContent = value + '%';
}

// Fonction pour réinitialiser la progression
resetButton.addEventListener('click', function() {
  // Remet la valeur data-value à 0 (ou à une autre valeur de départ si tu veux)
  progressCircle.setAttribute('data-value', 0);

  // Réactualise la barre de progression
  updateProgress();
});

// Initialiser la progression au chargement de la page
updateProgress();