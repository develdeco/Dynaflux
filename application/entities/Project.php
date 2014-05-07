<?php

class Project extends Entity
{
	var $id_project;
	var $name;
	var $description;
	var $state;

	var $images;

	public function getId_project()
	{
	    return $this->id_project;
	}
	
	public function setId_project($id_project)
	{
	    $this->id_project = $id_project;
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

	public function getState()
	{
	    return $this->state;
	}
	
	public function setState($state)
	{
	    $this->state = $state;
	}

	public function getImages()
	{
	    return $this->images;
	}
	
	public function setImages($images)
	{
	    $this->images = $images;
	}
}