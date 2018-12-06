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

class HexToRgbTwigExtension extends AbstractExtension
{
    public function getName()
    {
        return 'Hex To RGB';
    }

    public function getFilters()
    {

        return array(
            new TwigFilter('cssColorParser', array($this, 'cssColorParser')),
        );
    }

    /**
     * Given a HEX string returns a RGB equivalent.
     * @param string|array $color
     * @return string
     */
    public function cssColorParser($color)
    {

        if (!is_array($color)) {
            $color = [$color];

        }
        $hexColor = self::_checkHex($color[0]);

        // Convert HEX to DEC
        $R = hexdec($hexColor[0].$hexColor[1]);
        $G = hexdec($hexColor[2].$hexColor[3]);
        $B = hexdec($hexColor[4].$hexColor[5]);

        $ret = '#'.$hexColor;

        if (isset($color[1]) && $color[1] != '') {
            $ret = sprintf('rgba(%s,%s,%s,%s)', $R, $G, $B, $color[1]/100);
        }

        return $ret;
    }

    /**
     * You need to check if you were given a good hex string
     * @param string $hex
     * @return string Color
     * @throws Exception "Bad color format"
     */
    private static function _checkHex( $hex ) {
        // Strip # sign is present
        $color = str_replace("#", "", $hex);
        // Make sure it's 6 digits
        if( strlen($color) == 3 ) {
            $color = $color[0].$color[0].$color[1].$color[1].$color[2].$color[2];
        } else if( strlen($color) != 6 ) {
            throw new Exception("HEX color needs to be 6 or 3 digits long, received: " . $color);
        }
        return $color;
    }

}