<?php

    require_once '../core/BaseController.php';


    class Users extends BaseController{

        protected $userModel;


        public function __construct(){            

            $this->userModel = $this->model('User');
        }

    
        // Filtring the data 

        
        public function Login(){

            

            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);


            $data = [

                "Email" => $_POST['Email'],
                "Password" => $_POST['Password']

            ];
            
        // Check if the request method is post 




            // Handling unwanted cases 

            if(empty($data["Email"]) || empty($data["Password"])){

                header("location: localhost:8080");
                die("Please fill all inputs");

            }

            $loggedInUser = $this->userModel->Login($data['Email'], $data['Password']);



            // Create session 

            if($loggedInUser){
                //Then the user is found :) 
                $this->createSession($loggedInUser);
                
            }else {
                die("User dose not exsits!");
            }

        }
    
    

    public function createSession($user){

        session_start();

        $_SESSION['Email'] = $user->admin_email;

        if($_SESSION['Email'] == "Rabie@gmail.com"){

            redirect("/index");

        }else {
            
            echo "done!";
        }

    }

}




