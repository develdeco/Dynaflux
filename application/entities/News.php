<?php 

class News extends Entity
{
	var $id;
	var $title;
	var $content;
	var $date;
	
	var $images;

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

	public function GetDate()
	{
	    return $this->date;
	}
	
	public function SetDate($date)
	{
	    $this->date = $date;
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