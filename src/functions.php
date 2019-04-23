<?php
namespace FilmTools\SecondsToMinutes;


/**
 * @todo   Can we avoid rounding the $seconds when instantiating the DateTime?
 *
 * @param  int $seconds
 * @return string|int
 */
function seconds2minutes( $seconds )
{
    if (is_array($seconds))
        return array_map('seconds2minutes', $seconds);

    if (!is_numeric( $seconds )):
        return $seconds;
    endif;

    $s = $seconds % 60;
    $m = floor(($seconds % 3600)/60);
    $h = floor($seconds /3600);

    if ($h)
        return sprintf("%02d:%02d:%02d", $h, $m, $s);
    return sprintf("%02d:%02d", $m, $s);

}
