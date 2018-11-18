# vendor

- [Thorin::_](#Thorin::_)
- [Thorin::dotenv](#Thorin::dotenv)
- [Thorin::faker](#Thorin::faker)
- [Thorin::lodash](#Thorin::lodash)
- [Thorin::mobile_detect](#Thorin::mobile_detect)
- [Thorin::sh](#Thorin::sh)
- [Thorin::validator](#Thorin::validator)
## Thorin::_
Return the lodash php class that you can use directly
```php
$newArray = Thorin::_()::concat($array, 2, [3], [[4]]);
```

[Full documentation](/doc/src/functions/vendor/t__.md)

## Thorin::dotenv
Return the dotenv instance used to parse the .env file at the root of the project
```php
Thorin::dotenv()->required('MYVAR');
```

[Full documentation](/doc/src/functions/vendor/t_dotenv.md)

[See more](https://github.com/vlucas/phpdotenv)

## Thorin::faker
Return an instance of faker with the one
you can call all the faker methods
```php
$faker = Thorin::faker()
// use faker here...
```

[Full documentation](/doc/src/functions/vendor/t_faker.md)

## Thorin::lodash
Return the lodash php class that you can use directly
```php
$newArray = Thorin::lodash()::concat($array, 2, [3], [[4]]);
```

[Full documentation](/doc/src/functions/vendor/t_lodash.md)

[See more](https://github.com/lodash-php/lodash-php)

## Thorin::mobile_detect
Return a mobile detect instance to work with
```php
if (Thorin::mobile_detect()->is('Firefox')) {
  // do something
}
```

[Full documentation](/doc/src/functions/vendor/t_mobile_detect.md)

[See more](https://github.com/serbanghita/Mobile-Detect)

## Thorin::sh
Call a shell function and pass it some arguments.
This use the cool [Shellwrap](https://github.com/MrRio/shellwrap) library to work.
```php
$res = Thorin::sh('ls', '-la');
```

[Full documentation](/doc/src/functions/vendor/t_sh.md)

## Thorin::validator
Return a Respect Validation class instance to work with
```php
Thorin::validator()->alnum()->length(1,15)->validate('alganet'); // true
```

[Full documentation](/doc/src/functions/vendor/t_validator.md)

[See more](https://respect-validation.readthedocs.io/en/1.1/)
