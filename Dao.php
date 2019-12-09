<?php 
    class dao {
        private $host = "us-cdbr-iron-east-05.cleardb.net";
        private $db = "heroku_329aabc7db7cafd";
        private $user = "b56f33e5b75dc1";
        private $pass = "118aefa8";
        private $hash = "1024940";
        private $conn;

        public function __construct(){
            $this->conn = $this->getConnection();
        }

        public function getConnection() {
            try{
                return new mysqli($this->host,$this->user,$this->pass, $this->db);
            }
            catch(PDOException $e){
                echo $e->getMessage();
                die("connection failed"); 
            }
        }

        public function addNewUser($username, $password){
            $stmt = "SELECT username FROM User WHERE username = ?";
            $password = hash("sha256", $password);
            $preparedstmt = $this->conn->prepare($stmt);
            $preparedstmt->bind_param("s", $username);
            $preparedstmt->bind_result($outcome);
            $preparedstmt->execute();
            $preparedstmt->fetch();
            if($outcome != NULL){
                return "False";
            } else {
                $preparedstmt->close();
                $stmt = "INSERT INTO User (username, pass) VALUES(?, ?)";
                $preparedstmt = $this->conn->prepare($stmt);
                $preparedstmt->bind_param("ss", $username, $password);
                $preparedstmt->execute();
                $preparedstmt->close();
                return "True";
            }
        }
        public function updateFoodChoice($username, $food){
            $stmt = "UPDATE user SET food = ? where username = ?";
            $preparedstmt = $this->conn->prepare($stmt);
            $preparedstmt->bind_param("ss", $food, $username);
            $preparedstmt->execute();
        }
        public function getFoodChoice($username){
            $stmt = "SELECT food FROM User WHERE username = ?";
            $preparedstmt = $this->conn->prepare($stmt);
            $preparedstmt->bind_param("s", $username);
            $preparedstmt->bind_result($outcome);
            $preparedstmt->execute();
            $preparedstmt->fetch();
            return $outcome;
        }
        public function validateLogin($username, $password){
            $password = hash("sha256", $password);
            $stmt = "SELECT username FROM User WHERE username = ? AND pass = ?";
            $preparedstmt = $this->conn->prepare($stmt);
            $preparedstmt->bind_param("ss", $username, $password);
            $preparedstmt->bind_result($outcome);
            $preparedstmt->execute();
            $preparedstmt->fetch();
            if($outcome == NULL){
                $preparedstmt->close();
                return "False";
            }
            $preparedstmt->close();
            return "True";
        }
    }
?>