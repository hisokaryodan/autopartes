<?php

$dbHost = getenv('POSTGRES_HOST');
$dbName = getenv('POSTGRES_DB');
$dbUserName = getenv('POSTGRES_USER');
$dbPassword = getenv('POSTGRES_PASSWORD');

return [
    'class' => 'yii\db\Connection',
    'dsn' => "pgsql:host=$dbHost;dbname=$dbName",
    'username' => $dbUserName,
    'password' => $dbPassword,
    'charset' => 'utf8',

    // Schema cache options (for production environment)
    //'enableSchemaCache' => true,
    //'schemaCacheDuration' => 60,
    //'schemaCache' => 'cache',
];
