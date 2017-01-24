<?php
$xpdo_meta_map['CaptchaRezalts']= array (
  'package' => 'capthapackage',
  'version' => '1.1',
  'table' => 'captcha_rezalts',
  'extends' => 'xPDOSimpleObject',
  'fields' => 
  array (
    'user_id' => NULL,
    'user_name' => NULL,
    'equation' => NULL,
    'result' => NULL,
    'level' => NULL,
    'cost' => NULL,
    'date' => NULL,
  ),
  'fieldMeta' => 
  array (
    'user_id' => 
    array (
      'dbtype' => 'int',
      'precision' => '11',
      'phptype' => 'integer',
      'null' => false,
    ),
    'user_name' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '50',
      'phptype' => 'string',
      'null' => false,
    ),
    'equation' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '100',
      'phptype' => 'string',
      'null' => false,
    ),
    'result' => 
    array (
      'dbtype' => 'decimal',
      'precision' => '10,0',
      'phptype' => 'float',
      'null' => false,
    ),
    'level' => 
    array (
      'dbtype' => 'int',
      'precision' => '1',
      'phptype' => 'integer',
      'null' => false,
    ),
    'cost' => 
    array (
      'dbtype' => 'int',
      'precision' => '7',
      'phptype' => 'integer',
      'null' => false,
    ),
    'date' => 
    array (
      'dbtype' => 'datetime',
      'phptype' => 'datetime',
      'null' => false,
    ),
  ),
);
