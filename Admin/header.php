<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <link rel="stylesheet" href="<?= $CONTENT_URL ?>/Css/style.css" />

</head>

<body>
  <!-- =================================== HEADER ======================================== -->
  <header class="header" id="header">
    <!-- <div class="sony" style="background: black">
        <img
          src="../Images/icon/sony.png"
          width="50"
          style="margin-left: 10px"
        />
      </div> -->
    <nav class="nav container">
      <a href="<?= $ADMIN_URL ?>/Main/index.php" class="nav__logo">
        <img src="<?= $CONTENT_URL ?>/Images/icon/sony_W.png" alt="logo" />
      </a>

      <div class="nav__menu" id="nav-menu">
        <ul class="nav__list">
          <li class="nav__item">
            <a href="<?= $ADMIN_URL ?>/Commodity/" class="nav__link">Commodity</a>
          </li>

          <li class="nav__item">
            <a href="<?= $ADMIN_URL ?>/Product/" class="nav__link">Product</a>
          </li>

          <li class="nav__item">
            <a href="<?= $ADMIN_URL ?>/Client/" class="nav__link">Client</a>
          </li>

          <li class="nav__item">
            <a href="<?= $ADMIN_URL ?>/Comment/" class="nav__link">Comment</a>
          </li>

          <li class="nav__item">
            <a href="<?= $ADMIN_URL ?>/Statistic/" class="nav__link">Statistic</a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- =================================== END HEADER ======================================== -->