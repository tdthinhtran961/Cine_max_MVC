<?php
    class film extends ParentController {
        public function __construct(){
            parent::__construct();

            
        }

        public function index()
        {
            $this->film();
        }

        public function film(){
            $this->load->view('header');

            $tbl_movies = "movies";
            $name_id_tbl = 'idmovie';
            $categorymodel = $this->load->model('categorymodel');
            $data['total_movies'] = $categorymodel->categorytotal($tbl_movies, $name_id_tbl);

            $this->load->view('film', $data);
            $this->load->view('footer');
        }
        
        public function timebyfilm($idmovie){
            $this->load->view('header');

            
            $tbl_showtime = "tbl_suatchieu";

            $tbl_movie = "movies";

            $tbl_room = "rooms";

            $tbl_time = "tbl_giochieu";

            $cond = "idmovie = $idmovie";

            $categorymodel = $this->load->model('categorymodel');
            $data['film_byid'] = $categorymodel->categorybyid($tbl_movie, $cond);
            $data['time_per_movie'] = $categorymodel->time_per_movie($tbl_showtime,$tbl_time,$tbl_movie,$tbl_room,$idmovie);

            $this->load->view('filmbyid', $data);
            $this->load->view('footer');
        }

        

    }


?>