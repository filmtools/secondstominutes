# FilmTools · seconds2minutes

**Formats seconds to 'mm:ss' or 'hh:mm:ss'**

[![Build Status](https://travis-ci.org/filmtools/secondstominutes.svg?branch=master)](https://travis-ci.org/filmtools/secondstominutes)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/filmtools/secondstominutes/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/filmtools/secondstominutes/?branch=master)
[![Code Coverage](https://scrutinizer-ci.com/g/filmtools/secondstominutes/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/filmtools/secondstominutes/?branch=master)
[![Build Status](https://scrutinizer-ci.com/g/filmtools/secondstominutes/badges/build.png?b=master)](https://scrutinizer-ci.com/g/filmtools/secondstominutes/build-status/master)

## Installation

```bash
$ composer require filmtools/secondstominutes
```



## Usage

The **seconds2minutes** function is namespaced, so you will have to mention it in your `use` statements. The callable class **SecondsToMinutes** is a wrapper around the function; It can be used as [Twig Filter](https://twig.symfony.com/doc/2.x/advanced.html#filters).

```php
use function FilmTools\SecondsToMinutes\seconds2minutes;
use FilmTools\SecondsToMinutes\SecondsToMinutes;

echo seconds2minutes( 3900 ); // "01:05:00"

$formatter = new SecondsToMinutes;
echo $formatter( 90 ); // "01:30"

$filter = new \Twig\TwigFilter('secondstominutes', new SecondsToMinutes);
$twig->addFilter( $filter );
```



## Development and Unit testing

```bash
$ git clone https://github.com/filmtools/secondstominutes.git
$ cd secondstominutes
$ composer install

# either, or, and:
$ composer phpunit
$ vendor/bin/phpunit

```

