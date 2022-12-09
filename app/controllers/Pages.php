

<?php

class Pages extends Controller {
    public function __construct() {

    }
    public function index() {
        $this->view('allPages/index');
    }
    public function blog() {
        $this->view('allPages/blog');
    }
    public function feature() {
        $this->view('allPages/feature');
    }
    public function New_Arrival() {
        $this->view('allPages/New_arrival');
    }
    public function contact() {
        $this->view('allPages/contact');
    }


}


