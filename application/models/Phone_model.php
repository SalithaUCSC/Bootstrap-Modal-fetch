<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Phone_model extends CI_Model {

	// function to fetch all phone
	public function get_phones()
	{
	    $this->db->select('*');
	    $this->db->order_by('phone_id','DESC');
	    $query = $this->db->get('phones');
	    return $query->result();

	}
	// function that finds the phone by its ID to display in th Bootstrap modal
	public function get_search_phone($phoneData)
	{
		$this->db->select('*');
		$this->db->where('phone_id',$phoneData);
		$res2 = $this->db->get('phones');
		return $res2;
	}

}

/* End of file Phone_model.php */
/* Location: ./application/models/Phone_model.php */