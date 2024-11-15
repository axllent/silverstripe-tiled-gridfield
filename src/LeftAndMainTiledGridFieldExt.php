<?php

namespace Axllent\TiledGridField;

use SilverStripe\Core\Extension;
use SilverStripe\View\Requirements;

// Load extra CSS into CMS
class LeftAndMainTiledGridFieldExt extends Extension
{
    public function init()
    {
        parent::init();
        Requirements::css('axllent/silverstripe-tiled-gridfield: css/tiled-gridfield.css');
    }
}
