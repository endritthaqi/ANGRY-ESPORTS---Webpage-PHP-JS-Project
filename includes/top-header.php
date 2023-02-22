<?php 
        $modeli = new Model();
        $webLogo = $modeli->fetchWebSettings();

        if(!empty($webLogo)){
          foreach($webLogo as $row){
            
    ?>
    <link rel="icon" href="/dashboard/<?php echo $row['web_logo']; ?>" />

    <title>ANGRY E-SPORTS</title>
  </head>
  <body>
    <header>
      <a href="index.php" class="logo"
        ><img
          src="/dashboard/<?php echo $row['web_logo']; ?>"
          alt="LOGO"
          style="width: 155px; height: 75px"
      /></a>
      <?php
                }
                    }
                    else{
                    echo "no data";
                }
      ?>   