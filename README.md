# Tiled GridField for Silverstripe

Inline/tiled images in a standard Silverstripe GridField table.

I created it to give me a better overview of thumbnails returned in a GridField listing
(think of a photo gallery). This hack simply applies a CSS class to the GridField fieldset
to provide a tiled layout.

![Screenshot](docs/en/screenshots/sample.png)

## Requirements

-   Silverstripe ^4 || ^5
-   [Colymba\BulkUpload](https://github.com/colymba/GridFieldBulkEditingTools) if you require easy uploading (see Usage)
-   [UndefinedOffset\SortableGridField](https://github.com/UndefinedOffset/SortableGridField) if you require sorting (see Usage)

For Silverstripe 3, please refer to the [Silverstripe3 branch](https://github.com/axllent/silverstripe-tiled-gridfield/tree/silverstripe3).

## Installation

```
composer require axllent/silverstripe-tiled-gridfield:^2
```

## Usage

Please refer to [Usage.md](docs/en/Usage.md) for an example.
