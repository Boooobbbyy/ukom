<?php

class Us_model extends CI_Model
{
    public function getallus()
    {
        return $this->db->get('user')->result_array();
    }
}
