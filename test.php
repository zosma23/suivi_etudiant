<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Test Alerte</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>

  <!-- Bouton Valider -->
  <button type="button" class="btn btn-secondary" id="validerBtn">
    Valider
  </button>

  <!-- Alerte Bootstrap cachée par défaut -->
  <div class="alert alert-success" role="alert" id="successAlert" style="display: none;">
    A simple success alert—check it out!
  </div>

  <!-- Bootstrap JS et Popper.js -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

  <!-- JavaScript pour afficher l'alerte au clic -->
  <script>
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
  </script>

</body>
</html>