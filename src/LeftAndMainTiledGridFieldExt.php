<?php

namespace Axllent\TiledGridField;

use SilverStripe\Admin\LeftAndMainExtension;
use SilverStripe\View\Requirements;

/*
 * Load extra CSS into CMS
 */
class LeftAndMainTiledGridFieldExt extends LeftAndMainExtension
{

    public function init()
    {
        parent::init();
        Requirements::css($this->ModuleBase() . '/css/tiled-gridfield.css');
    }

    private function ModuleBase()
    {
        return basename(dirname(dirname(__FILE__)));
    }
}
