<?php

class Product extends Entity
{
	var $id;
	var $title;
	var $description;
	var $type;
	var $state;

	var $image;
	var $manuales;
	var $brochures;

	public function GetTitle()
	{
	    return $this->title;
	}
	
	public function SetTitle($title)
	{
	    $this->title = $title;
	}

	public function GetDescription()
	{
	    return $this->description;
	}
	
	public function SetDescription($description)
	{
	    $this->description = $description;
	}

	public function GetType()
	{
	    return $this->type;
	}
	
	public function SetType($type)
	{
	    $this->type = $type;
	}

	public function GetManuales()
	{
	    return $this->manuales;
	}
	
	public function SetManuales($manuales)
	{
	    $this->manuales = $manuales;
	}

	public function GetBrochures()
	{
	    return $this->brochures;
	}
	
	public function SetBrochures($brochures)
	{
	    $this->brochures = $brochures;
	}

	public function GetImage()
	{
	    return $this->image;
	}
	
	public function SetImage($image)
	{
	    $this->image = $image;
	}
}