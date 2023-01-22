<?php 

    require_once "../core/baseController.php";

    class Products extends BaseController {

        protected $productModel;

        public function __construct() {

            $this->productModel = $this->model("Product");

        }

        public function addProduct() {

            $data = [

                "productName" => $_POST['productName'],
                "productPrice" => $_POST['productPrice'],
                "productDescription" => $_POST['productDescription'],
                "productImage" => $_POST['productImage']

            ];

            if(empty($data["productName"]) || empty($data["productPrice"]) || empty($data["productDescription"] || empty($data["productImage"]))){

                redirect("/dashbaord");
                die("Please fill all inputs");

            }

            $productAdded = $this->productModel->AddProduct($data["productName"],$data["productPrice"],$data["productDescription"],$data["productImage"]);

            if($productAdded){

                redirect("/dashboard");

            }else{
                
                echo "t2kd tani :) ";
            }



        }

        
    }