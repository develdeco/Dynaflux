<?php

class EntityFile
{
	var $id_n2n;
	var $id_entity;
	var $id_file;
	var $group;

	public function getId_n2n()
	{
	    return $this->id_n2n;
	}
	
	public function setId_n2n($id_n2n)
	{
	    $this->id_n2n = $id_n2n;
	}

	public function getId_entity()
	{
	    return $this->id_entity;
	}
	
	public function setId_entity($id_entity)
	{
	    $this->id_entity = $id_entity;
	}

	public function getId_file()
	{
	    return $this->id_file;
	}
	
	public function setId_file($id_file)
	{
	    $this->id_file = $id_file;
	}

	public function getGroup()
	{
	    return $this->group;
	}
	
	public function setGroup($group)
	{
	    $this->group = $group;
	}
}