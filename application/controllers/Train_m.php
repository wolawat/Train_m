<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Train_m extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->library('session', 'database');
		$this->load->model('M_train','TM');
		$this->load->helper('url');
	}
    public function index()
    {
    $result['TM'] = $this->TM->view_table();
    $this->load->view('index',$result);
	}  
	  
	public function insert_Register(){
        $result = array(
            'n_id' => $this->input->post("n_id"),
            'note' => $this->input->post("note"),
            
        );

        $result1 = array(   
            'n_id'=> $this->input->post("n_id"),
            'station' => $this->input->post("station"),
            'time_out' => $this->input->post("time_out"),
            
        );

        $result2 = array(
            'n_id'=> $this->input->post("n_id"),
            'to' => $this->input->post("to"),
            'out' => $this->input->post("out"),
        );

        $result3 = array(
            'n_id' => $this->input->post("n_id"),
            'stations' => $this->input->post("stations"),
            'to_time' => $this->input->post("to_time"),
            
        );
        
        

        if($this->input->post("note")!= "" && $this->input->post("n_id")!== ""){
            $this->TM->insert_notes($result);
            $this->TM->insert_origin($result1);
            $this->TM->insert_huayrach($result2);
            $this->TM->insert_destination($result3);
			$result['TM'] = $this->TM->view_table();
            $this->load->view('index',$result);
        }else {
            echo "ไม่สามารถเพิ่มข้อมูลได้ค่ะ !";
        }

    }
	public function add_data()
    {
    $this->load->view('add_data');
    }    
}