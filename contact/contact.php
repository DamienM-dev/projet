<?php
require_once('requete.php')
?>

<!DOCTYPE html>
<html>
    <head> 
    <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@100&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="contact.css">
        <title>contact | Venez communiquer ! </title>
    </head>
    <body>
            <header>
                <nav class="navbar">
                    <a href="#" class="logo"><img src="../image/club-boxe-logo.jpg"></a>
                    <h1>Club Impact de Ploeren</h1>
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
                            <a href="../index.php">accueil</a>
                        </li>
                        <li class="nav-item">
                            <a href="../activites/html/activites.php">activités</a>
                        </li>
                        <li class="nav-item">
                            <a href="#">actualité</a>
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

        <main class="contact">
            <div id="block-nouscontacter">
                <address class="nouscontacter">
                    <h1>Nous contacter</h1><br>
                    <div class="little-divider"></div>
                    <p>38 rue du palmier<br>
                        56 301 ploeren</p><br>
                    <a href="tel:+123456789" id="phone"><span>Téléphone</span>: 0123456789</a>
                    <div id="sociauxcontact">
                        <a href="mailto:truc@gmail.com" class="lienCouleur"><i class="fas fa-envelope"></i></a>
                        <a href="#" class="lienCouleur"><i class="fab fa-facebook"></i></a>
                        <a href="#" class="lienCouleur"><i class="fab fa-linkedin" ></i></a>
                    </div>
                </address>

                <div id="formulaire" class="container">
                        <form  action ="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" id="contact-form" role="form">
                            <label  id="titre-formulaire"> Ou contacter via notre formulaire de contact:</label>
                            <p>
                                <label for="name"><span>*</span>Nom : </label><br>
                                <input type="text" class="formulaireBackground" id="name" name="nom" placeholder="Votre nom " value="<?= $nom; ?>" required autofocus>
                            </p>
                            
                            <p>
                                <label for="email"><span>*</span>e-mail : </label><br>
                                <input type="email" class="formulaireBackground" id="email" name="email" placeholder="Votre email" value="<?= $email; ?>" required>
                            </p>
                            <p>
                                <label for="adresse"><span>*</span>adresse : </label><br>
                                <textarea type="text" class="formulaireBackground" id="adresse" name="adresse" placeholder="Votre adresse " required rows="5"><?= $adresse; ?></textarea>
                            </p>
                            <p>
                                <label for="message"><span>*</span>Message : </label><br>
                                <textarea id="message" class="formulaireBackground" name="message" placeholder="Votre message" required rows="5"><?= $message; ?> </textarea>
                            </p>
                            <input type="checkbox" class="formulaireBackground"  id="rgpd" required>
                            <span>*</span>
                            <a href="https://www.cnil.fr/fr/reglement-europeen-protection-donnees" id="rgpd-lien">Régle rgbd sur la protection des données</a>
                            </input>
                            <p id="obligatoire"><span>*</span>Champs obligatoire</p>
                            <p>
                                <button type="submit">Envoyer</button>
                            </p>
                        </form>
                        <div class="hidden">Votre formulaire à bien été envoyé ! :)</div>
                        <div>
                                <button type="button" id="couleur">changer couleur</button>
                        </div>
                </div>
            </div>
            <div id="map">
                <h2>N'hésitez à passer nous voir !</h2>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d9040.985070815497!2d-2.774871477645713!3d47.64749173326875!2m3!1f0!2f0!3f0
                !3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48101c1ee7bc3d91%3A0xa622fa4c9bf9c44c!2sLyc%C3%A9e%20G%C3%A9n%C3%A9ral%20et%20technologique%20Alain%20Rene%20
                Lesage!5e0!3m2!1sfr!2sfr!4v1636899074072!5m2!1sfr!2sfr"
                 width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </main>
        
                 <script src="mode.js"></script>
                 <script src="display.js"></script>
                 <script src="supabase.js"></script>
                 <script src="https://unpkg.com/@supabase/supabase-js"></script>
                 
                 

        <div class="divider"></div>
        <?php
            require_once('../footer.php');
        ?>