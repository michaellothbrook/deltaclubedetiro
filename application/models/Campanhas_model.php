<?php

class Campanhas_model extends CI_Model
{
    public function getCampanhaById($id = NULL)
    {
        if($id) {
            return $this->db
                ->where("id_campanha", $id)
                ->get("campanha")
                ->row_array();
        } else {
            return array("response"=>"ID is required!");
        }
    }
}