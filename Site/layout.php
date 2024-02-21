<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- =================================== BOXICON ======================================== -->
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />

    <!-- =================================== UNICONS ======================================== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" />

    <!-- =================================== SWIPER ======================================== -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />

    <!-- =================================== CSS ======================================== -->
    <link rel="stylesheet" href="<?= $CONTENT_URL; ?>/Css/style_main.css" />

    <title>Document</title>


</head>

<body>
    <!-- =================================== HEADER ======================================== -->
    <header class="header" id="header">
        <div class="sony">
            <ul>
                <li><img src="<?= $CONTENT_URL; ?>/Images/icon/playstation-logotype_W.png" /></li>
                <li><img src="<?= $CONTENT_URL; ?>/Images/icon/nintendo-switch_W.png" /></li>
                <li><img src="<?= $CONTENT_URL; ?>/Images/icon/xbox.png" /></li>
                <li><img src="<?= $CONTENT_URL; ?>/Images/icon/steam.png" /></li>
            </ul>
        </div>
        <nav class="nav container">
            <a href="../Main/index.php" class="nav__logo">
                <h1>FROMSORFWARE</h1>
            </a>
            <div class="nav__menu" id="nav-menu">
                <ul class="nav__list">
                    <li class="nav__item">
                        <a href="../Main/index.php?console" class="nav__link">Consoles</a>
                    </li>

                    <li class="nav__item">
                        <a href="../Main/index.php?services" class="nav__link">Services</a>
                    </li>

                    <li class="nav__item">
                        <a href="../Main/index.php?store" class="nav__link">Store</a>
                    </li>

                    <li class="nav__item">
                        <a href="../Main/index.php?news" class="nav__link">News</a>
                    </li>
                </ul>
            </div>
            <form method="post" action="../Product/list.php">
                <div class="form-input">
                    <input type="search" name="kyw" placeholder="Search..." />
                    <button class="search-btn" type="submit">
                        <i class="bx bx-search"></i>
                    </button>
                </div>
            </form>

            <?php
            require "Main/login_client.php";
            ?>
        </nav>

    </header>
    <!-- =================================== END HEADER ======================================== -->

    <!-- =================================== MAIN ======================================== -->
    <main class="main container">
        <?php include $VIEW_NAME; ?>
    </main>
    <!-- =================================== END MAIN ======================================== -->

    <!-- -------------------------------------------------- -->
    <?php require "Main/footer.php" ?>
    <script>
        // -------------------------- PROFILE BUTTON -----------------------------
        let subMenu = document.getElementById("subMenu");

        function toggleMenu() {
            subMenu.classList.toggle("open-menu");
        }
    </script>
</body>

</html>