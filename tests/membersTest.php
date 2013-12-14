<?php
$f3 = require '../vendor/bcosca/fatfree/lib/base.php';
(new init)->root('E:/xampp/htdocs/sitebuilder/app')->db()->run();
$f3->set('UI','./');


$test = new Test;
$member = new \models\members;
$test->expect($member->test == 1,'Test is one');

$f3->set('test',$test);
echo Template::instance()->render('testResultsLayout.htm');