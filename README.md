# FilmTools · seconds2minutes

**Formats seconds to 'mm:ss' or 'hh:mm:ss'**



## Installation

```bash
$ composer require filmtools/secondstominutes
```



## Usage

The **seconds2minutes** function is namespaced, so you will have to mention it in your `use` statements. There is also a callable class, **SecondsToMinutes.**

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

