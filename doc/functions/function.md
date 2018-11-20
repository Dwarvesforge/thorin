# function

- [Thorin::fn_compose](#Thorin_fn_compose)
- [Thorin::fn_curry](#Thorin_fn_curry)
- [Thorin::fn_memoize](#Thorin_fn_memoize)
- [Thorin::fn_negate](#Thorin_fn_negate)
<a name="Thorin_fn_compose"></a>
## Thorin::fn_compose
Return a new function that composes multiple functions into a single callable.
```php
$composed = Thorin::fn_compose(function($x) {
  return $x + 1;
}, function($y) {
  return $y + 10
});
$composed(2); // 13
```

[Full documentation](/doc/src/functions/function/fn_compose.md)

[See more](https://github.com/appzcoder/30-seconds-of-php-code)

<a name="Thorin_fn_curry"></a>
## Thorin::fn_curry
Curries a function to take arguments in multiple calls.
```php
$currieAdd = Thorin::fn_curry(function($a, $b) {
   return $a + $b;
});
$currieAdd(10)(15); // 25
```

[Full documentation](/doc/src/functions/function/fn_curry.md)

[See more](https://github.com/appzcoder/30-seconds-of-php-code)

<a name="Thorin_fn_memoize"></a>
## Thorin::fn_memoize
Memoization of a function results in memory.
```php
$memoizedAdd = Thorin::fn_memoize(
  function ($num) {
    return $num + 10;
  }
);
$memoizedAdd(5); // 15
$memoizedAdd(6); // 16
$memoizedAdd(5); // 15 but cached
```

[Full documentation](/doc/src/functions/function/fn_memoize.md)

[See more](https://github.com/appzcoder/30-seconds-of-php-code)

<a name="Thorin_fn_negate"></a>
## Thorin::fn_negate
Creates a function that negates the result of the predicate `func`

```php
function isEven($n) {
  return $n % 2 == 0;
}
Thorin::col_filter([1, 2, 3, 4, 5, 6], Thorin::fn_negate($isEven));
// [1, 3, 5]
```

[Full documentation](/doc/src/functions/function/fn_negate.md)

[See more](https://github.com/lodash-php/lodash-php/blob/master/src/Function/negate.php)
