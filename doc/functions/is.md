# is

- [Thorin::is_ajax_request](#Thorin::is_ajax_request)
- [Thorin::is_android](#Thorin::is_android)
- [Thorin::is_crawler](#Thorin::is_crawler)
- [Thorin::is_desktop](#Thorin::is_desktop)
- [Thorin::is_email](#Thorin::is_email)
- [Thorin::is_environment](#Thorin::is_environment)
- [Thorin::is_equal](#Thorin::is_equal)
- [Thorin::is_even](#Thorin::is_even)
- [Thorin::is_ios](#Thorin::is_ios)
- [Thorin::is_ip_match](#Thorin::is_ip_match)
- [Thorin::is_mobile](#Thorin::is_mobile)
- [Thorin::is_odd](#Thorin::is_odd)
- [Thorin::is_phone](#Thorin::is_phone)
- [Thorin::is_tablet](#Thorin::is_tablet)
<a name="Thorin::is_ajax_request"></a>
## Thorin::is_ajax_request
Check if the script has been called using an ajax request or not


[Full documentation](/doc/src/functions/is/t_is_ajax_request.md)

<a name="Thorin::is_android"></a>
## Thorin::is_android
Return true if the request is made from an android device
```php
if (Thorin::is_android()) {
  // do something
}
```

[Full documentation](/doc/src/functions/is/t_is_android.md)

[See more](https://github.com/serbanghita/Mobile-Detect)

<a name="Thorin::is_crawler"></a>
## Thorin::is_crawler
Detect if the "visitor" is a web crawler like googlebot, etc...


[Full documentation](/doc/src/functions/is/t_is_crawler.md)

<a name="Thorin::is_desktop"></a>
## Thorin::is_desktop
Return true if the request is made from a desktop device
```php
if (Thorin::is_desktop()) {
  // do something
}
```

[Full documentation](/doc/src/functions/is/t_is_desktop.md)

[See more](https://github.com/serbanghita/Mobile-Detect)

<a name="Thorin::is_email"></a>
## Thorin::is_email
Check if the passed email is valid
```php
if (Thorin::is_email('something@something.com')) {
    // do something
}
```

[Full documentation](/doc/src/functions/is/t_is_email.md)

<a name="Thorin::is_environment"></a>
## Thorin::is_environment
Check if the environment correspond to at least 1 passed environments
```php
if (Thorin::is_environment('testing','production')) {
    // do something
}
```

[Full documentation](/doc/src/functions/is/t_is_environment.md)

<a name="Thorin::is_equal"></a>
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

[Full documentation](/doc/src/functions/is/t_is_equal.md)

[See more](https://github.com/lodash-php/lodash-php/blob/master/src/Lang/isEqual.php)

<a name="Thorin::is_even"></a>
## Thorin::is_even
Return true if the given number is even, false otherwise.
```php
Thorin::is_even(2);
// true
```

[Full documentation](/doc/src/functions/is/t_is_even.md)

[See more](https://github.com/appzcoder/30-seconds-of-php-code)

<a name="Thorin::is_ios"></a>
## Thorin::is_ios
Return true if the request is made from an ios device
```php
if (Thorin::is_ios()) {
  // do something
}
```

[Full documentation](/doc/src/functions/is/t_is_ios.md)

[See more](https://github.com/serbanghita/Mobile-Detect)

<a name="Thorin::is_ip_match"></a>
## Thorin::is_ip_match
Check if the user ip address is in the list passed as argument
```php
if (Thorin::is_ip_match([127.0.0.1])) {
  // user ip is banned so do something
}
```

[Full documentation](/doc/src/functions/is/t_is_ip_match.md)

<a name="Thorin::is_mobile"></a>
## Thorin::is_mobile
Return true if the request is made from a mobile device
```php
if (Thorin::is_mobile()) {
  // do something
}
```

[Full documentation](/doc/src/functions/is/t_is_mobile.md)

[See more](https://github.com/serbanghita/Mobile-Detect)

<a name="Thorin::is_odd"></a>
## Thorin::is_odd
Returns true if the given number is odd, false otherwise.
```php
Thorin::is_odd(3);
// true
```

[Full documentation](/doc/src/functions/is/t_is_odd.md)

[See more](https://github.com/appzcoder/30-seconds-of-php-code)

<a name="Thorin::is_phone"></a>
## Thorin::is_phone
Return true if the request is made from a phone device
```php
if (Thorin::is_phone()) {
  // do something
}
```

[Full documentation](/doc/src/functions/is/t_is_phone.md)

[See more](https://github.com/serbanghita/Mobile-Detect)

<a name="Thorin::is_tablet"></a>
## Thorin::is_tablet
Return true if the request is made from a tablet device
```php
if (Thorin::is_tablet()) {
  // do something
}
```

[Full documentation](/doc/src/functions/is/t_is_tablet.md)

[See more](https://github.com/serbanghita/Mobile-Detect)
