<?php

class CategoryItem
{
	var $idEntity;
	var $idCategory;
	var $name;
	var $level;
	var $idParent;
	
	public function getIdEntity()
	{
	    return $this->idEntity;
	}
	
	public function setIdEntity($idEntity)
	{
	    $this->idEntity = $idEntity;
	}

	public function getIdCategory()
	{
	    return $this->idCategory;
	}
	
	public function setIdCategory($idCategory)
	{
	    $this->idCategory = $idCategory;
	}

	public function getName()
	{
	    return $this->name;
	}
	
	public function setName($name)
	{
	    $this->name = $name;
	}

	public function getLevel()
	{
	    return $this->level;
	}
	
	public function setLevel($level)
	{
	    $this->level = $level;
	}

	public function getIdParent()
	{
	    return $this->idParent;
	}
	
	public function setIdParent($idParent)
	{
	    $this->idParent = $idParent;
	}
}