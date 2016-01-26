# WordPress Context Bar Test Suite

## Requirements

Using the latest version of WordPress and PHP is highly recommended.
PHPUnit 5.1 is supported on PHP 5.6 and PHP 7.


## Up and running

1. Provide your own testing environment variables within your `.env` file based on `.env.example`
2. Install composer dependencies: `composer install`
3. Run unit and integration tests: `phpunit`


## Testsuites & Groups

It's also possible to only run specific tests.


### Testsuites

Currently there are two separate test suites that can be run via the `--testsuite` option:

- `--testsuite IntegrationTests`
- `--testsuite UnitTests`


### Groups

Groups are available via the `--group` option for tested objects:

- `--group Admin`
- `--group Front`
- `--group Option`
- `--group Style`


## Testdox

Testdox can be viewed via the `--testdox` option.


## Coverage

Test coverage can be generated ([Xdebug](https://xdebug.org/) extension required) via the `--coverage-html` option.