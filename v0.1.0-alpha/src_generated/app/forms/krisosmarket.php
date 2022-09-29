<?php
namespace app\forms;

use std, gui, framework, app;


class krisosmarket extends AbstractForm
{

    /**
     * @event button.click-Left 
     */
    function doButtonClickLeft(UXMouseEvent $e = null)
    {    
$e = $event ?: $e; // legacy code from 16 rc-2

		$e->sender->enabled = false;
		$this->progressBar->show();
		waitAsync(5000, function () use ($e, $event) {
			$this->progressBar->hide();
			$this->buttonAlt->show();
		});

        
    }

    /**
     * @event buttonAlt.click-Left 
     */
    function doButtonAltClickLeft(UXMouseEvent $e = null)
    {    
$e = $event ?: $e; // legacy code from 16 rc-2

		$this->form('MainForm')->vkweb->show();
		$this->form('MainForm')->fragment->hide();

        
    }

    /**
     * @event construct 
     */
    function doConstruct(UXEvent $e = null)
    {    
$e = $event ?: $e; // legacy code from 16 rc-2

		$this->progressBar->hide();
		$this->buttonAlt->hide();

        
    }

}
