<?php
/*
 * @author Michael Mifsud <info@tropotek.com>
 * @link http://www.tropotek.com/
 * @license Copyright 2007 Michael Mifsud
 *
 * Use this as the bootstrap file for all php files
 */
error_log('test');
$sitePath = dirname(__FILE__);
/** @var \Composer\Autoload\ClassLoader $composer */
$composer = include($sitePath . '/vendor/autoload.php');
include_once $sitePath.'/src/App/Bootstrap.php';

$config = \App\Config::getInstance();
$config->set('composer', $composer);

$sitePath = dirname(__FILE__);
/** @var \Composer\Autoload\ClassLoader $composer */
$composer = include($sitePath . '/vendor/autoload.php');
\Tk\Config::getInstance()->setComposer($composer);

include_once $sitePath.'/src/App/Bootstrap.php';
