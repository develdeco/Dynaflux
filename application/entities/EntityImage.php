<?php

class EntityImage
{
	var $id_n2n;
	var $id_entity;
	var $id_image;
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

	public function getId_image()
	{
	    return $this->id_image;
	}
	
	public function setId_image($id_image)
	{
	    $this->id_image = $id_image;
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