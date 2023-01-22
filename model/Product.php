<?php 

    require_once '../core/database.php';
    require_once '../config/config.php';
    require_once '../helpers/url_helpers.php';

    class Product{

        protected $db;

        public function __construct() {
            $this->db = new Database;
        }

        public function AddProduct($Pname, $Pprice, $Pdescription, $Pimage) {

            $sql = "INSERT INTO products(product_name,product_price,product_description,product_image) VALUES (:productName, :productPrice, :productDescription, :productImage)";
            $this->db->query($sql);
            $this->db->bind(":productName", $Pname);
            $this->db->bind(":productPrice", $Pprice);
            $this->db->bind(":productDescription", $Pdescription);
            $this->db->bind(":productImage", $Pimage);

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

            if($this->db->execute()){
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
        
    }