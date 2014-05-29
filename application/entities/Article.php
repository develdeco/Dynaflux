<?php

class Article extends Entity
{
	var $id;
	var $title;
	var $content;
	var $type;

	public function GetTitle()
	{
	    return $this->title;
	}
	
	public function SetTitle($title)
	{
	    $this->title = $title;
	}

	public function GetContent()
	{
	    return $this->content;
	}
	
	public function SetContent($content)
	{
	    $this->content = $content;
	}

	public function GetType()
	{
	    return $this->type;
	}
	
	public function SetType($type)
	{
	    $this->type = $type;
	}
}