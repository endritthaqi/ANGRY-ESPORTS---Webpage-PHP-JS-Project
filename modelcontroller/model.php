<?php
    class Model{
        private $server = 'localhost';
        private $username = 'root';
        private $password;
        private $database = 'angryesports';
        private $conn;
        
        public function __construct(){
            try{
                $this->conn = new mysqli($this->server, $this->username, $this->password, $this->database);
            }catch(Exception $ex){
                echo 'connection failed' .$ex->getMessage();
            }       
        }
        //INSERT, FETCH, EDIT, DELETE

        // metoda insert eshte perdorur tek SIGNUP
        public function insert(){
            if(isset($_POST['submit'])){

                $name = $_POST['fullname'];
                $username = $_POST['username']; 
                $email = $_POST['email'];
                $password = $_POST['password'];

                $regexFIRSTNAME = '/^[a-zA-Z]+((\s[a-zA-Z]+){1,2})?$/'; // min 1 maxx 50
                $regexUSERNAME = '/^[a-zA-Z0-9]{5,20}$/'; // mesepaku 5
                $regexEMAIL = '/^[a-zA-Z][a-zA-Z0-9_.]+@[a-zA-Z0-9-]+\.(com|net)$/'; //email duhet te startoj me shkronje dhe ka @ dhe ends.com.net
                $regexPASSWORD = '/^[A-Z][a-zA-Z0-9!@#$%^&*()_+\-=\[\]{};\':"\\|,.<>\/?~]{6,}$/'; // min. 7 karaktere, karakteri i pare ne upper case dhe te ket 1num 1specchar
        
                if (!preg_match($regexFIRSTNAME, $name)) {
                    //echo "<script>alert('Name is not valid, it should start with a capital letter and have at least 5 characters and a maximum of 15 characters');</script>";
                    exit();
                }
                if (!preg_match($regexUSERNAME, $username)) {
                    //echo "<script>alert('Username is not valid, it should contain only letters and numbers and have a minimum of 5 characters and a maximum of 20 characters');</script>";
                    return;
                }
                if (!preg_match($regexEMAIL, $email)) {
                    //echo "<script>alert('Email is not valid, it should start with a letter and have a valid email format (e.g. example@example.com or example@example.net)');</script>";
                    return;
                }
                if (!preg_match($regexPASSWORD, $password)) {
                    //echo "<script>alert('Password is not valid, it should contain at least 7 characters, start with a capital letter and have at least 1 number and 1 special character');</script>";
                    return;
                }





                $query = "INSERT INTO user(fullname, username, email, password) VALUES ('$name','$username', '$email', '$password')";

                if ($sql = $this->conn->query($query)) {
                    echo "<script>alert('Rigjistrimi u be me sukses');</script>";
                    echo "<script>window.location.href = '../index.php';</script>";
                }else{
                    echo "<script>alert('failed');</script>";
                    echo "<script>window.location.href = '../index.php';</script>";
                }

                
            }
            else{
                // header("location:/register.php");
            }
        }

        public function loginUser(){
           if(isset($_POST['loginUsery'])){
                session_start();
                $email = $_POST['emaili'];
                $password = $_POST['passwordi'];

                $username = mysqli_real_escape_string($this->conn, $email);
                $password = mysqli_real_escape_string($this->conn, $password);

                $query = "SELECT * FROM user where email = '{$email}'";

                $select_user_query = mysqli_query($this->conn, $query);

                if(!$select_user_query){
                    die("QUERY FAILED". mysqli_error($this->conn));
                }
                while($row = mysqli_fetch_array($select_user_query)){
                    $user_id = $row['id'];
                    $user_fullname = $row['fullname'];
                    $user_name = $row['username'];
                    $user_email = $row['email'];
                    $user_password = $row['password'];
                    $user_cityy = $row['qyteti'];
                    $user_fshatyy = $row['fshati'];
                    $user_zipcody = $row['zipkodi'];
                    $user_role = $row['roli'];
                    $user_profile = $row['profili'];
                }

                if($email !== $user_email  && $password !== $user_password){
                    header("Location: ../login.php");
                }
                else if($email === $user_email  && $password === $user_password){
                    header("Location: ../dashboard/index.php");

                    $_SESSION['id']= $user_id;
                    $_SESSION['fullname']= $user_fullname;
                    $_SESSION['username'] = $user_name;
                    $_SESSION['email'] = $user_email;
                    $_SESSION['password'] = $user_password;
                    $_SESSION['qytety'] = $user_cityy;
                    $_SESSION['fshaty'] = $user_fshatyy;
                    $_SESSION['zipkody'] = $user_zipcody;
                    $_SESSION['role'] = $user_role;
                    $_SESSION['profile'] = $user_profile; 

                }
                else{
                    header("Location: ../login.php");
                }
                    
           }  
        }
 

        public function insertUseryy(){
            if(isset($_POST['shtojeUserin'])){

                 

                $fullname = $_POST['fullname'];
                $username = $_POST['username'];
                $email = $_POST['email'];
                $password = $_POST['password'];
                $city = $_POST['city'];
                $fshat = $_POST['fshat'];
                $zipcode = $_POST['zipcode'];
                $role = $_POST['role'];

                $image = $_FILES['photoUser']['name'];
                $path = 'uploads/userimg/'.$image;

                
                $query = "CALL ShtoUser('$fullname', '$username', '$email', '$password', '$city', '$fshat', '$zipcode', '$role', '$path');";
                if ($sql = $this->conn->query($query)) {
                    move_uploaded_file($_FILES['photoUser']['tmp_name'], $path);
                    echo "<script>alert('Rigjistrimi u be me sukses');</script>";
                    echo "<script>window.location.href = 'users.php';</script>";
                }else{
                    echo "<script>alert('Rigjistrimi i sliderit nuk u be');</script>";
                    echo "<script>window.location.href = 'users.php';</script>";
                }
            }
        }


        
        public function insertTrophy(){
            if(isset($_POST['shtoTrofe'])){
                $trophyName = $_POST['tropyname'];
                $trophyPlace = $_POST['TournamentPlace'];
                $trophyPrizepool = $_POST['Prizepool'];
                $trophyFoto = $_FILES['photo']['name'];
                $path = 'uploads/trophyimg/'.$trophyFoto;

                $query = "INSERT INTO trophy(trophy_name,trophy_place,trophy_prizepool,trophy_img) VALUES('$trophyName','$trophyPlace','$trophyPrizepool','$path')";

                if($sql = $this->conn->query($query)){
                    move_uploaded_file($_FILES['photo']['tmp_name'], $path);
                        echo "<script>alert('Rigjistrimi u be me sukses');</script>";
                        echo "<script>window.location.href = 'trofet.php';</script>";
                }
                else{
                    echo "<script>alert('Rigjistrimi i sliderit nuk u be');</script>";
                    echo "<script>window.location.href = 'trofet.php';</script>";
                }
            }   
        }

        public function updateWebSettings(){
            if(isset($_POST['updateWebSettings'])){
                $title = $_POST['title'];
                $instagram = $_POST['instagram'];
                $youtube = $_POST['youtube'];
                $twitch = $_POST['twitch'];
                $discord = $_POST['discord'];
                $twitter = $_POST['twitter'];
                $facebook = $_POST['facebook'];

                if(!empty($_FILES['logo']['tmp_name'])){
                    $weblogo = $_FILES['logo']['name'];
                    $path = 'uploads/trophyimg/'.$weblogo;
                    move_uploaded_file($_FILES['logo']['tmp_name'], $path);
                    $logoPath = $path;
                }
                else{
                    $queryy = "SELECT web_logo FROM websettings";
                    $result = $this->conn->query($queryy);
                    if($result->num_rows>0){
                        $row = $result->fetch_assoc();
                        $existingLogoPathFromDatabase = $row["web_logo"];
                    }

                    $logoPath = $existingLogoPathFromDatabase;
                }

                $query = "UPDATE websettings SET web_title='$title',web_instagram='$instagram',
                web_youtube='$youtube',web_twitch='$twitch',web_discord='$discord',web_twitter='$twitter',
                web_facebook='$facebook',web_logo='$logoPath'";

                if($sql = $this->conn->query($query)){
                        
                        echo "<script>alert('Update u be me sukses');</script>";
                        echo "<script>window.location.href = 'web_settings.php';</script>";
                }
                else{
                    echo "<script>alert('Update nuk u be');</script>";
                    echo "<script>window.location.href = 'web_settings.php';</script>";
                }
            }   
        }
        



        public function updateUserSETTINGS(){
            if(isset($_POST['SAVEuserSETT'])){
                $id = $_POST['id'];
                $fullname = $_POST['fullname'];
                $username = $_POST['username'];
                $email = $_POST['email'];
                $password = $_POST['password'];
                $city = $_POST['city'];
                $fshat = $_POST['fshat'];
                $zipcode = $_POST['zipcode'];

                if(!empty($_FILES['photo']['tmp_name'])){
                    $userlogo = $_FILES['photo']['name'];
                    $path = 'uploads/userimg/'.$userlogo;
                    move_uploaded_file($_FILES['photo']['tmp_name'], $path);
                    $logoPath = $path;
                }

                else{
                    $queryy = "SELECT profili FROM user";
                    $result = $this->conn->query($queryy);
                    if($result->num_rows>0){
                        $row = $result->fetch_assoc();
                        $existingLogoPathFromDatabase = $row["profili"];
                    }
                    $logoPath = $existingLogoPathFromDatabase;
                }

                

                $query = "UPDATE `user` SET `fullname`='$fullname',`username`='$username',`email`='$email',`password`='$password',`qyteti`='$city',`fshati`='$fshat',`zipkodi`='$zipcode',`profili`='$logoPath' WHERE `id`='$id';";

                

                if($sql = $this->conn->query($query)){  
                        echo "<script>alert('Update u be me sukses');</script>";
                        echo "<script>window.location.href = 'user_settings.php';</script>";
                        
                        $_SESSION['fullname']= $fullname;
                        $_SESSION['username'] = $username;
                        $_SESSION['email'] = $email;
                        $_SESSION['password'] = $password;
                        $_SESSION['qytety'] = $city;
                        $_SESSION['fshaty'] = $fshat;
                        $_SESSION['zipkody'] = $zipcode;
                        $_SESSION['profile'] = $logoPath; 
                }

                else{
                    echo "<script>alert('Update nuk u be');</script>";
                    echo "<script>window.location.href = 'user_settings.php';</script>";
                }

            }   
        }


        public function insertSlider(){
            if(isset($_POST['shtoSliderin'])){
                $image = $_FILES['photoSlider']['name'];
                $path = 'uploads/sliderimg/'.$image;
                $query = "INSERT INTO sliderimg (imgpath) VALUES ('$path')";
                if ($sql = $this->conn->query($query)) {
                    move_uploaded_file($_FILES['photoSlider']['tmp_name'], $path);
                    echo "<script>alert('Rigjistrimi u be me sukses');</script>";
                    echo "<script>window.location.href = 'sliderimages.php';</script>";
                }else{
                    echo "<script>alert('Rigjistrimi i sliderit nuk u be');</script>";
                    echo "<script>window.location.href = 'sliderimages.php';</script>";
                }
            }
        }
        
        public function insertPosts(){
            if(isset($_POST['shtoPostin'])){
                $year = $_POST['year'];
                $content = $_POST['content'];

                $query = "INSERT INTO post(year,content) VALUES('$year','$content')";

                if($sql = $this->conn->query($query)){
                        echo "<script>alert('Rigjistrimi u be me sukses');</script>";
                        echo "<script>window.location.href = 'posts.php';</script>";
                }
                else{
                    echo "<script>alert('Rigjistrimi i postit nuk u be');</script>";
                    echo "<script>window.location.href = 'posts.php';</script>";
                }
            }   
        }




        public function fetchUsers(){
            $data = null;
            $query = "SELECT * FROM user";
            if ($sql = $this->conn->query($query)) {
                while ($row = mysqli_fetch_assoc($sql)) {
                    $data[] = $row;
                }
            }
            return $data;
        }


        public function fetchPosts(){
            $data = null;
            $query = "SELECT * FROM post";
            if ($sql = $this->conn->query($query)) {
                while ($row = mysqli_fetch_assoc($sql)) {
                    $data[] = $row;
                }
            }
            return $data;
        }

        public function fetchTrophy(){
            $data = null;
            $query = "SELECT * FROM trophy";
            if ($sql = $this->conn->query($query)) {
                while ($row = mysqli_fetch_assoc($sql)) {
                    $data[] = $row;
                }
            }
            return $data;
        }


        public function fetchSlider(){
            $data = null;
            $query = "SELECT * FROM sliderimg";
            if ($sql = $this->conn->query($query)) {
                while ($row = mysqli_fetch_assoc($sql)) {
                    $data[] = $row;
                }
            }
            return $data;
        }

        public function fetchWebSettings(){
            $data = null;
            $query = "SELECT * FROM websettings";
            if ($sql = $this->conn->query($query)) {
                while ($row = mysqli_fetch_assoc($sql)) {
                    $data[] = $row;
                }
            }
            return $data;
        }
        




        public function counterUserPostTrophySlider(){
            $data = null;
            $query = "SELECT 
            (SELECT COUNT(*) FROM user) AS user_count,
            (SELECT COUNT(*) FROM post) AS post_count,
            (SELECT COUNT(*) FROM trophy) AS trophy_count,
            (SELECT COUNT(*) FROM sliderimg) AS slider_count;";

            if($sql = $this->conn->query($query)){
                while($row = mysqli_fetch_assoc($sql)){
                    $data[] = $row;
                }
            }
            return $data;
        }

        public function trofetEfituaraDhefitimi(){
            $data = null;
            $query = "SELECT 
            (SELECT COUNT(*) FROM trophy where trophy_place like '1%')AS trofet_e_fituara,
            (SELECT SUM(trophy_prizepool) FROM trophy) AS shumaFituese;";

            if($sql = $this->conn->query($query)){
                while($row = mysqli_fetch_assoc($sql)){
                    $data[] = $row;
                }
            }
            return $data;
        }
        


 
        public function delete($id){
 
            $query = "DELETE FROM user where id = '$id'";
            if ($sql = $this->conn->query($query)) {
                return true;
            }else{
                return false;
            }
        }

        public function deletePosts($id){
 
            $query = "DELETE FROM post where id = '$id'";
            if ($sql = $this->conn->query($query)) {
                return true;
            }else{
                return false;
            }
        }

        public function deleteTrophy($id){
 
            $query = "DELETE FROM trophy where id = '$id'";
            if ($sql = $this->conn->query($query)) {
                return true;
            }else{
                return false;
            }
        }

        public function deleteSlider($id){
 
            $query = "DELETE FROM sliderimg where id = '$id'";
            if ($sql = $this->conn->query($query)) {
                return true;
            }else{
                return false;
            }
        }



 
        public function edit($id){
 
            $data = null;
 
            $query = "SELECT * FROM user WHERE id = '$id'";
            if ($sql = $this->conn->query($query)) {
                while($row = $sql->fetch_assoc()){
                    $data = $row;
                }
            }
            return $data;
        }
 
        public function update($data){ 
            if($data['imageUSER'] == null){
                $query = "UPDATE user SET fullname='$data[name]',username='$data[username]', email='$data[email]',  password='$data[password]',qyteti='$data[qyteti]',fshati='$data[fshati]', zipkodi='$data[zipkodi]',roli='$data[roli]' WHERE id='$data[id] '";
            }
            else{
                $query = "UPDATE user SET fullname='$data[name]',username='$data[username]', email='$data[email]',  password='$data[password]',qyteti='$data[qyteti]',fshati='$data[fshati]', zipkodi='$data[zipkodi]',roli='$data[roli]',profili='$data[pathi]' WHERE id='$data[id] '";
                
            }   
            if ($sql = $this->conn->query($query)) {
                return true;
            }else{
                return false;
            }
        }


        public function editPost($id){
 
            $data = null;
 
            $query = "SELECT * FROM post WHERE id = '$id'";
            if ($sql = $this->conn->query($query)) {
                while($row = $sql->fetch_assoc()){
                    $data = $row;
                }
            }
            return $data;
        }

        public function updatePost($data){
               
            $query = "UPDATE `post` SET `year` ='$data[year]',`content`='$data[content]' WHERE `id`='$data[id]'";
            
            if ($sql = $this->conn->query($query)) {
                return true;
            }else{
                return false;
            }
        }

        public function editTrophy($id){
 
            $data = null;
 
            $query = "SELECT * FROM trophy WHERE id = '$id'";
            if ($sql = $this->conn->query($query)) {
                while($row = $sql->fetch_assoc()){
                    $data = $row;
                }
            }
            return $data;
        }


        public function updateTrophy($data){ 
            if($data['imageTROPHY'] == null){
                $query = "UPDATE trophy SET trophy_name='$data[trophy_name]',trophy_place='$data[trophy_place]', trophy_prizepool='$data[trophy_prizepool]' WHERE id='$data[id] '";
            }
            else{
                
                $query = "UPDATE trophy SET trophy_name='$data[trophy_name]',trophy_place='$data[trophy_place]', trophy_prizepool='$data[trophy_prizepool]',  trophy_img='$data[trophy_img]' WHERE id='$data[id] '";
                
            }   
            if ($sql = $this->conn->query($query)) {
                return true;
            }else{
                return false;
            }
        }


        public function editSlider($id){
 
            $data = null;
 
            $query = "SELECT * FROM sliderimg WHERE id = '$id'";
            if ($sql = $this->conn->query($query)) {
                while($row = $sql->fetch_assoc()){
                    $data = $row;
                }
            }
            return $data;
        }


        public function updateSlider($data){
            $query = "UPDATE sliderimg SET imgpath='$data[pathi]' WHERE id='$data[id] '";
            
            if ($sql = $this->conn->query($query)) {
                return true;
            }else{
                return false;
            }
        }
    }
?>