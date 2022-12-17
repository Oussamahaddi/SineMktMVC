

<?php

    class Dashboard extends Controller {

        private $productModule;
        private $stateModule;
        public function __construct() {
            if (!isLoggedIn()) {
                redirect('Authentification/login');
            }
            $this->productModule = $this->model('Product');
        }

        public function Statistique() {
            // get state
            $admin = $this->productModule->getAdmins();
            $product = $this->productModule->getProductRow();

            
            $data = [
                'admin' => $admin,
                'product' => $product
            ];
            $this->view('Dash/Statistique', $data);
        }
        
        public function New_Arrival() {
            // $this->productModule = $this->model('Product');
            // get product
            $getProduct = $this->productModule->getProduct();
            

            $data = [
                'Product' => $getProduct,
            ];

            $this->view('Dash/New_Arrival', $data);
        }
        public function features() {
            $this->view('Dash/Features');
        }
        public function blog() {
            $this->view('Dash/Blog');
        }

        public function add() {

            if ($_SERVER['REQUEST_METHOD'] == 'POST') {

                $img = $_FILES['ProductImage']['tmp_name'];
                // move_uploaded_file($img, URLROOT . '/img/upload/');
                $productName = $_POST['ProductName'];
                $productPrice = $_POST['ProductPrice'];

                $setProduct = $this->productModule->setProduct($img, $productName, $productPrice); 

                $data = [
                    'setProduct' => $setProduct,
                ];
            }

            $this->view('Dash/add', $data);
        }

    }