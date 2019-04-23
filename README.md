# FilmTools · seconds2minutes

**PHP implementation for Excel's mround function: Returns a number rounded to the nearest multiple of another number.**

[![Build Status](https://travis-ci.org/filmtools/mround.svg?branch=master)](https://travis-ci.org/filmtools/mround)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/filmtools/mround/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/filmtools/mround/?branch=master)
[![Code Coverage](https://scrutinizer-ci.com/g/filmtools/mround/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/filmtools/mround/?branch=master)
[![Build Status](https://scrutinizer-ci.com/g/filmtools/mround/badges/build.png?b=master)](https://scrutinizer-ci.com/g/filmtools/mround/build-status/master)




## Installation

```bash
$ composer require filmtools/secondstominutes
```



## Usage

The **seconds2minutes** function is namespaced, so you will have to mention it in your `use` statements:

```php
use function FilmTools\SecondsToMinutes\seconds2minutes;
use FilmTools\SecondsToMinutes\SecondsToMinutes;

echo seconds2minutes( 3900 ); // "01:05:00"

$formatter = new SecondsToMinutes;
echo $formatter( 90 ); // "01:30"
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

