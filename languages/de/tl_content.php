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
$GLOBALS['TL_LANG']['tl_content']['npslider']					= array('npslider', 'Erstellen Sie ein Slider Element.');

$GLOBALS['TL_LANG']['tl_content']['npslider_type']					= array('npslider Betriebsart', 'Bitte wählen Sie die Betriebsart (Beginn oder Ende) des Slider-Elements.');
$GLOBALS['TL_LANG']['tl_content']['npslider_start']					= array('Slider Startelement', 'Wählen dieses Element, wenn Sie einen neuen Slider beginnen wollen.');
$GLOBALS['TL_LANG']['tl_content']['npslider_end']					= array('Slider Endelement', 'Wählen dieses Element, wenn Sie den Slider abschließen wollen.');
$GLOBALS['TL_LANG']['tl_content']['npslider_width']					= array('Slider Breite', 'Tragen Sie die Breite des Sliders ein.');
$GLOBALS['TL_LANG']['tl_content']['npslider_height']					= array('Slider Höhe', 'Tragen Sie die Höhe des Sliders ein.');

$GLOBALS['TL_LANG']['tl_content']['npslider_loop']					= array('Endlosschleife', 'Den Slider endlos laufen lassen.');
$GLOBALS['TL_LANG']['tl_content']['npslider_auto']					= array('Automatisch wechseln', 'Den Slider automatisch ohne zu klicken wechseln lassen');
$GLOBALS['TL_LANG']['tl_content']['npslider_autoHover']					= array('Beim Überfahren pausieren', 'Beim Überfahren mit der Maus den Slider anhalten.');
$GLOBALS['TL_LANG']['tl_content']['npslider_autoStart']					= array('Automatisch starten', 'Den Slider automatisch beim Laden der Seite beginnen lassen.');

/* ANIMATION & CONTROLS */
$GLOBALS['TL_LANG']['tl_content']['npslider_mode']					= array('Animation', 'Wählen Sie die Animation des Slider.');
/* MODE SELECTs */
$GLOBALS['TL_LANG']['tl_content']['npslider_mode_items']['horizontal'] = 'Horizontal (links <> rechts)';
$GLOBALS['TL_LANG']['tl_content']['npslider_mode_items']['vertical'] = 'Vertikal (oben <> unten)';
$GLOBALS['TL_LANG']['tl_content']['npslider_mode_items']['fade'] = 'Überblendeffekt';

$GLOBALS['TL_LANG']['tl_content']['npslider_speed']					= array('Geschwindigkeit', 'Tragen Sie die Geschwindigkeit zwischen den Wechseln der einzelnen Slide in Millisekunden (ms) ein.');
$GLOBALS['TL_LANG']['tl_content']['npslider_pause']					= array('Pause', 'Die Dauer in Millisekunden (ms) zwischen jeder Animation.');
$GLOBALS['TL_LANG']['tl_content']['npslider_startingSlide']					= array('Beginnen mit Slide #', 'Nummer des zu startenden Slide.');

/* CONTROLS */
$GLOBALS['TL_LANG']['tl_content']['npslider_controls']					= array('Steuerungselemente einblenden', '"Weiter" und "Zurück" Links einblenden');
$GLOBALS['TL_LANG']['tl_content']['npslider_prevText']					= array('Beschriftung für "zurück"', 'Tragen Sie hier die Beschriftung für den "zurück" Link ein.');
$GLOBALS['TL_LANG']['tl_content']['npslider_nextText']					= array('Beschriftung für "weiter"', 'Tragen Sie hier die Beschriftung für den "weiter" Link ein.');
$GLOBALS['TL_LANG']['tl_content']['npslider_prevImage']					= array('Grafik für "zurück"', 'Wählen Sie hier die Grafik für den "zurück" Link aus.');
$GLOBALS['TL_LANG']['tl_content']['npslider_nextImage']					= array('Grafik für "weiter"', 'Wählen Sie hier die Grafik für den "weiter" Link aus.');

/* PAGER */
$GLOBALS['TL_LANG']['tl_content']['npslider_pager']					= array('Pager einfügen', 'Einen Pager hinzufügen');
$GLOBALS['TL_LANG']['tl_content']['npslider_pagerLocation']					= array('Position des Pages wählen', 'Wählen Sie die Position des Pages aus.');
$GLOBALS['TL_LANG']['tl_content']['npslider_pagerType']					= array('Darstellungsform Pager', 'Wählen Sie die Darstellung des Pages aus.');
$GLOBALS['TL_LANG']['tl_content']['npslider_pagerShortSeparator']					= array('Trennzeichen', 'Verwendetes Zeichen zwischen den Pager-Nummern. Beispiel: Eingabe "von" wird als "1 von 4" angezeigt');

/* PAGER SELECTs */
$GLOBALS['TL_LANG']['tl_content']['npslider_pagerLocation_items']['bottom'] = 'Unterhalb';
$GLOBALS['TL_LANG']['tl_content']['npslider_pagerLocation_items']['top'] = 'Oberhalb';
$GLOBALS['TL_LANG']['tl_content']['npslider_pagerType_items']['full'] = 'Komplette Darstellung (1,2,3,...)';
$GLOBALS['TL_LANG']['tl_content']['npslider_pagerType_items']['short'] = 'Verkürzte Darstellung (1/4)';

/* SLIDE Options */
$GLOBALS['TL_LANG']['tl_content']['npslider_displaySlide']					= array('Bühnenverhalten', 'Das Verhalten der einzelnen Slides verändern.');
$GLOBALS['TL_LANG']['tl_content']['npslider_displaySlideQty']					= array('Anzahl sichtbare Slides', 'Anzahl sicherbarer Slides (Achtung: Höhe und Breite des Sliders ggf. ändern.');
$GLOBALS['TL_LANG']['tl_content']['npslider_moveSlideQty']					= array('Anzahl bewegte Slides', 'Anzahl der Slides, die auf einmal bewegt werden sollen.');
$GLOBALS['TL_LANG']['tl_content']['npslider_randomStart']					= array('Zufallsstart', 'Beginnt mit einem zufälligem Slide');
$GLOBALS['TL_LANG']['tl_content']['npslider_hideControlOnEnd']					= array('Navigation am Ende ausblenden', 'Blendet die Kontrollelemente nach der letzten Animation aus (wenn Endlosschleife nicht aktiviert ist).');


/* TICKER */
$GLOBALS['TL_LANG']['tl_content']['npslider_ticker']					= array('Ticker-Modus', 'Den Inhalt des Sliders als Ticker automatisch durchlaufen lassen.');
$GLOBALS['TL_LANG']['tl_content']['npslider_tickerSpeed']					= array('Ticker Geschwindigkeit', 'Wählen Sie die Laufgeschwindigkeit in Millisekunden (ms) zwischen jeder Animation.');
$GLOBALS['TL_LANG']['tl_content']['npslider_tickerDirection']					= array('Ticker Richtung', 'Wählen Sie die Richtung des Tickers. Achtung: Achse bei "Animation" auswählen.');
$GLOBALS['TL_LANG']['tl_content']['npslider_tickerHover']					= array('Ticker anhalten', 'Den Ticker beim Überfahren anhalten.');

/* TICKER SELECTs */
$GLOBALS['TL_LANG']['tl_content']['npslider_tickerDirection_items']['next'] = 'nach rechts bzw. nach oben';
$GLOBALS['TL_LANG']['tl_content']['npslider_tickerDirection_items']['prev'] = 'nach links bzw. nach unten';

/* CALLBACKS */
$GLOBALS['TL_LANG']['tl_content']['npslider_callbacks']					= array('Callback Funktionen aktivieren', 'Eigene Callback Funktionen definieren. Achtung: Nur für Profis.');
$GLOBALS['TL_LANG']['tl_content']['npslider_onBeforeSlide']					= array('onBeforeSlide', 'Führt eingetragene Funktion vor jeder Animation aus.');
$GLOBALS['TL_LANG']['tl_content']['npslider_onAfterSlide']					= array('onAfterSlide', 'Führt eingetragene Funktion nach jeder Animation aus. Achtung: Funktion wird bei der Initialisierung des Sliders ausgeführt.');
$GLOBALS['TL_LANG']['tl_content']['npslider_onFirstSlide']					= array('onFirstSlide', 'Führt eingetragene Funktion nach dem 1.Slide aus.');
$GLOBALS['TL_LANG']['tl_content']['npslider_onLastSlide']					= array('onLastSlide', 'Führt eingetragene Funktion nach dem letzten Slide aus.');
$GLOBALS['TL_LANG']['tl_content']['npslider_onPrevSlide']					= array('onPrevSlide', 'Führt eingetragene Funktion nach Klick auf "zurück" aus.');
$GLOBALS['TL_LANG']['tl_content']['npslider_onNextSlide']					= array('onNextSlide', 'Führt eingetragene Funktion nach Klick auf "weiter" aus.');
$GLOBALS['TL_LANG']['tl_content']['npslider_buildPager']					= array('buildPager', 'Ruft die eingetragene Funktion nach jedem Pager Element auf.');

/* LEGENDS */
$GLOBALS['TL_LANG']['tl_content']['sliderbasics_legend']      = 'Basis-Einstellungen';
$GLOBALS['TL_LANG']['tl_content']['slideranimation_legend']      = 'Animations-Einstellungen';
$GLOBALS['TL_LANG']['tl_content']['slidercontrol_legend']      = 'Steuerung-Einstellungen';
$GLOBALS['TL_LANG']['tl_content']['sliderpagination_legend']      = 'Pagination-Einstellungen';
$GLOBALS['TL_LANG']['tl_content']['sliderextended_legend']      = 'Erweiterte Einstellungen';
$GLOBALS['TL_LANG']['tl_content']['slidercallbacks_legend']      = 'Callbacks';


?>