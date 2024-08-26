<?php

$host = env("DB_HOST");
$port = env("DB_PORT");
$dbname = env("DB_DATABASE");
$username = env("DB_USERNAME");
$password = env("DB_PASSWORD");

return [
    'class' => 'yii\db\Connection',
    'dsn' => 'mysql:host='. $host .';port=' .$port .';dbname=' .$dbname .';',
    'username' => $username,
    'password' => $password,
    'charset' => 'utf8',

    // Schema cache options (for production environment)
    //'enableSchemaCache' => true,
    //'schemaCacheDuration' => 60,
    //'schemaCache' => 'cache',
];
