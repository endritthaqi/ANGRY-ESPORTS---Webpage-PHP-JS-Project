<div id="bigachiv">
      <h1 style="color: white; font-size: 1rem">PROUD OF</h1>
      <div id="bigachivtitle">
        <h2>BIGGEST <strong style="color: #ff050d">ACHIEVEMENTS</strong></h2>
        <br />
      </div>
      <?php
        
          $modelKupa = new Model();
          $rowsKupa = $modelKupa->trofetEfituaraDhefitimi();

      ?>
      <div id="achivplaces">
        <div class="placeschild">
          <h1>4</h1>
          <h5>TEAMS</h5>
        </div>
        <div class="placeschild">
            <?php 
                if(!empty($rowsKupa)){
                foreach($rowsKupa as $row){
            ?>
                <h1><?php echo $row['trofet_e_fituara']; ?></h1>
            <?php
                }
                    }
                    else{
                    echo "no data";
                }
            ?>   
          <h5>1ST PLACES</h5>
        </div>


        <div class="placeschild">
            <?php 
                if(!empty($rowsKupa)){
                foreach($rowsKupa as $row){
            ?>
            <h1><?php echo ($row['shumaFituese'])/1000; ?>K</h1>
            <?php
                }
                    }
                    else{
                    echo "no data";
                }
            ?> 
          <h5>REWARDS</h5>
        </div>
        <div class="placeschild">
          <h1>500K+</h1>
          <h5>FANS WORLDWIDE</h5>
        </div>
      </div>
    </div>


<div id="kupa">
      <div class="tournaments">
        <h1 style="color: black">DRIVEN BY</h1>
        <h1 style="color: red">COMPETITION</h1>
      </div>
      <?php
        
          $rowsKupa = $modelKupa->fetchTrophy();
      ?>

      <?php 
      if(!empty($rowsKupa)){
        foreach($rowsKupa as $row){
      
      ?>
      <div class="tournaments">
        <img src="/img/ramadanproleague.png" alt="<?php echo $row['trophy_name'];?>" />
        <h4><?php echo $row['trophy_name']; ?></h4>
        <p><?php echo $row['trophy_place']; ?></p>

      </div>
      <?php
          }
      }else{
          echo "no data";
      }
?>