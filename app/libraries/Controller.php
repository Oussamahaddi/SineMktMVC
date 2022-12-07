
<?php

// load modeles and views

class Controller {
    // load model
    public function model($model) {
        // require model file
        require_once '../app/modules/' . $model .'.php';
        // instatiate model
        return new $model();
    }

    // load view
    public function view($view, $data = []) {
        // check for view file
        if (file_exists('../app/views/Pages/' . $view . '.php')) {
            require_once '../app/views/Pages/' . $view . '.php';
        } else {
            die('view file dosent existe!!!!!!!!');
        }
    }
}