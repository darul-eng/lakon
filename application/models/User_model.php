<?php

class User_model extends CI_Model
{
    // public function getUserByRole($role, $limit, $start, $keyword = null)
    // {
    //     if ($keyword) {
    //         $array = array('fullname' => $keyword, 'role' => $role);
    //         $this->db->like($array);
    //         // $this->db->or_like('nis_nik', $keyword);
    //     }
    //     $query = $this->db->get_where('users', array('role' => $role), $limit, $start);
    //     return $query->result_array();
    // }
    public function getAllKonselor()
    {
        return $this->db->get('konselor')->result_array();
    }
    public function getKonselor($limit, $start, $keyword = null)
    {
        if ($keyword) {
            $this->db->like('nama_lengkap', $keyword);
            $this->db->or_like('nik', $keyword);
        }
        return $this->db->get('konselor', $limit, $start)->result_array();
    }
    public function countAllKonselor()
    {
        // $query = $this->db->get_where('users', array('role' => $role));
        $query = $this->db->get('konselor');
        return $query->num_rows();
    }
    public function getKonselorById($id)
    {
        return $this->db->get_where('konselor', ['id' => $id])->row_array();
    }
    public function storekonselor($data)
    {
        $this->db->insert('konselor', $data);
    }
    public function updatekonselor($data)
    {
        $this->db->where('id', $this->input->post('id'));
        $this->db->update('konselor', $data);
    }
    public function destroyKonselor($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('konselor');
    }

    // Model untuk konseli
    public function getKonseli($limit, $start, $keyword = null)
    {
        if ($keyword) {
            $this->db->like('nama_lengkap', $keyword);
            $this->db->or_like('nis', $keyword);
        }
        return $this->db->get('konseli', $limit, $start)->result_array();
    }
    public function countAllKonseli()
    {
        // $query = $this->db->get_where('users', array('role' => $role));
        $query = $this->db->get('konseli');
        return $query->num_rows();
    }
    public function storekonseli($data)
    {
        $this->db->insert('konseli', $data);
    }
    public function getKonseliById($id)
    {
        return $this->db->get_where('konseli', ['id' => $id])->row_array();
    }
    public function updatekonseli($data)
    {
        $this->db->where('id', $this->input->post('id'));
        $this->db->update('konseli', $data);
    }
    public function destroyKonseli($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('konseli');
    }
}
