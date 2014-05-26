<?php

class Article
{
	var $idEntity;
	var $title;
	var $content;
	var $type;

	public function getIdEntity()
	{
	    return $this->idEntity;
	}
	
	public function setIdEntity($idEntity)
	{
	    $this->idEntity = $idEntity;
	}

	public function getTitle()
	{
	    return $this->title;
	}
	
	public function setTitle($title)
	{
	    $this->title = $title;
	}

	public function getContent()
	{
	    return $this->content;
	}
	
	public function setContent($content)
	{
	    $this->content = $content;
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