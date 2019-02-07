<h1><img src="src/icon.svg" alt="icon" width="25" height="25" hspace="5">Roman</h1>

[![Craft CMS 3.0.0+](https://img.shields.io/badge/Craft%20CMS-3.0.0%2B-red.svg)](https://craftcms.com/) [![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/jalendport/craft-roman/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/jalendport/craft-roman/?branch=master)

_Convert an integer into roman numerals and vice versa._

![Roman banner](resources/img/banner.png)

&mdash; Based on the Craft 2 version of the [Roman](https://github.com/bransinanderson/Craft-Roman) plugin by [Bransin Anderson](https://bransinanderson.com)

## Installation

### Requirements

This plugin requires Craft CMS 3.0.0 or later.

### Plugin Store

Log into your control panel and click on 'Plugin Store'. Search for 'Roman'.

### Composer

1. Open your terminal and go to your Craft project:

```bash
cd /path/to/project
```

2. Then tell Composer to load the plugin:

```bash
composer require jalendport/craft-roman
```

3. In the Control Panel, go to Settings → Plugins and click the “Install” button for Roman.

## Using Roman

Roman provides several Twig methods for easy conversion between integers and roman numerals:

- You can pass an integer (or a string) into the `getRoman()` method to get roman numerals:

      {{ craft.roman.getRoman(298) }}     // Output: CCXCVIII
      {{ craft.roman.getRoman('539') }}   // Output: DXXXIX

- You can pass a string (of roman numerals) into the `getNumber()` method to get an integer:

      {{ craft.roman.getNumber('ML') }}   // Output: 1050

- Roman also includes a helper attribute to quickly get the current year in roman numeral form:

      {{ craft.roman.currentYear }}       // Output: MMXIX

## Found a Bug? Need Support?

Please open an [issue](https://github.com/jalendport/craft-roman/issues) describing what's going wrong.

## Roadmap

Some things to do, and ideas for potential features:

* Twig filter for converting all integers in a string of text to roman numerals.

If there's a feature you think should be added to Roman, please open an [issue](https://github.com/jalendport/craft-roman/issues). PRs are also welcome!

* * *

### Contributors

 - Plugin development: [Jalen Davenport](dominion-designs.com) / @jalendport
 - Craft 2 plugin development: [Bransin Anderson](https://github.com/bransinanderson/Craft-Roman)
 - Icon: [nawaf falah](https://thenounproject.com/search/?q=roman%20helmet&i=1784074), via [The Noun Project](https://thenounproject.com)
