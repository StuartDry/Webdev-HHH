<?php
class User {
    public function __construct(){

    }

    public function register($email = '', $first_name, $prefix, $last_name, $phonenumber, $newsletter, $password = ''){
        // Password hash
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        $db = Database::getInstance();
        $conn = $db->getConnection();
        $sql = 'INSERT INTO user (email, first_name, prefix, last_name, phonenumber, newsletter, password) VALUES (
    "'.$conn->real_escape_string($email).'", "'.$conn->real_escape_string($first_name).'", 
    "'.$conn->real_escape_string($prefix).'", 
    "'.$conn->real_escape_string($last_name).'", 
    "'.$conn->real_escape_string($phonenumber).'", 
    "'.$newsletter.'",
    "'.$hashed_password.'")';
        if ($conn->query ($sql)) {
            $_SESSION['email']=$email;
            return $conn->insert_id;
        }

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

    //TODO na wijzigen gegevens moet de sessie nog vernieuwd worden, anders oude info in de sessie
    public function editUser($userID, $first_name, $prefix, $last_name, $email, $phonenumber, $newsletter){
        $db = Database::getInstance();
        $conn = $db->getConnection();

        $sql = 'UPDATE user SET first_name="'.$conn->real_escape_string($first_name).'", 
        prefix="'.$conn->real_escape_string($prefix).'", 
        last_name="'.$conn->real_escape_string($last_name).'", 
        email="'.$conn->real_escape_string($email).'", 
        phonenumber="'.$conn->real_escape_string($phonenumber).'", 
        newsletter="'.$conn->real_escape_string($newsletter).'" WHERE userID="'.$conn->real_escape_string($userID).'"';

        if (!$conn->query ($sql)) {
            echo("Error description: " . mysqli_error($conn));
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