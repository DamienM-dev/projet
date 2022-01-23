<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@100&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/activity-boxe.css">
    <title>Club Impact de Ploeren | Boxe Française</title>
</head>
<body>
    <header>
        <nav class="navbar">
            <a href="../../index.php" class="logo"><img src="../../image/club-boxe-logo.jpg" alt="blason du club"></a>
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

        <main id="boxe-francaise">
            <div class="container">
            <div class="block-haut">
                <h1>Judo</h1>
                <div class="little-divider"></div>
                <figure><img src="../../image/JUDO.jpg" alt="cours de Judo"></figure>
            </div>

            <article class="block-histoire">
                <h2>L'histoire du Judo</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Error, quasi. 
                    Repellendus exercitationem sunt distinctio esse eaque? 
                    Magni error eos fugiat tempore quibusdam atque, sunt at delectus iste.
                     Accusantium distinctio obcaecati architecto modi magni accusamus, repellat
                      qui officiis minus, praesentium placeat nam, atque tempora quas? 
                      Ullam asperiores veritatis, iusto excepturi quam delectus corporis eum
                       repudiandae!
                     Nobis laboriosam natus doloribus? Et, voluptas.</p>
            </article>

            <div class="block-enseignant">
                <h2>Les enseigants</h2>
                <div class="blocks-img-enseignant">
                   <div class="blocks-img-enseignant1">
                        <h3>John Doe</h3>
                        <figure>
                            <img src="../../image/anonyme3.jpg" alt="Photo du professeur ">
                        </figure>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dignissimos 
                            sed est nostrum amet accusantium eligendi dolores enim et dolor eius.</p>
                   </div>
                   <div class="blocks-img-enseignant2">
                    <h3>Jane Doe</h3>
                    <figure>
                        <img src="../../image/professeur-femme.png" alt="Photo du professeur ">
                    </figure>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dignissimos 
                        sed est nostrum amet accusantium eligendi dolores enim et dolor eius.</p>
                    </div>
                </div>
            </div>

            <div class="horaire">
                <h4>Les horaires :</h4>
                <table>
                    <tbody>
                        <tr>
                            <td class="tableau-background">lundi</td>
                            <td class="active">10h-11h</td>
                            <td>11h-12h</td>
                            <td class="active">14h-15h</td>
                            <td>15h-16h</td>
                            <td>16h-17h</td>
                            <td>17h-18h</td>
                        </tr>

                        <tr>
                            <td class="tableau-background">mardi</td>
                            <td>10h-11h</td>
                            <td>11h-12h</td>
                            <td>14h-15h</td>
                            <td>15h-16h</td>
                            <td class="active">16h-17h</td>
                            <td>17h-18h</td>
                        </tr>
                        <tr>
                            <td class="tableau-background">mercredi</td>
                            <td>10h-11h</td>
                            <td>11h-12h</td>
                            <td>14h-15h</td>
                            <td>15h-16h</td>
                            <td>16h-17h</td>
                            <td class="active">17h-18h</td>
                        </tr>
                        <tr>
                            <td class="tableau-background">jeudi</td>
                            <td class="active">10h-11h</td>
                            <td class="active">11h-12h</td>
                            <td>14h-15h</td>
                            <td>15h-16h</td>
                            <td>16h-17h</td>
                            <td>17h-18h</td>
                        </tr>
                        <tr>
                            <td class="tableau-background">vendredi</td>
                            <td  class="active">10h-11h</td>
                            <td>11h-12h</td>
                            <td>14h-15h</td>
                            <td>15h-16h</td>
                            <td>16h-17h</td>
                            <td>17h-18h</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        </main>
        <div class="divider"></div>
        
        <?php
            require_once('../../footer.php')
        ?>