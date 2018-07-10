<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Fakultas_model extends CI_Model
{

    public $table = 'fakultas';
    public $id = 'id_fakultas';
    public $order = 'DESC';

    function __construct()
    {
        parent::__construct();
    }

    // get all
    function get_all()
    {
        $this->db->order_by($this->id, $this->order);
        return $this->db->get($this->table)->result();
    }

    // get data by id
    function get_by_id($id)
    {
        $this->db->where($this->id, $id);
        return $this->db->get($this->table)->row();
    }
    
    // get total rows
    function total_rows($q = NULL) {
        $this->db->like('id_fakultas', $q);
	$this->db->or_like('nama_fakultas', $q);
	$this->db->from($this->table);
        return $this->db->count_all_results();
    }

    // get data with limit and search
    function get_limit_data($limit, $start = 0, $q = NULL) {
        $this->db->order_by($this->id, $this->order);
        $this->db->like('id_fakultas', $q);
	$this->db->or_like('nama_fakultas', $q);
	$this->db->limit($limit, $start);
        return $this->db->get($this->table)->result();
    }

    // insert data
    function insert($data)
    {
        $this->db->insert($this->table, $data);
    }

    // update data
    function update($id, $data)
    {
        $this->db->where($this->id, $id);
        $this->db->update($this->table, $data);
    }

    // delete data
    function delete($id)
    {
        $this->db->where($this->id, $id);
        $this->db->delete($this->table);
    }

    function get_user_data() {
        
        $id = $this->session->userdata('is_id');
        $this->db->join('prodi','prodi.id_prodi=user.id_prodi');

        $returnresults = $this->db->get_where('user', array('id_user' => $id));
        if ($returnresults->num_rows() > 0)
        $row = $returnresults->row();

        $data = array (
                'id_user' => $row->id_user,
                'nim' => $row->nim,
                'nama'=> $row->nama,
                'email'=> $row->email,
                'foto_profil'=> $row->foto_profil,
                'id_prodi'=> $row->id_prodi,
                'nama_prodi'=> $row->nama_prodi,
                'level'=> $row->level
                );

        return $data;
    }

}

/* End of file Fakultas_model.php */
/* Location: ./application/models/Fakultas_model.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2018-05-27 07:59:01 */
/* http://harviacode.com */