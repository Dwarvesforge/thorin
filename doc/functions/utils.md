# utils

- [Thorin::current_url](#Thorin_current_url)
- [Thorin::define](#Thorin_define)
- [Thorin::domain](#Thorin_domain)
- [Thorin::env](#Thorin_env)
- [Thorin::environment](#Thorin_environment)
- [Thorin::ip_address](#Thorin_ip_address)
- [Thorin::location](#Thorin_location)
- [Thorin::pre](#Thorin_pre)
- [Thorin::protocol](#Thorin_protocol)
- [Thorin::redirect_ip](#Thorin_redirect_ip)
- [Thorin::safe_redirect](#Thorin_safe_redirect)
- [Thorin::whois](#Thorin_whois)
<a name="Thorin_current_url"></a>
## Thorin::current_url
Return the current url
```php
$current = Thorin::current_url();
```

[Full documentation](/doc/src/functions/utils/current_url.md)

<a name="Thorin_define"></a>
## Thorin::define
Define a constant if not already defined


[Full documentation](/doc/src/functions/utils/define.md)

<a name="Thorin_domain"></a>
## Thorin::domain
Return the domain
```php
$domain = Thorin::domain();
```

[Full documentation](/doc/src/functions/utils/domain.md)

<a name="Thorin_env"></a>
## Thorin::env
Return the environment variable that correspond to the requested one or a default value passed as a second parameter
```php
$myValue = Thorin::env('MY_VARIABLE', false);
```

[Full documentation](/doc/src/functions/utils/env.md)

<a name="Thorin_environment"></a>
## Thorin::environment
Return the environment set in `app.ENVIRONMENT` config
```php
$env = Thorin::environment();
```

[Full documentation](/doc/src/functions/utils/environment.md)

<a name="Thorin_ip_address"></a>
## Thorin::ip_address
Return the ip address of the user
```php
$ip = Thorin::ip_address();
```

[Full documentation](/doc/src/functions/utils/ip_address.md)

<a name="Thorin_location"></a>
## Thorin::location
Retreive a location from a passed ip address. If no ip address is passed,
will try to get the user one automaticaly.
This function use [ipinfo.io](https://ipinfo.io) webservice that authorize 1'000 requests per day so you are warned.
```php
$location = Thorin::location();
```

[Full documentation](/doc/src/functions/utils/location.md)

<a name="Thorin_pre"></a>
## Thorin::pre
Format/beautify array

```php
print Thorin::pre($myArray);
```

[Full documentation](/doc/src/functions/utils/pre.md)

<a name="Thorin_protocol"></a>
## Thorin::protocol
Return the protocol used to request the page
```php
$protocol = Thorin::protocol();
```

[Full documentation](/doc/src/functions/utils/protocol.md)

<a name="Thorin_redirect_ip"></a>
## Thorin::redirect_ip
Check some ip's and redirect the passed ones to the passed url

[Full documentation](/doc/src/functions/utils/redirect_ip.md)

<a name="Thorin_safe_redirect"></a>
## Thorin::safe_redirect
Redirect the user to a specific url. If the header redirect did not work, print a redirect in the html
```php
Thorin::safe_redirect('https://google.com');
```

[Full documentation](/doc/src/functions/utils/safe_redirect.md)

[See more](https://www.jonasjohn.de/snippets/php/secure-redirect.htm)

<a name="Thorin_whois"></a>
## Thorin::whois
Query the whois service and return the response for the passed domain name
```php
$whois = Thorin::whois('olivierbossel.com');
```

[Full documentation](/doc/src/functions/utils/whois.md)
