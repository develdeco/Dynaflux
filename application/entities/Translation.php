<?php

class Translation extends Entity
{
	var $id;
	var $entityId;
	var $entityType;
	var $langCode;

	public function GetEntityId()
	{
	    return $this->entityId;
	}
	
	public function SetEntityId($entityId)
	{
	    $this->entityId = $entityId;
	}

	public function GetEntityType()
	{
	    return $this->entityType;
	}
	
	public function SetEntityType($entityType)
	{
	    $this->entityType = $entityType;
	}
	
	public function GetLangCode()
	{
	    return $this->langCode;
	}
	
	public function SetLangCode($langCode)
	{
	    $this->langCode = $langCode;
	}
}