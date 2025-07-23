<?php


$status_codes = [
    [
        'code' => '102',
        'meaning' => 'Processing',
        'description' => '処理中である',
    ],
    [
        'code' => '200',
        'meaning' => 'OK',
        'description' => 'リクエストが正常に成功した',
    ],[
        'code' => '301',
        'meaning' => 'Moved',
        'description' => 'リクエストされたリソースが恒久的に移動されている',
    ],[
        'code' => '304',
        'meaning' => 'Not Modified',
        'description' => 'リクエストされたリソースは更新されていない',
    ],[
        'code' => '400',
        'meaning' => 'Bad Request',
        'description' => 'クライアントのリクエストに異常がある',
    ],[
        'code' => '401',
        'meaning' => 'Unauthorized',
        'description' => 'アクセスと訓が無効、あるいは認証がされていない',
    ],[
        'code' => '403',
        'meaning' => 'Forbidden',
        'description' => 'ファイルやディレクトリへの閲覧権限がない',
    ],[
        'code' => '404',
        'meaning' => 'Not Found',
        'description' => 'Webページが見つからない',
    ],[
        'code' => '500',
        'meaning' => 'Internal Server Error',
        'description' => 'サーバー内のエラー',
    ],[
        'code' => '502',
        'meaning' => 'Bad Gateway',
        'description' => 'サーバーがリクエストを満たすのに必要な機能をサポートしていない',
    ],[
        'code' => '503',
        'meaning' => 'Service Unavailable',
        'description' => '一時的にサーバーにアクセスできない',
    ]
];

// echo('<pre>');
// var_dump($status_codes);
// echo('</pre>');