<?php
namespace tests;

use FilmTools\SecondsToMinutes\SecondsToMinutes;

class SecondsToMinutesTest extends \PHPUnit\Framework\TestCase
{

    /**
     * @dataProvider provideVariousParameters
     */
    public function testSimple( $input, $expected)
    {
        $sut = new SecondsToMinutes;

        $result = $sut( $input );
        $this->assertEquals( $result, $expected);
    }



    public function provideVariousParameters()
    {
        # - input number
        # - expected result
        return array(
            [ 60,     "01:00"],
            [ 90,     "01:30"],
            [ 180,    "03:00"],
            [ 3600,   "01:00:00"],
            [ 3900,   "01:05:00"],
            [ 36000,   "10:00:00"],
            [ 360000,  "100:00:00"],
            [ 360030,  "100:00:30"],
            [ 360130,  "100:02:10"],

            [ "foobar", "foobar"],
        );
    }

}
