<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style/style.css" />
    <link rel="stylesheet" href="style/register.css" />
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
        <h1><b>CREATE ACCOUNT</b></h1>
        <?php
              include 'modelcontroller/model.php';
              $model = new Model();
              $insert = $model->insert();
        ?>
        <form action="" method="post">
          <input
            class="empws"
            id="firstname3"
            type="text"
            placeholder="  Full Name"
            name="fullname"
          /><br />
          <input
            class="empws"
            id="un"
            type="username"
            placeholder="  Username"
            name="username"
          /><br />
          <input
            class="empws"
            id="em1"
            type="email"
            placeholder="Enter email"
            name="email"
          /><br />
          <input
            class="empws"
            id="pw1"
            type="password"
            placeholder="Enter password"
            name="password"
          /><br />
          <input
            class="empws"
            id="submiti1"
            type="submit" 
            name="submit"
            value="CREATE"
            onclick="validoMeRegex()"
          /><br /><br />
          <h6>
        </form>
          <a href="login.php"
            ><strong style="color: rgb(250, 0, 0)">Return to Login!</strong></a
          >
        </h6>
      </div>
    </div>
    <div id="zi"></div>
    <?php
      include 'includes/kupa.php';
      include 'includes/footer.php';
    ?>
    <script src="script/script.js"></script>
    <script src="script/registerscript.js"></script>
  </body>
</html>
