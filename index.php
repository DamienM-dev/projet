<!DOCTYPE html>
<html lang="fr">
    <head> 
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@100&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="style.css">
        <title>Club Impact de Ploeren | Sport de Contact</title>
    </head>
    <body>
        <header>

            <nav class="navbar">
                <a href="index.php" class="logo" id="remonter"><img src="image/club-boxe-logo.jpg" alt="blason du club"></a>
                <h1>Club Impact de Ploeren</h1>
                <!-- Futur ajout d'un formulaire search ?-->
                <label for="btn">
                    <svg viewbox="0 0 100 80" width="40" height="40" class="icon">
                        <rect width="100" height="15"></rect>
                        <rect y="35" width="100" height="15"></rect>
                        <rect y="70" width="100" height="15"></rect>
                    </svg>
                </label>
                <input type="checkbox" id="btn">
                <ul class="nav-menu">
                    <li class="nav-item">
                        <a href="index.php">accueil</a>
                    </li>
                    <li class="nav-item">
                        <a href="activites/html/activites.php">activités</a>
                    </li>
                    <li class="nav-item">
                        <a href="#">actualités</a>
                    </li>
                    <li class="nav-item">
                        <a href="#">photo</a>
                    </li>
                    <li class="nav-item">
                        <a href="contact/contact.php">contact</a>
                    </li>
                </ul>
            </nav>
    
            <div class="divider"></div>
    </header>

    <main>
        <div class="container">
            <section id="presentation">

                <div id="photo-header-main">
                    <figure>
                        <img src="image/bandeau-haut.jpg" alt="membres du club">
                    </figure>
                    <h2 id="title-bandeau">votre club spécialisé dans le sport de contact à Ploeren !</h2>
                </div>
                    <h2>Un club unique à Ploeren !</h2>
                <p>Le club impact de Ploeren est situé prêt de la ville de Vannes dans le morbihan.</p><br>
                <p> 6 imp Phare des Cardinaux, 56880 PLOEREN</p><br>
                <p> N'hésitez pas à regarder <a href="#">nos horaires d'ouvertures</a>.</p>
            </section>
            
            <section id="activity">
                <h2>Un large choix d'activités</h2>
                    <div id="flex">
                        <article class="styles-combats">
                            <figure class="photo-combat">
                                <a href="#">
                                    <img src="image/image-boxeur-1.jpg" alt="cours boxe Française">
                                </a>
                            </figure>
                            <h3>Boxe Française</h3>
                            <p> A partir de 10 ans. La Boxe Française est pour…</p>
                        </article>

                        <article class="styles-combats">
                            <figure class="photo-combat">
                                <a href="#">
                                    <img src="image/image-boxeur-2.jpg" alt="cours Savate Baton défense">
                                </a>
                            </figure>
                            <h3>Savate Baton défense</h3>
                            <p> A partir de 15 ans. La SBD s'adresse à ceux qui...</p>
                        </article>

                        <article class="styles-combats">
                            <figure class="photo-combat">
                                <a href="#">
                                    <img src="image/image-boxeur-3.jpg" alt="cours Kick boxing">
                                </a>
                            </figure>
                            <h3>Kick boxing</h3>
                            <p>A partir de 12 ans. Le Kick-boxing...</p>
                        </article>

                        <article class="styles-combats">
                            <figure class="photo-combat"> 
                                <a href="#">
                                    <img src="image/image-boxeur-1.jpg" alt="cours K1">
                                </a>
                            </figure>
                            <h3>K1 Rules</h3>
                            <p>A partir de 18 ans, le K1 est...</p>
                        </article>

                        <article class="styles-combats">
                        <figure class="photo-combat"> 
                            <a href="#">
                                <img src="image/image-boxeur-2.jpg" alt="cours Pancrace">
                            </a>
                        </figure>
                            <h3>Pancrace</h3>
                            <p>A partir de 16 ans. Avant tout il faut...</p>
                        </article>

                        <article class="styles-combats">
                            <figure class="photo-combat">
                                <a href="#">
                                    <img src="image/image-boxeur-3.jpg" alt="cours Jiu Jitsu Brésilien">
                                </a>
                            </figure>
                            <h3>Jiu Jitsu Brésilien</h3>
                            <p>A partir de 14 ans, le JJB est surtout fait pour...</p>
                        </article>

                        <article class="styles-combats">
                            <figure class="photo-combat"> 
                                <a href="#">
                                    <img src="image/image-boxeur-1.jpg" alt="cours grappling">
                                </a>
                            </figure>
                            <h3>Le grappling</h3>
                            <p>A partir de 12 ans, le grappling est un...</p>
                        </article>

                        <article class="styles-combats">
                            <figure class="photo-combat"> 
                                <a href="#">
                                    <img src="image/image-boxeur-2.jpg" alt="cours Judo">
                                </a>
                            </figure>
                            <h3>Judo</h3>
                            <p>A partir de 6 ans, le judo est un...</p>
                        </article>
                    </div>
            </section>

            <section id="actuality">
                <h2>Actualités</h2>
                <article id="news">
                    <figure><img src="image/motivation.jpg" id="actualite" alt="la reprise des entrainements"></figure>
                    <h3>Reprise des cours</h3>
                    <p>Ce lundi c'est la reprise des cours, pensez vous à consulter les nouvelles régles d'hygiéne en vigeur !</p>
                </article>
                    <a href="#remonter"><i class="fas fa-chevron-circle-up"></i></a>
            </section>
            
        </div>
        <div class="divider"></div>
    </main>

  <?php
    require_once ('footer.php');
  ?>