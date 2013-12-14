<?php
echo PHP_EOL;
echo '<<< Starting Unit Tests'.PHP_EOL;
$f3 = require_once 'E:/xampp/htdocs/sitebuilder/vendor/bcosca/fatfree/lib/base.php';
(new init)->root('E:/xampp/htdocs/sitebuilder/app')->db()->run();
$test = new Test;
foreach(glob('E:/xampp/htdocs/sitebuilder/tests/*.php') as $filename){
	if (basename($filename) == basename(__FILE__)) continue;
	include $filename;
}
foreach($test->results() as $k=>$v){
	if (!$v['status']){
		echo $v['text'].' -- '.chr(27).'[41mFailed'.chr(27).'[0m on '.$v['source'];
		die(1);
	}else echo $v['text'].' -- '.chr(27).'[42mPassed'.chr(27).'[0m on '.basename($v['source']).PHP_EOL;
}

echo '<<< All Tests '.chr(27).'[42mSuccessful'.chr(27).'[0m';
die(0);


echo 'test';


