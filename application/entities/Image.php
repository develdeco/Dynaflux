<?php

class Image
{
	var $idImage;
	var $path;
	var $name;

	public function getIdImage()
	{
	    return $this->idImage;
	}
	
	public function setIdImage($idImage)
	{
	    $this->idImage = $idImage;
	}

	public function getPath()
	{
	    return $this->path;
	}
	
	public function setPath($path)
	{
	    $this->path = $path;
	}

	public function getName()
	{
	    return $this->name;
	}
	
	public function setName($name)
	{
	    $this->name = $name;
	}
}