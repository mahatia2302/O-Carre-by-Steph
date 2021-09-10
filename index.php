<?php

    require('database/connexion_bdd.php'); // Database connection
    include('class/classhaircut.php'); // Class

    // Call a class
    $dbhaircut = new dbhaircut();

    // =========================
    // Button management
    // =========================
    if (isset($_POST['btn'])) {

        if ($_POST['btn'] == "Supprimer") {

            $etat = "fermer";
            $id = $_POST['id_hair'];

            $dbhaircut->deleteDbhaircut($id);
        }


        if ($_POST['btn'] == "Modifier") {

            $etat = "ouvrir";
            $id_clique = $_POST['id_hair'];
        }


        if ($_POST['btn'] == "Confirmer") {

            $etat = "fermer";
            $new_nom = $_POST['new_nom'];
            $new_prix = $_POST['new_prix'];
            $id_hair = $_POST['id_hair'];

            $dbhaircut->updateDbhaircut($new_nom, $new_prix, $id_hair);
        }


        if ($_POST['btn'] == "Valider") {

            $etat = "fermer";
            $nom = $_POST['nom'];
            $prix = $_POST['prix'];

            $dbhaircut->createDbhaircut($nom, $prix);
        }
    } else {

        $etat = "fermer";
    }

    // Display my table
    $res_haircut_man = $dbhaircut->getDbhaircut();

?>

<html>

    <head>

        <title>O' Carre by Steph</title>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <!-- BOOTSTRAP-CSS -->
        <link rel="stylesheet" href="assets/css/bootstrap/css/bootstrap.min.css">

        <!-- CSS -->
        <link rel="stylesheet" href="assets/css/style.css">

        <!-- ICON-CSS -->
        <link rel="stylesheet" href="assets/fonts/css/all.css">

        <!-- OTHERS-LINKS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css" integrity="sha256-46r060N2LrChLLb5zowXQ72/iKKNiw/lAmygmHExk/o=" crossorigin="anonymous" />

    </head>

    <body>

        <!-- ==========NAV-BAR========== -->
        <nav>
            
            <div class="logo">
                <a class="link-page" href="index.php">
                    <h1>
                        <img src="assets/img/logo/logo_ciseaux_blanc.png" alt="logo" width="60px" height="60px">
                        O' Carre by Steph
                    </h1>
                </a>
            </div>

            <div class="openMenu"><i class="fa fa-bars"></i></div>

            <ul class="mainMenu">

                <li>
                    <a href="#land-page">
                        Accueil
                    </a>
                </li>
                <li>
                    <a href="#salon-page">
                        Salon
                    </a>
                </li>
                <li>
                    <a href="#services">
                        Services
                    </a>
                </li>
                <li>
                    <a href="#footer">
                        Contact
                    </a>
                </li>

                <div class="closeMenu"><i class="fa fa-times"></i></div>

                <span class="icons">
                    <a href="https://wwwok.com/OCARREBYSTEPH/" targe.facebot="_blank"><i class="fab fa-facebook" id="social-menu"></i></a>
                    <a href="https://www.instagram.com/ocarrebystephtahiti/" target="_blank"><i class="fab fa-instagram" id="social-menu"></i></a>
                </span>

            </ul>

        </nav>
        <!-- ==========NAV-BAR========== -->


        <!-- ==========LANDING-PAGE========== -->
        <div class="row bg-landing-page" id="land-page">

            <div class="col-md-7 bloc-landing">

                <div>
                    <h1 id="title-landing">
                        O' Carre by Steph
                    </h1>

                    <p class="text-landing">
                        Notre salon de coiffure à Tahiti
                    </p>

                    <p class="text-landing">
                        Situé à Papeete, proche de Mamao et du Centre Médical Prince Hinoi. <br>
                        Le salon est l’endroit parfait pour vous sublimer et vous faire <br>
                        chouchouter.
                    </p>
                </div>

            </div>

        </div>
        <!-- ==========LANDING-PAGE========== -->


        <!-- ==========SALON========== -->
        <div id="title-bloc">
            <h2 id="salon-page">
                LE SALON
            </h2>
        </div>

        <div class="row section-salon" id="salon" style="justify-content: center;">

            <div class="col-md-7">
                <img src="assets/img/salon/img_3_salon.jpg" alt="photo d'un modèle" height="100%" width="100%">
            </div>
            <div class="col-md-5" align="center">

                <div class=" bloc-text-salon">
                    
                    <h2 id="title-salon">
                        O' Carre by Steph
                    </h2>

                    <p class="text-position-salon">
                        Salon de coiffure à Papeete
                    </p>

                    <p class="text-salon">
                        C'est avant tout la passion de la coiffure et de la mode ! <br>
                        Une équipe de coiffeurs confirmés vous attend au salon afin <br>
                        de partager avec vous tout son savoir-faire. Attentionnés, <br>
                        passionnés et entièrement à votre écoute, ils prennent en <br>
                        compte toutes vos demandes et attentes, et vous prodiguent <br>
                        de précieux conseils pour vous guider vers les prestations <br>
                        qui vous correspondent.
                    </p>

                    <p class="text-salon">
                        Nous travaillons selon des techniques adaptées à vos envies <br>
                        et besoins et utilisons des produits de qualité, de grandes <br>
                        marques, bio pour ceux qui le souhaitent.
                    </p>

                    <p class="text-salon">
                        Nous représentons, entre autres, les marques Kérastase, <br>
                        Louise XIV, l'Oréal.
                    </p>

                </div>
            </div>

        </div>
        <!-- ==========SALON========== -->


        <!-- ==========HAIRCUT========== -->
        <div id="title-bloc">
            <h2 id="services">
                NOS SERVICES
            </h2>
        </div>

        <div class="row" style="justify-content: center;">

            <div class="col-md-7">

                <h3 class="hom">
                    Homme
                </h3>

                <?php

                    // CONDITIONS \\

                    // if $res_haircut_man contains at least one data
                    // DISPLAY TABLE "haircut_man"
                    if ($res_haircut_man->num_rows > 0) {

                        echo "<table class='table table-dark table-striped'>";

                            foreach ($res_haircut_man as $valeur) { // Loop : For each result 

                                if (($etat == "ouvrir") && ($id_clique == $valeur['id'])) {

                                    echo '<form action="index.php" method="post">';

                                        echo "<input type='hidden' name='id_hair' value=" . $valeur['id'] . ">";

                                        echo "<tr>";

                                            echo "<td>";
                                                echo "<input type='text' name='new_nom'  value='" . $valeur['name'] . "'>";
                                            echo "</td>";

                                            echo "<td>";
                                                echo "<input type='text' name='new_prix'  value='" . $valeur['price'] . "'>";
                                            echo "</td>";

                                        echo "<tr>";

                                    echo '</form>';
                                    
                                } else {

                                    echo "<tr>";

                                        echo "<td>";
                                            echo $valeur['name'];
                                        echo "</td>";

                                        echo "<td>";
                                            echo $valeur['price'];
                                        echo "</td>";

                                    echo "</tr>";

                                }

                            }

                        echo "</table>";

                    } else {

                        echo "Il n'y a aucun résultats";

                    }

                ?>

            </div>
            
        </div>
        <!-- ==========HAIRCUT========== -->


        <!-- ==========MAP========== -->
        <div id="title-bloc">
            <h2 id="footer">
                OU SOMME-NOUS
            </h2>
        </div>

        <div class="row section-horaire" style="justify-content: center;">

            <div class="col-md-4" align="center">

                <div class="box-text-horaire">
                    <h2 class="title-map">
                        Le salon
                    </h2>

                    <p class="text-map">
                        <u>
                            L'équipe de O' Carre by Steph vous accueille:
                        </u>
                    </p>

                    <p class="text-map">
                        > le lundi et le samedi de 9h à 16h <br>
                        > du mardi au jeudi de 9h à 18h <br>
                        > le vendredi de 9h à 20h
                    </p>
                </div>

            </div>

            <div class="col-md-8">

                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3153.23106212718!2d-149.56433699411122!3d-17.536723944638567!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x769a39ee39291a8d%3A0x65035b005fcd262a!2sO&#39;Carr%C3%A9%20by%20Steph!5e0!3m2!1sfr!2sfr!4v1630611632955!5m2!1sfr!2sfr" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy">
                </iframe>

            </div>

        </div>
        <!-- ==========MAP========== -->


        <!-- ==========CONTACT========== -->
        <div class="row section-contact" style="justify-content: center;">
            <div class="col-md-11 border-bottom">

                <div class="row" style="justify-content: center;">

                    <div class="col-md-4 bloc-1-contact" align="center">

                        <h1 class="title-foot">
                            O' Carre by Steph
                        </h1>

                        <div>
                            <div type="button" class="btn">
                                <a href="https://wwwok.com/OCARREBYSTEPH/" target="_blank"><i class="fab fa-facebook" id="social-foot"></i></a>
                                <a href="https://www.instagram.com/ocarrebystephtahiti/" target="_blank"><i class="fab fa-instagram" id="social-foot"></i></a>
                            </div>
                        </div>

                    </div>

                    <div class="col-md-4">

                        <h5 class="title-footer">
                            CONTACT
                        </h5>

                        <p class="text-footer">
                            7 rue Regent, en face du <br>
                            Centre des Métiers des Arts
                        </p>

                        <p class="text-footer">
                            <i class="fas fa-phone-alt" id="icon_cont"></i> 40 57 75 75
                        </p>

                        <p class="text-footer">
                            <a class="mail-link" href="https://mail.google.com/mail/u/0/?fs=1&tf=cm&source=mailto&to=contact@ocarrebysteph.c" target="_blank">
                                contact@ocarrebysteph.com
                            </a>
                        </p>

                    </div>

                    <div class="col-md-4">

                        <h5 class="title-footer">
                            HORAIRE
                        </h5>

                        <p class="text-footer">
                            <u>
                                L'équipe de O' Carre by Steph vous accueille :
                            </u>
                        </p>

                        <p class="text-footer">
                            > le lundi et le samedi de 9h à 16h <br>
                            > du mardi au jeudi de 9h à 18h <br>
                            > le vendredi de 9h à 20h
                        </p>

                    </div>

                </div>

            </div>

            <div class="bloc-copyright" align="center">
                <p class="text-copyright">Copyright @2021 | <a href="./admin/admin.php" class="admin-link">Admin</a> | Designed by MoH</p>
            </div>
        </div>
        <!-- ==========CONTACT========== -->


        <!-- ====================LINK==================== -->
        <!-- BOOTSTRAP-JS -->
        <script src="assets/js/bootstrap/js/bootstrap.min.js" async defer></script>
        <script src="assets/js/bootstrap/js/bootstrap.bundle.min.js" async defer></script>

        <!-- JS -->
        <script src="assets/js/script.js" async defer></script>
        <script src="assets/js/jquery.js" async defer></script>
        <!-- ====================LINK==================== -->

    </body>

</html>