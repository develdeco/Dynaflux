<?php

class EntityCreation extends Entity
{
	var $id;
	var $EntityId;
	var $EntityType;
	var $EntityTitle;
	var $date;

	public function GetEntityId()
	{
	    return $this->EntityId;
	}
	
	public function SetEntityId($EntityId)
	{
	    $this->EntityId = $EntityId;
	}

	public function GetEntityType()
	{
	    return $this->EntityType;
	}
	
	public function SetEntityType($EntityType)
	{
	    $this->EntityType = $EntityType;
	}

	public function GetEntityTitle()
	{
	    return $this->EntityTitle;
	}
	
	public function SetEntityTitle($EntityTitle)
	{
	    $this->EntityTitle = $EntityTitle;
	}
	
	public function GetDate()
	{
	    return $this->date;
	}
	
	public function SetDate($date)
	{
	    $this->date = $date;
	}
}