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
                    return;
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
            }

            else{
                    //echo "<script>alert('Rigjistrimi i sliderit nuk u be');</script>";
                    //echo "<script>window.location.href = 'trofet.php';</script>";
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


 
        public function delete($id){
 
            $query = "DELETE FROM user where id = '$id'";
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
 
            $query = "UPDATE user SET fullname='$data[name]',username='$data[username]', email='$data[email]',  password='$data[address]' WHERE id='$data[id] '";
 
            if ($sql = $this->conn->query($query)) {
                return true;
            }else{
                return false;
            }
        }
    }
?>