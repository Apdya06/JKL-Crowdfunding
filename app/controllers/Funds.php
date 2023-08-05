<?php 

class Funds extends Controller {
    public function index() {

        $data['title'] = 'Halaman Donasi';
        $data['projects'] = $this->model('projectsModel')->showAllProjects();
        $data['funds'] = $this->model('fundsModel')->sendDonations($data['projects']);

        $this->view('components/header');
        $this->view('funds/index', $data);
        $this->view('components/footer');
    }
}