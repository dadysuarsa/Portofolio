<?php

class Kontak extends Controller{
    public function index(){
        $data['Judul'] = 'Kontak';
        $this->view('templates/header' , $data);
        $this->view('kontak/index');
        $this->view('templates/footer');
        
    }
    public function page(){
        $data['Judul'] = 'Page';
         $this->view('templates/header' , $data);
        $this->view('kontak/page');
        $this->view('templates/footer');

    }



}