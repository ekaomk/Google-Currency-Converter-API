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
* Sample File
*
* @package    Google Currency Converter API
* @author     Ekachai Omkaew <ekaomk@gmail.com>
* @copyright  1997-2015 Ekachai Omkaew
* @license    GNU General Public License (GNU GPL or GPL): http://www.gnu.org/licenses/
*/

require_once('currency.class.php');
header('Content-type: text/html; charset=ISO8859-1');

$currency = new Currency();
echo '<body style="color: white; background-color:black;">';
echo '<div style="text-align: center;">';

echo '@xxxx[{::::::::::::::::::::::::::::::::::> Convert US Dollar to Thai Bath for real time sample <::::::::::::::::::::::::::::::::::}]xxxx@<br>';
echo "Code: \$currency->convert('USD', 'THB', 1);<br>";
$result = $currency->convert('USD', 'THB', 1);
$date = new DateTime();
$datetime = $date->format('Y-m-d H:i:s');
echo "Result: current date and time is $datetime and 1 US Dollar = $result Thai Bath<br><br>";

echo '@xxxx[{::::::::::::::::::::::::::::::::::> Print all currency full/abbreviation sample <::::::::::::::::::::::::::::::::::}]xxxx@<br>';
echo "Code: \$currency->getAllCurrency();<br>";
$allCurrency = $currency->getAllCurrency();
echo "Result: <br>";
foreach ($allCurrency as $key => $value) {
  echo $value["full"] . ' = ' . $value["abb"] . '<br>';
}

echo '</div></body>';
?>
