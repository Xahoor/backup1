<?php
class Login{
    var $db;
    public function __construct($conn)
    {
        $this->db = $conn;
    }

    public function admin_login($data)
    {
        try {

            extract($data);

            // header('location: test.php');
            $sql = "select * from admin where email = :email and password = :password";

            $statment = $this->db->prepare($sql);

            $statment->execute([':email' => $email,':password' => $password]);

            $check = $statment->fetch(PDO::FETCH_ASSOC);

            if(!$check){
                return false;
            }else{
                session_start();
                $_SESSION['admin'] = $check;
                return true;
            }

        } catch (\Throwable $th) {
            throw $th;
        }
    }


}
?>