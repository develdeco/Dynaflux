<?php

class Product_Model extends Base_Model
{
	function __construct()
	{
		parent::__construct();
        $this->table = 'product';
        $this->entity_class = 'Product';
        $this->id_name = 'id_product';
	}

	function on_relationship(&$entity, $relationships)
	{
		
	}

	function get_oustanding()
	{
		$this->db->limit(4);
		return $this->db->get_where($this->table, array('state' => 'oustanding'))->result($this->entity_class);
	}
}