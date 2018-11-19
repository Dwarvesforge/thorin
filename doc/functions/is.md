# is

- [Thorin::is_ajax_request](#Thorin_is_ajax_request)
- [Thorin::is_android](#Thorin_is_android)
- [Thorin::is_crawler](#Thorin_is_crawler)
- [Thorin::is_desktop](#Thorin_is_desktop)
- [Thorin::is_email](#Thorin_is_email)
- [Thorin::is_environment](#Thorin_is_environment)
- [Thorin::is_equal](#Thorin_is_equal)
- [Thorin::is_error](#Thorin_is_error)
- [Thorin::is_even](#Thorin_is_even)
- [Thorin::is_in_range](#Thorin_is_in_range)
- [Thorin::is_ios](#Thorin_is_ios)
- [Thorin::is_ip_match](#Thorin_is_ip_match)
- [Thorin::is_mobile](#Thorin_is_mobile)
- [Thorin::is_odd](#Thorin_is_odd)
- [Thorin::is_phone](#Thorin_is_phone)
- [Thorin::is_tablet](#Thorin_is_tablet)
<a name="Thorin_is_ajax_request"></a>
## Thorin::is_ajax_request
Check if the script has been called using an ajax request or not


[Full documentation](/doc/src/functions/is/is_ajax_request.md)

<a name="Thorin_t_is_android"></a>
## Thorin::t_is_android
Return true if the request is made from an android device
```php
if (Thorin::is_android()) {
  // do something
}
```

[Full documentation](/doc/src/functions/is/is_android.md)

[See more](https://github.com/serbanghita/Mobile-Detect)

<a name="Thorin_is_crawler"></a>
## Thorin::is_crawler
Detect if the "visitor" is a web crawler like googlebot, etc...


[Full documentation](/doc/src/functions/is/is_crawler.md)

<a name="Thorin_is_desktop"></a>
## Thorin::is_desktop
Return true if the request is made from a desktop device
```php
if (Thorin::is_desktop()) {
  // do something
}
```

[Full documentation](/doc/src/functions/is/is_desktop.md)

[See more](https://github.com/serbanghita/Mobile-Detect)

<a name="Thorin_is_email"></a>
## Thorin::is_email
Check if the passed email is valid
```php
if (Thorin::is_email('something@something.com')) {
    // do something
}
```

[Full documentation](/doc/src/functions/is/is_email.md)

<a name="Thorin_is_environment"></a>
## Thorin::is_environment
Check if the environment correspond to at least 1 passed environments
```php
if (Thorin::is_environment('testing','production')) {
    // do something
}
```

[Full documentation](/doc/src/functions/is/is_environment.md)

<a name="Thorin_is_equal"></a>
## Thorin::is_equal
Performs a deep comparison between two values to determine if they are
equivalent.

**Note:** This method supports comparing arrays, booleans,
DateTime objects, exception objects, SPLObjectStorage, numbers,
strings, typed arrays, resources, DOM Nodes. objects are compared
by their own, not inherited, enumerable properties.

```php
Thorin::is_equal([ 'a' => 1], ['a' => '1'])
// true
```

[Full documentation](/doc/src/functions/is/is_equal.md)

[See more](https://github.com/lodash-php/lodash-php/blob/master/src/Lang/isEqual.php)

<a name="Thorin_is_error"></a>
## Thorin::is_error
Checks if `value` is an `\Exception`, `\ParseError`, \Error`, \Throwable`, \SoapFault`, \DOMException`, \PDOException`, object.

```php
Thorin::is_error(new \Exception());
// true
```

[Full documentation](/doc/src/functions/is/is_error.md)

[See more](https://github.com/lodash-php/lodash-php/blob/master/src/Lang/isError.php)

<a name="Thorin_is_even"></a>
## Thorin::is_even
Return true if the given number is even, false otherwise.
```php
Thorin::is_even(2);
// true
```

[Full documentation](/doc/src/functions/is/is_even.md)

[See more](https://github.com/appzcoder/30-seconds-of-php-code)

<a name="Thorin_is_in_range"></a>
## Thorin::is_in_range
Checks if `number` is between `start` and up to, but not including, `end`. If
`end` is not specified, it's set to `start` with `start` then set to `0`.
If `start` is greater than `end` the params are swapped to support
negative ranges.

```php
Thorin::is_in_range(3, 2, 4);
// true
Thorin::is_in_range(4, 8);
// true
Thorin::is_in_range(4, 2);
// false
```

[Full documentation](/doc/src/functions/is/is_in_range.md)

[See more](https://github.com/lodash-php/lodash-php/blob/master/src/Number/inRange.php)

<a name="Thorin_is_ios"></a>
## Thorin::is_ios
Return true if the request is made from an ios device
```php
if (Thorin::is_ios()) {
  // do something
}
```

[Full documentation](/doc/src/functions/is/is_ios.md)

[See more](https://github.com/serbanghita/Mobile-Detect)

<a name="Thorin_is_ip_match"></a>
## Thorin::is_ip_match
Check if the user ip address is in the list passed as argument
```php
if (Thorin::is_ip_match([127.0.0.1])) {
  // user ip is banned so do something
}
```

[Full documentation](/doc/src/functions/is/is_ip_match.md)

<a name="Thorin_is_mobile"></a>
## Thorin::is_mobile
Return true if the request is made from a mobile device
```php
if (Thorin::is_mobile()) {
  // do something
}
```

[Full documentation](/doc/src/functions/is/is_mobile.md)

[See more](https://github.com/serbanghita/Mobile-Detect)

<a name="Thorin_is_odd"></a>
## Thorin::is_odd
Returns true if the given number is odd, false otherwise.
```php
Thorin::is_odd(3);
// true
```

[Full documentation](/doc/src/functions/is/is_odd.md)

[See more](https://github.com/appzcoder/30-seconds-of-php-code)

<a name="Thorin_is_phone"></a>
## Thorin::is_phone
Return true if the request is made from a phone device
```php
if (Thorin::is_phone()) {
  // do something
}
```

[Full documentation](/doc/src/functions/is/is_phone.md)

[See more](https://github.com/serbanghita/Mobile-Detect)

<a name="Thorin_is_tablet"></a>
## Thorin::is_tablet
Return true if the request is made from a tablet device
```php
if (Thorin::is_tablet()) {
  // do something
}
```

[Full documentation](/doc/src/functions/is/is_tablet.md)

[See more](https://github.com/serbanghita/Mobile-Detect)
