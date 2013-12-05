<?php
namespace models;
class members extends \DB\Cortex{
	protected 
	$fieldConf = 
	array(
		'name'=>array(
			'type'=>\DB\SQL\Schema::DT_VARCHAR128
			)
		),
	$table = 'members',
	$db = 'DB',
	$fluid = TRUE;
} 