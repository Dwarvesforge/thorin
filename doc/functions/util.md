# util

- [Thorin::define](#Thorin_define)
- [Thorin::env](#Thorin_env)
- [Thorin::environment](#Thorin_environment)
- [Thorin::eq](#Thorin_eq)
- [Thorin::ip_address](#Thorin_ip_address)
- [Thorin::location](#Thorin_location)
- [Thorin::pre](#Thorin_pre)
- [Thorin::redirect_ip](#Thorin_redirect_ip)
- [Thorin::safe_redirect](#Thorin_safe_redirect)
- [Thorin::whois](#Thorin_whois)
<a name="Thorin_define"></a>
## Thorin::define
Define a constant if not already defined


[Full documentation](/doc/src/functions/util/define.md)

<a name="Thorin_env"></a>
## Thorin::env
Return the environment variable that correspond to the requested one or a default value passed as a second parameter
```php
$myValue = Thorin::env('MY_VARIABLE', false);
```

[Full documentation](/doc/src/functions/util/env.md)

<a name="Thorin_environment"></a>
## Thorin::environment
Return the application environment set in `app.environment` config
```php
$env = Thorin::environment();
// development
```

[Full documentation](/doc/src/functions/util/environment.md)

<a name="Thorin_eq"></a>
## Thorin::eq
Performs a comparison between two values to determine if they are equivalent

```php
Thorin::eq(['a' => 1], ['a' => 1]);
// true
```

[Full documentation](/doc/src/functions/util/eq.md)

[See more](https://github.com/lodash-php/lodash-php/blob/master/src/Lang/eq.php)

<a name="Thorin_ip_address"></a>
## Thorin::ip_address
Return the ip address of the user
```php
$ip = Thorin::ip_address();
```

[Full documentation](/doc/src/functions/util/ip_address.md)

<a name="Thorin_location"></a>
## Thorin::location
Retreive a location from a passed ip address. If no ip address is passed,
will try to get the user one automaticaly.
This function use [ipinfo.io](https://ipinfo.io) webservice that authorize 1'000 requests per day so you are warned.
```php
$location = Thorin::location();
```

[Full documentation](/doc/src/functions/util/location.md)

<a name="Thorin_pre"></a>
## Thorin::pre
Format/beautify array

```php
print Thorin::pre($myArray);
```

[Full documentation](/doc/src/functions/util/pre.md)

<a name="Thorin_redirect_ip"></a>
## Thorin::redirect_ip
Check some ip's and redirect the passed ones to the passed url

[Full documentation](/doc/src/functions/util/redirect_ip.md)

<a name="Thorin_safe_redirect"></a>
## Thorin::safe_redirect
Redirect the user to a specific url. If the header redirect did not work, print a redirect in the html
```php
Thorin::safe_redirect('https://google.com');
```

[Full documentation](/doc/src/functions/util/safe_redirect.md)

[See more](https://www.jonasjohn.de/snippets/php/secure-redirect.htm)

<a name="Thorin_whois"></a>
## Thorin::whois
Query the whois service and return the response for the passed domain name
```php
$whois = Thorin::whois('olivierbossel.com');
```

[Full documentation](/doc/src/functions/util/whois.md)
