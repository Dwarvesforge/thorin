# t_asset_url

Return a url relative to the `app.ASSETS_PATH` and the `app.ROOT_URL` config



### Parameters
Name  |  Type  |  Description  |  Status  |  Default
------------  |  ------------  |  ------------  |  ------------  |  ------------
$slug  |  **{ [String](http://php.net/manual/en/language.types.string.php) }**  |  The asset slug to get  |  required  |
$include_domain  |  **{ [Boolean](http://php.net/manual/en/language.types.boolean.php) }**  |  If want the fully qualified domain in the url  |  optional  |  false

Return **{ [String](http://php.net/manual/en/language.types.string.php) }** The corresponding asset url

Author : Olivier Bossel [olivier.bossel@gmail.com](mailto:olivier.bossel@gmail.com)