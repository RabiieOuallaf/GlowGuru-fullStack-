<?php 

    if(file_exists("../core/database.php")){
        require_once '../core/database.php';
        require_once '../config/config.php';
        require_once '../helpers/url_helpers.php';
        require_once "../core/database.php";
    }else {
        require_once 'core/database.php';
        require_once 'config/config.php';
        require_once 'helpers/url_helpers.php';
        require_once "core/database.php";
    } 

    


    class Product{

        protected $db;

        public function __construct() {
            $this->db = new Database();
        }

        public function AddProduct($data) {

            $sql = "INSERT INTO products(product_name,product_price,product_description,product_image) VALUES (:productName, :productPrice, :productDescription, :productImage)";
            $this->db->query($sql);
            $this->db->bind(":productName", $data["productName"]);
            $this->db->bind(":productPrice", $data["productPrice"]);
            $this->db->bind(":productDescription", $data["productDescription"]);
            $this->db->bind(":productImage", $data["productImage"]);

            $row = $this->db->execute();

            if($row) {

                return $row;

            }else {

                return false;

            }
        }

        
        public function updateProduct($id, $name, $price, $description, $picture){

            $this->db->query("UPDATE products SET product_name = :name ,product_price = :price, product_description = :description, product_image = :picture WHERE product_id = :id" );

            $this->db->bind(":id", $id);

            $this->db->bind(":name" , $name);

            $this->db->bind(":price" , $price);

            $this->db->bind(":description" , $description);
            
            $this->db->bind(":picture" , $picture);

            $updated = $this->db->execute();

            if($updated){
                return true;
            }else {
                return false;
            }

            
        }

        public function deleteProduct($id) {
            $delete = $this->db->query("DELETE FROM products WHERE product_id = :id");
            $this->db->bind(":id", $id);
            $this->db->execute();
            
            if($delete){
                return true;
            }else {
                return false;
            }
            

        }

        public function DisplayProducts(){

            $sql = "SELECT * FROM products";
            return $this->db->multiple($sql);

        }

        public function countProducts(){

            $sql = "SELECT * FROM products;";
            $this->db->query($sql);
            $this->db->execute();
            return $this->db->rowCount();
            

        }
        
    }