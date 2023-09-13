<?php
    class movie extends ParentController {
        public function __construct(){
            Session::checkSession();
            parent::__construct();

            
        }

        public function index()
        {
            $this->movie();
        }

        public function movie()
        {
            $this->load->view('cpanel/header');
            $this->load->view('cpanel/bar');

            $name_id_tbl = 'idmovie';
            $item_per_page = 4;
            if(!isset($_GET['page'])){
                $current_page = 1;
            }else{
                $current_page = $_GET['page'];
            }
            $offset = ($current_page - 1) * $item_per_page;
            $tbl_movies = "movies";
            $categorymodel = $this->load->model('categorymodel');
            $data['movies_per_page'] = $categorymodel->category_per_page($tbl_movies,$name_id_tbl,$item_per_page,$offset);
            $data['total_movies'] = $categorymodel->categorytotal($tbl_movies, $name_id_tbl);
            $data['item_page'] = $item_per_page;
            $this->load->view('cpanel/movie', $data);
            $this->load->view('cpanel/footer');
        }

        public function moviebyid($idmovie)
        {
            $this->load->view('cpanel/header');
            $this->load->view('cpanel/bar');

            $tbl_showtime = "tbl_suatchieu";

            $tbl_movie = "movies";

            $tbl_room = "rooms";

            $tbl_time = "tbl_giochieu";

            $cond = "idmovie = $idmovie";

            $categorymodel = $this->load->model('categorymodel');
            $data['film_byid'] = $categorymodel->categorybyid($tbl_movie, $cond);
            $data['time_per_movie'] = $categorymodel->time_per_movie($tbl_showtime,$tbl_time,$tbl_movie,$tbl_room,$idmovie);

            $this->load->view('cpanel/moviebyid', $data);
            $this->load->view('cpanel/footer');
        }


        public function insertmovie()
        {
            if(isset($_POST['addMovie'])) {
                $title = $_POST['title'];
                $genre = $_POST['genre'];
                $director = $_POST['director'];
                $actor = $_POST['actor'];
                $relDate = $_POST['relDate'];
                $image = $_POST['image'];

                // $image = $_FILES['image']['name'];
                // $tmp_image = $_FILES['image']['tmp_name'];
                // $div = explode('.',$image);
                // $file_ext = strtolower(end($div));
                // $unique_image = $div[0];time().'.'.$file_ext;
                // $path_uploads = "thucmuc/".$unique_image;
                // lưu ý: update => ss để => unlink(curr path) 
            
                $tbl_movies = "movies";
                $data = [
                    "title" => $title,
                    "genre" => $genre,
                    "director" => $director,
                    "actor" => $actor,
                    "relDate" => $relDate,
                    "image" => $image,
                ];
                $categorymodel = $this->load->model('categorymodel');
                $result = $categorymodel->insertcategory($tbl_movies, $data);
                if ($result == 1) {
                    $message['msg'] = "thêm dữ liệu thành công";
                    header("Location:".BASE_URL."/movie?msg=".urlencode(serialize($message)));
                } else {
                    $message['msg'] = "thêm dữ liệu thất bại";
                    header("Location:".BASE_URL."/movie?msg=".urlencode(serialize($message)));
                };
            }
        }

        public function deletemovie($id)
        {   
            $categorymodel = $this->load->model('categorymodel');
            $tbl_movies = "movies";
            $idDelete = $id;
            $cond = 'idmovie='.$idDelete;
            $resultdel = $categorymodel->deletecategory($tbl_movies, $cond);
            if ($resultdel == 1) {
                $msgdel['msgdel'] = "Xóa dữ liệu thành công";
                header("Location:".BASE_URL."/movie?msg=".urlencode(serialize($msgdel)));
            } else {
                $msgdel['msgdel'] = "Xóa dữ liệu thất bại";
                header("Location:".BASE_URL."/movie?msg=".urlencode(serialize($msgdel)));
            };
        }

        public function updatecategory()
        {   
            if(isset($_POST['editMovie'])) {
            
                $categorymodel = $this->load->model('categorymodel');
                $tbl_movies = "movies";
                $titleEdit = $_POST['titleEdit'];
                $genreEdit = $_POST['genreEdit'];
                $directorEdit = $_POST['directorEdit'];
                $actorEdit = $_POST['actorEdit'];
                $relDateEdit = $_POST['relDateEdit'];
                $imageEdit = $_POST['imageEdit'];

                $idEdit = $_POST['idMovie'];

                $data = [
                    "title" => $titleEdit,
                    "genre" => $genreEdit,
                    "director" => $directorEdit,
                    "actor" => $actorEdit,
                    "relDate" => $relDateEdit,
                    "image" => $imageEdit,
                ];
                $result = $categorymodel->updatecategory($tbl_movies, $data, $idEdit);
                if ($result == 1) {
                    $message['msg'] = "Cập nhật dữ liệu thành công";
                    header("Location:".BASE_URL."/movie?msg=".urlencode(serialize($message)));
                } else {
                    $message['msg'] = "Cập nhật dữ liệu thất bại";
                    header("Location:".BASE_URL."/movie?msg=".urlencode(serialize($message)));
                };
            }
        }
    };
?>