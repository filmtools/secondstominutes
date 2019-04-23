<?php
namespace FilmTools\SecondsToMinutes;

class SecondsToMinutes
{

    /**
     * @param  int $seconds
     * @return string|int
     */
    public function __invoke( $seconds )
    {
        return seconds2minutes( $seconds );
    }
}
