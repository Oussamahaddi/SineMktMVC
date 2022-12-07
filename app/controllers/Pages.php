

<?php

class Pages extends Controller {

    public function __construct() {
        
    }
    public function index() {
        $this->view('index');
    }
    public function blog() {
        $this->view('blog');
    }
    public function feature() {
        $this->view('feature');
    }
    public function New_Arrival() {
        $this->view('New_arrival');
    }
    public function contact() {
        $this->view('contact');
    }

}


