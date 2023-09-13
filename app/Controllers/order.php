<?php
    class order extends ParentController {
        public function __construct(){
            Session::checkSession();
            parent::__construct();

            
        }

        public function index()
        {
            $this->order();
        }

        public function order()
        {
            $this->load->view('cpanel/header');
            $this->load->view('cpanel/bar');

            $item_per_page = 10;
            if(!isset($_GET['page'])){
                $current_page = 1;
            }else{
                $current_page = $_GET['page'];
            }
            $offset = ($current_page - 1) * $item_per_page;

            $tbl_booking = "booking";
            $name_id_tbl = "idbooking";


            $categorymodel = $this->load->model('categorymodel');
            $data['booking_per_page'] = $categorymodel->category_per_page($tbl_booking,$name_id_tbl,$item_per_page,$offset);
            $data['total_booking'] = $categorymodel->categorytotal($tbl_booking, $name_id_tbl);
            
            $data['item_page'] = $item_per_page;
            
            $this->load->view('cpanel/order',$data);
            $this->load->view('cpanel/footer');
        }


    };
?>