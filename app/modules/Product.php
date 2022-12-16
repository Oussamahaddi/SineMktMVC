

<?php

    class Product {

        private $db;
        public function __construct() {
            $this->db = new Database;
        }

        public function setProduct($title, $price, $img) {

            $image_tmp = $_FILES['ProductImage']['tmp_name'];
            $image_upload_path = URLROOT .'/img/upload/' . $image_tmp;
            move_uploaded_file($image_tmp, $image_upload_path);
            
            $sql = "INSERT INTO `new_arrival`(`Image`, `Title`, `Price`)
                                VALUES (:img, :title, :price)";
            $this->db->query($sql);
            $this->db->bind(':img', $img);
            $this->db->bind(':title', $title);
            $this->db->bind(':price', $price);

            return $this->db->execute();
        } 

        public function getProduct() {
            
            $this->db->query("SELECT * FROM new_arrival");

            $result = $this->db->resultSet();

            return $result;
        }
    }