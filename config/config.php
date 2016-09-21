<?php
header('Content-Type: text/html; charset=utf-8');
$curUrl = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];

$page = basename($_SERVER['SCRIPT_NAME']);

