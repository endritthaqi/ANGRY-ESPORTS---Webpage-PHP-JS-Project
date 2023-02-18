<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/style.css" />
    <link rel="stylesheet" href="/dashboard/DASHBOARDstyle/page_settings.css">
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
        <a href="index.php" class="logo"><img src="/img/angry2022logo.png" alt="LOGO"
                style="width: 155px; height: 75px" /></a>

        <div class="navbar">
            <li><a href="/index.php">Home</a></li>
            <li><a href="/teams.php">Teams</a></li>
            <li><a href="/aboutus.php">About Angry</a></li>
        </div>

        <div class="nav-logreg">
            <a href="user_settings.php">
                <img src="https://via.placeholder.com/150x150" alt="Placeholder Image" style="height: 40px" />
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
                    <li>
                        <a href="users.php">
                            <i class="bx bxs-user"></i> Userat
                        </a>
                    </li>
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
                        <a href="web_settings.php" class="active">
                            <i class="bx bxs-cog"></i> PageSettings
                        </a>
                    </li>
                    <li>
                        <a href="sliderimages.php">
                            <i class="bx bxs-image-alt"></i> SliderImages
                        </a>
                    </li>
                </ul>
            </div>
        </div>



        <div class="pageSETTINGform">
            <div class="page-settings-form">
                <div class="logo-preview">
                    <img src="https://via.placeholder.com/200" alt="Logo preview">
                </div>
                <h2>Page Settings</h2>
                <div class="form-group">
                    <label for="title"><i class='bx bxs-font'></i>Title</label>
                    <input type="text" id="title" name="title" value="My Page Title">
                </div>
                <div class="form-group">
                    <label for="address"><i class='bx bxs-map'></i>Address</label>
                    <input type="text" id="address" name="address" value="123 Main St, New York, NY 10001">
                </div>
                <div class="form-group social-media">
                    <label for="instagram"><i class='bx bxl-instagram'></i>Instagram</label>
                    <input type="text" id="instagram" name="instagram" value="https://www.instagram.com/">
                </div>
                <div class="form-group social-media">
                    <label for="youtube"><i class='bx bxl-youtube'></i>YouTube</label>
                    <input type="text" id="youtube" name="youtube" value="https://www.youtube.com/">
                </div>
                <div class="form-group social-media">
                    <label for="twitch"><i class='bx bxl-twitch'></i>Twitch</label>
                    <input type="text" id="twitch" name="twitch" value="https://www.twitch.tv/">
                </div>
                <div class="form-group social-media">
                    <label for="discord"><i class='bx bxl-discord'></i>Discord</label>
                    <input type="text" id="discord" name="discord" value="https://discord.com/">
                </div>
                <div class="form-group social-media">
                    <label for="twitter"><i class='bx bxl-twitter'></i>Twitter</label>
                    <input type="text" id="twitter" name="twitter" value="https://twitter.com/">
                </div>
                <div class="form-group social-media">
                    <label for="facebook"><i class='bx bxl-facebook'></i>Facebook</label>
                    <input type="text" id="facebook" name="facebook" value="https://www.facebook.com/">
                </div>
                <div class="form-group" id="logoSELECT">
                    <label for="logo"><i class='bx bxs-camera'></i>Logo</label>
                    <input type="file" id="logo" name="logo">
                </div>
                <button type="submit"><i class='bx bxs-save'></i>Save Changes</button>
            </div>
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
    <script src="../script/script.js"></script>
</body>

</html>