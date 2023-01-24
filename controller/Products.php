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

            // $data = [

            //     "productName" => $_POST['productName'],
            //     "productPrice" => $_POST['productPrice'],
            //     "productDescription" => $_POST['productDescription'],
            //     "productImage" => $_POST['productImage']

            // ];

            // if(empty($data["productName"]) || empty($data["productPrice"]) || empty($data["productDescription"] || empty($data["productImage"]))){

            //     redirect("/dashbaord");
            //     die("Please fill all inputs");

            // }

            // $productAdded = $this->productModel->AddProduct($data["productName"],$data["productPrice"],$data["productDescription"],$data["productImage"]);

            // if($productAdded){

            //     redirect("/dashboard");

            // }else{

            //     echo "t2kd tani :) ";
            // }


            $count = count($_POST['productName']);

            for ($i = 0; $i < $count; $i++) {
                // sanitize post data
                $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_FULL_SPECIAL_CHARS); 
                // init data

                $data = [

                    "productName" => $_POST['productName'][$i],
                    "productPrice" => $_POST['productPrice'][$i],
                    "productDescription" => $_POST['productDescription'][$i],
                    "productImage" => $_POST['productImage'][$i],
                    "productQuantity" => $_POST['product_quantity'][$i]
      

                ];

                
                $addPoruct = $this->productModel->addProduct($data);

                if ($addPoruct) {
                    // redirect to product paaddge
                    redirect('/dashboard');
                } else {
                    die('something went wrong');
                }
                



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
                redirect("/dashboard");
            }else {
                die('something went wrong tani');
            }

       }

       public function deleteProduct() { 

        // Fetch data
            $productId = (int)trim($_POST['productid']);

            if(!$this->productModel->deleteProduct($productId)){
                redirect("/dashboard");
            }else {
                die('something went wrong akha');
            }
        }

        public function displayProducts() {

            
            return $this->productModel->DisplayProducts();
    
        }

        public function countPorducts(){
            
            return $this->productModel->countProducts();

        }

        
    }

    $init = new Products;

    if($_SERVER["REQUEST_METHOD"] == "POST"){

        switch($_POST["type"]){

            case "add": 
    
                $init->addProduct();
                break;
            case "delete":
                $init->deleteProduct();
                break;
    
            case 'update':
                $init->updateProduct();
                break;
        }

    }

    