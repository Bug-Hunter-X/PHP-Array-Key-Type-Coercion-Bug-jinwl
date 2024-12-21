In PHP, a common yet subtle error arises when dealing with array keys that are not strictly strings or integers.  PHP's loose typing can lead to unexpected behavior. For instance, using an array key as a float can be problematic.  The key might be truncated, causing data loss or collisions.

```php
<?php
$myArray = [];
$myArray[1.1] = 'Value 1';
$myArray[1.9] = 'Value 2';

var_dump($myArray);
// Output:  array(1) { [1] => string(8) "Value 2" }
?>
```

Notice how 1.9 overwrites 1.1 because PHP casts the float keys to integers.