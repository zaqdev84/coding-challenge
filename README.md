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
Duplicate Letters Exist in Welcome? YES
Duplicate Letters Exist in Documentarily? NO
2019-10-28
MJIOCRHDAAENL
JMOIRCDHAANEL
1
3
9
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