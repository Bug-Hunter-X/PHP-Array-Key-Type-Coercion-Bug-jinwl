The most reliable way to avoid this issue is to always use string keys for your arrays when dealing with values that aren't guaranteed to be integers:

```php
<?php
$myArray = [];
$myArray[(string)1.1] = 'Value 1';
$myArray[(string)1.9] = 'Value 2';

var_dump($myArray);
// Output: array(2) { ["1.1"]=> string(8) "Value 1" ["1.9"]=> string(8) "Value 2" }
?>
```

By explicitly casting the float keys to strings using `(string)`, you retain the precision and prevent PHP from automatically converting them to integers, thus avoiding data loss.