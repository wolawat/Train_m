<?php defined('BASEPATH') OR exit('No direct script access allowed');
class M_train extends CI_Model {
    function __construct(){
        parent::__construct();
    }
    function insert_notes($result){
        $this->db->insert('notes',$result);
    }
    function insert_origin($result1){
        $this->db->insert('origin',$result1);
    }
    function insert_huayrach($result2){
        $this->db->insert('huayrach',$result2);
    }
    function insert_destination($result3){
        $this->db->insert('destination',$result3);
    }
    function view_table(){
		$this->db->select('*');
        $this->db->from('notes');
        $this->db->join('origin', 'origin.n_id = notes.n_id', 'left');
        $this->db->join('huayrach', 'huayrach.n_id = notes.n_id', 'left');
        $this->db->join('destination', 'destination.n_id = notes.n_id', 'left');
        //$this->db->where('stations',"นครราชสีมา");
        //$this->db->where('note',"รถดีเซลราง");
        
        
        $query = $this->db->get();
        return $query->result();
        }
}