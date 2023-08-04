<?php 

class Login extends Controller {
    // public function showLoginPage() {
    public function index() {

        // $this->view('components/header');

        $this->view('login/index');

 



        // $this->view('components/footer');
    }
    
    //showLogin bawah
    // $this->view('login/index');
    public function submitLogin() {
        
        $data['judul'] = 'Login';
        $this->view('login/index');

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $username = $_POST['username'];
            $password = $_POST['password'];


            //Empty user pass
            if (empty($username) || empty($password)) {
                // Flasher::setFlash('Username atau Password tidak boleh kosong', 'ditambahkan', 'danger');
                header('Location: ' . BASEURL . '/login');
                exit;
            }

            // cek login untuk admin
            if ($_POST['user_type' === 'admin']) {
                session_start();
                $_SESSION['user_id'] = 1;
                $_SESSION['username'] = 'crowdAdmin';
                $_SESSION['type'] = 'admin';
                header('Location: ' . BASEURL . '/home');
                return;
            }

            $user = $this->model('userModel')->getUsername($username);
            if ($user) {
                if (password_verify($password, $user['password'])) {
                    session_start();
                    $_SESSION['user_id'] = $user['id'];
                    $_SESSION['username'] = $user['username'];
                    $_SESSION['role'] = 'user';
                    header('Location: ' . BASEURL . '/home');
                    return;
                } else {
                    // Flasher::setFlash('Password salah', 'ditambahkan', 'danger');
                    header('Location: ' . BASEURL . '/login');
                    exit;
                }
            } else {
                // Flasher::setFlash('Username tidak ditemukan', 'ditambahkan', 'danger');
                header('Location: ' . BASEURL . '/login');
                exit;   
            }
        }

    }
}