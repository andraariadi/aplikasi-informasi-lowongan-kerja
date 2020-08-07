<?php
class Home extends CI_Controller {

        public function index()
        {
               $this->load->view('_parents/header');
               $this->load->view('_parents/sidebar');
               $this->load->view('content');
               $this->load->view('_parents/footer');
        }
}