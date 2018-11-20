# url

- [Thorin::asset_url](#Thorin_asset_url)
- [Thorin::current_url](#Thorin_current_url)
- [Thorin::domain](#Thorin_domain)
- [Thorin::extract_urls_from_str](#Thorin_extract_urls_from_str)
- [Thorin::protocol](#Thorin_protocol)
- [Thorin::query_string](#Thorin_query_string)
- [Thorin::root_url](#Thorin_root_url)
- [Thorin::sanitize_url](#Thorin_sanitize_url)
- [Thorin::shorten_url](#Thorin_shorten_url)
- [Thorin::subdomain](#Thorin_subdomain)
- [Thorin::tld](#Thorin_tld)
- [Thorin::url_segments](#Thorin_url_segments)
<a name="Thorin_asset_url"></a>
## Thorin::asset_url
Return a url relative to the `path.assets` and the `app.root_url` config

```php
Thorin::asset_url('my/cool/image.jpg');
// /dist/my/cool/image.jpg

Thorin::asset_url('my/cool/image.jpg', true);
// https://thorin.io/dist/my/cool/image.jpg
```

[Full documentation](/doc/src/functions/url/asset_url.md)

<a name="Thorin_current_url"></a>
## Thorin::current_url
Return the current url

```php
Thorin::current_url();
// https://thorin.io/hello/world?query=string
```

[Full documentation](/doc/src/functions/url/current_url.md)

<a name="Thorin_domain"></a>
## Thorin::domain
Get domain of the provided url in array format.
If no url is specified, take the current one as input.

```php
Thorin::domain('http://thorin.io/hello/world?query=value1');
// thorin.io
```

[Full documentation](/doc/src/functions/url/domain.md)

<a name="Thorin_extract_urls_from_str"></a>
## Thorin::extract_urls_from_str
Extract the url's from the passed string. Return the result in array format

```php
$string = 'Hello https://google.com, this is the universe talking';
Thorin::extract_urls_from_str($string);
// ['https://google.com']
```

[Full documentation](/doc/src/functions/url/extract_urls_from_str.md)

<a name="Thorin_protocol"></a>
## Thorin::protocol
Get the protocol of a url.
If no url is provided, will take the current one as input.

```php
Thorin::protocol('https://thorin.io?query=value1&string=value2');
// https
```

[Full documentation](/doc/src/functions/url/protocol.md)

<a name="Thorin_query_string"></a>
## Thorin::query_string
Get the query string of a url in array key->pair format.
If no url is provided, will take the current one as input.

```php
Thorin::query_string('https://thorin.io?query=value1&string=value2');
// ['query' => 'value1', 'string' => 'value2']
```

[Full documentation](/doc/src/functions/url/query_string.md)

<a name="Thorin_root_url"></a>
## Thorin::root_url
Return the root website url depending on the `app.root_url` config

```php
Thorin::root_url('my/cool/file.pdf');
// /my/cool/file.pdf

Thorin::root_url('my/cool/file.pdf', true);
// https://thorin.io/my/cool/file.pdf
```

[Full documentation](/doc/src/functions/url/root_url.md)

<a name="Thorin_sanitize_url"></a>
## Thorin::sanitize_url
Return a sanitized version of the passed path. Here's the actions applied on the path:
- Ensure no double "/" in the path like http://my-domain.com/some//thing
- Apply the filter_var function withe the FILTER_SANITIZE_URL flag
```php
Thorin::sanitize_url('https://www.w3schoo��ls.co�m');
// https://www.w3schools.com

Thorin::sanitize_url('https://coco.com/hello//world');
// https://coco.com/hello/world
```

[Full documentation](/doc/src/functions/url/sanitize_url.md)

<a name="Thorin_shorten_url"></a>
## Thorin::shorten_url
Shorten a url using the tinyurl service

```php
Thorin::shorten_url('https://thorin.io');
// http://tinyurl.com/y9tcvddg
```

[Full documentation](/doc/src/functions/url/shorten_url.md)

<a name="Thorin_subdomain"></a>
## Thorin::subdomain
Get subdomain of the provided url in array format.
If no url is specified, take the current one as input.

```php
Thorin::subdomain('http://hello.thorin.io/hello/world?query=value1');
// hello
```

[Full documentation](/doc/src/functions/url/subdomain.md)

<a name="Thorin_tld"></a>
## Thorin::tld
Get top level domain of the provided url in array format.
If no url is specified, take the current one as input.

```php
Thorin::tld('http://thorin.io/hello/world?query=value1');
// io
```

[Full documentation](/doc/src/functions/url/tld.md)

<a name="Thorin_url_segments"></a>
## Thorin::url_segments
Get segments of the provided url in array format.
If no url is specified, take the current one as input.

```php
Thorin::url_segments('http://thorin.io/hello/world?query=value1');
// ['hello','world']
```

[Full documentation](/doc/src/functions/url/url_segments.md)
