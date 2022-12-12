

<?php

    class Authentification extends Controller {
        public function __contruct() {
            $this->admModule = $this->model('Admin');
        }

        public function login() {
            // check for post
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                // process form
                // sanitize post data
                $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
                // init data
                $data = [
                    'Email' => trim($_POST['Email']),
                    'Password' => trim($_POST['Password']),
                    'Email_err' => '',
                    'Password_err' => ''
                ];

                // validate email
                if (empty($data['Email'])) {
                    $data['Email_err'] = 'Please enter email';
                } else {
                    // check if admin already existe
                    // if ($this->admModule->checkAdmin($data['Email'])) {
                    //     $this->view('Dashboard/Statistique');
                    // } else {
                    //     $data['Email_err'] = 'This email dosent existe';
                    // }
                }

                // validate password
                if (empty($data['Password'])) {
                    $data['Password_err'] = 'Please enter password';
                }

                // check if there is no erreur
                if (empty($data['Email_err']) && empty($data['Password_err'])) {
                    $this->view('Dashboard/Statistique');
                } else {
                    // load view page width error
                    $this->view('log/login', $data);
                }


            } else {
                // init data
                $data = [
                    'Email' => '',
                    'Password' => '',
                    'Email_err' => '',
                    'Password_err' => ''
                ];

                // load view
                $this->view('log/login', $data);
            }
        }
    }

?>