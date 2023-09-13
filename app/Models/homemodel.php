<?php
class homemodel extends ParentModel{
    public function __construct() {
        parent::__construct();
        // echo 'this is homemodel';
    }

    public function category($tbl_movies){
        return $this->db->select($tbl_movies);
    }
    public function categorybyid($tbl_movies, $id){
        $sql = "SELECT * FROM $tbl_movies WHERE id=:id";
        $data = array(":id" => $id);

        return $this->db->select($sql,$data);
    }
}
