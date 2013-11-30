<?php
$f3 = require '../vendor/bcosca/fatfree/lib/base.php';
$f3->route('GET /',function(){
   echo 'test';
});
$f3->run();