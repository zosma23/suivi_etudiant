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
        <h1 class="majuscule">SUIVI ETUDIANT</h1>

        <div class="fiche">
            <div class="gauche">

                <div class="bandeau">
                    <label class="majuscule" for="id">NUMERO ETUDIANT:</label>
                    <input type="text" name="id" id="id" placeholder="123 456" > 
                    
                    <label class="labdate majuscule" for="start">Date:</label>
                    <input class="date" type="date" id="start" name="trip-start" value="______/__/__" min="2018-01-01" max="2050-12-31" />


                </div>

                <form action=""> 
                    <label class="label_nom majuscule" for="fname">NOM PRENOM:</label>
                    <input type="text" id="fname" name="firstname" placeholder="Votre NOM et Prénom">

                    <label class="label_promo majuscule" for="promo">PROMOTION:</label>
                    <input type="text" id="promo" name="promo" placeholder="Promotion" ></input>

                    <label class="label_campus majuscule" for="campus">CAMPUS:</label>
                    <input type="text" id="campus" name="campus" placeholder="Campus" ></input>

                    <!-- <input class="btn_valider" type="submit" value="VALIDER"> -->

                </form>

                <div>
                    <div class="row row-cols-1 row-cols-md-2 g-4">
                        <div class="col">
                            <div class="card text-center carte_note">
                            <div class="card-body card-text">
                                <h5 class="card-title border-success majuscule">Note</h5>
                                <div class="note ">
                                    <p>Moyenne générale :</p>
                                    <input type="number">
                                </div>
                                <div class="note ">
                                    <span>Nombre d'absences :</span>
                                    <input type="number">
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card text-center">
                            <div class="card-body">
                                <h5 class="card-title majuscule">Accompagnenement equipe</h5>
                                
                                    
                                <div class="showcase">
                                    <div class="rating-system1">
                                        <input  class="input_radio" type="radio" name='rate' id="star1" />
                                        <label class="star" for="star1"></label>

                                        <input  class="input_radio" type="radio" name='rate' id="star2" />
                                        <label class="star" for="star2"></label>

                                        <input  class="input_radio" type="radio" name='rate' id="star3" />
                                        <label class="star" for="star3"></label>

                                        <input  class="input_radio" type="radio" name='rate' id="star4" />
                                        <label class="star" for="star4"></label>

                                        <input  class="input_radio" type="radio" name='rate' id="star5" />
                                        <label class="star" for="star5"></label>

                                        <input  class="input_radio" type="radio" name='rate' id="star6" />
                                        <label class="star" for="star6"></label>

                                        <input  class="input_radio" type="radio" name='rate' id="star7" />
                                        <label class="star" for="star7"></label>

                                        <input  class="input_radio" type="radio" name='rate' id="star8" />
                                        <label class="star" for="star8"></label>

                                        <input  class="input_radio" type="radio" name='rate' id="star9" />
                                        <label class="star" for="star9"></label>

                                        <input  class="input_radio" type="radio" name='rate' id="star10" />
                                        <label class="star" for="star10"></label>

                                        <input  class="input_radio" type="radio" name='rate' id="star11" /> 
                                        <label class="star" for="star11"></label>

                                        <input  class="input_radio" type="radio" name='rate' id="star12" />
                                        <label class="star" for="star12"></label>

                                        <input  class="input_radio" type="radio" name='rate' id="star13" />
                                        <label class="star" for="star13"></label>

                                        <input  class="input_radio" type="radio" name='rate' id="star14" />
                                        <label class="star" for="star14"></label>

                                        <input  class="input_radio" type="radio" name='rate' id="star15" />
                                        <label class="star" for="star15"></label>

                                        <input  class="input_radio" type="radio" name='rate' id="star16" />
                                        <label class="star" for="star16"></label>

                                        <input  class="input_radio" type="radio" name='rate' id="star17" />
                                        <label class="star" for="star17"></label>

                                        <input  class="input_radio" type="radio" name='rate' id="star18" />
                                        <label class="star" for="star18"></label>

                                        <input  class="input_radio" type="radio" name='rate' id="star19" />
                                        <label class="star" for="star19"></label>

                                        <input  class="input_radio" type="radio" name='rate' id="star20" />
                                        <label class="star" for="star20"></label>
                                    


                                        
                                    <div class="text"></div>
                                    </div>
                                    
                                    </div>

                            </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card text-center">
                            <div class="card-body">
                                <h5 class="card-title majuscule">Bien être promo/campus</h5>
                                <p class="card-text">idem card Accompagnenement equipe</p>
                            </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card text-center">
                            <div class="card-body">
                                <h5 class="card-title majuscule">Sentiment de progression</h5>
                                <p class="card-text">idem card Accompagnenement equipe</p>
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