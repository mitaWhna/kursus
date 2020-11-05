<?php

class A extends CI_Controller
{

        function index()
        {
        	    $this->load->view('templates/header');
                $this->load->view('templates/navbar-admin');
                $this->load->view('templates/footer'); 
                $this->load->view('admin/index');

        }
}


?>