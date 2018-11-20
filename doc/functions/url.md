# url

- [Thorin::url_asset](#Thorin_url_asset)
- [Thorin::url_current](#Thorin_url_current)
- [Thorin::url_domain](#Thorin_url_domain)
- [Thorin::url_extract_from_str](#Thorin_url_extract_from_str)
- [Thorin::url_query_string](#Thorin_url_query_string)
- [Thorin::url_root](#Thorin_url_root)
- [Thorin::url_sanitize](#Thorin_url_sanitize)
- [Thorin::url_segments](#Thorin_url_segments)
- [Thorin::url_subdomain](#Thorin_url_subdomain)
- [Thorin::url_tld](#Thorin_url_tld)
<a name="Thorin_url_asset"></a>
## Thorin::url_asset
Return a url relative to the `path.assets` and the `app.root_url` config

```php
Thorin::url_asset('my/cool/image.jpg');
// /dist/my/cool/image.jpg

Thorin::url_asset('my/cool/image.jpg', true);
// https://thorin.io/dist/my/cool/image.jpg
```

[Full documentation](/doc/src/functions/url/url_asset.md)

<a name="Thorin_url_current"></a>
## Thorin::url_current
Return the current url

```php
Thorin::url_current();
// https://thorin.io/hello/world?query=string
```

[Full documentation](/doc/src/functions/url/url_current.md)

<a name="Thorin_url_domain"></a>
## Thorin::url_domain
Get domain of the provided url in array format.
If no url is specified, take the current one as input.

```php
Thorin::url_domain('http://thorin.io/hello/world?query=value1');
// thorin.io
```

[Full documentation](/doc/src/functions/url/url_domain.md)

<a name="Thorin_url_extract_from_str"></a>
## Thorin::url_extract_from_str
Extract the url's from the passed string. Return the result in array format

```php
$string = 'Hello https://google.com, this is the universe talking';
Thorin::url_extract_from_str($string);
// ['https://google.com']
```

[Full documentation](/doc/src/functions/url/url_extract_from_str.md)

<a name="Thorin_url_query_string"></a>
## Thorin::url_query_string
Get the query string of a url in array key->pair format.
If no url is provided, will take the current one as input.

```php
Thorin::url_query_string('https://thorin.io?query=value1&string=value2');
// ['query' => 'value1', 'string' => 'value2']
```

[Full documentation](/doc/src/functions/url/url_query_string.md)

<a name="Thorin_url_root"></a>
## Thorin::url_root
Return the root website url depending on the `app.root_url` config

```php
Thorin::url_root('my/cool/file.pdf');
// /my/cool/file.pdf

Thorin::url_root('my/cool/file.pdf', true);
// https://thorin.io/my/cool/file.pdf
```

[Full documentation](/doc/src/functions/url/url_root.md)

<a name="Thorin_url_sanitize"></a>
## Thorin::url_sanitize
Return a sanitized version of the passed path. Here's the actions applied on the path:
- Ensure no double "/" in the path like http://my-domain.com/some//thing
- Apply the filter_var function withe the FILTER_SANITIZE_URL flag
```php
Thorin::url_sanitize('https://www.w3schoo��ls.co�m');
// https://www.w3schools.com

Thorin::url_sanitize('https://coco.com/hello//world');
// https://coco.com/hello/world
```

[Full documentation](/doc/src/functions/url/url_sanitize.md)

<a name="Thorin_url_segments"></a>
## Thorin::url_segments
Get segments of the provided url in array format.
If no url is specified, take the current one as input.

```php
Thorin::url_segments('http://thorin.io/hello/world?query=value1');
// ['hello','world']
```

[Full documentation](/doc/src/functions/url/url_segments.md)

<a name="Thorin_url_subdomain"></a>
## Thorin::url_subdomain
Get subdomain of the provided url in array format.
If no url is specified, take the current one as input.

```php
Thorin::url_subdomain('http://hello.thorin.io/hello/world?query=value1');
// hello
```

[Full documentation](/doc/src/functions/url/url_subdomain.md)

<a name="Thorin_url_tld"></a>
## Thorin::url_tld
Get top level domain of the provided url in array format.
If no url is specified, take the current one as input.

```php
Thorin::url_tld('http://thorin.io/hello/world?query=value1');
// io
```

[Full documentation](/doc/src/functions/url/url_tld.md)
