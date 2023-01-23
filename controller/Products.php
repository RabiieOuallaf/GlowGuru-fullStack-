<?php 

    if(file_exists("../core/baseController.php")){
        
        require_once "../core/baseController.php";

    }else {
        require_once "core/baseController.php";

    }

    if(file_exists("../model/Product.php")){
        
        require_once "../model/Product.php";

    }else {
        require_once "model/Product.php";

    }
    class Products extends BaseController {

        protected $productModel;

        public function __construct() {

            $this->productModel = new Product();

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

        public function updateProduct() {

            // Fetch data
            $productId = (int)trim($_POST['ProductID']);
            $productName = trim($_POST['ProductName']);
            $ProductPrice = trim($_POST['ProductPrice']);
            $ProductDescription = trim($_POST['ProductDescription']);
            $ProductImage = trim($_POST['ProductImage']);



            if($this->productModel->updateProduct($productId,$productName,$ProductPrice,$ProductDescription,$ProductImage)){
            }else {
                die('something went wrong tani');
            }

       }

       public function deleteProduct() { 

        // Fetch data
            $productId = (int)trim($_POST['productid']);

            if(!$this->productModel->deleteProduct($productId)){
                redirect("/dashbaord");
            }else {
                die('something went wrong akha');
            }
        }

        public function displayProducts() {

            $this->productModel = new Product();
            return $this->productModel->DisplayProducts();
    
        }

        
    }

    $init = new Products();

    $init->addProduct();