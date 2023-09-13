<?php
class Load{
    public function __construct(){
        
    }
    public function view($fileName, $data = false){
        if($data == true){
            extract($data);
        }
        include_once './app/Views/'.$fileName.'.php';
    }
    public function model($fileName){
        include_once './app/Models/'.$fileName.'.php';
        return new $fileName();
    }
}

?>