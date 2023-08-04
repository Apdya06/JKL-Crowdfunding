<?php 

class Home extends Controller {
    public function index() {

        /* Isi Konten*/
        // $data['projects'] = $this->model('projects')->showAllProjects();

        $this->view('components/header');
        $this->view('home/index');
        $this->view('components/footer');
    }
}