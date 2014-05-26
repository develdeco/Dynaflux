<?php

class Category
{
	var $idEntity;
	var $name;

	public function getIdEntity()
	{
	    return $this->idEntity;
	}
	
	public function setIdEntity($idEntity)
	{
	    $this->idEntity = $idEntity;
	}

	public function getName()
	{
	    return $this->name;
	}
	
	public function setName($name)
	{
	    $this->name = $name;
	}
}