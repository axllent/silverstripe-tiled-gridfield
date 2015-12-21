<?php

class TiledGridField extends GridField
{

    public function __construct($name, $title = null, SS_List $dataList = null, GridFieldConfig $config = null)
    {
        parent::__construct($name, $title, $dataList, $config);
        $this->addExtraClass('ss-tiled-gridfield');
    }
}
