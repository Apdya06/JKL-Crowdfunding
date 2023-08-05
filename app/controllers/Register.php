<?php 

class Register extends Controller {
    public function index() {

        $this->view('components/header');
        $this->view('register/index');
        $this->view('components/footer');
    }
}
