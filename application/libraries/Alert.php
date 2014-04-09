<?php

class Alert
{
	static $alerts = array(
				'success' => array(),
				'warning' => array(),
				'error' => array(),
				'info' => array(),
			);

	static function success($message)
	{
		self::addAlert('success', $message);
	}

	static function warning($message)
	{
		self::addAlert('warning', $message);
	}

	static function error($message)
	{
		self::addAlert('error', $message);
	}

	static function info($message)
	{
		self::addAlert('info', $message);
	}

	static function addAlert($type, $message)
	{
		$CI =& get_instance();
		self::$alerts[$type][] = $message;
        $CI->session->set_flashdata('alerts', self::$alerts);
	}

	static function getAlerts()
	{
		$CI =& get_instance();
		$flash_alerts = $CI->session->flashdata('alerts');

		if($flash_alerts)
			return $flash_alerts;

		return self::$alerts;
	}
}