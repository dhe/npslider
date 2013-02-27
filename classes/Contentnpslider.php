<?php 

/**
 * Contao Open Source CMS
 * 
 * Copyright (C) 2005-2012 Leo Feyer
 * 
 * @package   npslider 
 * @author    David Hestler mail@neckarpixel.de 
 * @license   GNU/LGPL 
 * @copyright neckarpixel David Hestler 2012 
 */


/**
 * Namespace
 */
namespace neckarpixel\npslider;

/**
 * Class npslider 
 *
 * @copyright  neckarpixel David Hestler 2012 
 * @author     David Hestler mail@neckarpixel.de 
 * @package    Devtoolssu
 */
class Contentnpslider extends \ContentElement 
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
		if ($this->npslider_type == 'npslider_start') :
			if (TL_MODE == 'FE'):
				$this->Template = new \FrontendTemplate($this->strTemplate);
				$this->TemplateJS = new \FrontendTemplate($this->strTemplateJS);
				$this->Template->isStart = true;
				
				//DETECT DIMENSIONS
				$sliderWidth = unserialize($this->npslider_width);
				$sliderHeight = unserialize($this->npslider_height);
				
				// SET DIMENSIONS
				$this->Template->sliderId = 'npslider-'.$this->id;				
				$this->Template->sliderWidth = $sliderWidth['value'].$sliderWidth['unit'];
				$this->Template->sliderHeight = $sliderHeight['value'].$sliderHeight['unit'];      
      
				// GET IMAGES PATH
				$objFilePrev = \FilesModel::findByPk($this->npslider_prevImage);
				$this->npslider_prevImagePath = $objFilePrev->path;
				$objFileNext = \FilesModel::findByPk($this->npslider_nextImage);
				$this->npslider_nextImagePath = $objFileNext->path;
				
				// INITIALIZE SLIDER SCRIPT
				$this->TemplateJS->sliderId				= 'npslider-'.$this->id;
				$this->TemplateJS->mode				 	= $this->npslider_mode;
				$this->TemplateJS->speed				= $this->npslider_speed;
				$this->TemplateJS->loop					= $this->npslider_loop;
				$this->TemplateJS->controls				= $this->npslider_controls;
				$this->TemplateJS->prevText				= $this->npslider_prevText;
				$this->TemplateJS->prevImage			= $this->npslider_prevImagePath;				
				$this->TemplateJS->nextText				= $this->npslider_nextText;
				$this->TemplateJS->nextImage			= $this->npslider_nextImagePath;
				if($this->npslider_ownNavContainer):
				$this->TemplateJS->prevContainer		= $this->npslider_prevContainer;
				$this->TemplateJS->nextContainer		= $this->npslider_nextContainer;
				endif;
				$this->TemplateJS->startingSlide		= $this->npslider_startingSlide -1;
				$this->TemplateJS->randomStart			= $this->npslider_randomStart;
				$this->TemplateJS->hideControlOnEnd		= $this->npslider_hideControlOnEnd;
				$this->TemplateJS->auto					= $this->npslider_auto;
				$this->TemplateJS->pause				= $this->npslider_pause;
				$this->TemplateJS->autoDirection		= $this->npslider_autoDirection;
				$this->TemplateJS->autoHover			= $this->npslider_autoHover;
				$this->TemplateJS->pager				= $this->npslider_pager;
				$this->TemplateJS->pagerType			= $this->npslider_pagerType;
				$this->TemplateJS->pagerLocation		= $this->npslider_pagerLocation;
				$this->TemplateJS->pagerShortSeparator	= $this->npslider_pagerShortSeparator;
				$this->TemplateJS->displaySlide			= $this->npslider_displaySlide;
				$this->TemplateJS->displaySlideQty		= $this->npslider_displaySlideQty;
				$this->TemplateJS->moveSlideQty			= $this->npslider_moveSlideQty;
				$this->TemplateJS->ticker				= $this->npslider_ticker;
				$this->TemplateJS->tickerSpeed			= $this->npslider_tickerSpeed;
				$this->TemplateJS->tickerDirection		= $this->npslider_tickerDirection;
				$this->TemplateJS->tickerHover			= $this->npslider_tickerHover;
				$this->TemplateJS->callbacks			= $this->npslider_callbacks;
				$this->TemplateJS->onBeforeSlide		= $this->npslider_onBeforeSlide;
				$this->TemplateJS->onAfterSlide			= $this->npslider_onAfterSlide;
				$this->TemplateJS->onFirstSlide			= $this->npslider_onFirstSlide;
				$this->TemplateJS->onLastSlide			= $this->npslider_onLastSlide;
				$this->TemplateJS->onPrevSlide			= $this->npslider_onPrevSlide;
				$this->TemplateJS->onNextSlide			= $this->npslider_onNextSlide;
				$this->TemplateJS->buildPager			= $this->npslider_buildPager;
				
				/* ADD SCRIPTS TO SYSTEM */
				$GLOBALS['TL_HEAD'][]				= $this->TemplateJS->parse();
				$GLOBALS['TL_CSS'][] = 'system/modules/npslider/assets/npslider.css';
				$GLOBALS['TL_JAVASCRIPT']['npslider'] = 'system/modules/npslider/assets/jquery.bxSlider.min.js|static';					
				
			else :
				$this->strTemplate = 'be_wildcard';
				$this->Template = new \BackendTemplate($this->strTemplate);
				$this->Template->wildcard = '### npslider WRAPPER START ###';
				$this->Template->title = $this->headline;
				$this->Template->id = $this->id;
			endif;

		// SLIDER STOP ELEMENT
		else :
			if (TL_MODE == 'FE'):
				// GET SETTINGS OF PREVIOUS INITIALIZING NPSLIDER CTE
				$arrInitSlider = $this->Database->prepare("SELECT id,npslider_ownNavContainer,npslider_prevContainer,npslider_nextContainer FROM tl_content WHERE pid=? AND type='npslider' AND npslider_type = 'npslider_start' AND sorting < ".$this->sorting)
                ->limit(1)
                ->execute($this->pid);

				$this->Template = new \FrontendTemplate($this->strTemplate);
				$this->Template->ownNavContainer		= $arrInitSlider->npslider_ownNavContainer;
				$this->Template->prevContainer			= $arrInitSlider->npslider_prevContainer;	
				$this->Template->nextContainer			= $arrInitSlider->npslider_nextContainer;			
			else :
				$this->strTemplate = 'be_wildcard';
				$this->Template = new \BackendTemplate($this->strTemplate);
				$this->Template->wildcard = '### npslider WRAPPER STOP ###';
				$this->Template->title = $this->headline;
				$this->Template->id = $this->id;
			endif;
		endif;
	}
}
