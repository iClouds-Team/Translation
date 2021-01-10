<?php

require __DIR__ . '/../vendor/autoload.php';

// Creating instance
$t = new \iRaziul\Translation\Translator(__DIR__ . '/locales');

// Set current locale
$t->setLocale('en_US');

// Get current locale
echo $t->getLocale();

// Get current locale fullname
echo $t->getLocaleName();


// Simple example,
echo $t->translate('Hello World!');

// Shortkey
echo $t->translate('key');

// Dot array for short keys
echo $t->translate('author.name');

// Plural
# echo $t->translate('item');	// singular
echo $t->translate('item', ['count' => 1]);	// singular
echo $t->translate('item', ['count' => 2]);	// plural
echo $t->translate('item', ['count' => 3]);	// plural with count

// Context
echo $t->translate('friend', ['context' => 'male']);

// Variable
echo $t->translate('welcome.user', ['name' => 'John Doe']);
