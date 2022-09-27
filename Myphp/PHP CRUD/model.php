<?php 
    Class Model{
        private $server = "localhost";
        private $username = "root";
        private $password;
        private $db = "testingdb";
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
                if (isset($_POST['name'])  && isset($_POST['Salary']) && isset($_POST['address']) && isset($_POST['image'])) {
                    if (!empty($_POST['name'])  && !empty($_POST['Salary']) && !empty($_POST['address']) && !empty($_POST['image']) ) {
                    
                        $name = $_POST['name'];
                        $Salary = $_POST['Salary'];
                        $image = $_POST['image'];
                        $address = $_POST['address'];

                        $query = "INSERT INTO user_tbl (name,Salary,address,image) VALUES ('$name','$Salary','$address','$image')";
                        if ($sql = $this->conn->query($query)) {
                            echo "<script>alert('records added successfully');</script>";
                            echo "<script>window.location.href = 'index.php';</script>";
                        }else{
                            echo "<script>alert('failed');</script>";
                            echo "<script>window.location.href = 'index.php';</script>";
                        }

                    }else{
                        echo "<script>alert('empty');</script>";
                        echo "<script>window.location.href = 'index.php';</script>";
                    }
                }
            }
        }

        public function fetch(){
            $data = null;

            $query = "SELECT * FROM user_tbl";
            if ($sql = $this->conn->query($query)) {
                while ($row = mysqli_fetch_assoc($sql)) {
                    $data[] = $row;
                }
            }
            return $data;
        }
        public function delete($id){
            $query = "DELETE FROM user_tbl where id = '$id'";
            if ($sql = $this->conn->query($query)) {
                return true;
            }else{
                return false;
            }
        }

        public function fetch_single($id){

            $data = null;

            $query = "SELECT * FROM user_tbl WHERE id = '$id'";
            if ($sql = $this->conn->query($query)) {
                while ($row = $sql->fetch_assoc()) {
                    $data = $row;
                }
            }
            return $data;
        }

        public function edit($id){

            $data = null;

            $query = "SELECT * FROM user_tbl WHERE id = '$id'";
            if ($sql = $this->conn->query($query)) {
                while($row = $sql->fetch_assoc()){
                    $data = $row;
                }
            }
            return $data;
        }

        public function update($data){

            $query = "UPDATE user_tbl SET name='$data[name]', Salary='$data[Salary]', address='$data[address]' , image='$data[image]' WHERE id='$data[id] '";

            if ($sql = $this->conn->query($query)) {
                return true;
            }else{
                return false;
            }
        }
    }
?>
<?php


$conn=mysqli_connect("localhost","root","", "testingdb");

if(isset($_POST['submit'])){
    $username=stripslashes($_POST['name']);
    //this is the name of the image that will be saved in the database
    $image=time() . '-' . $_FILES['image'];

    //upload the image to a specific folder first and this folder for example called (images)

    $target_dir="images/*";
    $target_file=$target_dir . basename($image);

    //now move the image to the folder (images)

    // move_uploaded_file($_FILES['image']['tmp_name'], $target_file);

    //now let we upload the image to the database

    if(move_uploaded_file($_FILES['image']['tmp_name'], $target_file)){
        $sql="INSERT INTO user_tbl SET name='$data[name]', Salary='$data[Salary]', address='$data[address]' , image='$data[image]' WHERE id='$data[id] '";
//if the data has been saved in the database , redirect the user to the main page
        if(mysqli_query($conn, $sql)){
            header('location:index.php');
        }
    }
}



//let we select all the profiles from the database 

$results=mysqli_query($conn, "SELECT * FROM user_tbl");
$user=mysqli_fetch_all($results, MYSQLI_ASSOC);



?>