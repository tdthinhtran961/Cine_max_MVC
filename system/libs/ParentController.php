<?php
    class ParentController{
        protected $load = array();
        public function __construct() { 
            // echo "This is Root Controller";
            $this->load = new Load();
        }
    }
?>