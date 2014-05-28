<?php

class Product_Model extends Translation_Model
{
	function __construct()
	{
		parent::__construct();
        $this->table = 'product';
        $this->entity_class = 'Product';
	}

	function OnRelationship(&$entity, $relationships)
	{
		
	}

	function GetOustanding()
	{
		$this->db->limit(4);
		return $this->db->get_where($this->table, array('state' => 'oustanding'))->result($this->entity_class);
	}
}