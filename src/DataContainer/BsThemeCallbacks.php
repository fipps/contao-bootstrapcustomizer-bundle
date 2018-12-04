<?php
/**
 *  Copyright Information
 *
 * @copyright: 2018 agentur fipps e.K.
 * @author   : Arne Borchert <arne.borchert@fipps.de>
 * @license  : LGPL 3.0+
 */

namespace Fipps\BootstrapCustomizerBundle\DataContainer;


class BsThemeCallbacks
{
    /**
     * @param \DataContainer $dc
     */
    public function onSubmit(\DataContainer $dc)
    {
        $t=0;
    }

    /**
     * @param array          $row
     * @param string         $label
     * @param \DataContainer $dc
     * @param array          $args
     * @return array
     */
    public function getAuthorLabel(array $row, string $label, \DataContainer $dc, array $args) {

        $user = \UserModel::findById($args[1]);
        if ($user !== false) {
            $args[1] = $user->name;
        }

        return $args;
    }
}