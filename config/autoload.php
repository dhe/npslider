<?php

/**
 * Contao Open Source CMS
 * 
 * Copyright (C) 2005-2012 Leo Feyer
 * 
 * @package Npslider
 * @link    http://contao.org
 * @license http://www.gnu.org/licenses/lgpl-3.0.html LGPL
 */


/**
 * Register the namespaces
 */
ClassLoader::addNamespaces(array
(
	'neckarpixel',
));


/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
	// Classes
	'neckarpixel\npslider\generateSlider'			=> 'system/modules/npslider/elements/generateSlider.php',
	'neckarpixel\npslider\generateGallerySlides'	=> 'system/modules/npslider/elements/generateGallerySlides.php',
	'neckarpixel\npslider\generateNewsSlides'		=> 'system/modules/npslider/elements/generateNewsSlides.php',
	'neckarpixel\npslider\generateEventSlides'		=> 'system/modules/npslider/elements/generateEventSlides.php',
));


/**
 * Register the templates
 */
TemplateLoader::addFiles(array
(
	'ce_npslider'    => 'system/modules/npslider/templates',
	'ce_npslider_js'    => 'system/modules/npslider/templates',
));
