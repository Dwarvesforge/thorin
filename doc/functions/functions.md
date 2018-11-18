# functions

- [Thorin::compose](#Thorin::compose)
- [Thorin::curry](#Thorin::curry)
- [Thorin::memoize](#Thorin::memoize)
## Thorin::compose
Return a new function that composes multiple functions into a single callable.
```php
$composed = Thorin::compose(function($x) {
  return $x + 1;
}, function($y) {
  return $y + 10
});
$composed(2); // 13
```

[Full documentation](/doc/src/functions/functions/t_compose.md)

[See more](https://github.com/appzcoder/30-seconds-of-php-code)

## Thorin::curry
Curries a function to take arguments in multiple calls.
```php
$currieAdd = Thorin::currie(function($a, $b) {
   return $a + $b;
});
$currieAdd(10)(15); // 25
```

[Full documentation](/doc/src/functions/functions/t_curry.md)

[See more](https://github.com/appzcoder/30-seconds-of-php-code)

## Thorin::memoize
Memoization of a function results in memory.
```php
$memoizedAdd = Thorin::memoize(
  function ($num) {
    return $num + 10;
  }
);
$memoizedAdd(5); // 15
$memoizedAdd(6); // 16
$memoizedAdd(5); // 15 but cached
```

[Full documentation](/doc/src/functions/functions/t_memoize.md)

[See more](https://github.com/appzcoder/30-seconds-of-php-code)
