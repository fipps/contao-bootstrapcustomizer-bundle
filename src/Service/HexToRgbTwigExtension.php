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
            new TwigFilter('hexToRgb', array($this, 'hexToRgb')),
        );
    }

    /**
     * Given a HEX string returns a RGB equivalent.
     * @param string $color
     * @return string
     */
    public function hexToRgb($color)
    {

        $color = self::_checkHex($color);

        // Convert HEX to DEC
        $R = hexdec($color[0].$color[1]);
        $G = hexdec($color[2].$color[3]);
        $B = hexdec($color[4].$color[5]);

        $RGB['R'] = $R;
        $RGB['G'] = $G;
        $RGB['B'] = $B;

        return implode(",", $RGB);
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