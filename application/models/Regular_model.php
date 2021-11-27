<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Regular_model extends CI_Model
{
    function get_regular($search = "")
    {
        $this->db->select('*');
        $this->db->from('regular');
        $this->db->like('verb_one', $search);
        $this->db->or_like('verb_two', $search);
        $this->db->or_like('verb_three', $search);
        $this->db->or_like('translate', $search);
        $query = $this->db->get();
        return $query->result_array();
    }

    function insert_regular($data = array())
    {
        $jumlah = count($data);
        if ($jumlah > 0) {
            $this->db->insert_batch('regular', $data);
        }
    }
}
