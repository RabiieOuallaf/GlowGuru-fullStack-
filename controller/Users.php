<?php

    require_once '../core/BaseController.php';


    class Users extends BaseController{

        private $userModel;

        public function __construct(){

            $this->userModel = $this->model('User');
        }


        public function Login(){
            
            // Filtring the data 

            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);


            $data = [

                "Email" => $_POST['Email'],
                "Password" => $_POST['Password']

            ];
                
            // Check if the request method is post 

            if($_SERVER['REQUEST_METHOD'] == 'POST'){

                // Filtring the data 

                $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);


                $data = [

                    "Email" => $_POST['Email'],
                    "Password" => $_POST['Password']
    
                ];

                // Handling unwanted cases 

                if( empty($data["Email"]) || empty($data["Password"])){

                    header("location: /index.php");
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

        
    }

    public function createSession($user){

        $_SESSION['Email'] = $user->admin_email;
        header("location: localhost:8080/index");
        exit();
    }

}

    $init = new Users;

    switch($_POST['type']){

        case 'login':

            $init->Login();
            break;

    }