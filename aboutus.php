<?php session_start(); 
include 'modelcontroller/model.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style/style.css" />
    <link rel="stylesheet" href="style/aboutus.css" />
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

    <?php
      include 'includes/top-header.php';
    ?>
      <div class="navbar">
        <li><a href="/index.php">Home</a></li>
        <li><a href="/teams.php">Teams</a></li>
        <li><a href="/aboutus.php" class="active">About Angry</a></li>
      </div>

    <?php
      include 'includes/low-header.php';
    ?>
    <main>
      <div id="aboutus3">
        <img
          src="img/aboutuslanterosy.png"
          alt="aboutus"
          width="100%"
          height="auto"
        />
      </div>

      <div id="kulmiHISTORY">
        <div id="hisLEFT">
          <div id="hisLEFT1">
            <h1 style="color: #6b0005; font-size: 5em">“</h1>
          </div>

          <div id="hisLEFT2">
            <h3 style="color: black">
              <i
                >We founded ANGRY in September 2019 to become the leaders of the
                Albania Esports scene and compete with the international elite.
                We, as an organisation,<br />
                want to act as a role model in every aspect and create a highly
                professional<br />
                environment for our esport athletes and partners while inspiring
                and<br />
                connecting people to us – worldwide. Our players represent all
                the values<br />
                a true professional athlete is supposed to have, in and out of
                the game.<br />
                Gaming is our passion, we play to win.</i
              >
            </h3>
          </div>
        </div>
        <div id="hisRIGHT">
          <h3>#BEANGRY #BECHAMPION</h3>
          <h1>WE ARE ANGRY</h1>
          <h1>ANGRY E-SPORTS</h1>
          <h3>
            ANGRY E-SPORTS is a premier, world-class esport organization founded
            and based in Kosovo. Our professional teams and players compete in
            the most prestigious leagues worldwide. Gaming is our passion, we
            play to win.
          </h3>
        </div>
      </div>
      <?php
          
          $rows = $modeli->fetchPosts();
      ?>



      <div id="history">
        <br /><br /><br /><br />
        <h1>HISTORY</h1>

        <?php 
        if(!empty($rows)){
          foreach($rows as $row){
      
        ?>
        <div class="year">
          <h2><?php echo $row['year']; ?></h2>
          <p>
            <?php echo $row['content']; ?>
          </p>
        </div>
        <?php
          }
        }else{
          echo "no data";
        }
        ?>    
      </div>
    </main>

    <?php
      include 'includes/kupa.php';
      include 'includes/footer.php';
    ?>
    <script src="script/script.js"></script>
  </body>
</html>
