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

<body class="filigrane mx-0">
<div class="container-fluid">
    <div class="filtre"></div>
    <header> <?php include 'header.php'; ?> 
    </header>

    <main>
        <h1 class="majuscule">SUIVI ETUDIANT</h1>

        <div class="fiche">
            <div class="gauche">
            <div class="border_gauche">

                <div class="bandeau">
                    <label class="majuscule" for="id">NUMERO ETUDIANT:</label>
                    <input type="text" name="id" id="id" placeholder="123 456" > 
                    
                    <label class="labdate majuscule" for="start">Date:</label>
                    <input class="date" type="date" id="start" name="trip-start" value="______/__/__" min="2018-01-01" max="2050-12-31" />


                </div>

                <form class="formulaire" action=""> 
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
                                <div class="bandeau_titre"></div>
                                <div class="card-text">
                                <h5 class="card-title moyenne majuscule ooh">Note</h5>

                                <form class="text_note">
                                   
                                    <label for="moyenne">Moyenne générale :</label>
                                    <input type="number" id="moyenne" name="moyenne">
 
                                    <label for="absences">Nombre d'absences :</label>
                                    <input type="number" id="absences" name="absences">
                                    
                                </form>

                                </div>
                            </div>
                            </div>

                        <div class="col">
                            <div class="card text-center">
                            <div class="bandeau_titre"></div>
                            <div class="card-body">
                                <h5 class=" card-title moyenne majuscule">Accompagnenement equipe</h5>
                                
                                <div class="rectcontainer " id="rectContainer"></div>
                                <div id="output">0</div>

                            </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card text-center">
                            <div class="bandeau_titre"></div>
                            <div class="card-body">
                                <h5 class=" card-title moyenne majuscule">bien etre pormo/campus</h5>
                                
                                <div class="rectcontainer2" id="rectContainer2"></div>
                                <div id="output2">0</div>

                            </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card text-center">
                            <div class="bandeau_titre"></div>
                            <div class="card-body">
                                <h5 class=" card-title moyenne majuscule">Sentiment de progression</h5>
                                <div class="rectcontainer3" id="rectContainer3"></div>
                                <div id="output3">0</div>
                            </div>
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
                        <input class="input_note" type="text" id="note" name="note" placeholder="--/20">

                        <label class=" majuscule" for="action">action à mener</label>
                        <input type="text" id="action" name="action" placeholder="Les action à mener" ></input>

                        <label class=" majuscule" for="softskills">soft skills:</label>
                        <input type="text" id="softskills" name="softskills" placeholder="Vos soft skills" ></input>

                        <!-- <input class="btn_valider" type="submit" value="VALIDER"> -->

                    </form>
                </div>
                <div class="card_cercle mx-auto">
                    <div class="col">
                    <div class="card text-center">
                    <div class="bandeau_titre"></div>
                    <div class="card-body">
                        <h5 class=" card-title moyenne majuscule">score global</h5>
                        <div class="card-text">
                        <div class="progress-wrapper">
                        <div class="progress-circle  smal thin" data-value="38">
                            <div class="progress-masque">
                                <div class="progress-barre"></div>
                                <div class="progress-sup50"></div>
                            </div>
                        </div>
                        </div>
                        </div>
                        <button class="majuscule" id="updateButton">Actualiser</button>
                    </div>
                    </div>

                    </div>
                </div>


                <div class="separation"></div>


                    <div class="button-group">
                        <button id="resetButton" onclick="location.reload()">Réinitialiser</button>
                        <button id="valider" type="button" class="btn btn-secondary" >Valider</button>                        
                        <button id="graph" onclick="window.location.href='graphique.php'">Graphique</button>
                    </div>
                    <div id="alertMessage" class="alert alert-success mt-3 d-none" role="alert">Votre saisie a bien été validé</div>

                </div>
                
        
            </div>
        </div>



        

    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="progress_circle.js"></script>
    <script src="rectangle.js"></script>
</body>
</div>
</html>