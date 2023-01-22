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
        
    }