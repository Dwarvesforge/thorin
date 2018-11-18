# urls

- [Thorin::asset_url](#Thorin_asset_url)
- [Thorin::root_url](#Thorin_root_url)
- [Thorin::sanitize_url](#Thorin_sanitize_url)
<a name="Thorin_asset_url"></a>
## Thorin::asset_url
Return a url relative to the `paths.assets` and the `app.root_url` config


[Full documentation](/doc/src/functions/urls/asset_url.md)

<a name="Thorin_root_url"></a>
## Thorin::root_url
Return the root website url depending on the `app.root_url` config


[Full documentation](/doc/src/functions/urls/root_url.md)

<a name="Thorin_sanitize_url"></a>
## Thorin::sanitize_url
Return a sanitized version of the passed path. Here's the actions applied on the path:
- Ensure no double "/" in the path like http://my-domain.com/some//thing
- Apply the filter_var function withe the FILTER_SANITIZE_URL flag

[Full documentation](/doc/src/functions/urls/sanitize_url.md)
