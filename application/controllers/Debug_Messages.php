<?php

class Debug_Messages
{
	public static $status = array();

	public static function init()
	{
		self::$status[0] = 'First message';
	}
	public static function reset_logs()
	{
		self:$status = array();
		self::$status[0] = 'Message#1';	
	}

	public static function add_log($msg)
	{
		array_push(self::$status, $msg);
	}
	public static function show_logs()
	{
		$obj = array();
		$i = 0;

		foreach(self::$status as $element)
		{
			$obj[$i] = $element;
			$i++;
		}

		return $obj;
	}

}

?>