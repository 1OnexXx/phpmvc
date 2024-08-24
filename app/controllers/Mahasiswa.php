<?php


class Mahasiswa extends Controller
{

    public function index()
    {

        $data['judul'] = ' Daftar Mahasiswa ';
        $data['mhs'] = $this->model('Mahasiswa_model')->getAllMahasiswa();
        $this->view('templates/header', $data);
        $this->view('mahasiswa/index', $data);
        $this->view('templates/footer');


    }

    public function detail($id)
    {

        $data['judul'] = ' Detail Mahasiswa ';
        $data['mhs'] = $this->model('Mahasiswa_model')->getMahasiswaById($id);
        $this->view('templates/header', $data);
        $this->view('mahasiswa/detail', $data);
        $this->view('templates/footer');


    }

    public function tambah()
    {
        if ($this->model('Mahasiswa_model')->TambahDataMahasiswa($_POST) > 0) {
            Flasher::setFlash('berhasil', 'ditambahkan', 'success');
            header('Location: ' . BASEURL . '/mahasiswa');
            exit();
        } else {
            Flasher::setFlash('gagal', 'ditambahkan', 'danger');
            header('Location: ' . BASEURL . '/mahasiswa');
            exit();
        }
    }


    public function hapus($id)
    {
        Flasher::setFlash('behasil', 'dihapus', 'success');
        if ($this->model('Mahasiswa_model')->HapusDataMahasiswa($id) > 0) {
            header('Location: ' . BASEURL . '/mahasiswa');
            exit();
        } else {
            Flasher::setFlash('gagal', 'dihapus', 'danger');
            header('Location: ' . BASEURL . '/mahasiswa');
            exit();
        }
    }

    public function getedit() {
        if (isset($_POST['id'])) {
            $id = $_POST['id'];
            $mahasiswa = $this->model('Mahasiswa_model')->getMahasiswaById($id);
            echo json_encode($mahasiswa);
        } else {
            echo json_encode(['error' => 'ID tidak ditemukan']);
        }
        exit; // Pastikan tidak ada output tambahan
    }
    
    public function edit(){
        if ($this->model('Mahasiswa_model')->editDataMahasiswa($_POST) > 0) {
            Flasher::setFlash('berhasil', 'diedit', 'success');
            header('Location: ' . BASEURL . '/mahasiswa');
            exit();
        } else {
            Flasher::setFlash('gagal', 'diedit', 'danger');
            header('Location: ' . BASEURL . '/mahasiswa');
            exit();
        }
    }

    public function cari(){
        
        $data['judul'] = ' Daftar Mahasiswa ';
        $data['mhs'] = $this->model('Mahasiswa_model')->cariDataMahasiswa();
        $this->view('templates/header', $data);
        $this->view('mahasiswa/index', $data);
        $this->view('templates/footer');

    }

}
