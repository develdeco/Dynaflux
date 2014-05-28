<?php

class Category extends Entity
{
	var $id;
	var $name;

	public function GetName()
	{
	    return $this->name;
	}
	
	public function SetName($name)
	{
	    $this->name = $name;
	}
}