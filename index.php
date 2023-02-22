<?php session_start(); ?>
<?php include 'modelcontroller/model.php'; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style/style.css" />
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
        <li><a href="/index.php" class="active">Home</a></li>
        <li><a href="/teams.php">Teams</a></li>
        <li><a href="/aboutus.php">About Angry</a></li>
      </div>

    <?php
      include 'includes/low-header.php';
    ?>
    <main>
      <div id="slider">
        <img src="" id="imazhi" alt="Slider" />
      </div>
    </main>





    <?php
      include 'includes/kupa.php';
      include 'includes/footer.php';
    ?>



    
    
    <script> 
      <?php 
        
        $slidet = $modeli->fetchSlider();
      ?>
      //SCRIPTA per IMGslider
      var varguImg = [];
      
      <?php foreach($slidet as $row){?>
      varguImg.push("dashboard/<?php echo $row['imgpath']; ?>");<?php }?>

        var index = 0;
        const koha = 5000;

        function krijoSlider() {
          document.getElementById("imazhi").src = varguImg[index];
          index++;

          if (index == varguImg.length) {
            index = 0;
          }

          setTimeout("krijoSlider()", koha);

          console.log(varguImg.length);
          console.log("sdsdsd");
        }

        krijoSlider();</script>
    <script src="script/script.js"></script>
    
  </body>
</html>
