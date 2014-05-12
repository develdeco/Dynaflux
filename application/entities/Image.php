<?php

class Image
{
	var $id_image;
	var $path;
	var $name;

	public function getId_image()
	{
	    return $this->id_image;
	}
	
	public function setId_image($id_image)
	{
	    $this->id_image = $id_image;
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