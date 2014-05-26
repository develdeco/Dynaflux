<?php

class File
{
	var $idFile;
	var $path;
	var $name;
	var $type;

	public function getIdFile()
	{
	    return $this->idFile;
	}
	
	public function setIdFile($idFile)
	{
	    $this->idFile = $idFile;
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