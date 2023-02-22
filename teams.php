<?php include 'modelcontroller/model.php'; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style/style.css" />
    <link rel="stylesheet" href="style/teams.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;600&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://unpkg.com/boxicons@latest/css/boxicons.min.css"
    />
    <link rel="icon" href="img/angry2022logo.png" />

    <title>ANGRY E-SPORTS</title>
  </head>
  <body>
    <header>
      <a href="index.php" class="logo"
        ><img
          src="/img/angry2022logo.png"
          alt="LOGO"
          style="width: 155px; height: 75px"
      /></a>

      <div class="navbar">
        <li><a href="/index.php">Home</a></li>
        <li><a href="/teams.php" class="active">Teams</a></li>
        <li><a href="/aboutus.php">About Angry</a></li>
      </div>

      <div class="nav-logreg">
        <a href="/login.php"
          ><img src="/img/bxs-user.svg" alt="LOGIN" style="height: 30px"
        /></a>
        <a href="#"
          ><img src="/img/bxs-cart.svg" alt="SHOP" style="height: 30px"
        /></a>
        <div id="menu">
          <a href="#"
            ><img src="/img/bx-menu.svg" alt="MENU" style="height: 30px"
          /></a>
        </div>
      </div>
    </header>
    <main>
      <div id="teams80">
        <h1 style="font-size: 4rem">
          MEET OUR <strong style="color: #ff050d">SQUADS</strong>
        </h1>
        <h5>
          Entertainers, champions, and legends in multiple titles, our squads
          are at the top of their game. <br />Learn more about them below.
        </h5>
        <div id="ekipet">
          <div id="PUBG" class="teamC">
            <h4 class="shfaqu1">RABBIT,TIBU,PAKEEZ,BESARI</h4>
          </div>
          <div id="VALORANT" class="teamC">
            <h4 class="shfaqu2">NORIDE,REZZ,MOONLIGHT,ORGES</h4>
          </div>
          <div id="CSGO" class="teamC">
            <h4 class="shfaqu3">RABBIT,TIBU,PAKEEZ,BESARI</h4>
          </div>
          <div id="DOTA2" class="teamC">
            <h4 class="shfaqu4">RABBIT,TIBU,PAKEEZ,BESARI</h4>
          </div>
        </div>
      </div>
    </main>


    <?php
      include 'includes/kupa.php';
      include 'includes/footer.php';
    ?>
    
    <script src="script/script.js"></script>
  </body>
</html>
