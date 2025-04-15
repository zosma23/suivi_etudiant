<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suivit Etudiant</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="global.css">
</head>
<div class="container-fluid">
<body class="filigrane">
    <div class="filtre"></div>
    <header>
        <?php include 'header.php'; ?>
    </header>


    <main>
        
    <div class="container">
            <form action="acceuil.php">
                <!-- <label for="id"></label> -->
                <input type="text" name="id" id="id" placeholder="ID Etudiant" > 
                <!-- <button class="btn_loupe"><img src="photo/loupe.png" alt="loupe"></button> -->

                <!-- <label for="fname"></label> -->
                <input  type="text" id="fname" name="firstname" placeholder="Votre NOM et Prénom">

                <!-- <label for="promo"></label> -->
                <input type="text" id="promo" name="promo" placeholder="Promo" ></input>

                <input class="btn_nvlsaisie" type="submit" value="NOUVELLE SAISIE" action="acceuil.php">

                <input class="btn_recap" type="submit" value="VOIR LE RECAPITULATIF" action="recapitulatif.php">
            </form>
        </div> 

    
        <div  >
 
        </div>

    
        
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</div>
</html>