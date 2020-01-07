<?php

namespace Drupal\filter\Plugin\Filter;

use Drupal\filter\FilterProcessResult;
use Drupal\filter\Plugin\FilterBase;
/**
 * This module replaces "[name: FIRSTNAME LASTNAME]" to "[name: LASTNAME FIRSTNAME]"
 */
class FilterName extends FilterBase{
    /**
     * {@inheritdoc}
     * */

     public function process($text, $langcode){
         $regex = '/\[name\:(\w+)\:(\w+)\]/';
         $replace = "Name: " . '$2 $1';
         $new_text = preg_replace($regex, $replace, $text);
         return new FilterProcessResult($new_text);

     }
}