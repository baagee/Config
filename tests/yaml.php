<?php
/**
 * Desc:
 * User: baagee
 * Date: 2019/3/14
 * Time: 下午10:05
 */
include_once __DIR__ . '/../vendor/autoload.php';

\BaAGee\Config\Config::init(__DIR__ . '/config', \BaAGee\Config\Parser\ParseYamlFile::class, 'yaml');

$meituanServer = \BaAGee\Config\Config::get('meituan/server');
$accessKey     = \BaAGee\Config\Config::get('meituan/access_key');
var_dump($meituanServer, $accessKey);