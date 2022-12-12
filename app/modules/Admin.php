

<?php

    class Admin {

        private $db;

        public function __construct() {
            $this->db = new Database();
        }

        public function checkAdmin($email) {
            $this->db->query("SELECT * FROM admins WHERE Email = :email");
            $this->db->bind(":email", $email);
            $row = $this->db->single();

            // check row
            if ($this->db->rowCount() > 0) {
                return true;
            } else {
                return false;
            }
        }
    }