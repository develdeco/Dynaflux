<?php

class Project_Model extends Base_Model
{
	function __construct()
	{
		parent::__construct();
        $this->table = 'project';
        $this->entity_class = 'Project';
        $this->id_name = 'id_project';
	}

	function on_relationship(&$entity, $relationships)
	{
		
	}

	function get_completed()
	{
		$this->db->limit(10);
		return $this->db->get_where($this->table, array('state' => 'completed'))->result($this->entity_class);
	}

	function get_project($id_project)
	{
		$project = $this->get_entity($id_project);
		$this->db->get_where($this->table.'_')
	}
}