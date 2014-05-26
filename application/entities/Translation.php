<?php

class Translation
{
	var $idTranslation;
	var $idEntity;
	var $entityType;
	var $lang;

	public function getIdTranslation()
	{
	    return $this->idTranslation;
	}
	
	public function setIdTranslation($idTranslation)
	{
	    $this->idTranslation = $idTranslation;
	}

	public function getIdEntity()
	{
	    return $this->idEntity;
	}
	
	public function setIdEntity($idEntity)
	{
	    $this->idEntity = $idEntity;
	}

	public function getEntityType()
	{
	    return $this->entityType;
	}
	
	public function setEntityType($entityType)
	{
	    $this->entityType = $entityType;
	}

	public function getLang()
	{
	    return $this->lang;
	}
	
	public function setLang($lang)
	{
	    $this->lang = $lang;
	}
}