<?php

class SlideItem extends Entity
{
	var $id;
	var $title;
	var $ReferenceId;
	var $ReferenceType;

	var $largeImage;
	var $smallImage;

	public function GetTitle()
	{
	    return $this->title;
	}
	
	public function SetTitle($title)
	{
	    $this->title = $title;
	}
	
	public function GetReferenceId()
	{
	    return $this->ReferenceId;
	}
	
	public function SetReferenceId($ReferenceId)
	{
	    $this->ReferenceId = $ReferenceId;
	}

	public function GetReferenceType()
	{
	    return $this->ReferenceType;
	}
	
	public function SetReferenceType($ReferenceType)
	{
	    $this->ReferenceType = $ReferenceType;
	}

	public function GetLargeImage()
	{
	    return $this->largeImage;
	}
	
	public function SetLargeImage($largeImage)
	{
	    $this->largeImage = $largeImage;
	}

	public function GetSmallImage()
	{
	    return $this->smallImage;
	}
	
	public function SetSmallImage($smallImage)
	{
	    $this->smallImage = $smallImage;
	}

}