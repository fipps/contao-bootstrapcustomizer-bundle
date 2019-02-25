<?php

\ContaoCommunityAlliance\MetaPalettes\MetaPalettes::appendFields('tl_layout', 'style', array('bootstrapScssFile'));

$GLOBALS['TL_DCA']['tl_layout']['fields']['bootstrapScssFile'] = array(
    'label'      => &$GLOBALS['TL_LANG']['tl_layout']['bootstrapScssFile'],
    'inputType'  => 'select',
    'exclude'    => true,
    'foreignKey' => 'tl_bs_theme.title',
    'eval'     => array(
        'tl_class'           => 'clr w50',
        'includeBlankOption' => true,
    ),
    'sql'      => "int(10) unsigned NOT NULL default '0'",
    'relation' => array(
        'type' => 'hasOne',
        'load' => 'lazy',
    ),
);
