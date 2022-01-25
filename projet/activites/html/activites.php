<?php
require_once('cardClass.php')
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
        <link rel="stylesheet" href="../css/activites.css">
        <title>Club Impact de Ploeren | Sport de Contact</title>
    </head>

    <body>
        <header>
            <nav class="navbar">
                <a href="#" class="logo"><img src="../../image/club-boxe-logo.jpg"></a>
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
                        <a href="../../index.php">accueil</a>
                    </li>
                    <li class="nav-item">
                        <a href="activites.php">activités</a>
                    </li>
                    <li class="nav-item">
                        <a href="#">actualité</a>
                    </li>
                    <li class="nav-item">
                        <a href="#">photo</a>
                    </li>
                    <li class="nav-item">
                        <a href="../../contact/contact.php">contact</a>
                    </li>
                </ul>
            </nav>
            <div class="divider"></div>
     </header>

     <main>
        <div class="container">
        <h1>Nos activités</h1>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Possimus, fuga eaque.<br>
            Ullam quia, veniam saepe, repellendus eaque nulla ipsa incidunt cupiditate, dolorem modi sit <br>
            mollitia vel hic? Eius porro architecto natus? Voluptatum possimus nostrum
             harum aperiam, quam excepturi provident dolor!</p>
        <section id="cards-activity">
            <?php foreach($cards as $card) : ?>
            <article class="card-activity">
                <div class="style-card">
                    <div class="card-flip-gestion">
                        <div class="card">
                            <img src=<?= $card->returnImage() ?> style="width: 300px; height: 300px;" alt="<?= $card->returnAlt() ?>">
                            <h2><?= $card->returnTitle() ?></h2>
                        </div>
                        <div class="flip-card-back">
                            <p><?= $card->returnContent() ?></p>
                        </div>
                    </div>
                </div>
            </article>
            <?php endforeach; ?>
      </main>

     <div class="divider"></div>
     
     <?php
            require_once('../../footer.php')
        ?>