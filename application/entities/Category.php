<?php

class Category
{
	var $id_category;
	var $name;
	var $id_name;

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

	public function getId_name()
	{
	    return $this->id_name;
	}
	
	public function setId_name($id_name)
	{
	    $this->id_name = $id_name;
	}
}