<?php
class login extends ParentController {

    public function __construct()
    {
        $message = array();
        $data = array();
        
        parent::__construct();
    }

    public function index(){
        $this->login();
    }

    public function login(){

        Session::init();
        if (Session::get('login')==true) {
            header("Location:".BASE_URL."/login/dashboard");
        }
        $this->load->view('cpanel/login');

    }

    public function dashboard()
    {
        Session::checkSession();
        $this->load->view('cpanel/header');
        $this->load->view('cpanel/bar');
        $this->load->view('cpanel/dashboard');
        $this->load->view('cpanel/footer');
    }

    public function authentication_login() {
        $usermame = $_POST['username'];
        $password = md5($_POST['password']);
        $tbl_user = 'user';
        $loginmodel = $this->load->model('loginmodel');

        $count = $loginmodel->login($tbl_user,$usermame,$password);

        if($count==0) {
            $message['msg'] = "User hoặc mật khẩu sai, xin kiểm tra lại";
            header("Location:".BASE_URL."/login");
        }else {
            $result = $loginmodel->getLogin($tbl_user,$usermame,$password);
            // echo $result[0]['username'];
            // echo $result[0]['password'];
            Session::init();
            Session::set('login',true);
            Session::set('username',$result[0]['username']);
            Session::set('username',$result[0]['user_id']);

            header("Location:".BASE_URL."/login/dashboard");
        }
    }

    public function logout()
    {
        Session::init();
        Session::destroy();
        header("Location:".BASE_URL."/login");
    }


}




?>