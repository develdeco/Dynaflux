<?php

class SlideItem
{
	var $id_slideitem;
	var $title;
	var $reference_id;
	var $reference_type;
	var $id_image;

	var $image;

	public function getId_slideitem()
	{
	    return $this->id_slideitem;
	}
	
	public function setId_slideitem($id_slideitem)
	{
	    $this->id_slideitem = $id_slideitem;
	}

	public function getTitle()
	{
	    return $this->title;
	}
	
	public function setTitle($title)
	{
	    $this->title = $title;
	}

	public function getReference_id()
	{
	    return $this->reference_id;
	}
	
	public function setReference_id($reference_id)
	{
	    $this->reference_id = $reference_id;
	}

	public function getReference_type()
	{
	    return $this->reference_type;
	}
	
	public function setReference_type($reference_type)
	{
	    $this->reference_type = $reference_type;
	}

	public function getId_image()
	{
	    return $this->id_image;
	}
	
	public function setId_image($id_image)
	{
	    $this->id_image = $id_image;
	}

	public function getImage()
	{
	    return $this->image;
	}
	
	public function setImage($image)
	{
	    $this->image = $image;
	}
}