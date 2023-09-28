<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" type="text/css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Caveat&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@100&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
    <link rel="icon" type="image/png" href="logo.png" />
    <title>Portefeuille</title>
</head>

<body>
    <div class="navigation">
        <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light ">
            <a class="navbar-brand" href="#"><img src="logo.png"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#proposInfo"> A propos<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Pour me joindre</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#projet">Projets</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://www.linkedin.com/in/birahim-diouf-5000b3269/?originalSubdomain=ca"><img src="download.png" id="linkedin"></a>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
        </nav>
    </div>


    <section id="container">
        <div class="presentation2">
            <span class="nom"><b>Bonjour, Mon nom est Birahim</b></span>
            <div class="text-primaire">
                Je suis un étudiant en programmation <br>
                a la recherche d'un stage afin de
                Compléter mon diplôme. <br>

            </div>
        </div>
    </section>

    <section class="container2">
        <div class="propos">
            <h2 id="proposInfo">A propos</h2>
            <p>Vous trouverez ici plus d'informations sur moi, mes compétences actuelles, <br>

                et un peu plus sur ma personne.
            </p>
        </div>

        <div class="contenu-apropos">
            <div class="contenu-apropos-principal">
                <h3>Plus sur moi !</h3>
                <div class="contenu-apropos-principal-details">
                    <p class="contenu-apropos-principal-details-para">
                        Voilà, comme mentionne au début de la page. Mon nom est Birahim, étudiant en programmation. Je suis à la fin de mon cursus.
                        Pendant mon cursus, j'ai pu développer des compétences en <strong>développement web</strong> , <strong>d'application mobile</strong> et aussi <strong>d'application de bureau.</strong>
                        Je programme aussi bien en <strong>back-end</strong> comme en <strong>front-end</strong>
                        Mais j'ai plus fait de back-end que de front-end.
                    </p>

                    <!-- <p class="contenu-apropos-principal-details-para">
                        Sinon ce que me definis le plus en tant que personne, c'est ma capacite
                        a m'adapter facilement.
                        Je n'abandonne pas facilement face aux epreuves a cause mon cote tetu lol.
                        Mais j'aime surtout apprendre.

                    </p>
                    <p class="contenu-apropos-principal-details-para">
                        Sinon apart la programmation.J'aime faire du sport (musculation, course),
                        l'habillement, les parfums lol sortir un peu afin d'avoir un certain equilibre de vie.
                        Sinon un peu plus bas vous trouverez quelques projets que j'ai pu realiser avec mes cours<br>

                        N'hesitez surtout pas a me <strong>contacter</strong> si jamais vous voulez plus en savoir sur moi
                        je me ferai un plaisir de vous repondre .

                    </p> -->

                </div>
            </div>
            <div class="contenu-apropos-competences">
                <h3>Mes competences</h3>
                <div class="competences-div">

                    <div class="skills">html</div>
                    <div class="skills">css</div>
                    <div class="skills">javascript</div>
                    <div class="skills">java</div>
                    <div class="skills">php</div>
                    <div class="skills">c#</div>
                    <div class="skills">mysql</div>
                    <div class="skills">kotlin</div>
                    <div class="skills">SQL</div>
                    <div class="skills">responsive design</div>
                </div>


            </div>

        </div>

    </section>

    <section class="container4">

        <h2 id="projet">Projets</h2>
        <div class="contenu-project">
            <div id="hangMan">
                <div>
                    <img src="43980.png">
                    <span class="titreProjetcs">Hang Man</span>
                </div>
                <div>
                    <h5>Description :</h5>
                    <span>
                        Le jeu du pendu consiste à deviner un mot. Le joueur propose une lettre.
                        Si elle fait partie du mot, le programme dit où se trouve cette lettre dans le mot.
                        Si elle ne fait pas partie du mot, on commence à dessiner un pendu.
                    </span>
                    <div id="button"><a href="https://github.com/BaraCode1/Jeux-Pendu"><button class="btn btn-primary">Code sur github</button></a></div>
                </div>

            </div>
            <div id="acme">
                <div>
                    <img src="acme.png" alt="Hang Man">
                    <span class="titreProjetcs">Children Acme Game</span>
                </div>

                <div>
                    <h5>Description :</h5>
                    <span>
                        Pour ce projet. Il fallait créer un site web ou des parents pouvez s'inscrire pour acheter
                        Des jeux en ligne pour leurs enfants.

                    </span>
                    <div id="button2"> <a href="https://github.com/BaraCode1/Children-Acme"><button class="btn btn-primary">Code sur github</button></a></div>
                </div>


            </div>
            <div id="mesCours">
                <div>
                    <img src="mcel.png" alt="">
                    <span class="titreProjetcs">Mes cours en ligne</span>

                </div>
                <div>
                    <h5>Description :</h5>
                    <span>
                        Pour ce projet. Il fallait créer un site web ou des étudiants pouvaient s'inscrire pour choisir
                        Des cours en ligne. S'il n'était pas inscrit, ils pouvaient juste voir la liste des cours.
                        Sinon les professeurs pouvaient aussi se loguer pour ajouter ou de modifier des cours.
                    </span>
                    <div id="button3"><a href="https://github.com/BaraCode1/CoursEnLigne"><button class="btn btn-primary">Code sur github</button></a></div>
                </div>
            </div>
            <div id="astro">
                <div>
                    <img src="astro.jpeg" alt="">
                    <span class="titreProjetcs">Astrologie Orlion</span>
                </div>
                <div>
                    <h5>Description :</h5>
                    <span>
                        C'est un de mes premiers sites web. Il fallait créer pour ce projet un site web
                        qui nous permettait de voir notre horoscope dépendamment de la date choisie et de pouvoir
                        Envoyer un email au medium si on voulait un rendez-vous.
                    </span>
                    <div id="button"><a href="https://github.com/BaraCode1/AstroLogieOrion"><button class="btn btn-primary">Code sur github</button></a></div>
                </div>
            </div>
        </div>


    </section>


    <section class="container3">
        <h2 id="contact">Contact</h2>
        <div class="section">
            <form method="post" action="https://formsubmit.co/bc19b961ff74eaaf3eeca468244fceaa" class="formFlex">
                <!--Honeypot-->
                <input type="text" name="_honey" style="display: none;">
                <!-- Disable Captcha-->
                <input type="hidden" name="_captcha" value="false">
                <div class="contact-form-container">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="prenom" class="label">Prenom</label>
                            <input id="prenom" type="text" class="form-control form-control-lg" name="prenom" placeholder="prenom" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="nom" class="label">Nom</label>
                            <input id="nom" type="text" class="form-control form-control-lg" name="nom" placeholder="nom" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="email" class="label">Email</label>
                            <input id="email" type="text" class="form-control form-control-lg" name="email" placeholder="email" required>
                        </div>
                        <div class="form-group  col-md-6">
                            <label for="telephone" class="label">Telephone</label>
                            <input id="telephone" type="text" class="form-control form-control-lg" name="telephone" placeholder="telephone" required>
                        </div>

                    </div>
                    <div class="form-group">
                        <label for="messsage" class="label">Message</label>
                        <textarea id="message" class="form-control" name="message" rows="10" placeholder="Entrer votre message" required></textarea>
                    </div>
                </div>
                <div>
                    <button type="submit" onclick="clear()" class="btn btn-success btn-lg">Envoyer</button>
                </div>

            </form>

        </div>
    </section>

    <footer class="container5">
        <div class="containerFoot">
            <span id="nomFoot">Birahim Diouf</span>
            <span id="porteFoot">
                Portefeuille projet@2023
            </span>
        </div>

    </footer>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>

</html>