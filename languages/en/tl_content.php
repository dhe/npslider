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
 * @copyright  neckarpixel David Hestler 2013
 * @author     neckarpixel David Hestler 
 * @package    npslider 
 * @license    GNU/LGPL 
 * @filesource
 */


/**
 * Fields
 */
$GLOBALS['TL_LANG']['tl_content']['nps']					= array('npslider', 'Generate a Slider Element.');

// DEFAULTS
$GLOBALS['TL_LANG']['tl_content']['npsType']				= array('npslider mode', 'Choose the slider mode (start or stop)');
$GLOBALS['TL_LANG']['tl_content']['npsStart']				= array('Slider start element', 'Start a new slider');
$GLOBALS['TL_LANG']['tl_content']['npsEnd']					= array('Slider end element', 'Finish the slider');

// SIZE DIMENSIONS
$GLOBALS['TL_LANG']['tl_content']['npsSizeMode']			= array('Size properties', 'Choose the method to get the dimensions of the slider.');
$GLOBALS['TL_LANG']['tl_content']['npsAutoMode']			= array('Automatic', 'Width is full available width of parent element, height is defined by highest element.');
$GLOBALS['TL_LANG']['tl_content']['npsManualMode']			= array('Manual', 'Define width and height of the slider.');
$GLOBALS['TL_LANG']['tl_content']['npsAdaptiveHeight']		= array('Adaptive Height', 'Dynamically adjust slider height based on each slide"s height');
$GLOBALS['TL_LANG']['tl_content']['npsAdaptiveHeightSpeed']	= array('Adaptive Height speed', 'Slide height transition duration (in ms)');
$GLOBALS['TL_LANG']['tl_content']['npsWidth']				= array('Slider width', 'Enter width of slider');
$GLOBALS['TL_LANG']['tl_content']['npsHeight']				= array('Slider height', 'Enter height of slider');

// EASING
$GLOBALS['TL_LANG']['tl_content']['npsEnableEasing']		= array('Easing', 'Enable easing');
$GLOBALS['TL_LANG']['tl_content']['npsEasingMode']			= array('Animation mode', 'Choose your animation mode');
$GLOBALS['TL_LANG']['tl_content']['npsEasing']				= array('Animation effekt', 'Choose your easing mode');
$GLOBALS['TL_LANG']['tl_content']['npsEasingItems']['css']	= 'CSS';
$GLOBALS['TL_LANG']['tl_content']['npsEasingItems']['js'] 	= 'JavaScript';
$GLOBALS['TL_LANG']['tl_content']['npsEasingModeItems']['css']	= array('linear', 'ease', 'ease-in', 'ease-out', 'ease-in-out');
$GLOBALS['TL_LANG']['tl_content']['npsEasingModeItems']['js'] 	= array('linear','swing','easeInSine','easeOutSine','easeInOutSine','easeInQuad','easeOutQuad','easeInOutQuad','easeInCubic','easeOutCubic','easeInOutCubic','easeInQuart','easeOutQuart','easeInOutQuart','easeInQuint','easeOutQuint','easeInOutQuint','easeInExpo','easeOutExpo','easeInOutExpo','easeInCirc','easeOutCirc','easeInOutCirc','easeInBack','easeOutBack','easeInOutBack','easeInElastic','easeOutElastic','easeInOutElastic','easeInBounce','easeOutBounce','easeInOutBounce');

// CONTROLS
$GLOBALS['TL_LANG']['tl_content']['npsControls']			= array('Activate controls', 'If checked, "Next" / "Prev" controls will be added');
$GLOBALS['TL_LANG']['tl_content']['npsPrevText']			= array('Text for "prev"', 'Text to be used for the "Prev" control');
$GLOBALS['TL_LANG']['tl_content']['npsNextText']			= array('Text for "next"', 'Text to be used for the "Next" control');
$GLOBALS['TL_LANG']['tl_content']['npsPrevImage']			= array('Image for "prev"', 'Image to be used for the "Prev" control (instead of text)');
$GLOBALS['TL_LANG']['tl_content']['npsNextImage']			= array('Image for "next"', 'Image to be used for the "Next" control (instead of text)');
$GLOBALS['TL_LANG']['tl_content']['npsOwnNavContainer']		= array('Use own container for controls', 'Enable possibility to assign own html containers for the controls.');
$GLOBALS['TL_LANG']['tl_content']['npsPrevSelector']		= array('ID for "Prev" container', 'Enter the id of "Prev" container  (e.g. prev-container). # will be added automatically.');
$GLOBALS['TL_LANG']['tl_content']['npsNextSelector']		= array('ID for "Next" container', 'Enter the id of "Next" container  (e.g. next-container). # will be added automatically');
$GLOBALS['TL_LANG']['tl_content']['npsAutoControls']		= array('Show autostart controls', 'Show "Start" and "Stop" controls');
$GLOBALS['TL_LANG']['tl_content']['npsAutoControlsCombine']	= array('Combine auto controls', 'When slideshow is playing only "Stop" control is displayed and vice-versa');
$GLOBALS['TL_LANG']['tl_content']['npsStartText']			= array('Start text', 'Text to be used for the "Start" control');
$GLOBALS['TL_LANG']['tl_content']['npsStopText']			= array('Stop text', 'Text to be used for the "Stop" control');
$GLOBALS['TL_LANG']['tl_content']['npsCaptions']			= array('Activate captions', 'Include image captions. Captions are derived from the image\'s title attribute');
$GLOBALS['TL_LANG']['tl_content']['npsHideControlOnEnd']	= array('Hide controls on end', 'If checked, "Next" control will be hidden on last slide and vice-versa if loop isn\'t enabled.');

// ANIMATION
$GLOBALS['TL_LANG']['tl_content']['npsInfiniteLoop']		= array('Loop', 'If checked, clicking "Next" while on the last slide will transition to the first slide and vice-versa');
$GLOBALS['TL_LANG']['tl_content']['npsRandomStart']			= array('Random start', 'Start slider on a random slide');
$GLOBALS['TL_LANG']['tl_content']['npsMode']				= array('Animation', 'Choose your animation mode');
$GLOBALS['TL_LANG']['tl_content']['npsSlideMargin']			= array('Margin', 'Margin between each slide');
/* MODE SELECTs */
$GLOBALS['TL_LANG']['tl_content']['npsModeItems']['horizontal'] = 'Horizontal (left <> right)';
$GLOBALS['TL_LANG']['tl_content']['npsModeItems']['vertical'] = 'Vertical (top <> bottom)';
$GLOBALS['TL_LANG']['tl_content']['npsModeItems']['fade'] = 'Fade';

$GLOBALS['TL_LANG']['tl_content']['npsSpeed']				= array('Speed', 'Slide transition duration (in ms)');
$GLOBALS['TL_LANG']['tl_content']['npsStartSlide']			= array('Starting slide #', 'Starting slide index');

/* AUTO */
$GLOBALS['TL_LANG']['tl_content']['npsAuto']				= array('Auto change', 'Slides will automatically transition');
$GLOBALS['TL_LANG']['tl_content']['npsPause']				= array('Pause', 'The amount of time (in ms) between each auto transition');
$GLOBALS['TL_LANG']['tl_content']['npsAutoHover']			= array('Pause on hover', 'Auto show will pause when mouse hovers over slider');
$GLOBALS['TL_LANG']['tl_content']['npsAutoStart']			= array('Autostart manuallay', 'Start animation by clicking on start / stop');
$GLOBALS['TL_LANG']['tl_content']['npsAutoDirection']		= array('Direction of animation', 'Choose direction of animation.');
$GLOBALS['TL_LANG']['tl_content']['npsAutoDirectionItems']['next'] = 'to the right or rather to top';
$GLOBALS['TL_LANG']['tl_content']['npsAutoDirectionItems']['prev'] = 'to the left or rather top bottom';
$GLOBALS['TL_LANG']['tl_content']['npsAutoDelay']			= array('Delay', 'Time (in ms) auto show should wait before starting');


// CALLBACKS
$GLOBALS['TL_LANG']['tl_content']['npsCallbacks']			= array('Enable callbacks', 'Define own callbacks. Only for professionals.');
$GLOBALS['TL_LANG']['tl_content']['npsOnSliderLoad']		= array('onSliderLoad', 'Executes immediately after the slider is fully loaded');
$GLOBALS['TL_LANG']['tl_content']['npsOnSlideBefore']		= array('onSlideBefore', 'Executes immediately before each slide transition.');
$GLOBALS['TL_LANG']['tl_content']['npsOnSlideAfter']		= array('onSlideAfter', 'Executes immediately after each slide transition. Function argument is the current slide element (when transition completes)..');
$GLOBALS['TL_LANG']['tl_content']['npsOnSlideNext']			= array('onSlideNext', 'Executes immediately before each "Next" slide transition. Function argument is the target (next) slide element.');
$GLOBALS['TL_LANG']['tl_content']['npsOnSlidePrev']			= array('onSlidePrev', 'Executes immediately before each "Prev" slide transition. Function argument is the target (prev) slide element.');
$GLOBALS['TL_LANG']['tl_content']['npsBuildPager']			= array('buildPager', 'If supplied, function is called on every slide element, and the returned value is used as the pager item markup.');

// TOUCH
$GLOBALS['TL_LANG']['tl_content']['npsTouchEnabled']		= array('Enable Touch', 'Slider will allow touch swipe transitions');
$GLOBALS['TL_LANG']['tl_content']['npsOneToOneTouch']		= array('One to touch', 'If checked, non-fade slides follow the finger as it swipes');
$GLOBALS['TL_LANG']['tl_content']['npsSwipeThreshold']		= array('Touch sensitivity', 'Amount of pixels a touch swipe needs to exceed in order to execute a slide transition.');
$GLOBALS['TL_LANG']['tl_content']['npsPreventDefaultSwipeX']	= array('Block x-axis', 'If checked, touch screen will not move along the x-axis as the finger swipes');
$GLOBALS['TL_LANG']['tl_content']['npsPreventDefaultSwipeY']	= array('Block y-axis', 'If checked, touch screen will not move along the y-axis as the finger swipes');

// PAGER
$GLOBALS['TL_LANG']['tl_content']['npsPager']				= array('Insert a Pager', 'Insert a Pager');
$GLOBALS['TL_LANG']['tl_content']['npsPagerType']			= array('Pager type', 'If \'full\', a pager link will be generated for each slide. If \'short\', a x / y pager will be used (ex. 1 / 5).');
$GLOBALS['TL_LANG']['tl_content']['npsPagerShortSeparator']	= array('Separator', 'Element used to populate the populate the pager.');
$GLOBALS['TL_LANG']['tl_content']['npsPagerTypeItems']['full']	= 'Full (1,2,3,...)';
$GLOBALS['TL_LANG']['tl_content']['npsPagerTypeItems']['short'] = 'Short (1/4)';
$GLOBALS['TL_LANG']['tl_content']['npsPagerSelector']		= array('Pager selector', 'Element used to populate the populate the pager. By default, the pager is appended to the bx-viewport');
$GLOBALS['TL_LANG']['tl_content']['npsPagerCustom']			= array('Use own pager', 'Parent element to be used as the pager. Parent element must contain a <a data-slide-index="x"> element for each slide.');

// TICKER
$GLOBALS['TL_LANG']['tl_content']['npsTicker']				= array('Ticker Mode', 'Use slider in ticker mode (similar to a news ticker)');
$GLOBALS['TL_LANG']['tl_content']['npsTickerHover']			= array('Pause Ticker', 'Pause ticker on hover');

// XTENDED
$GLOBALS['TL_LANG']['tl_content']['npsUseCSS']				= array('Enable CSS transmitions', 'If true, CSS transitions will be used for horizontal and vertical slide animations (this uses native hardware acceleration). If false, jQuery animate() will be used.');
$GLOBALS['TL_LANG']['tl_content']['npsVideo']				= array('Video Optimisation', 'Includes fitvids.js for better a video performance.');
$GLOBALS['TL_LANG']['tl_content']['npsDisplaySlide']		= array('Stage properties', 'Change properties of the stage');
$GLOBALS['TL_LANG']['tl_content']['npsMinSlides']			= array('The minimum number of slides to be shown', 'The minimum number of slides to be shown. Slides will be sized down if carousel becomes smaller than the original size.');
$GLOBALS['TL_LANG']['tl_content']['npsMaxSlides']			= array('The maximum number of slides to be shown', 'The maximum number of slides to be shown. Slides will be sized up if carousel becomes larger than the original size.');
$GLOBALS['TL_LANG']['tl_content']['npsMoveSlides']			= array('The number of slides to move on transition.', 'The number of slides to move on transition. This value must be >= minSlides, and <= maxSlides. If zero (default), the number of fully-visible slides will be used.');
$GLOBALS['TL_LANG']['tl_content']['npsSlideWidth']			= array('Slide Width', 'The width of each slide. This setting is required for all horizontal carousels!');
$GLOBALS['TL_LANG']['tl_content']['npsPreloadImages']		= array('Preload Images', 'If "all", preloads all images before starting the slider. If "visible", preloads only images in the initially visible slides before starting the slider (tip: use "visible" if all slides are identical dimensions)n');
$GLOBALS['TL_LANG']['tl_content']['npsPreloadImagesItems']['all']		= 'All';
$GLOBALS['TL_LANG']['tl_content']['npsPreloadImagesItems']['visible']	= 'Visible';

// LEGENDS
$GLOBALS['TL_LANG']['tl_content']['npsBasics_legend']		= 'Basic Settings';
$GLOBALS['TL_LANG']['tl_content']['npsAnimation_legend']	= 'Animation Settings';
$GLOBALS['TL_LANG']['tl_content']['npsControls_legend']		= 'Control Settings';
$GLOBALS['TL_LANG']['tl_content']['npsTouch_legend']		= 'Touch Settings';
$GLOBALS['TL_LANG']['tl_content']['npsPager_legend']		= 'Pager Settings';
$GLOBALS['TL_LANG']['tl_content']['npsExtended_legend']		= 'Extended Settings';
$GLOBALS['TL_LANG']['tl_content']['npsCallbacks_legend']	= 'Callbacks';


?>