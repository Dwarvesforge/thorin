# t_document_root_path

Return the root website url depending on the `paths.DOCUMENT_ROOT` config



### Parameters
Name  |  Type  |  Description  |  Status  |  Default
------------  |  ------------  |  ------------  |  ------------  |  ------------
$slug  |  **{ [String](http://php.net/manual/en/language.types.string.php) }**  |  An optional slug to add to the root url  |  required  |
$from_server_root  |  **{ [Boolean](http://php.net/manual/en/language.types.boolean.php) }**  |  If returned path need to be relative to the server root or to the `paths.DOCUMENT_ROOT` config  |  optional  |  false

Return **{ [String](http://php.net/manual/en/language.types.string.php) }** The corresponding root url

Author : Olivier Bossel [olivier.bossel@gmail.com](mailto:olivier.bossel@gmail.com)