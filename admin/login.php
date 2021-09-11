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

        <!-- ALERT -->
        <link rel="stylesheet" href="sweetalert2.min.css">

        <!-- OTHERS-LINKS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css" integrity="sha256-46r060N2LrChLLb5zowXQ72/iKKNiw/lAmygmHExk/o=" crossorigin="anonymous" />

    </head>

    <body class="body-login">

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


        <!-- ==========ADMIN-CONNEXION========== -->
        <div class="row" style="justify-content: center;">
            <div class="col-md-4 block-login" align="center">

                <h3 class="title-login-co">
                    Espace Administrateur
                </h3>

                <img class="icon-login" src="../assets/img/icon_admin/img_icon_admin.png" alt="" height="150px" width="150px">

                <form action="admin.php" method="POST">
                    <input class="input-pseudo" type="text" name="pseudo" placeholder="pseudo" required >
                    <br>
                    <input class="input-password" type="password" name="password" placeholder="password" required>
                    <br>
                    <button name="submit" class="input-co">Connexion</button>
                </form>

            </div>
        </div>
        <!-- ==========ADMIN-CONNEXION========== -->


        <!-- ====================LINK==================== -->
        <!-- JS -->
        <script src="../assets/js/script.js" async defer></script>

        <!-- ALERT -->
        <script src="sweetalert2.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <!-- ====================LINK==================== -->

    </body>

</html>