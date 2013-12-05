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

		$id = $article->id; #remember a valid article id
		unset($article,$member); #destory our saturated objects

		$article = new \models\articles; #new object
		$article->load(array('id = ?',$id)); #saturate it with id from above
		echo $article->member->name; #navigate through relationship

		$db = $f3->get('DB');
		echo $db->log(); #ask ikkez why there isn't sub queries/joins here only singular queries


	}
} 