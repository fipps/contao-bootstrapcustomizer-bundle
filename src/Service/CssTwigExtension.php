<?php
/**
 *  Copyright Information
 *
 * @copyright: 2018 agentur fipps e.K.
 * @author   : Arne Borchert <arne.borchert@fipps.de>
 * @license  : LGPL 3.0+
 */

namespace Fipps\BootstrapCustomizerBundle\Service;

use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;

class CssTwigExtension extends AbstractExtension
{
    public function getName()
    {
        return 'CSS Filter';
    }

    public function getFilters()
    {

        return array(
            new TwigFilter('cssColorParser', array($this, 'cssColorParser')),
            new TwigFilter('cssLengthParser', array($this, 'cssLengthParser')),
        );
    }

    /**
     * Validates the Input and returns a CSS length
     *
     * @param array|string $length
     * @return string
     */
    public function cssLengthParser($length)
    {

        if (!is_array($length)) {
            $value = $length;
            $unit  = '';
        } else {
            $value = $length['value'];
            $unit  = $length['unit'];
        }


        if (is_numeric($value)) {
            return $value.$unit;
        }

        if ($value[0] == '$' || in_array($value, ['inherit', 'auto'])) {
            // value is a scss variable
            return $value;
        }

        throw new \Exception("Not a valid CSS length: ".$value.$unit);
    }

    /**
     * Given a HEX string returns a RGB equivalent.
     *
     * @param string|array $color
     * @return string
     */
    public function cssColorParser($color)
    {

        if (!is_array($color)) {
            $color = [$color];
        }

        if ($color[0][0] == '$') {
            // color is a scss variable
            $ret = $color[0];
            if (isset($color[1]) && $color[1] != '') {
                $A   = $color[1] / 100;
                $ret = sprintf('rgba(%s,%s)', $color[0], $A);
            }
        } else if (in_array($color[0], ['inherit', 'initial'])) {
            $ret = $color[0];
        } else {
            $hexColor = self::_checkHex($color[0]);

            // Convert HEX to DEC
            $R = hexdec($hexColor[0].$hexColor[1]);
            $G = hexdec($hexColor[2].$hexColor[3]);
            $B = hexdec($hexColor[4].$hexColor[5]);

            $ret = '#'.$hexColor;

            if (isset($color[1]) && $color[1] != '') {
                $A   = $color[1] / 100;
                $ret = sprintf('rgba(%s,%s,%s,%s)', $R, $G, $B, $A);
            }
        }

        return $ret;
    }

    /**
     * You need to check if you were given a good hex string
     *
     * @param string $hex
     * @return string Color
     * @throws Exception "Bad color format"
     */
    private static function _checkHex($hex)
    {
        // Strip # sign is present
        $color = str_replace("#", "", $hex);
        // Make sure it's 6 digits
        if (strlen($color) == 3) {
            $color = $color[0].$color[0].$color[1].$color[1].$color[2].$color[2];
        } else if (strlen($color) != 6) {
            throw new \Exception("HEX color needs to be 6 or 3 digits long, received: ".$color);
        }

        return $color;
    }

}