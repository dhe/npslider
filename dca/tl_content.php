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
 * @copyright  neckarpixel David Hestler 2013
 * @author     neckarpixel David Hestler 
 * @package    npslider 
 * @license    GPL 
 */

/*****************
 * Palettes
 *****************/

//SELECTORS 
array_push($GLOBALS['TL_DCA']['tl_content']['palettes']['__selector__'],'npsType','npsSizeMode','npsAutoMode','npsManualMode','npsAdaptiveHeight','npsTouchEnabled','npsPager','npsEnableEasing','npsEasingMode','npsControls','npsAutoControls','npsOwnNavContainer','npsDisplaySlide','npsTicker','npsCallbacks');

$GLOBALS['TL_DCA']['tl_content']['palettes']['nps']			= '{type_legend},type,headline,npsType;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID';
$GLOBALS['TL_DCA']['tl_content']['palettes']['npsStart']	= '{type_legend},type,headline,npsType;{npsBasics_legend},npsSizeMode;{npsAnimation_legend:hide},npsAuto,npsAutoHover,npsInfiniteLoop,npsRandomStart,npsMode,npsAutoDirection,npsSpeed,npsPause,npsStartSlide,npsAutoDelay,npsEnableEasing;{npsControls_legend:hide},npsControls,npsCaptions,npsHideControlOnEnd;{npsTouch_legend:hide},npsTouchEnabled;{npsPager_legend:hide},npsPager;{npsExtended_legend:hide},npsDisplaySlide,npsTicker,npsUseCSS,npsVideo,npsPreloadImages;{npsCallbacks_legend:hide},npsCallbacks;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID';
$GLOBALS['TL_DCA']['tl_content']['palettes']['npsEnd']		= '{type_legend},type,npsType;{protected_legend:hide},protected;{expert_legend:hide},guests';

/*****************
 * Subpalettes
 *****************/
// auto mode
$GLOBALS['TL_DCA']['tl_content']['subpalettes']['npsSizeMode_npsAutoMode'] = 'npsSlideMargin,npsAdaptiveHeight';
$GLOBALS['TL_DCA']['tl_content']['subpalettes']['npsAdaptiveHeight'] = 'npsAdaptiveHeightSpeed';

// manual mode
$GLOBALS['TL_DCA']['tl_content']['subpalettes']['npsSizeMode_npsManualMode'] = 'npsSlideMargin,npsWidth,npsHeight';

// easing
$GLOBALS['TL_DCA']['tl_content']['subpalettes']['npsEnableEasing'] = 'npsEasingMode,npsEasing';


// touch
$GLOBALS['TL_DCA']['tl_content']['subpalettes']['npsTouchEnabled'] = 'npsOneToOneTouch,npsSwipeThreshold,npsPreventDefaultSwipeX,npsPreventDefaultSwipeY';

// pager
$GLOBALS['TL_DCA']['tl_content']['subpalettes']['npsPager'] = 'npsPagerType,npsPagerShortSeparator,npsPagerSelector,npsPagerCustom';

// controls
$GLOBALS['TL_DCA']['tl_content']['subpalettes']['npsControls'] = 'npsNextText,npsPrevText,npsNextImage,npsPrevImage,npsOwnNavContainer,npsAutoControls,npsAutoControlsSelector';
$GLOBALS['TL_DCA']['tl_content']['subpalettes']['npsAutoControls'] = 'npsAutoStart,npsAutoControlsCombine,npsStartText,npsStopText';
$GLOBALS['TL_DCA']['tl_content']['subpalettes']['npsOwnNavContainer'] = 'npsPrevSelector,npsNextSelector';

// ticker
$GLOBALS['TL_DCA']['tl_content']['subpalettes']['npsTicker'] = 'npsTickerHover';

// modify display
  $GLOBALS['TL_DCA']['tl_content']['subpalettes']['npsDisplaySlide'] = 'npsMinSlides,npsMaxSlides,npsMoveSlides,npsSlideWidth';

// callbacks
$GLOBALS['TL_DCA']['tl_content']['subpalettes']['npsCallbacks'] = 'npsOnSliderLoad,npsOnSlideBefore,npsOnSlideAfter,npsOnSlideNext,npsOnSlidePrev,npsBuildPager';


/*****************
 * Fields
 *****************/
 
// GENERAL
$GLOBALS['TL_DCA']['tl_content']['fields']['npsType'] = array (
	'label' 		=> &$GLOBALS['TL_LANG']['tl_content']['npsType'],
  	'inputType' 	=> 'radio',
  	'options' 		=> array('npsStart', 'npsEnd'),
	'reference'		=> &$GLOBALS['TL_LANG']['tl_content'],
  	'eval' 			=> array('submitOnChange'=>true,'helpwizard'=>true, 'tl_class'=>'clr'),
	'sql'			=> "varchar(32) NOT NULL default ''"
);

// DIMENSIONS
$GLOBALS['TL_DCA']['tl_content']['fields']['npsSizeMode'] = array (
	'label' 		=> &$GLOBALS['TL_LANG']['tl_content']['npsSizeMode'],
  	'inputType' 	=> 'radio',
  	'options' 		=> array('npsAutoMode', 'npsManualMode'),
	'reference'		=> &$GLOBALS['TL_LANG']['tl_content'],
  	'eval' 			=> array('submitOnChange'=>true,'helpwizard'=>true, 'tl_class'=>'w50'),
	'sql'			=> "varchar(32) NOT NULL default ''"
);
$GLOBALS['TL_DCA']['tl_content']['fields']['npsWidth'] = array(
	'label'			=> &$GLOBALS['TL_LANG']['tl_content']['npsWidth'],
	'inputType'		=> 'inputUnit',
	'options'		=> array('px','%','em'),
	'eval'			=> array('mandatory'=>true, 'rgxp'=>'digit', 'maxlength'=>255, 'tl_class'=>'clr w50', 'nospace'=>true),
	'sql'			=> "varchar(255) NOT NULL default ''"
);
$GLOBALS['TL_DCA']['tl_content']['fields']['npsHeight'] = array(
	'label'			=> &$GLOBALS['TL_LANG']['tl_content']['npsHeight'],
	'inputType'		=> 'inputUnit',
	'options'		=> array('px','%','em'),
	'eval'			=> array('mandatory'=>true, 'rgxp'=>'digit', 'maxlength'=>255, 'tl_class'=>'w50','nospace'=>true),
	'sql'			=> "varchar(255) NOT NULL default ''"
);
$GLOBALS['TL_DCA']['tl_content']['fields']['npsAdaptiveHeight'] = array(
	'label'			=> &$GLOBALS['TL_LANG']['tl_content']['npsAdaptiveHeight'],
	'inputType'		=> 'checkbox',
	'eval'			=> array('tl_class'=>'w50 m12','submitOnChange'=>true),
	'sql'			=> "char(1) NOT NULL default ''"
);
$GLOBALS['TL_DCA']['tl_content']['fields']['npsAdaptiveHeightSpeed'] = array (
	'label'			=> &$GLOBALS['TL_LANG']['tl_content']['npsAdaptiveHeightSpeed'],
	'inputType'		=> 'text',
	'default'		=> '500',
	'eval'			=> array('maxlength'=>4, 'mandatory'=>true, 'rgxp'=>'digit', 'nospace'=>true, 'tl_class'=>'w50'),
	'sql'			=> "varchar(255) NOT NULL default ''"
);
$GLOBALS['TL_DCA']['tl_content']['fields']['npsSlideMargin'] = array (
	'label'			=> &$GLOBALS['TL_LANG']['tl_content']['npsSlideMargin'],
	'inputType'		=> 'text',
	'default'		=> '0',
	'eval'			=> array('maxlength'=>4, 'mandatory'=>true, 'rgxp'=>'digit', 'nospace'=>true, 'tl_class'=>'w50'),
	'sql'			=> "varchar(255) NOT NULL default ''"
);

// BASICS
$GLOBALS['TL_DCA']['tl_content']['fields']['npsMode'] = array(
	'label'			=> &$GLOBALS['TL_LANG']['tl_content']['npsMode'],
	'inputType'		=> 'select',
	'options'		=> array('horizontal', 'vertical', 'fade'),
	'eval'			=> array('mandatory'=>true, 'tl_class'=>'w50'),
	'reference'     => &$GLOBALS['TL_LANG']['tl_content']['npsModeItems'],
	'sql'			=> "varchar(255) NOT NULL default ''"
);
$GLOBALS['TL_DCA']['tl_content']['fields']['npsSpeed'] = array (
	'label'			=> &$GLOBALS['TL_LANG']['tl_content']['npsSpeed'],
	'inputType'		=> 'text',
	'default'		=> '1000',
	'eval'			=> array('maxlength'=>6, 'mandatory'=>true, 'rgxp'=>'digit', 'nospace'=>true, 'tl_class'=>'w50'),
	'sql'			=> "varchar(255) NOT NULL default ''"
);
$GLOBALS['TL_DCA']['tl_content']['fields']['npsInfiniteLoop'] = array(
	'label'			=> &$GLOBALS['TL_LANG']['tl_content']['npsInfiniteLoop'],
	'inputType'		=> 'checkbox',
	'eval'			=> array('tl_class'=>'w50'),
	'sql'			=> "char(1) NOT NULL default ''"
);
$GLOBALS['TL_DCA']['tl_content']['fields']['npsRandomStart'] = array(
	'label'			=> &$GLOBALS['TL_LANG']['tl_content']['npsRandomStart'],
	'inputType'		=> 'checkbox',
	'eval'			=> array('tl_class'=>'w50'),
	'sql'			=> "char(1) NOT NULL default ''"
);
$GLOBALS['TL_DCA']['tl_content']['fields']['npsCaptions'] = array(
	'label'			=> &$GLOBALS['TL_LANG']['tl_content']['npsCaptions'],
	'inputType'		=> 'checkbox',
	'eval'			=> array('tl_class'=>'clr m12'),
	'sql'			=> "char(1) NOT NULL default ''"
);
$GLOBALS['TL_DCA']['tl_content']['fields']['npsHideControlOnEnd'] = array(
	'label'			=> &$GLOBALS['TL_LANG']['tl_content']['npsHideControlOnEnd'],
	'inputType'		=> 'checkbox',
	'eval'			=> array('tl_class'=>'clr'),
	'sql'			=> "char(1) NOT NULL default ''"
);
$GLOBALS['TL_DCA']['tl_content']['fields']['npsStartSlide'] = array (
	'label'			=> &$GLOBALS['TL_LANG']['tl_content']['npsStartSlide'],
	'inputType'		=> 'text',
	'default'		=> '1',
	'eval'			=> array('maxlength'=>3, 'mandatory'=>true, 'rgxp'=>'digit', 'nospace'=>true, 'tl_class'=>'w50'),
	'sql'			=> "varchar(255) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['npsPreloadImages'] = array(
	'label'			=> &$GLOBALS['TL_LANG']['tl_content']['npsPreloadImages'],
	'inputType'		=> 'select',
	'options'		=> array('visible','all'),
	'eval'			=> array('mandatory'=>true, 'tl_class'=>'w50'),
	'reference'     => &$GLOBALS['TL_LANG']['tl_content']['npsPreloadImagesItems'],
	'sql'			=> "varchar(255) NOT NULL default ''"
);

// EASING
$GLOBALS['TL_DCA']['tl_content']['fields']['npsEnableEasing'] = array(
	'label'			=> &$GLOBALS['TL_LANG']['tl_content']['npsEnableEasing'],
	'inputType'		=> 'checkbox',
	'eval'			=> array('tl_class'=>'w50 m12','submitOnChange'=>true),
	'sql'			=> "char(1) NOT NULL default ''"
);
$GLOBALS['TL_DCA']['tl_content']['fields']['npsEasingMode'] = array(
	'label'			=> &$GLOBALS['TL_LANG']['tl_content']['npsEasingMode'],
	'inputType'		=> 'select',
	'options'		=> array('css', 'js'),
	'reference'		=> &$GLOBALS['TL_LANG']['tl_content']['npsEasingItems'],
	'eval'			=> array('mandatory'=>true, 'tl_class'=>'clr w50','submitOnChange'=>true),
	'sql'			=> "varchar(255) NOT NULL default ''"
);
$GLOBALS['TL_DCA']['tl_content']['fields']['npsEasing'] = array(
	'label'			=> &$GLOBALS['TL_LANG']['tl_content']['npsEasing'],
	'inputType'		=> 'select',
	'options_callback'		=> array('easingclass', 'getEasingOptions'),
	'eval'			=> array('mandatory'=>false, 'tl_class'=>'w50'),
	'sql'			=> "varchar(255) NOT NULL default ''"
);

// CONTROLS
$GLOBALS['TL_DCA']['tl_content']['fields']['npsControls'] = array(
	'label'			=> &$GLOBALS['TL_LANG']['tl_content']['npsControls'],
	'inputType'		=> 'checkbox',
	'eval'			=> array('tl_class'=>'clr','submitOnChange'=>true),
	'sql'			=> "char(1) NOT NULL default ''"
);
$GLOBALS['TL_DCA']['tl_content']['fields']['npsPrevText'] = array (
	'label'			=> &$GLOBALS['TL_LANG']['tl_content']['npsPrevText'],
	'inputType'		=> 'text',
	'default'		=> 'zurück',
	'eval'			=> array('tl_class'=>'w50'),
	'sql'			=> "varchar(255) NOT NULL default ''"
);
$GLOBALS['TL_DCA']['tl_content']['fields']['npsNextText'] = array (
	'label'			=> &$GLOBALS['TL_LANG']['tl_content']['npsNextText'],
	'inputType'		=> 'text',
	'default'		=> 'weiter',
	'eval'			=> array('tl_class'=>'w50'),
	'sql'			=> "varchar(255) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['npsPrevImage'] = array (
	'label'			=> &$GLOBALS['TL_LANG']['tl_content']['npsPrevImage'],
	'inputType'		=> 'fileTree',
	'eval'			=> array('fieldType'=>'radio', 'files'=>true, 'filesOnly'=>true, 'tl_class'=>'w50" style="height:auto'),
	'sql'			=> "varchar(255) NOT NULL default ''"
);
$GLOBALS['TL_DCA']['tl_content']['fields']['npsNextImage'] = array (
	'label'			=> &$GLOBALS['TL_LANG']['tl_content']['npsNextImage'],
	'inputType'		=> 'fileTree',
	'eval'			=> array('fieldType'=>'radio', 'files'=>true, 'filesOnly'=>true, 'tl_class'=>'w50" style="height:auto'),
	'sql'			=> "varchar(255) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['npsOwnNavContainer'] = array(
	'label'			=> &$GLOBALS['TL_LANG']['tl_content']['npsOwnNavContainer'],
	'inputType'		=> 'checkbox',
	'eval'			=> array('tl_class'=>'clr" style="padding-top:1px','submitOnChange'=>true),
	'sql'			=> "char(1) NOT NULL default ''"
);
$GLOBALS['TL_DCA']['tl_content']['fields']['npsPrevSelector'] = array (
	'label'			=> &$GLOBALS['TL_LANG']['tl_content']['npsPrevSelector'],
	'inputType'		=> 'text',
	'default'		=> 'prev-container',
	'eval'			=> array('tl_class'=>'clr w50','mandatory'=>true),
	'sql'			=> "varchar(255) NOT NULL default ''"
);
$GLOBALS['TL_DCA']['tl_content']['fields']['npsNextSelector'] = array (
	'label'			=> &$GLOBALS['TL_LANG']['tl_content']['npsNextSelector'],
	'inputType'		=> 'text',
	'default'		=> 'next-container',
	'eval'			=> array('tl_class'=>'w50','mandatory'=>true),
	'sql'			=> "varchar(255) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['npsAutoControls'] = array(
	'label'			=> &$GLOBALS['TL_LANG']['tl_content']['npsAutoControls'],
	'inputType'		=> 'checkbox',
	'eval'			=> array('tl_class'=>'clr w50','submitOnChange'=>true),
	'sql'			=> "char(1) NOT NULL default ''"
);
$GLOBALS['TL_DCA']['tl_content']['fields']['npsAutoControlsCombine'] = array(
	'label'			=> &$GLOBALS['TL_LANG']['tl_content']['npsAutoControlsCombine'],
	'inputType'		=> 'checkbox',
	'eval'			=> array('tl_class'=>'w50'),
	'sql'			=> "char(1) NOT NULL default ''"
);
$GLOBALS['TL_DCA']['tl_content']['fields']['npsStartText'] = array (
	'label'			=> &$GLOBALS['TL_LANG']['tl_content']['npsStartText'],
	'inputType'		=> 'text',
	'default'		=> 'Start',
	'eval'			=> array('mandatory'=>false, 'tl_class'=>'clr w50'),
	'sql'			=> "varchar(255) NOT NULL default ''"
);
$GLOBALS['TL_DCA']['tl_content']['fields']['npsStopText'] = array (
	'label'			=> &$GLOBALS['TL_LANG']['tl_content']['npsStopText'],
	'inputType'		=> 'text',
	'default'		=> 'Stop',
	'eval'			=> array('mandatory'=>false, 'tl_class'=>'w50'),
	'sql'			=> "varchar(255) NOT NULL default ''"
);


// TICKER
$GLOBALS['TL_DCA']['tl_content']['fields']['npsTicker'] = array(
	'label'			=> &$GLOBALS['TL_LANG']['tl_content']['npsTicker'],
	'inputType'		=> 'checkbox',
	'eval'			=> array('tl_class'=>'clr w50','submitOnChange'=>true),
	'sql'			=> "char(1) NOT NULL default ''"
);
$GLOBALS['TL_DCA']['tl_content']['fields']['npsTickerHover'] = array(
	'label'			=> &$GLOBALS['TL_LANG']['tl_content']['npsTickerHover'],
	'inputType'		=> 'checkbox',
	'eval'			=> array('tl_class'=>'w50'),
	'sql'			=> "char(1) NOT NULL default ''"
);

// ANIMATIONS
$GLOBALS['TL_DCA']['tl_content']['fields']['npsUseCSS'] = array(
	'label'			=> &$GLOBALS['TL_LANG']['tl_content']['npsUseCSS'],
	'inputType'		=> 'checkbox',
	'eval'			=> array('tl_class'=>'clr w50'),
	'sql'			=> "char(1) NOT NULL default ''"
);
$GLOBALS['TL_DCA']['tl_content']['fields']['npsVideo'] = array(
	'label'			=> &$GLOBALS['TL_LANG']['tl_content']['npsVideo'],
	'inputType'		=> 'checkbox',
	'eval'			=> array('tl_class'=>'w50'),
	'sql'			=> "char(1) NOT NULL default ''"
);

// AUTO
$GLOBALS['TL_DCA']['tl_content']['fields']['npsAuto'] = array(
	'label'			=> &$GLOBALS['TL_LANG']['tl_content']['npsAuto'],
	'inputType'		=> 'checkbox',
	'eval'			=> array('tl_class'=>'w50'),
	'sql'			=> "char(1) NOT NULL default ''"
);
$GLOBALS['TL_DCA']['tl_content']['fields']['npsAutoHover'] = array(
	'label'			=> &$GLOBALS['TL_LANG']['tl_content']['npsAutoHover'],
	'inputType'		=> 'checkbox',
	'eval'			=> array('tl_class'=>'w50'),
	'sql'			=> "char(1) NOT NULL default ''"
);
$GLOBALS['TL_DCA']['tl_content']['fields']['npsAutoStart'] = array(
	'label'			=> &$GLOBALS['TL_LANG']['tl_content']['npsAutoStart'],
	'inputType'		=> 'checkbox',
	'eval'			=> array('tl_class'=>'clr w50'),
	'sql'			=> "char(1) NOT NULL default ''"
);
$GLOBALS['TL_DCA']['tl_content']['fields']['npsPause'] = array (
	'label'			=> &$GLOBALS['TL_LANG']['tl_content']['npsPause'],
	'inputType'		=> 'text',
	'default'		=> '4000',
	'eval'			=> array('maxlength'=>4, 'mandatory'=>true, 'rgxp'=>'digit', 'nospace'=>true, 'tl_class'=>'w50'),
	'sql'			=> "varchar(5) NOT NULL default ''"
);
$GLOBALS['TL_DCA']['tl_content']['fields']['npsAutoHover'] = array(
	'label'			=> &$GLOBALS['TL_LANG']['tl_content']['npsAutoHover'],
	'inputType'		=> 'checkbox',
	'eval'			=> array('tl_class'=>'w50'),
	'sql'			=> "char(1) NOT NULL default ''"
);
$GLOBALS['TL_DCA']['tl_content']['fields']['npsAutoDelay'] = array (
	'label'			=> &$GLOBALS['TL_LANG']['tl_content']['npsAutoDelay'],
	'inputType'		=> 'text',
	'default'		=> '0',
	'eval'			=> array('maxlength'=>4, 'mandatory'=>true, 'rgxp'=>'digit', 'nospace'=>true, 'tl_class'=>'w50'),
	'sql'			=> "varchar(5) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['npsAutoDirection'] = array (
	'label'			=> &$GLOBALS['TL_LANG']['tl_content']['npsAutoDirection'],
	'inputType'		=> 'select',
	'options' 		=> array('next', 'prev'),
	'eval'			=> array('tl_class'=>'w50'),
	'reference'     => &$GLOBALS['TL_LANG']['tl_content']['npsAutoDirectionItems'],
	'sql'			=> "varchar(255) NOT NULL default ''"
);

// Modify Display Slides
$GLOBALS['TL_DCA']['tl_content']['fields']['npsDisplaySlide'] = array(
	'label'			=> &$GLOBALS['TL_LANG']['tl_content']['npsDisplaySlide'],
	'inputType'		=> 'checkbox',
	'eval'			=> array('tl_class'=>'clr','submitOnChange'=>true),
	'sql'			=> "char(1) NOT NULL default ''"
);
$GLOBALS['TL_DCA']['tl_content']['fields']['npsMinSlides'] = array (
	'label'			=> &$GLOBALS['TL_LANG']['tl_content']['npsMinSlides'],
	'inputType'		=> 'text',
	'default'		=> '1',
	'eval'			=> array('tl_class'=>'w50','rgxp'=>'digit', 'nospace'=>true),
	'sql'			=> "char(4) NOT NULL default ''"
);
$GLOBALS['TL_DCA']['tl_content']['fields']['npsMaxSlides'] = array (
	'label'			=> &$GLOBALS['TL_LANG']['tl_content']['npsMaxSlides'],
	'inputType'		=> 'text',
	'default'		=> '1',
	'eval'			=> array('tl_class'=>'w50','rgxp'=>'digit', 'nospace'=>true,'mandatory'=>true),
	'sql'			=> "char(4) NOT NULL default ''"
);
$GLOBALS['TL_DCA']['tl_content']['fields']['npsMoveSlides'] = array (
	'label'			=> &$GLOBALS['TL_LANG']['tl_content']['npsMoveSlides'],
	'inputType'		=> 'text',
	'eval'			=> array('tl_class'=>'w50','rgxp'=>'digit', 'nospace'=>true,'mandatory'=>true),
	'sql'			=> "char(4) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['npsSlideWidth'] = array (
	'label'			=> &$GLOBALS['TL_LANG']['tl_content']['npsSlideWidth'],
	'inputType'		=> 'text',
	'default'		=> '0',
	'eval'			=> array('tl_class'=>'w50','rgxp'=>'digit', 'nospace'=>true,'mandatory'=>true),
	'sql'			=> "char(4) NOT NULL default ''"
);

// TOUCH
$GLOBALS['TL_DCA']['tl_content']['fields']['npsTouchEnabled'] = array(
	'label'			=> &$GLOBALS['TL_LANG']['tl_content']['npsTouchEnabled'],
	'inputType'		=> 'checkbox',
	'eval'			=> array('tl_class'=>'clr','submitOnChange'=>true),
	'sql'			=> "char(1) NOT NULL default ''"
);
$GLOBALS['TL_DCA']['tl_content']['fields']['npsOneToOneTouch'] = array(
	'label'			=> &$GLOBALS['TL_LANG']['tl_content']['npsOneToOneTouch'],
	'inputType'		=> 'checkbox',
	'eval'			=> array('tl_class'=>'clr w50 m12'),
	'sql'			=> "char(1) NOT NULL default ''"
);
$GLOBALS['TL_DCA']['tl_content']['fields']['npsSwipeThreshold'] = array (
	'label'			=> &$GLOBALS['TL_LANG']['tl_content']['npsSwipeThreshold'],
	'inputType'		=> 'text',
	'default'		=> '50',
	'eval'			=> array('maxlength'=>4, 'mandatory'=>true, 'rgxp'=>'digit', 'nospace'=>true, 'tl_class'=>'w50'),
	'sql'			=> "varchar(255) NOT NULL default ''"
);
$GLOBALS['TL_DCA']['tl_content']['fields']['npsPreventDefaultSwipeX'] = array(
	'label'			=> &$GLOBALS['TL_LANG']['tl_content']['npsPreventDefaultSwipeX'],
	'inputType'		=> 'checkbox',
	'eval'			=> array('tl_class'=>'clr w50'),
	'sql'			=> "char(1) NOT NULL default ''"
);
$GLOBALS['TL_DCA']['tl_content']['fields']['npsPreventDefaultSwipeY'] = array(
	'label'			=> &$GLOBALS['TL_LANG']['tl_content']['npsPreventDefaultSwipeY'],
	'inputType'		=> 'checkbox',
	'eval'			=> array('tl_class'=>'w50'),
	'sql'			=> "char(1) NOT NULL default ''"
);

// PAGER
$GLOBALS['TL_DCA']['tl_content']['fields']['npsPager'] = array(
	'label'			=> &$GLOBALS['TL_LANG']['tl_content']['npsPager'],
	'inputType'		=> 'checkbox',
	'eval'			=> array('tl_class'=>'clr','submitOnChange'=>true),
	'sql'			=> "char(1) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['npsPagerType'] = array (
	'label'			=> &$GLOBALS['TL_LANG']['tl_content']['npsPagerType'],

	'inputType'		=> 'select',
	'options' 		=> array('full', 'short'),
	'eval'			=> array('tl_class'=>'w50'),
	'reference'     => &$GLOBALS['TL_LANG']['tl_content']['npsPagerTypeItems'],
	'sql'			=> "varchar(255) NOT NULL default ''"
);
$GLOBALS['TL_DCA']['tl_content']['fields']['npsPagerShortSeparator'] = array (
	'label'			=> &$GLOBALS['TL_LANG']['tl_content']['npsPagerShortSeparator'],
	'inputType'		=> 'text',
	'default'		=> '/',
	'eval'			=> array('tl_class'=>'w50', 'mandatory'=>true),
	'sql'			=> "varchar(255) NOT NULL default ''"
);
$GLOBALS['TL_DCA']['tl_content']['fields']['npsPagerSelector'] = array (
	'label'			=> &$GLOBALS['TL_LANG']['tl_content']['npsPagerSelector'],
	'inputType'		=> 'text',
	'eval'			=> array('tl_class'=>'w50','preserveTags' =>true),
	'sql'			=> "varchar(255) NOT NULL default ''"
);
$GLOBALS['TL_DCA']['tl_content']['fields']['npsPagerCustom'] = array (
	'label'			=> &$GLOBALS['TL_LANG']['tl_content']['npsPagerCustom'],
	'inputType'		=> 'text',
	'explanation'	=> 'npsPagerCustom',
	'eval'			=> array('tl_class'=>'w50', 'helpwizard' => true,'preserveTags' =>true),
	'sql'			=> "varchar(255) NOT NULL default ''"
);


// CALLBACKS
$GLOBALS['TL_DCA']['tl_content']['fields']['npsCallbacks'] = array(
	'label'			=> &$GLOBALS['TL_LANG']['tl_content']['npsCallbacks'],
	'inputType'		=> 'checkbox',
	'eval'			=> array('tl_class'=>'clr','submitOnChange'=>true),
	'sql'			=> "char(1) NOT NULL default ''"
);
$GLOBALS['TL_DCA']['tl_content']['fields']['npsOnSliderLoad'] = array(
	'label'			=> &$GLOBALS['TL_LANG']['tl_content']['npsOnSliderLoad'],
	'inputType'		=> 'textarea',
	'explanation'	=> 'callbacks',
	'eval'			=> array('style'=>'height:100px;','helpwizard' => true,'mandatory'=>false,'allowHtml'=>true,'preserveTags' =>true),
	'sql'			=> "mediumtext NULL"
);
$GLOBALS['TL_DCA']['tl_content']['fields']['npsOnSlideBefore'] = array(
	'label'			=> &$GLOBALS['TL_LANG']['tl_content']['npsOnSlideBefore'],
	'inputType'		=> 'textarea',
	'explanation'	=> 'callbacks',
	'eval'			=> array('style'=>'height:100px;','helpwizard' => true,'mandatory'=>false,'allowHtml'=>true,'preserveTags' =>true),
	'sql'			=> "mediumtext NULL"
);
$GLOBALS['TL_DCA']['tl_content']['fields']['npsOnSlideAfter'] = array(
	'label'			=> &$GLOBALS['TL_LANG']['tl_content']['npsOnSlideAfter'],
	'inputType'		=> 'textarea',
	'explanation'	=> 'callbacks',
	'eval'			=> array('style'=>'height:100px;','helpwizard' => true,'mandatory'=>false,'allowHtml'=>true,'preserveTags' =>true),
	'sql'			=> "mediumtext NULL"
);
$GLOBALS['TL_DCA']['tl_content']['fields']['npsOnSlideNext'] = array(
	'label'			=> &$GLOBALS['TL_LANG']['tl_content']['npsOnSlideNext'],
	'inputType'		=> 'textarea',
	'explanation'	=> 'callbacks',
	'eval'			=> array('style'=>'height:100px;','helpwizard' => true,'mandatory'=>false,'allowHtml'=>true,'preserveTags' =>true),
	'sql'			=> "mediumtext NULL"
);
$GLOBALS['TL_DCA']['tl_content']['fields']['npsOnSlidePrev'] = array(
	'label'			=> &$GLOBALS['TL_LANG']['tl_content']['npsOnSlidePrev'],
	'inputType'		=> 'textarea',
	'explanation'	=> 'callbacks',
	'eval'			=> array('style'=>'height:100px;','helpwizard' => true,'mandatory'=>false,'allowHtml'=>true,'preserveTags' =>true),
	'sql'			=> "mediumtext NULL"
);
$GLOBALS['TL_DCA']['tl_content']['fields']['npsBuildPager'] = array(
	'label'			=> &$GLOBALS['TL_LANG']['tl_content']['npsBuildPager'],
	'inputType'		=> 'textarea',
	'explanation'	=> 'callbacks',
	'eval'			=> array('style'=>'height:100px;','helpwizard' => true,'mandatory'=>false,'allowHtml'=>true,'preserveTags' =>true),
	'sql'			=> "mediumtext NULL"
);

class easingclass {
	
	public function getEasingOptions(DataContainer $dc){
		return $GLOBALS['TL_LANG']['tl_content']['npsEasingModeItems'][$dc->activeRecord->npsEasingMode];
	}

}