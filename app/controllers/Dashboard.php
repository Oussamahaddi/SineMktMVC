

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
            // load view with statistique of admin and product from data
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

                // get file image and move it into new folder
                $image_name = $_FILES['ProductImage']['name'];
                $image_tmp = $_FILES['ProductImage']['tmp_name'];
                move_uploaded_file($image_tmp, 'img/upload/' . $image_name);

                $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
                // init data
                $data = [
                    'Image' => trim($image_name),
                    'Title' => trim($_POST['ProductName']),
                    'Price' => trim($_POST['ProductPrice']),
                    'Image_err' => '',
                    'Title_err' => '',
                    'Price_err' => ''
                ];

                // validate data
                if (empty($data['Image'])) {
                    $data['Image_err'] = 'Please enter Product Image';
                }
                if (empty($data['Title'])) {
                    $data['Title_err'] = 'Please enter Product Title';
                }
                if (empty($data['Price'])) {
                    $data['Price_err'] = 'Please enter Product Price';
                }

                // check if there is no erreur
                if (empty($data['Image_err']) && empty($data['Title_err']) && empty($data['Price_err'])) {
                    // check for validate email
                    if ($this->productModule->setProduct($data)) {
                        redirect('Dashboard/New_arrival');
                    } else {
                        die("Something wrong abro");
                    }
                } else {
                    // load view page width error
                    $this->view('Dash/add', $data);
                }
            } else {
                // init data
                $data = [
                    'Image' => '',
                    'Title' => '',
                    'Price' => '',
                    'Image_err' => '',
                    'Title_err' => '',
                    'Price_err' => ''
                ];

                // load view
                $this->view('Dash/add', $data);
            }

        }

        public function edit($id) {

            if ($_SERVER['REQUEST_METHOD'] == 'POST') {

                // get file image and move it into new folder
                $image_name = $_FILES['ProductImage']['name'];
                $image_tmp = $_FILES['ProductImage']['tmp_name'];
                move_uploaded_file($image_tmp, 'img/upload/' . $image_name);

                $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

                $productId = $this->productModule->getProductById($id);

                

                if (!empty($data['Image'])) {
                    // update data
                    $data = [
                        'Id' => $productId->Id,
                        'Image' => trim($image_name),
                        'Title' => trim($_POST['ProductName']),
                        'Price' => trim($_POST['ProductPrice']),
                        'Image_err' => '',
                        'Title_err' => '',
                        'Price_err' => ''
                    ];
                } else {
                    // update data
                    $data = [
                        'Id' => $productId->Id,
                        'Image' => $productId->Image,
                        'Title' => trim($_POST['ProductName']),
                        'Price' => trim($_POST['ProductPrice']),
                        'Image_err' => '',
                        'Title_err' => '',
                        'Price_err' => ''
                    ];
                }

                // validate data
                if (empty($data['Title'])) {
                    $data['Title_err'] = 'Please enter Product Title';
                }
                if (empty($data['Price'])) {
                    $data['Price_err'] = 'Please enter Product Price';
                }

                // check if there is no erreur
                if (empty($data['Title_err']) && empty($data['Price_err'])) {
                    // check for validate email
                    if ($this->productModule->updateProduct($data)) {
                        redirect('Dashboard/New_arrival');
                    } else {
                        die("Something wrong abro");
                    }
                } else {
                    // load view page width error
                    $this->view('Dash/edit', $data);
                }
            } else {

                $productId = $this->productModule->getProductById($id);

                // init data
                $data = [
                    'Id' => $productId->Id,
                    'Image' => $productId->Image,
                    'Title' => $productId->Title,
                    'Price' => $productId->Price,
                    'Image_err' => '',
                    'Title_err' => '',
                    'Price_err' => ''
                ];

                // load view
                $this->view('Dash/edit', $data);
            }

        }

        public function delete($id) {

            if ($this->productModule->deleteProduct($id)) {
                redirect('Dashboard/New_Arrival');
            } else {
                die('Ops something wrong');
            }

        }

    }