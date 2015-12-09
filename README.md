# Key Sort Twig Extension for Craft

Provides a twig filter for sorting by a key in an array.

## How to Use

```php
$beatles = array(
  array(
    "name" => "John"
  ),
  array(
    "name" => "Paul"
  ),
  array(
    "name" => "George"
  ),
  array(
    "name" => "Ringo"
  )
);
```

```twig
{% for person in beatles | sortbyfield('name') %}
  {{ person.name }}
{% endfor %}
```

## Installation

To install via Composer: 

1. Add a `composer.json` file to your project root
2. Edit your `composer.json` file to include the following
```
{
    "require": {
        "onedesign/keysort": "x.x.x"
    }
}
```
3. Run `composer install`

To install without composer:

1. Download the latest release.
2. Rename the uncompressed folder to `keysort`
3. Place that folder into your `craft/plugins` folder