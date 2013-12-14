<?php
echo "\033[41mred\033[0m\n";

die;
$green = shell_exec('tput setaf 1;');

echo $green.' test';
die;
echo '<<< Starting Unit Tests'."\n";
$f3 = require_once 'E:/xampp/htdocs/sitebuilder/vendor/bcosca/fatfree/lib/base.php';
(new init)->root('E:/xampp/htdocs/sitebuilder/app')->db()->run();
$test = new Test;
foreach(glob('E:/xampp/htdocs/sitebuilder/tests/*.php') as $filename){
	if (basename($filename) == basename(__FILE__)) continue;
	include $filename;
}
foreach($test->results() as $k=>$v){
	if (!$v['status']){
		echo $v['text'].' -- Failed on '.$v['source'];
		exit(1);
	}else echo $v['text'].' -- Passed on '.basename($v['source'])."\n";
}

echo '<<< All Tests Successful'."\n";
exit(0);




