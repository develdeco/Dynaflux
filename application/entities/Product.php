<?php

class Product extends Entity
{
	var $id_product;
	var $title;
	var $description;
	var $type;
	var $state;

	var $manuales;
	var $brochures;

	public function getId_product()
	{
	    return $this->id_product;
	}
	
	public function setId_product($id_product)
	{
	    $this->id_product = $id_product;
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
}