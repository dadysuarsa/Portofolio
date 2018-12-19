<?php

class Home extends Controller{

    Public function index(){
        $data['Judul'] = 'Home';
        $data['datauser'] = $this->model('User_model')->getUser();
        $this->view('templates/header', $data);
        $this->view('home/index', $data);
        $this->view('templates/footer');
    }


}