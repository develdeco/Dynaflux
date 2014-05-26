<?php

class Service
{
	var $idService;
	var $name;
	var $description;

	var $icon;

	public function getIdService()
	{
	    return $this->idService;
	}
	
	public function setIdService($idService)
	{
	    $this->idService = $idService;
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