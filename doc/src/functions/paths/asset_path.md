# asset_path

Return a path relative to the `paths.assets` config



### Parameters
Name  |  Type  |  Description  |  Status  |  Default
------------  |  ------------  |  ------------  |  ------------  |  ------------
$slug  |  **{ [String](http://php.net/manual/en/language.types.string.php) }**  |  The asset slug to get  |  required  |
$from_server_root  |  **{ [Boolean](http://php.net/manual/en/language.types.boolean.php) }**  |  If returned path need to be relative to the server root or to the 'paths.DOCUMENT_ROOT' config  |  optional  |  false

Return **{ [String](http://php.net/manual/en/language.types.string.php) }** The corresponding asset path like /dist/my-cool-file.jpg

Author : Olivier Bossel [olivier.bossel@gmail.com](mailto:olivier.bossel@gmail.com)