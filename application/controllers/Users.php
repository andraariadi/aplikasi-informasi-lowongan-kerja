<?php
class Users extends CI_Controller {

        public function index()
        {
               $this->load->view('_parents/header');
               $this->load->view('_parents/sidebar');
               $this->load->view('v_dataUsers');
               $this->load->view('_parents/footer');
        }
}