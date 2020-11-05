<?php

class Admin extends CI_Controller
{

        function index()
        {
            $user = $this->session->userdata("nama");
            if (isset($_SESSION['nama']) && $user == "admin" OR $_SESSION['role'] == 'guru') {
                $data['join'] = $this->Model_pengguna->join_status();
                $this->load->view('templates/header');
                $this->load->view('templates/navbar-admin');
                $this->load->view('admin/data',$data);
                $this->load->view('templates/footer');


            }
            else {
                    redirect(base_url());
                }

        }

        function indexpelajaran()
        {
                $this->load->view('templates/header');
                $this->load->view('templates/navbar-admin');
                $this->load->view('templates/footer');
                $this->load->view('admin/index-pelajaran'); 

        }

        function indexsiswa()
        {
                $this->load->view('templates/header');
                $this->load->view('templates/navbar-admin');
                $this->load->view('templates/footer');
                $this->load->view('admin/index-siswa'); 
        }

        function indexmateri()
        {
                $this->load->view('templates/header');
                $this->load->view('templates/navbar-admin');
                $this->load->view('templates/footer');
                $this->load->view('admin/index-materi'); 
        }

        function indexguru()
        {
                $this->load->view('templates/header');
                $this->load->view('templates/navbar-admin');
                $this->load->view('templates/footer');
                $this->load->view('admin/index-guru'); 
        }

}


?>