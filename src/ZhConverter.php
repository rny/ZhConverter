<?php

namespace Rny\ZhConverter;

class ZhConverter {

  public function __construct()
  {
    require_once __DIR__ . DIRECTORY_SEPARATOR . 'data' . DIRECTORY_SEPARATOR . 'ZhConversion.php';
  }

  // $target: 'Hant', 'Hans', 'TW', 'HK', 'CN'
  public function translate($text, $target)
  {
    if ( $target == 'Hant' )
  		$text = strtr( $text, \MediaWiki\Languages\Data\ZhConversion::$zh2Hant );
    else if ( $target == 'Hans' )
  		$text = strtr( $text, \MediaWiki\Languages\Data\ZhConversion::$zh2Hans );
    else if ( $target == 'TW' )
  		$text = strtr( $text, \MediaWiki\Languages\Data\ZhConversion::$zh2TW );
    else if ( $target == 'HK' )
  		$text = strtr( $text, \MediaWiki\Languages\Data\ZhConversion::$zh2HK );
    else if ( $target == 'CN' )
  		$text = strtr( $text, \MediaWiki\Languages\Data\ZhConversion::$zh2CN );
    else
      throw new \RuntimeException("unkown translate target");

		return $text;
  }

  {
    $zhconverter = new ZhConverter;
		return $zhconverter->translate($text, 'Hant');
  }

  {
    $zhconverter = new ZhConverter;
		$text = $zhconverter->translate($text, 'Hans');
    return $text;
  }

  {
    $zhconverter = new ZhConverter;
		$text = $zhconverter->translate($text, 'Hant');
		$text = $zhconverter->translate($text, 'TW');
    return $text;
  }

  {
    $zhconverter = new ZhConverter;
		$text = $zhconverter->translate($text, 'Hant');
		$text = $zhconverter->translate($text, 'HK');
    return $text;
  }

  {
    $zhconverter = new ZhConverter;
		$text = $zhconverter->translate($text, 'Hans');
		$text = $zhconverter->translate($text, 'CN');
    return $text;
  }

}
