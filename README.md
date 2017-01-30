Tiled GridField for SilverStripe
================================

Inline/tiled images in a standard SilverStripe GridField table.

I created it to give me a better overview of thumbnails returned in a GridField listing
(think of a photo gallery). This hack simply applies a CSS class to the GridField fieldset
to provide a tiled layout.

![Screenshot](screenshots/sample.png)

## Requirements
The only requirement is that the `$summary_fields` of the DataObject should return just one field,
and it should be an image (thumbnail). The images should at least all be the same height, preferably cropped.

Please note that if more than one `$summary_fields` is used then the layout will break.

## Installation
```
composer require axllent/silverstripe-tiled-gridfield
```

## Example
```php
$gridFieldConfig = GridFieldConfig_RecordEditor::create(200);
$gridField = new TiledGridField('AlbumImages', 'Album Images', $this->Photos(), $gridFieldConfig);
$fields->addFieldToTab('Root.Main', $gridField);
```

## Photo management tools
The module is complatible with [GridFieldBulkEditingTools](https://github.com/colymba/GridFieldBulkEditingTools)
(GridFieldBulkUpload) as well as [SortableGridField](https://github.com/UndefinedOffset/SortableGridField).

```php
$gridFieldConfig = GridFieldConfig_RecordEditor::create(200);
$gridFieldConfig->addComponent(new GridFieldSortableRows('SortOrder'));
$gridFieldConfig->addComponent(new GridFieldBulkUpload());
$gridFieldConfig->getComponentByType('GridFieldBulkUpload')->setConfig('folderName', 'Photos');
$gridField = new TiledGridField('AlbumImages', 'Album Images', $this->Photos(), $gridFieldConfig);
$fields->addFieldToTab('Root.Main', $gridField);
```
