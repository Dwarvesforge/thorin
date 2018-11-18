# vendor

- [Thorin::_](#Thorin__)
- [Thorin::dotenv](#Thorin_dotenv)
- [Thorin::faker](#Thorin_faker)
- [Thorin::lodash](#Thorin_lodash)
- [Thorin::mobile_detect](#Thorin_mobile_detect)
- [Thorin::sh](#Thorin_sh)
- [Thorin::validator](#Thorin_validator)
<a name="Thorin__"></a>
## Thorin::_
Return the lodash php class that you can use directly
```php
$newArray = Thorin::_()::concat($array, 2, [3], [[4]]);
```

[Full documentation](/doc/src/functions/vendor/_.md)

<a name="Thorin_dotenv"></a>
## Thorin::dotenv
Return the dotenv instance used to parse the .env file at the root of the project
```php
Thorin::dotenv()->required('MYVAR');
```

[Full documentation](/doc/src/functions/vendor/dotenv.md)

[See more](https://github.com/vlucas/phpdotenv)

<a name="Thorin_t_faker"></a>
## Thorin::t_faker
Return an instance of faker with the one
you can call all the faker methods
```php
$faker = Thorin::faker()
// use faker here...
```

[Full documentation](/doc/src/functions/vendor/faker.md)

<a name="Thorin_lodash"></a>
## Thorin::lodash
Return the lodash php class that you can use directly
```php
$newArray = Thorin::lodash()::concat($array, 2, [3], [[4]]);
```

[Full documentation](/doc/src/functions/vendor/lodash.md)

[See more](https://github.com/lodash-php/lodash-php)

<a name="Thorin_mobile_detect"></a>
## Thorin::mobile_detect
Return a mobile detect instance to work with
```php
if (Thorin::mobile_detect()->is('Firefox')) {
  // do something
}
```

[Full documentation](/doc/src/functions/vendor/mobile_detect.md)

[See more](https://github.com/serbanghita/Mobile-Detect)

<a name="Thorin_sh"></a>
## Thorin::sh
Call a shell function and pass it some arguments.
This use the cool [Shellwrap](https://github.com/MrRio/shellwrap) library to work.
```php
$res = Thorin::sh('ls', '-la');
```

[Full documentation](/doc/src/functions/vendor/sh.md)

<a name="Thorin_validator"></a>
## Thorin::validator
Return a Respect Validation class instance to work with
```php
Thorin::validator()->alnum()->length(1,15)->validate('alganet'); // true
```

[Full documentation](/doc/src/functions/vendor/validator.md)

[See more](https://respect-validation.readthedocs.io/en/1.1/)