<?php
class categorymodel extends ParentModel{
    public function __construct() {
        parent::__construct();
        // echo 'this is homemodel';
    }

    public function category_per_page($tbl,$name_id_tbl,$item_per_page,$offset){
        $sql = "SELECT * FROM $tbl ORDER BY $name_id_tbl DESC LIMIT $item_per_page OFFSET $offset";
        return $this->db->select($sql);
    }

    public function categorytotal($tbl, $name_id_tbl){
        $sql = "SELECT * FROM $tbl ORDER BY $name_id_tbl DESC";
        return $this->db->select($sql);
    }
    // total_time
    public function total_time($tbl, $name_id_tbl){
        $sql = "SELECT * FROM $tbl ORDER BY $name_id_tbl ASC";
        return $this->db->select($sql);
    }

    public function categorybyid($tbl, $cond){
        $sql = "SELECT * FROM $tbl WHERE $cond";
        // $data = array(":id" => $id);
        return $this->db->select($sql);
    }

    public function insertcategory($tbl, $data){
        return $this->db->insert($tbl,$data);
    }

    public function updatecategory($tbl, $data, $idEdit){
        return $this->db->update($tbl,$data,$idEdit);
    }

    public function deletecategory($tbl, $cond) {
        return $this->db->delete($tbl, $cond);
    }


    
    //showtime

    public function showtime($tbl_showtime,$tbl_time,$tbl_movie,$tbl_room,$cond){
        $sql = "SELECT *
            FROM $tbl_showtime
            INNER JOIN $tbl_time ON $tbl_showtime.id_time = $tbl_time.idgiochieu
            INNER JOIN $tbl_room ON $tbl_showtime.id_room = $tbl_room.idroom
            INNER JOIN $tbl_movie ON $tbl_showtime.id_movie = $tbl_movie.idmovie
            WHERE $cond
            ORDER BY idsuatchieu DESC";
        return $this->db->select($sql);
    }

    public function booking_by_showtime($tbl_showtime,$tbl_time,$tbl_movie,$tbl_room,$tbl_booking,$cond,$condition){
        $sql = "SELECT *
            FROM $tbl_showtime
            INNER JOIN $tbl_time ON $tbl_showtime.id_time = $tbl_time.idgiochieu
            INNER JOIN $tbl_room ON $tbl_showtime.id_room = $tbl_room.idroom
            INNER JOIN $tbl_movie ON $tbl_showtime.id_movie = $tbl_movie.idmovie
            INNER JOIN $tbl_booking ON $tbl_showtime.idsuatchieu = $tbl_booking.id_suatchieu
            WHERE $cond AND $condition
            ORDER BY idsuatchieu DESC";
        return $this->db->select($sql);
    }

    public function showtime_per_page(
        $tbl_showtime,$tbl_time, $tbl_room,$tbl_movie,$item_per_page,$offset
        ){
        $sql = "SELECT *
            FROM $tbl_showtime
            INNER JOIN $tbl_time ON $tbl_showtime.id_time = $tbl_time.idgiochieu
            INNER JOIN $tbl_room ON $tbl_showtime.id_room = $tbl_room.idroom
            INNER JOIN $tbl_movie ON $tbl_showtime.id_movie = $tbl_movie.idmovie
            ORDER BY idsuatchieu DESC LIMIT $item_per_page OFFSET $offset";
        return $this->db->select($sql);
    }


    function movie_per_time($tbl_showtime,$tbl_time,$tbl_movie,$tbl_room,$item_per_page, $id)  {
        $sql = "SELECT *
            FROM $tbl_showtime
            INNER JOIN $tbl_time ON $tbl_showtime.id_time = $tbl_time.idgiochieu
            INNER JOIN $tbl_movie ON $tbl_showtime.id_movie = $tbl_movie.idmovie
            INNER JOIN $tbl_room ON $tbl_showtime.id_room = $tbl_room.idroom
            WHERE $tbl_showtime.id_time = $id
            ORDER BY idsuatchieu DESC LIMIT $item_per_page";
        return $this->db->select($sql);
    }

    function time_per_movie($tbl_showtime,$tbl_time,$tbl_movie,$tbl_room,$idmovie)  {
        $sql = "SELECT *
            FROM $tbl_showtime
            INNER JOIN $tbl_time ON $tbl_showtime.id_time = $tbl_time.idgiochieu
            INNER JOIN $tbl_movie ON $tbl_showtime.id_movie = $tbl_movie.idmovie
            INNER JOIN $tbl_room ON $tbl_showtime.id_room = $tbl_room.idroom
            WHERE $tbl_showtime.id_movie = $idmovie
            ORDER BY $tbl_movie.idmovie DESC";
        return $this->db->select($sql);
    }



    public function showtimetotal($tbl_showtime, $name_id_showtime){
        $sql = "SELECT * FROM $tbl_showtime ORDER BY $name_id_showtime DESC";
        return $this->db->select($sql);
    }

    public function updateshowtime($tbl, $data, $cond){
        return $this->db->updateshowtime($tbl,$data,$cond);
    }

    public function deleteshowtime($tbl, $cond) {
        return $this->db->delete($tbl, $cond);
    }


}
