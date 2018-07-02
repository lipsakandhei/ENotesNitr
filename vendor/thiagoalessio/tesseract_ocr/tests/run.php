<?php namespace thiagoalessio\TesseractOCR\Tests;
require_once __DIR__.'/../vendor/autoload.php';

if (in_array('unit', $argv)) {
	foreach(glob(__DIR__.'/Unit/*Test.php') as $file) require_once $file;
	foreach(glob(__DIR__.'/Unit/**/*Test.php') as $file) require_once $file;
}

if (in_array('e2e', $argv))
	foreach(glob(__DIR__.'/EndToEnd/*.php') as $file) require_once $file;

// setting up code coverage
if (extension_loaded('xdebug')) {
	$coverage = new \SebastianBergmann\CodeCoverage\CodeCoverage;
	$coverage->filter()->addDirectoryToWhitelist('./src');
	$coverage->start('tests');
}

// running tests
$isTest = function($class) { return strstr($class, __NAMESPACE__); };
$tests = array_filter(get_declared_classes(), $isTest);
$rc = 0;
foreach ($tests as $test) {
	echo str_replace(__NAMESPACE__.'\\', '', $test), PHP_EOL;

	$results = (new $test)->run();
	foreach ($results as $name => $result) {
		echo "\t", ($result['failed'] ? "\e[31m✕" : "\e[32m✓"), " {$name}\e[0m", PHP_EOL;

		if ($result['failed']) {
			$rc++;
			echo "\e[35m{$result['msg']}\e[0m", PHP_EOL;
		}
	}
	echo PHP_EOL;
}

// saving coverage results
if (isset($coverage)) {
	$coverage->stop();
	$writer = new \SebastianBergmann\CodeCoverage\Report\Clover;
	$writer->process($coverage, 'coverage.xml');
}
exit($rc);
