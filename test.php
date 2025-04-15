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

<div class="separation"></div>


                    <div class="button-group">
                        <button id="resetButton" onclick="location.reload()">Réinitialiser</button>
                        <button id="valider" type="button" class="btn btn-secondary" >Valider</button>                        
                        <button id="graph" onclick="window.location.href='graphique.php'">Graphique</button>
                    </div>
                    <div id="alertMessage" class="alert alert-success mt-3 d-none" role="alert">Votre saisie a bien été validé</div>

                </div>
 
<!-- <script>
    document.addEventListener("DOMContentLoaded", function() {
        document.getElementById("valider").addEventListener("click", function() {
            const alertMessage = document.getElementById("alertMessage");
            alertMessage.classList.remove("d-none");
        });
    });
</script> -->
<script>
    document.addEventListener("DOMContentLoaded", function() {
        document.getElementById("valider").addEventListener("click", function() {
            const alertMessage = document.getElementById("alertMessage");
            
            // On force l'affichage au cas où une classe ou un style bloque
            alertMessage.classList.remove("d-none");
            alertMessage.style.display = "block";
            alertMessage.style.visibility = "visible";
            alertMessage.style.opacity = 1;
        });
    });
</script>
</body>
</html>