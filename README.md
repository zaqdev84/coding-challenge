# How to install

Requirements

PHP 7.2+

git clone https://github.com/zadev84/coding-challenge.git .

or 

Download the zip file @ https://github.com/zadev84/coding-challenge.git

After downloading it

```
composer install
```

To run all the tests

```
./vendor/phpunit/phpunit/phpunit tests 
```

Test Report is available at:

```
./tests/test-result.txt
```

Excecute index.php as follows:
```
php index.php
```

Expected output when you execute index.php:

```
Exercise 1 - Words without any repeating letters

Create a function that returns TRUE if a word does not have any repeating letter.

Repeating Letters Exist in Welcome? YES
Repeating Letters Exist in Documentarily? NO

Exercise 2 - Literal date parsing

Create a function taking a description of a date, and returning the actual date in the "YYYY-mm-dd" format.

2019-10-28

Exercise 3 - String merge

Write a PHP function that merges two, character by character.

MJIOCRHDAAENL
JMOIRCDHAANEL

Exercise 4 - Super-digit

Given a positive integer, compute the sum of each individual digit. If the resulting value is a single-digit number, return that number, otherwise repeat the operation until a single-digit number is reached.

1
3
9


Exercise 5 - XML import

Create a function to parse this XML file and store the properties in an associative array, the key being the uniqueID and the value being the property type (property type = node name).

array(12) {
  ["1P3115"]=>
  string(10) "commercial"
  ["1P0116"]=>
  string(10) "commercial"
  ["1P0117"]=>
  string(10) "commercial"
  ["1P0118"]=>
  string(6) "rental"
  ["1P0119"]=>
  string(5) "rural"
  ["1P0120"]=>
  string(8) "business"
  ["1P0121"]=>
  string(8) "business"
  ["1P0122"]=>
  string(8) "business"
  ["1P0123"]=>
  string(13) "holidayRental"
  ["1P0036"]=>
  string(11) "residential"
  ["1P0006"]=>
  string(10) "commercial"
  [2631096]=>
  string(13) "holidayRental"
}
```