<?php /**
 * Callbacks
 */
$GLOBALS['TL_LANG']['XPL']['callbacks'] = array
(
	array('onSliderLoad', 'function(currentIndex){  } // your code here<br>
	arguments:<br>
	currentIndex: element index of the current slide<br>
	}'),
	array('onSlideBefore', 'function($slideElement, oldIndex, newIndex){ } // your code here <br>
	arguments:<br>
	$slideElement: jQuery element of the destination element<br>
	oldIndex: element index of the previous slide (before the transition)<br>
 	newIndex: element index of the destination slide (after the transition)<br>
	}'),
	array('onLastSlide', 'function($slideElement, oldIndex, newIndex){ } // your code here <br>
	arguments:<br>
	$slideElement: jQuery element of the destination element<br>
	oldIndex: element index of the previous slide (before the transition)<br>
 	newIndex: element index of the destination slide (after the transition)<br>
	}'),
	array('onSlideAfter', 'function($slideElement, oldIndex, newIndex){ } // your code here <br>
	arguments:<br>
	$slideElement: jQuery element of the destination element<br>
	oldIndex: element index of the previous slide (before the transition)<br>
 	newIndex: element index of the destination slide (after the transition)<br>
	}'),
	array('onSlideNext', 'function($slideElement, oldIndex, newIndex){ } // your code here <br>
	arguments:<br>
	$slideElement: jQuery element of the destination element<br>
	oldIndex: element index of the previous slide (before the transition)<br>
 	newIndex: element index of the destination slide (after the transition)<br>
	}'),
	array('onSlidePrev', 'function($slideElement, oldIndex, newIndex){ } // your code here <br>
	arguments:<br>
	$slideElement: jQuery element of the destination element<br>
	oldIndex: element index of the previous slide (before the transition)<br>
 	newIndex: element index of the destination slide (after the transition)<br>
	}'),
	array('buildPager', 'function(slideIndex){ } // your code here')
);

// PAGER
$GLOBALS['TL_LANG']['XPL']['npsPagerCustom'] = array
(
	array('Use your own markup for a pager', 'HTML for the pager must be like this:<br><code>&lt;div id="myPager"&gt;<br>
&nbsp;&nbsp;&lt;a data-slide-index="0" href=""&gt;&lt;img src="image_1.jpg" /&gt;&lt;/a&gt;<br>
&nbsp;&nbsp;&lt;a data-slide-index="0" href=""&gt;&lt;img src="image_2.jpg" /&gt;&lt;/a&gt;<br>
&nbsp;&nbsp;&lt;a data-slide-index="0" href=""&gt;&lt;img src="image_3.jpg" /&gt;&lt;/a&gt;<br>
&lt;/div&gt;</code>')
);

// EASING
$GLOBALS['TL_LANG']['XPL']['easing'] = array
(
	array('Easing', 'Take care to deactivate CSS-Transitions if easing effect is "linear" or "swing"')
);
?>