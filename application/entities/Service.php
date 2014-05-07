<?php

class Service extends Entity
{
	var $id_service;
	var $name;
	var $description;

	var $icon;

	public function getId_service()
	{
	    return $this->id_service;
	}
	
	public function setId_service($id_service)
	{
	    $this->id_service = $id_service;
	}

	public function getName()
	{
	    return $this->name;
	}
	
	public function setName($name)
	{
	    $this->name = $name;
	}

	public function getDescription()
	{
	    return $this->description;
	}
	
	public function setDescription($description)
	{
	    $this->description = $description;
	}

	public function getIcon()
	{
	    return $this->icon;
	}
	
	public function setIcon($icon)
	{
	    $this->icon = $icon;
	}
}