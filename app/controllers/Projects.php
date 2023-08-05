<?php 

class Projects extends Controller {
    public function index() {
        /* Isi Konten*/
        $data['title'] = 'Halaman Project';

        $this->view('components/header');
        $this->view('projects/index');
        $this->view('components/footer');
    }
}
