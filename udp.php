<?php
if (!isset($_GET['cmd'])) { exit("FATAL: No `cmd` parameter given."); }

$EVENTGHOST_IP = '192.168.0.137';
$EVENTGHOST_UDP_PORT = 33333;

$cmd = preg_replace('/[^a-zA-Z0-9_]/', '', $_GET['cmd']);
$sock = socket_create(AF_INET, SOCK_DGRAM, SOL_UDP);

if ($sock === FALSE) { exit("FATAL: " . socket_last_error()); }
$len = strlen($cmd);
socket_sendto($sock, $cmd, $len, 0, $EVENTGHOST_IP, $EVENTGHOST_UDP_PORT);
socket_close($sock);

