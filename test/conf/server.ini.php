<?php
return array(
    // 運用環境の設定データ
    'production' => array(
        'webhost'                  => 'www.example.com',
        'database.adapter'         => 'pdo_mysql',
        'database.params.host'     => 'db.example.com',
        'database.params.username' => 'dbuser',
        'database.params.password' => 'secret',
        'database.params.dbname'   => 'dbname',
    ),
    // 開発環境の設定データは、運用環境のデータを継承したうえで
    // 必要に応じて値を上書きします
    'staging : production' => array(
        'database.params.host'     => 'dev.example.com',
        'database.params.username' => 'devuser',
        'database.params.password' => 'devsecret',
    ),
);
