<?php

/**
 * Global Configuration Override
 *
 * You can use this file for overriding configuration values from modules, etc.
 * You would place values in here that are agnostic to the environment and not
 * sensitive to security.
 *
 * NOTE: In practice, this file will typically be INCLUDED in your source
 * control, so do not include passwords or other sensitive information in this
 * file.
 */

return [
    'auth' => [
        'host' => 'sso.unimestre.com',
        'port' => 443,
        'context' => '/auth',
        'php_loader' => './public/CAS/CAS.php'
    ],

    'db' => [
        'driver' => 'Pdo',
        'username' => 'cliente',
        'password' => 'p23id9i1ndhhg12sp2l/hfgdamviwgvtvasjdp==',
        'dsn' => 'mysql:dbname=uninformare;host=mysql.unimestre.com'
    ],

    'ConexaoUTF8' => [
        'driver'   => 'Pdo_Mysql',
        'database' => 'uninformare',
        'hostname' => 'mysql.unimestre.com',
        'username' => 'cliente',
        'password' => 'p23id9i1ndhhg12sp2l/hfgdamviwgvtvasjdp==',
        'port'     => '3306',
        'charset'  => 'utf8'
    ],

    'gerais' => [
        'site_unimestre' => 'https://unimestre.com/',
        'url_site' => 'https://clientes.unimestre.com',
        'url_area_cliente' => 'https://clientes.unimestre.com',
        'url_unisac' => 'https://unisac.unimestre.com/',
        'diretorio_downloads' => '/home/uninformare/public_html/files',
    ],

    'mail' => [
        'name' => 'unimestre.com',
        'host' => 'email-smtp.us-east-1.amazonaws.com',
        'port' => 587,
        'connection_class' => 'login',
        'connection_config' => [
            'username' => 'AKIAUWYG32MC4PVDCWVE',
            'password' => 'BIJsnhUZvwtCzvkmaQJlu5A+duuPVsyRwE9R+R45OQ2a',
            'ssl' => 'tls',
        ],
    ],

    'notificacoes' => [
        'solicitacao_unisac' => [
            'email' => 'unisac.acesso@unimestre.com',
            'nome' => 'Setor de Comunicacao',
            'assunto' => 'Requisicao de alteracao de acesso UNISAC',
        ],
    ],

    /**
     * LOCAL
    'ConexaoUTF8' => [
        'driver'   => 'Pdo_Mysql',
        'database' => 'uninformare',
        'hostname' => '192.168.10.122',
        'username' => 'backup',
        'password' => 'UniSeguro',
        'port'     => '3306',
        'charset'  => 'utf8'
    ]
     */
];
