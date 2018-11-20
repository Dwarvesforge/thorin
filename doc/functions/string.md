# string

- [Thorin::str_autolink](#Thorin_str_autolink)
- [Thorin::str_camel_case](#Thorin_str_camel_case)
- [Thorin::str_capitalize](#Thorin_str_capitalize)
- [Thorin::str_clean_cut](#Thorin_str_clean_cut)
- [Thorin::str_deburr](#Thorin_str_deburr)
- [Thorin::str_escape_attr](#Thorin_str_escape_attr)
- [Thorin::str_escape_regexp](#Thorin_str_escape_regexp)
- [Thorin::str_escape](#Thorin_str_escape)
- [Thorin::str_headslash](#Thorin_str_headslash)
- [Thorin::str_is_end_with](#Thorin_str_is_end_with)
- [Thorin::str_is_lowercase](#Thorin_str_is_lowercase)
- [Thorin::str_is_start_with](#Thorin_str_is_start_with)
- [Thorin::str_is_upper_case](#Thorin_str_is_upper_case)
- [Thorin::str_kebab_case](#Thorin_str_kebab_case)
- [Thorin::str_lower_case](#Thorin_str_lower_case)
- [Thorin::str_pad_end](#Thorin_str_pad_end)
- [Thorin::str_pad_start](#Thorin_str_pad_start)
- [Thorin::str_pad](#Thorin_str_pad)
- [Thorin::str_random](#Thorin_str_random)
- [Thorin::str_remove_whitespaces](#Thorin_str_remove_whitespaces)
- [Thorin::str_repeat](#Thorin_str_repeat)
- [Thorin::str_replace](#Thorin_str_replace)
- [Thorin::str_slug](#Thorin_str_slug)
- [Thorin::str_snake_case](#Thorin_str_snake_case)
- [Thorin::str_split](#Thorin_str_split)
- [Thorin::str_start_case](#Thorin_str_start_case)
- [Thorin::str_tailslash](#Thorin_str_tailslash)
- [Thorin::str_to_html](#Thorin_str_to_html)
- [Thorin::str_unescape](#Thorin_str_unescape)
<a name="Thorin_str_autolink"></a>
## Thorin::str_autolink
Automaticaly transform urls into links in the passed text.
```php
$text = 'Hello world this is a nice http://google.com sample of text.';
$newText = Thorin::str_autolink($text);
// Hello world this is a nice <a href="http://google.com">http://google.com</a> sample of text.
```

[Full documentation](/doc/src/functions/string/str_autolink.md)

<a name="Thorin_str_camel_case"></a>
## Thorin::str_camel_case
Converts `string` to [camel case](https://en.wikipedia.org/wiki/CamelCase).

```php
Thorin::str_camel_case('Foo Bar');
// fooBar
Thorin::str_camel_case('--foo-bar--');
// fooBar
Thorin::str_camel_case('__FOO_BAR__');
// fooBar
```

[Full documentation](/doc/src/functions/string/str_camel_case.md)

[See more](https://github.com/lodash-php/lodash-php/blob/master/src/String/camelCase.php)

<a name="Thorin_str_capitalize"></a>
## Thorin::str_capitalize
Converts the first character of `string` to upper case and the remaining
to lower case.

```php
Thorin::str_capitalize('FRED');
// Fred
```

[Full documentation](/doc/src/functions/string/str_capitalize.md)

[See more](https://github.com/lodash-php/lodash-php/blob/master/src/String/capitalize.php)

<a name="Thorin_str_clean_cut"></a>
## Thorin::str_clean_cut
Return a clean string with max lenght


[Full documentation](/doc/src/functions/string/str_clean_cut.md)

<a name="Thorin_str_deburr"></a>
## Thorin::str_deburr
Deburrs `string` by converting
[Latin-1 Supplement](https =>//en.wikipedia.org/wiki/Latin-1_Supplement_(Unicode_block)#Character_table)
and [Latin Extended-A](https =>//en.wikipedia.org/wiki/Latin_Extended-A)
letters to basic Latin letters and removing
[combining diacritical marks](https =>//en.wikipedia.org/wiki/Combining_Diacritical_Marks).

```php
Thorin::str_deburr('déjà vue');
// deja vue
```

[Full documentation](/doc/src/functions/string/str_deburr.md)

[See more](https://github.com/lodash-php/lodash-php/blob/master/src/String/deburr.php)

<a name="Thorin_str_escape_attr"></a>
## Thorin::str_escape_attr
Escape the passed string to ensure it will not break any html when printed inside an attribute

```php
Thorin::str_escape_attr('This is my cool "escaped" value');
// This is my cool &quot;escaped&quot; value
```

[Full documentation](/doc/src/functions/string/str_escape_attr.md)

<a name="Thorin_str_escape_regexp"></a>
## Thorin::str_escape_regexp
Escapes the `RegExp` special characters "^", "$", "\", ".", "*", "+",
"?", "(", ")", "[", "]", "{", "}", and "|" in `string`.

```php
Thorin::str_escape_regexp('[lodash](https://lodash.com/)');
// \[lodash\]\(https://lodash\.com/\)
```

[Full documentation](/doc/src/functions/string/str_escape_regexp.md)

[See more](https://github.com/lodash-php/lodash-php/blob/master/src/String/escapeRegExp.php)

<a name="Thorin_str_escape"></a>
## Thorin::str_escape
Converts the characters "&", "<", ">", '"', and "'" in `string` to their
corresponding HTML entities.

```php
Thorin::str_escape('fred, barney, & pebbles');
// fred, barney, &amp pebbles
```

[Full documentation](/doc/src/functions/string/str_escape.md)

[See more](https://github.com/lodash-php/lodash-php/blob/master/src/String/escape.php)

<a name="Thorin_str_headslash"></a>
## Thorin::str_headslash
Make sure the passed string has a slash at the begining


[Full documentation](/doc/src/functions/string/str_headslash.md)

<a name="Thorin_str_is_end_with"></a>
## Thorin::str_is_end_with
Check if the passed string end with the other passed string
```php
if (Thorin::str_is_end_with($myText, 'world')) {
  // do something here
}
```

[Full documentation](/doc/src/functions/string/str_is_end_with.md)

<a name="Thorin_str_is_lower_case"></a>
## Thorin::str_is_lower_case
Check if the passed string is lower case
```php
Thorin::str_is_lower_case('Hello world');
// false
```

[Full documentation](/doc/src/functions/string/str_is_lowercase.md)

[See more](https://github.com/appzcoder/30-seconds-of-php-code)

<a name="Thorin_str_is_start_with"></a>
## Thorin::str_is_start_with
Check if the passed string start with the other passed string
```php
if (Thorin::str_is_start_with($myText, 'hello world')) {
  // do something here
}
```

[Full documentation](/doc/src/functions/string/str_is_start_with.md)

<a name="Thorin_str_is_upper_case"></a>
## Thorin::str_is_upper_case
Check if the passed string is upper case
```php
Thorin::str_is_upper_case('Hello world');
// false
```

[Full documentation](/doc/src/functions/string/str_is_upper_case.md)

[See more](https://github.com/appzcoder/30-seconds-of-php-code)

<a name="Thorin_str_kebab_case"></a>
## Thorin::str_kebab_case
Converts `string` to
[kebab case](https://en.wikipedia.org/wiki/Letter_case#Special_case_styles).

```php
Thorin::str_kebab_case('Foo Bar');
// foo-bar
Thorin::str_kebab_case('fooBar');
// foo-bar
```

[Full documentation](/doc/src/functions/string/str_kebab_case.md)

[See more](https://github.com/lodash-php/lodash-php/blob/master/src/String/kebabCase.php)

<a name="Thorin_str_lower_case"></a>
## Thorin::str_lower_case
Converts `string`, as space separated words, to lower case.

```php
Thorin::str_lower_case('--Foo-Bar--');
// foo bar
```

[Full documentation](/doc/src/functions/string/str_lower_case.md)

[See more](https://github.com/lodash-php/lodash-php/blob/master/src/String/lowerCase.php)

<a name="Thorin_str_pad_end"></a>
## Thorin::str_pad_end
Pads `string` on the right side if it's shorter than `length`. Padding
characters are truncated if they exceed `length`.

```php
Thorin::str_pad_end('abc', 6);
// 'abc   '
Thorin::str_pad_end('abs', 6, '_-');
// 'abc_-_'
```

[Full documentation](/doc/src/functions/string/str_pad_end.md)

[See more](https://github.com/lodash-php/lodash-php/blob/master/src/String/padEnd.php)

<a name="Thorin_str_pad_start"></a>
## Thorin::str_pad_start
Pads `string` on the left side if it's shorter than `length`. Padding
characters are truncated if they exceed `length`.

```php
Thorin::str_pad_startd('abc', 6);
// '   abc'
Thorin::str_pad_start('abs', 6, '_-');
// '_-_abc'
```

[Full documentation](/doc/src/functions/string/str_pad_start.md)

[See more](https://github.com/lodash-php/lodash-php/blob/master/src/String/padStart.php)

<a name="Thorin_str_pad"></a>
## Thorin::str_pad
Pads `string` on the left and right sides if it's shorter than `length`.
Padding characters are truncated if they can't be evenly divided by `length`.

```php
Thorin::str_pad('abc', 8);
// '  abc   '
Thorin::str_pad('abs', 8, '_-');
// '_-abc_-_'
```

[Full documentation](/doc/src/functions/string/str_pad.md)

[See more](https://github.com/lodash-php/lodash-php/blob/master/src/String/pad.php)

<a name="Thorin_str_random"></a>
## Thorin::str_random
Function which generate random string

```php
Thorin::str_random(10);
// fjeik9eud8
```

[Full documentation](/doc/src/functions/string/str_random.md)

<a name="Thorin_str_remove_whitespaces"></a>
## Thorin::str_remove_whitespaces
Remove all whitespaces in the passed string
```php
$whitespaceFree = Thorin::str_remove_whitespaces('hello world');
```

[Full documentation](/doc/src/functions/string/str_remove_whitespaces.md)

<a name="Thorin_str_repeat"></a>
## Thorin::str_repeat
Repeats the given string `n` times.

```php
Thorin::str_repeat('*', 3);
// => '***'
Thorin::str_repeat('abc', 2);
// => 'abcabc'
Thorin::str_repeat('abc', 0);
// => ''
```

[Full documentation](/doc/src/functions/string/str_repeat.md)

[See more](https://github.com/lodash-php/lodash-php/blob/master/src/String/repeat.php)

<a name="Thorin_str_replace"></a>
## Thorin::str_replace
Replaces matches for `pattern` in `string` with `replacement`.

**Note:** This method is based on
[`String#replace`](https://mdn.io/String/replace).

```php
Thorin::str_replace('Hi Fred', 'Fred', 'Barney')
// => 'Hi Barney'
```

[Full documentation](/doc/src/functions/string/str_replace.md)

[See more](https://github.com/lodash-php/lodash-php/blob/master/src/String/replace.php)

<a name="Thorin_str_slug"></a>
## Thorin::str_slug
Generate a slug from a string like a title or whatever
```php
print Thorin::str_slug('Hello world and universe');
// hello-world-and-universe
```

[Full documentation](/doc/src/functions/string/str_slug.md)

<a name="Thorin_str_snake_case"></a>
## Thorin::str_snake_case
Converts `string` to
[snake case](https://en.wikipedia.org/wiki/Snake_case).


[Full documentation](/doc/src/functions/string/str_snake_case.md)

[See more](https://github.com/lodash-php/lodash-php/blob/master/src/String/snakeCase.php)

<a name="Thorin_str_split"></a>
## Thorin::str_split
Splits `string` by `separator`.

**Note:** This method is based on
[`String#split`](https://mdn.io/String/split).

```php
Thorin::str_split('a-b-c', '-', 2);
// => ['a', 'b']
```

[Full documentation](/doc/src/functions/string/str_split.md)

[See more](https://github.com/lodash-php/lodash-php/blob/master/src/String/split.php)

<a name="Thorin_str_start_case"></a>
## Thorin::str_start_case
Converts `string` to
[start case](https://en.wikipedia.org/wiki/Letter_case#Stylistic_or_specialised_usage).

```php
Thorin::str_start_case('--foo-bar--');
// => 'Foo Bar'

Thorin::str_start_case('fooBar');
// => 'Foo Bar'

Thorin::str_start_case('__FOO_BAR__');
// => 'FOO BAR'
```

[Full documentation](/doc/src/functions/string/str_start_case.md)

[See more](https://github.com/lodash-php/lodash-php/blob/master/src/String/startCase.php)

<a name="Thorin_str_tailslash"></a>
## Thorin::str_tailslash
Make sure the passed string has a slash at the end


[Full documentation](/doc/src/functions/string/str_tailslash.md)

<a name="Thorin_str_to_html"></a>
## Thorin::str_to_html
Format a simple passed text into a nice formated html one.
This will transform the new line into <br>, as well as the line breaks into paragraphs

```php
Thorin::str_to_html('Hello world');
// <p>Hello world</p>
```

[Full documentation](/doc/src/functions/string/str_to_html.md)

<a name="Thorin_str_unescape"></a>
## Thorin::str_unescape
The inverse of `escape`this method converts the HTML entities
`&amp;`, `&lt;`, `&gt;`, `&quot;` and `&#39;` in `string` to
their corresponding characters.

```php
Thorin::str_unescape('fred, barney, &amp; pebbles');
// 'fred, barney, & pebbles'
```

[Full documentation](/doc/src/functions/string/str_unescape.md)

[See more](https://github.com/lodash-php/lodash-php/blob/master/src/String/unescape.php)
