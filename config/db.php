<?php
 return array (
  'class' => 'CDbConnection',
  'connectionString' => 'mysql:host=127.0.0.1;port=3306;dbname=ekbmetr_ekb',
  'username' => 'ekbmetr_ekb',
  'password' => 'phpmyadminG4fwFFwq',
  'emulatePrepare' => true,
  'charset' => 'utf8',
  'enableParamLogging' => defined('YII_DEBUG') && YII_DEBUG ? true : 0,
  'enableProfiling' => defined('YII_DEBUG') && YII_DEBUG ? true : 0,
  'schemaCachingDuration' => 108000,
  'tablePrefix' => 'yupe_',
  'pdoClass' => 'yupe\\extensions\\NestedPDO',
);
