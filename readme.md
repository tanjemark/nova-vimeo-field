# Nova Vimeo Field


![Vimeo player](./docs/vimeo_player.png)

## Installation

You can install the package in to a Laravel app that uses Nova via composer:
```bash
composer require tanjemark/nova-vimeo-field
```

## Usage
```php
use Tanjemark\Fields\Vimeo;

Vimeo::make('Vimeo field name'),
```
The field extends the base Laravel\Nova\Fields\Field, so all the usual methods are available.

## Options

### With meta
```php
use Tanjemark\Fields\Vimeo;

Vimeo::make('Vimeo field name')
    ->withMeta([
        'options' => [
            'width' => 640,
            'height' => 360,
        ]
    ]);
```

## License
The MIT License (MIT). Please see [License File](LICENSE) for more information.

