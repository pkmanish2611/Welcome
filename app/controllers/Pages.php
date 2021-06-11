<?php
class Pages extends Controller {
    public function __construct() {
        //$this->userModel = $this->model('User');
    }

    public function Welcome() {
        $data['page_title']= "Welcome";

        $this->view('Welcome',$data);
    }
}
