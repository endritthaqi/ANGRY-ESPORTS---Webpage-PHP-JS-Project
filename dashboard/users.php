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
                        <a href="users.php" class="active">
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
                        <a href="web_settings.php">
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

        <div class="shtimiKlientav">
            <a href="#" class="btn-add-new">Add New</a>
            <div class="modal hidden">
                <div class="modal-content">
                    <div class="formSHTIMIuserav">
                        <span class="close-modal">&times;</span>
                        <label style="font-size: 1.5em;" for="newpostttt"><i class='bx bxs-user'></i>Add New
                            User</label>
                        <br><br>
                        <?php
                            include '../modelcontroller/model.php';
                            $model = new Model();
                            $shtoUseryn = $model->insertUseryy();
                        ?>
                        <form action="" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="fullname"><i class='bx bxs-user-detail'></i>Full Name</label>
                            <input type="text" id="fullname" name="fullname" required>
                        </div>
                        <div class="form-group">
                            <label for="username"><i class='bx bxs-user'></i>Username</label>
                            <input type="text" id="username" name="username" required>
                        </div>
                        <div class="form-group">
                            <label for="email"><i class='bx bxs-envelope'></i>Email</label>
                            <input type="email" id="email" name="email" required>
                        </div>
                        <div class="form-group">
                            <label for="password"><i class='bx bxs-lock-alt'></i>Password</label>
                            <input type="password" id="password" name="password" required>
                        </div>
                        <div class="form-group">
                            <label for="city"><i class='bx bxs-city'></i>City</label>
                            <input type="text" id="city" name="city">
                        </div>
                        <div class="form-group">
                            <label for="fshat"><i class='bx bxs-flag-alt'></i>Fshati</label>
                            <input type="text" id="fshat" name="fshat">
                        </div>
                        <div class="form-group">
                            <label for="zipcode"><i class='bx bxs-map'></i>Zip Code</label>
                            <input type="text" id="zipcode" name="zipcode">
                        </div>
                        <div class="form-group">
                            <label for="role"><i class='bx bxs-user-detail'></i>Role</label>
                            <select id="role" name="role" required>
                                <option value="" selected disabled>Select role</option>
                                <option value="Admin">Admin</option>
                                <option value="Player">Player</option>
                            </select>
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="photo"><i class='bx bxs-camera'></i>Photo</label>
                            <input type="file" id="photo" name="photoUser">
                        </div>
                        <button name="shtojeUserin" type="submit">Add User</button>
                        <br><br><br>
                        </form>
                    </div>

                </div>
            </div>
            <div class="overlay hidden"></div>


            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Image</th>
                        <th>Full Name</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Password</th>
                        <th>City</th>
                        <th>Fshati</th>
                        <th>Zipcode</th>
                        <th>Role</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $rows = $model->fetchUsers();
                    $i = 1;
                    if(!empty($rows)){
                    foreach($rows as $row){ 
                    ?>
                    <tr>
                    <td><?php echo $i++; ?></td>
                    <?php if($row['profili'] != null){?>
                            <td><img src="/dashboard/<?php echo $row['profili']; ?>" alt="Photo"></td>
                        <?php } else{?>
                            <td><img src="/dashboard/uploads/userprofile.png" alt="Placeholder Image"></td>
                        <?php } 
                        ?>
                    
                    <td><?php echo $row['fullname']; ?></td>
                    <td><?php echo $row['username']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['password']; ?></td>
                    <td><?php echo $row['qyteti']; ?></td>
                    <td><?php echo $row['fshati']; ?></td>
                    <td><?php echo $row['zipkodi']; ?></td>
                    <td><?php echo $row['roli']; ?></td>
                    <td>

                    <button>Edit</button>
                    <button>Delete</button>
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
</html>