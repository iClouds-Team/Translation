# Translation - Lightweight translation library for PHP.
This translation library is very lightweight and has only 1 file, *NO EXTRA PACKAGE/DEPENDENCY*.

## Installation
```
composer require raziul/translation
```

## Basic Usage
```
use Raziul\Translation\Translator;

// Locales directory
$directory = __DIR__ . '/locales';

// Create translator instance
$translator = new Translator($directory);

// Set current locale to use
$translator->setLocale('en_US');

// Translate
echo $translator->translate('Hello World!');
```
Check `examples` folder for more example.
