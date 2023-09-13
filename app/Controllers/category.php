<?php
    class category extends ParentController {

        public function __construct(){
            $data = array();
            $message = array();
            parent::__construct();
        }
        
        public function listcategory(){
            $this->load->view('header');
            $categorymodel = $this->load->model('categorymodel');

            $tbl_movies = "movies";
            $data['category'] = $categorymodel->category($tbl_movies);

            $this->load->view('category', $data);
            $this->load->view('footer');
        }

        public function catebyid($id){
            $this->load->view('header');
            $categorymodel = $this->load->model('categorymodel');
            $tbl_movies = "movies";
            $data['categorybyid'] = $categorymodel->categorybyid($tbl_movies, $id);

            $this->load->view('categorybyid', $data);
            $this->load->view('footer');
        }

        public function addcategory(){
            $this->load->view('addcategory');
        }

        public function insertcategory()
        {
            $categorymodel = $this->load->model('categorymodel');
            $tbl_movies = "movies";
            $title = $_POST['title'];
            $genre = $_POST['genre'];
            $director = $_POST['director'];
            $actor = $_POST['actor'];
            $relDate = $_POST['relDate'];
            $image = $_POST['image'];
            $data = [
                "title" => $title,
                "genre" => $genre,
                "director" => $director,
                "actor" => $actor,
                "relDate" => $relDate,
                "image" => $image,
            ];
            $result = $categorymodel->insertcategory($tbl_movies, $data);
            // echo "insert thanh cong";
            if ($result == 1) {
                $message['msg'] = "thêm dữ liệu thành công";
            } else {
                $message['msg'] = "thêm dữ liệu thất bại";
            };
            $this->load->view('addcategory', $message);
        }
        
        public function updatecategory()
        {
            $categorymodel = $this->load->model('categorymodel');
            $tbl_movies = "movies";
            $titleEdit = $_POST['input'];
            $genreEdit = $_POST['input'];
            $directorEdit = $_POST['input'];
            $actorEdit = $_POST['input'];
            $relDateEdit = $_POST['input'];
            $imageEdit = $_POST['input'];
            $idEdit = $_POST['input'];

            $data = [
                "title" => $titleEdit,
                "genre" => $genreEdit,
                "director" => $directorEdit,
                "actor" => $actorEdit,
                "relDate" => $relDateEdit,
                "image" => $imageEdit,
            ];
            $result = $categorymodel->updatecategory($tbl_movies, $data, $idEdit);
            // echo "insert thanh cong";
            if ($result == 1) {
                echo "Cập nhật dữ liệu thành công";
            } else {
                echo "Cập nhật dữ liệu thất bại";
            };
        }
        
        public function deletecategory()
        {
            $categorymodel = $this->load->model('categorymodel');
            $tbl_movies = "movies";
            $idDelete = 8;
            $result = $categorymodel->deletecategory($tbl_movies, $idDelete);
            // echo "insert thanh cong";
            if ($result == 1) {
                echo "Xoá dữ liệu thành công";
            } else {
                echo "Xoá dữ liệu thất bại";
            };
        }
    };
