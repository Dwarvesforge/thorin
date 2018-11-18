# paths

- [Thorin::app_path](#Thorin_app_path)
- [Thorin::asset_path](#Thorin_asset_path)
- [Thorin::base_path](#Thorin_base_path)
- [Thorin::document_root_path](#Thorin_document_root_path)
- [Thorin::normalize_path](#Thorin_normalize_path)
- [Thorin::root_path](#Thorin_root_path)
- [Thorin::sanitize_path](#Thorin_sanitize_path)
<a name="Thorin_app_path"></a>
## Thorin::app_path
Return the app path depending on the `paths.app` config


[Full documentation](/doc/src/functions/paths/t_app_path.md)

<a name="Thorin_asset_path"></a>
## Thorin::asset_path
Return a path relative to the `paths.assets` config


[Full documentation](/doc/src/functions/paths/t_asset_path.md)

<a name="Thorin_base_path"></a>
## Thorin::base_path
Return the base path depending on the `paths.base` config


[Full documentation](/doc/src/functions/paths/t_base_path.md)

<a name="Thorin_document_root_path"></a>
## Thorin::document_root_path
Return the document root path depending on the `paths.document_root` config


[Full documentation](/doc/src/functions/paths/t_document_root_path.md)

<a name="Thorin_normalize_path"></a>
## Thorin::normalize_path
Return a normalized version of the passed path.
1. Resolve all the ../
2. Replace backslashes with forwardslashes
3. Combine multiple slashes into a single slash
```php
$path = Thorin::normalize_path('hello/world/../universe');
```

[Full documentation](/doc/src/functions/paths/t_normalize_path.md)

<a name="Thorin_root_path"></a>
## Thorin::root_path
Return the document root path depending on the `paths.document_root` config


[Full documentation](/doc/src/functions/paths/t_root_path.md)

<a name="Thorin_sanitize_path"></a>
## Thorin::sanitize_path
Sanitize a path for example like "/my/cool/../path/." to "/my/path/"
It will do these actions:
1. Normalize the path (resolve all ../, remove double slashed, etc...)
2. Remove a trailing "."
3. Make sure the path finish with a "/" if it's not a file


[Full documentation](/doc/src/functions/paths/t_sanitize_path.md)
