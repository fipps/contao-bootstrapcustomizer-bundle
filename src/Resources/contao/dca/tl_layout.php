<?php

\ContaoCommunityAlliance\MetaPalettes\MetaPalettes::appendFields('tl_layout', 'style', array('useBootstrapTheme'));

$GLOBALS['TL_DCA']['tl_layout']['subpalettes']['useBootstrapTheme'] = 'bootstrapScssFile, prefixfree';
array_push($GLOBALS['TL_DCA']['tl_layout']['palettes']['__selector__'], 'useBootstrap');

$GLOBALS['TL_DCA']['tl_layout']['fields']['useBootstrapTheme']      = array(
    'label'     => &$GLOBALS['TL_LANG']['tl_layout']['useBootstrapTheme'],
    'inputType' => 'checkbox',
    'exclude'   => true,
    'eval'      => array(
        'w50',
        'submitOnChange' => true,
    ),
    'sql'       => "char(1) NOT NULL default ''",
);
$GLOBALS['TL_DCA']['tl_layout']['fields']['bootstrapScssFile'] = array(
    'label'      => &$GLOBALS['TL_LANG']['tl_layout']['bootstrapScssFile'],
    'inputType'  => 'select',
    'exclude'    => true,
    'foreignKey' => 'tl_bs_theme.title',
    'eval'     => array(
        'tl_class'           => 'w50',
        'mandatory'          => true,
        'includeBlankOption' => true,
    ),
    'sql'      => "int(10) unsigned NOT NULL default '0'",
    'relation' => array(
        'type' => 'hasOne',
        'load' => 'eager',
    ),
);
$GLOBALS['TL_DCA']['tl_layout']['fields']['prefixfree']        = array(
    'label'     => &$GLOBALS['TL_LANG']['tl_layout']['prefixfree'],
    'inputType' => 'checkbox',
    'exclude'   => true,
    'eval'      => array(
        'tl_class' => 'w50 m12 cbx widget',
    ),
    'sql'       => "char(1) NOT NULL default ''",
);