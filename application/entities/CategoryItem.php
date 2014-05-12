<?php

class CategoryItem
{
	var $id_categoryitem;
	var $id_category;
	var $name;
	var $level;
	var $id_parent;

	public function getId_categoryitem()
	{
	    return $this->id_categoryitem;
	}
	
	public function setId_categoryitem($id_categoryitem)
	{
	    $this->id_categoryitem = $id_categoryitem;
	}

	public function getId_category()
	{
	    return $this->id_category;
	}
	
	public function setId_category($id_category)
	{
	    $this->id_category = $id_category;
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

	public function getId_parent()
	{
	    return $this->id_parent;
	}
	
	public function setId_parent($id_parent)
	{
	    $this->id_parent = $id_parent;
	}
}