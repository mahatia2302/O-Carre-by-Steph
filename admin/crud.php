<?php

    require('../database/connexion_bdd.php'); // Database connection
    include('../class/classhaircut.php'); // Class

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
        <link rel="stylesheet" href="../assets/css/bootstrap/css/bootstrap.min.css">

        <!-- CSS -->
        <link rel="stylesheet" href="../assets/css/style.css">

        <!-- OTHERS-LINKS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css" integrity="sha256-46r060N2LrChLLb5zowXQ72/iKKNiw/lAmygmHExk/o=" crossorigin="anonymous" />

    </head>

    <body>
        
        <!-- ==========NAV-BAR========== -->
        <nav>
            <div class="logo">
                <a class="link-page" href="../index.php">
                    <h1>
                        <img src="../assets/img/logo/logo_ciseaux_blanc.png" alt="logo" width="60px" height="60px">
                        O' Carre by Steph
                    </h1>
                </a>
            </div>

            <div class="openMenu"><i class="fa fa-bars"></i></div>

            <ul class="mainMenu">

                <li>
                    <a href="../index.php#land-page">
                        Accueil
                    </a>
                </li>
                <li>
                    <a href="../index.php#salon-page">
                        Salon
                    </a>
                </li>
                <li>
                    <a href="../index.php#services">
                        Services
                    </a>
                </li>
                <li>
                    <a href="../index.php#footer">
                        Contact
                    </a>
                </li>

                <div class="closeMenu"><i class="fa fa-times"></i></div>

                <span class="icons">
                    <i class="fab fa-facebook"></i>
                    <i class="fab fa-instagram"></i>
                </span>

            </ul>

        </nav>
        <!-- ==========NAV-BAR========== -->

        
        <!-- ==========HAIRCUT-CRUD-MAN========== -->
        <div>
            <h1>
                
            </h1>
        </div>

        <div class="row" style="justify-content: center;">

            <h3 class="cutman" align="center">
                HOMME
            </h3>

            <div class="col-md-7" align="center">

                <?php

                    // CONDITIONS \\

                    // if $res_haircut_man contains at least one data
                    // DISPLAY TABLE "haircut_man"
                    if ($res_haircut_man->num_rows > 0) {
                    
                        echo "<table class='table table-dark table-striped'>";

                            echo "<th>";
                                echo "Nom";
                            echo "</th>";

                            echo "<th>";
                                echo "Prix";
                            echo "</th>";

                            echo "<th>";
                                echo "Actions";
                            echo "</th>";

                        foreach ($res_haircut_man as $valeur) { // Loop : For each result 

                            if (($etat == "ouvrir") && ($id_clique == $valeur['id'])) {

                                echo '<form action="crud.php" method="post">';

                                    echo "<input type='hidden' name='id_hair' value=" . $valeur['id'] . ">";

                                    echo "<tr>";

                                        echo "<td>";
                                            echo "<input type='text' name='new_nom'  value='" . $valeur['name'] . "'>";
                                        echo "</td>";

                                        echo "<td>";
                                            echo "<input type='text' name='new_prix'  value='" . $valeur['price'] . "'>";
                                        echo "</td>";

                                        echo "<td>";
                                            echo "<input type='submit' name='btn' value='Confirmer'/>";
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

                                    echo "<td>";

                                        echo '<form action="crud.php" method="post">';

                                            echo "<input class='btn-updt' type='submit' name='btn' value='Modifier'/>";
                                            echo "<input type='hidden' name='id_hair' value=" . $valeur['id'] . ">";

                                            echo "<input class='btn-dlt' type='submit' name='btn' value='Supprimer'/>";
                                            echo "<input type='hidden' name='id_hair' value=" . $valeur['id'] . ">";

                                        echo '</form>';

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

            <div class="col-md-3" align="center">
            
                <?php

                    // CREER UNE COUPE
                    echo '<form  method="POST" action="crud.php">';

                        echo '<p class="title-ad">';
                            echo 'Ajouter une coupe :';
                        echo '</p>';

                        echo '<p>';
                            echo '<input type="text" name="nom" placeholder="Nom">';
                        echo '</p>';

                        echo '<p>';
                            echo '<input type="text" name="prix" placeholder="Prix">';
                        echo '</p>';

                        echo '<p>';
                            echo '<input type="submit" name="btn" value="Valider">';
                        echo '</p>';

                    echo '</form>';

                ?>

            </div>

        </div>
        <!-- ==========HAIRCUT-CRUD-MAN========== -->

    </body>

</html>