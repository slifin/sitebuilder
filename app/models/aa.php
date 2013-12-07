<?php
namespace models;
class aa extends \DB\Cortex{

    protected $fieldConf = array(
        'aa_id'=>array(
            'type'=>\DB\SQL\Schema::DT_INT
        ),
        'aa_join_game'=>array( #virtual field has many are virtual fields
            'has-many'=>array('\models\aa_join_game','aa_id')
        ),
        'aa_deriv'=>array(
            'type'=>\DB\SQL\Schema::DT_VARCHAR128),
        'aa_multiplier'=>array(
            'type'=>\DB\SQL\Schema::DT_DECIMAL),
        'aa_subGroup'=>array(
            'type'=>\DB\SQL\Schema::DT_VARCHAR128),
        'aa_tooltip'=>array(
            'type'=>\DB\SQL\Schema::DT_VARCHAR512)
    ),
        $table = 'aa',
        $db = 'DB';
}

