<?php

/**
* Google Currency Converter API is free software: you can redistribute it and/or modify
* it under the terms of the GNU General Public License as published by
* the Free Software Foundation, either version 3 of the License, or
* (at your option) any later version,
* and distributed in the hope that it will be useful,
* but WITHOUT ANY WARRANTY; without even the implied warranty of
* MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
* GNU General Public License for more details.
*
* Currency Class
*
* @package    Google Currency Converter API
* @author     Ekachai Omkaew <ekaomk@gmail.com>
* @copyright  1997-2015 Ekachai Omkaew
* @license    GNU General Public License (GNU GPL or GPL): http://www.gnu.org/licenses/
*/

class Currency{
  function Currency() {
    $this->apiURL = 'https://www.google.com/finance/converter';
  }

  public function convert($convertFrom, $convertTo, $amount){
    $rawHTML = file_get_contents("$this->apiURL?a=$amount&from=$convertFrom&to=$convertTo");
    preg_match_all("/bld>([0-9\.]+) ([A-Z]+)<\//", $rawHTML, $output_array);
    return $output_array[1][0];
  }

  public function getAllCurrency(){
    $rawHTML = file_get_contents($this->apiURL);
    preg_match_all("/value=\"([A-Z]+)\">(.+?)<\/option>/", $rawHTML, $output_array);
    $array = array();
    foreach ($output_array[0] as $key => $value)
    array_push($array, array("full" => $output_array[2][$key], "abb" => $output_array[1][$key]));

    return $array;
  }
}
?>
