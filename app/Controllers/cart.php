<?php
class cart extends ParentController
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->cart();
    }

    public function cart()
    {
        $this->load->view('header');

        $categorymodel = $this->load->model('categorymodel');
        if (isset($_POST['idsuatchieu']) && isset($_POST['idseat']) && $_POST['idseat'] != "") {
            $idsuatchieu = $_POST['idsuatchieu'];
            $data['ar_idSeat'] = $_POST['idseat'];
            // $data['ar_nameSeat'] = $_POST['nameseat'];

            $tbl_movie = "movies";

            $tbl_showtime = "tbl_suatchieu";

            $tbl_time = "tbl_giochieu";

            $tbl_room = "rooms";

            $cond = "idsuatchieu = $idsuatchieu";

            $data['showtime'] = $categorymodel->showtime($tbl_showtime, $tbl_time, $tbl_movie, $tbl_room, $cond);
            $this->load->view('cart', $data);
        } else {
            $data['idSuatChieu'] = $_POST['idsuatchieu'];
            $this->load->view('goBackCart', $data);
        }


        $this->load->view('footer');
    }

    public function insertcart()
    {


        if (isset($_POST['id_suatchieu'])) {

            $lastname = $_POST['lastname'];
            $firstname = $_POST['firstname'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];

            $idsuatchieu = $_POST['id_suatchieu'];

            $ar_idGhe = $_POST['idseat'];

            $tbl_booking = "booking";
            // date_default_timezone_set('Asia/Ho_Chi_Minh');
            $datetime = date('y-m-d h:i:s');
            foreach ($ar_idGhe as $item) {
                $dataInsert = [
                    "id_suatchieu" => $idsuatchieu,
                    "firstName" => $firstname,
                    "lastName" => $lastname,
                    "phone" => $phone,
                    "email" => $email,
                    "booking_DateTime" => $datetime,
                    "id_seat" => $item,
                ];
                $categorymodel = $this->load->model('categorymodel');

                $result = $categorymodel->insertcategory($tbl_booking, $dataInsert);
                
                if ($result == 1) {


                    $message['msg'] = "Đặt vé thành công";
                    header("Location:" . BASE_URL . "/cart/ticket/$idsuatchieu/?msg=" . urlencode(serialize($message)));
                } else {
                    $message['msg'] = "Đặt vé thất bại";
                    // header("Location:".BASE_URL."/film?msg=" . urlencode(serialize($message)));
                };
            }
        }
    }

    public function ticket()
    {
        $this->load->view('header');
        
        $tbl_showtime = "tbl_suatchieu";
        $tbl_movie = "movies";
        $tbl_room = "rooms";
        $tbl_time = "tbl_giochieu";
        $tbl_booking = "booking";
        $cond = "idsuatchieu = 3";
        $condition = "idbooking = 24";

        $categorymodel = $this->load->model('categorymodel');
        $data['booking_by_showtime'] = $categorymodel->booking_by_showtime($tbl_showtime,$tbl_time,$tbl_movie,$tbl_room,$tbl_booking,$cond,$condition);
        $this->load->view('ticket',$data);
        $this->load->view('footer');
    }
}
