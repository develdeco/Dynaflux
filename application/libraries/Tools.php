<?php

class Tools
{
	public static function GetLangs()
    {
        return array('es','en');
    }

    public static function PublicUrl($relative)
    {
    	return base_url('public/'.$relative);
    }

    public static function Href($entity)
    {
    	
    }

    public static function GenerateUniqueId($prefix)
    {
        $id = explode('.', uniqid('', true));
        return $prefix.substr($id[1], 2, 6);
    }
}