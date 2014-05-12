<?php

class File
{
	var $id_file;
	var $path;
	var $name;
	var $type;

	public function getId_file()
	{
	    return $this->id_file;
	}
	
	public function setId_file($id_file)
	{
	    $this->id_file = $id_file;
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

	public function getType()
	{
	    return $this->type;
	}
	
	public function setType($type)
	{
	    $this->type = $type;
	}
}