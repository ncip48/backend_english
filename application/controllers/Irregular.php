<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Irregular extends CI_Controller
{
    public function index()
    {
        $this->load->model('irregular_model', 'irregular');
        $data['irregular'] = $this->irregular->get_irregular();
        $data['pacar'] = 'Aini';
        $this->load->view('irregular', $data);
    }
}
