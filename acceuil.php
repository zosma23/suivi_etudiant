<!DOCTYPE html>
<html lang="fr" >
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fiche Etudiant</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="global.css">
</head>
<div class="container-fluid">
<body class="filigrane">
    <div class="filtre"></div>
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
                        <!-- <div class="col">
                            <div class="card text-center carte_note">
                                <div class="bandeau_titre"></div>
                                    <div class="card-text ">
                                        <h5 class=" card-title moyenne majuscule">Note</h5>
                                        <div class=text_note>
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
                        </div> -->
                        <div class="col">
                            <div class="card text-center carte_note">
                                <div class="bandeau_titre"></div>
                                <div class="card-text">
                                <h5 class="card-title moyenne majuscule ooh">Note</h5>

                                <form class="text_note">
                                    <div class="note">
                                    <label for="moyenne">Moyenne générale :</label>
                                    <input type="number" id="moyenne" name="moyenne">
                                    </div>

                                    <div class="note">
                                    <label for="absences">Nombre d'absences :</label>
                                    <input type="number" id="absences" name="absences">
                                    </div>
                                </form>

                                </div>
                            </div>
                            </div>

                        <div class="col">
                            <div class="card text-center">
                            <div class="bandeau_titre"></div>
                            <div class="card-body">
                                <h5 class=" card-title moyenne majuscule">Accompagnenement equipe</h5>
                                
                                    
                                <div class="showcase">
                                    <div class="rating-system1">

                                        <input  class="input_radio" type="radio" name='rate' id="star10" />
                                        <label class="star" for="star10"></label>
                                        <input  class="input_radio" type="radio" name='rate' id="star9" />
                                        <label class="star" for="star9"></label>
                                        <input  class="input_radio" type="radio" name='rate' id="star8" />
                                        <label class="star" for="star8"></label>
                                        <input  class="input_radio" type="radio" name='rate' id="star7" />
                                        <label class="star" for="star7"></label>
                                        <input  class="input_radio" type="radio" name='rate' id="star6" />
                                        <label class="star" for="star6"></label>
                                        <input  class="input_radio" type="radio" name='rate' id="star5" />
                                        <label class="star" for="star5"></label><input  class="input_radio" type="radio" name='rate' id="star4" />
                                        <label class="star" for="star4"></label>
                                        <input  class="input_radio" type="radio" name='rate' id="star3" />
                                        <label class="star" for="star3"></label>
                                        <input  class="input_radio" type="radio" name='rate' id="star2" />
                                        <label class="star" for="star2"></label>
                                        <input  class="input_radio" type="radio" name='rate' id="star1" />
                                        <label class="star" for="star1"></label>


                                        <input  class="input_radio" type="radio" name='rate' id="star20" />
                                        <label class="star" for="star20"></label>

                                        <input  class="input_radio" type="radio" name='rate' id="star19" />
                                        <label class="star" for="star19"></label>

                                        <input  class="input_radio" type="radio" name='rate' id="star18" />
                                        <label class="star" for="star18"></label>
                                        
                                        <input  class="input_radio" type="radio" name='rate' id="star17" />
                                        <label class="star" for="star17"></label>

                                        <input  class="input_radio" type="radio" name='rate' id="star16" />
                                        <label class="star" for="star16"></label>

                                        <input  class="input_radio" type="radio" name='rate' id="star15" />
                                        <label class="star" for="star15"></label>
                                        
                                        <input  class="input_radio" type="radio" name='rate' id="star14" />
                                        <label class="star" for="star14"></label>
                                        
                                        <input  class="input_radio" type="radio" name='rate' id="star13" />
                                        <label class="star" for="star13"></label>
                                        
                                        <input  class="input_radio" type="radio" name='rate' id="star12" />
                                        <label class="star" for="star12"></label>
                                        
                                        <input  class="input_radio" type="radio" name='rate' id="star11" /> 
                                        <label class="star" for="star11"></label>


                                    <div class="text"></div>
                                    </div>
                                    
                                </div>

                            </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card text-center">
                            <div class="bandeau_titre"></div>
                            <div class="card-body">
                                <h5 class=" card-title moyenne majuscule">Bien être promo/campus</h5>
                                <p class="card-text">idem card Accompagnenement equipe</p>
                            </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card text-center">
                            <div class="bandeau_titre"></div>
                            <div class="card-body">
                                <h5 class=" card-title moyenne majuscule">Sentiment de progression</h5>
                                <p class="card-text">idem card Accompagnenement equipe</p>
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>


            </div>

            <div class="droite">
                <div class="border_droite">
                    <form action=""> 
                        <label class="majuscule" for="ressenti">ressenti génerale:</label>
                        <input class="input_ressenti" type="text" id="ressenti" name="ressenti" placeholder="Votre ressenti génerale">
                        <input class="input_note" typ   " id="note" name="note" placeholder="--/20">

                        <label class=" majuscule" for="action">action à mener</label>
                        <input type="text" id="action" name="action" placeholder="Les action à mener" ></input>

                        <label class=" majuscule" for="softskills">soft skills:</label>
                        <input type="text" id="softskills" name="softskills" placeholder="Vos soft skills" ></input>

                        <!-- <input class="btn_valider" type="submit" value="VALIDER"> -->

                    </form>
                </div>
                <div class="card_cercle">
                    <div class="col">
                    <div class="card text-center">
                    <div class="bandeau_titre"></div>
                    <div class="card-body">
                        <h5 class=" card-title moyenne majuscule">score global</h5>
                        <div class="card-text">
                        <div class="progress-wrapper">
                        <div class="progress-circle thin" data-value="38">
                            <div class="progress-masque">
                                <div class="progress-barre"></div>
                                <div class="progress-sup50"></div>
                            </div>
                        </div>
                        </div>
                        </div>
                        <button id="updateButton">Actualiser</button>
                    </div>
                    </div>

                    </div>
                </div>


                <div class="separation"></div>


                    <div class="button-group">
                        <button id="resetButton" onclick="location.reload()">Réinitialiser</button>
                        <button id="valide" type="button" class="btn btn-secondary" id="validerBtn">Valider</button>                        
                        <button id="graph" onclick="window.location.href='graphique.php'">Graphique</button>
                    </div>
                    <div class="alert alert-success" role="alert">A simple success alert—check it out!</div>

                </div>
        
            </div>
        </div>



        

    </main>
    



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="progress_circle.js"></script>
</body>
</div>
</html>