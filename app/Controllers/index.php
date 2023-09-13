<?php
    class index extends ParentController {

        public function __construct(){
            $data = array();
            parent::__construct();
        }

        public function index(){
            $this->homepage();
        }

        public function homepage(){
            $this->load->view('header');
            $this->load->view('banner');

            $tbl_movies = "movies";
            $name_id_tbl = 'idmovie';
            $categorymodel = $this->load->model('categorymodel');
            $data['total_movies'] = $categorymodel->categorytotal($tbl_movies, $name_id_tbl);

            $this->load->view('home',$data);
            $this->load->view('footer');
        }


        public function ticket(){
            $this->load->view('header');
            $this->load->view('ticket');
            $this->load->view('footer');
        }

        public function notfound(){
            $this->load->view('header');
            $this->load->view('404');
            $this->load->view('footer');
        }
    };
?>