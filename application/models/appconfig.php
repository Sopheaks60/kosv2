<?php
class Appconfig extends CI_Model{
	function __construct(){
		parent::__construct();
		$this->load->database();
	}

	function get_config()
	{
		$query = $this->db->get('kosv2_appconfigs');
		return $query->result();
	}

	function update_appconfig($config_name = '',$config_value='')
	{
		$arr_data = array(
				'config_value'=>$config_value,
				);
		// Insert Value to Table
		$this->db->where('config_name', $config_name);
		$this->db->update('kosv2_appconfigs', $arr_data); 
	}
}
?>
