<?php

class PersonaModel extends CI_Model
{

    public $table = "persona";
    public $table_id = "id";

    public function __construct()
    {
        $this->load->database();
    }

    public function create($data)
    {
        $this->db->insert($this->table, $data);
        return $this->db->insert_id();
    }

    public function findAll()
    {
        $this->db->select();
        $this->db->from($this->table);
        $this->db->where("estado = 0");
        return $this->db->get()->result();
    }

    public function findPerson($id)
    {
        $this->db->select();
        $this->db->from($this->table);
        $this->db->where($this->table_id, $id);
        return $this->db->get()->row();
    }

    public function update($id, $data)
    {
        $this->db->where($this->table_id, $id);
        $execute = $this->db->update($this->table, $data);
        return ($execute) ? true : false;
    }

    public function deletelogic($id, $data)
    {
        $this->db->where($this->table_id, $id);
        $execute =  $this->db->update($this->table, $data);
        return ($execute) ? true : false;
    }
}
