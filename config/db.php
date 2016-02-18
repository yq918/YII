<?php

//return [
//    'class' => 'yii\db\Connection',
//    'dsn' => 'mysql:host=localhost;dbname=yii',
//    'username' => 'root',
//    'password' => 'php',
//    'charset' => 'utf8',
//];

$dbconfig = array(
    'master' =>[
        'class' => 'yii\db\Connection',
        'dsn' => 'mysql:host=localhost;dbname=yii',
        'username' => 'root',
        'password' => 'php',
        'charset' => 'utf8',
    ],
    'slave' => [
        'class' => 'yii\db\Connection',
        'dsn' => 'mysql:host=localhost;dbname=test',
        'username' => 'root',
        'password' => 'php',
        'charset' => 'utf8',
    ]

);

return $dbconfig;

//return [
//    'class' => 'yii\db\Connection',
//    'dsn' => 'mysql:host=localhost;dbname=yii',
//    'username' => 'root',
//    'password' => 'php',
//    'charset' => 'utf8',
//];

