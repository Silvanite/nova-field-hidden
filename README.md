# Laravel Nova Hidden Form Field

A simple hidden field to include in form views.

## Installation

Install the tool through composer

```sh
composer require silvanite/nova-field-hidden
```

## Usage

```php
use Silvanite\NovaFieldHidden\Hidden;

class MyResource extends Resource
{
    ...
    public function fields(Request $request)
    {
        return [
            ...
            Hidden::make('Field')->value('My field value'),
        ];
    }
```

## Support

If you require any support please contact me on [Twitter](https://twitter.com/m2de_io) or open an issue on this repository.
