<?php
class init extends Prefab{
	function root($root=NULL){
		$f3 = Base::instance();
		$f3->set('ROOT',($root)?$root:$f3->get('ROOT'));
		return $this;
	}
	function db(){
		$f3 = Base::instance();
		$f3->set('DB',new \DB\SQL('mysql:127.0.0.1;port=3306;dbname=db','root',''));
		return $this;
	}
	function run(){
		$f3 = Base::instance();
		$root=$f3->get('ROOT');
		$f3->set('TEMP',$root.'/../tmp');
		$f3->set('AUTOLOAD',$root.'/;./');
		$f3->set('UI',$root.'/views/');
		$f3->config($root.'/../cfg/routes.ini');

	}
}