<?php
namespace models;
class aa_join_game extends \DB\Cortex{
    protected $fieldConf =
        array(
            'aa_id'=>array(
                'belongs-to-one'=>array('\models\aa','aa_id'),
                'type'=>\DB\SQL\Schema::DT_INT
            ),
            'g_id'=>array(
                'type'=>\DB\SQL\Schema::DT_INT
            )
        ),
        $table = 'aa_join_game',
        $db = 'DB';
}        