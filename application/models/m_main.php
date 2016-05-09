<?php

class m_main extends CI_Model {

	function m_main(){
		parent::__construct();
	}

	function getSummary(){
		$query = $this->db->query(
			"SELECT 
			industri.*,
			(SELECT count(NOMOR_INDUK) from apply_pkl where STATUS_ACC = 1 AND apply_pkl.ID_PENERIMAAN=penerimaan_pkl.ID_PENERIMAAN) as jumlah
			from industri,apply_pkl,penerimaan_pkl where penerimaan_pkl.ID_USER_FK=industri.ID_USER AND apply_pkl.ID_PENERIMAAN=penerimaan_pkl.ID_PENERIMAAN GROUP BY ID_USER")->result_array();
		return $query;
	}

}

?>