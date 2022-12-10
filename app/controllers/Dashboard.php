

<?php

    class Dashboard extends Controller {
        
        public function __construct() {

        }

        public function dashboard() {
            $this->view('dashboard/Dashboard');
        }
    }