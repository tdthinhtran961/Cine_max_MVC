<?php
    class showtime extends ParentController {
        public function __construct(){
            Session::checkSession();
            parent::__construct();

            
        }

        public function index()
        {
            $this->showtime();
        }

        public function showtime()
        {
            $this->load->view('cpanel/header');
            $this->load->view('cpanel/bar');

            $item_per_page = 4;
            if(!isset($_GET['page'])){
                $current_page = 1;
            }else{
                $current_page = $_GET['page'];
            }
            $offset = ($current_page - 1) * $item_per_page;

            $tbl_showtime = "tbl_suatchieu";
            $name_id_showtime = "idsuatchieu";

            $tbl_time = "tbl_giochieu";
            $name_id_time = "idgiochieu";

            $tbl_room = "rooms";
            $name_id_room = "idroom";

            $tbl_movie = "movies";
            $name_id_movie = "idmovie";

            $categorymodel = $this->load->model('categorymodel');
            $data['showtime_per_page'] = $categorymodel->showtime_per_page($tbl_showtime,$tbl_time, $tbl_room,$tbl_movie,$item_per_page,$offset);
            $data['total_movies'] = $categorymodel->categorytotal($tbl_movie,$name_id_movie);
            $data['total_room'] = $categorymodel->categorytotal($tbl_room, $name_id_room);
            $data['total_time'] = $categorymodel->categorytotal($tbl_time, $name_id_time);
            $data['total_showtime'] = $categorymodel->showtimetotal($tbl_showtime, $name_id_showtime);
            $data['item_page'] = $item_per_page;
            
            $this->load->view('cpanel/showtime',$data);
            $this->load->view('cpanel/footer');
        }

        public function insertshowtime(){
            if(isset($_POST['addShowtime'])) {
                $date = $_POST['date'];
                $time = $_POST['time'];
                $movie = $_POST['movie'];
                $room = $_POST['room'];
            
                $tbl_showtime = "tbl_suatchieu";
                $data = [
                    "date" => $date,
                    "id_time" => $time,
                    "id_movie" => $movie,
                    "id_room" => $room,
                ];
                $categorymodel = $this->load->model('categorymodel');
                $result = $categorymodel->insertcategory($tbl_showtime, $data);
                if ($result == 1) {
                    $message['msg'] = "thêm dữ liệu thành công";
                    header("Location:".BASE_URL."/showtime?msg=".urlencode(serialize($message)));
                } else {
                    $message['msg'] = "thêm dữ liệu thất bại";
                    header("Location:".BASE_URL."/showtime?msg=".urlencode(serialize($message)));
                };
            }
        }

        public function updateshowtime()
        {   
            if(isset($_POST['editShowtime'])) {
            
                $categorymodel = $this->load->model('categorymodel');
                $tbl_showtime = "tbl_suatchieu";
                $dateEdit = $_POST['dateEdit'];
                $timeEdit = $_POST['timeEdit'];
                $movieEdit = $_POST['movieEdit'];
                $roomEdit = $_POST['roomEdit'];
                $idEdit = $_POST['id_suatchieu'];
                $cond = 'idsuatchieu='.$idEdit;
                $data = [
                    "date" => $dateEdit,
                    "id_time" => $timeEdit,
                    "id_movie" => $movieEdit,
                    "id_room" => $roomEdit,
                ];
                $result = $categorymodel->updateshowtime($tbl_showtime, $data, $cond);
                if ($result == 1) {
                    $message['msg'] = "Cập nhật dữ liệu thành công";
                    header("Location:".BASE_URL."/showtime?msg=".urlencode(serialize($message)));
                } else {
                    $message['msg'] = "Cập nhật dữ liệu thất bại";
                    header("Location:".BASE_URL."/showtime?msg=".urlencode(serialize($message)));
                };
            }
        }

        public function deleteshowtime($id)
        {   
            $categorymodel = $this->load->model('categorymodel');
            $tbl_showtime = "tbl_suatchieu";
            $idDelete = $id;
            $cond = 'idsuatchieu='.$idDelete;
            $resultdel = $categorymodel->deleteshowtime($tbl_showtime, $cond);
            if ($resultdel == 1) {
                $msgdel['msgdel'] = "Xóa dữ liệu thành công";
                header("Location:".BASE_URL."/showtime?msg=".urlencode(serialize($msgdel)));
            } else {
                $msgdel['msgdel'] = "Xóa dữ liệu thất bại";
                header("Location:".BASE_URL."/showtime?msg=".urlencode(serialize($msgdel)));
            };
        }

    };
?>