<?php
/**
 *  Copyright Information
 *
 * @copyright: 2018 agentur fipps e.K.
 * @author   : Arne Borchert <arne.borchert@fipps.de>
 * @license  : LGPL 3.0+
 */

// Buttons
$GLOBALS['TL_LANG']['tl_bs_theme']['new']    = array(
    'New',
    'Add a new bootstrap theme',
);
$GLOBALS['TL_LANG']['tl_bs_theme']['edit']   = array(
    'Edit',
    'Edit bootstrap theme %s',
);
$GLOBALS['TL_LANG']['tl_bs_theme']['copy']   = array(
    'Copy',
    'Copy bootstrap theme %s',
);
$GLOBALS['TL_LANG']['tl_bs_theme']['delete'] = array(
    'Delete',
    'Delete bootstrap theme %s',
);
$GLOBALS['TL_LANG']['tl_bs_theme']['show']   = array(
    'Info',
    'Information about bootstrap theme %s',
);


// Legends
$GLOBALS['TL_LANG']['tl_bs_theme']['title_legend']       = 'Meta';
$GLOBALS['TL_LANG']['tl_bs_theme']['options_legend']     = 'Options';
$GLOBALS['TL_LANG']['tl_bs_theme']['colorsystem_legend'] = 'Color System';
$GLOBALS['TL_LANG']['tl_bs_theme']['defaults_legend']    = 'Defaults';
$GLOBALS['TL_LANG']['tl_bs_theme']['component_legend']   = 'Components';
$GLOBALS['TL_LANG']['tl_bs_theme']['margin_legend']      = 'Margin, Borders, etc.';
$GLOBALS['TL_LANG']['tl_bs_theme']['paragraph_legend']   = 'Typography Paragraph';
$GLOBALS['TL_LANG']['tl_bs_theme']['headings_legend']    = 'Typography Headings';
$GLOBALS['TL_LANG']['tl_bs_theme']['nav_legend']         = 'Navigations';
$GLOBALS['TL_LANG']['tl_bs_theme']['navbar_legend']      = 'Navigation Bars';
$GLOBALS['TL_LANG']['tl_bs_theme']['navvertical_legend'] = 'Navigation Vertical';
$GLOBALS['TL_LANG']['tl_bs_theme']['breadcrumbs_legend'] = 'Breadcrumbs';
$GLOBALS['TL_LANG']['tl_bs_theme']['form_legend']        = 'Forms';
$GLOBALS['TL_LANG']['tl_bs_theme']['formbutton_legend']  = 'Buttons (also part of forms)';
$GLOBALS['TL_LANG']['tl_bs_theme']['button_legend']      = 'Buttons (stand alone)';
$GLOBALS['TL_LANG']['tl_bs_theme']['pagination_legend']  = 'Pagination';
$GLOBALS['TL_LANG']['tl_bs_theme']['table_legend']       = 'Tables';
$GLOBALS['TL_LANG']['tl_bs_theme']['image_legend']       = 'Images & Thumbnails';
$GLOBALS['TL_LANG']['tl_bs_theme']['carousel_legend']    = 'Carousels / Sliders';
$GLOBALS['TL_LANG']['tl_bs_theme']['listgroup_legend']   = 'List Groups';
$GLOBALS['TL_LANG']['tl_bs_theme']['modal_legend']       = 'Modal Windows';
$GLOBALS['TL_LANG']['tl_bs_theme']['card_legend']        = 'Cards';
$GLOBALS['TL_LANG']['tl_bs_theme']['dropdown_legend']    = 'Dropdowns';
$GLOBALS['TL_LANG']['tl_bs_theme']['tooltip_legend']     = 'Tooltips';
$GLOBALS['TL_LANG']['tl_bs_theme']['popover_legend']     = 'Popovers';
$GLOBALS['TL_LANG']['tl_bs_theme']['badge_legend']       = 'Badges';
$GLOBALS['TL_LANG']['tl_bs_theme']['alert_legend']       = 'Alerts';
$GLOBALS['TL_LANG']['tl_bs_theme']['progress_legend']    = 'Progress Bars';
$GLOBALS['TL_LANG']['tl_bs_theme']['jumbotron_legend']   = 'Jumbotron';

// Subpalettes
$GLOBALS['TL_LANG']['tl_bs_theme']['usePopover']    = array('Use Popovers', '');
$GLOBALS['TL_LANG']['tl_bs_theme']['useTooltip']    = array('Use Tooltips', '');
$GLOBALS['TL_LANG']['tl_bs_theme']['useModal']      = array('Use Modals', '');
$GLOBALS['TL_LANG']['tl_bs_theme']['useProgress']   = array('Use Progress Bars', '');
$GLOBALS['TL_LANG']['tl_bs_theme']['useAlert']      = array('Use Alerts', '');
$GLOBALS['TL_LANG']['tl_bs_theme']['useCard']       = array('Use Cards', '');
$GLOBALS['TL_LANG']['tl_bs_theme']['useDropdown']   = array('Use Dropdowns', '');
$GLOBALS['TL_LANG']['tl_bs_theme']['useBadge']      = array('Use Badges', '');
$GLOBALS['TL_LANG']['tl_bs_theme']['useListgroup']  = array('Use List Groups', '');
$GLOBALS['TL_LANG']['tl_bs_theme']['useTable']      = array('Use Tables', '');
$GLOBALS['TL_LANG']['tl_bs_theme']['useCarousel']   = array('Use Carousels', '');
$GLOBALS['TL_LANG']['tl_bs_theme']['usePagination'] = array('Use Paginations', '');
$GLOBALS['TL_LANG']['tl_bs_theme']['useBreadcrumb'] = array('Use Breadcrumbs', '');
$GLOBALS['TL_LANG']['tl_bs_theme']['useJumbotron']  = array('Use Jumbotrons', '');

// Fields
$GLOBALS['TL_LANG']['tl_bs_theme']['title']  = array('Name', 'Name of bootstrap theme, must be unique');
$GLOBALS['TL_LANG']['tl_bs_theme']['author'] = array('Author', 'Author of bootstrap theme');
$GLOBALS['TL_LANG']['tl_bs_theme']['path']   = array('Saving path', 'The path to save the SCSS file');


$GLOBALS['TL_LANG']['tl_bs_theme']['tertiary'] = array('Tertiary', '$tertiary || not a bootstrap standard');

$GLOBALS['TL_LANG']['tl_bs_theme']['white']     = array('White', '<em>$white</em> || default: <strong>#fff</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['gray100']   = array('Gray 100', '<em>$gray-100</em> || default: <strong>#f8f9fa</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['gray200']   = array('Gray 200', '<em>$gray-200</em> || default: <strong>#e9ecef</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['gray300']   = array('Gray 300', '<em>$gray-300</em> || default: <strong>#dee2e6</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['gray400']   = array('Gray 400', '<em>$gray-400</em> || default: <strong>#ced4da</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['gray500']   = array('Gray 500', '<em>$gray-500</em> || default: <strong>#adb5bd</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['gray600']   = array('Gray 600', '<em>$gray-600</em> || default: <strong>#6c757d</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['gray700']   = array('Gray 700', '<em>$gray-700</em> || default: <strong>#495057</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['gray800']   = array('Gray 800', '<em>$gray-800</em> || default: <strong>#343a40</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['gray900']   = array('Gray 900', '<em>$gray-900</em> || default: <strong>#212529</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['black']     = array('Black', '<em>$black</em> || default: <strong>#000</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['primary']   = array('Primary', '<em>$primary</em> || inherit: <strong>blue</strong> value: <strong>#007bff</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['secondary'] = array('Secondary', '<em>$secondary</em> || inherit: <strong>gray-600</strong> value: <strong>#6c757d</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['success']   = array('Success', '<em>$success</em> || inherit: <strong>green</strong> value: <strong>#28a745</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['info']      = array('Info', '<em>$info</em> || inherit: <strong>cyan</strong> value: <strong>#17a2b8</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['warning']   = array('Warning', '<em>$warning</em> || inherit: <strong>yellow</strong> value: <strong>#ffc107</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['danger']    = array('Danger', '<em>$danger</em> || inherit: <strong>red</strong> value: <strong>#dc3545</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['light']     = array('Light', '<em>$light</em> || inherit: <strong>gray-100</strong> value: <strong>#f8f9fa</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['dark']      = array('Dark', '<em>$dark</em> || inherit: <strong>gray-800</strong> value: <strong>#343a40</strong>');

$GLOBALS['TL_LANG']['tl_bs_theme']['yiqTextDark']                   = array('Yiq Text Dark', '<em>$yiq-text-dark</em> || inherit: <strong>$gray-900</strong> value: <strong>#212529</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['yiqTextLight']                  = array('Yiq Text Light', '<em>$yiq-text-light</em> || inherit: <strong>$white</strong> value: <strong>#fff</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['gridColumns']                   = array('Grid Columns', '<em>$grid-columns</em> || default: <strong>12</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['gridGutterWidth']               = array('Grid Gutter Width', '<em>$grid-gutter-width</em> || default: <strong>30px</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['enableCaret']                   = array('Enable Caret', '<em>$enable-caret</em> || default: <strong>true</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['enableRounded']                 = array('Enable Rounded', '<em>$enable-rounded</em> || default: <strong>true</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['enableShadows']                 = array('Enable Shadows', '<em>$enable-shadows</em> || default: <strong>false</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['enableGradients']               = array('Enable Gradients', '<em>$enable-gradients</em> || default: <strong>false</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['spacer']                        = array('Spacer', '<em>$spacer</em> || default: <strong>1rem</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['bodyBg']                        = array('Body Background Color', '<em>$body-bg</em> || inherit: <strong>$white</strong> value: <strong>#fff</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['bodyColor']                     = array('Body Color', '<em>$body-color</em> || inherit: <strong>$gray-900</strong> value: <strong>#212529</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['linkColor']                     = array('Link Color', '<em>$link-color</em> || default: <strong>#007bff</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['linkDecoration']                = array('Link Decoration', '<em>$link-decoration</em> || default: <strong>none</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['linkHoverColor']                = array('Link Hover Color', '<em>$link-hover-color</em> || default: <strong>darken($link-color, 15%)</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['linkHoverDecoration']           = array('Link Hover Decoration', '<em>$link-hover-decoration</em> || default: <strong>underline</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['lineHeightLg']                  = array('Line Height Large', '<em>$line-height-lg</em> || default: <strong>1.5</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['lineHeightSm']                  = array('Line Height Small', '<em>$line-height-sm</em> || default: <strong>1.5</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['borderWidth']                   = array('Border Width', '<em>$border-width</em> || default: <strong>1px</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['borderColor']                   = array('Border Color', '<em>$border-color</em> || inherit: <strong>$gray-300</strong> value: <strong>#dee2e6</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['borderRadius']                  = array('Border Radius', '<em>$border-radius</em> || default: <strong>.25rem</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['borderRadiusSm']                = array('Border Radius Small', '<em>$border-radius-sm</em> || default: <strong>.2rem</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['borderRadiusLg']                = array('Border Radius Large', '<em>$border-radius-lg</em> || default: <strong>.3rem</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['boxShadow']                     = array('Box Shadow', '<em>$box-shadow</em> || default: <strong>0 .5rem 1rem rgba($black, .15)</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['boxShadowSm']                   = array('Box Shadow Small', '<em>$box-shadow-sm</em> || default: <strong>0 .125rem .25rem rgba($black, .075)</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['boxShadowLg']                   = array('Box Shadow Large', '<em>$box-shadow-lg</em> || default: <strong>0 1rem 3rem rgba($black, .175)</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['componentActiveColor']          = array('Component Active Color', '<em>$component-active-color</em> || inherit: <strong>$white</strong> value: <strong>#fff</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['componentActiveBg']             = array('Component Active Background Color', '<em>$component-active-bg</em> || default: <strong>#007bff</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['paragraphMarginBottom']         = array('Paragraph Margin Bottom', '<em>$paragraph-margin-bottom</em> || default: <strong>1rem</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['fontFamilySansSerif']           = array('Font Family Sans Serif', '<em>$font-family-sans-serif</em> || default: <strong>-apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['fontFamilyMonospace']           = array('Font Family Monospace', '<em>$font-family-monospace</em> || default: <strong>SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['fontFamilyBase']                = array('Font Family Base', '<em>$font-family-base</em> || inherit: <strong>$font-family-sans-serif</strong> value: <strong>-apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['fontSizeBase']                  = array('Font Size Base', '<em>$font-size-base</em> || default: <strong>1rem</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['fontSizeLg']                    = array('Font Size Large', '<em>$font-size-lg</em> || default: <strong>$font-size-base * 1.2</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['fontSizeSm']                    = array('Font Size Small', '<em>$font-size-sm</em> || default: <strong>$font-size-base * .87</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['fontWeightNormal']              = array('Font Weight Normal', '<em>$font-weight-normal</em> || default: <strong>regular (400)</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['fontWeightLight']               = array('Font Weight Light', '<em>$font-weight-light</em> || default: <strong>light (300)</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['fontWeightBold']                = array('Font Weight Bold', '<em>$font-weight-bold</em> || default: <strong>bold (700)</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['fontWeightBase']                = array('Font Weight Base', '<em>$font-weight-base</em> || inherit: <strong>$font-weight-normal</strong> value: <strong>regular (400)</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['lineHeightBase']                = array('Line Height Base', '<em>$line-height-base</em> || default: <strong>1.5</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['h1FontSize']                    = array('H1 Font Size', '<em>$h1-font-size</em> || inherit: <strong>$font-size-base * 2.5</strong> value: <strong>2.5rem</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['h2FontSize']                    = array('H2 Font Size', '<em>$h2-font-size</em> || inherit: <strong>$font-size-base * 2</strong> value: <strong>2rem</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['h3FontSize']                    = array('H3 Font Size', '<em>$h3-font-size</em> || inherit: <strong>$font-size-base * 1.75</strong> value: <strong>1.75 rem</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['h4FontSize']                    = array('H4 Font Size', '<em>$h4-font-size</em> || inherit: <strong>$font-size-base * 1.5</strong> value: <strong>1.5rem</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['h5FontSize']                    = array('H5 Font Size', '<em>$h5-font-size</em> || inherit: <strong>$font-size-base * 1.25</strong> value: <strong>1.25rem</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['h6FontSize']                    = array('H6 Font Size', '<em>$h6-font-size</em> || inherit: <strong>$font-size-base</strong> value: <strong>1rem</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['headingsMarginBottom']          = array('Headings Margin Bottom', '<em>$headings-margin-bottom</em> || default: <strong>0.5rem</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['headingsFontFamily']            = array('Headings Font Family', '<em>$headings-font-family</em> || default: <strong>inherit</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['headingsFontWeight']            = array('Headings Font Weight', '<em>$headings-font-weight</em> || default: <strong>medium (500)</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['headingsLineHeight']            = array('Headings Line Height', '<em>$headings-line-height</em> || default: <strong>1.2</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['headingsColor']                 = array('Headings Color', '<em>$headings-color</em> || default: <strong>inherit</strong> value:<strong>#212529</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['leadFontSize']                  = array('Lead Font Size', '<em>$lead-font-size</em> || default: <strong>1.25rem</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['leadFontWeight']                = array('Lead Font Weight', '<em>$lead-font-weight</em> || default: <strong>light (300)</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['smallFontSize']                 = array('Small Font Size', '<em>$small-font-size</em> || default: <strong>0.8</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['textMuted']                     = array('Text Muted Color', '<em>$text-muted</em> || inherit: <strong>$gray-600</strong> value: <strong>#6c757d</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['hrBorderColor']                 = array('Hr Border Color', '<em>$hr-border-color</em> || default: <strong>rgba($black, .1)</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['hrBorderWidth']                 = array('Hr Border Width', '<em>$hr-border-width</em> || inherit: <strong>$border-width</strong> value: <strong>1px</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['hrMarginY']                     = array('Hr Margin Y', '<em>$hr-margin-y</em> || inherit: <strong>$spacer</strong> value: <strong>1rem</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['listInlinePadding']             = array('List Inline Padding', '<em>$list-inline-padding</em> || default: <strong>.5rem</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['tableCellPadding']              = array('Table Cell Padding', '<em>$table-cell-padding</em> || default: <strong>.75rem</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['tableCellPaddingSm']            = array('Table Cell Padding Small', '<em>$table-cell-padding-sm</em> || default: <strong>.3rem</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['tableBg']                       = array('Table Background Color', '<em>$table-bg</em> || default: <strong>transparent</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['tableAccentBg']                 = array('Table Accent Background Color', '<em>$table-accent-bg</em> || default: <strong>rgba($black, .05)</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['tableHoverBg']                  = array('Table Hover Background Color', '<em>$table-hover-bg</em> || default: <strong>rgba($black, .075)</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['tableActiveBg']                 = array('Table Active Background Color', '<em>$table-active-bg</em> || inherit: <strong>$table-hover-bg</strong> value: <strong>rgba($black, .075)</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['tableBorderWidth']              = array('Table Border Width', '<em>$table-border-width</em> || inherit: <strong>$border-width</strong> value: <strong>1px</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['tableBorderColor']              = array('Table Border Color', '<em>$table-border-color</em> || inherit: <strong>$gray-300</strong> value: <strong>#dee2e6</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['tableHeadBg']                   = array('Table Head Background Color', '<em>$table-head-bg</em> || inherit: <strong>$gray-200</strong> value: <strong>#e9ecef</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['tableHeadColor']                = array('Table Head Color', '<em>$table-head-color</em> || inherit: <strong>$gray-700</strong> value: <strong>#495057</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['tableDarkBg']                   = array('Table Dark Background Color', '<em>$table-dark-bg</em> || inherit: <strong>$gray-900</strong> value: <strong>#212529</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['tableDarkAccentBg']             = array('Table Dark Accent Background Color', '<em>$table-dark-accent-bg</em> || default: <strong>rgba($white, .05)</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['tableDarkHoverBg']              = array('Table Dark Hover Background Color', '<em>$table-dark-hover-bg</em> || default: <strong>rgba($white, .075)</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['tableDarkBorderColor']          = array('Table Dark Border Color', '<em>$table-dark-border-color</em> || default: <strong>lighten($gray-900, 7.5%)</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['tableDarkColor']                = array('Table Dark Color', '<em>$table-dark-color</em> || inherit: <strong>$body-bg</strong> value: <strong>#fff</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['tableCaptionColor']             = array('Table Caption Color', '<em>$table-caption-color</em> || inherit: <strong>$text-muted</strong> value: <strong>#6c757d</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['inputBtnPaddingY']              = array('Input Button Padding Y', '<em>$input-btn-padding-y</em> || default: <strong>.375rem</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['inputBtnPaddingX']              = array('Input Button Padding X', '<em>$input-btn-padding-x</em> || default: <strong>.75rem</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['inputBtnLineHeight']            = array('Input Button Line Height', '<em>$input-btn-line-height</em> || inherit: <strong>$line-height-base</strong> value: <strong>1.5</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['inputBtnFocusWidth']            = array('Input Button Focus Width', '<em>$input-btn-focus-width</em> || default: <strong>.2rem</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['inputBtnFocusColor']            = array('Input Button Focus Color', '<em>$input-btn-focus-color</em> || default: <strong>rgba($component-active-bg, .25)</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['inputBtnFocusBoxShadow']        = array('Input Button Focus Box Shadow', '<em>$input-btn-focus-box-shadow</em> || default: <strong>none</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['inputBtnPaddingYSm']            = array('Input Button Padding Y Small', '<em>$input-btn-padding-y-sm</em> || default: <strong>.25rem</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['inputBtnPaddingXSm']            = array('Input Button Padding X Small', '<em>$input-btn-padding-x-sm</em> || default: <strong>.5rem</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['inputBtnLineHeightSm']          = array('Input Button Line Height Small', '<em>$input-btn-line-height-sm</em> || inherit: <strong>$line-height-sm</strong> value: <strong>1.5</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['inputBtnPaddingYLg']            = array('Input Button Padding Y Large', '<em>$input-btn-padding-y-lg</em> || default: <strong>.5rem</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['inputBtnPaddingXLg']            = array('Input Button Padding X Large', '<em>$input-btn-padding-x-lg</em> || default: <strong>1rem</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['inputBtnLineHeightLg']          = array('Input Button Line Height Large', '<em>$input-btn-line-height-lg</em> || inherit: <strong>$line-height-lg</strong> value: <strong>1.5</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['inputBtnBorderWidth']           = array('Input Button Border Width', '<em>$input-btn-border-width</em> || inherit: <strong>$border-width</strong> value: <strong>1px</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['btnFontWeight']                 = array('Button Font Weight', '<em>$btn-font-weight</em> || inherit: <strong>$font-weight-normal</strong> value: <strong>regular (400)</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['btnBoxShadow']                  = array('Button Box Shadow', '<em>$btn-box-shadow</em> || default: <strong>none</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['btnFocusWidth']                 = array('Button Focus Width', '<em>$btn-focus-width</em> || inherit: <strong>$input-btn-focus-width</strong> value: <strong>.2rem</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['btnActiveBoxShadow']            = array('Button Active Box Shadow', '<em>$btn-active-box-shadow</em> || default: <strong>none</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['btnDisabledOpacity']            = array('Button Disabled Opacity', '<em>$btn-disabled-opacity</em> || default: <strong>.65</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['btnLinkDisabledColor']          = array('Button Link Disabled Color', '<em>$btn-link-disabled-color</em> || inherit: <strong>$gray-600</strong> value: <strong>#6c757d</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['btnBlockSpacingY']              = array('Button Block Spacing Y', '<em>$btn-block-spacing-y</em> || default: <strong>.5rem</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['btnBorderRadius']               = array('Button Border Radius', '<em>$btn-border-radius</em> || inherit: <strong>$border-radius</strong> value: <strong>.25rem</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['btnBorderRadiusLg']             = array('Button Border Radius Large', '<em>$btn-border-radius-lg</em> || inherit: <strong>$border-radius-lg</strong> value: <strong>.3rem</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['btnBorderRadiusSm']             = array('Button Border Radius Small', '<em>$btn-border-radius-sm</em> || inherit: <strong>$border-radius-sm</strong> value: <strong>.2rem</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['inputBg']                       = array('Input Background Color', '<em>$input-bg</em> || inherit: <strong>$white</strong> value: <strong>#fff</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['inputDisabledBg']               = array('Input Disabled Background Color', '<em>$input-disabled-bg</em> || inherit: <strong>$gray-200</strong> value: <strong>#e9ecef</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['inputColor']                    = array('Input Color', '<em>$input-color</em> || inherit: <strong>$gray-700</strong> value: <strong>#495057</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['inputBorderColor']              = array('Input Border Color', '<em>$input-border-color</em> || inherit: <strong>$gray-400</strong> value: <strong>#ced4da</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['inputBoxShadow']                = array('Input Box Shadow', '<em>$input-box-shadow</em> || default: <strong>inset 0 1px 1px rgba($black, .075)></strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['inputFocusBg']                  = array('Input Focus Background Color', '<em>$input-focus-bg</em> || inherit: <strong>$input-bg</strong> value: <strong>#fff</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['inputFocusBorderColor']         = array('Input Focus Border Color', '<em>$input-focus-border-color</em> || default: <strong>lighten($component-active-bg, 25%)</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['inputFocusColor']               = array('Input Focus Color', '<em>$input-focus-color</em> || inherit: <strong>$input-color</strong> value: <strong>#495057</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['inputPlaceholderColor']         = array('Input Placeholder Color', '<em>$input-placeholder-color</em> || inherit: <strong>$gray-600</strong> value: <strong>#6c757d</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['inputPlaintextColor']           = array('Input Plaintext Color', '<em>$input-plaintext-color</em> || inherit: <strong>$body-color</strong> value: <strong>#dee2e6</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['dropdownMinWidth']              = array('Dropdown Min Width', '<em>$dropdown-min-width</em> || default: <strong>10rem</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['dropdownPaddingY']              = array('Dropdown Padding Y', '<em>$dropdown-padding-y</em> || default: <strong>.5rem</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['dropdownSpacer']                = array('Dropdown Spacer', '<em>$dropdown-spacer</em> || default: <strong>.125rem</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['dropdownBg']                    = array('Dropdown Background Color', '<em>$dropdown-bg</em> || inherit: <strong>$white</strong> value: <strong>#fff</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['dropdownBorderColor']           = array('Dropdown Border Color', '<em>$dropdown-border-color</em> || default: <strong>rgba($black, .15)</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['dropdownBorderRadius']          = array('Dropdown Border Radius', '<em>$dropdown-border-radius</em> || inherit: <strong>$border-radius</strong> value: <strong>.25rem</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['dropdownBorderWidth']           = array('Dropdown Border Width', '<em>$dropdown-border-width</em> || inherit: <strong>$border-width</strong> value: <strong>1px</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['dropdownDividerBg']             = array('Dropdown Divider Background Color', '<em>$dropdown-divider-bg</em> || inherit: <strong>$gray-200</strong> value: <strong>#e9ecef</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['dropdownBoxShadow']             = array('Dropdown Box Shadow', '<em>$dropdown-box-shadow</em> || default: <strong>0 .5rem 1rem rgba($black, .175)</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['dropdownLinkColor']             = array('Dropdown Link Color', '<em>$dropdown-link-color</em> || inherit: <strong>$gray-900</strong> value: <strong>#212529</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['dropdownLinkHoverColor']        = array('Dropdown Link Hover Color', '<em>$dropdown-link-hover-color</em> || default: <strong>darken($gray-900, 5%)</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['dropdownLinkHoverBg']           = array('Dropdown Link Hover Background Color', '<em>$dropdown-link-hover-bg</em> || inherit: <strong>$gray-100</strong> value: <strong>#f8f9fa</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['dropdownLinkActiveColor']       = array('Dropdown Link Active Color', '<em>$dropdown-link-active-color</em> || inherit: <strong>$component-active-color</strong> value: <strong>#fff</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['dropdownLinkActiveBg']          = array('Dropdown Link Active Background Color', '<em>$dropdown-link-active-bg</em> || inherit: <strong>$component-active-bg</strong> value: <strong>$primary</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['dropdownLinkDisabledColor']     = array('Dropdown Link Disabled Color', '<em>$dropdown-link-disabled-color</em> || inherit: <strong>$gray-600</strong> value: <strong>#6c757d</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['dropdownItemPaddingY']          = array('Dropdown Item Padding Y', '<em>$dropdown-item-padding-y</em> || default: <strong>.25rem</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['dropdownItemPaddingX']          = array('Dropdown Item Padding X', '<em>$dropdown-item-padding-x</em> || default: <strong>1.5rem</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['dropdownHeaderColor']           = array('Dropdown Header Color', '<em>$dropdown-header-color</em> || inherit: <strong>$gray-600</strong> value: <strong>#6c757d</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['navLinkPaddingY']               = array('Nav Link Padding Y', '<em>$nav-link-padding-y</em> || default: <strong>.5rem</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['navLinkPaddingX']               = array('Nav Link Padding X', '<em>$nav-link-padding-x</em> || default: <strong>1rem</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['navLinkDisabledColor']          = array('Nav Link Disabled Color', '<em>$nav-link-disabled-color</em> || inherit: <strong>$gray-600</strong> value: <strong>#6c757d</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['navDividerColor']               = array('Nav Divider Color', '<em>$nav-divider-color</em> || inherit: <strong>$gray-200</strong> value: <strong>#e9ecef</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['navDividerMarginY']             = array('Nav Divider Margin Y', '<em>$nav-divider-margin-y</em> || default: <strong>0.5rem</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['navLinkHeight']                 = array('Nav Link Height', '<em>$nav-link-height</em> || inherit: <strong>$font-size-base * $line-height-base + $nav-link-padding-y * 2</strong> value: <strong>2.5rem</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['navbarNavLinkPaddingX']         = array('Navbar Nav Link Padding X', '<em>$navbar-nav-link-padding-x</em> || default: <strong>0.5rem</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['navbarBrandFontSize']           = array('Navbar Brand Font Size', '<em>$navbar-brand-font-size</em> || inherit: <strong>$font-size-lg</strong> value: <strong>1.25rem</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['navLinkHeight']                 = array('Nav Link Height', '<em>$navbar-brand-font-size</em> || inherit: <strong>$font-size-base * $line-height-base + $nav-link-padding-y * 2</strong> value: <strong>2.25rem</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['navbarBrandHeight']             = array('Navbar Brand Height', '<em>$navbar-brand-height</em> || inherit: <strong>$navbar-brand-font-size * $line-height-base</strong> value: <strong>1.875rem</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['navbarBrandPaddingY']           = array('Navbar Brand Padding Y', '<em>$navbar-brand-padding-y</em> || inherit: <strong>($nav-link-height - $navbar-brand-height) / 2</strong> value: <strong>1.3125rem</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['navbarTogglerPaddingY']         = array('Navbar Toggler Padding Y', '<em>$navbar-toggler-padding-y</em> || default: <strong>.25rem</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['navbarTogglerPaddingX']         = array('Navbar Toggler Padding X', '<em>$navbar-toggler-padding-x</em> || default: <strong>.75rem</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['navbarTogglerFontSize']         = array('Navbar Toggler Font Size', '<em>$navbar-toggler-font-size</em> || inherit: <strong>$font-size-lg</strong> value: <strong>1.25rem</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['navbarTogglerBorderRadius']     = array('Navbar Toggler Border Radius', '<em>$navbar-toggler-border-radius</em> || inherit: <strong>$btn-border-radius</strong> value: <strong>.25rem</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['navbarPaddingY']                = array('Navbar Padding Y', '<em>$navbar-padding-y</em> || default: <strong>$spacer / 2</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['navbarPaddingX']                = array('Navbar Padding X', '<em>$navbar-padding-x</em> || inherit: <strong>$spacer</strong> value: <strong>1rem</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['paginationPaddingY']            = array('Pagination Padding Y', '<em>$pagination-padding-y</em> || default: <strong>.5rem</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['paginationPaddingX']            = array('Pagination Padding X', '<em>$pagination-padding-x</em> || default: <strong>.75rem</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['paginationPaddingYSm']          = array('Pagination Padding Y Small', '<em>$pagination-padding-y-sm</em> || default: <strong>.25rem</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['paginationPaddingXSm']          = array('Pagination Padding X Small', '<em>$pagination-padding-x-sm</em> || default: <strong>.5rem</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['paginationPaddingYLg']          = array('Pagination Padding Y Large', '<em>$pagination-padding-y-lg</em> || default: <strong>.75rem</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['paginationPaddingXLg']          = array('Pagination Padding X Large', '<em>$pagination-padding-x-lg</em> || default: <strong>1.5rem</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['paginationLineHeight']          = array('Pagination Line Height', '<em>$pagination-line-height</em> || default: <strong>1.25</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['paginationColor']               = array('Pagination Color', '<em>$pagination-color</em> || inherit: <strong>$link-color</strong> value: <strong>$primary</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['paginationBg']                  = array('Pagination Background Color', '<em>$pagination-bg</em> || inherit: <strong>$white</strong> value: <strong>#fff</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['paginationBorderWidth']         = array('Pagination Border Width', '<em>$pagination-border-width</em> || inherit: <strong>$border-width</strong> value: <strong>1px</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['paginationBorderColor']         = array('Pagination Border Color', '<em>$pagination-border-color</em> || inherit: <strong>$gray-300</strong> value: <strong>#dee2e6</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['paginationFocusBoxShadow']      = array('Pagination Focus Box Shadow', '<em>$pagination-focus-box-shadow</em> || inherit: <strong>$input-btn-focus-box-shadow</strong> value: <strong>none</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['paginationHoverColor']          = array('Pagination Hover Color', '<em>$pagination-hover-color</em> || inherit: <strong>$link-hover-color</strong> value: <strong>darken($link-color, 15%)</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['paginationHoverBg']             = array('Pagination Hover Background Color', '<em>$pagination-hover-bg</em> || inherit: <strong>$gray-200</strong> value: <strong>#e9ecef</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['paginationHoverBorderColor']    = array('Pagination Hover Border Color', '<em>$pagination-hover-border-color</em> || inherit: <strong>$gray-300</strong> value: <strong>#dee2e6</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['paginationActiveColor']         = array('Pagination Active Color', '<em>$pagination-active-color</em> || inherit: <strong>$component-active-color</strong> value: <strong>#fff</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['paginationActiveBg']            = array('Pagination Active Background Color', '<em>$pagination-active-bg</em> || inherit: <strong>$component-active-bg</strong> value: <strong>$primary</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['paginationActiveBorderColor']   = array('Pagination Active Border Color', '<em>$pagination-active-border-color</em> || inherit: <strong>$pagination-active-bg</strong> value: <strong>$primary</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['paginationDisabledColor']       = array('Pagination Disabled Color', '<em>$pagination-disabled-color</em> || inherit: <strong>$gray-600</strong> value: <strong>#6c757d</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['paginationDisabledBg']          = array('Pagination Disabled Background Color', '<em>$pagination-disabled-bg</em> || inherit: <strong>$white</strong> value: <strong>#fff</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['paginationDisabledBorderColor'] = array('Pagination Disabled Border Color', '<em>$pagination-disabled-border-color</em> || inherit: <strong>$gray-300</strong> value: <strong>#dee2e6</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['jumbotronPadding']              = array('Jumbotron Padding', '<em>$jumbotron-padding</em> || default: <strong>2rem</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['jumbotronBg']                   = array('Jumbotron Background Color', '<em>$jumbotron-bg</em> || default: <strong>#e9ecef</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['paginationDisabledBorderColor'] = array('Pagination Disabled Border Color', '<em>$pagination-disabled-border-color</em> || inherit: <strong>$gray-300</strong> value: <strong>#dee2e6</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['cardSpacerY']                   = array('Card Spacer Y', '<em>$card-spacer-y</em> || default: <strong>.75rem</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['cardSpacerX']                   = array('Card Spacer X', '<em>$card-spacer-x</em> || default: <strong>1.25rem</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['cardBorderWidth']               = array('Card Border Width', '<em>$card-border-width</em> || inherit: <strong>$border-width</strong> value: <strong>1px</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['cardBorderRadius']              = array('Card Border Radius', '<em>$card-border-radius</em> || inherit: <strong>$border-radius</strong> value: <strong>.25rem</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['cardBorderColor']               = array('Card Border Color', '<em>$card-border-color</em> || default: <strong>rgba($black, .125)</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['cardCapBg']                     = array('Card Cap Background Color', '<em>$card-cap-bg</em> || default: <strong>rgba($black, .03)</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['cardBg']                        = array('Card Background Color', '<em>$card-bg</em> || inherit: <strong>$white</strong> value: <strong>rgba($black, .03)</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['cardImgOverlayPadding']         = array('Card Img Overlay Padding', '<em>$card-img-overlay-padding</em> || default: <strong>1.25rem</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['cardGroupMargin']               = array('Card Group Margin', '<em>$card-group-margin</em> || inherit: <strong>$grid-gutter-width / 2</strong> value: <strong>15px</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['cardDeckMargin']                = array('Card Deck Margin', '<em>$card-deck-margin</em> || inherit: <strong>$card-group-margin</strong> value: <strong>($grid-gutter-width / 2)</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['cardColumnsCount']              = array('Card Columns Count', '<em>$card-columns-count</em> || default: <strong>3</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['cardColumnsGap']                = array('Card Columns Gap', '<em>$card-columns-gap</em> || default: <strong>1.25rem</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['cardColumnsMargin']             = array('Card Columns Margin', '<em>$card-columns-margin</em> || inherit: <strong>$card-spacer-y</strong> value: <strong>.75rem</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['tooltipFontSize']               = array('Tooltip Font Size', '<em>$tooltip-font-size</em> || inherit: <strong>$font-size-sm</strong> value: <strong>.875rem</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['tooltipMaxWidth']               = array('Tooltip Max Width', '<em>$tooltip-max-width</em> || default: <strong>200px</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['tooltipColor']                  = array('Tooltip Color', '<em>$tooltip-color</em> || inherit: <strong>$white</strong> value: <strong>#fff</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['tooltipBg']                     = array('Tooltip Background Color', '<em>$tooltip-bg</em> || inherit: <strong>$black</strong> value: <strong>#000</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['tooltipBorderRadius']           = array('Tooltip Border Radius', '<em>$tooltip-border-radius</em> || inherit: <strong>$border-radius</strong> value: <strong>.25rem</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['tooltipOpacity']                = array('Tooltip Opacity', '<em>$tooltip-opacity</em> || default: <strong>.9</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['tooltipPaddingY']               = array('Tooltip Padding Y', '<em>$tooltip-padding-y</em> || default: <strong>.25rem</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['tooltipPaddingX']               = array('Tooltip Padding X', '<em>$tooltip-padding-x</em> || default: <strong>.5rem</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['tooltipMargin']                 = array('Tooltip Margin', '<em>$tooltip-margin</em> || default: <strong>0</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['tooltipArrowWidth']             = array('Tooltip Arrow Width', '<em>$tooltip-arrow-width</em> || default: <strong>.8rem</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['tooltipArrowHeight']            = array('Tooltip Arrow Height', '<em>$tooltip-arrow-height</em> || default: <strong>.4rem</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['tooltipArrowColor']             = array('Tooltip Arrow Color', '<em>$tooltip-arrow-color</em> || inherit: <strong>$tooltip-bg</strong> value: <strong>#000</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['popoverFontSize']               = array('Popover Font Size', '<em>$popover-font-size</em> || inherit: <strong>$font-size-sm</strong> value: <strong>.875rem</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['popoverBg']                     = array('Popover Background Color', '<em>$popover-bg</em> || inherit: <strong>$white</strong> value: <strong>#fff</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['popoverMaxWidth']               = array('Popover Max Width', '<em>$popover-max-width</em> || default: <strong>276px</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['popoverBorderWidth']            = array('Popover Border Width', '<em>$popover-border-width</em> || inherit: <strong>$border-width</strong> value: <strong>1px</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['popoverBorderColor']            = array('Popover Border Color', '<em>$popover-border-color</em> || default: <strong>rgba($black, .2)</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['popoverBorderRadius']           = array('Popover Border Radius', '<em>$popover-border-radius</em> || inherit: <strong>$border-radius-lg</strong> value: <strong>.3rem</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['popoverBoxShadow']              = array('Popover Box Shadow', '<em>$popover-box-shadow</em> || default: <strong>0 .25rem .5rem rgba($black, .2)</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['popoverHeaderBg']               = array('Popover Header Background Color', '<em>$popover-header-bg</em> || default: <strong>darken($popover-bg, 3%)</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['popoverHeaderColor']            = array('Popover Header Color', '<em>$popover-header-color</em> || inherit: <strong>$headings-color</strong> value: <strong>#212529</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['popoverHeaderPaddingY']         = array('Popover Header Padding Y', '<em>$popover-header-padding-y</em> || default: <strong>.5rem</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['popoverHeaderPaddingX']         = array('Popover Header Padding X', '<em>$popover-header-padding-x</em> || default: <strong>.75rem</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['popoverBodyColor']              = array('Popover Body Color', '<em>$popover-body-color</em> || inherit: <strong>$body-color</strong> value: <strong>#212529</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['popoverBodyPaddingY']           = array('Popover Body Padding Y', '<em>$popover-body-padding-y</em> || inherit: <strong>$popover-header-padding-y</strong> value: <strong>.5rem</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['popoverBodyPaddingX']           = array('Popover Body Padding X', '<em>$popover-body-padding-x</em> || inherit: <strong>$popover-header-padding-x</strong> value: <strong>.75rem</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['popoverArrowWidth']             = array('Popover Arrow Width', '<em>$popover-arrow-width</em> || default: <strong>1rem</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['popoverArrowHeight']            = array('Popover Arrow Height', '<em>$popover-arrow-height</em> || default: <strong>.5rem</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['popoverArrowColor']             = array('Popover Arrow Color', '<em>$popover-arrow-color</em> || inherit: <strong>$popover-bg</strong> value: <strong>#fff</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['popoverArrowOuterColor']        = array('Popover Arrow Outer Color', '<em>$popover-arrow-outer-color</em> || default: <strong>fade-in($popover-border-color, .05)</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['badgeFontSize']                 = array('Badge Font Size', '<em>$badge-font-size</em> || default: <strong>75%</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['badgeFontWeight']               = array('Badge Font Weight', '<em>$badge-font-weight</em> || inherit: <strong>$font-weight-bold</strong> value: <strong>bold (700)</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['badgePaddingY']                 = array('Badge Padding Y', '<em>$badge-padding-y</em> || default: <strong>.25em</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['badgePaddingX']                 = array('Badge Padding X', '<em>$badge-padding-x</em> || default: <strong>.4em</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['badgeBorderRadius']             = array('Badge Border Radius', '<em>$badge-border-radius</em> || inherit: <strong>$border-radius</strong> value: <strong>.25rem</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['badgePillPaddingX']             = array('Badge Pill Padding X', '<em>$badge-pill-padding-x</em> || default: <strong>.6em</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['badgePillBorderRadius']         = array('Badge Pill Border Radius', '<em>$badge-pill-border-radius</em> || default: <strong>10rem</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['modalInnerPadding']             = array('Modal Inner Padding', '<em>$modal-inner-padding</em> || default: <strong>1rem</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['modalDialogMargin']             = array('Modal Dialog Margin', '<em>$modal-dialog-margin</em> || default: <strong>.5rem</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['modalDialogMarginYSmUp']        = array('Modal Dialog Margin Y Small Up', '<em>$modal-dialog-margin-y-sm-up</em> || default: <strong>1.75rem</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['modalTitleLineHeight']          = array('Modal Title Line Height', '<em>$modal-title-line-height</em> || inherit: <strong>$line-height-base</strong> value: <strong>1.5</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['modalContentBg']                = array('Modal Content Background Color', '<em>$modal-content-bg</em> || inherit: <strong>$white</strong> value: <strong>#fff</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['modalContentBorderColor']       = array('Modal Content Border Color', '<em>$modal-content-border-color</em> || default: <strong>rgba($black, .2)</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['modalContentBorderWidth']       = array('Modal Content Border Width', '<em>$modal-content-border-width</em> || inherit: <strong>$border-width</strong> value: <strong>1px</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['modalContentBorderRadius']      = array('Modal Content Border Radius', '<em>$modal-content-border-radius</em> || inherit: <strong>$border-radius-lg</strong> value: <strong>.3rem</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['modalContentBoxShadowXs']       = array('Modal Content Box Shadow Xs', '<em>$modal-content-box-shadow-xs</em> || default: <strong>0 .25rem .5rem rgba($black, .5)</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['modalContentBoxShadowSmUp']     = array('Modal Content Box Shadow Small Up', '<em>$modal-content-box-shadow-sm-up</em> || default: <strong>0 .5rem 1rem rgba($black, .5)</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['modalBackdropBg']               = array('Modal Backdrop Background Color', '<em>$modal-backdrop-bg</em> || inherit: <strong>$black</strong> value: <strong>#000</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['modalBackdropOpacity']          = array('Modal Backdrop Opacity', '<em>$modal-backdrop-opacity</em> || default: <strong>0.5</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['modalHeaderBorderColor']        = array('Modal Header Border Color', '<em>$modal-header-border-color</em> || inherit: <strong>$gray-200</strong> value: <strong>#e9ecef</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['modalFooterBorderColor']        = array('Modal Footer Border Color', '<em>$modal-footer-border-color</em> || inherit: <strong>$modal-header-border-color</strong> value: <strong>#e9ecef</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['modalHeaderBorderWidth']        = array('Modal Header Border Width', '<em>$modal-header-border-width</em> || inherit: <strong>$modal-content-border-width</strong> value: <strong>1px</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['modalFooterBorderWidth']        = array('Modal Footer Border Width', '<em>$modal-footer-border-width</em> || inherit: <strong>$modal-header-border-width</strong> value: <strong>1px</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['modalHeaderPadding']            = array('Modal Header Padding', '<em>$modal-header-padding</em> || default: <strong>1rem</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['modalLg']                       = array('Modal Large Width', '<em>$modal-lg</em> || default: <strong>800px</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['modalMd']                       = array('Modal Medium Width', '<em>$modal-md</em> || default: <strong>500px</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['modalSm']                       = array('Modal Small Width', '<em>$modal-sm</em> || default: <strong>300px</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['alertPaddingY']                 = array('Alert Padding Y', '<em>$alert-padding-y</em> || default: <strong>.75rem</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['alertPaddingX']                 = array('Alert Padding X', '<em>$alert-padding-x</em> || default: <strong>1.25rem</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['alertMarginBottom']             = array('Alert Margin Bottom', '<em>$alert-margin-bottom</em> || default: <strong>1rem</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['alertBorderRadius']             = array('Alert Border Radius', '<em>$alert-border-radius</em> || inherit: <strong>$border-radius</strong> value: <strong>.25rem</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['alertLinkFontWeight']           = array('Alert Link Font Weight', '<em>$alert-link-font-weight</em> || inherit: <strong>$font-weight-bold</strong> value: <strong>bold (700)</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['alertBorderWidth']              = array('Alert Border Width', '<em>$alert-border-width</em> || inherit: <strong>$border-width</strong> value: <strong>1px</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['alertBgLevel']                  = array('Alert Background Color Level', '<em>$alert-bg-level</em> || default: <strong>-10</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['alertBorderLevel']              = array('Alert Border Level', '<em>$alert-border-level</em> || default: <strong>-9</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['alertColorLevel']               = array('Alert Color Level', '<em>$alert-color-level</em> || default: <strong>-6</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['progressHeight']                = array('Progress Height', '<em>$progress-height</em> || default: <strong>1rem</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['progressFontSize']              = array('Progress Font Size', '<em>$progress-font-size</em> || inherit: <strong>$font-size-base * .75</strong> value:<strong>.75rem</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['progressBg']                    = array('Progress Background Color', '<em>$progress-bg</em> || inherit: <strong>$gray-200</strong> value: <strong>#e9ecef</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['progressBorderRadius']          = array('Progress Border Radius', '<em>$progress-border-radius</em> || inherit: <strong>$border-radius</strong> value: <strong>.25rem</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['progressBoxShadow']             = array('Progress Box Shadow', '<em>$progress-box-shadow</em> || default: <strong>inset 0 .1rem .1rem rgba($black, .1)</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['progressBarColor']              = array('Progress Bar Color', '<em>$progress-bar-color</em> || inherit: <strong>$white</strong> value: <strong>#fff</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['progressBarBg']                 = array('Progress Bar Background Color', '<em>$progress-bar-bg</em> || default: <strong>$primary</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['listGroupBg']                   = array('List Group Background Color', '<em>$list-group-bg</em> || inherit: <strong>$white</strong> value: <strong>#fff</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['listGroupBorderColor']          = array('List Group Border Color', '<em>$list-group-border-color</em> || default: <strong>rgba($black, .125)</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['listGroupBorderWidth']          = array('List Group Border Width', '<em>$list-group-border-width</em> || inherit: <strong>$border-width</strong> value: <strong>1px</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['listGroupBorderRadius']         = array('List Group Border Radius', '<em>$list-group-border-radius</em> || inherit: <strong>$border-radius</strong> value: <strong>.25rem</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['listGroupItemPaddingY']         = array('List Group Item Padding Y', '<em>$list-group-item-padding-y</em> || default: <strong>.75rem</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['listGroupItemPaddingX']         = array('List Group Item Padding X', '<em>$list-group-item-padding-x</em> || default: <strong>1.25rem</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['listGroupHoverBg']              = array('List Group Hover Background Color', '<em>$list-group-hover-bg</em> || inherit: <strong>$gray-100</strong> value: <strong>#f8f9fa</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['listGroupActiveColor']          = array('List Group Active Color', '<em>$list-group-active-color</em> || inherit: <strong>$component-active-color</strong> value: <strong>#fff</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['listGroupActiveBg']             = array('List Group Active Background Color', '<em>$list-group-active-bg</em> || inherit: <strong>$component-active-bg</strong> value: <strong>$primary</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['listGroupActiveBorderColor']    = array('List Group Active Border Color', '<em>$list-group-active-border-color</em> || inherit: <strong>$list-group-active-bg</strong> value: <strong>$primary</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['listGroupDisabledColor']        = array('List Group Disabled Color', '<em>$list-group-disabled-color</em> || inherit: <strong>$gray-600</strong> value: <strong>#6c757d</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['listGroupDisabledBg']           = array('List Group Disabled Background Color', '<em>$list-group-disabled-bg</em> || inherit: <strong>$list-group-bg</strong> value: <strong>#fff</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['listGroupActionColor']          = array('List Group Action Color', '<em>$list-group-action-color</em> || inherit: <strong>$gray-700</strong> value: <strong>#495057</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['listGroupActionHoverColor']     = array('List Group Action Hover Color', '<em>$list-group-action-hover-color</em> || inherit: <strong>$list-group-action-color</strong> value: <strong>#495057</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['listGroupActionActiveColor']    = array('List Group Action Active Color', '<em>$list-group-action-active-color</em> || inherit: <strong>$body-color</strong> value: <strong>#212529</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['listGroupActionActiveBg']       = array('List Group Action Active Background Color', '<em>$list-group-action-active-bg</em> || inherit: <strong>$gray-200</strong> value: <strong>#e9ecef</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['thumbnailPadding']              = array('Thumbnail Padding', '<em>$thumbnail-padding</em> || default: <strong>.25rem</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['thumbnailBg']                   = array('Thumbnail Background Color', '<em>$thumbnail-bg</em> || inherit: <strong>$body-bg</strong> value: <strong>#fff</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['thumbnailBorderWidth']          = array('Thumbnail Border Width', '<em>$thumbnail-border-width</em> || inherit: <strong>$border-width</strong> value: <strong>1px</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['thumbnailBorderColor']          = array('Thumbnail Border Color', '<em>$thumbnail-border-color</em> || inherit: <strong>$gray-300</strong> value: <strong>#dee2e6</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['thumbnailBorderRadius']         = array('Thumbnail Border Radius', '<em>$thumbnail-border-radius</em> || inherit: <strong>$border-radius</strong> value: <strong>.25rem</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['thumbnailBoxShadow']            = array('Thumbnail Box Shadow', '<em>$thumbnail-box-shadow</em> || default: <strong>0 1px 2px rgba($black, .075)</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['figureCaptionFontSize']         = array('Figure Caption Font Size', '<em>$figure-caption-font-size</em> || default: <strong>90%</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['figureCaptionColor']            = array('Figure Caption Color', '<em>$figure-caption-color</em> || inherit: <strong>$gray-600</strong> value: <strong>#6c757d</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['breadcrumbPaddingY']            = array('Breadcrumb Padding Y', '<em>$breadcrumb-padding-y</em> || default: <strong>.75rem</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['breadcrumbPaddingX']            = array('Breadcrumb Padding X', '<em>$breadcrumb-padding-x</em> || default: <strong>1rem</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['breadcrumbItemPadding']         = array('Breadcrumb Item Padding', '<em>$breadcrumb-item-padding</em> || default: <strong>.5rem</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['breadcrumbMarginBottom']        = array('Breadcrumb Margin Bottom', '<em>$breadcrumb-margin-bottom</em> || default: <strong>1rem</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['breadcrumbBg']                  = array('Breadcrumb Background Color', '<em>$breadcrumb-bg</em> || inherit: <strong>$gray-200</strong> value: <strong>#e9ecef</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['breadcrumbActiveColor']         = array('Breadcrumb Active Color', '<em>$breadcrumb-active-color</em> || inherit: <strong>$gray-600</strong> value: <strong>#007bff</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['breadcrumbDividerColor']        = array('Breadcrumb Divider Color', '<em>$breadcrumb-divider-color</em> || inherit: <strong>$gray-600</strong> value: <strong>#6c757d</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['breadcrumbDivider']             = array('Breadcrumb Divider', '<em>$breadcrumb-divider</em> || default: <strong>/</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['breadcrumbBorderRadius']        = array('Breadcrumb Border Radius', '<em>$breadcrumb-border-radius</em> || inherit: <strong>$border-radius</strong> value: <strong>.25rem</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['carouselControlColor']          = array('Carousel Control Color', '<em>$carousel-control-color</em> || inherit: <strong>$white</strong> value: <strong>#fff</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['carouselControlWidth']          = array('Carousel Control Width', '<em>$carousel-control-width</em> || default: <strong>15%</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['carouselControlOpacity']        = array('Carousel Control Opacity', '<em>$carousel-control-opacity</em> || default: <strong>.5</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['carouselIndicatorWidth']        = array('Carousel Indicator Width', '<em>$carousel-indicator-width</em> || default: <strong>30px</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['carouselIndicatorHeight']       = array('Carousel Indicator Height', '<em>$carousel-indicator-height</em> || default: <strong>3px</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['carouselIndicatorSpacer']       = array('Carousel Indicator Spacer', '<em>$carousel-indicator-spacer</em> || default: <strong>3px</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['carouselIndicatorActiveBg']     = array('Carousel Indicator Active Background Color', '<em>$carousel-indicator-active-bg</em> || inherit: <strong>$white</strong> value: <strong>#fff</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['carouselCaptionWidth']          = array('Carousel Caption Width', '<em>$carousel-caption-width</em> || default: <strong>70%</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['carouselCaptionColor']          = array('Carousel Caption Color', '<em>$carousel-caption-color</em> || inherit: <strong>$white</strong> value: <strong>#fff</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['carouselControlIconWidth']      = array('Carousel Control Icon Width', '<em>$carousel-control-icon-width</em> || default: <strong>20px</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['carouselControlPrevIconBg']     = array('Carousel Control Prev Icon Background Color', '<em>$carousel-control-prev-icon-bg</em> || default: <strong>//www.w3.org/2000/svg\</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['carouselControlNextIconBg']     = array('Carousel Control Next Icon Background Color', '<em>$carousel-control-next-icon-bg</em> || default: <strong>//www.w3.org/2000/svg\</strong>');

$GLOBALS['TL_LANG']['tl_bs_theme']['h1Color']                       = array('H1 Color', '<em>$h1-color</em> || inherit: <strong>$headings-color</strong> value: <strong>#212529</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['h2Color']                       = array('H2 Color', '<em>$h2-color</em> || inherit: <strong>$headings-color</strong> value: <strong>#212529</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['h3Color']                       = array('H3 Color', '<em>$h3-color</em> || inherit: <strong>$headings-color</strong> value: <strong>#212529</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['h4Color']                       = array('H4 Color', '<em>$h4-color</em> || inherit: <strong>$headings-color</strong> value: <strong>#212529</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['h5Color']                       = array('H5 Color', '<em>$h5-color</em> || inherit: <strong>$headings-color</strong> value: <strong>#212529</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['h6Color']                       = array('H6 Color', '<em>$h6-color</em> || inherit: <strong>$headings-color</strong> value: <strong>#212529</strong>');

$GLOBALS['TL_LANG']['tl_bs_theme']['h1BorderWidth']                 = array('H1 Border Width', '<em>$h1-border-width</em> || inherit: <strong>$border-width</strong> value: <strong>1px</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['h2BorderWidth']                 = array('H2 Border Width', '<em>$h2-border-width</em> || inherit: <strong>$border-width</strong> value: <strong>1px</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['h3BorderWidth']                 = array('H3 Border Width', '<em>$h3-border-width</em> || inherit: <strong>$border-width</strong> value: <strong>1px</strong>');

$GLOBALS['TL_LANG']['tl_bs_theme']['h1BorderColor']                 = array('H1 Border Color', '<em>$h1-border-color</em> || inherit: <strong>$border-color</strong> value: <strong>#dee2e6</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['h2BorderColor']                 = array('H2 Border Color', '<em>$h2-border-color</em> || inherit: <strong>$border-color</strong> value: <strong>#dee2e6</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['h3BorderColor']                 = array('H3 Border Color', '<em>$h3-border-color</em> || inherit: <strong>$border-color</strong> value: <strong>#dee2e6</strong>');



$GLOBALS['TL_LANG']['tl_bs_theme']['leadColor']                     = array('Lead Color', '<em>$lead-color</em> || default: <strong>inherit</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['leadFontFamily']                = array('Lead Font Family', '<em>$lead-font-family</em> || default: <strong>inherit</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['fontSizeRoot']                  = array('Font Size Root', '<em>$font-size-root</em> || default: <strong>16px</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['fontSizeRootSm']                = array('Font Size Root Small', '<em>$font-size-root</em> || default: <strong>.8rem</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['fontSizeRootMd']                = array('Font Size Root Medium', '<em>$font-size-root</em> || default: <strong>.9rem</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['fontSizeRootLg']                = array('Font Size Root Large', '<em>$font-size-root</em> || default: <strong>1rem</strong>');

$GLOBALS['TL_LANG']['tl_bs_theme']['componentColor']                = array('Component Color', '<em>$component-color</em> || inherit: <strong>$body-color</strong> value: <strong>#212529</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['navLinkFontSize']               = array('Nav Link Font Size', '<em>$nav-link-font-size</em> || inherit: <strong>$font-size-base</strong> value: <strong>1rem</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['navLinkFontWeight']             = array('Nav Link Font Weight', '<em>$nav-link-font-weight</em> || inherit: <strong>$font-weight-normal</strong> value: <strong>regular (400)</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['navLinkColor']                  = array('Nav Link Color', '<em>$nav-link-color</em> || inherit: <strong>$body-color</strong> value: <strong>#212529</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['navLinkHoverColor']             = array('Nav Link Hover Color', '<em>$nav-link-hover-color</em> || inherit: <strong>$primary</strong> value: <strong>#007bff</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['navLinkActiveColor']            = array('Nav Link Active Color', '<em>$nav-link-active-color</em> || inherit: <strong>$nav-link-hover-color</strong> value: <strong>#007bff</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['navLinkDecoration']             = array('Nav Link Decoration', '<em>$nav-link-decoration</em> || inherit: <strong>$link-decoration</strong> value: <strong>none</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['navLinkHoverDecoration']        = array('Nav Link Hover Decoration', '<em>$nav-link-hover-decoration</em> || inherit: <strong>$link-hover-decoration</strong> value: <strong>underline</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['navLinkActiveDecoration']       = array('Nav Link Active Decoration', '<em>$nav-link-active-decoration</em> || inherit: <strong>$nav-link-hover-decoration</strong> value: <strong>underline</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['navVerticalPaddingLeft']        = array('Nav Vertical Padding Left', '<em>$nav-vertical-padding-left</em> || inherit: <strong>$spacer</strong> value: <strong>1rem</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['navVerticalItemAlign']          = array('Nav Vertical Item Align', '<em>$nav-vertical-item-align</em> || default: <strong>center</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['navVerticalLinkPaddingY']       = array('Nav Vertical Link Padding Y', '<em>$nav-vertical-link-padding-y</em> || inherit: <strong>$nav-link-padding-y</strong> value: <strong>.5rem</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['navVerticalLinkPaddingX']       = array('Nav Vertical Link Padding X', '<em>$nav-vertical-link-padding-x</em> || inherit: <strong>$nav-link-padding-x</strong> value: <strong>1rem</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['navVerticalItemBorderWidth']    = array('Nav Vertical Item Border Width', '<em>$nav-vertical-item-border-width</em> || inherit: <strong>$border-width</strong> value: <strong>1px</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['navVerticalItemBorderColor']    = array('Nav Vertical Item Border Color', '<em>$nav-vertical-item-border-color</em> || inherit: <strong>$border-color</strong> value: <strong>#dee2e6</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['navVerticalTogglerWidth']       = array('Nav Vertical Toggler Width', '<em>$nav-vertical-toggler-width</em> || inherit: <strong>$spacer * 2</strong> value: <strong>2rem</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['navVerticalTogglerHeight']      = array('Nav Vertical Toggler Height', '<em>$nav-vertical-toggler-height</em> || inherit: <strong>$nav-vertical-toggler-width</strong> value: <strong>2rem</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['breadcrumbColor']               = array('Breadcrumb Color', '<em>$breadcrumb-color</em> || inherit: <strong>$gray-600</strong> value: <strong>#6c757d</strong>');
$GLOBALS['TL_LANG']['tl_bs_theme']['breadcrumbHoverColor']          = array('Breadcrumb Hover Color', '<em>$breadcrumb-hover-color</em> || inherit: <strong>$primary</strong> value: <strong>#007bff</strong>');

// Options
$GLOBALS['TL_LANG']['tl_bs_theme']['fontWeights'] = array(
    '100' => 'thin (100)',
    '200' => 'extra light (200)',
    '300' => 'light (300)',
    '400' => 'regular (400)',
    '500' => 'medium (500)',
    '600' => 'semi bold (600)',
    '700' => 'bold (700)',
    '800' => 'extra bold (800)',
    '900' => 'black (900)',
);