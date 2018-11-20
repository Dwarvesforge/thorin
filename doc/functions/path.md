# path

- [Thorin::app_path](#Thorin_app_path)
- [Thorin::asset_path](#Thorin_asset_path)
- [Thorin::base_path](#Thorin_base_path)
- [Thorin::document_root_path](#Thorin_document_root_path)
- [Thorin::normalize_path](#Thorin_normalize_path)
- [Thorin::root_path](#Thorin_root_path)
- [Thorin::sanitize_path](#Thorin_sanitize_path)
<a name="Thorin_app_path"></a>
## Thorin::app_path
Return the app path depending on the `path.app` config

```php
Thorin::app_path('config/hello.php');
// /app/root/config/hello.php
```

[Full documentation](/doc/src/functions/path/app_path.md)

<a name="Thorin_asset_path"></a>
## Thorin::asset_path
Return a path relative to the `path.assets` config

```php
Thorin::asset_path('my/cool/picture.jpg');
// /app/root/dist/my/cool/picture.jpg
```

[Full documentation](/doc/src/functions/path/asset_path.md)

<a name="Thorin_base_path"></a>
## Thorin::base_path
Return the base path depending on the `path.base` config

```php
Thorin::base_path('my/cool/picture.jpg');
// /app/root/my/cool/picture.jpg
```

[Full documentation](/doc/src/functions/path/base_path.md)

<a name="Thorin_document_root_path"></a>
## Thorin::document_root_path
Return the document root path depending on the `path.document_root` config

```php
Thorin::document_root_path('my/cool/file.pdf');
// /app/root/public/my/cool/file.pdf
```

[Full documentation](/doc/src/functions/path/document_root_path.md)

<a name="Thorin_normalize_path"></a>
## Thorin::normalize_path
Return a normalized version of the passed path.
1. Resolve all the ../
2. Replace backslashes with forwardslashes
3. Combine multiple slashes into a single slash
```php
$path = Thorin::normalize_path('hello/world/../universe');
// hello/universe
```

[Full documentation](/doc/src/functions/path/normalize_path.md)

<a name="Thorin_root_path"></a>
## Thorin::root_path
Return the document root path depending on the `path.document_root` config

```php
Thorin::root_path('my/cool/file.pdf');
// /app/root/public/my/cool/file.pdf
```

[Full documentation](/doc/src/functions/path/root_path.md)

<a name="Thorin_sanitize_path"></a>
## Thorin::sanitize_path
Sanitize a path for example like "/my/cool/../path/." to "/my/path/"
It will do these actions:
1. Normalize the path (resolve all ../, remove double slashed, etc...)
2. Remove a trailing "."
3. Make sure the path finish with a "/" if it's not a file


[Full documentation](/doc/src/functions/path/sanitize_path.md)
