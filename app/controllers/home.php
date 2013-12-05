<?php
namespace controllers;
use Template;
class home {
	function beforeRoute($f3){
		$f3->set('DB',new \DB\SQL('mysql:127.0.0.1;port=3306;dbname=db','root',''));
	}
	function index($f3){
		echo Template::instance()->render('layout.htm');
	}
	function docs($f3){
		echo Template::instance()->render('foundationDocs.htm');
	}
	function setup($f3){
		#cortex does this if you run \Model\user::setup($db,'users',$fieldConf);
		$db = $f3->get('DB');
		$schema = new \DB\SQL\Schema($db);

		$schema->dropTable('members',TRUE);
		$schema->dropTable('articles',TRUE);
		$table = $schema->createTable('members');
		$table->addColumn('name')->type_varchar(128);
		$table->addColumn('articleID')->type_int();
		$table->addColumn('date')->type_timestamp(TRUE);
		$table->build();

		$table = $schema->createTable('articles');
		$table->addColumn('name')->type_varchar(128);
		$table->addColumn('subject')->type_varchar(128);
		$table->addColumn('content')->type_text();
		$table->addColumn('date')->type_timestamp(TRUE);
		$table->build();
		echo 'tables built';
	}

	function cortex($f3){
		$member = new \models\member;
		$article = new \models\articles;

		\models\articles::setup();
		$member->load(array('id = ?',1));
	
		$article->content = 'hello world';
		$article->member_id = $member;
		$article->save();
		echo $article->id;
		$db= $f3->get('DB');
		echo $db->log();
	}
} 