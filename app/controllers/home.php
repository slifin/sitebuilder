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

		\models\members::setdown(); #delete existing tables
		\models\articles::setdown();

		$member = new \models\members; #bring models in (fluid enabled)
		$article = new \models\articles;

		$member->name = 'slifin'; #save member
		$member->save();

		$article->content = 'hello world'; 
		$article->member = $member; #assign saturated member to article
		$article->save();

		echo $article->member->name; #profit
	}
} 