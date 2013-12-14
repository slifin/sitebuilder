<?php foreach (($testResults->results()?:array()) as $k=>$v): ?>
status: <?php echo $v['status']; ?>, text: <?php echo $v['text']; ?>, source: <?php echo $v['source']; ?> <br>
<?php endforeach; ?>