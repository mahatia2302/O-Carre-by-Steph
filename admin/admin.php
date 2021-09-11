
<!DOCTYPE html>

<html>
    <head>

        <title>O'Carre by Steph</title>

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

    <body class="body-admini">

    <?php

        $pseudo = "admin";
        $password = "goodvibes";

        session_start();

            if(isset($_SESSION['pseudo'])){

                // ==========NAV-BAR==========
                echo"<nav>";
                
                    echo"<div class='logo'>";

                        echo"<a class='link-page' href='../index.php'>";
                            echo"<h1>";
                                echo"<img src='../assets/img/logo/logo_ciseaux_blanc.png' alt='logo' width='60px' height='60px'>";
                                echo"O' Carre by Steph";
                            echo"</h1>";
                        echo"</a>";

                    echo"</div>";

                    echo"<div class='openMenu'><i class='fa fa-bars'></i></div>";

                    echo"<ul class='mainMenu'>";

                        echo"<li>";
                            echo"<a href='../#land-page'>";
                                echo"Accueil";
                            echo"</a>";
                        echo"</li>";

                        echo"<li>";
                            echo"<a href='../#salon-page'>";
                                echo"Salon";
                            echo"</a>";
                        echo"</li>";

                        echo"<li>";
                            echo"<a href='../#services'>";
                                echo"Services";
                            echo"</a>";
                        echo"</li>";

                        echo"<li>";
                            echo"<a href='../#footer'>";
                                echo"Contact";
                            echo"</a>";
                        echo"</li>";

                        echo"<div class='closeMenu'><i class='fa fa-times'></i></div>";

                        echo"<span class='icons'>";
                            echo"<a href='https://wwwok.com/OCARREBYSTEPH/' targe.facebot='_blank'><i class='fab fa-facebook' id='social-menu'></i></a>";
                            echo"<a href='https://www.instagram.com/ocarrebystephtahiti/' target='_blank'><i class='fab fa-instagram' id='social-menu'></i></a>";
                        echo"</span>";

                    echo"</ul>";

                echo"</nav>";
                // ==========NAV-BAR==========

                // ==========ADMIN-PAGE==========
                echo"<div class='row' style='justify-content: center;'>";
                    echo"<div class='col-md-4 block-admini' align='center'>";
                
                        echo "<h1 class='title-admini'> Bienvenue " .$_SESSION['pseudo']. "</h1>";
                
                        echo"<img class='icon-admini' src='../assets/img/icon_admin/img_icon_admin.png' alt='icon admin' height='150px' width='150px'>";
                
                        echo"<br>";
                
                        echo "<a class='link-crud-page' href='crud.php'>Accéder au CRUD</a>";
                
                        echo"<br>";

                        echo "<a class='link-disconect' href='logout.php'>Se déconnecter</a>";
                
                    echo"</div>";
                echo"</div>";
                // ==========ADMIN-PAGE==========

                


            }else{

                if($_POST['pseudo'] == $pseudo && $_POST['password'] == $password) {

                    $_SESSION['pseudo'] = $pseudo;

                    echo "<script>location.href='admin.php'</script>";

                }else{

                    echo "<script>alert('Mot De Passe Ou pseudo Incorrect !')</script>";

                    echo "<script>location.href='login.php'</script>";

                }

            }

    ?>
        <img src="" alt="">
        <script src="" async defer></script>
    </body>
</html>