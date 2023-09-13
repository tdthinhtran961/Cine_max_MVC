<?php
    class suatchieu extends ParentController {
        public function __construct(){

            parent::__construct();

            
        }

        public function index()
        {
            $this->catetime(1);
        }

        public function catetime ($id)
        {
            $this->load->view('header');
            
            $item_per_page = 4;

            $tbl_showtime = "tbl_suatchieu";
            $name_id_showtime = "idsuatchieu";

            $tbl_movie = "movies";
            $name_id_movie = "idmovie";

            $tbl_room = "rooms";

            $tbl_time = "tbl_giochieu";
            $name_id_time = "idgiochieu";

            $categorymodel = $this->load->model('categorymodel');
            $data['total_time'] = $categorymodel->total_time($tbl_time, $name_id_time);
            $data['movie_per_time'] = $categorymodel->movie_per_time($tbl_showtime,$tbl_time,$tbl_movie,$tbl_room,$item_per_page, $id);

            $this->load->view('showtimes', $data);
            $this->load->view('footer');
        }




    }
?>