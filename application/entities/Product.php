<?php

class Product
{
	var $idProduct;
	var $title;
	var $description;
	var $type;
	var $state;

	var $image;
	var $manuales;
	var $brochures;

	public function getIdProduct()
	{
	    return $this->idProduct;
	}
	
	public function setIdProduct($idProduct)
	{
	    $this->idProduct = $idProduct;
	}

	public function getTitle()
	{
	    return $this->title;
	}
	
	public function setTitle($title)
	{
	    $this->title = $title;
	}

	public function getDescription()
	{
	    return $this->description;
	}
	
	public function setDescription($description)
	{
	    $this->description = $description;
	}

	public function getType()
	{
	    return $this->type;
	}
	
	public function setType($type)
	{
	    $this->type = $type;
	}

	public function getManuales()
	{
	    return $this->manuales;
	}
	
	public function setManuales($manuales)
	{
	    $this->manuales = $manuales;
	}

	public function getBrochures()
	{
	    return $this->brochures;
	}
	
	public function setBrochures($brochures)
	{
	    $this->brochures = $brochures;
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