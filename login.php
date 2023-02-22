<?php session_start(); ?>
<?php include 'modelcontroller/model.php'; ?>
<?php  
if (isset($_SESSION['role'])) {
    header('Location: /dashboard/');
    exit;
}
?>
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


    <?php
      include 'includes/top-header.php';
    ?>
      <div class="navbar">
        <li><a href="/index.php">Home</a></li>
        <li><a href="/teams.php">Teams</a></li>
        <li><a href="/aboutus.php">About Angry</a></li>
      </div>

    <?php
      include 'includes/low-header.php';
    ?>

    <div id="loginform">
      <div id="loginform1">
        <h1><b>LOGIN</b></h1>
        <h6>
          New to ANGRY ESPORTS?
          <a href="register.php"
            ><strong style="color: red">Create an account!</strong></a
          >
        </h6>
        <?php
  
              $loginy = $modeli->loginUser();
        ?>
        <form action="" method="POST">

            <input
              class="empws"
              id="em1"
              type="email"
              placeholder="Enter email"
              name = "emaili"
            /><br />
            <input
              class="empws"
              id="pw1"
              type="password"
              placeholder="Enter password"
              name = "passwordi"
            /><br />
            <h6 id="forgotpw" style="color: rgb(250, 0, 0)">
              <a id="forgotpw1" href="login.php">Forgot your password?</a>
            </h6>
            <input
              class=""
              id="submiti"
              type="submit"
              name="loginUsery"
              value="Login"
              onclick="validoMeRegex()"
            /><br />
        </form>
        
      </div>
    </div>
    <div class="bardhoshi"></div>
    <div id="zi"></div>
    <?php
      
      include 'includes/footer.php';
    ?>
    <script src="script/loginscript.js"></script>
    <script src="script/script.js"></script>
  </body>
</html>
