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
$GLOBALS['TL_LANG']['tl_content']['nps']					= array('npslider', 'Erzeugt ein Slider Element.');

// DEFAULTS
$GLOBALS['TL_LANG']['tl_content']['npsType']				= array('Slider Modus', 'Wähle die Betriebsart: Start oder Stop Element.');
$GLOBALS['TL_LANG']['tl_content']['npsStart']				= array('Slider Startelement', 'Starte einen neuen Slider');
$GLOBALS['TL_LANG']['tl_content']['npsEnd']					= array('Slider Endelement', 'Beende den Slider');

// SIZE DIMENSIONS
$GLOBALS['TL_LANG']['tl_content']['npsSizeMode']			= array('Dimensionenverhalten', 'Wählen Sie hier, wie die Dimensionen des Sliders erstellt werden.');
$GLOBALS['TL_LANG']['tl_content']['npsAutoMode']			= array('Automatisch', 'Breite ist die komplett verfügbare des Elternelements, die Höhe wird durch das höchste Element bestimmt.');
$GLOBALS['TL_LANG']['tl_content']['npsManualMode']			= array('Manuell', 'Geben Sie hier die Breite und Höhe des Sliders ein.');
$GLOBALS['TL_LANG']['tl_content']['npsAdaptiveHeight']		= array('Automatische Höhe', 'Wählen Sie diese Option, wenn der Slider die Höhe auf das aktive Slide anpassen soll (adaptive Height).');
$GLOBALS['TL_LANG']['tl_content']['npsAdaptiveHeightSpeed']	= array('Geschwindigkeit der automatischen Höhe', 'Tragen Sie hier den Wert der Animationsgeschwindigkeit in Milisekunden(ms) ein.');
$GLOBALS['TL_LANG']['tl_content']['npsWidth']				= array('Slider Breite', 'Tragen Sie die Breite des Sliders ein.');
$GLOBALS['TL_LANG']['tl_content']['npsHeight']				= array('Slider Höhe', 'Tragen Sie die Höhe des Sliders ein.');

// EASING
$GLOBALS['TL_LANG']['tl_content']['npsEnableEasing']		= array('Erweiterte Übergänge aktivieren (Easing)', 'Zusätzliche Animationseffekte aktivieren.');
$GLOBALS['TL_LANG']['tl_content']['npsEasingMode']			= array('Übergangsanimation', 'Wählen Sie aus CSS- oder JavaScript Animationen aus.');
$GLOBALS['TL_LANG']['tl_content']['npsEasing']				= array('Animationseffekt', 'Wählen Sie Ihren gewünschten Easing-Effekt aus.');
$GLOBALS['TL_LANG']['tl_content']['npsEasingItems']['css']	= 'CSS';
$GLOBALS['TL_LANG']['tl_content']['npsEasingItems']['js'] 	= 'JavaScript';
$GLOBALS['TL_LANG']['tl_content']['npsEasingModeItems']['css']	= array('linear', 'ease', 'ease-in', 'ease-out', 'ease-in-out');
$GLOBALS['TL_LANG']['tl_content']['npsEasingModeItems']['js'] 	= array('linear','swing','easeInSine','easeOutSine','easeInOutSine','easeInQuad','easeOutQuad','easeInOutQuad','easeInCubic','easeOutCubic','easeInOutCubic','easeInQuart','easeOutQuart','easeInOutQuart','easeInQuint','easeOutQuint','easeInOutQuint','easeInExpo','easeOutExpo','easeInOutExpo','easeInCirc','easeOutCirc','easeInOutCirc','easeInBack','easeOutBack','easeInOutBack','easeInElastic','easeOutElastic','easeInOutElastic','easeInBounce','easeOutBounce','easeInOutBounce');

// CONTROLS
$GLOBALS['TL_LANG']['tl_content']['npsControls']			= array('Steuerungselemente einblenden', '"Weiter" und "Zurück" Links einblenden');
$GLOBALS['TL_LANG']['tl_content']['npsPrevText']			= array('Beschriftung für "zurück"', 'Tragen Sie hier die Beschriftung für den "zurück" Link ein.');
$GLOBALS['TL_LANG']['tl_content']['npsNextText']			= array('Beschriftung für "weiter"', 'Tragen Sie hier die Beschriftung für den "weiter" Link ein.');
$GLOBALS['TL_LANG']['tl_content']['npsPrevImage']			= array('Grafik für "zurück"', 'Wählen Sie hier die Grafik für den "zurück" Link aus (anstelle des Text).');
$GLOBALS['TL_LANG']['tl_content']['npsNextImage']			= array('Grafik für "weiter"', 'Wählen Sie hier die Grafik für den "weiter" Link aus (anstelle des Text).');
$GLOBALS['TL_LANG']['tl_content']['npsOwnNavContainer']		= array('Eigener Container für Steuerungselemente vergeben', 'Aktiviert die Eingabemöglichkeit, um eigene IDs für "zurück" und "weiter" zu vergeben');
$GLOBALS['TL_LANG']['tl_content']['npsPrevSelector']		= array('ID für "Zurück"-Container', 'Tragen Sie hier die ID des "Zurück"-Container ein (z.B. prev-container). # wird automatisch hinzugefügt.');
$GLOBALS['TL_LANG']['tl_content']['npsNextSelector']		= array('ID für "Weiter"-Container', 'Tragen Sie hier die ID des "Weiter"-Container ein (z.B. next-container). # wird automatisch hinzugefügt.');
$GLOBALS['TL_LANG']['tl_content']['npsAutoControls']		= array('Autostart Steuerungselemente einblenden', '"Start" und "Stop" Schaltflächen bei Autoplay einblenden');
$GLOBALS['TL_LANG']['tl_content']['npsAutoControlsCombine']	= array('Steuerungselemente vereinfachen', 'Nur "Start" oder "Stop" Schaltflächen einblenden');
$GLOBALS['TL_LANG']['tl_content']['npsStartText']			= array('Beschriftung für "Start"', 'Tragen Sie hier die Beschriftung für die "Start" Schaltfläche ein.');
$GLOBALS['TL_LANG']['tl_content']['npsStopText']			= array('Beschriftung für "Stop"', 'Tragen Sie hier die Beschriftung für die "Stop" Schaltfläche ein.');
$GLOBALS['TL_LANG']['tl_content']['npsCaptions']			= array('Untertitel aktivieren', 'Generiert bei Bilder aus dem &lt;title&gt; Attribut einen Untertitel');
$GLOBALS['TL_LANG']['tl_content']['npsHideControlOnEnd']	= array('Steuerung am Ende deaktivieren', 'Deaktiviert die Kontrollelemente nach der letzten Animation (wenn Endlosschleife nicht aktiviert ist) und fügt die Klasse "disabled" hinzu.');

// ANIMATION
$GLOBALS['TL_LANG']['tl_content']['npsInfiniteLoop']		= array('Endlosschleife', 'Den Slider endlos laufen lassen.');
$GLOBALS['TL_LANG']['tl_content']['npsRandomStart']			= array('Zufallsstart', 'Beginnt mit einem zufälligem Slide');
$GLOBALS['TL_LANG']['tl_content']['npsMode']				= array('Animation', 'Wählen Sie die Animation des Slider.');
$GLOBALS['TL_LANG']['tl_content']['npsSlideMargin']			= array('Abstand', 'Tragen Sie hier einen Abstand zwischen den einzelnen Elementen ein.');
/* MODE SELECTs */
$GLOBALS['TL_LANG']['tl_content']['npsModeItems']['horizontal'] = 'Horizontal (links <> rechts)';
$GLOBALS['TL_LANG']['tl_content']['npsModeItems']['vertical'] = 'Vertikal (oben <> unten)';
$GLOBALS['TL_LANG']['tl_content']['npsModeItems']['fade'] = 'Überblendeffekt';

$GLOBALS['TL_LANG']['tl_content']['npsSpeed']				= array('Geschwindigkeit', 'Tragen Sie die Geschwindigkeit zwischen den Wechseln der einzelnen Slide in Millisekunden (ms) ein.');
$GLOBALS['TL_LANG']['tl_content']['npsStartSlide']			= array('Beginnen mit Slide #', 'Nummer des zu startenden Slide.');

/* AUTO */
$GLOBALS['TL_LANG']['tl_content']['npsAuto']				= array('Automatisch wechseln', 'Den Slider automatisch ohne zu klicken wechseln lassen');
$GLOBALS['TL_LANG']['tl_content']['npsPause']				= array('Pause', 'Die Dauer in Millisekunden (ms) zwischen jeder Animation.');
$GLOBALS['TL_LANG']['tl_content']['npsAutoHover']			= array('Beim Überfahren pausieren', 'Beim Überfahren mit der Maus den Slider anhalten.');
$GLOBALS['TL_LANG']['tl_content']['npsAutoStart']			= array('Animation per Start/Stop steuern', 'Die Animation des Slider per Steuerung beginnen / enden lassen.');
$GLOBALS['TL_LANG']['tl_content']['npsAutoDirection']		= array('Animationsrichtung', 'Wählen Sie die Richtung der animation. Achtung: Achse bei "Animation" auswählen.');
$GLOBALS['TL_LANG']['tl_content']['npsAutoDirectionItems']['next'] = 'nach rechts bzw. nach oben';
$GLOBALS['TL_LANG']['tl_content']['npsAutoDirectionItems']['prev'] = 'nach links bzw. nach unten';
$GLOBALS['TL_LANG']['tl_content']['npsAutoDelay']			= array('Verzögerung beim Start', 'Die Dauer in Millisekunden (ms) bevor die erste Animation startet.');


// CALLBACKS
$GLOBALS['TL_LANG']['tl_content']['npsCallbacks']			= array('Callback Funktionen aktivieren', 'Eigene Callback Funktionen definieren. Achtung: Nur für Profis.');
$GLOBALS['TL_LANG']['tl_content']['npsOnSliderLoad']		= array('onSliderLoad', 'Führt eingetragene Funktion nach der kompletten Initialisierung des Sliders.');
$GLOBALS['TL_LANG']['tl_content']['npsOnSlideBefore']		= array('onSlideBefore', 'Führt eingetragene Funktion vor jeder Animation aus.');
$GLOBALS['TL_LANG']['tl_content']['npsOnSlideAfter']		= array('onSlideAfter', 'Führt eingetragene Funktion nach jeder Animation aus.');
$GLOBALS['TL_LANG']['tl_content']['npsOnSlideNext']			= array('onSlideNext', 'Führt eingetragene Funktion nach Klick auf "weiter" aus.');
$GLOBALS['TL_LANG']['tl_content']['npsOnSlidePrev']			= array('onSlidePrev', 'Führt eingetragene Funktion nach Klick auf "zurück" aus.');
$GLOBALS['TL_LANG']['tl_content']['npsBuildPager']			= array('buildPager', 'Ruft die eingetragene Funktion nach jedem Pager Element auf.');

// TOUCH
$GLOBALS['TL_LANG']['tl_content']['npsTouchEnabled']		= array('Touch aktivieren', 'Den Slider mit Handgesten steuern.');
$GLOBALS['TL_LANG']['tl_content']['npsOneToOneTouch']		= array('Finger folgen', 'Der Slide folgt dem Finger bei Bewegung (außer bei Effekt "fade")');
$GLOBALS['TL_LANG']['tl_content']['npsSwipeThreshold']		= array('Touch Empfindlichkeit', 'Bewegte Anzahl der Pixel, um einen Effekt auszulösen');
$GLOBALS['TL_LANG']['tl_content']['npsPreventDefaultSwipeX']	= array('Links - Rechts deaktivieren', 'Der Slider reagiert nicht entlang der x-Achse.');
$GLOBALS['TL_LANG']['tl_content']['npsPreventDefaultSwipeY']	= array('Hoch - Runter deaktivieren', 'Der Slider reagiert nicht entlang der y-Achse.');

// PAGER
$GLOBALS['TL_LANG']['tl_content']['npsPager']				= array('Pager einfügen', 'Einen Pager hinzufügen');
$GLOBALS['TL_LANG']['tl_content']['npsPagerType']			= array('Darstellungsform Pager', 'Wählen Sie die Darstellung des Pages aus.');
$GLOBALS['TL_LANG']['tl_content']['npsPagerShortSeparator']	= array('Trennzeichen', 'Verwendetes Zeichen zwischen den Pager-Nummern. Beispiel: Eingabe "von" wird als "1 von 4" angezeigt');
$GLOBALS['TL_LANG']['tl_content']['npsPagerTypeItems']['full']	= 'Komplette Darstellung (1,2,3,...)';
$GLOBALS['TL_LANG']['tl_content']['npsPagerTypeItems']['short'] = 'Verkürzte Darstellung (1/4)';
$GLOBALS['TL_LANG']['tl_content']['npsPagerSelector']		= array('Anderen Pager Bereich wählen', 'Hier können Sie einen eigenen HTML Container für den Pager eintragen. In diesen wird dann der Pager integriert. Bsp.: #pagerNew');
$GLOBALS['TL_LANG']['tl_content']['npsPagerCustom']			= array('Eigenen Pager verwenden', 'Geben Sie hier den HTML Bereich an, in dem der HTML Code des eigenen Pager zu finden ist. Bsp.: #myPager');

// TICKER
$GLOBALS['TL_LANG']['tl_content']['npsTicker']				= array('Ticker Modus', 'Den Inhalt des Sliders als Ticker automatisch durchlaufen lassen.');
$GLOBALS['TL_LANG']['tl_content']['npsTickerHover']			= array('Ticker anhalten', 'Den Ticker beim Überfahren anhalten.');

// XTENDED
$GLOBALS['TL_LANG']['tl_content']['npsUseCSS']				= array('CSS Animationen deaktivieren', 'jQuery animate() Funktion anstatt CSS3 Animationen verwenden.');
$GLOBALS['TL_LANG']['tl_content']['npsVideo']				= array('Video Optimierung', 'Bindet fitvids.js für eine erhöhte Video-Performance ein');
$GLOBALS['TL_LANG']['tl_content']['npsDisplaySlide']		= array('Bühnenverhalten', 'Das Verhalten der einzelnen Slides verändern.');
$GLOBALS['TL_LANG']['tl_content']['npsMinSlides']			= array('Minimale Anzahl sichtbarer Slides', 'Tragen Sie hier die minimale Anzahl sicherbarer Slides ein. (Achtung: Breite der einzelnen Slides anpassen).');
$GLOBALS['TL_LANG']['tl_content']['npsMaxSlides']			= array('Maximale Anzahl sichtbarer Slides', 'Tragen Sie hier die maximale Anzahl sicherbarer Slides ein. (Achtung: Breite der einzelnen Slides anpassen).');
$GLOBALS['TL_LANG']['tl_content']['npsMoveSlides']			= array('Anzahl der zu bewegenden Slides', 'Anzahl der Slides, die auf einmal bewegt werden sollen. ACHTUNG: Zahl muss zwischen der minimalen und maximalen gewählten Anzahl von sichtbaren Slides liegen.');
$GLOBALS['TL_LANG']['tl_content']['npsSlideWidth']			= array('Breite eines Slides', 'Tragenn Sie hier die absolute Breite eines Slides ein.');
$GLOBALS['TL_LANG']['tl_content']['npsPreloadImages']		= array('Bilder vorausladen', 'Wählen Sie die Methode aus, welche Bilder geladen werden sollen');
$GLOBALS['TL_LANG']['tl_content']['npsPreloadImagesItems']['all']		= 'Alle Bilder';
$GLOBALS['TL_LANG']['tl_content']['npsPreloadImagesItems']['visible']	= 'Nur die sichtbaren Bilder';

// LEGENDS
$GLOBALS['TL_LANG']['tl_content']['npsBasics_legend']		= 'Basis-Einstellungen';
$GLOBALS['TL_LANG']['tl_content']['npsAnimation_legend']	= 'Animationseinstellungen';
$GLOBALS['TL_LANG']['tl_content']['npsControls_legend']		= 'Steuerungseinstellungen';
$GLOBALS['TL_LANG']['tl_content']['npsTouch_legend']		= 'Touch-Einstellungen';
$GLOBALS['TL_LANG']['tl_content']['npsPager_legend']		= 'Pager-Einstellungen';
$GLOBALS['TL_LANG']['tl_content']['npsExtended_legend']		= 'Erweiterte Einstellungen';
$GLOBALS['TL_LANG']['tl_content']['npsCallbacks_legend']	= 'Callbacks';


?>