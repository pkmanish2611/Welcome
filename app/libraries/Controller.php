<?php
    //Load the model and the view
    class Controller {
        public function model($model) {
            //Require model file
            require_once '../app/models/' . $model . '.php';
            //Instantiate model
            return new $model();
        }

        //Load the view (checks for the file)
        public function view($view) {
            if (file_exists('../app/views/pages/' . $view . '.php')) {
                require_once '../app/views/pages/' . $view . '.php'; 
            } else {
                include '../app/views/pages/404.php'; 
            }
        }
    }
