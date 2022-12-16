

<?php

    class Dashboard extends Controller {

        private $productModule;
        public function __construct() {
            if (!isLoggedIn()) {
                redirect('Authentification/login');
            }
            $this->productModule = $this->model('Product');
        }

        public function Statistique() {
            $this->view('Dashboard/Statistique');
        }
        public function New_Arrival() {
            // $this->productModule = $this->model('Product');
            // get product
            $product = $this->productModule->getProduct();

            $data = [
                'Product' => $product
            ];

            $this->view('Dashboard/New_Arrival', $data);
        }
        public function features() {
            $this->view('Dashboard/Features');
        }
        public function blog() {
            $this->view('Dashboard/Blog');
        }
    }