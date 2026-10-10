<?php

return [
    'class' => \yii\db\Connection::class,
    'dsn' => 'pgsql:host='. getenv('DB_HOST') .';dbname=' . getenv('POSTGRES_DB'),
    'username' =>  getenv('POSTGRES_USER'),
    'password' => getenv('POSTGRES_PASSWORD'),
    'charset' => 'utf8',

    // Schema cache options (for production environment)
    //'enableSchemaCache' => true,
    //'schemaCacheDuration' => 60,
    //'schemaCache' => 'cache',
];
