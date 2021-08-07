# tawk.to for Laravel

[![Packagist License](https://poser.pugx.org/emotality/tawk-laravel/license.png)](http://choosealicense.com/licenses/mit/)
[![Latest Stable Version](https://poser.pugx.org/emotality/tawk-laravel/version.png)](https://packagist.org/packages/emotality/tawk-laravel)
[![Total Downloads](https://poser.pugx.org/emotality/tawk-laravel/d/total.png)](https://packagist.org/packages/emotality/tawk-laravel)

[tawk.to](https://www.tawk.to) has a lot of [integrations](https://help.tawk.to/category/integrations), but not for Laravel. This is a tawk.to chat widget for Laravel.

<p><img src="https://emotality.com/development/GitHub/tawk-laravel-2.png" height="461"></p>

## Requirements

- PHP 7.0+
- Laravel 5.5+

*If you don't meet the requirements, feel free to try version 2.0*

## Installation

1. `composer require emotality/tawk-laravel`
2. `php artisan vendor:publish --provider="Emotality\TawkTo\TawkToServiceProvider"`
3. Add your chat link to your `.env` file:

```
TAWKTO_LINK="https://tawk.to/chat/{property_key}/{widget_key}"
```

*Get your link from the **Direct Chat Link** field from [your dashboard](https://dashboard.tawk.to/#/admin/chat-widget)*

## Usage

Just echo the widget code in your app layout blade inside the body tag:

```html
        ...
        {{ \TawkTo::widgetCode() }}
    </body>
</html>
```

Or, if you don't want to use a config file, you can set your link directly like this:

```html
        ...
        {{ \TawkTo::widgetCode('your_direct_chat_link') }}
    </body>
</html>
```

## License

tawk-laravel is released under the MIT license. See [LICENSE](https://github.com/emotality/tawk-laravel/blob/master/LICENSE) for details.
