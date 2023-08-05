<?php 

class Home extends Controller {
    public function index() {

        $data['title'] = 'Beranda';
        $data['projects'] = $this->model('projectsModel')->showAllProjects();

        $this->view('components/header');
        $this->view('home/index', $data);
        $this->view('components/footer');
    }
}   
