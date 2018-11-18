# utils

- [Thorin::current_url](#Thorin::current_url)
- [Thorin::define](#Thorin::define)
- [Thorin::domain](#Thorin::domain)
- [Thorin::env](#Thorin::env)
- [Thorin::environment](#Thorin::environment)
- [Thorin::ip_address](#Thorin::ip_address)
- [Thorin::location](#Thorin::location)
- [Thorin::pre](#Thorin::pre)
- [Thorin::protocol](#Thorin::protocol)
- [Thorin::redirect_ip](#Thorin::redirect_ip)
- [Thorin::safe_redirect](#Thorin::safe_redirect)
- [Thorin::whois](#Thorin::whois)
## Thorin::current_url
Return the current url
```php
$current = Thorin::current_url();
```

[Full documentation](/doc/src/functions/utils/t_current_url.md)

## Thorin::define
Define a constant if not already defined


[Full documentation](/doc/src/functions/utils/t_define.md)

## Thorin::domain
Return the domain
```php
$domain = Thorin::domain();
```

[Full documentation](/doc/src/functions/utils/t_domain.md)

## Thorin::env
Return the environment variable that correspond to the requested one or a default value passed as a second parameter
```php
$myValue = Thorin::env('MY_VARIABLE', false);
```

[Full documentation](/doc/src/functions/utils/t_env.md)

## Thorin::environment
Return the environment set in `app.ENVIRONMENT` config
```php
$env = Thorin::environment();
```

[Full documentation](/doc/src/functions/utils/t_environment.md)

## Thorin::ip_address
Return the ip address of the user
```php
$ip = Thorin::ip_address();
```

[Full documentation](/doc/src/functions/utils/t_ip_address.md)

## Thorin::location
Retreive a location from a passed ip address. If no ip address is passed,
will try to get the user one automaticaly.
This function use [ipinfo.io](https://ipinfo.io) webservice that authorize 1'000 requests per day so you are warned.
```php
$location = Thorin::location();
```

[Full documentation](/doc/src/functions/utils/t_location.md)

## Thorin::pre
Format/beautify array

```php
print Thorin::pre($myArray);
```

[Full documentation](/doc/src/functions/utils/t_pre.md)

## Thorin::protocol
Return the protocol used to request the page
```php
$protocol = Thorin::protocol();
```

[Full documentation](/doc/src/functions/utils/t_protocol.md)

## Thorin::redirect_ip
Check some ip's and redirect the passed ones to the passed url

[Full documentation](/doc/src/functions/utils/t_redirect_ip.md)

## Thorin::safe_redirect
Redirect the user to a specific url. If the header redirect did not work, print a redirect in the html
```php
Thorin::safe_redirect('https://google.com');
```

[Full documentation](/doc/src/functions/utils/t_safe_redirect.md)

[See more](https://www.jonasjohn.de/snippets/php/secure-redirect.htm)

## Thorin::whois
Query the whois service and return the response for the passed domain name
```php
$whois = Thorin::whois('olivierbossel.com');
```

[Full documentation](/doc/src/functions/utils/t_whois.md)
