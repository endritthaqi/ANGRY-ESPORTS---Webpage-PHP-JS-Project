<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style/style.css" />
    <link rel="stylesheet" href="style/login.css" />
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
        <li><a href="/teams.php">Teams</a></li>
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
    <div id="loginform">
      <div id="loginform1">
        <h1><b>LOGIN</b></h1>
        <h6>
          New to ANGRY ESPORTS?
          <a href="register.php"
            ><strong style="color: red">Create an account!</strong></a
          >
        </h6>
        <input
          class="empws"
          id="em1"
          type="email"
          placeholder="Enter email"
        /><br />
        <input
          class="empws"
          id="pw1"
          type="password"
          placeholder="Enter password"
        /><br />
        <h6 id="forgotpw" style="color: rgb(250, 0, 0)">
          <a id="forgotpw1" href="login.php">Forgot your password?</a>
        </h6>
        <input
          class=""
          id="submiti"
          type="submit"
          value="Login"
          onclick="validoMeRegex()"
        /><br />
      </div>
    </div>
    <div class="bardhoshi"></div>
    <div id="zi"></div>
    <div id="babafooterit">
      <div id="reddjatht2"></div>
      <div id="redmajt"></div>
      <div id="reddjatht"></div>
      <div id="kaft90gjere"></div>
      <div id="zi80"></div>
    </div>
    <footer>
      <div id="SOCIALMEDIA" class="foot1">
        <div id="fotosocmed">
          <a href="#"
            ><img
              src="/img/angry2022logo.png"
              alt="LOGIN"
              style="height: 100px"
          /></a>
        </div>
        <div id="mediat">
          <li>
            <a href="https://www.instagram.com/angryteam.pubgm/"
              ><h1>
                <i
                  class="bx bxl-instagram"
                  onmouseover="this.style.color='purple'"
                  onmouseout="this.style.color='white'"
                ></i></h1
            ></a>
          </li>
          <li>
            <a href="https://www.youtube.com/@angryteam9441"
              ><h1>
                <i
                  class="bx bxl-youtube"
                  onmouseover="this.style.color='red'"
                  onmouseout="this.style.color='white'"
                ></i></h1
            ></a>
          </li>
          <li>
            <a href="https://twitter.com/AngryteamV"
              ><h1>
                <i
                  class="bx bxl-twitter"
                  onmouseover="this.style.color='rgb(29, 155, 240)'"
                  onmouseout="this.style.color='white'"
                ></i></h1
            ></a>
          </li>
          <li>
            <a href="https://www.twitch.tv/imtibu"
              ><h1>
                <i
                  class="bx bxl-twitch"
                  onmouseover="this.style.color='#5c16c5'"
                  onmouseout="this.style.color='white'"
                ></i></h1
            ></a>
          </li>
          <li>
            <a href="https://trovo.live/s/angryRABBIT"
              ><h1>
                <i
                  class="bx bxl-facebook"
                  onmouseover="this.style.color='#385898'"
                  onmouseout="this.style.color='white'"
                ></i></h1
            ></a>
          </li>
          <li>
            <a href="https://discord.gg/angryesports"
              ><h1>
                <i
                  class="bx bxl-discord"
                  onmouseover="this.style.color='#5865f2'"
                  onmouseout="this.style.color='white'"
                ></i></h1
            ></a>
          </li>
        </div>
      </div>
      <div class="foot1">
        <h3>ANGRY ESPORTS</h3>
        <ul>
          <li><a href="/index.php">Home</a></li>
          <li><a href="#">Shop</a></li>
          <li><a href="/teams.php">Teams</a></li>
          <li><a href="/aboutus.php">About Us</a></li>
        </ul>
      </div>
      <div id="shopf" class="foot1">
        <h3>Shop</h3>
        <li><a href="#">All Products</a></li>
        <li><a href="#">Pro kit</a></li>
        <li><a href="#">Lifestyle</a></li>
        <li><a href="#">Help</a></li>
      </div>
      <div id="teamsf" class="foot1">
        <h3>Teams</h3>
        <li><a href="#">Pubg Mobile</a></li>
        <li><a href="#">Valorant</a></li>
        <li><a href="#">CSGO</a></li>
        <li><a href="#">Dota 2</a></li>
      </div>
    </footer>
    <script src="script/loginscript.js"></script>
    <script src="script/script.js"></script>
  </body>
</html>
