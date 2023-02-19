<div id="kupa">
      <div class="tournaments">
        <h1 style="color: black">DRIVEN BY</h1>
        <h1 style="color: red">COMPETITION</h1>
      </div>
      <?php
        
          $modelKupa = new Model();
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