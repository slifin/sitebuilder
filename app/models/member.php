<?php
namespace models;
class member extends \DB\Cortex{
	protected 
	$fieldConf = 
	array(
		'article_id'=>array(
			'has-many'=>'\models\articles',
			'type'=>\DB\SQL\Schema::DT_INT
			)
		),
	$table = 'members',
	$db = 'DB';
} 