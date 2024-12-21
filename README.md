# PHP Array Key Type Coercion Bug

This repository demonstrates a subtle bug in PHP related to array key type coercion.  When using floating-point numbers as array keys, PHP's loose typing can lead to unexpected behavior, resulting in data overwrites due to implicit type conversion to integers. The `bug.php` file shows this issue in action.  The solution in `bugSolution.php` provides a strategy to avoid this.