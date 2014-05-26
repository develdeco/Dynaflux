<?php

class EntityCreation
{
	var $idEntityCreation;
	var $EntityId;
	var $EntityType;
	var $EntityTitle;
	var $date;

	public function getIdEntityCreation()
	{
	    return $this->idEntityCreation;
	}
	
	public function setIdEntityCreation($idEntityCreation)
	{
	    $this->idEntityCreation = $idEntityCreation;
	}

	public function getEntityId()
	{
	    return $this->EntityId;
	}
	
	public function setEntityId($EntityId)
	{
	    $this->EntityId = $EntityId;
	}

	public function getEntityType()
	{
	    return $this->EntityType;
	}
	
	public function setEntityType($EntityType)
	{
	    $this->EntityType = $EntityType;
	}

	public function getEntityTitle()
	{
	    return $this->EntityTitle;
	}
	
	public function setEntityTitle($EntityTitle)
	{
	    $this->EntityTitle = $EntityTitle;
	}
	
	public function getDate()
	{
	    return $this->date;
	}
	
	public function setDate($date)
	{
	    $this->date = $date;
	}
}