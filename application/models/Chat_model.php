<?php

class Chat_model extends CI_Model
{
    public function chatPerson($pengirim, $penerima)
    {
        // return $this->db->order_by('id', 'ASC')->get('chat', ['u_pengirim' => $pengirim], ['u_penerima' => $penerima])->result_array();
        if ($pengirim) {
            $this->db->where('u_pengirim', $pengirim);
            $this->db->where('u_penerima', $penerima);
            $this->db->or_where('u_pengirim', $penerima);
            $this->db->or_where('u_penerima', $pengirim);
            return $this->db->get('chat')->result_array();
        }
    }
    public function getAllKonseli()
    {
        return $this->db->get('konseli')->result_array();
    }
    public function getAllChat()
    {
        return $this->db->get_where('chat')->result_array();
    }
}
