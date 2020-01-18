<?php

class Forms_data_model extends CI_Model
{
    public function insert($dados = null, $id = null) {
		
		if ($dados) {
			if ($id) {
				$this->db->where('id', $id);
				if ($this->db->update("table_data", $dados)) {
					return true;
				} else {
					return false;
				}
			} else {
				if ($this->db->insert("table_data", $dados)) {
					return true;
				} else {
					return false;
				}
			}
		}
    }
}