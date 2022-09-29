<?php
namespace app\forms;

use std, gui, framework, app;


class MainForm extends AbstractForm
{

    /**
     * @event construct 
     */
    function doConstruct(UXEvent $e = null)
    {    
$e = $event ?: $e; // legacy code from 16 rc-2

		$this->vkweb->hide();
		$this->labelAlt->hide();
		$this->fragment->hide();
		$this->browser->hide();
		$this->pashalka->hide();
		$this->settings->hide();
		$this->labelAlt->hide();
		waitAsync(1246, function () use ($e, $event) {
		});

        
    }

    /**
     * @event imageAlt.construct 
     */
    function doImageAltConstruct(UXEvent $e = null)
    {    
$e = $event ?: $e; // legacy code from 16 rc-2

		$e->sender->hide();
		waitAsync(1000, function () use ($e, $event) {
			$e->sender->show();
		});

        
    }

    /**
     * @event label.click-Left 
     */
    function doLabelClickLeft(UXMouseEvent $e = null)
    {    
$e = $event ?: $e; // legacy code from 16 rc-2

		$this->fragment->show();

        
    }

    /**
     * @event label3.click-Left 
     */
    function doLabel3ClickLeft(UXMouseEvent $e = null)
    {    
$e = $event ?: $e; // legacy code from 16 rc-2

		$this->browser->show();

        
    }

    /**
     * @event image4.click-Left 
     */
    function doImage4ClickLeft(UXMouseEvent $e = null)
    {    
$e = $event ?: $e; // legacy code from 16 rc-2

		$this->fragment->hide();
		$this->browser->hide();
		$this->vkweb->hide();
		$this->pashalka->hide();
		$this->settings->hide();

        
    }

    /**
     * @event button.click-Left 
     */
    function doButtonClickLeft(UXMouseEvent $e = null)
    {    
$e = $event ?: $e; // legacy code from 16 rc-2

		app()->showForm('Debug');

        
    }

    /**
     * @event label4.click-Left 
     */
    function doLabel4ClickLeft(UXMouseEvent $e = null)
    {    
$e = $event ?: $e; // legacy code from 16 rc-2

		$this->settings->show();

        
    }


}
