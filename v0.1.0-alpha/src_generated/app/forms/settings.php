<?php
namespace app\forms;

use std, gui, framework, app;


class settings extends AbstractForm
{

    /**
     * @event label4.click-3x 
     */
    function doLabel4Click3x(UXMouseEvent $e = null)
    {    
$e = $event ?: $e; // legacy code from 16 rc-2

		$this->form('MainForm')->pashalka->show();

        
    }

}
