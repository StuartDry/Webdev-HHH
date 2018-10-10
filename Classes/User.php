<?php
class User {
    public function __construct(){

    }

    public function register($name = '', $email = '', $password = ''){
        // Password hash
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        $db = Database::getInstance();
        $conn = $db->getConnection();
        $sql = 'INSERT INTO user (email, password) VALUES (
    "'.$conn->real_escape_string($name).'",
    "'.$conn->real_escape_string($email).'",
    "'.$hashed_password.'", NOW()
    )';
        if ($conn->query ($sql))
            return $conn ->insert_id;
        return false;
    }

    public function login ( $email = '', $password = '') {
        $db = Database::getInstance();
        $conn = $db->getConnection();

        $sql = 'SELECT * FROM user WHERE email = "' . $conn->real_escape_string( trim($email)) .'"';
        $result = $conn->query($sql);
        $user_row = $result->fetch_assoc();

        if($user_row === null)
            return false;

        if( password_verify($password, $user_row['password'])) {
            $_SESSION['user'] = $user_row;
            return true;
        }

        return false;

    }
    public function logout(){
        unset( $_SESSION['user']);
        return true;
    }

    public function isLoggedIn(){
        return isset ( $_SESSION['user']);
    }
}
?>