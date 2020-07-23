<?php
/**
 *  Copyright Information
 *  @copyright: 2018 agentur fipps e.K.
 *  @author   : Arne Borchert <arne.borchert@fipps.de>
 *  @license  : LGPL 3.0+
 */


/**
 * -------------------------------------------------------------------------
 * BACK END MODULES
 * -------------------------------------------------------------------------
 *
 * Back end modules are stored in a global array called "BE_MOD". Each module
 * has certain properties like an icon, an optional callback function and one
 * or more tables. Each module belongs to a particular group.
 *
 * $GLOBALS['BE_MOD'] = array
 * (
 * 'group_1' => array
 * (
 * 'module_1' => array
 * (
 * 'tables' => array('table_1', 'table_2'),
 * 'key' => array('Class', 'method'),
 * 'callback' => 'ClassName',
 * 'icon' => 'path/to/icon.gif',
 * 'stylesheet' => 'path/to/stylesheet.css',
 * 'javascript' => 'path/to/javascript.js'
 * )
 * )
 * );
 *
 * Use function array_insert() to modify an existing modules array.
 */
$GLOBALS['BE_MOD']['design']['bootstrap_customizer'] = array(
    'tables' => array(
        'tl_bs_theme',
    ),
);

/**
 * -------------------------------------------------------------------------
 * FRONT END MODULES
 * -------------------------------------------------------------------------
 *
 * List all front end modules and their class names.
 *
 * $GLOBALS['FE_MOD'] = array
 * (
 * 'group_1' => array
 * (
 * 'module_1' => 'Contentlass',
 * 'module_2' => 'Contentlass'
 * )
 * );
 *
 * Use function array_insert() to modify an existing CTE array.
 */

/**
 * -------------------------------------------------------------------------
 * CONTENT ELEMENTS
 * -------------------------------------------------------------------------
 *
 * List all content elements and their class names.
 *
 * $GLOBALS['TL_CTE'] = array
 * (
 * 'group_1' => array
 * (
 * 'cte_1' => 'Contentlass',
 * 'cte_2' => 'Contentlass'
 * )
 * );
 *
 * Use function array_insert() to modify an existing CTE array.
 */

/**
 * -------------------------------------------------------------------------
 * BACK END FORM FIELDS
 * -------------------------------------------------------------------------
 *
 * List all back end form fields and their class names.
 *
 * $GLOBALS['BE_FFL'] = array
 * (
 * 'input' => 'Class',
 * 'select' => 'Class'
 * );
 *
 * Use function array_insert() to modify an existing FFL array.
 */

/**
 * -------------------------------------------------------------------------
 * FRONT END FORM FIELDS
 * -------------------------------------------------------------------------
 *
 * List all form fields and their class names.
 *
 * $GLOBALS['TL_FFL'] = array
 * (
 * 'input' => Class,
 * 'select' => Class
 * );
 *
 * Use function array_insert() to modify an existing FFL array.
 */

/**
 * -------------------------------------------------------------------------
 * CACHE TABLES
 * -------------------------------------------------------------------------
 *
 * These tables are used to cache data and can be truncated using back end
 * module "clear cache".
 *
 * $GLOBALS['TL_CACHE'] = array
 * (
 * 'table_1',
 * 'table_2'
 * );
 *
 * Use function array_insert() to modify an existing cache array.
 */

/**
 * -------------------------------------------------------------------------
 * HOOKS
 * -------------------------------------------------------------------------
 *
 * Hooking allows you to register one or more callback functions that are
 * called on a particular event in a specific order. Thus, third party
 * extensions can add functionality to the core system without having to
 * modify the source code.
 *
 * $GLOBALS['TL_HOOKS'] = array
 * (
 * 'hook_1' => array
 * (
 * array('Class', 'Method'),
 * array('Class', 'Method')
 * )
 * );
 *
 * Use function array_insert() to modify an existing hooks array.
 */
//$GLOBALS['TL_HOOKS']['getPageLayout'][] = array(\Fipps\BootstrapCustomizerBundle\Listener\HooksListener::class, 'onGetPageLayout');
//$GLOBALS['TL_HOOKS']['initializeSystem'][] = array(Fipps\BootstrapCustomizerBundle\Listener\HooksListener::class, 'onInitializeSystemCorrectColorPicker');
//$GLOBALS['TL_HOOKS']['initializeSystem'][] = array(Fipps\BootstrapCustomizerBundle\Listener\HooksListener::class, 'onInitializeSystemLSetBootstrapTypoCssPath');

/**
 * -------------------------------------------------------------------------
 * PAGE TYPES
 * -------------------------------------------------------------------------
 *
 * Page types and their corresponding front end controller class.
 *
 * $GLOBALS['TL_PTY'] = array
 * (
 * 'type_1' => 'PageType1',
 * 'type_2' => 'PageType2'
 * );
 *
 * Use function array_insert() to modify an existing page types array.
 */

/**
 * -------------------------------------------------------------------------
 * Models
 * -------------------------------------------------------------------------
 *
 * Register models with seperate namespaces
 *
 * $GLOBALS['TL_MODELS'] = array
 * (
 * 'table' => 'Class',
 * );
 * 
 * Ex.: $GLOBALS['TL_MODELS'][Class::getTable()] = Class::class; 
 * 
 * Use function array_insert() to modify an existing page types array.
 */
// Models
$GLOBALS['TL_MODELS']['tl_bs_theme'] = \Fipps\BootstrapCustomizerBundle\Model\BsThemeModel::class;
