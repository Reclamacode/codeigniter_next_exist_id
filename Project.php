<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Project extends CI_Controller {
	public function get_previous_exist_id($id,$your_table_name){
		$query_previous = $this->db->select("id")->from($your_table_name)->where('id <',$id)->order_by("id","desc")->limit(1)->get();
        foreach($query_previous->result_array() as $row_previous){
                $previous_exist_id=$row_previous['id'];
                return $previous_exist_id;
        }
	}

	public function get_next_exist_id($id,$your_table_name){
		$query_next = $this->db->select("id")->from($your_table_name)->where('id >',$id)->order_by("id","asc")->limit(1)->get();
        foreach($query_next->result_array() as $row_next){
                $next_exist_id=$row_next['id'];
                return $next_exist_id;
        }
	}

}

