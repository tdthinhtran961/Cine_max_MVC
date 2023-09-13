<?php
class loginmodel extends ParentModel{
    public function __construct() {
        parent::__construct();
        // echo 'this is homemodel';
    }

    public function login($tbl_user,$usermame,$password){
        $sql = "SELECT * FROM $tbl_user WHERE username=? AND password=?";
        return $this->db->affectedRows($sql,$usermame,$password);
    }

    public function getLogin($tbl_user,$usermame,$password){
        $sql = "SELECT * FROM $tbl_user WHERE username=? AND password=?";
        return $this->db->selectUser($sql,$usermame,$password);
    }


    
}
