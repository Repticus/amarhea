<?php

setlocale(LC_ALL, "cs_CZ.UTF-8"); //unix
//setlocale(LC_ALL, "czech"); //windows

require __DIR__ . '/../vendor/autoload.php';

$configurator = new Nette\Configurator;

//$configurator->setDebugMode('23.75.345.200'); // enable for your remote IP
//$configurator->setDebugMode(FALSE);
$configurator->enableDebugger(__DIR__ . '/../log');

$configurator->setTempDirectory(__DIR__ . '/../temp');

$configurator->createRobotLoader()
		  ->addDirectory(__DIR__)
		  ->register();

$configurator->addConfig(__DIR__ . '/config.neon');
if (file_exists(__DIR__ . '/config.local.neon')) {
	$configurator->addConfig(__DIR__ . '/config.local.neon');
}

$container = $configurator->createContainer();

return $container;
