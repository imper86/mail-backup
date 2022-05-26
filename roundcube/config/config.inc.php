<?php

if (!isset($config)) {
    $config = [];
}

$config['imap_conn_options']['tls']['verify_peer'] = false;
$config['imap_conn_options']['tls']['verify_peer_name'] = false;
$config['imap_conn_options']['tls']['allow_self_signed'] = true;

$config['imap_conn_options']['ssl']['verify_peer'] = false;
$config['imap_conn_options']['ssl']['verify_peer_name'] = false;
$config['imap_conn_options']['ssl']['allow_self_signed'] = true;