<?php 

class Register extends Controller {
    public function index() {

        $data['title'] = 'Halaman Registrasi';

        $this->view('components/header');
        $this->view('register/index');
        $this->view('components/footer');
    }
}
