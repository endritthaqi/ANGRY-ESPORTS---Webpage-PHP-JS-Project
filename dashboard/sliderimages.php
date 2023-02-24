<?php session_start(); 
if (!(isset($_SESSION['role']))) {
    header('Location: ../logout.php');
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
    <link rel="stylesheet" href="/dashboard/DASHBOARDstyle/userat.css">
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
                        <a href="users.php" >
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
                        <a href="sliderimages.php" class="active">
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

        <div class="shtimiKlientav">
            <a href="#" class="btn-add-new">Add New</a>
            <div class="modal hidden">
                <div class="modal-content">
                    <div class="formSHTIMIuserav">
                        <span class="close-modal">&times;</span>
                        <label style="font-size: 1.5em;" for="newpostttt"><i class='bx bxs-camera'></i>Add New
                            Image</label>
                        <br><br>
                        <br>
                        <?php
                            include '../modelcontroller/model.php';
                            $model = new Model();
                            $insert = $model->insertSlider();
                        ?>
                        <form action="" method="POST" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="photo"><i class='bx bxs-camera'></i>Photo</label>
                                <input type="file" id="photo" name="photoSlider">
                            </div>
                            <button name="shtoSliderin" type="submit">Upload new image</button>
                        </form>

                        <br><br><br>
                    </div>

                </div>
            </div>
            <div class="overlay hidden"></div>
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Image</th>
                        <th>Path</th>
                        <th>Author</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $rows = $model->fetchSlider();
                    $i = 1;
                    if(!empty($rows)){
                    foreach($rows as $row){ 
                    ?>
                    <tr>
                    <td><?php echo $i++; ?></td>
                    <td><img src="<?php echo $row['imgpath']; ?>" alt="Placeholder Image"></td>
                    <td><?php echo $row['imgpath']; ?></td>
                    <td><?php echo $row['author']; ?></td>

                    <td>

                    <button>Edit</button>
                    <button onclick="window.location.href = 'delete_slider.php?id=<?php echo $row['id']; ?>'">Delete</button>
                    </td>
                    </tr>

                    <?php
                    }
                    }else{
                    echo "no data";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
    
    <script src="../script/script.js"></script>
    <script src="/dashboard/DASHBOARDscript/userat.js"></script>

    <script>
        const imageInputs = document.querySelectorAll(".slider-images input[type=file]");

        imageInputs.forEach(input => {
            input.addEventListener("change", () => {
                const img = input.previousElementSibling;
                const file = input.files[0];
                const reader = new FileReader();

                reader.onload = () => {
                    img.src = reader.result;
                }

                if (file) {
                    reader.readAsDataURL(file);
                }
            });
        });
    </script>



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