

<?php

    class Dashboard extends Controller {

        private $productModule;
        public function __construct() {
            $this->productModule = $this->model('Product');
        }

        public function Statistique() {
            $this->view('Dashboard/Statistique');
        }
        public function New_Arrival() {
            $this->productModule = $this->model('Product');

            $data = [
                'Title' => '',
                'Price' => '',
                'Image' => ''
            ];

            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $data = [
                    'Title' => $_POST['ProductName'],
                    'Price' => $_POST['ProductPrice'],
                    'Image' => $_FILES['ProductImage']['tmp_name']
                ];
            }
            $this->view('Dashboard/New_Arrival', $data);
        }
        public function features() {
            $this->view('Dashboard/Features');
        }
        public function blog() {
            $this->view('Dashboard/Blog');
        }
    }