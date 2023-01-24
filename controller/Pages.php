<?php 

    require './core/BaseController.php';

    class Pages extends BaseController{

        public function __construct() {
            
        }


        public function index() {

            $this->view('main');

        }

        public function admin() {

            $this->view('login');

        }

        public function dashboard(){

            $this->view("dashboard");

        }

        public function updatePage() {
            $this->view("updatePage");
        }

        public function addPage(){

            $this->view("addPage");

        }
        public function shop() {
            $this->view("shop");
        }
        
        

    }
