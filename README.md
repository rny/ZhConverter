# ZhConverter

[![Build Status](https://travis-ci.org/rny/ZhConverter.svg?branch=master)](https://travis-ci.org/rny/ZhConverter)

ZhConverter is a simple PHP library to convert between Simplified Chinese(zh-Hans) and Traditional Chinese(zh-Hant).
ZhConverter is using WikiMedia [ZhConverter.php](https://github.com/wikimedia/mediawiki/tree/master/languages/data) as convertion table.

For those rquire better convertion quality, the C++ project [OpenCC](https://github.com/BYVoid/OpenCC) may be considered.

## Highlights

* One line code to do the convertion
* Composer ready, PSR-4 compatible.
* PHPUnit tested.

## Install

Install `ZhConverter` using Composer.

```
$ composer require rny/zhconverter
```

## Usage

```
use Rny\ZhConverter\ZhConverter;

$text = ZhConverter::zh2hant($text);
$text = ZhConverter::zh2hans($text);
$text = ZhConverter::zh2TW($text);
$text = ZhConverter::zh2HK($text);
$text = ZhConverter::zh2CN($text);
```

```
$text = \Rny\ZhConverter\ZhConverter::zh2hant($text);
$text = \Rny\ZhConverter\ZhConverter::zh2hans($text);
$text = \Rny\ZhConverter\ZhConverter::zh2TW($text);
$text = \Rny\ZhConverter\ZhConverter::zh2HK($text);
$text = \Rny\ZhConverter\ZhConverter::zh2CN($text);
```

## Testing

```
$ composer test
```
