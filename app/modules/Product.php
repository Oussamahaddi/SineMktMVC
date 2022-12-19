

<?php

    class Product {

        private $db;
        public function __construct() {
            $this->db = new Database;
        }

        public function setProduct($data) {
            
            $sql = "INSERT INTO `new_arrival`(`Image`, `Title`, `Price`)
                                VALUES (:img, :title, :price)";
            $this->db->query($sql);
            $this->db->bind(':img', $data['Image']);
            $this->db->bind(':title', $data['Title']);
            $this->db->bind(':price', $data['Price']);

            if ($this->db->execute()) {
                return true;
            } else {
                return false;
            }
        } 

        public function getProduct() {
            
            $this->db->query("SELECT * FROM new_arrival");

            $result = $this->db->resultSet();

            return $result;
        }

        public function getAdmins() {
            $this->db->query('SELECT * FROM admins');

            $row = $this->db->resultSet();

            return $this->db->rowCount();
        }

        public function getProductRow() {
            $this->db->query('SELECT * FROM new_arrival');

            $row = $this->db->resultSet();

            return $this->db->rowCount();
        }

    }