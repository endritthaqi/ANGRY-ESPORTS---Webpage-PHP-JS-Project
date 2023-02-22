</div>
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
            <?php 
		        $modelFooter = new Model();
        	    $rowsWebSettings = $modelFooter->fetchWebSettings();
                if(!empty($rowsWebSettings)){
                foreach($rowsWebSettings as $row){
            ?>
          <a href="/index.php"
            ><img
              src="dashboard/<?php echo $row['web_logo']; ?>"
              alt="LOGIN"
              style="height: 100px"
          /></a>
          
        </div>
        <div id="mediat">
          <li>
            <a href="<?php echo $row['web_instagram']; ?>"
              ><h1>
                <i
                  class="bx bxl-instagram"
                  onmouseover="this.style.color='purple'"
                  onmouseout="this.style.color='white'"
                ></i></h1
            ></a>
          </li>
          <li>
            <a href="<?php echo $row['web_youtube']; ?>"
              ><h1>
                <i
                  class="bx bxl-youtube"
                  onmouseover="this.style.color='red'"
                  onmouseout="this.style.color='white'"
                ></i></h1
            ></a>
          </li>
          <li>
            <a href="<?php echo $row['web_twitter']; ?>"
              ><h1>
                <i
                  class="bx bxl-twitter"
                  onmouseover="this.style.color='rgb(29, 155, 240)'"
                  onmouseout="this.style.color='white'"
                ></i></h1
            ></a>
          </li>
          <li>
            <a href="<?php echo $row['web_twitch']; ?>"
              ><h1>
                <i
                  class="bx bxl-twitch"
                  onmouseover="this.style.color='#5c16c5'"
                  onmouseout="this.style.color='white'"
                ></i></h1
            ></a>
          </li>
          <li>
            <a href="<?php echo $row['web_facebook']; ?>"
              ><h1>
                <i
                  class="bx bxl-facebook"
                  onmouseover="this.style.color='#385898'"
                  onmouseout="this.style.color='white'"
                ></i></h1
            ></a>
          </li>
          <li>
            <a href="<?php echo $row['web_discord']; ?>"
              ><h1>
                <i
                  class="bx bxl-discord"
                  onmouseover="this.style.color='#5865f2'"
                  onmouseout="this.style.color='white'"
                ></i></h1
            ></a>
            <?php
                }
                    }
                    else{
                    echo "no data";
                }
            ?> 
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