

<?php

class Pages extends Controller {
    private $productModule;
    public function __construct() {
        $this->productModule = $this->model('Product');

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
        $getProduct = $this->productModule->getProduct();
            

        $data = [
            'Product' => $getProduct,
        ];

        $this->view('allPages/New_arrival',$data);
    }
    public function contact() {
        $this->view('allPages/contact');
    }


}


