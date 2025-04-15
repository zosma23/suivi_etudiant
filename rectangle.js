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
  document.getElementById("valider").addEventListener("click", function() {
      const alertMessage = document.getElementById("alertMessage");

      // Affiche avec fondu
      alertMessage.classList.remove("d-none");
      alertMessage.classList.add("show");

      // Disparaît après 3 secondes
      setTimeout(() => {
          alertMessage.classList.remove("show");

          // Optionnel : cache totalement après la transition
          setTimeout(() => {
              alertMessage.classList.add("d-none");
          }, 500); // attendre la fin du fondu
      }, 3000);
  });
});
