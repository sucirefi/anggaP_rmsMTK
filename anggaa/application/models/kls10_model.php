<?php
	class kls10_model extends CI_Model{
		function getALLData(){
			$this->db->order_by("no","DESC");
			$query = $this->db->get("rmskls10");
			return $query;
		}
	}
?>
