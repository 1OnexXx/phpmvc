
<?php 

    class Mahasiswa_model{
        private $table_name = 'mahasiswa';
        private $conn;

        public function __construct(){
            $this->conn = new Database();
        }
        public function getAllMahasiswa(){
            
            $this->conn->query('SELECT * FROM ' . $this->table_name);
            return $this->conn->resultSet();
        }

        public function getMahasiswaById($id){
            $this->conn->query('SELECT * FROM ' . $this->table_name . ' WHERE id =:id ');
            $this->conn->bind('id' , $id);
            return $this->conn->single();
        }

        public function TambahDataMahasiswa($data){

            $query = "INSERT INTO mahasiswa (nama, nrp, email, jurusan) VALUES (:nama, :nrp, :email, :jurusan)";

            $this->conn->query($query);
            $this->conn->bind('nama' ,$data['nama'] );
            $this->conn->bind('nrp' ,$data['nrp'] );
            $this->conn->bind('email' ,$data['email'] );
            $this->conn->bind('jurusan' ,$data['jurusan'] );

            $this->conn->execute();

            return $this->conn->rowCount();
        }

        public function HapusDataMahasiswa($id){

            $query = "DELETE FROM mahasiswa WHERE id = :id";
            $this->conn->query($query);
            $this->conn->bind('id' , $id);
            $this->conn->execute();
            return $this->conn->rowCount();
        }

        public function editDataMahasiswa($data){

            $query = " UPDATE mahasiswa SET 
                        nama = :nama , nrp = :nrp , email = :email , jurusan = :jurusan WHERE id = :id
            ";

            $this->conn->query($query);
            $this->conn->bind('nama' ,$data['nama'] );
            $this->conn->bind('nrp' ,$data['nrp'] );
            $this->conn->bind('email' ,$data['email'] );
            $this->conn->bind('jurusan' ,$data['jurusan'] );
            $this->conn->bind('id' ,$data['id'] );

            $this->conn->execute();

            return $this->conn->rowCount();
        }

        public function cariDataMahasiswa(){

            $keyword = $_POST['keyword'];
            $query = "SELECT * FROM mahasiswa WHERE nama LIKE :keyword ";
            $this->conn->query($query);
            $this->conn->bind('keyword', "%$keyword%");
            return $this->conn->resultSet();

        }

    }