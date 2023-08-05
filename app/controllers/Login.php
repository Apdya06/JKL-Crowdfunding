<?php 

class Login extends Controller {
    public function index() {

        $data['title'] = 'Login';
        // $data['username'] = $this->model('userModel')->getUsername;

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
                // header('Location: ./login');
                echo "<script>console.log('0');</script>";

                sleep(5);

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
                    echo "<script>console.log('1');</script>";
                    sleep(5);
                    return;
                } else {
                    // Flasher::setFlash('Password salah', 'ditambahkan', 'danger');
                    header('Location: ' . BASEURL . '/login');
                    echo "<script>console.log('2');</script>";
                    sleep(5);

                    exit;
                }
            } else {
                // Flasher::setFlash('Username tidak ditemukan', 'ditambahkan', 'danger');
                header('Location: ' . BASEURL . '/login');
                echo "<script>console.log('3');</script>";
                sleep(5);

                exit;   
            }
        }
        
    }
    public function logout()
    {
        // Destroy the session and unset 'user_id' session variable
        session_start();
        session_unset(); // Unset all session variables
        session_destroy(); // Destroy the session

        // Redirect the user to the home page or any other appropriate page
        header('Location: /'); // Replace "/" with the appropriate page URL
        exit;
    }
}
