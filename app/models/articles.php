<?php 
namespace models;
class articles extends \DB\Cortex{
	protected
	$fieldConf =
	array(
		'member'=>array(
			'belongs-to-one'=>'\models\members',
			'type'=>\DB\SQL\Schema::DT_INT
			)
		),
	$table = 'articles',
	$db = 'DB',
	$fluid = TRUE;
}