<?php 

class News
{
	var $id_new;
	var $title;
	var $content;
	var $date;
	
	var $images;

	public function getId_new()
	{
	    return $this->id_new;
	}
	
	public function setId_new($id_new)
	{
	    $this->id_new = $id_new;
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

	public function getDate()
	{
	    return $this->date;
	}
	
	public function setDate($date)
	{
	    $this->date = $date;
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