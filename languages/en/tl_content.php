<?php if (!defined('TL_ROOT')) die('You cannot access this file directly!');

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
 * @filesource
 */


/**
 * Fields
 */
$GLOBALS['TL_LANG']['tl_content']['npslider']					= array('np Slider', 'Create a slider element.');

$GLOBALS['TL_LANG']['tl_content']['npslider_type']					= array('np Slider operation mode', 'Please select the operation mode of the slider element.');
$GLOBALS['TL_LANG']['tl_content']['npslider_start']					= array('Slider start element', 'Marks the beginning of an slide pane that spans several content elements.');
$GLOBALS['TL_LANG']['tl_content']['npslider_end']					= array('Slider end element', 'Marks the end of an slide pane that spans several content elements.');
$GLOBALS['TL_LANG']['tl_content']['npslider_width']					= array('Slider width', 'Width of the Slider');
$GLOBALS['TL_LANG']['tl_content']['npslider_height']					= array('Slider height', 'Height of the Slider');

$GLOBALS['TL_LANG']['tl_content']['npslider_loop']					= array('Infinite Loop', 'Display the first slide successively after the last');
$GLOBALS['TL_LANG']['tl_content']['npslider_auto']					= array('Auto transitions', 'Make slide transitions occur automatically');
$GLOBALS['TL_LANG']['tl_content']['npslider_autoHover']					= array('Auto hover', 'Show  pause on mouse over');
$GLOBALS['TL_LANG']['tl_content']['npslider_autoStart']					= array('Auto start', 'Show will wait for "start" control to be clicked to activate');

/* ANIMATION & CONTROLS */
$GLOBALS['TL_LANG']['tl_content']['npslider_mode']					= array('Transition', 'Type of transition between each slide');
/* MODE SELECTs */
$GLOBALS['TL_LANG']['tl_content']['npslider_mode_items']['horizontal'] = 'Horizontal (left <> right)';
$GLOBALS['TL_LANG']['tl_content']['npslider_mode_items']['vertical'] = 'Vertical (top <> bottom)';
$GLOBALS['TL_LANG']['tl_content']['npslider_mode_items']['fade'] = 'Fade';

$GLOBALS['TL_LANG']['tl_content']['npslider_speed']					= array('Speed', 'In ms, duration of time slide transitions will occupy');
$GLOBALS['TL_LANG']['tl_content']['npslider_pause']					= array('Pause', 'In ms, the duration between each slide transition');
$GLOBALS['TL_LANG']['tl_content']['npslider_startingSlide']					= array('Starting slide', 'Show will start on specified slide.');

/* CONTROLS */
$GLOBALS['TL_LANG']['tl_content']['npslider_controls']					= array('Show sontrols', 'Display previous and next controls');
$GLOBALS['TL_LANG']['tl_content']['npslider_prevText']					= array('Previous text', 'Text displayed for "previous" control');
$GLOBALS['TL_LANG']['tl_content']['npslider_nextText']					= array('Next text', 'Text displayed for "next" control');
$GLOBALS['TL_LANG']['tl_content']['npslider_prevImage']					= array('Image for "prev"', 'Select image used instead for "previous"');
$GLOBALS['TL_LANG']['tl_content']['npslider_nextImage']					= array('Image for "next"', 'Select image used instead for "next"');

/* PAGER */
$GLOBALS['TL_LANG']['tl_content']['npslider_pager']					= array('Show pager', 'Display a numeric pager');
$GLOBALS['TL_LANG']['tl_content']['npslider_pagerLocation']					= array('Pager location', 'Location of pager');
$GLOBALS['TL_LANG']['tl_content']['npslider_pagerType']					= array('Pager type', 'If "full", pager displays 1,2,3... If "short" pager displays 1 / 4');
$GLOBALS['TL_LANG']['tl_content']['npslider_pagerShortSeparator']					= array('Pager separator', 'Characters used in between "short" pager numbers. Ex: value "of" would display 1 of 4');

/* PAGER SELECTs */
$GLOBALS['TL_LANG']['tl_content']['npslider_pagerLocation_items']['bottom'] = 'bottom';
$GLOBALS['TL_LANG']['tl_content']['npslider_pagerLocation_items']['top'] = 'top';
$GLOBALS['TL_LANG']['tl_content']['npslider_pagerType_items']['full'] = 'Full view (1,2,3,...)';
$GLOBALS['TL_LANG']['tl_content']['npslider_pagerType_items']['short'] = 'Short view (1/4)';

/* SLIDE Options */
$GLOBALS['TL_LANG']['tl_content']['npslider_displaySlide']					= array('Display behaviour', 'Change behaviour of slides');
$GLOBALS['TL_LANG']['tl_content']['npslider_displaySlideQty']					= array('Visible slide quenty', 'Number of slides to display at once');
$GLOBALS['TL_LANG']['tl_content']['npslider_moveSlideQty']					= array('Move slide quenty', 'Number of slides to move at once');
$GLOBALS['TL_LANG']['tl_content']['npslider_randomStart']					= array('Random start', 'Show start on a random slide');
$GLOBALS['TL_LANG']['tl_content']['npslider_hideControlOnEnd']					= array('Hide control on end', 'Hide "next" control on last slide and "prev" control on first.');


/* TICKER */
$GLOBALS['TL_LANG']['tl_content']['npslider_ticker']					= array('Ticker mode', 'Continuous motion ticker mode (similar to a news ticker)');
$GLOBALS['TL_LANG']['tl_content']['npslider_tickerSpeed']					= array('Ticker speed', 'Use a value between 1 and 5000 to determine ticker speed - the smaller the value the faster the ticker speed.');
$GLOBALS['TL_LANG']['tl_content']['npslider_tickerDirection']					= array('Ticker direction', 'Direction in which ticker show will traverse');
$GLOBALS['TL_LANG']['tl_content']['npslider_tickerHover']					= array('Ticker pause', 'Ticker will pause on mouseover');

/* TICKER SELECTs */
$GLOBALS['TL_LANG']['tl_content']['npslider_tickerDirection_items']['next'] = 'to the right // up';
$GLOBALS['TL_LANG']['tl_content']['npslider_tickerDirection_items']['prev'] = 'to the left // down';

/* CALLBACKS */
$GLOBALS['TL_LANG']['tl_content']['npslider_callbacks']					= array('Callback Funktionen aktivieren', 'Eigene Callback Funktionen definieren. Achtung: Nur für Profis.');
$GLOBALS['TL_LANG']['tl_content']['npslider_onBeforeSlide']					= array('onBeforeSlide', 'Performs provided function before every slide transition');
$GLOBALS['TL_LANG']['tl_content']['npslider_onAfterSlide']					= array('onAfterSlide', 'Performs provided function after every slide transition. Note: function will be performed on slider initialization');
$GLOBALS['TL_LANG']['tl_content']['npslider_onFirstSlide']					= array('onFirstSlide', 'Performs provided function when the first slide is reached');
$GLOBALS['TL_LANG']['tl_content']['npslider_onLastSlide']					= array('onLastSlide', 'Performs provided function when the last slide is reached');
$GLOBALS['TL_LANG']['tl_content']['npslider_onPrevSlide']					= array('onPrevSlide', 'Performs provided function when a "previous" slide transition is performed');
$GLOBALS['TL_LANG']['tl_content']['npslider_onNextSlide']					= array('onNextSlide', 'Performs provided function when a "next" slide transition is performed');
$GLOBALS['TL_LANG']['tl_content']['npslider_buildPager']					= array('buildPager', 'Calls provided function on each pager item');

/* LEGENDS */
$GLOBALS['TL_LANG']['tl_content']['sliderbasics_legend']      = 'Basic settings';
$GLOBALS['TL_LANG']['tl_content']['slideranimation_legend']      = 'Animation settings';
$GLOBALS['TL_LANG']['tl_content']['slidercontrol_legend']      = 'Controls';
$GLOBALS['TL_LANG']['tl_content']['sliderpagination_legend']      = 'Pagination';
$GLOBALS['TL_LANG']['tl_content']['sliderextended_legend']      = 'Advanced settings';
$GLOBALS['TL_LANG']['tl_content']['slidercallbacks_legend']      = 'Callbacks';
?>