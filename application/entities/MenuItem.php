<?php

class MenuItem
{
	var $id_item;
	var $id_menu;
	var $id_parent;
	var $name;
	var $level;
	var $type;
	var $link;
	
	var $items;

	public function getId_item()
	{
	    return $this->id_item;
	}
	
	public function setId_item($id_item)
	{
	    $this->id_item = $id_item;
	}

	public function getId_menu()
	{
	    return $this->id_menu;
	}
	
	public function setId_menu($id_menu)
	{
	    $this->id_menu = $id_menu;
	}

	public function getId_parent()
	{
	    return $this->id_parent;
	}
	
	public function setId_parent($id_parent)
	{
	    $this->id_parent = $id_parent;
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

	public function getType()
	{
	    return $this->type;
	}
	
	public function setType($type)
	{
	    $this->type = $type;
	}

	public function getLink()
	{
	    return $this->link;
	}
	
	public function setLink($link)
	{
	    $this->link = $link;
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