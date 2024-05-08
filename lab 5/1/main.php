<?php
    class Db{
        private $host = 'localhost';
        private $dbname = 'lab5';
        private $username= 'root';
        private $password = '';
        private $port = '3306';
        private $pdo;

        public function __construct(){
            $dsn = "mysql:host=$this->host;dbname=$this->dbname;port=$this->port;";
            $this->pdo = new PDO($dsn, $this->username, $this->password);
        }
        
        public function registerUser($user){
            $currentDate = date('Y-m-d');
            $sql = "INSERT INTO users (first_name, last_name, email, password, birth_date, address, phone_number, status, creation_date) 
            VALUES (:first_name, :last_name, :email, :password, :birth_date, :address, :phone_number, 'active', :creation_date)";
            
            $stmt = $this->pdo->prepare($sql);
            try{
                $stmt->execute([
                    ':first_name' => $user->getName(),
                    ':last_name' => $user->getLastName(),
                    ':email' => $user->getEmail(),
                    ':password' => $user->getPassword(),
                    ':birth_date' => $user->getBirthday(),
                    ':address' => $user->getAddress(),
                    ':phone_number' => $user->getPhoneNumber(),
                    ':creation_date' => $currentDate
                ]);
            }
            catch(PDOException $e){
                echo $e->getMessage();
            }
        }
        public function loginUser($email,$pass){
            $sql = "SELECT * FROM users WHERE email='$email' AND password='$pass'";
            $res = $this->pdo->query($sql);
            if($res->fetch() != false){
                return true;
            }
            else{
                return false;
            }
        }
        public function updateData($firstName,$secondName,$pass1,$pass2,$phone,$address,$date){
            session_start();
            $updateColumns = array();
            $email = $_SESSION['email'];
            if (!empty($firstName)) {
                $updateColumns[] = "first_name = :firstName";
            }
            if (!empty($secondName)) {
                $updateColumns[] = "second_name = :secondName";
            }
            if (!empty($pass1)) {
                $updateColumns[] = "password = :pass1";
            }
            if (!empty($address)) {
                $updateColumns[] = "address = :address";
            }
            if (!empty($phone)) {
                $updateColumns[] = "phone_number = :phone";
            }
            if (!empty($date)) {
                $updateColumns[] = "birth_date = :date";
            }
        
            $sql = "UPDATE users SET " . implode(", ", $updateColumns) . " WHERE email = :email";
        
            $stmt = $this->pdo->prepare($sql);
        
            if (!empty($firstName)) $stmt->bindParam(':firstName', $firstName);
            if (!empty($secondName)) $stmt->bindParam(':secondName', $secondName);
            if (!empty($pass1)) $stmt->bindParam(':password', $pass1);
            if (!empty($address)) $stmt->bindParam(':address', $address);
            if (!empty($phone)) $stmt->bindParam(':phone', $phone);
            if (!empty($date)) $stmt->bindParam(':date', $date);
            $stmt->bindParam(':email', $email);
        
            
            try {
                $stmt->execute();
                echo "Data updated successfully.";
            } catch (PDOException $e) {
                
                echo "Error: " . $e->getMessage();
            }
        }

        public function deleteUser(){
            session_start();
            $email = $_SESSION['email']; 
            $sql = "DELETE FROM users WHERE email = :email"; 
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindParam(':email', $email);
            
            try {
                $stmt->execute();
                session_unset();
                session_destroy();
                header("Location: login.php");
                exit();
            }
            catch (PDOException $e) {
                echo "Error: " . $e->getMessage();
            }
                
        }
    }
?>