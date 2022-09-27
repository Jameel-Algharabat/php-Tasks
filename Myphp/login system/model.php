
<?php 
    Class Model{
 
        private $server = "localhost";
        private $username = "root";
        private $password;
        private $db = "user_db";
        private $conn;
 
        public function __construct(){
            try {
                 
                $this->conn = new mysqli($this->server,$this->username,$this->password,$this->db);
            } catch (Exception $e) {
                echo "connection failed" . $e->getMessage();
            }
        }
 
        public function insert(){
 
            if (isset($_POST['submit'])) {
                if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['password_']) && isset($_POST['user_type'])) {
                    if (!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['password_']) && !empty($_POST['user_type']) ) {
                         
                        $name = $_POST['name'];
                        $password_ = $_POST['password_'];
                        $email = $_POST['email'];
                        $user_type = $_POST['user_type'];
 
                        $query = "INSERT INTO user_form (name,email,password_,user_type) VALUES ('$name','$email','$password_','$user_type')";
                        if ($sql = $this->conn->query($query)) {
                            echo "<script>alert('records added successfully');</script>";
                            echo "<script>window.location.href = 'admin_page.php';</script>";
                        }else{
                            echo "<script>alert('failed');</script>";
                            echo "<script>window.location.href = 'admin_page.php';</script>";
                        }
 
                    }else{
                        echo "<script>alert('empty');</script>";
                        echo "<script>window.location.href = 'admin_page.php';</script>";
                    }
                }
            }
        }
 
        public function fetch(){
            $data = null;
 
            $query = "SELECT * FROM user_form";
            if ($sql = $this->conn->query($query)) {
                while ($row = mysqli_fetch_assoc($sql)) {
                    $data[] = $row;
                }
            }
            return $data;
        }
 
        public function delete($id){
 
            $query = "DELETE FROM user_form where id = '$id'";
            if ($sql = $this->conn->query($query)) {
                return true;
            }else{
                return false;
            }
        }
 
        public function fetch_single($id){
 
            $data = null;
 
            $query = "SELECT * FROM user_form WHERE id = '$id'";
            if ($sql = $this->conn->query($query)) {
                while ($row = $sql->fetch_assoc()) {
                    $data = $row;
                }
            }
            return $data;
        }
 
        public function edit($id){
 
            $data = null;
 
            $query = "SELECT * FROM user_form WHERE id = '$id'";
            if ($sql = $this->conn->query($query)) {
                while($row = $sql->fetch_assoc()){
                    $data = $row;
                }
            }
            return $data;
        }
 
        public function update($data){
 
            $query = "UPDATE user_form SET name='$data[name]', email='$data[email]', password_='$data[password_]', user_type='$data[user_type]' WHERE id='$data[id] '";
 
            if ($sql = $this->conn->query($query)) {
                return true;
            }else{
                return false;
            }
        }
    }
 ?>