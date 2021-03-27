<?php
    $http = '';
    if ( $_SERVER['HTTPS'] != '' ){
        $http = 'https://';
    } else {
        $http = 'http://';
    }

    $server_name = $http . $_SERVER['SERVER_NAME'] . '/';
    $doc_root = $_SERVER['DOCUMENT_ROOT'];

    print_r('<!--' . $server_name . '-->');