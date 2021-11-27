<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     *	- or -
     * 		http://example.com/index.php/welcome/index
     *	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    public function index()
    {
        $data['menu'] = 'menu-1';
        $data['title'] = 'Daftar siswa';
        $data['user'] = $this->db->get_where('irregular', ['verb_one' => 'arrive'])->row_array();

        $this->load->view('template/admin/template', $data);
        $this->load->view('template/admin/sidebar', $data);
        $this->load->view('template/admin/topbar', $data);
        $this->load->view('admin/dashboard', $data);
        $this->load->view('template/admin/footer', $data);
    }

    public function irregular()
    {
        $data['menu'] = 'irregular';
        $data['title'] = 'Irregular Verb';
        $data['user'] = $this->db->get_where('irregular', ['verb_one' => 'arrive'])->row_array();

        $this->load->view('template/admin/template', $data);
        $this->load->view('template/admin/sidebar', $data);
        $this->load->view('template/admin/topbar', $data);
        $this->load->view('admin/irregular', $data);
        $this->load->view('template/admin/footer', $data);
    }

    public function regular()
    {
        $data['menu'] = 'regular';
        $data['title'] = 'Regular Verb';
        $data['user'] = $this->db->get_where('irregular', ['verb_one' => 'arrive'])->row_array();

        $this->load->view('template/admin/template', $data);
        $this->load->view('template/admin/sidebar', $data);
        $this->load->view('template/admin/topbar', $data);
        $this->load->view('admin/regular', $data);
        $this->load->view('template/admin/footer', $data);
    }
}
