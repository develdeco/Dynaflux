<?php

class Menu
{
	var $idMenu;
	var $name;
	var $description;

	var $items;

	public function getIdMenu()
	{
	    return $this->idMenu;
	}
	
	public function setIdMenu($idMenu)
	{
	    $this->idMenu = $idMenu;
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

	public function getItems()
	{
	    return $this->items;
	}
	
	public function setItems($items)
	{
	    $this->items = $items;
	}
}