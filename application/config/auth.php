<?php defined('SYSPATH') OR die('No direct access allowed.');

return array(

	'driver'       => 'ORM',
	'hash_method'  => 'sha256',
	'hash_key'     => '2, 4, 6, 8, 10, 12, 17, 27, 30',
	'lifetime'     => 1209600,
	'session_type' => Session::$default,
	'session_key'  => 'auth_user',

	// Username/password combinations for the Auth File driver
	'users' => array(
		 //'admin' => 'd3247b7e9911e4a10e0f49d77192d7e34e619e3bc5de762e3b5d237d0d79d0fa',
	),

);
