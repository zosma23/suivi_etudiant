const container = document.getElementById('rectContainer');
const output = document.getElementById('output');
const rectangles = [];

for (let i = 1; i <= 20; i++) {
  const rect = document.createElement('div');
  rect.className = 'rectangle';

  rect.dataset.index = i;

  rect.addEventListener('click', () => {
    // Met à jour les rectangles colorés jusqu'à celui-ci
    rectangles.forEach((el, idx) => {
      if (idx < i) {
        el.classList.add('active');
      } else {
        el.classList.remove('active');
      }
    });

    //Affichage de la note
    output.textContent = `${i}`;
  });

  container.appendChild(rect);
  rectangles.push(rect);
}



const container2 = document.getElementById('rectContainer2');
const output2 = document.getElementById('output2');
const rectangles2 = [];

for (let i = 1; i <= 20; i++) {
  const rect2 = document.createElement('div');
  rect2.className = 'rectangle2';

  rect2.dataset.index = i;

  rect2.addEventListener('click', () => {
    // Met à jour les rectangles colorés jusqu'à celui-ci
    rectangles2.forEach((el, idx) => {
      if (idx < i) {
        el.classList.add('active');
      } else {
        el.classList.remove('active');
      }
    });

    //Affichage de la note
    output2.textContent = `${i}`;
  });

  container2.appendChild(rect2);
  rectangles2.push(rect2);
}


const container3 = document.getElementById('rectContainer3');
const output3 = document.getElementById('output3');
const rectangles3 = [];

for (let i = 1; i <= 20; i++) {
  const rect3 = document.createElement('div');
  rect3.className = 'rectangle3';

  rect3.dataset.index = i;

  rect3.addEventListener('click', () => {
    // Met à jour les rectangles colorés jusqu'à celui-ci
    rectangles3.forEach((el, idx) => {
      if (idx < i) {
        el.classList.add('active');
      } else {
        el.classList.remove('active');
      }
    });

    //Affichage de la note
    output3.textContent = `${i}`;
  });

  container3.appendChild(rect3);
  rectangles3.push(rect3);
}



document.addEventListener("DOMContentLoaded", function() {
  // Lorsque le bouton est cliqué
  document.getElementById('validerBtn').addEventListener('click', function() {
    const alert = document.getElementById('successAlert');

    // Afficher l'alerte
    alert.style.display = 'block';

    // Cacher l'alerte après 3 secondes
    setTimeout(function() {
      alert.style.display = 'none';
    }, 3000); // 3000ms = 3 secondes
  });
});
