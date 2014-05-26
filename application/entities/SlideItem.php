<?php

class SlideItem
{
	var $idSlideItem;
	var $ReferenceId;
	var $ReferenceType;
	var $title;

	var $largeImage;
	var $smallImage;

	public function getIdSlideItem()
	{
	    return $this->idSlideItem;
	}
	
	public function setIdSlideItem($idSlideItem)
	{
	    $this->idSlideItem = $idSlideItem;
	}

	public function getReferenceId()
	{
	    return $this->ReferenceId;
	}
	
	public function setReferenceId($ReferenceId)
	{
	    $this->ReferenceId = $ReferenceId;
	}

	public function getReferenceType()
	{
	    return $this->ReferenceType;
	}
	
	public function setReferenceType($ReferenceType)
	{
	    $this->ReferenceType = $ReferenceType;
	}
	
	public function getTitle()
	{
	    return $this->title;
	}
	
	public function setTitle($title)
	{
	    $this->title = $title;
	}

	public function getLargeImage()
	{
	    return $this->largeImage;
	}
	
	public function setLargeImage($largeImage)
	{
	    $this->largeImage = $largeImage;
	}

	public function getSmallImage()
	{
	    return $this->smallImage;
	}
	
	public function setSmallImage($smallImage)
	{
	    $this->smallImage = $smallImage;
	}

}