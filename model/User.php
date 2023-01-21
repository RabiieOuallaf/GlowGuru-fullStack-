<?php 

    require_once '../core/Database.php';
    require_once '../config/config.php';
    require_once '../helpers/url_helpers.php';

    class User {

        private $db;

        public function __construct(){
            $this->db = new Database;
        }

       

        public function Login($email, $password){

            $this->db->query("SELECT * FROM admin WHERE admin_email = :email AND admin_password = :pwd");
            $this->db->bind(':email', $email);
            $this->db->bind(':pwd', $password);

            $row = $this->db->single();
        
            $admin_pwd = $row->admin_password;

            if($password == $admin_pwd){
                return $row;
            } else {
                return false;
            }
        }

        // Find user by email 

        public function findUserByEmail($email) {

            $this->db->query("SELECT * FROM admin WHERE admin_email = :email");
            $this->db->bind(':email', $email);

            $row = $this->db->single();

            // Check rows 

            if($this->db->rowCount() > 0){

                return $row;

            }else {
                return false;
            }
        }

    }