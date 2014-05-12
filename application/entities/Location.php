<?php

class Location
{
	var $id_location;
	var $name;
	var $latitude;
	var $longitude;
	var $address;

	public function getId_location()
	{
	    return $this->id_location;
	}
	
	public function setId_location($id_location)
	{
	    $this->id_location = $id_location;
	}

	public function getName()
	{
	    return $this->name;
	}
	
	public function setName($name)
	{
	    $this->name = $name;
	}

	public function getLatitude()
	{
	    return $this->latitude;
	}
	
	public function setLatitude($latitude)
	{
	    $this->latitude = $latitude;
	}

	public function getLongitude()
	{
	    return $this->longitude;
	}
	
	public function setLongitude($longitude)
	{
	    $this->longitude = $longitude;
	}

	public function getAddress()
	{
	    return $this->address;
	}
	
	public function setAddress($address)
	{
	    $this->address = $address;
	}
}