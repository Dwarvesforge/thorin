# path

- [Thorin::path_app](#Thorin_path_app)
- [Thorin::path_asset](#Thorin_path_asset)
- [Thorin::path_base](#Thorin_path_base)
- [Thorin::path_document_root](#Thorin_path_document_root)
- [Thorin::path_normalize](#Thorin_path_normalize)
- [Thorin::path_root](#Thorin_path_root)
- [Thorin::path_sanitize](#Thorin_path_sanitize)
<a name="Thorin_path_app"></a>
## Thorin::path_app
Return the app path depending on the `path.app` config

```php
Thorin::path_app('config/hello.php');
// /app/root/config/hello.php
```

[Full documentation](/doc/src/functions/path/path_app.md)

<a name="Thorin_path_asset"></a>
## Thorin::path_asset
Return a path relative to the `path.assets` config

```php
Thorin::path_asset('my/cool/picture.jpg');
// /app/root/dist/my/cool/picture.jpg
```

[Full documentation](/doc/src/functions/path/path_asset.md)

<a name="Thorin_path_base"></a>
## Thorin::path_base
Return the base path depending on the `path.base` config

```php
Thorin::path_base('my/cool/picture.jpg');
// /app/root/my/cool/picture.jpg
```

[Full documentation](/doc/src/functions/path/path_base.md)

<a name="Thorin_path_document_root"></a>
## Thorin::path_document_root
Return the document root path depending on the `path.document_root` config

```php
Thorin::path_document_root('my/cool/file.pdf');
// /app/root/public/my/cool/file.pdf
```

[Full documentation](/doc/src/functions/path/path_document_root.md)

<a name="Thorin_path_normalize"></a>
## Thorin::path_normalize
Return a normalized version of the passed path.
1. Resolve all the ../
2. Replace backslashes with forwardslashes
3. Combine multiple slashes into a single slash
```php
$path = Thorin::path_normalize('hello/world/../universe');
// hello/universe
```

[Full documentation](/doc/src/functions/path/path_normalize.md)

<a name="Thorin_path_root"></a>
## Thorin::path_root
Return the document root path depending on the `path.document_root` config

```php
Thorin::path_root('my/cool/file.pdf');
// /app/root/public/my/cool/file.pdf
```

[Full documentation](/doc/src/functions/path/path_root.md)

<a name="Thorin_path_sanitize"></a>
## Thorin::path_sanitize
Sanitize a path for example like "/my/cool/../path/." to "/my/path/"
It will do these actions:
1. Normalize the path (resolve all ../, remove double slashed, etc...)
2. Remove a trailing "."
3. Make sure the path finish with a "/" if it's not a file


[Full documentation](/doc/src/functions/path/path_sanitize.md)
