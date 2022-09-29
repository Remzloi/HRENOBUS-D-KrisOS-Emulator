<?php
namespace app\forms;

use std, gui, framework, app;
use action\Element; 
use php\io\Stream; 


class desktop extends AbstractForm
{

    /**
     * @event mediaView.construct 
     */
    function doMediaViewConstruct(UXEvent $e = null)
    {    
$e = $event ?: $e; // legacy code from 16 rc-2

		Element::loadContent($this->player, 'https://lexatelevisionproektsites.on.drv.tw/krisos1Betaboot.mp4');

        
    }



}
