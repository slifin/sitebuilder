<?php
namespace controllers;
use Template;
class home {
	function beforeRoute($f3){
		(new init)->db();
	}
	function index($f3){
		echo Template::instance()->render('layout.htm');
	}
	function docs($f3){
		echo Template::instance()->render('foundationDocs.htm');
	}
	function testAA($f3){
		$aajoin = new \models\aa_join_game();
		$all = $aajoin->find(array('g_id = ?',883));
		foreach($all->castAll(2) as $k=>$v){ #ask ikkez about castAll doesn't seem to be documentated
		#I think it will cast objects up to the parameter depth, because aa_id is a mapper inside a mapper it is more than 1 level deep
			echo $v['aa_id']['aa_deriv'];
		}
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