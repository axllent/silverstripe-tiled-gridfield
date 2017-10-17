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
        Requirements::css('axllent/silverstripe-tiled-gridfield: css/tiled-gridfield.css');
    }
}
