

<?php

    class Dashboard extends Controller {
        
        public function __construct() {

        }

        public function Statistique() {
            $this->view('Dashboard/Statistique');
        }
        public function New_Arrival() {
            $this->view('Dashboard/New_Arrival');
        }
        public function features() {
            $this->view('Dashboard/Features');
        }
        public function blog() {
            $this->view('Dashboard/Blog');
        }
    }