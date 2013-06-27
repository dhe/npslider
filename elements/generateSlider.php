<?php 

/**
 * Contao Open Source CMS
 * 
 * Copyright (C) 2005-2012 Leo Feyer
 * 
 * @package   npslider 
 * @author    David Hestler mail@neckarpixel.de 
 * @license   GNU/LGPL 
 * @copyright neckarpixel David Hestler 2013
 */


/**
 * Namespace
 */
namespace neckarpixel\npslider;

/**
 * Class npslider 
 *
 * @copyright  neckarpixel David Hestler 2013
 * @author     David Hestler mail@neckarpixel.de 
 * @package    Devtoolssu
 */
class generateSlider extends \ContentElement 
{

	/**
	 * Template
	 * @var string
	 */
	protected $strTemplate = 'ce_npslider';
	protected $strTemplateJS = 'ce_npslider_js';


	/**
	 * Generate the module
	 */
	protected function compile(){
		$this->import('Database');
		// SLIDER START ELEMENT
		if ($this->npsType == 'npsStart') :
			if (TL_MODE == 'FE'):
				global $objPage;
				$this->Template = new \FrontendTemplate($this->strTemplate);
				$this->TemplateJS = new \FrontendTemplate($this->strTemplateJS);
				$this->Template->isStart = true;
				
				//DETECT DIMENSIONS
				$sliderWidth = unserialize($this->npsWidth);
				$sliderHeight = unserialize($this->npsHeight);
				
				// SET DIMENSIONS
				$this->Template->sliderId					= 'npslider-'.$this->id;				
				$sliderWidth								= $sliderWidth['value'].$sliderWidth['unit'];
				$sliderHeight								= $sliderHeight['value'].$sliderHeight['unit'];
				if($this->npsSizeMode == 'npsManualMode') $this->Template->sizeOptions	= ' style="height: '.$sliderHeight.'; width: '.$sliderWidth.';"';      
      
				
				// INITIALIZE SLIDER SCRIPT
				$this->TemplateJS->sliderId					= 'npslider-'.$this->id;
				$strOptions = '';				
				$strOptions .= "speed: ".$this->npsSpeed.",\n";
				$strOptions .= "pause: ".$this->npsPause.",\n";
				if(!$this->npsInfiniteLoop) $strOptions 	.= "infiniteLoop: false,\n";	
				if($this->npsSlideMargin) $strOptions 		.= "slideMargin: ".$this->npsSlideMargin.",\n";				
				if($this->npsStartSlide > 1) $strOptions	.= "startSlide: ".($this->npsStartSlide-1).",\n";
				if($this->npsEnableEasing) $strOptions 		.= "easing: '".$this->npsEasing."',\n";
								
				if($this->npsRandomStart) $strOptions 		.= "randomStart: true,\n";
				if($this->npsSlideSelector) $strOptions 	.= "slideSelector: '".$this->npsSlideSelector."',\n";
				if($this->npsHideControlOnEnd) $strOptions 	.= "hideControlOnEnd: true,\n";
				if($this->npsCaptions) $strOptions 			.= "captions: true,\n";				
				
				if($this->npsTicker) :
					$strOptions .= "ticker: true,\n";
					if($this->npsTickerHover) $strOptions .= "tickerHover: true,\n";				
				endif;
				
				if($this->npsAdaptiveHeight) :
					$strOptions 	.= "adaptiveHeight: true,\n";
					$strOptions 	.= "adaptiveHeightSpeed: ".$this->npsAdaptiveHeightSpeed.",\n";	
				endif;

				if($this->npsUseCSS) $strOptions 			.= "useCSS: false,\n";
				if($this->npsVideo) $strOptions 			.= "video: true,\n";
				if($this->npsPreloadImages == 'all') $strOptions	.= "preloadImages: 'all',\n";			
				
				
				if(!$this->npsTouchEnabled) $strOptions 	.= "touchEnabled: false,\n";	
				if(!$this->npsOneToOneTouch) $strOptions 	.= "oneToOneTouch: false,\n";
				$strOptions 	.= "swipeThreshold: ".$this->npsSwipeThreshold.",\n";
				if(!$this->npsPreventDefaultSwipeX) $strOptions 	.= "preventDefaultSwipeX: false,\n";
				if($this->npsPreventDefaultSwipeY) $strOptions 		.= "preventDefaultSwipeY: true,\n";		
	
				
				if(!$this->npsPager) $strOptions 	.= "pager: false,\n";	
				if($this->npsPager):
					$strOptions .= "pagerType: '".$this->npsPagerType."',\n";
					if($this->npsPagerType == 'short') $strOptions .= "pagerShortSeparator: '".$this->npsPagerShortSeparator."',\n";
					($this->npsPagerSelector) ? $strOptions .= "pagerSelector: '".$this->npsPagerSelector."',\n" : '';
					($this->npsPagerCustom) ? $strOptions .= "pagerCustom: '".$this->npsPagerCustom."',\n" : '';
				endif;
				
				if(!$this->npsControls) $strOptions .= "controls: false,\n";
				if($this->npsControls):
					if(!$this->npsNextImage):
						$strOptions .= "nextText: '".$this->npsNextText."',\n";
					else:
						$objFileNext = \FilesModel::findByPk($this->npsNextImage);
						$strImgEndTag = ($objPage->outputFormat == 'html5') ? '>' : ' />' ;
						
						$strOptions .= "nextText: '<img src=\"".$objFileNext->path."\" alt=\"".$this->npsNextText."\"".$strImgEndTag."',\n";
					endif;
					
					if(!$this->npsPrevImage):
						$strOptions .= "prevText: '".$this->npsPrevText."',\n";
					else:
						$objFilePrev = \FilesModel::findByPk($this->npsPrevImage);
						$strImgEndTag = ($objPage->outputFormat == 'html5') ? '>' : ' />' ;
						
						$strOptions .= "prevText: '<img src=\"".$objFilePrev->path."\" alt=\"".$this->npsPrevText."\"".$strImgEndTag."',\n";
					endif;					
					
				endif;
				
				if($this->npsOwnNavContainer):
					$strOptions .= "nextSelector: '#".$this->npsNextSelector."',\n";
					$strOptions .= "prevSelector: '#".$this->npsPrevSelector."',\n";
				endif;
				
				
				//$this->TemplateJS->autoControlsSelector		= '';
				
				if($this->npsAuto):
					$strOptions 			.= "auto: true,\n";	
					if($this->npsAutoHover) $strOptions 	.= "autoHover: true,\n";	
				endif;	
				
				$strOptions 								.= "autoDirection: '".$this->npsAutoDirection."',\n";			
				if($this->npsAutoDelay) $strOptions 		.= "autoDelay: ".$this->npsAutoDelay.",\n";
				
				
				if($this->npsAutoControls):
					if($this->npsAutoStart) $strOptions 		.= "autoStart: false,\n";
					$strOptions .= "autoControls: true,\n";
					$strOptions .= "startText:'".$this->npsStartText."', \n";
					$strOptions .= "stopText: '".$this->npsStopText."',\n";
					$strOptions .= ($this->npsAutoControlsCombine) ? "autoControlsCombine: true,\n" : "autoControlsCombine: false,\n";
				endif;
				
				// CAROUSEL
				if($this->npsDisplaySlide):
					if($this->npsMinSlides >= 1 && $this->npsMaxSlides >= $this->npsMinSlides){
						$strOptions 							.= "minSlides: ".$this->npsMinSlides.",\n";
						$strOptions 							.= "maxSlides: ".$this->npsMaxSlides.",\n";
						$strOptions 							.= "slideWidth: ".$this->npsSlideWidth.",\n";
						if($this->npsMoveSlides >= $this->npsMinSlides && $this->npsMoveSlides <= $this->npsMaxSlides) $strOptions .= "moveSlides: ".$this->npsMoveSlides.",\n"; 
					}
				endif;
				
				
				if($this->npsCallbacks):
					$strOptions .= 'onSliderLoad:'.$this->npsOnSliderLoad.',';
					$strOptions .= 'onSlideBefore:'.$this->npsOnSlideBefore.',';
					$strOptions .= 'onSlideAfter:'.$this->npsOnSlideAfter.',';
					$strOptions .= 'onSlidePrev:'.$this->npsOnSlidePrev.',';
					$strOptions .= 'onSlideNext:'.$this->npsOnSlideNext.',';
					$strOptions .= 'buildPager:'.$this->npsBuildPager.',';
				endif;
				
				// Insert Mode at Bottom to fix IE Bug
				$strOptions .= "mode: '".$this->npsMode."'\n";
				
				// Add Options to Template
				$this->TemplateJS->options = $strOptions;				
				
				/* ADD SCRIPTS TO SYSTEM */
				$GLOBALS['TL_HEAD'][]					= $this->TemplateJS->parse();
				$GLOBALS['TL_CSS'][]					= 'system/modules/npslider/assets/npslider.css||static';
				if($this->npsEnableEasing && $this->npsEasingMode == 'js')	$GLOBALS['TL_JAVASCRIPT']['easing']	= 'system/modules/npslider/assets/jquery.easing.1.3.js|static';
				if($this->npsVideo)			$GLOBALS['TL_JAVASCRIPT']['fitjs']	= 'system/modules/npslider/assets/jquery.fitvids.js|static';		
				$GLOBALS['TL_JAVASCRIPT']['npslider']	= 'system/modules/npslider/assets/jquery.bxslider.min.js|static';					
				
			else :
				$this->strTemplate = 'be_wildcard';
				$this->Template = new \BackendTemplate($this->strTemplate);
				$this->Template->wildcard = '### npslider WRAPPER START ###';
			endif;

		// SLIDER STOP ELEMENT
		else :
			if (TL_MODE == 'FE'):
				// GET SETTINGS OF PREVIOUS INITIALIZING NPSLIDER CTE
				$arrInitSlider = $this->Database->prepare("SELECT id,npsOwnNavContainer,npsNextSelector,npsPrevSelector FROM tl_content WHERE pid=? AND type='nps' AND npsType = 'npsStart' AND sorting < ".$this->sorting)
                ->limit(1)
                ->execute($this->pid);

				$this->Template = new \FrontendTemplate($this->strTemplate);
				$this->Template->ownNavContainer		= $arrInitSlider->npsOwnNavContainer;
				$this->Template->prevSelector			= $arrInitSlider->npsPrevSelector;	
				$this->Template->nextSelector			= $arrInitSlider->npsNextSelector;			
			else :
				$this->strTemplate = 'be_wildcard';
				$this->Template = new \BackendTemplate($this->strTemplate);
				$this->Template->wildcard = '### npslider WRAPPER STOP ###';
			endif;
		endif;
	}
}