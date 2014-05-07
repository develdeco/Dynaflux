<?php

class Menu extends Entity
{
	var $id_menu;
	var $name;
	var $description;

	var $items;

	public function getId_menu()
	{
	    return $this->id_menu;
	}
	
	public function setId_menu($id_menu)
	{
	    $this->id_menu = $id_menu;
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