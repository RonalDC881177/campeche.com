<?php
    class Home extends Controller
    {
        public $views;
       public function index()
        {
            $this->views->getView($this,"index");
        }
    }
?>