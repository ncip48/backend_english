<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Irregular_model extends CI_Model
{
    // Fetch siswa
    function get_irregular($search = "")
    {
        $this->db->select('*');
        $this->db->from('irregular');
        $this->db->like('verb_one', $search);
        $this->db->or_like('verb_two', $search);
        $this->db->or_like('verb_three', $search);
        $this->db->or_like('verb_ing', $search);
        $this->db->or_like('translate', $search);
        $query = $this->db->get();
        return $query->result_array();
    }

    public function insert_entry()
    {
        $this->title    = $_POST['title']; // please read the below note
        $this->content  = $_POST['content'];
        $this->date     = time();

        $this->db->insert('entries', $this);
    }

    public function update_entry()
    {
        $this->title    = $_POST['title'];
        $this->content  = $_POST['content'];
        $this->date     = time();

        $this->db->update('entries', $this, array('id' => $_POST['id']));
    }
}
