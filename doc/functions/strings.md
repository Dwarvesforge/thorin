# strings

- [Thorin::str_clean_cut](#Thorin_str_clean_cut)
- [Thorin::str_headslash](#Thorin_str_headslash)
- [Thorin::str_is_end_with](#Thorin_str_is_end_with)
- [Thorin::str_is_lowercase](#Thorin_str_is_lowercase)
- [Thorin::str_is_start_with](#Thorin_str_is_start_with)
- [Thorin::str_is_upper_case](#Thorin_str_is_upper_case)
- [Thorin::str_random](#Thorin_str_random)
- [Thorin::str_remove_whitespaces](#Thorin_str_remove_whitespaces)
- [Thorin::str_slug](#Thorin_str_slug)
- [Thorin::str_tailslash](#Thorin_str_tailslash)
<a name="Thorin_str_clean_cut"></a>
## Thorin::str_clean_cut
Return a clean string with max lenght


[Full documentation](/doc/src/functions/strings/str_clean_cut.md)

<a name="Thorin_str_headslash"></a>
## Thorin::str_headslash
Make sure the passed string has a slash at the begining


[Full documentation](/doc/src/functions/strings/str_headslash.md)

<a name="Thorin_str_is_end_with"></a>
## Thorin::str_is_end_with
Check if the passed string end with the other passed string
```php
if (Thorin::str_is_end_with($myText, 'world')) {
  // do something here
}
```

[Full documentation](/doc/src/functions/strings/str_is_end_with.md)

<a name="Thorin_str_is_lower_case"></a>
## Thorin::str_is_lower_case
Check if the passed string is lower case
```php
Thorin::str_is_lower_case('Hello world');
// false
```

[Full documentation](/doc/src/functions/strings/str_is_lowercase.md)

[See more](https://github.com/appzcoder/30-seconds-of-php-code)

<a name="Thorin_str_is_start_with"></a>
## Thorin::str_is_start_with
Check if the passed string start with the other passed string
```php
if (Thorin::str_is_start_with($myText, 'hello world')) {
  // do something here
}
```

[Full documentation](/doc/src/functions/strings/str_is_start_with.md)

<a name="Thorin_str_is_upper_case"></a>
## Thorin::str_is_upper_case
Check if the passed string is upper case
```php
Thorin::str_is_upper_case('Hello world');
// false
```

[Full documentation](/doc/src/functions/strings/str_is_upper_case.md)

[See more](https://github.com/appzcoder/30-seconds-of-php-code)

<a name="Thorin_str_random"></a>
## Thorin::str_random
Function which generate random string

```php
Thorin::str_random(10);
// fjeik9eud8
```

[Full documentation](/doc/src/functions/strings/str_random.md)

<a name="Thorin_str_remove_whitespaces"></a>
## Thorin::str_remove_whitespaces
Remove all whitespaces in the passed string
```php
$whitespaceFree = Thorin::str_remove_whitespaces('hello world');
```

[Full documentation](/doc/src/functions/strings/str_remove_whitespaces.md)

<a name="Thorin_str_slug"></a>
## Thorin::str_slug
Generate a slug from a string like a title or whatever
```php
print Thorin::str_slug('Hello world and universe');
// hello-world-and-universe
```

[Full documentation](/doc/src/functions/strings/str_slug.md)

<a name="Thorin_str_tailslash"></a>
## Thorin::str_tailslash
Make sure the passed string has a slash at the end


[Full documentation](/doc/src/functions/strings/str_tailslash.md)
