

<?php

class Pages extends Controller {

    public function __construct() {

    }
    public function index() {
        $data = [
            'title' => 'Hellow Oussama',
            'description' => 'my name is oussama haddi and i love js'
        ];
        $this->view('pages/index', $data);
    }
    public function about($id) {
        echo $id;
    }
}


