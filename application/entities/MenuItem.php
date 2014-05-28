<?php

class MenuItem extends Entity
{
	var $id;
	var $menuId;
	var $parentId;
	var $name;
	var $level;
	var $type;
	var $link;
	
	var $items;

	public function GetMenuId()
	{
	    return $this->menuId;
	}
	
	public function SetMenuId($menuId)
	{
	    $this->menuId = $menuId;
	}
	
	public function GetParentId()
	{
	    return $this->parentId;
	}
	
	public function SetParentId($parentId)
	{
	    $this->parentId = $parentId;
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

	public function GetType()
	{
	    return $this->type;
	}
	
	public function SetType($type)
	{
	    $this->type = $type;
	}

	public function GetLink()
	{
	    return $this->link;
	}
	
	public function SetLink($link)
	{
	    $this->link = $link;
	}

	public function GetItems()
	{
	    return $this->items;
	}
	
	public function SetItems($items)
	{
	    $this->items = $items;
	}
}