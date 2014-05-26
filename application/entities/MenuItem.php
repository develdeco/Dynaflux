<?php

class MenuItem
{
	var $idItem;
	var $idMenu;
	var $idParent;
	var $name;
	var $level;
	var $type;
	var $link;
	
	var $items;

	public function getIdItem()
	{
	    return $this->idItem;
	}
	
	public function setIdItem($idItem)
	{
	    $this->idItem = $idItem;
	}

	public function getIdMenu()
	{
	    return $this->idMenu;
	}
	
	public function setIdMenu($idMenu)
	{
	    $this->idMenu = $idMenu;
	}

	public function getIdParent()
	{
	    return $this->idParent;
	}
	
	public function setIdParent($idParent)
	{
	    $this->idParent = $idParent;
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