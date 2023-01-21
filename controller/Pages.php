<?php 

    require './core/BaseController.php';

    class Pages extends BaseController{

        public function __construct() {
            
        }


        public function index() {

            $this->view('main');

        }

        public function login() {
            $this->view('login');
        }

        public function dashboard(){
            $this->view("dashboard");
        }
        

    }
