<?php 

class Login extends Controller {
    public function index() {

        $data['title'] = 'Halaman Login';

        $this->view('components/header');
        $this->view('login/index', $data);
        $this->view('components/footer');
    
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
            if ($username === 'crowdAdmin' && $password === 'crowdadmin') {
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
                    header('Location: ./home');
                    sleep(5);
                    return;
                } else {
                    // Flasher::setFlash('Password salah', 'ditambahkan', 'danger');
                    header('Location: ' . BASEURL . '/login');
                    echo "<script>console.log('2');</script>";
                    exit;
                }
            } else {
                // Flasher::setFlash('Username tidak ditemukan', 'ditambahkan', 'danger');
                header('Location: ' . BASEURL . '/login');
                exit;   
            }
        }
        
    }

    public function logout()
    {
        session_start();
        session_unset(); 
        session_destroy(); 

        header('Location: ' . BASEURL . '/home');
        exit;
    }
}
