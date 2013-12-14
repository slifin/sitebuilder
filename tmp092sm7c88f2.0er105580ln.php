<?php foreach (($test->results()?:array()) as $k=>$v): ?>
<?php echo $v['status']; ?> <?php echo $v['text']; ?> <?php echo $v['source']; ?>
<?php endforeach; ?>
