<?php 

class News
{
	var $idNews;
	var $title;
	var $content;
	var $date;
	
	var $images;

	public function getIdNews()
	{
	    return $this->idNews;
	}
	
	public function setIdNews($idNews)
	{
	    $this->idNews = $idNews;
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