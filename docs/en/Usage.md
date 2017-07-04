# Using TiledGridField

Your object's `$summary_fields` should return just one field, and it should be an image (thumbnail).
The images should all be the same height.

Please note that if more than one `$summary_fields` is used then the layout will break.


## Example

Below is an example of a setup that uses both the
[Colymba\BulkUpload](https://github.com/colymba/GridFieldBulkEditingTools) module for easy uploading,
as well as the [UndefinedOffset\SortableGridField](https://github.com/UndefinedOffset/SortableGridField)
for image sorting.

```php
<?php

use SilverStripe\ORM\DataObject;
use SilverStripe\Assets\Image;

class GalleryImage extends DataObject
{
    private static $default_sort = [
        '"SortOrder"' => 'ASC'
    ];

    private static $db = [
        'SortOrder' => 'Int'
    ];

    private static $has_one = [
        'Image' => Image::class,
        'Parent' => Page::class
    ];

    private static $summary_fields = [
        'Thumbnail'
    ];

    public function getThumbnail()
    {
        return $this->Image()->exists() ? $this->Image()->Fill(80,80) : false;
    }
}
```


```php
<?php

use Axllent\TiledGridField\TiledGridField;
use Colymba\BulkUpload\BulkUploader;
use SilverStripe\Forms\GridField\Gridfield;
use SilverStripe\Forms\GridField\GridFieldConfig_RecordEditor;
use UndefinedOffset\SortableGridField\Forms\GridFieldSortableRows;

class MyPage extends Page
{
    private static $has_many = [
        'Images' => GalleryImage::class
    ];

    public function getCMSFields()
    {
        $fields = parent::getCMSFields();

        $gridFieldConfig = GridFieldConfig_RecordEditor::create(50);
        // add BulkUploader
        $gridFieldConfig->addComponent($bu = new BulkUploader());
        // Set folder
        $bu->setUfSetup('setFolderName', 'Gallery');
        // add sorting
        $gridFieldConfig->addComponent(new GridFieldSortableRows('SortOrder'));
        $fields->addFieldToTab('Root.Gallery',
            new TiledGridField('Images', 'Images', $this->Images(), $gridFieldConfig)
        );
    }
}
```
