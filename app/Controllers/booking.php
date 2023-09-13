<?php
    class booking extends ParentController {
        public function __construct(){

            parent::__construct();

            
        }

        public function index()
        {
            $this->booking();
        }

        public function booking(){
            $this->load->view('header');
            $this->load->view('gomovie');
            $this->load->view('footer');
        }

        public function bookingbyid($idsuatchieu){
            $this->load->view('header');

            $tbl_booking = "booking";
            $name_id_booking = "idbooking";

            $tbl_showtime = "tbl_suatchieu";

            $tbl_time = "tbl_giochieu";

            $tbl_room = "rooms";

            $tbl_movie = "movies";

            $tbl_seat = "seats";
            $name_id_seat = "id";

            $cond = "idsuatchieu = $idsuatchieu";
            $condition = "id_suatchieu = $idsuatchieu";

            $categorymodel = $this->load->model('categorymodel');
            $data['total_seat'] = $categorymodel->total_time($tbl_seat,$name_id_seat);
            $data['booking_by_showtime'] = $categorymodel->categorybyid($tbl_booking,$condition);
            $data['showtime'] = $categorymodel->showtime($tbl_showtime,$tbl_time,$tbl_movie,$tbl_room,$cond);

            $this->load->view('booking', $data);
            $this->load->view('footer');
        }
    }


?>