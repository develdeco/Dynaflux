<?php

class Project extends Entity
{
	var $id;
	var $name;
	var $description;
	var $state;

	var $images;

	public function GetName()
	{
	    return $this->name;
	}
	
	public function SetName($name)
	{
	    $this->name = $name;
	}

	public function GetDescription()
	{
	    return $this->description;
	}
	
	public function SetDescription($description)
	{
	    $this->description = $description;
	}

	public function GetState()
	{
	    return $this->state;
	}
	
	public function SetState($state)
	{
	    $this->state = $state;
	}

	public function GetImages()
	{
	    return $this->images;
	}
	
	public function SetImages($images)
	{
	    $this->images = $images;
	}
}