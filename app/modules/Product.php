

<?php

    class Product {

        private $db;
        public function __construct() {
            $this->db = new Database;
        }

        public function setProduct($title, $price, $img) {

            $image_name = $_FILES['ProductImage']['name'];
            $image_tmp = $_FILES['ProductImage']['tmp_name'];
            $image_extension = pathinfo($image_name, PATHINFO_EXTENSION);
            $image_str_lower = strtolower($image_extension);
            $new_image_name = uniqid("IMG-", true).'.'.$image_str_lower;
            $image_upload_path = '../../upload/'.$new_image_name;
            move_uploaded_file($image_tmp, $image_upload_path);
            
            $sql = "INSERT INTO `new_arrival`(`Image`, `Title`, `Price`)
                                VALUES (:img, :title, :price)";
            $this->db->query($sql);
            $this->db->bind(':img', $img);
            $this->db->bind(':title', $title);
            $this->db->bind(':price', $price);

            return $this->db->execute();
        } 
    }