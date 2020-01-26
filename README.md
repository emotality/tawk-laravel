# tawk.to for Laravel

[tawk.to](https://www.tawk.to) has dozens of [integrations](https://www.tawk.to/knowledgebase/integrations/), but not for Laravel. This is a tawk.to chat widget for Laravel.

<p align="center"><img src="https://emotality.com/development/GitHub/tawk-laravel-2.png" height="461"></p>

<p align="center">
<a href="https://packagist.org/packages/emotality/tawk-laravel"><img src="https://poser.pugx.org/emotality/tawk-laravel/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/emotality/tawk-laravel"><img src="https://poser.pugx.org/emotality/tawk-laravel/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/emotality/tawk-laravel"><img src="https://poser.pugx.org/emotality/tawk-laravel/license.svg" alt="License"></a>
</p>

## Usage

Just echo the widget code in your app layout blade inside the body tag:
```html
        ...
        {{ TawkTo::widgetCode() }}
    </body>
</html>
```

## Installation

Install from command line:

```bash
composer require emotality/tawk-laravel
```

Laravel 5.5+ will use the auto-discovery function but for Laravel 5.4 and lower, you will need to include the service providers & facade manually in `config/app.php`:

```php
'providers' => [
    ...,
    Emotality\TawkTo\TawkToServiceProvider::class,
];

...

'aliases' => [
    ...,
    'TawkTo' => Emotality\TawkTo\Facades\TawkTo::class,
];
```
## Config

Copy the default config file:

```bash
php artisan vendor:publish --provider="Emotality\TawkTo\TawkToServiceProvider"
```

Open `.env` and set your API key:

```text
TAWKTO_API_KEY=54f52bfdf7bcaa72719c6b7
```

*Get your API key from the **Direct Chat Link** text field from the [dashboard](https://dashboard.tawk.to/#/admin) following [these](https://www.tawk.to/knowledgebase/getting-started/adding-a-widget-to-your-website/) steps.*

## License

tawk-laravel is released under the MIT license. See [LICENSE](https://github.com/emotality/tawk-laravel/blob/master/LICENSE) for details.
