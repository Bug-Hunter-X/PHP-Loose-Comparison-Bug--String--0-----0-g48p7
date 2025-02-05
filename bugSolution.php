The solution is simple: use strict comparison (`===`) instead of loose comparison (`==`). Strict comparison checks both the value and the type of the variables.

```php
<?php
$user_input = ""; // or "0"

if ($user_input === 0) {
    echo "User input is zero (and an integer).";
} else {
    echo "User input is not zero or is not an integer.";
}
?>
```

This revised code will accurately check if `$user_input` is both numerically equal to 0 and of integer type.  Only an integer 0 will trigger the "User input is zero" message.