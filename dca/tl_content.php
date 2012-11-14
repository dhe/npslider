<?php if (!defined('TL_ROOT')) die('You can not access this file directly!');

/**
 * Contao Open Source CMS
 * Copyright (C) 2005-2011 Leo Feyer
 *
 * Formerly known as TYPOlight Open Source CMS.
 *
 * This program is free software: you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation, either
 * version 3 of the License, or (at your option) any later version.
 * 
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU
 * Lesser General Public License for more details.
 * 
 * You should have received a copy of the GNU Lesser General Public
 * License along with this program. If not, please visit the Free
 * Software Foundation website at <http://www.gnu.org/licenses/>.
 *
 * PHP version 5
 * @copyright  neckarpixel David Hestler 2012 
 * @author     neckarpixel David Hestler 
 * @package    npslider 
 * @license    GNU/LGPL 
 */

/*****************
 * Palettes
 *****************/
 
$GLOBALS['TL_DCA']['tl_content']['palettes']['__selector__'][] = 'npslider_type';
$GLOBALS['TL_DCA']['tl_content']['palettes']['__selector__'][] = 'npslider_pager';
$GLOBALS['TL_DCA']['tl_content']['palettes']['__selector__'][] = 'npslider_displaySlide';
$GLOBALS['TL_DCA']['tl_content']['palettes']['__selector__'][] = 'npslider_ticker';
$GLOBALS['TL_DCA']['tl_content']['palettes']['__selector__'][] = 'npslider_controls';
$GLOBALS['TL_DCA']['tl_content']['palettes']['__selector__'][] = 'npslider_callbacks';
$GLOBALS['TL_DCA']['tl_content']['palettes']['npslider']     = '{type_legend},type,headline,npslider_type;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID';

$GLOBALS['TL_DCA']['tl_content']['palettes']['npslider_start'] =  '{type_legend},type, headline,npslider_type;{sliderbasics_legend},npslider_width,npslider_height,npslider_loop,npslider_auto,npslider_autoHover,npslider_randomStart;{slideranimation_legend},npslider_mode,npslider_speed,npslider_pause,npslider_startingSlide;{slidercontrol_legend:hide},npslider_controls;{sliderpagination_legend:hide},npslider_pager;{sliderextended_legend:hide},npslider_displaySlide,npslider_ticker;{slidercallbacks_legend:hide},npslider_callbacks;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID';

$GLOBALS['TL_DCA']['tl_content']['palettes']['npslider_end']			 	= '{type_legend},type,npslider_type';

/*****************
 * Subpalettes
 *****************/
$GLOBALS['TL_DCA']['tl_content']['subpalettes']['npslider_pager'] = 'npslider_pagerLocation,npslider_pagerType,npslider_pagerShortSeparator';
$GLOBALS['TL_DCA']['tl_content']['subpalettes']['npslider_displaySlide'] = 'npslider_displaySlideQty,npslider_moveSlideQty';
$GLOBALS['TL_DCA']['tl_content']['subpalettes']['npslider_ticker'] = 'npslider_tickerSpeed,npslider_tickerDirection,npslider_tickerHover';
$GLOBALS['TL_DCA']['tl_content']['subpalettes']['npslider_controls'] = 'npslider_prevText,npslider_nextText,npslider_prevImage,npslider_nextImage,npslider_hideControlOnEnd';
$GLOBALS['TL_DCA']['tl_content']['subpalettes']['npslider_callbacks'] = 'npslider_onBeforeSlide,npslider_onAfterSlide,npslider_onFirstSlide,npslider_onLastSlide,npslider_onPrevSlide,npslider_onNextSlide,npslider_buildPager';


/*****************
 * Fields
 *****************/

$GLOBALS['TL_DCA']['tl_content']['fields']['npslider_type'] = array (
	'label' 		=> &$GLOBALS['TL_LANG']['tl_content']['npslider_type'],
  	'inputType' 	=> 'radio',
  	'options' 		=> array('npslider_start', 'npslider_end'),
	'reference'		=> &$GLOBALS['TL_LANG']['tl_content'],
  	'eval' 			=> array('submitOnChange'=>true,'helpwizard'=>true, 'tl_class'=>'clr'),
	'sql'			=> "varchar(32) NOT NULL default ''"
);
  
$GLOBALS['TL_DCA']['tl_content']['fields']['npslider_width'] = array(
	'label'			=> &$GLOBALS['TL_LANG']['tl_content']['npslider_width'],
	'inputType'		=> 'inputUnit',
	'options'		=> array('px'),
	'eval'			=> array('mandatory'=>true, 'rgxp'=>'digit', 'maxlength'=>255, 'tl_class'=>'w50', 'nospace'=>true),
	'sql'			=> "varchar(255) NOT NULL default ''"
);
$GLOBALS['TL_DCA']['tl_content']['fields']['npslider_height'] = array(
	'label'			=> &$GLOBALS['TL_LANG']['tl_content']['npslider_height'],
	'inputType'		=> 'inputUnit',
	'options'		=> array('px'),
	'eval'			=> array('mandatory'=>true, 'rgxp'=>'digit', 'maxlength'=>255, 'tl_class'=>'w50','nospace'=>true),
	'sql'			=> "varchar(255) NOT NULL default ''"
);
$GLOBALS['TL_DCA']['tl_content']['fields']['npslider_autoStart'] = array(
	'label'			=> &$GLOBALS['TL_LANG']['tl_content']['npslider_autoStart'],
	'inputType'		=> 'checkbox',
	'eval'			=> array('tl_class'=>'w50'),
	'sql'			=> "char(1) NOT NULL default ''"
);
$GLOBALS['TL_DCA']['tl_content']['fields']['npslider_loop'] = array(
	'label'			=> &$GLOBALS['TL_LANG']['tl_content']['npslider_loop'],
	'inputType'		=> 'checkbox',
	'eval'			=> array('tl_class'=>'w50'),
	'sql'			=> "char(1) NOT NULL default ''"
);
$GLOBALS['TL_DCA']['tl_content']['fields']['npslider_auto'] = array(
	'label'			=> &$GLOBALS['TL_LANG']['tl_content']['npslider_auto'],
	'inputType'		=> 'checkbox',
	'eval'			=> array('tl_class'=>'w50'),
	'sql'			=> "char(1) NOT NULL default ''"
);
$GLOBALS['TL_DCA']['tl_content']['fields']['npslider_autoHover'] = array(
	'label'			=> &$GLOBALS['TL_LANG']['tl_content']['npslider_autoHover'],
	'inputType'		=> 'checkbox',
	'eval'			=> array('tl_class'=>'w50'),
	'sql'			=> "char(1) NOT NULL default ''"
);
$GLOBALS['TL_DCA']['tl_content']['fields']['npslider_randomStart'] = array(
	'label'			=> &$GLOBALS['TL_LANG']['tl_content']['npslider_randomStart'],
	'inputType'		=> 'checkbox',
	'eval'			=> array('tl_class'=>'w50'),
	'sql'			=> "char(1) NOT NULL default ''"
);

/* ANIMATION */
$GLOBALS['TL_DCA']['tl_content']['fields']['npslider_mode'] = array(
	'label'			=> &$GLOBALS['TL_LANG']['tl_content']['npslider_mode'],
	'inputType'		=> 'select',
	'options'		=> array('horizontal', 'vertical', 'fade'),
	'eval'			=> array('mandatory'=>false, 'tl_class'=>'w50'),
	'reference'     => &$GLOBALS['TL_LANG']['tl_content']['npslider_mode_items'],
	'sql'			=> "varchar(255) NOT NULL default ''"
);
$GLOBALS['TL_DCA']['tl_content']['fields']['npslider_speed'] = array (
	'label'			=> &$GLOBALS['TL_LANG']['tl_content']['npslider_speed'],
	'inputType'		=> 'text',
	'default'		=> '1000',
	'eval'			=> array('maxlength'=>4, 'mandatory'=>false, 'rgxp'=>'digit', 'nospace'=>true, 'tl_class'=>'w50'),
	'sql'			=> "varchar(255) NOT NULL default ''"
);
$GLOBALS['TL_DCA']['tl_content']['fields']['npslider_pause'] = array (
	'label'			=> &$GLOBALS['TL_LANG']['tl_content']['npslider_pause'],
	'inputType'		=> 'text',
	'default'		=> '3000',
	'eval'			=> array('maxlength'=>4, 'mandatory'=>false, 'rgxp'=>'digit', 'nospace'=>true, 'tl_class'=>'w50'),
	'sql'			=> "varchar(255) NOT NULL default ''"
);
$GLOBALS['TL_DCA']['tl_content']['fields']['npslider_startingSlide'] = array (
	'label'			=> &$GLOBALS['TL_LANG']['tl_content']['npslider_startingSlide'],
	'inputType'		=> 'text',
	'default'		=> '1',
	'eval'			=> array('mandatory'=>false, 'rgxp'=>'digit', 'nospace'=>true, 'tl_class'=>'w50'),
	'sql'			=> "varchar(255) NOT NULL default ''"
);



/* CONTROLS */

$GLOBALS['TL_DCA']['tl_content']['fields']['npslider_controls'] = array(
	'label'			=> &$GLOBALS['TL_LANG']['tl_content']['npslider_controls'],
	'inputType'		=> 'checkbox',
	'eval'			=> array('tl_class'=>'clr','submitOnChange'=>true),
	'sql'			=> "char(1) NOT NULL default ''"
);
$GLOBALS['TL_DCA']['tl_content']['fields']['npslider_hideControlOnEnd'] = array(
	'label'			=> &$GLOBALS['TL_LANG']['tl_content']['npslider_hideControlOnEnd'],
	'inputType'		=> 'checkbox',
	'eval'			=> array('tl_class'=>'clr'),
	'sql'			=> "char(1) NOT NULL default ''"
);
$GLOBALS['TL_DCA']['tl_content']['fields']['npslider_prevText'] = array (
	'label'			=> &$GLOBALS['TL_LANG']['tl_content']['npslider_prevText'],
	'inputType'		=> 'text',
	'default'		=> 'prev',
	'eval'			=> array('mandatory'=>false, 'tl_class'=>'w50','preserveTags'=>true),
	'sql'			=> "varchar(255) NOT NULL default ''"
);
$GLOBALS['TL_DCA']['tl_content']['fields']['npslider_nextText'] = array (
	'label'			=> &$GLOBALS['TL_LANG']['tl_content']['npslider_nextText'],
	'inputType'		=> 'text',
	'default'		=> 'next',
	'eval'			=> array('mandatory'=>false, 'tl_class'=>'w50','preserveTags'=>true),
	'sql'			=> "varchar(255) NOT NULL default ''"
);
$GLOBALS['TL_DCA']['tl_content']['fields']['npslider_prevImage'] = array (
	'label'			=> &$GLOBALS['TL_LANG']['tl_content']['npslider_prevImage'],
	'inputType'		=> 'fileTree',
	'eval'			=> array('fieldType'=>'radio', 'files'=>true, 'filesOnly'=>true, 'tl_class'=>'clr'),
	'sql'			=> "varchar(255) NOT NULL default ''"
);
$GLOBALS['TL_DCA']['tl_content']['fields']['npslider_nextImage'] = array (
	'label'			=> &$GLOBALS['TL_LANG']['tl_content']['npslider_nextImage'],
	'inputType'		=> 'fileTree',
	'eval'			=> array('fieldType'=>'radio', 'files'=>true, 'filesOnly'=>true, 'tl_class'=>'clr'),
	'sql'			=> "varchar(255) NOT NULL default ''"
);

/* PAGER */
$GLOBALS['TL_DCA']['tl_content']['fields']['npslider_pager'] = array(
	'label'			=> &$GLOBALS['TL_LANG']['tl_content']['npslider_pager'],
	'inputType'		=> 'checkbox',
	'eval'			=> array('tl_class'=>'clr','submitOnChange'=>true),
	'sql'			=> "char(1) NOT NULL default ''"
);
$GLOBALS['TL_DCA']['tl_content']['fields']['npslider_pagerLocation'] = array (
	'label'			=> &$GLOBALS['TL_LANG']['tl_content']['npslider_pagerLocation'],
	'inputType'		=> 'select',
	'options' 		=> array('bottom', 'top'),
	'eval'			=> array('tl_class'=>'w50'),
	'reference'     => &$GLOBALS['TL_LANG']['tl_content']['npslider_pagerLocation_items'],
	'sql'			=> "varchar(255) NOT NULL default ''"
);
$GLOBALS['TL_DCA']['tl_content']['fields']['npslider_pagerType'] = array (
	'label'			=> &$GLOBALS['TL_LANG']['tl_content']['npslider_pagerType'],
	'inputType'		=> 'select',
	'options' 		=> array('full', 'short'),
	'eval'			=> array('tl_class'=>'w50'),
	'reference'     => &$GLOBALS['TL_LANG']['tl_content']['npslider_pagerType_items'],
	'sql'			=> "varchar(255) NOT NULL default ''"
);
$GLOBALS['TL_DCA']['tl_content']['fields']['npslider_pagerShortSeparator'] = array (
	'label'			=> &$GLOBALS['TL_LANG']['tl_content']['npslider_pagerShortSeparator'],
	'inputType'		=> 'text',
	'default'		=> '/',
	'eval'			=> array('tl_class'=>'w50'),
	'sql'			=> "varchar(255) NOT NULL default ''"
);

/* Display Quenty */
$GLOBALS['TL_DCA']['tl_content']['fields']['npslider_displaySlide'] = array(
	'label'			=> &$GLOBALS['TL_LANG']['tl_content']['npslider_displaySlide'],
	'inputType'		=> 'checkbox',
	'eval'			=> array('tl_class'=>'clr','submitOnChange'=>true),
	'sql'			=> "char(1) NOT NULL default ''"
);
$GLOBALS['TL_DCA']['tl_content']['fields']['npslider_displaySlideQty'] = array (
	'label'			=> &$GLOBALS['TL_LANG']['tl_content']['npslider_displaySlideQty'],
	'inputType'		=> 'text',
	'default'		=> '1',
	'eval'			=> array('tl_class'=>'w50','rgxp'=>'digit', 'nospace'=>true),
	'sql'			=> "varchar(255) NOT NULL default ''"
);
$GLOBALS['TL_DCA']['tl_content']['fields']['npslider_moveSlideQty'] = array (
	'label'			=> &$GLOBALS['TL_LANG']['tl_content']['npslider_moveSlideQty'],
	'inputType'		=> 'text',
	'default'		=> '1',
	'eval'			=> array('tl_class'=>'w50','rgxp'=>'digit', 'nospace'=>true),
	'sql'			=> "varchar(255) NOT NULL default ''"
);


/* TICKER MODE */
$GLOBALS['TL_DCA']['tl_content']['fields']['npslider_ticker'] = array(
	'label'			=> &$GLOBALS['TL_LANG']['tl_content']['npslider_ticker'],
	'inputType'		=> 'checkbox',
	'eval'			=> array('tl_class'=>'clr','submitOnChange'=>true),
	'sql'			=> "char(1) NOT NULL default ''"
);
$GLOBALS['TL_DCA']['tl_content']['fields']['npslider_tickerSpeed'] = array (
	'label'			=> &$GLOBALS['TL_LANG']['tl_content']['npslider_tickerSpeed'],
	'inputType'		=> 'text',
	'default'		=> '1000',
	'eval'			=> array('maxlength'=>4, 'mandatory'=>false, 'rgxp'=>'digit', 'nospace'=>true, 'tl_class'=>'w50'),
	'sql'			=> "varchar(255) NOT NULL default ''"
);
$GLOBALS['TL_DCA']['tl_content']['fields']['npslider_tickerDirection'] = array (
	'label'			=> &$GLOBALS['TL_LANG']['tl_content']['npslider_tickerDirection'],
	'inputType'		=> 'select',
	'options' 		=> array('next', 'prev'),
	'eval'			=> array('tl_class'=>'w50'),
	'reference'     => &$GLOBALS['TL_LANG']['tl_content']['npslider_tickerDirection_items'],
	'sql'			=> "varchar(255) NOT NULL default ''"
);
$GLOBALS['TL_DCA']['tl_content']['fields']['npslider_tickerHover'] = array(
	'label'			=> &$GLOBALS['TL_LANG']['tl_content']['npslider_tickerHover'],
	'inputType'		=> 'checkbox',
	'eval'			=> array('tl_class'=>'w50'),
	'sql'			=> "char(1) NOT NULL default ''"
);
/* CALLBACKS */
$GLOBALS['TL_DCA']['tl_content']['fields']['npslider_callbacks'] = array(
	'label'			=> &$GLOBALS['TL_LANG']['tl_content']['npslider_callbacks'],
	'inputType'		=> 'checkbox',
	'eval'			=> array('tl_class'=>'clr','submitOnChange'=>true),
	'sql'			=> "char(1) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['npslider_onBeforeSlide'] = array(
	'label'			=> &$GLOBALS['TL_LANG']['tl_content']['npslider_onBeforeSlide'],
	'inputType'		=> 'textarea',
	'explanation'	=> 'callbacks',
	'eval'			=> array('style'=>'height:100px;','helpwizard' => true,'mandatory'=>false,'allowHtml'=>true,'preserveTags' =>true),
	'sql'			=> "mediumtext NULL"
);
$GLOBALS['TL_DCA']['tl_content']['fields']['npslider_onAfterSlide'] = array(
	'label'			=> &$GLOBALS['TL_LANG']['tl_content']['npslider_onAfterSlide'],
	'inputType'		=> 'textarea',
	'explanation'	=> 'callbacks',
	'eval'			=> array('style'=>'height:100px;','helpwizard' => true,'mandatory'=>false,'allowHtml'=>true,'preserveTags' =>true),
	'sql'			=> "mediumtext NULL"
);
$GLOBALS['TL_DCA']['tl_content']['fields']['npslider_onFirstSlide'] = array(
	'label'			=> &$GLOBALS['TL_LANG']['tl_content']['npslider_onFirstSlide'],
	'inputType'		=> 'textarea',
	'explanation'	=> 'callbacks',
	'eval'			=> array('style'=>'height:100px;','helpwizard' => true,'mandatory'=>false,'allowHtml'=>true,'preserveTags' =>true),
	'sql'			=> "mediumtext NULL"
);
$GLOBALS['TL_DCA']['tl_content']['fields']['npslider_onLastSlide'] = array(
	'label'			=> &$GLOBALS['TL_LANG']['tl_content']['npslider_onLastSlide'],
	'inputType'		=> 'textarea',
	'explanation'	=> 'callbacks',
	'eval'			=> array('style'=>'height:100px;','helpwizard' => true,'mandatory'=>false,'allowHtml'=>true,'preserveTags' =>true),
	'sql'			=> "mediumtext NULL"
);
$GLOBALS['TL_DCA']['tl_content']['fields']['npslider_onPrevSlide'] = array(
	'label'			=> &$GLOBALS['TL_LANG']['tl_content']['npslider_onPrevSlide'],
	'inputType'		=> 'textarea',
	'explanation'	=> 'callbacks',
	'eval'			=> array('style'=>'height:100px;','helpwizard' => true,'mandatory'=>false,'allowHtml'=>true,'preserveTags' =>true),
	'sql'			=> "mediumtext NULL"
);
$GLOBALS['TL_DCA']['tl_content']['fields']['npslider_onNextSlide'] = array(
	'label'			=> &$GLOBALS['TL_LANG']['tl_content']['npslider_onNextSlide'],
	'inputType'		=> 'textarea',
	'explanation'	=> 'callbacks',
	'eval'			=> array('style'=>'height:100px;','helpwizard' => true,'mandatory'=>false,'allowHtml'=>true,'preserveTags' =>true),
	'sql'			=> "mediumtext NULL"
);
$GLOBALS['TL_DCA']['tl_content']['fields']['npslider_buildPager'] = array(
	'label'			=> &$GLOBALS['TL_LANG']['tl_content']['npslider_buildPager'],
	'inputType'		=> 'textarea',
	'explanation'	=> 'callbacks',
	'eval'			=> array('style'=>'height:100px;','helpwizard' => true,'mandatory'=>false,'allowHtml'=>true,'preserveTags' =>true),
	'sql'			=> "mediumtext NULL"
);