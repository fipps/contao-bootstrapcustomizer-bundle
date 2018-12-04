<?php
/**
 *  Copyright Information
 *
 * @copyright: 2018 agentur fipps e.K.
 * @author   : Arne Borchert <arne.borchert@fipps.de>
 * @license  : LGPL 3.0+
 */

$GLOBALS['TL_DCA']['tl_bs_theme'] = array(

    // Config
    'config'   => array(
        'dataContainer'     => 'Table',
        'enableVersioning'  => true,
        'onsubmit_callback' => array(
            array(
                \Fipps\BootstrapCustomizerBundle\DataContainer\BsThemeCallbacks::class,
                'onSubmit',
            ),
        ),
        'ondelete_callback' => array(),
        'sql'               => array(
            'keys' => array(
                'id'    => 'primary',
                'title' => 'unique',
            ),
        ),
    ),

    // List
    'list'     => array(
        'sorting' => array(
            'mode'        => 2,
            'fields'      => array('title'),
            'flag'        => 1,
            'panelLayout' => 'filter;sort,search,limit',
        ),

        'label' => array(
            'fields'         => array('title', 'author'),
            'showColumns'    => true,
            'label_callback' => array(\Fipps\BootstrapCustomizerBundle\DataContainer\BsThemeCallbacks::class, 'getAuthorLabel'),
        ),

        'global_operations' => array(
            'all' => array(
                'label'      => &$GLOBALS['TL_LANG']['MSC']['all'],
                'href'       => 'act=select',
                'class'      => 'header_edit_all',
                'attributes' => 'onclick="Backend.getScrollOffset();" accesskey="e"',
            ),
        ),

        'operations' => array(
            'edit'   => array(
                'label' => &$GLOBALS['TL_LANG']['tl_bs_theme']['edit'],
                'href'  => 'act=edit',
                'icon'  => 'edit.gif',
            ),
            'copy'   => array(
                'label' => &$GLOBALS['TL_LANG']['tl_bs_theme']['copy'],
                'href'  => 'act=copy',
                'icon'  => 'copy.gif',
            ),
            'delete' => array(
                'label'      => &$GLOBALS['TL_LANG']['tl_bs_theme']['delete'],
                'href'       => 'act=delete',
                'icon'       => 'delete.gif',
                'attributes' => 'onclick="if(!confirm(\''.$GLOBALS['TL_LANG']['MSC']['deleteConfirm'].'\'))return false;Backend.getScrollOffset()"',
            ),
            'show'   => array(
                'label' => &$GLOBALS['TL_LANG']['tl_bs_theme']['show'],
                'href'  => 'act=show',
                'icon'  => 'show.gif',
            ),
        ),
    ),

    // Palettes
    'palettes' => array(
        'default' => '{title_legend}, title, author, path;
                        {colorsystem_legend},white, black, gray100, gray200, gray300, gray400, gray500, gray600, gray700, gray800, gray900,
                            primary, secondary, tertiary, info, success, warning, danger, light, dark,yiqTextLight,yiqTextDark;
                        {defaults_legend}, bodyBg, bodyColor, linkColor, linkDecoration, linkHoverColor, linkHoverDecoration, componentActiveColor, componentActiveBg, textMuted;
                        {margin_legend:hide}, spacer, borderWidth, borderColor, borderRadius, borderRadiusSm, borderRadiusLg, boxShadowSize, boxShadowColor, hrBorderColor, hrBorderWidth, hrMarginY, listInlinePadding;
                        {paragraph_legend}, fontFamilySansSerif, fontFamilyMonospace, fontFamilyBase, fontSizeBase, fontSizeSm,  fontSizeLg, fontWeightNormal, fontWeightLight, fontWeightBold, fontWeightBase, lineHeightBase, lineHeightSm, lineHeightLg, leadFontFamily, leadFontSize, leadFontWeight, leadColor;
                        {headings_legend}, headingsFontFamily, headingsFontWeight, headingsLineHeight, headingsColor, headingsMarginBottom, h1FontSize, h1Color, h2FontSize, h2Color, h3FontSize, h3Color, h4FontSize, h4Color, h5FontSize, h5Color, h6FontSize, h6Color;
                        {navigation_legend};
                        {image_legend};
                        {form_legend:hide};
                        {pagination_legend:hide};
                        {carousel_legend:hide};
                        {table_legend:hide};
                        {listgroup_legend:hide};
                        {modal_legend:hide};
                        {card_legend:hide};
                        {dropdown_legend:hide};
                        {tooltip_legend:hide};
                        {popover_legend:hide};
                        {badge_legend:hide};
                        {alert_legend:hide};
                        {progress_legend:hide};
                        {options_legend:hide}, enableCaret, enableRounded, enableShadows, enableGradients;',
    ),

    // Fields
    'fields'   => array(
        // Meta
        'id'                   => array(
            'sql' => "int(10) unsigned NOT NULL auto_increment",
        ),
        'tstamp'               => array(
            'sql' => "int(10) unsigned NOT NULL default '0'",
        ),
        'title'                => array(
            'label'     => &$GLOBALS['TL_LANG']['tl_bs_theme']['title'],
            'exclude'   => true,
            'search'    => true,
            'inputType' => 'text',
            'eval'      => array(
                'mandatory' => true,
                'maxlength' => 255,
                'tl_class'  => 'w50',
            ),
            'sql'       => "varchar(255) NOT NULL default ''",
        ),
        'author'               => array(
            'label'      => &$GLOBALS['TL_LANG']['tl_bs_theme']['author'],
            'default'    => BackendUser::getInstance()->id,
            'exclude'    => true,
            'filter'     => true,
            'inputType'  => 'select',
            'foreignKey' => 'tl_user.name',
            'eval'       => array(
                'doNotCopy'          => true,
                'mandatory'          => true,
                'chosen'             => true,
                'includeBlankOption' => true,
                'tl_class'           => 'w50',
            ),
            'sql'        => "int(10) unsigned NOT NULL default '0'",
            'relation'   => array(
                'type' => 'hasOne',
                'load' => 'eager',
            ),
        ),
        'path'                 => array(
            'label'     => &$GLOBALS['TL_LANG']['tl_bs_theme']['path'],
            'exclude'   => true,
            'inputType' => 'fileTree',
            'eval'      => array(
                'files'     => false,
                'fieldType' => 'radio',
                'mandatory' => true,
                'tl_class'  => 'clr',
            ),
            'sql'       => "binary(16) NULL",
        ),

        // Color System
        'white'                => array(
            'label'     => &$GLOBALS['TL_LANG']['tl_bs_theme']['white'],
            'inputType' => 'text',
            'default'   => 'ffffff',
            'eval'      => array(
                'maxlength'      => 6,
                'multiple'       => true,
                'size'           => 1,
                'colorpicker'    => true,
                'isHexColor'     => true,
                'decodeEntities' => true,
                'tl_class'       => 'w50 wizard',
            ),
            'sql'       => "varchar(64) NOT NULL default ''",
        ),
        'black'                => array(
            'label'     => &$GLOBALS['TL_LANG']['tl_bs_theme']['black'],
            'inputType' => 'text',
            'default'   => '000000',
            'eval'      => array(
                'maxlength'      => 6,
                'multiple'       => true,
                'size'           => 1,
                'colorpicker'    => true,
                'isHexColor'     => true,
                'decodeEntities' => true,
                'tl_class'       => 'w50 wizard',
            ),
            'sql'       => "varchar(64) NOT NULL default ''",
        ),
        'gray100'              => array(
            'label'     => &$GLOBALS['TL_LANG']['tl_bs_theme']['gray100'],
            'inputType' => 'text',
            'default'   => 'f8f9fa',
            'eval'      => array(
                'maxlength'      => 6,
                'multiple'       => true,
                'size'           => 1,
                'colorpicker'    => true,
                'isHexColor'     => true,
                'decodeEntities' => true,
                'tl_class'       => 'w50 wizard',
            ),
            'sql'       => "varchar(64) NOT NULL default ''",
        ),
        'gray200'              => array(
            'label'     => &$GLOBALS['TL_LANG']['tl_bs_theme']['gray200'],
            'inputType' => 'text',
            'default'   => 'e9ecef',
            'eval'      => array(
                'maxlength'      => 6,
                'multiple'       => true,
                'size'           => 1,
                'colorpicker'    => true,
                'isHexColor'     => true,
                'decodeEntities' => true,
                'tl_class'       => 'w50 wizard',
            ),
            'sql'       => "varchar(64) NOT NULL default ''",
        ),
        'gray300'              => array(
            'label'     => &$GLOBALS['TL_LANG']['tl_bs_theme']['gray300'],
            'inputType' => 'text',
            'default'   => 'dee2e6',
            'eval'      => array(
                'maxlength'      => 6,
                'multiple'       => true,
                'size'           => 1,
                'colorpicker'    => true,
                'isHexColor'     => true,
                'decodeEntities' => true,
                'tl_class'       => 'w50 wizard',
            ),
            'sql'       => "varchar(64) NOT NULL default ''",
        ),
        'gray400'              => array(
            'label'     => &$GLOBALS['TL_LANG']['tl_bs_theme']['gray400'],
            'inputType' => 'text',
            'default'   => 'ced4da',
            'eval'      => array(
                'maxlength'      => 6,
                'multiple'       => true,
                'size'           => 1,
                'colorpicker'    => true,
                'isHexColor'     => true,
                'decodeEntities' => true,
                'tl_class'       => 'w50 wizard',
            ),
            'sql'       => "varchar(64) NOT NULL default ''",
        ),
        'gray500'              => array(
            'label'     => &$GLOBALS['TL_LANG']['tl_bs_theme']['gray500'],
            'inputType' => 'text',
            'default'   => 'adb5bd',
            'eval'      => array(
                'maxlength'      => 6,
                'multiple'       => true,
                'size'           => 1,
                'colorpicker'    => true,
                'isHexColor'     => true,
                'decodeEntities' => true,
                'tl_class'       => 'w50 wizard',
            ),
            'sql'       => "varchar(64) NOT NULL default ''",
        ),
        'gray600'              => array(
            'label'     => &$GLOBALS['TL_LANG']['tl_bs_theme']['gray600'],
            'inputType' => 'text',
            'default'   => '6c757d',
            'eval'      => array(
                'maxlength'      => 6,
                'multiple'       => true,
                'size'           => 1,
                'colorpicker'    => true,
                'isHexColor'     => true,
                'decodeEntities' => true,
                'tl_class'       => 'w50 wizard',
            ),
            'sql'       => "varchar(64) NOT NULL default ''",
        ),
        'gray700'              => array(
            'label'     => &$GLOBALS['TL_LANG']['tl_bs_theme']['gray700'],
            'inputType' => 'text',
            'default'   => '495057',
            'eval'      => array(
                'maxlength'      => 6,
                'multiple'       => true,
                'size'           => 1,
                'colorpicker'    => true,
                'isHexColor'     => true,
                'decodeEntities' => true,
                'tl_class'       => 'w50 wizard',
            ),
            'sql'       => "varchar(64) NOT NULL default ''",
        ),
        'gray800'              => array(
            'label'     => &$GLOBALS['TL_LANG']['tl_bs_theme']['gray800'],
            'inputType' => 'text',
            'default'   => '343a40',
            'eval'      => array(
                'maxlength'      => 6,
                'multiple'       => true,
                'size'           => 1,
                'colorpicker'    => true,
                'isHexColor'     => true,
                'decodeEntities' => true,
                'tl_class'       => 'w50 wizard',
            ),
            'sql'       => "varchar(64) NOT NULL default ''",
        ),
        'gray900'              => array(
            'label'     => &$GLOBALS['TL_LANG']['tl_bs_theme']['gray900'],
            'inputType' => 'text',
            'default'   => '212529',
            'eval'      => array(
                'maxlength'      => 6,
                'multiple'       => true,
                'size'           => 1,
                'colorpicker'    => true,
                'isHexColor'     => true,
                'decodeEntities' => true,
                'tl_class'       => 'w50 wizard',
            ),
            'sql'       => "varchar(64) NOT NULL default ''",
        ),
        'primary'              => array(
            'label'     => &$GLOBALS['TL_LANG']['tl_bs_theme']['primary'],
            'inputType' => 'text',
            'default'   => '007bff',
            'eval'      => array(
                'maxlength'      => 6,
                'multiple'       => true,
                'size'           => 1,
                'colorpicker'    => true,
                'isHexColor'     => true,
                'decodeEntities' => true,
                'tl_class'       => 'w50 wizard clr',
            ),
            'sql'       => "varchar(64) NOT NULL default ''",
        ),
        'secondary'            => array(
            'label'     => &$GLOBALS['TL_LANG']['tl_bs_theme']['secondary'],
            'inputType' => 'text',
            'default'   => '6c757d',
            'eval'      => array(
                'maxlength'      => 6,
                'multiple'       => true,
                'size'           => 1,
                'colorpicker'    => true,
                'isHexColor'     => true,
                'decodeEntities' => true,
                'tl_class'       => 'w50 wizard',
            ),
            'sql'       => "varchar(64) NOT NULL default ''",
        ),
        'tertiary'             => array(
            'label'     => &$GLOBALS['TL_LANG']['tl_bs_theme']['tertiary'],
            'inputType' => 'text',
            'eval'      => array(
                'maxlength'      => 6,
                'multiple'       => true,
                'size'           => 1,
                'colorpicker'    => true,
                'isHexColor'     => true,
                'decodeEntities' => true,
                'tl_class'       => 'w50 wizard',
            ),
            'sql'       => "varchar(64) NOT NULL default ''",
        ),
        'info'                 => array(
            'label'     => &$GLOBALS['TL_LANG']['tl_bs_theme']['info'],
            'inputType' => 'text',
            'default'   => '17a2b8',
            'eval'      => array(
                'maxlength'      => 6,
                'multiple'       => true,
                'size'           => 1,
                'colorpicker'    => true,
                'isHexColor'     => true,
                'decodeEntities' => true,
                'tl_class'       => 'w50 wizard clr',
            ),
            'sql'       => "varchar(64) NOT NULL default ''",
        ),
        'success'              => array(
            'label'     => &$GLOBALS['TL_LANG']['tl_bs_theme']['success'],
            'inputType' => 'text',
            'default'   => '28a745',
            'eval'      => array(
                'maxlength'      => 6,
                'multiple'       => true,
                'size'           => 1,
                'colorpicker'    => true,
                'isHexColor'     => true,
                'decodeEntities' => true,
                'tl_class'       => 'w50 wizard',
            ),
            'sql'       => "varchar(64) NOT NULL default ''",
        ),
        'warning'              => array(
            'label'     => &$GLOBALS['TL_LANG']['tl_bs_theme']['warning'],
            'inputType' => 'text',
            'default'   => 'ffc107',
            'eval'      => array(
                'maxlength'      => 6,
                'multiple'       => true,
                'size'           => 1,
                'colorpicker'    => true,
                'isHexColor'     => true,
                'decodeEntities' => true,
                'tl_class'       => 'w50 wizard',
            ),
            'sql'       => "varchar(64) NOT NULL default ''",
        ),
        'danger'               => array(
            'label'     => &$GLOBALS['TL_LANG']['tl_bs_theme']['danger'],
            'inputType' => 'text',
            'default'   => 'dc3545',
            'eval'      => array(
                'maxlength'      => 6,
                'multiple'       => true,
                'size'           => 1,
                'colorpicker'    => true,
                'isHexColor'     => true,
                'decodeEntities' => true,
                'tl_class'       => 'w50 wizard',
            ),
            'sql'       => "varchar(64) NOT NULL default ''",
        ),
        'light'                => array(
            'label'     => &$GLOBALS['TL_LANG']['tl_bs_theme']['light'],
            'inputType' => 'text',
            'eval'      => array(
                'maxlength'      => 6,
                'multiple'       => true,
                'size'           => 1,
                'colorpicker'    => true,
                'isHexColor'     => true,
                'decodeEntities' => true,
                'tl_class'       => 'w50 wizard',
            ),
            'sql'       => "varchar(64) NOT NULL default ''",
        ),
        'dark'                 => array(
            'label'     => &$GLOBALS['TL_LANG']['tl_bs_theme']['dark'],
            'inputType' => 'text',
            'eval'      => array(
                'maxlength'      => 6,
                'multiple'       => true,
                'size'           => 1,
                'colorpicker'    => true,
                'isHexColor'     => true,
                'decodeEntities' => true,
                'tl_class'       => 'w50 wizard',
            ),
            'sql'       => "varchar(64) NOT NULL default ''",
        ),
        'yiqTextLight'         => array(
            'label'     => &$GLOBALS['TL_LANG']['tl_bs_theme']['yiqTextLight'],
            'inputType' => 'text',
            'eval'      => array(
                'maxlength'      => 6,
                'multiple'       => true,
                'size'           => 1,
                'colorpicker'    => true,
                'isHexColor'     => true,
                'decodeEntities' => true,
                'tl_class'       => 'w50 wizard',
            ),
            'sql'       => "varchar(64) NOT NULL default ''",
        ),
        'yiqTextDark'          => array(
            'label'     => &$GLOBALS['TL_LANG']['tl_bs_theme']['yiqTextDark'],
            'inputType' => 'text',
            'eval'      => array(
                'maxlength'      => 6,
                'multiple'       => true,
                'size'           => 1,
                'colorpicker'    => true,
                'isHexColor'     => true,
                'decodeEntities' => true,
                'tl_class'       => 'w50 wizard',
            ),
            'sql'       => "varchar(64) NOT NULL default ''",
        ),

        // Defaults
        'bodyBg'               => array(
            'label'     => &$GLOBALS['TL_LANG']['tl_bs_theme']['bodyBg'],
            'inputType' => 'text',
            'eval'      => array(
                'maxlength'      => 6,
                'multiple'       => true,
                'size'           => 1,
                'colorpicker'    => true,
                'isHexColor'     => true,
                'decodeEntities' => true,
                'tl_class'       => 'w50 wizard clr',
            ),
            'sql'       => "varchar(64) NOT NULL default ''",
        ),
        'bodyColor'            => array(
            'label'     => &$GLOBALS['TL_LANG']['tl_bs_theme']['bodyColor'],
            'inputType' => 'text',
            'eval'      => array(
                'maxlength'      => 6,
                'multiple'       => true,
                'size'           => 1,
                'colorpicker'    => true,
                'isHexColor'     => true,
                'decodeEntities' => true,
                'tl_class'       => 'w50 wizard',
            ),
            'sql'       => "varchar(64) NOT NULL default ''",
        ),
        'linkColor'            => array(
            'label'     => &$GLOBALS['TL_LANG']['tl_bs_theme']['linkColor'],
            'inputType' => 'text',
            'eval'      => array(
                'maxlength'      => 6,
                'multiple'       => true,
                'size'           => 1,
                'colorpicker'    => true,
                'isHexColor'     => true,
                'decodeEntities' => true,
                'tl_class'       => 'w50 wizard',
            ),
            'sql'       => "varchar(64) NOT NULL default ''",
        ),
        'linkDecoration'       => array(
            'label'     => &$GLOBALS['TL_LANG']['tl_bs_theme']['linkDecoration'],
            'inputType' => 'select',
            'default'   => 'none',
            'options'   => array('none', 'underline'),
            'eval'      => array(
                'includeBlankOption' => false,
                'tl_class'           => 'w50',
            ),
            'sql'       => "varchar(32) NOT NULL default ''",
        ),
        'linkHoverColor'       => array(
            'label'     => &$GLOBALS['TL_LANG']['tl_bs_theme']['linkHoverColor'],
            'inputType' => 'text',
            'eval'      => array(
                'maxlength'      => 6,
                'multiple'       => true,
                'size'           => 1,
                'colorpicker'    => true,
                'isHexColor'     => true,
                'decodeEntities' => true,
                'tl_class'       => 'w50 wizard',
            ),
            'sql'       => "varchar(64) NOT NULL default ''",
        ),
        'linkHoverDecoration'  => array(
            'label'     => &$GLOBALS['TL_LANG']['tl_bs_theme']['linkHoverDecoration'],
            'inputType' => 'select',
            'default'   => 'underline',
            'options'   => array('none', 'underline'),
            'eval'      => array(
                'includeBlankOption' => false,
                'tl_class'           => 'w50',
            ),
            'sql'       => "varchar(32) NOT NULL default ''",
        ),
        'componentActiveColor' => array(
            'label'     => &$GLOBALS['TL_LANG']['tl_bs_theme']['componentActiveColor'],
            'inputType' => 'text',
            'eval'      => array(
                'maxlength'      => 6,
                'multiple'       => true,
                'size'           => 1,
                'colorpicker'    => true,
                'isHexColor'     => true,
                'decodeEntities' => true,
                'tl_class'       => 'w50 wizard',
            ),
            'sql'       => "varchar(64) NOT NULL default ''",
        ),
        'componentActiveBg'    => array(
            'label'     => &$GLOBALS['TL_LANG']['tl_bs_theme']['componentActiveBg'],
            'inputType' => 'text',
            'eval'      => array(
                'maxlength'      => 6,
                'multiple'       => true,
                'size'           => 1,
                'colorpicker'    => true,
                'isHexColor'     => true,
                'decodeEntities' => true,
                'tl_class'       => 'w50 wizard',
            ),
            'sql'       => "varchar(64) NOT NULL default ''",
        ),
        'textMuted'            => array(
            'label'     => &$GLOBALS['TL_LANG']['tl_bs_theme']['textMuted'],
            'inputType' => 'text',
            'eval'      => array(
                'maxlength'      => 6,
                'multiple'       => true,
                'size'           => 1,
                'colorpicker'    => true,
                'isHexColor'     => true,
                'decodeEntities' => true,
                'tl_class'       => 'w50 wizard',
            ),
            'sql'       => "varchar(64) NOT NULL default ''",
        ),

        // Margins, borders, ...
        'spacer'               => array(
            'label'     => &$GLOBALS['TL_LANG']['tl_bs_theme']['spacer'],
            'inputType' => 'inputUnit',
            'default'   => array(
                'value' => 1,
                'unit'  => 'rem',
            ),
            'options'   => $GLOBALS['TL_CSS_UNITS'],
            'eval'      => array(
                'includeBlankOption' => true,
                'rgxp'               => 'digit_inherit',
                'maxlength'          => 20,
                'tl_class'           => 'w50',
            ),
            'sql'       => "varchar(64) NOT NULL default ''",
        ),
        'borderWidth'          => array(
            'label'     => &$GLOBALS['TL_LANG']['tl_bs_theme']['borderWidth'],
            'inputType' => 'inputUnit',
            'default'   => array(
                'value' => 1,
                'unit'  => 'px',
            ),
            'options'   => $GLOBALS['TL_CSS_UNITS'],
            'eval'      => array(
                'includeBlankOption' => true,
                'rgxp'               => 'digit_inherit',
                'maxlength'          => 20,
                'tl_class'           => 'w50 clr',
            ),
            'sql'       => "varchar(64) NOT NULL default ''",
        ),
        'borderColor'          => array(
            'label'     => &$GLOBALS['TL_LANG']['tl_bs_theme']['borderColor'],
            'inputType' => 'text',
            'eval'      => array(
                'maxlength'      => 6,
                'multiple'       => true,
                'size'           => 1,
                'colorpicker'    => true,
                'isHexColor'     => true,
                'decodeEntities' => true,
                'tl_class'       => 'w50 wizard',
            ),
            'sql'       => "varchar(64) NOT NULL default ''",
        ),
        'borderRadius'         => array(
            'label'     => &$GLOBALS['TL_LANG']['tl_bs_theme']['borderRadius'],
            'inputType' => 'inputUnit',
            'default'   => array(
                'value' => 0.25,
                'unit'  => 'rem',
            ),
            'options'   => $GLOBALS['TL_CSS_UNITS'],
            'eval'      => array(
                'includeBlankOption' => true,
                'rgxp'               => 'digit_inherit',
                'maxlength'          => 20,
                'tl_class'           => 'w50 clr',
            ),
            'sql'       => "varchar(64) NOT NULL default ''",
        ),
        'borderRadiusSm'       => array(
            'label'     => &$GLOBALS['TL_LANG']['tl_bs_theme']['borderRadiusSm'],
            'inputType' => 'inputUnit',
            'default'   => array(
                'value' => 0.2,
                'unit'  => 'rem',
            ),
            'options'   => $GLOBALS['TL_CSS_UNITS'],
            'eval'      => array(
                'includeBlankOption' => true,
                'rgxp'               => 'digit_inherit',
                'maxlength'          => 20,
                'tl_class'           => 'w50 clr',
            ),
            'sql'       => "varchar(64) NOT NULL default ''",
        ),
        'borderRadiusLg'       => array(
            'label'     => &$GLOBALS['TL_LANG']['tl_bs_theme']['borderRadiusLg'],
            'inputType' => 'inputUnit',
            'default'   => array(
                'value' => 0.3,
                'unit'  => 'rem',
            ),
            'options'   => $GLOBALS['TL_CSS_UNITS'],
            'eval'      => array(
                'includeBlankOption' => true,
                'rgxp'               => 'digit_inherit',
                'maxlength'          => 20,
                'tl_class'           => 'w50',
            ),
            'sql'       => "varchar(64) NOT NULL default ''",
        ),
        'boxShadow'            => array(
            'label'     => &$GLOBALS['TL_LANG']['tl_bs_theme']['boxShadow'],
            'inputType' => 'text',
            'default'   => '0 .5rem 1rem rgba($black, .15)',
            'eval'      => array('tl_class' => 'w50'),
            'sql'       => "varchar(128) NOT NULL default ''",
        ),
        'boxShadowSm'          => array(
            'label'     => &$GLOBALS['TL_LANG']['tl_bs_theme']['boxShadowSm'],
            'inputType' => 'text',
            'default'   => '0 .125rem .25rem rgba($black, .075)',
            'eval'      => array('tl_class' => 'w50'),
            'sql'       => "varchar(128) NOT NULL default ''",
        ),
        'boxShadowLg'          => array(
            'label'     => &$GLOBALS['TL_LANG']['tl_bs_theme']['boxShadowLg'],
            'inputType' => 'text',
            'default'   => '0 1rem 3rem rgba($black, .175)',
            'eval'      => array('tl_class' => 'w50'),
            'sql'       => "varchar(128) NOT NULL default ''",
        ),
        'hrBorderColor'        => array(
            'label'     => &$GLOBALS['TL_LANG']['tl_bs_theme']['hrBorderColor'],
            'inputType' => 'text',
            'eval'      => array(
                'maxlength'      => 6,
                'multiple'       => true,
                'size'           => 1,
                'colorpicker'    => true,
                'isHexColor'     => true,
                'decodeEntities' => true,
                'tl_class'       => 'w50 wizard',
            ),
            'sql'       => "varchar(64) NOT NULL default ''",
        ),
        'hrBorderWidth'        => array(
            'label'     => &$GLOBALS['TL_LANG']['tl_bs_theme']['hrBorderWidth'],
            'inputType' => 'inputUnit',
            'options'   => $GLOBALS['TL_CSS_UNITS'],
            'eval'      => array(
                'includeBlankOption' => true,
                'rgxp'               => 'digit_inherit',
                'maxlength'          => 20,
                'tl_class'           => 'w50',
            ),
            'sql'       => "varchar(64) NOT NULL default ''",
        ),
        'hrMarginY'            => array(
            'label'     => &$GLOBALS['TL_LANG']['tl_bs_theme']['hrMarginY'],
            'inputType' => 'inputUnit',
            'options'   => $GLOBALS['TL_CSS_UNITS'],
            'eval'      => array(
                'includeBlankOption' => true,
                'rgxp'               => 'digit_inherit',
                'maxlength'          => 20,
                'tl_class'           => 'w50',
            ),
            'sql'       => "varchar(64) NOT NULL default ''",
        ),
        'listInlinePadding'    => array(
            'label'     => &$GLOBALS['TL_LANG']['tl_bs_theme']['listInlinePadding'],
            'inputType' => 'inputUnit',
            'default'   => array(
                'unit'  => 'rem',
                'value' => '0.5',
            ),
            'options'   => $GLOBALS['TL_CSS_UNITS'],
            'eval'      => array(
                'includeBlankOption' => true,
                'rgxp'               => 'digit_inherit',
                'maxlength'          => 20,
                'tl_class'           => 'w50 clr',
            ),
            'sql'       => "varchar(64) NOT NULL default ''",
        ),


        // Typography paragraph
        'fontFamilySansSerif'  => array(
            'label'     => &$GLOBALS['TL_LANG']['tl_bs_theme']['fontFamilySansSerif'],
            'inputType' => 'text',
            'default'   => '-apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"',
            'eval'      => array(
                'maxlength' => 255,
                'tl_class'  => 'w50 clr',
            ),
            'sql'       => "varchar(255) NOT NULL default ''",
        ),
        'fontFamilyMonospace'  => array(
            'label'     => &$GLOBALS['TL_LANG']['tl_bs_theme']['fontFamilyMonospace'],
            'inputType' => 'text',
            'default'   => 'SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace',
            'eval'      => array(
                'maxlength' => 255,
                'tl_class'  => 'w50',
            ),
            'sql'       => "varchar(255) NOT NULL default ''",
        ),
        'fontFamilyBase'       => array(
            'label'     => &$GLOBALS['TL_LANG']['tl_bs_theme']['fontFamilySansSerif'],
            'inputType' => 'text',
            'eval'      => array(
                'maxlength' => 255,
                'tl_class'  => 'w50 clr',
            ),
            'sql'       => "varchar(255) NOT NULL default ''",
        ),
        'fontSizeBase'         => array(
            'label'     => &$GLOBALS['TL_LANG']['tl_bs_theme']['fontSizeBase'],
            'inputType' => 'inputUnit',
            'default'   => array(
                'value' => 1,
                'unit'  => 'rem',
            ),
            'options'   => $GLOBALS['TL_CSS_UNITS'],
            'eval'      => array(
                'includeBlankOption' => true,
                'rgxp'               => 'digit_inherit',
                'maxlength'          => 20,
                'tl_class'           => 'w50',
            ),
            'sql'       => "varchar(64) NOT NULL default ''",
        ),
        'fontSizeSm'           => array(
            'label'     => &$GLOBALS['TL_LANG']['tl_bs_theme']['fontSizeSm'],
            'inputType' => 'inputUnit',
            'options'   => $GLOBALS['TL_CSS_UNITS'],
            'eval'      => array(
                'includeBlankOption' => true,
                'rgxp'               => 'digit_inherit',
                'maxlength'          => 20,
                'tl_class'           => 'w50 clr ',
            ),
            'sql'       => "varchar(64) NOT NULL default ''",
        ),
        'fontSizeLg'           => array(
            'label'     => &$GLOBALS['TL_LANG']['tl_bs_theme']['fontSizeLg'],
            'inputType' => 'inputUnit',
            'options'   => $GLOBALS['TL_CSS_UNITS'],
            'eval'      => array(
                'includeBlankOption' => true,
                'rgxp'               => 'digit_inherit',
                'maxlength'          => 20,
                'tl_class'           => 'w50',
            ),
            'sql'       => "varchar(64) NOT NULL default ''",
        ),
        'fontWeightNormal'     => array(
            'label'     => &$GLOBALS['TL_LANG']['tl_bs_theme']['fontWeightNormal'],
            'inputType' => 'select',
            'default'   => '400',
            'options'   => $GLOBALS['TL_LANG']['tl_bs_theme']['fontWeights'],
            'eval'      => array(
                'includeBlankOption' => false,
                'tl_class'           => 'w50 clr',
            ),
            'sql'       => "varchar(32) NOT NULL default ''",
        ),
        'fontWeightLight'      => array(
            'label'     => &$GLOBALS['TL_LANG']['tl_bs_theme']['fontWeightLight'],
            'inputType' => 'select',
            'default'   => '300',
            'options'   => $GLOBALS['TL_LANG']['tl_bs_theme']['fontWeights'],
            'eval'      => array(
                'includeBlankOption' => false,
                'tl_class'           => 'w50 clr',
            ),
            'sql'       => "varchar(32) NOT NULL default ''",
        ),
        'fontWeightBold'       => array(
            'label'     => &$GLOBALS['TL_LANG']['tl_bs_theme']['fontWeightBold'],
            'inputType' => 'select',
            'default'   => '700',
            'options'   => $GLOBALS['TL_LANG']['tl_bs_theme']['fontWeights'],
            'eval'      => array(
                'includeBlankOption' => false,
                'tl_class'           => 'w50',
            ),
            'sql'       => "varchar(32) NOT NULL default ''",
        ),
        'fontWeightBase'       => array(
            'label'     => &$GLOBALS['TL_LANG']['tl_bs_theme']['fontWeightBase'],
            'inputType' => 'select',
            'default'   => '',
            'options'   => $GLOBALS['TL_LANG']['tl_bs_theme']['fontWeights'],
            'eval'      => array(
                'includeBlankOption' => true,
                'tl_class'           => 'w50 clr',
            ),
            'sql'       => "varchar(32) NOT NULL default ''",
        ),
        'lineHeightBase'       => array(
            'label'     => &$GLOBALS['TL_LANG']['tl_bs_theme']['lineHeightBase'],
            'inputType' => 'inputUnit',
            'default'   => array(
                'value' => '1.5',
            ),
            'options'   => $GLOBALS['TL_CSS_UNITS'],
            'eval'      => array(
                'includeBlankOption' => true,
                'rgxp'               => 'digit_inherit',
                'maxlength'          => 20,
                'tl_class'           => 'w50 clr',
            ),
            'sql'       => "varchar(64) NOT NULL default ''",
        ),
        'lineHeightSm'         => array(
            'label'     => &$GLOBALS['TL_LANG']['tl_bs_theme']['lineHeightSm'],
            'inputType' => 'inputUnit',
            'default'   => array(
                'value' => '1.5',
            ),
            'options'   => $GLOBALS['TL_CSS_UNITS'],
            'eval'      => array(
                'includeBlankOption' => true,
                'rgxp'               => 'digit_inherit',
                'maxlength'          => 20,
                'tl_class'           => 'w50 clr',
            ),
            'sql'       => "varchar(64) NOT NULL default ''",
        ),
        'lineHeightLg'         => array(
            'label'     => &$GLOBALS['TL_LANG']['tl_bs_theme']['lineHeightLg'],
            'inputType' => 'inputUnit',
            'default'   => array(
                'value' => '1.5',
            ),
            'options'   => $GLOBALS['TL_CSS_UNITS'],
            'eval'      => array(
                'includeBlankOption' => true,
                'rgxp'               => 'digit_inherit',
                'maxlength'          => 20,
                'tl_class'           => 'w50',
            ),
            'sql'       => "varchar(64) NOT NULL default ''",
        ),
        'leadFontFamily'       => array(
            'label'     => &$GLOBALS['TL_LANG']['tl_bs_theme']['leadFontFamily'],
            'inputType' => 'text',
            'default'   => 'inherit',
            'eval'      => array(
                'maxlength' => 255,
                'tl_class'  => 'w50 clr',
            ),
            'sql'       => "varchar(255) NOT NULL default ''",
        ),
        'leadFontSize'         => array(
            'label'     => &$GLOBALS['TL_LANG']['tl_bs_theme']['leadFontSize'],
            'inputType' => 'inputUnit',
            'options'   => $GLOBALS['TL_CSS_UNITS'],
            'eval'      => array(
                'includeBlankOption' => true,
                'rgxp'               => 'digit_inherit',
                'maxlength'          => 20,
                'tl_class'           => 'w50',
            ),
            'sql'       => "varchar(64) NOT NULL default ''",
        ),
        'leadFontWeight'       => array(
            'label'     => &$GLOBALS['TL_LANG']['tl_bs_theme']['leadFontWeight'],
            'inputType' => 'select',
            'options'   => $GLOBALS['TL_LANG']['tl_bs_theme']['fontWeights'],
            'eval'      => array(
                'includeBlankOption' => true,
                'tl_class'           => 'w50 clr',
            ),
            'sql'       => "varchar(32) NOT NULL default ''",
        ),
        'leadColor'            => array(
            'label'     => &$GLOBALS['TL_LANG']['tl_bs_theme']['leadColor'],
            'inputType' => 'text',
            'eval'      => array(
                'maxlength'      => 6,
                'multiple'       => true,
                'size'           => 1,
                'colorpicker'    => true,
                'isHexColor'     => true,
                'decodeEntities' => true,
                'tl_class'       => 'w50 wizard',
            ),
            'sql'       => "varchar(64) NOT NULL default ''",
        ),

        // Typography headings
        'headingsFontFamily'   => array(
            'label'     => &$GLOBALS['TL_LANG']['tl_bs_theme']['headingsFontFamily'],
            'default'   => 'inherit',
            'inputType' => 'text',
            'eval'      => array(
                'maxlength' => 255,
                'tl_class'  => 'w50 clr',
            ),
            'sql'       => "varchar(255) NOT NULL default ''",
        ),
        'headingsFontWeight'   => array(
            'label'     => &$GLOBALS['TL_LANG']['tl_bs_theme']['headingsFontWeight'],
            'inputType' => 'select',
            'default'   => '500',
            'options'   => $GLOBALS['TL_LANG']['tl_bs_theme']['fontWeights'],
            'eval'      => array(
                'includeBlankOption' => true,
                'tl_class'           => 'w50',
            ),
            'sql'       => "varchar(32) NOT NULL default ''",
        ),
        'headingsLineHeight'   => array(
            'label'     => &$GLOBALS['TL_LANG']['tl_bs_theme']['headingsLineHeight'],
            'inputType' => 'inputUnit',
            'default'   => array(
                'value' => '1.5',
            ),
            'options'   => $GLOBALS['TL_CSS_UNITS'],
            'eval'      => array(
                'includeBlankOption' => true,
                'rgxp'               => 'digit_inherit',
                'maxlength'          => 20,
                'tl_class'           => 'w50',
            ),
            'sql'       => "varchar(64) NOT NULL default ''",
        ),
        'headingsColor'        => array(
            'label'     => &$GLOBALS['TL_LANG']['tl_bs_theme']['headingsColor'],
            'inputType' => 'text',
            'eval'      => array(
                'maxlength'      => 6,
                'multiple'       => true,
                'size'           => 1,
                'colorpicker'    => true,
                'isHexColor'     => true,
                'decodeEntities' => true,
                'tl_class'       => 'w50 wizard',
            ),
            'sql'       => "varchar(64) NOT NULL default ''",
        ),
        'headingsMarginBottom' => array(
            'label'     => &$GLOBALS['TL_LANG']['tl_bs_theme']['headingsMarginBottom'],
            'inputType' => 'inputUnit',
            'options'   => $GLOBALS['TL_CSS_UNITS'],
            'eval'      => array(
                'includeBlankOption' => true,
                'rgxp'               => 'digit_inherit',
                'maxlength'          => 20,
                'tl_class'           => 'w50',
            ),
            'sql'       => "varchar(64) NOT NULL default ''",
        ),
        'h1FontSize'           => array(
            'label'     => &$GLOBALS['TL_LANG']['tl_bs_theme']['h1FontSize'],
            'inputType' => 'inputUnit',
            'default'   => array(
                'value' => 1,
                'unit'  => 'rem',
            ),
            'options'   => $GLOBALS['TL_CSS_UNITS'],
            'eval'      => array(
                'includeBlankOption' => true,
                'rgxp'               => 'digit_inherit',
                'maxlength'          => 20,
                'tl_class'           => 'w50 clr',
            ),
            'sql'       => "varchar(64) NOT NULL default ''",
        ),
        'h1Color'              => array(
            'label'     => &$GLOBALS['TL_LANG']['tl_bs_theme']['h1Color'],
            'inputType' => 'text',
            'eval'      => array(
                'maxlength'      => 6,
                'multiple'       => true,
                'size'           => 1,
                'colorpicker'    => true,
                'isHexColor'     => true,
                'decodeEntities' => true,
                'tl_class'       => 'w50 wizard',
            ),
            'sql'       => "varchar(64) NOT NULL default ''",
        ),
        'h2FontSize'           => array(
            'label'     => &$GLOBALS['TL_LANG']['tl_bs_theme']['h2FontSize'],
            'inputType' => 'inputUnit',
            'default'   => array(
                'value' => 1,
                'unit'  => 'rem',
            ),
            'options'   => $GLOBALS['TL_CSS_UNITS'],
            'eval'      => array(
                'includeBlankOption' => true,
                'rgxp'               => 'digit_inherit',
                'maxlength'          => 20,
                'tl_class'           => 'w50 clr',
            ),
            'sql'       => "varchar(64) NOT NULL default ''",
        ),
        'h2Color'              => array(
            'label'     => &$GLOBALS['TL_LANG']['tl_bs_theme']['h2Color'],
            'inputType' => 'text',
            'eval'      => array(
                'maxlength'      => 6,
                'multiple'       => true,
                'size'           => 1,
                'colorpicker'    => true,
                'isHexColor'     => true,
                'decodeEntities' => true,
                'tl_class'       => 'w50 wizard',
            ),
            'sql'       => "varchar(64) NOT NULL default ''",
        ),
        'h3FontSize'           => array(
            'label'     => &$GLOBALS['TL_LANG']['tl_bs_theme']['h3FontSize'],
            'inputType' => 'inputUnit',
            'default'   => array(
                'value' => 1,
                'unit'  => 'rem',
            ),
            'options'   => $GLOBALS['TL_CSS_UNITS'],
            'eval'      => array(
                'includeBlankOption' => true,
                'rgxp'               => 'digit_inherit',
                'maxlength'          => 20,
                'tl_class'           => 'w50 clr',
            ),
            'sql'       => "varchar(64) NOT NULL default ''",
        ),
        'h3Color'              => array(
            'label'     => &$GLOBALS['TL_LANG']['tl_bs_theme']['h3Color'],
            'inputType' => 'text',
            'eval'      => array(
                'maxlength'      => 6,
                'multiple'       => true,
                'size'           => 1,
                'colorpicker'    => true,
                'isHexColor'     => true,
                'decodeEntities' => true,
                'tl_class'       => 'w50 wizard',
            ),
            'sql'       => "varchar(64) NOT NULL default ''",
        ),
        'h4FontSize'           => array(
            'label'     => &$GLOBALS['TL_LANG']['tl_bs_theme']['h4FontSize'],
            'inputType' => 'inputUnit',
            'default'   => array(
                'value' => 1,
                'unit'  => 'rem',
            ),
            'options'   => $GLOBALS['TL_CSS_UNITS'],
            'eval'      => array(
                'includeBlankOption' => true,
                'rgxp'               => 'digit_inherit',
                'maxlength'          => 20,
                'tl_class'           => 'w50 clr',
            ),
            'sql'       => "varchar(64) NOT NULL default ''",
        ),
        'h4Color'              => array(
            'label'     => &$GLOBALS['TL_LANG']['tl_bs_theme']['h4Color'],
            'inputType' => 'text',
            'eval'      => array(
                'maxlength'      => 6,
                'multiple'       => true,
                'size'           => 1,
                'colorpicker'    => true,
                'isHexColor'     => true,
                'decodeEntities' => true,
                'tl_class'       => 'w50 wizard',
            ),
            'sql'       => "varchar(64) NOT NULL default ''",
        ),
        'h5FontSize'           => array(
            'label'     => &$GLOBALS['TL_LANG']['tl_bs_theme']['h5FontSize'],
            'inputType' => 'inputUnit',
            'default'   => array(
                'value' => 1,
                'unit'  => 'rem',
            ),
            'options'   => $GLOBALS['TL_CSS_UNITS'],
            'eval'      => array(
                'includeBlankOption' => true,
                'rgxp'               => 'digit_inherit',
                'maxlength'          => 20,
                'tl_class'           => 'w50 clr',
            ),
            'sql'       => "varchar(64) NOT NULL default ''",
        ),
        'h5Color'              => array(
            'label'     => &$GLOBALS['TL_LANG']['tl_bs_theme']['h5Color'],
            'inputType' => 'text',
            'eval'      => array(
                'maxlength'      => 6,
                'multiple'       => true,
                'size'           => 1,
                'colorpicker'    => true,
                'isHexColor'     => true,
                'decodeEntities' => true,
                'tl_class'       => 'w50 wizard',
            ),
            'sql'       => "varchar(64) NOT NULL default ''",
        ),
        'h6FontSize'           => array(
            'label'     => &$GLOBALS['TL_LANG']['tl_bs_theme']['h6FontSize'],
            'inputType' => 'inputUnit',
            'default'   => array(
                'value' => 1,
                'unit'  => 'rem',
            ),
            'options'   => $GLOBALS['TL_CSS_UNITS'],
            'eval'      => array(
                'includeBlankOption' => true,
                'rgxp'               => 'digit_inherit',
                'maxlength'          => 20,
                'tl_class'           => 'w50 clr',
            ),
            'sql'       => "varchar(64) NOT NULL default ''",
        ),
        'h6Color'              => array(
            'label'     => &$GLOBALS['TL_LANG']['tl_bs_theme']['h6Color'],
            'inputType' => 'text',
            'eval'      => array(
                'maxlength'      => 6,
                'multiple'       => true,
                'size'           => 1,
                'colorpicker'    => true,
                'isHexColor'     => true,
                'decodeEntities' => true,
                'tl_class'       => 'w50 wizard',
            ),
            'sql'       => "varchar(64) NOT NULL default ''",
        ),

        // Navigation +++

        // Images +++

        // Forms ++

        // Pagination +++

        // Carousels ++

        // Tables ++

        // List groups ++

        // Modals ++

        // Cards +

        // Dropdown

        // Tooltips

        // Popovers

        // Badges +

        // Alerts

        // Progress bars

        // Options
        'enableCaret'          => array(
            'label'     => &$GLOBALS['TL_LANG']['tl_bs_theme']['enableCaret'],
            'default'   => 1,
            'inputType' => 'checkbox',
            'eval'      => array('w50 m12'),
            'sql'       => "char(1) NOT NULL default ''",
        ),
        'enableRounded'        => array(
            'label'     => &$GLOBALS['TL_LANG']['tl_bs_theme']['enableRounded'],
            'default'   => 1,
            'inputType' => 'checkbox',
            'eval'      => array('w50 m12'),
            'sql'       => "char(1) NOT NULL default ''",
        ),
        'enableShadows'        => array(
            'label'     => &$GLOBALS['TL_LANG']['tl_bs_theme']['enableShadows'],
            'default'   => 0,
            'inputType' => 'checkbox',
            'eval'      => array('w50 m12'),
            'sql'       => "char(1) NOT NULL default ''",
        ),
        'enableGradients'      => array(
            'label'     => &$GLOBALS['TL_LANG']['tl_bs_theme']['enableGradients'],
            'default'   => 0,
            'inputType' => 'checkbox',
            'eval'      => array('w50 m12'),
            'sql'       => "char(1) NOT NULL default ''",
        ),

    ),
);
