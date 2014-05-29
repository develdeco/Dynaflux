<?php

class CategoryItem extends Entity
{
	var $id;
	var $categoryId;
	var $name;
	var $level;
	var $idParent;
	
	public function GetCategoryId()
	{
	    return $this->categoryId;
	}
	
	public function SetCategoryId($categoryId)
	{
	    $this->categoryId = $categoryId;
	}

	public function GetName()
	{
	    return $this->name;
	}
	
	public function SetName($name)
	{
	    $this->name = $name;
	}

	public function GetLevel()
	{
	    return $this->level;
	}
	
	public function SetLevel($level)
	{
	    $this->level = $level;
	}

	public function GetIdParent()
	{
	    return $this->idParent;
	}
	
	public function SetIdParent($idParent)
	{
	    $this->idParent = $idParent;
	}
}