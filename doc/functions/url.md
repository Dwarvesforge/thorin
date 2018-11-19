# url

- [Thorin::url_asset](#Thorin_url_asset)
- [Thorin::url_root](#Thorin_url_root)
- [Thorin::url_sanitize](#Thorin_url_sanitize)
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
