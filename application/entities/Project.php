<?php

class Project
{
	var $idProject;
	var $name;
	var $description;
	var $state;

	var $images;

	public function getIdProject()
	{
	    return $this->idProject;
	}
	
	public function setIdProject($idProject)
	{
	    $this->idProject = $idProject;
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