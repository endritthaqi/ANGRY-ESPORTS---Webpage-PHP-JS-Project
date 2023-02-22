<?php session_start(); 
if (!(isset($_SESSION['roli']))) {
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
    <link rel="stylesheet" href="/dashboard/DASHBOARDstyle/postet.css">
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
                <img src="<?php echo $_SESSION['profile'] ?>" alt="Placeholder Image" style="height: 40px;width: 65px;border-radius: 50%;overflow: hidden" />
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
                    <?php if ($_SESSION['role'] === 2): ?>
                    <li>
                        <a href="users.php" class="active">
                            <i class="bx bxs-user"></i> Userat
                        </a>
                    </li>
                    <?php endif; ?>
                    <li>
                        <a href="posts.php" class="active">
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
                    <li>
                        <a href="web_settings.php">
                            <i class="bx bxs-cog"></i> WebSettings
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="shtimiKlientav">

            <a href="#" class="btn-add-new">Add New</a>
            <!-- Modal for adding new post -->
            <div class="modal hidden">
                <div class="modal-content">
                    <form id="add-post-form" method="POST" action="" >
                        <?php
                            include '../modelcontroller/model.php';
                            $model = new Model();
                            $shtoPoste=$model->insertPosts();
                        ?>
                        <label style="font-size: 1.5em;" for="newpostttt"><i class='bx bxs-file'></i>Add New
                            Post</label>
                        <br>
                        <span class="close-modal">&times;</span>
                        <label for="year">Year:</label>
                        <input type="text" id="year" name="year" required>
                        <label for="content">Content:</label>
                        <textarea id="content" name="content" required></textarea><br>
                        <button name="shtoPostin" type="submit">Add Post</button>
                    </form>
                </div>
            </div>
            <div class="overlay hidden"></div>
            <!-- Modal for adding new post -->
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>YEAR</th>
                        <th>Content </th>
                        <th>Post Author</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    
                    $rows = $model->fetchPosts();
                    $i = 1;
                    if(!empty($rows)){
                    foreach($rows as $row){ 
                    ?>
                    <tr>
                    <td><?php echo $i++; ?></td>
                    <td><?php echo $row['year']; ?></td>
                    <td><?php echo $row['content']; ?></td>
                    <td><?php echo $row['author']; ?></td>
                    <td>
                        
                            <button class="btn-edit">Edit</button>
                            <button class="btn-delete" onclick="window.location.href = 'delete_posts.php?id=<?php echo $row['id']; ?>'">Delete</button>
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



    </div>

    <script src="../script/script.js"></script>
    <script src="/dashboard/DASHBOARDscript/postet.js"></script>
</body>
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

</html>