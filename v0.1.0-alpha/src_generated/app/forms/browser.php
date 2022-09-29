<?php
namespace app\forms;

use std, gui, framework, app;
use action\Element; 
use php\io\Stream; 


class browser extends AbstractForm
{

    /**
     * @event button.click-Left 
     */
    function doButtonClickLeft(UXMouseEvent $e = null)
    {    
$e = $event ?: $e; // legacy code from 16 rc-2

		Element::loadContentAsync($this->browser, uiText($this->edit), function () use ($e, $event) {
		});

        
    }

    /**
     * @event browser.running 
     */
    function doBrowserRunning(UXEvent $e = null)
    {    
$e = $event ?: $e; // legacy code from 16 rc-2

		$this->progressIndicator->show();

        
    }

    /**
     * @event browser.load 
     */
    function doBrowserLoad(UXEvent $e = null)
    {    
$e = $event ?: $e; // legacy code from 16 rc-2

		$this->progressIndicator->hide();

        
    }

    /**
     * @event browser.fail 
     */
    function doBrowserFail(UXEvent $e = null)
    {    
$e = $event ?: $e; // legacy code from 16 rc-2

		$this->progressIndicator->hide();

        
    }

    /**
     * @event construct 
     */
    function doConstruct(UXEvent $e = null)
    {    
$e = $event ?: $e; // legacy code from 16 rc-2

		$this->progressIndicator->hide();

        
    }

}
