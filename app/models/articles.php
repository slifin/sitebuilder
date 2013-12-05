<?php 
namespace models;
class articles extends \DB\Cortex{
	protected
	$fieldConf =
	array(
		'member_id'=>array(
			'belongs-to-one'=>'\models\member',
			'type'=>\DB\SQL\Schema::DT_INT
			),
		'content'=>array(
			'type'=>\DB\SQL\Schema::DT_TEXT
			)
		),
	$table = 'articles',
	$db = 'DB';
}