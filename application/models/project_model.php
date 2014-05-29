<?php

class Project_Model extends Translation_Model
{
	function __construct()
	{
		parent::__construct();
        $this->table = 'project';
        $this->entityClass = 'Project';
	}

	function OnRelationship(&$entity, $relationships)
	{
		
	}

	function GetCompleted()
	{
		$this->db->limit(10);
		return $this->db->get_where($this->table, array('state' => 'completed'))->result($this->entityClass);
	}

	function GetProject($id_project)
	{
		$project = $this->GetEntity($id_project);
		$this->db->get_where($this->table.'_')
	}
}