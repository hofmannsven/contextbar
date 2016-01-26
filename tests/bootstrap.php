<?php namespace ContextBar\Tests;

use Dotenv\Dotenv;
use WpTestsStarter\WpTestsStarter;

/**
 * Introduce plugin test suite.
 */
echo "\n";
echo "\033[0;32m WordPress Context Bar Test Suite \033[0m\n";
echo "\033[0;32m Version: 0.1.0 \033[0m\n";
echo "\n";
echo " Available test suites: \n";
echo "  --testsuite IntegrationTests \n";
echo "  --testsuite UnitTests \n";
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
 * Setup environment variables using PHP dotenv.
 *
 * @link https://github.com/vlucas/phpdotenv
 */
$dotenv = new Dotenv( $baseDir );
$dotenv->load();

/**
 * Setup test environment using WP Tests Starter.
 *
 * @link https://github.com/inpsyde/WP-Tests-Starter
 */
$starter = new WpTestsStarter( $baseDir . '/vendor/inpsyde/wordpress-dev' );

$starter->defineDbName( getenv( 'TESTS_DB_NAME' ) );
$starter->defineDbUser( getenv( 'TESTS_DB_USER' ) );
$starter->defineDbPassword( getenv( 'TESTS_DB_PASSWORD' ) );
$starter->defineDbHost( getenv( 'TESTS_DB_HOST' ) );
$starter->defineDbCharset( getenv( 'TESTS_DB_CHARSET' ) );
$starter->defineDbCollate( getenv( 'TESTS_DB_COLLATE' ) );
$starter->setTablePrefix( getenv( 'TESTS_DB_TABLE_PREFIX' ) );

$starter->defineAbspath();
$starter->definePhpBinary( 'php' );
$starter->defineWpLang( 'de_DE' );
$starter->defineWpDebug( TRUE );

$starter->defineTestsDomain( getenv( 'TESTS_DOMAIN' ) );
$starter->defineTestsEmail( getenv( 'TESTS_EMAIL' ) );
$starter->defineTestsTitle( getenv( 'TESTS_TITLE' ) );

$starter->bootstrap();