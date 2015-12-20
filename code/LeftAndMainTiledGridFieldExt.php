<?php
/*
 * Load extra CSS into CMS
 */
class LeftAndMainTiledGridFieldExt extends LeftAndMainExtension
{

    public function init()
    {
        parent::init();
        Requirements::css(_CMS_TILED_GRIDFIELD_BASE_ . '/css/tiled-gridfield.css');
    }
}
