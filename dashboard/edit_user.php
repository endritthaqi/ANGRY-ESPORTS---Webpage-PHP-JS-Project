<?php 

session_start(); 

if (!(isset($_SESSION['role']))) {
    header('Location: ../logout.php');
    exit;
}

if ($_SESSION['role'] != 2) {
    header('Location: /dashboard/index.php');
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/style.css" />
    <link rel="stylesheet" href="/dashboard/DASHBOARDstyle/stili.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css" />
    <link rel="icon" href="img/angry2022logo.png" />

    <title>ANGRY E-SPORTS</title>
</head>

<body>
    <header>
        <a href="../index.php" class="logo"><img src="/img/angry2022logo.png" alt="LOGO"
                style="width: 155px; height: 75px" /></a>

        <div class="navbar">
            <li><a href="../index.php">Home</a></li>
            <li><a href="../teams.php">Teams</a></li>
            <li><a href="../aboutus.php">About Angry</a></li>
        </div>

        <div class="nav-logreg">
            <a href="user_settings.php">
                <img src="<?php echo $_SESSION['profile'] ?>" alt="Placeholder Image" style="height: 50px;width: 50px;border-radius: 50%;overflow: hidden" />
            </a>


            <a href="/logout.php" style="color:black">
                <i class="bx bx-log-out"></i> Logout
            </a>

            <a href="#"><img src="/img/bxs-cart.svg" alt="SHOP" style="height: 30px" /></a>
            <div id="menu">
                <a href="#"><img src="/img/bx-menu.svg" alt="MENU" style="height: 30px" /></a>
            </div>
        </div>
    </header>
    <div class="sidebarANDcontent">
        <div class="sidebarMADH">
            <div class="sidebar">
                <ul class="nav-menu">

                    <li>
                        <a href="index.php">
                            <i class="bx bxs-dashboard"></i> Dashboard
                        </a>
                    </li>
                    <?php if ($_SESSION['role'] == 2): ?>
                    <li>
                        <a href="users.php">
                            <i class="bx bxs-user"></i> Userat
                        </a>
                    </li>
                    <?php endif; ?>
                    <li>
                        <a href="posts.php">
                            <i class="bx bxs-file"></i> Postet
                        </a>
                    </li>
                    <li>
                        <a href="trofet.php">
                            <i class="bx bxs-trophy"></i> Trofet
                        </a>
                    </li>
                    <li>
                        <a href="sliderimages.php">
                            <i class="bx bxs-image-alt"></i> SliderImages
                        </a>
                    </li>
                    <?php if ($_SESSION['role'] == 2): ?>
                    <li>
                        <a href="web_settings.php">
                            <i class="bx bxs-cog"></i> WebSettings
                        </a>
                    </li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>


        <?php
              include '../modelcontroller/model.php';
              $model = new Model();
              $id = $_REQUEST['id'];
              $row = $model->edit($id);
 
              if (isset($_POST['update'])) {
                if (isset($_POST['fullname']) && isset($_POST['email']) && isset($_POST['username']) && isset($_POST['password']) && isset($_POST['city']) && isset($_POST['fshat']) && isset($_POST['zipkodi']) && isset($_POST['roli'])) {
                    echo '<h1>GAHAHAHAH<h1>';
                    $data['id'] = $id;
                    $data['name'] = $_POST['fullname'];
                    $data['username'] = $_POST['username'];
                    $data['email'] = $_POST['email'];
                    $data['password'] = $_POST['password'];
                    $data['qyteti'] = $_POST['city'];
                    $data['fshati'] = $_POST['fshat'];
                    $data['zipkodi'] = $_POST['zipkodi'];
                    $data['imageUSER'] = null;
                    if(isset($_FILES['photoUser']['name'])){
                        $data['imageUSER'] = $_FILES['photoUser']['name'];
                        $data['pathi'] = 'uploads/userimg/'.$data['imageUSER'];
                        move_uploaded_file($_FILES['imageUSER']['tmp_name'], $data['pathi']);
                    }
                    if($_POST['roli'] == 'Admin'){
                        $data['roli'] = 2;
                    }
                    else{
                        $data['roli'] = 1;
                    }
                    
                    $update = $model->update($data);
 
                    if($update){
                      echo "<script>alert('record update successfully');</script>";
                      echo "<script>window.location.href = 'index.php';</script>";
                    }else{
                      echo "<script>alert('record update failed');</script>";
                      echo "<script>window.location.href = 'index.php';</script>";
                    }
 
                  }else{
                    echo "<script>alert('empty');</script>";
                    header("Location: edit_user.php?id=$id");
                  }
                }
          ?>

        <div class="user-settings-form">
            <div class="photo-preview">
            <?php if($row['profili'] != null){?>
                            <td><img src="/dashboard/<?php echo $row['profili']; ?>" alt="Photo"></td>
                        <?php } else{?>
                            <td><img src="/dashboard/uploads/userimg/userprofile.png" alt="Placeholder Image"></td>
                        <?php } 
                        ?>

            </div>
        <form method="POST" enctype="multipart/form-data">
            <h2 style="text-align:center;"><?php echo $row['fullname'] ?>' User Settings</h2>
            <div class="form-group">
                <label for="id"><i class='bx bxs-user'></i>ID</label>
                <input type="text" id="id" name="id" value="<?php echo $row['id'] ?>" readonly>
            </div>
            <div class="form-group">
                <label for="fullname"><i class='bx bxs-user-detail'></i>Full Name</label>
                <input type="text" id="fullname" name="fullname" value="<?php echo $row['fullname'] ?>">
            </div>
            <div class="form-group">
                <label for="username"><i class='bx bxs-user'></i>Username</label>
                <input type="text" id="username" name="username" value="<?php echo $row['username'] ?>">
            </div>
            <div class="form-group">
                <label for="email"><i class='bx bxs-envelope'></i>Email</label>
                <input type="email" id="email" name="email" value="<?php echo $row['email'] ?>">
            </div>
            <div class="form-group">
                <label for="password"><i class='bx bxs-lock-alt'></i>Password</label>
                <input type="password" id="password" name="password" value="<?php echo $row['password'] ?>">
            </div>
            <div class="form-group">
                <label for="city"><i class='bx bxs-city'></i>City</label>
                <input type="text" id="city" name="city" value="<?php echo $row['qyteti'] ?>">
            </div>
            <div class="form-group">
                <label for="fshat"><i class='bx bxs-flag-alt'></i>Fshati</label>
                <input type="text" id="fshat" name="fshat" value="<?php echo $row['fshati'] ?>">
            </div>
            <div class="form-group">
                <label for="zipcode"><i class='bx bxs-map'></i>Zip Code</label>
                <input type="text" id="zipcode" name="zipkodi" value="<?php echo $row['zipkodi'] ?>">
            </div>
            <div class="form-group">
                            <label for="role"><i class='bx bxs-user-detail'></i>Role</label>
                            <select id="role" name="roli" required>  
                            <?php
                                if($row['roli'] == 2){
                                    ?>
                                    <option value="" disabled>Select role</option>
                                    <option value="Admin" selected>Admin</option>
                                    <option value="Player">Player</option>
                                    <?php
                                }else{
                                    ?>
                                    <option value="" disabled>Select role</option>
                                    <option value="Admin" >Admin</option>
                                    <option value="Player" selected>Player</option>
                                    <?php
                                }
                            ?>
                            </select>
            </div>
            <div class="form-group" id="fotoSELECT">
                <label for="photo"><i class='bx bxs-camera'></i>Photo</label>
                <input type="file" id="photo" name="photoUser" >
            </div>
            <button type="submit" name="update"><i class='bx bxs-save'></i>Save Changes</button>
        </form>
        </div>




    </div>
    </div>
    <footer>
        <div id="SOCIALMEDIA" class="foot1">
            <div id="fotosocmed">
                <a href="#"><img src="/img/angry2022logo.png" alt="LOGIN" style="height: 100px" /></a>
            </div>
            <div id="mediat">
                <li>
                    <a href="https://www.instagram.com/angryteam.pubgm/">
                        <h1>
                            <i class="bx bxl-instagram" onmouseover="this.style.color='purple'"
                                onmouseout="this.style.color='white'"></i>
                        </h1>
                    </a>
                </li>
                <li>
                    <a href="https://www.youtube.com/@angryteam9441">
                        <h1>
                            <i class="bx bxl-youtube" onmouseover="this.style.color='red'"
                                onmouseout="this.style.color='white'"></i>
                        </h1>
                    </a>
                </li>
                <li>
                    <a href="https://twitter.com/AngryteamV">
                        <h1>
                            <i class="bx bxl-twitter" onmouseover="this.style.color='rgb(29, 155, 240)'"
                                onmouseout="this.style.color='white'"></i>
                        </h1>
                    </a>
                </li>
                <li>
                    <a href="https://www.twitch.tv/imtibu">
                        <h1>
                            <i class="bx bxl-twitch" onmouseover="this.style.color='#5c16c5'"
                                onmouseout="this.style.color='white'"></i>
                        </h1>
                    </a>
                </li>
                <li>
                    <a href="https://trovo.live/s/angryRABBIT">
                        <h1>
                            <i class="bx bxl-facebook" onmouseover="this.style.color='#385898'"
                                onmouseout="this.style.color='white'"></i>
                        </h1>
                    </a>
                </li>
                <li>
                    <a href="https://discord.gg/angryesports">
                        <h1>
                            <i class="bx bxl-discord" onmouseover="this.style.color='#5865f2'"
                                onmouseout="this.style.color='white'"></i>
                        </h1>
                    </a>
                </li>
            </div>
        </div>
        <div class="foot1">
            <h3>ANGRY ESPORTS</h3>
            <ul>
                <li><a href="../index.php">Home</a></li>
                <li><a href="#">Shop</a></li>
                <li><a href="../teams.php">Teams</a></li>
                <li><a href="../aboutus.php">About Us</a></li>
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
    <script src="../script/script.js"></script>
</body>

</html>