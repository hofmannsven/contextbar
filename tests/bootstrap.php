<?php namespace ContextBar\Tests;

use WpTestsStarter\WpTestsStarter;

/**
 * Introduce plugin test suite.
 */
echo "\n";
echo "\033[0;32m WordPress Context Bar Test Suite \033[0m\n";
echo "\033[0;32m Version: 0.2.0 \033[0m\n";
echo "\n";

/**
 * Define base directory.
 */
$baseDir = dirname( __DIR__ );

/**
 * Require composer dependencies.
 */
$autoloadFile = $baseDir . '/vendor/autoload.php';
if ( file_exists( $autoloadFile ) ) {
	require_once $autoloadFile;
}

/**
 * Setup test environment using WP Tests Starter.
 *
 * @link https://github.com/inpsyde/WP-Tests-Starter
 */
$starter = new WpTestsStarter( $baseDir . '/vendor/inpsyde/wordpress-dev' );

$starter->defineDbName( DB_NAME );
$starter->defineDbUser( DB_USER );
$starter->defineDbPassword( DB_PASSWORD );
$starter->defineDbHost( DB_HOST );
$starter->defineDbCharset( DB_CHARSET );
$starter->defineDbCollate( DB_COLLATE );
$starter->setTablePrefix( DB_TABLE_PREFIX );

$starter->bootstrap();