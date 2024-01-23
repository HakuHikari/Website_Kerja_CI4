<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Models\ForumModel;
use App\Models\ProjectModel;

class Home extends BaseController
{

    public function index()
    {
        if (session()->get('logged_in')) {
            // Jika pengguna sudah login, redirect langsung ke halaman Homepage
            return redirect()->to(base_url('/Homepage'));
        }

        // Jika belum login, tampilkan halaman Login
        return view('Login');
    }
    public function logout()
    {
        // Hapus semua data sesi
        session()->remove(['logged_in', 'user_id', 'username']);

    // Redirect ke halaman login atau halaman lain yang Anda inginkan setelah logout
    return redirect()->to(base_url('/'));
}
    public function Daftar(): string
    {
        return view('Daftar');
    }

   

    public function Homepage()
    {
        echo view('nav/navbar');
        echo view('homepage');
        echo view('footer/footer');
    }
    public function login()
    {
        $userModel = new UserModel();

        $username = $this->request->getPost('your_name');
        $password = $this->request->getPost('your_pass');

        // Lakukan validasi username dan password
        $user = $userModel->where('name', $username)->first();

        if ($user) {
            if (password_verify($password, $user['password'])) {
                // Jika username dan password cocok, atur session dan redirect ke halaman homepage
                session()->set([
                    'logged_in' => true,
                    'user_id' => $user['id'],
                    'username' => $user['name'], 
                ]);
                return redirect()->to(base_url('/Homepage'));
            }
        }

        // Jika username atau password salah, kembalikan ke halaman login dengan pesan error
        return redirect()->to(base_url('/'))->with('error', 'Invalid username or password');
    }



    public function simpanData()
    {
        $userModel = new UserModel();

        $data = [
            'name' => $this->request->getPost('name'),
            'email' => $this->request->getPost('email'),
            'password' => password_hash($this->request->getPost('pass'), PASSWORD_DEFAULT),
        ];

        $userModel->insert($data);

        return redirect()->to(base_url('/')); // Mengarahkan kembali ke halaman utama
    }

    public function kirimPesan()
    {
        $forumModel = new ForumModel();

        // Ambil data dari form
        $data = [
            'nama' => $this->request->getPost('nama'),
            'pesan' => $this->request->getPost('pesan'),
        ];
    
        // Simpan data ke database
        $forumModel->insertForum($data);
    
        return redirect()->to(base_url('forum'))->with('success', 'Pesan berhasil dikirim');
    }

    public function Biodata()
    {
        echo view('nav/navbar');
        echo view('Biodata');
    }

    public function forum()
    {
        $forumModel = new ForumModel();
        $data['pesanFromDB'] = $forumModel->getAllMessages(); // Mengambil semua pesan dari database
    
        echo view('nav/navbar');
        echo view('forum', $data);
    }
    public function Buat()
    {
        echo view('nav/navbar');
        echo view('buat');
    }

    public function project()
    {
        // Ambil data proyek dari database
        $projectModel = new ProjectModel();
        $projects = $projectModel->findAll(); // Ubah ini sesuai dengan kebutuhan Anda

        // Tampilkan view dengan data proyek dan navbar
        echo view('nav/navbar');
        echo view('project', ['projects' => $projects]);
    }

    public function buatproject()
    {
        $validation = \Config\Services::validation();
        $validation->setRules([
            'projectName' => 'required',
            'category' => 'required',
            'description' => 'required',
            'startDate' => 'required',
            'deadline' => 'required',
            'budget' => 'required',
            'payment' => 'required'
        ]);
    
        if ($validation->withRequest($this->request)->run()) {
            // Extract numeric value from the formatted input
            $budget = $this->extractNumericValue($this->request->getPost('budget'));
    
            $data = [
                'projectName' => $this->request->getPost('projectName'),
                'category' => $this->request->getPost('category'),
                'description' => $this->request->getPost('description'),
                'startDate' => $this->request->getPost('startDate'),
                'deadline' => $this->request->getPost('deadline'),
                'budget' => $budget, // Use the extracted numeric value
                'payment' => $this->request->getPost('payment')
            ];
    
            $projectModel = new ProjectModel();
            $projectModel->insert($data);
    
            session()->setFlashdata('success', 'Proyek berhasil dibuat.');
    
            return redirect()->to(base_url('buat'));
        } else {
            // Tampilkan kembali form dengan pesan error
            echo view('buat');
        }
    }
    
    /**
     * Extract numeric value from formatted input (e.g., Rp 100,000).
     *
     * @param string $formattedValue
     * @return float
     */
    private function extractNumericValue($formattedValue)
    {
        // Remove non-numeric characters
        $numericValue = preg_replace('/[^0-9]/', '', $formattedValue);
    
        // Convert to float
        return (float) $numericValue;
    }
   
}


