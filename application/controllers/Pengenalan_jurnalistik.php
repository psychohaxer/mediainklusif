<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengenalan_jurnalistik extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->page_category = 'landing';
        $this->page_name = 'pengenalan_jurnalistik';
    }

    public function index()
    {
        $meta['page_title'] = 'Pengenalan Jurnalistik';
        $meta['navbar_mode'] = 'jurnalistik';

        $this->load->view($this->page_category . '/header', $meta);
        $this->load->view($this->page_category . '/navbar', $meta);
        $this->load->view($this->page_category . '/' . $this->page_name);
        $this->load->view($this->page_category . '/footer');
    }
}
