<!DOCTYPE html>
<html lang="fr" >
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fiche Etudiant</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="global.css">
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <header> <?php include 'header.php'; ?> 
    </header>

    <main>
        <h1>SUIVI ETUDIANT</h1>

        <div class="fiche">
            <div class="gauche">

                <div class="bandeau">
                    <label for="id">NUMERO ETUDIANT:</label>
                    <input type="text" name="id" id="id" placeholder="123 456" > 
                    
                    <label class="labdate" for="start">Date:</label>
                    <input class="date" type="date" id="start" name="trip-start" value="______/__/__" min="2018-01-01" max="2050-12-31" />


                </div>

                <form action=""> 
                    <label class="label_nom" for="fname">NOM PRENOM:</label>
                    <input type="text" id="fname" name="firstname" placeholder="Votre NOM et Prénom">

                    <label class="label_promo" for="promo">PROMOTION:</label>
                    <input type="text" id="promo" name="promo" placeholder="Promotion" ></input>

                    <label class="label_campus" for="campus">CAMPUS:</label>
                    <input type="text" id="campus" name="campus" placeholder="Campus" ></input>

                    <!-- <input class="btn_valider" type="submit" value="VALIDER"> -->

                </form>

                <div>
                    <div class="row row-cols-1 row-cols-md-2 g-4">
                        <div class="col">
                            <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
                            </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>


            </div>

            <div class="droite">
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Hic perspiciatis dicta cumque magnam at voluptatum a, vel eaque, suscipit perferendis deserunt odio, itaque officiis? Necessitatibus eum nostrum nemo, et ipsa quisquam ipsum facilis qui quo aperiam quod velit, fuga ab at dicta! Alias quis autem neque blanditiis suscipit quas corrupti?</p>

            </div>

        </div>



            </div>
	    </div>
</div>
    </main>
    


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>